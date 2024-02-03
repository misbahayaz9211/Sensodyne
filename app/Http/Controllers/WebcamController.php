<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use Storage;
use GuzzleHttp\Client;

class WebcamController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('/webcam');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function store(Request $request)
    // {
    //     $img = $request->image;
    //     $folderPath = "uploads/";
        
    //     $image_parts = explode(";base64,", $img);
    //     $image_type_aux = explode("image/", $image_parts[0]);
    //     $image_type = $image_type_aux[1];
        
    //     $image_base64 = base64_decode($image_parts[1]);
    //     $fileName = uniqid() . '.png';
        
    //     $file = $folderPath . $fileName;
    //     Storage::put($file, $image_base64);
        
    //     dd('Image uploaded successfully: '.$fileName);
    // }
    
    
    public function store(Request $request)
    {
        $img = $request->image;
        $folderPath = "uploads/";
    
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
    
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';
    
        $file = $folderPath . $fileName;
        Storage::put($file, $image_base64);
    
        // Prepare API request data
        $apiUrl = 'http://kcs-staging.uaenorth.cloudapp.azure.com:8000/teeth/transformation';
        $contrast = 2.0;
        $brightness = 50;
        $prompt = "Renaissance-style portrait of an astronaut in space, detailed starry background, reflective helmet.";
     
        // Include image data URI with appropriate content type and base64 encoding
        $requestData = [
            'contrast' => $contrast,
            'brightness' => $brightness,
            'prompt' => $prompt,
            'image' => 'data:image/' . $image_type . ';base64,' . $image_parts[1],
        ];
       
        // Make API request using Guzzle
        $client = new Client();
        $response = $client->post($apiUrl, [
            'headers' => ['Content-Type' => 'application/json'],
            'json' => $requestData,
        ]);
    
    // Handle API response
    $apiResponse = json_decode($response->getBody(), true);

    // Access the images from the API response
    $afterImage = $apiResponse['images']['after'];
    $beforeImage = $apiResponse['images']['before'];
    $whiteningImage = $apiResponse['images']['whitening'];

    // Return the UI.results view with the image paths
    return view('UI.results',  compact('apiResponse'));
    }
    
}
