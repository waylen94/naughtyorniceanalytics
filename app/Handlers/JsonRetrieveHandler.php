<?php


namespace App\Handlers;
use GuzzleHttp\Client;


class JsonRetrieveHandler
{
    
    public function save($file_prefix)
    {

        $folder_name = "uploads/Json" ;
        $filename = $file_prefix . '.' . "json";
        $upload_path = public_path() . '/' . $folder_name . '/'. $filename;

        
        // retrieve the jason data , in the future the request file will be dynamic
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://144.6.225.24:8080/output/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        
        $response = $client->request('put','3ywO8GDrNGIKw2aWAjD3cvPLmKD.json');
        
        $body = $response->getBody();
        
        file_put_contents($upload_path, $body);
        
        //dealing with the statistics processing
        
//         return [
//             'path' => config('app.url') . "/$folder_name/$filename"
//         ];
    }
}