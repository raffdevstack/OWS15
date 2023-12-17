<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showDataPrivacyPolicy() {
        return view('data_privacy_stmt');
    }

    public function showTermsAndConditions() {
        return view('terms_conditions');
    }
}
