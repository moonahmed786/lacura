<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    $page_title = "Admin Dashboard";
    $user_logins = App\UserLogin::latest()->limit(50)->get();

    return view('admin.home', compact('page_title', 'user_logins'));
})->name('admin.home');
