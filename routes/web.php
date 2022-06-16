<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AppUserController;
use App\Http\Controllers\AppUser\ForgotPasswordController;
use App\Http\Controllers\AppUser\LoginController as AppLoginController;
use App\Http\Controllers\AppUser\RegisterController as AppRegisterController;
use App\Http\Controllers\AppUser\PaymentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Guest routes */

Route::middleware(['guest', 'category_menu_view'])
    ->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('welcome');
        Route::get('about', [HomeController::class, 'about'])->name('about');
        Route::get('contact', [HomeController::class, 'contact'])->name('contact');
        Route::post('contact', [HomeController::class, 'postContact'])->name('contact');
        Route::get('privacy', [HomeController::class, 'privacy'])->name('privacy');
        Route::get('terms', [HomeController::class, 'terms'])->name('terms');
        Route::get('category/{category}', [HomeController::class, 'category'])->name('category');
        Route::get('course/{course}', [HomeController::class, 'course'])->name('course');

        Route::get('admin', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('admin', [LoginController::class, 'login']);

        // App User Login
        Route::get('app/login', [AppLoginController::class, 'showLoginForm'])->name('app.login');
        Route::post('app/login', [AppLoginController::class, 'login'])->name('app.login');
        Route::get('app/register', [AppRegisterController::class, 'showRegistrationForm'])->name('app.register');
        Route::post('app/register', [AppRegisterController::class, 'register'])->name('app.register');
        Route::get('app/reset-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('app.reset-password');
        Route::post('app/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('app.password.email');
    });

/* App routes */
Route::middleware(['auth:app_users', 'category_menu_view'])
    ->prefix('app')
    ->as('app.')
    ->group(function () {
        Route::post('logout', [AppLoginController::class, 'logout'])->name('logout');
        Route::get('profile', [HomeController::class, 'profile'])->name('profile');
        // Route::put('purchase/course/{course}', [HomeController::class, 'purchaseCourse'])->name('purchase.course');

        Route::post('payment/{course}', [PaymentController::class, 'payment'])->name('payment');
        Route::get('payment/status', [PaymentController::class, 'status'])->name('payment.status');
        Route::get('course-purchase-form/{courseId}', [HomeController::class, 'renderCourseBuyModalForm'])->name('course-purchase-form');
        Route::post('verify-account', [HomeController::class, 'verifyAccount'])->name('verify-account');
    });


/* Admin routes */
Route::middleware('auth')
    ->as('admin.')
    ->prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');
        Route::put('/change-password', [DashboardController::class, 'changePassword'])->name('change-password');
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

        // courses
        Route::resource("/courses", 'CourseController', ['except' => ['create', 'store', 'show', 'destroy']]);

        // Categories
        Route::resource("/categories", 'CategoryController');

        // Users
        Route::get('/users', [AppUserController::class, 'users'])->name('users.index');

        // api
        Route::prefix('api')
            ->middleware('api')
            ->as('api.')
            ->group(function () {
                Route::post('moodle-courses', [CourseController::class, 'moodleCourses'])->name('moodle-courses');
                Route::put('clean-courses', [CourseController::class, 'cleanUpCourses'])->name('clean-courses');
                Route::post('moodle-users', [AppUserController::class, 'moodleUsers'])->name('moodle-users');
                Route::get('sales-chart-js-data/{filterBy}', [DashboardController::class, 'salesChartJsData'])->name('sales-chart-js-data');
            });
    });
