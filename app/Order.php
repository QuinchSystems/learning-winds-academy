<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Tzsk\Payu\Fragment\Payable;

class Order extends Model
{
    use Payable;

    const PAYMENT_COMPLETED = 'Completed';
    const PAYMENT_FAILED = 'Failed';

    protected $fillable = [
        'user_id',
        'course_id',
        'amount',
        'status',
        'phone',
        'payment_method',
        'txnid',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
