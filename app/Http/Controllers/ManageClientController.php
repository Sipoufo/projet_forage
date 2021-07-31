<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageClientController extends Controller
{
    // Dashboard of user
    public function dashboard(){

        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:4000/client/auth/dashboard',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization:'.$Authorization,
        ),
        ));

        $response = curl_exec($curl);
        $informations = json_decode($response, true);

        curl_close($curl);

        return view('Client/dashboard',['informations' => $informations, 'res' => $response]);
    }
    
    // setting of user
    public function setting(){

        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:4000/client/auth/getClientByToken',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization:'.$Authorization,
        ),
        ));

        $response = curl_exec($curl);
        $informations = json_decode($response, true);

        curl_close($curl);
        
        $get = curl_init();
        curl_setopt_array($get, array(
        CURLOPT_URL => 'http://localhost:4000/client/auth/update',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization:'.$Authorization,
        ),
        ));

        $getResponse = curl_exec($get);
        $getResponses = json_decode($getResponse, true);

        curl_close($get);
        
        return view('Client/user',['user' => $informations, 'get' => $getResponses]);
    }
}
