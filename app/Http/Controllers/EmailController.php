<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Postmark\PostmarkClient;

class EmailController extends Controller
{
    private $client;
    public function __construct()
    {
        $this->client = new PostmarkClient('dd3a9434-fae6-4fe4-a67c-e3579d36c637');
    }

    public function confirm()
    {
        echo $this->client;
    }
}
