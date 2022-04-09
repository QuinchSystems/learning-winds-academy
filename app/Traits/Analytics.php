<?php

namespace App\Traits;

use App\Course;
use App\Order;
use Illuminate\Http\Request;
use Tzsk\Payu\Model\PayuPayment;

/**
 * Trait Analytics
 */
trait Analytics
{
    private function getCourseVsStudentChartJsData()
    {
        // get all courses id and name
        $courses = Course::select(['id', 'display_name'])->withCount('app_users')->get();
        return $this->getBarChartData(
            $courses->pluck('display_name'),
            "Students",
            $courses->pluck('app_users_count')
        );
    }

    private function getBarChartData($labels, $label, $data) {
        return [
            "labels" => $labels,
            "datasets" => [
                [
                    "label" => $label,
                    "data" => $data,
                    "borderColor" => 'rgba(255, 99, 132, 1)',
                    "backgroundColor" => 'rgba(255, 99, 132, 0.2)',
                ]
            ]
        ];
    }

    private function revenue()
    {
        // daily, weekly and monthly sales
        return [
            "daily" => PayuPayment::where('status', Order::PAYMENT_COMPLETED)
                ->where('created_at', '>=', date('Y-m-d 00:00:00'))
                ->sum('amount'),
            "weekly" => PayuPayment::where('status', Order::PAYMENT_COMPLETED)
                ->where('created_at', '>=', date('Y-m-d 00:00:00', strtotime('-7 days')))
                ->sum('amount'),
            "monthly" => PayuPayment::where('status', Order::PAYMENT_COMPLETED)
                ->where('created_at', '>=', date('Y-m-d 00:00:00', strtotime('-30 days')))
                ->sum('amount')
        ];
    }

    private function coursePurchases()
    {
        // daily, weekly and monthly course purchases
        return [
            'daily' => Order::whereHas('payments', function ($query) {
                $query->where('status', Order::PAYMENT_COMPLETED);
            })
                ->where('created_at', '>=', date('Y-m-d 00:00:00'))
                ->count(),
            'weekly' => Order::whereHas('payments', function ($query) {
                $query->where('status', Order::PAYMENT_COMPLETED);
            })
                ->where('created_at', '>=', date('Y-m-d 00:00:00', strtotime('-7 days')))
                ->count(),
            'monthly' => Order::whereHas('payments', function ($query) {
                $query->where('status', Order::PAYMENT_COMPLETED);
            })
                ->where('created_at', '>=', date('Y-m-d 00:00:00', strtotime('-30 days')))
                ->count()
        ];
    }

    private function getLineChartData($labels, $data) {
        return [
            "labels" => $labels,
            "datasets" => [
                [
                    "label" => "Daily Sales",
                    "data" => $data,
                    "fill" => false,
                    "borderColor" => 'rgba(255, 99, 132, 1)',
                    "tension" => 0.1
                ]
            ]
        ];
    }

    private function getDailySalesChartData()
    {
        $labels = [
            date('00:00:00'),
            date('04:00:00'),
            date('08:00:00'),
            date('12:00:00'),
            date('16:00:00'),
            date('20:00:00'),
        ];

        $data = [];

        foreach ($labels as $label) {
            $data[] = PayuPayment::where('status', Order::PAYMENT_COMPLETED)
                ->where('created_at', '>=', date('Y-m-d ' . $label))
                ->where('created_at', '<=', date('Y-m-d ' . $label, strtotime('+1 day')))
                ->sum('amount');
        }

        return $this->getLineChartData($labels, $data);
    }

    private function getWeeklySalesChartData() {
        $labels = [
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
        ];

        $data = [];

        foreach ($labels as $label) {
            $data[] = PayuPayment::where('status', Order::PAYMENT_COMPLETED)
                ->where('created_at', '>=', date('Y-m-d 00:00:00', strtotime('last ' . $label)))
                ->where('created_at', '<=', date('Y-m-d 00:00:00', strtotime('next ' . $label)))
                ->sum('amount');
        }

        return $this->getLineChartData($labels, $data);
    }

    private function getMonthlySalesChartData() {
        $labels = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ];

        $data = [];

        foreach ($labels as $label) {
            $data[] = PayuPayment::where('status', Order::PAYMENT_COMPLETED)
                ->where('created_at', '>=', date('Y-m-01 00:00:00', strtotime($label)))
                ->where('created_at', '<=', date('Y-m-t 23:59:59', strtotime($label)))
                ->sum('amount');
        }

        return $this->getLineChartData($labels, $data);
    }
}
