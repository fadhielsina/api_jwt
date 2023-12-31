<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConncetionController extends Controller
{
    function index()
    {
        // URL
        $apiURL = 'http://94.74.86.174:8080/api/login';

        // POST Data
        $postInput = [
            'password' => 'testing123',
            'username' => "sinafadhiel"
        ];

        // Headers
        $headers = [
            //...
        ];

        $response = Http::withHeaders($headers)->post($apiURL, $postInput);

        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        echo $statusCode;  // status code

        dd($responseBody); // body response
    }

    function register()
    {
        // URL
        $apiURL = 'http://94.74.86.174:8080/api/register';

        // POST Data
        $postInput = [
            'email' => 'sinafadhiel@gmail.com',
            'password' => 'testing123',
            'username' => "sinafadhiel"
        ];

        // Headers
        $headers = [
            //...
        ];

        $response = Http::withHeaders($headers)->post($apiURL, $postInput);

        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        echo $statusCode;  // status code

        dd($responseBody); // body response
    }
}
