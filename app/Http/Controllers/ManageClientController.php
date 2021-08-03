<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

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
        CURLOPT_URL => 'http://localhost:4000/client/auth/get/getClientByToken',
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
        
        return view('Client/user',['data' => $informations['result']]);
    }
    
    // setting of user
    public function invoicePaid(){

        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:4000/client/facture/getFactureWithMonth/true',
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

        return view('Client/paidInvoices',['data' => $informations]);
    }
    
    // budget of user
    public function budget(){

        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:4000/client/facture/factureClientWithDate',
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
        $response = json_encode($informations['result']);
        curl_close($curl);

        return view('Client/budget',['data' => $response]);
    }
    
    public function budget_detail(){

        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:4000/client/facture',
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

        return view('Client/budget_detail',['data' => $informations]);
    }
    
    public function invoiceUnpaid(){

        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:4000/client/facture/getFactureWithMonth/false',
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

        return view('Client/unpaidInvoices',['data' => $informations]);
    }
    
    // setting of user
    public function updateUser(){

        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:4000/client/auth/get/getClientByToken',
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
        
        return view('Client/update',['user' => $informations]);
    }

    public function update(Request $request){

        $validator = Validator::make($request->all(), [
            'name' =>  'bail|required',
            'email' => 'bail|required|email',
            'phone' => 'bail|required|digits:9',
            'password' => 'nullable|regex:/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,15}$/',
            'confirmpassword' => 'nullable|same:password',
            'photo' => 'bail|image|mimes:jpeg,jpg,png|max:5000',
            ],

            $messages = [
                'required' => 'The :attribute is required',
                'phone.digits' => '9 digits needed',
                'confirmpassword.same' => 'Confirm your password',
                'password.regex' => 'Between 8 and 15 characters - Minimum one uppercase letter and one number digit - Minimum one special character !@#$%^&*-',
                'photo.mimes' => 'Only jpeg,jpg,png formats accepted',
                'photo.max' => 'The :attribute must not sized over 5Mo',
            ]
        );
 
        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput();

        }else{

            if($request->file()) {
                $photo =  $request->file('photo')->getClientOriginalName();
                $photoPath = $request->photo->storeAs('/customers',$photo);   
            }else{
                $photo = "";
                $photoPath = Session::get('photo');
            }


            $name = $request->input('name');
            $birthdate = $request->input('birthdate');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $password = md5(sha1($request->input('password')));
            $home = $request->input('description');
            $identifier = $request->input('identifier');
            

            $url = "http://localhost:4000/client/auth/update";
            $alltoken = $_COOKIE['token'];
            $alltokentab = explode(';', $alltoken);
            $token = $alltokentab[0];
            $tokentab = explode('=',$token);
            $tokenVal = $tokentab[1];
            $Authorization = 'Bearer '.$tokenVal;

            
            $data = array(
                'name' => $name,
                'birthday' => $birthdate,
                'phone' => $phone,
                'password' => $password,
                'email' => $email,
                "profileImage" => $photoPath,
                "description" => $home,
            );
            $data_json = json_encode($data);

            //print_r($data_json);
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
             //curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response  = curl_exec($ch);
            curl_close($ch); 

            $response = json_decode($response);

            // print_r($response);
            
            if ($response->status == 200){
                $request->session()->put('name',$name);
                $request->session()->put('photo',$photoPath);
                Session::flash('message', 'Action Successfully done!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->back();
                
            }else{
                Session::flash('message', ucfirst($response->error));
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        }
        
    }
    
    public function paidFac(Request $request){

            $modalId = $request->input('modalId');
            $montant = $request->input('montant');
            

            $url = "http://localhost:4000/client/facture/paid/".$modalId;
            echo $url;
            $alltoken = $_COOKIE['token'];
            $alltokentab = explode(';', $alltoken);
            $token = $alltokentab[0];
            $tokentab = explode('=',$token);
            $tokenVal = $tokentab[1];
            $Authorization = 'Bearer '.$tokenVal;

            
            $data = array(
                'montant' => $montant,
            );
            $data_json = json_encode($data);

            //print_r($data_json);
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
             //curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response  = curl_exec($ch);
            curl_close($ch); 

            $response = json_decode($response);

            // print_r($response);
            
            if ($response->status == 200){
                Session::flash('message', 'Action Successfully done!');
                Session::flash('alert-class', 'alert-success');
                return redirect()->back();
                
            }else{
                Session::flash('message', ucfirst($response->error));
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back();
            }
        
    }
}