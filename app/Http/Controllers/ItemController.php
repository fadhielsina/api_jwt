<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ItemController extends Controller
{
    function get_all($id)
    {
        // URL
        $apiURL = '94.74.86.174:8080/api/checklist/' . $id . '/item';

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

    function create_item($id)
    {

        // URL
        $apiURL = '94.74.86.174:8080/api/checklist/' . $id . '/item';

        // POST Data
        $postInput = [
            'itemName' => 'Produk 2.2'
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
}
