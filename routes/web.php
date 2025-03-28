<?php

use Illuminate\Support\Facades\Route;

//Main Route

Route::get('/', function () {
    return view('ConductorPage');
});


//Setting Routes

Route::get('settings', function () {
    return view('settings');
});

Route::get('/settings-TermsAndPolicies', function () {
    return view('settings-TermsAndPolicies');
});

Route::get('/settings-SwitchAccount', function () {
    return view('settings-SwitchAccount');
});

Route::get('/settings-SecurityAndPermission', function () {
    return view('settings-SecurityAndPermission');
});

Route::get('/settings-PersonalDetails', function () {
    return view('settings-PersonalDetails');
});

Route::get('/settings-LogOut', function () {
    return view('settings-LogOut');
});

Route::get('/settings-DisplayAndAccessibility', function () {
    return view('settings-DisplayAndAccessibility');
});


//Signin/Signup/

Route::get('/SignIn', function () {
    return view('SignIn');
});

Route::get('/SignUp', function () {
    return view('SignUp');
});


//admin
Route::get('/admin-home', function () {
    return view('admin.admin-home');
});

Route::get('/admin-forgotpassword', function () {
    return view('admin.admin-forgotpassword');
});

Route::get('/admin-adminsignup', function () {
    return view('admin.admin-adminsignup');
});

Route::get('/admin-adminlogin', function () {
    return view('admin.admin-adminlogin');
});
