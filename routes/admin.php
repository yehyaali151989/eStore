<?php

use Illuminate\Support\Facades\Route;


Route::get('admin/test', function () {
    return view('admin.pages.dashboard');
});

Route::get('admin/login', function () {
    return view('admin.pages.login');
});