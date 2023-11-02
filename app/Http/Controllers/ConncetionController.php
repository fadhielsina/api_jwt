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

    function get_all()
    {
        // URL
        $apiURL = '94.74.86.174:8080/api/checklist';

        // POST Data
        $postInput = [];

        // Headers
        $headers = [
            'Authorization' => 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJyb2xlcyI6W119.i2OVQdxr08dmIqwP7cWOJk5Ye4fySFUqofl-w6FKbm4EwXTStfm0u-sGhDvDVUqNG8Cc7STtUJlawVAP057Jlg'
        ];

        $response = Http::withHeaders($headers)->get($apiURL);

        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        echo $statusCode;  // status code

        dd($responseBody); // body response
    }

    function create_checklist()
    {

        // URL
        $apiURL = '94.74.86.174:8080/api/checklist';

        // POST Data
        $postInput = [
            'name' => 'Checklist 4'
        ];

        // Headers
        $headers = [
            'Authorization' => 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJyb2xlcyI6W119.i2OVQdxr08dmIqwP7cWOJk5Ye4fySFUqofl-w6FKbm4EwXTStfm0u-sGhDvDVUqNG8Cc7STtUJlawVAP057Jlg'
        ];

        $response = Http::withHeaders($headers)->post($apiURL, $postInput);

        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        echo $statusCode;  // status code

        dd($responseBody); // body response
    }

    function delete_checklist($id)
    {
        // URL
        $apiURL = '94.74.86.174:8080/api/checklist/' . $id . '';

        // POST Data
        $postInput = [];

        // Headers
        $headers = [
            'Authorization' => 'Bearer eyJhbGciOiJIUzUxMiJ9.eyJyb2xlcyI6W119.i2OVQdxr08dmIqwP7cWOJk5Ye4fySFUqofl-w6FKbm4EwXTStfm0u-sGhDvDVUqNG8Cc7STtUJlawVAP057Jlg'
        ];

        $response = Http::withHeaders($headers)->delete($apiURL);

        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        echo $statusCode;  // status code

        dd($responseBody); // body response
    }
}
