<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        /*$email = new EmailController();
        $email->confirm();
        print_r($email->confirm());*/
        return view('test.index');
    }

}
