<?php

namespace App\Http\Controllers;

use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDF;

class AdminController extends Controller{
	
    public function adminConsumption(){
    	return view('admin/consumption');
    }

    public function adminStatus(){
        $url = "http://localhost:4000/admin/facture/".date("Y")."/".date("m")."/100/1";
        // $url = "http://localhost:4000/facture/".date("m")."/".date("Y")."/100/1";
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $invoice = json_decode($response,true);
        // echo $url;
        // print_r($response);
        $client = array();
        $lengthPaid = count($invoice['result']);
        for ($i=0; $i < $lengthPaid; $i++) { 
            $curl2 = curl_init();
            curl_setopt_array($curl2, array(
                CURLOPT_URL => 'http://localhost:4000/client/auth/'.$invoice['result'][$i]['idClient'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array('Authorization: '.$Authorization),
            ));
            $response2 = curl_exec($curl2);
            curl_close($curl2);
            $result = json_decode($response2, true);
            array_push($client, $result['result']);
        }
    	return view('admin/status', ['invoice' => $invoice, 'client' => $client]);
    }

    public function adminChat(){
    	return view('admin/chat');
    }

    public function manageProducts(){

        $url = "http://localhost:4000/stock/type";
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response,true);

        $result = $response['result'];

        return view('admin/manageProducts',['data' => $result]);
    	
    }

    public function productsType(){

        $url = "http://localhost:4000/stock/type";
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response,true);

        return view('admin/productsType',['data' => $response]);

    }
    
    public function createType(Request $request){
        
        $type = $request->input('type');

        $url = "http://localhost:4000/stock/type";

        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;

        $data = array(
            'name' => $type,
        );
        $data_json = json_encode($data);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($ch);
        curl_close($ch); 

        $data = json_decode($response,true);

        if($data['status'] == 200){
            Session::flash('message', 'Action Successfully done!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
        }else{
            Session::flash('message', ucfirst($response->error));
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
    }

    public function storeProduct(Request $request){
    	
        $validator = Validator::make($request->all(), [
            'name' =>  'bail|required',
            'quantity' => 'bail|required',
            'unitprice' => 'bail|required',
            'description' => 'bail|required',
            'image' => 'bail|required|image|mimes:jpeg,jpg,png|max:2000',
            ],

            $messages = [
                'required' => 'The :attribute is required',
                'image.mimes' => 'Only jpeg,jpg,png formats accepted',
                'image.max' => 'The :attribute must not sized over 2Mo',
            ],
        );
 
        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput();

        }else{

            $name = $request->input('name');
            $type = $request->input('type');
            $quantity = $request->input('quantity');
            $unitprice = $request->input('unitprice');
            $description = $request->input('description');

            $photo =  $request->file('image')->getClientOriginalName();
            $photoPath = $request->image->storeAs('/products',$photo); 

            $url = "http://localhost:4000/stock/";
            $alltoken = $_COOKIE['token'];
            $alltokentab = explode(';', $alltoken);
            $token = $alltokentab[0];
            $tokentab = explode('=',$token);
            $tokenVal = $tokentab[1];
            $Authorization = 'Bearer '.$tokenVal;

            $data = array(
                'name' => $name,
                'type' => $type,
                'prixUnit' => $unitprice,
                'quantity' => $quantity,
                "description" => $description,
                "picture" => $photoPath,
            );
            $data_json = json_encode($data);

            // print_r($data_json);
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
            curl_setopt($ch, CURLOPT_POST, 1);
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

    public function adminRemove(){

        $url = "http://localhost:4000/stock/getAll";

        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;

        $data = array(
            'page' => 1,
            'limit' => 0,
        );
        $data_json = json_encode($data);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($ch);
        curl_close($ch); 

        $response = json_decode($response,true);

        $data= $response['result']['docs'];

        return view('admin/remove',['materials' => $data]);
    
    }

    public function removeProduct(Request $request){

        $product = $request->input('name');
        $quantity = $request->input('quantity');

        $url = "http://localhost:4000/stock/type";
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;

        $data = array(
            'name' => $product,
            'quantity' => $quantity,
        );

        $data_json = json_encode($data);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($ch);
        curl_close($ch); 

        $response = json_decode($response);
        
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

    public function deleteType($id){
    	
        $url = "http://localhost:4000/stock/type/".$id;
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
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

    public function viewTypeStock(Request $request){

        $type = $request->input('type');

        if($type == "all"){

            $id = 1;
            return redirect()->route('viewStock',[$id]);

        }else{

            $alltoken = $_COOKIE['token'];
            $alltokentab = explode(';', $alltoken);
            $token = $alltokentab[0];
            $tokentab = explode('=',$token);
            $tokenVal = $tokentab[1];
            $Authorization = 'Bearer '.$tokenVal;

            $url = "http://localhost:4000/stock/type";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
            $response = json_decode($response,true);
            $types = $response['result'];


            $url1 = "http://localhost:4000/stock/getByType";
            $data1 = array(
                'page' => 1,
                'limit' => 0,
                'type' => $type,
            );
            $data_json1 = json_encode($data1);
            
            $ch1 = curl_init();
            curl_setopt($ch1, CURLOPT_URL, $url1);
            curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
            curl_setopt($ch1, CURLOPT_POST, 1);
            curl_setopt($ch1, CURLOPT_POSTFIELDS,$data_json1);
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
            $response1  = curl_exec($ch1);
            curl_close($ch1); 

            $data1 = json_decode($response1,true);

            return view('admin/stock',['typeMaterials' => $data1, 'types' => $types, 'nametype' => $type]);

            }
    }

    public function viewStock($id){

        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;

        $url = "http://localhost:4000/stock/type";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response,true);
        $types = $response['result'];


        $url1 = "http://localhost:4000/stock/getAll";
        $data = array(
            'page' => $id,
            'limit' => 5,
        );
        $data_json = json_encode($data);
        $ch1 = curl_init();
        curl_setopt($ch1, CURLOPT_URL, $url1);
        curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
        curl_setopt($ch1, CURLOPT_POST, 1);
        curl_setopt($ch1, CURLOPT_POSTFIELDS,$data_json);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $response1  = curl_exec($ch1);
        curl_close($ch1); 

        $data = json_decode($response1,true);

        return view('admin/stock',['materials' => $data, 'types' => $types]);
    }


    public function updateProduct(Request $request){

        $validator = Validator::make($request->all(), [
            'name' =>  'bail|required',
            'quantity' => 'bail|required',
            'unitprice' => 'bail|required',
            'description' => 'bail|required',
            'image' => 'bail|image|mimes:jpeg,jpg,png|max:2000',
            ],

            $messages = [
                'required' => 'The :attribute is required',
                'image.mimes' => 'Only jpeg,jpg,png formats accepted',
                'image.max' => 'The :attribute must not sized over 2Mo',
            ],
        );
 
        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput();

        }else{

            if($request->file()) {
                $photo =  $request->file('image')->getClientOriginalName();
                $photoPath = $request->image->storeAs('/products',$photo);    
            }else{
                $photo = "";
                $photoPath = $request->input('oldimage') ;   
            }

            $name = $request->input('name');
            $type = $request->input('type');
            $quantity = $request->input('quantity');
            $unitprice = $request->input('unitprice');
            $description = $request->input('description');

            $id = $request->input('id');

            $url = "http://localhost:4000/stock/".$id;
            $alltoken = $_COOKIE['token'];
            $alltokentab = explode(';', $alltoken);
            $token = $alltokentab[0];
            $tokentab = explode('=',$token);
            $tokenVal = $tokentab[1];
            $Authorization = 'Bearer '.$tokenVal;

            $data = array(
                'name' => $name,
                'type' => $type,
                'prixUnit' => $unitprice,
                'quantity' => $quantity,
                "description" => $description,
                "picture" => $photoPath,
            );
            $data_json = json_encode($data);

            // print_r($data_json);
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
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

    public function adminClauses(){
    	return view('admin/adminClauses');
    }

    public function adminProfile(Request $request){

        $id = $request->session()->get('id');

        $url = "http://localhost:4000/admin/auth/".$id;
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response,true);
        // echo $url;
        // print_r($response);
        $userdata = $response['result'];
        return view('admin/profile',['data' => $userdata]);
    }

    public function adminEditProfile(Request $request){

        $id = $request->session()->get('id');

        $url = "http://localhost:4000/admin/auth/".$id;
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response,true);
        $userdata = $response['result'];

        return view('admin/editProfile',['data' => $userdata]);
    }

    public function updateAdmin(Request $request){

        $validator = Validator::make($request->all(), [
            'name' =>  'bail|required',
            'email' => 'bail|required|email',
            'phone' => 'bail|required|digits:9',
            'password' => 'bail|required|regex:/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,15}$/',
            'confirmpassword' => 'bail|required|same:password',
            'photo' => 'bail|image|mimes:jpeg,jpg,png|max:2000',
            ],

            $messages = [
                'required' => 'The :attribute is required',
                'phone.digits' => '9 digits needed',
                'confirmpassword.same' => 'Confirm your password',
                'password.regex' => 'Between 8 and 15 characters - Minimum one uppercase letter and one number digit - Minimum one special character !@#$%^&*-',
                'photo.mimes' => 'Only jpeg,jpg,png formats accepted',
                'photo.max' => 'The :attribute must not sized over 2Mo',
            ]
        );
 
        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput();

        }else{

            if($request->file()) {
                $photo =  $request->file('photo')->getClientOriginalName();
                $photoPath = $request->photo->storeAs('/administrators',$photo);   
            }else{
                $photo = "";
                if(Session::has('photo')){
                    $photoPath = Session::get('photo');
                }else{
                    $photoPath = "administrators/leopard.jpg";
                }
            }


            $name = $request->input('name');
            $birthdate = $request->input('birthdate');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $password = md5(sha1($request->input('password')));
            $home = $request->input('home');
            $longitude = $request->input('lng');
            $latitude = $request->input('lat');
            

            $url = "http://localhost:4000/admin/auth/update";
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
                "longitude" => $longitude,
                "latitude" => $latitude,
            );
            $data_json = json_encode($data);

            // print_r($data_json);
            
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

    //All Invoice that the admin have
    public function allInvoices()
    {
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:4000/admin/facture/2021/08/20/1',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array('Authorization: '.$Authorization),
        ));
        
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
    
        $i=0;
        $invoices = array();

        foreach($response as $key => $value){
            if($i >= 1){
                //echo $value;
                $invoices = $value;
                //dump($value);
            }
            $i = $i + 1;
            //dump($key);
        }

        if (gettype($invoices) != "array") {
        //    echo "je t'aime";
            $invoices = array();
        }

        //dump($invoices);

        $client = array();

        foreach($invoices as $invoice){

            $idClient = $invoice  -> idClient;
            //echo $idClient;
            $url = curl_init();
            curl_setopt_array($url, array(
                CURLOPT_URL => 'http://localhost:4000/client/auth/'.$idClient,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array('Authorization: '.$Authorization),
            ));
            
            $response = curl_exec($url);
            $response = json_decode($response);
        
            $i=0;

            foreach($response as $key => $value){
                if($i >= 1){
                    //echo $value;
                    //$client = $value;
                    array_push($client,$value);
                    //dump($value);
                }
                $i = $i + 1;
                //dump($key);
            }
        
            //dump($client);
            curl_close($url);
        }
        return view('admin/consumption',['invoices' => $invoices, 'client' => $client]);
        //return view('admin/facture',['invoices' => $invoices]);
    }

    public function print($invoice_id){
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:4000/admin/facture/one/'.$invoice_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array('Authorization: '.$Authorization),
        ));
        
        $response = curl_exec($curl);
        curl_close($curl);
        $invoice = json_decode($response, true);

        // print_r($invoice['result']);

        $curl2 = curl_init();
        curl_setopt_array($curl2, array(
            CURLOPT_URL => 'http://localhost:4000/client/auth/'.$invoice['result']['idClient'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array('Authorization: '.$Authorization),
        ));
        $response2 = curl_exec($curl2);
        curl_close($curl2);
        $client = json_decode($response2, true);
        
        $curl3 = curl_init();
        curl_setopt_array($curl3, array(
            CURLOPT_URL => 'http://localhost:4000/admin/auth/'.$invoice['result']['idAdmin'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array('Authorization: '.$Authorization),
        ));
        $response3 = curl_exec($curl3);
        curl_close($curl3);
        $admin = json_decode($response3, true);

        echo($admin['result']['phone']);
        
        $pdf = PDF::loadView('facturePdf/generator', ['invoice' => $invoice, 'client' => $client, 'admin' => $admin]);
        
        return $pdf->download('facture-'. $client['result']['name'].'-'.date('F').'.pdf');
        // return view('facturePdf/generator',['invoice' => $invoice, 'client' => $client, 'admin' => $admin]);
    }

    public function detailInvoive($invoice_id){
        //echo "v ".$invoice_id;
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:4000/admin/facture/one/'.$invoice_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array('Authorization: '.$Authorization),
        ));
        
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
    
        $i=0;
        $invoice = array();

        foreach($response as $key => $value){
            if($i >= 1){
                //echo $value;
                //array_push($invoice,$value);
                $invoice = $value;
                //dump($value);
            }
            $i = $i + 1;
            //dump($key);
        }

        if (gettype($invoice) != "array" && gettype($invoice) != "object") {
        //    echo "je t'aime";
            $invoice = array();
        }

        //dump($invoice);

        if ($invoice -> idClient != null)
        {
            $client = array();

            $idClient = $invoice -> idClient;
            //echo $idClient;
            $url = curl_init();
            curl_setopt_array($url, array(
                CURLOPT_URL => 'http://localhost:4000/client/auth/'.$idClient,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array('Authorization: '.$Authorization),
            ));
            
            $response = curl_exec($url);
            $response = json_decode($response);
        
            $i=0;

            foreach($response as $key => $value){
                if($i >= 1){
                    //echo $value;
                    $client = $value;
                }
                $i = $i + 1;
                //dump($key);
            }

            //dump($client);
            curl_close($url);
        }
        return view('admin/detailInvoice',
            [
                'invoice' => $invoice, 
                'client' => $client
            ]
        );
    }

    //All Invoice that the admin have
    public function allInvoicesThatHaveAdvenced()
    {
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:4000/admin/facture/getFactureAd',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array('Authorization: '.$Authorization),
        ));
        
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
    
        $i=0;
        $invoicesAdvenced = array();

        foreach($response as $key => $value){
            if($i >= 1){
                //echo $value;
                $invoicesAdvenced = $value;
                //dump($value);
            }
            $i = $i + 1;
            //dump($key);
        }

        if (gettype($invoicesAdvenced) != "array") {
            echo "je t'aime";
            $invoicesAdvenced = array();
        }

        //dump($users);
        //return view('admin/dashboard',['invoices' => $invoicesAdvenced]);
    }

    //Function about invoice
    public function allInvoicesByClient()
    {
        $idClient = $_POST['idClient'];
        
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:4000/admin/facture/'.$idClient,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array('Authorization: '.$Authorization),
        ));
        
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
    
        $i=0;
        $invoices = array();

        foreach($response as $key => $value){
            if($i >= 1){
                //echo $value;
                $invoices = $value;
                //dump($value);
            }
            $i = $i + 1;
            //dump($key);
        }

        //dump($users);
        return view('client/consumption',['invoices' => $invoices]);

        //return view('client/consumption',['invoices' => $invoices]);
    }

    //finish to paid invoice
    public function finishToPaidInvoice($invoice_id)
    {
        echo " v ".$invoice_id;
        // je definie l'url de connexion.
/*        $url = "http://localhost:4000/admin/facture/statusPaidFacture/".$invoice_id;
        // je definie la donnée de ma facture.
        $facture = array(
            'status' => true
        );
        
        // j'encode cette donnée là'.
        $data_json = json_encode($facture);

        // Initialisez une session CURL.
        $ch = curl_init();

        
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;

        // Je definie les propriétés de connexion
        //CURLOPT_URL : permet de definir l'url
        curl_setopt($ch, CURLOPT_URL, $url);

        /*
            on renseignement l'option "CURLOPT_HEADER" avec "true" comme valeur
            pour inclure l'en-tête dans la réponse
        */
/*        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));

        //CURLOPT_POST : si la requête doit utiliser le protocole POST pour sa résolution (boolean)
        curl_setopt($ch, CURLOPT_PUT, 1);
        
        //j'insere la donnée à etre envoyé
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
        //enfin d'avoir un retour sur l'etat de la requette on a CURLOPT_RETURNTRANSFER = true
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($ch);
        var_dump($response);
        curl_close($ch);

        echo "ok";*/
    }

    //finish to paid invoice
    public function updateInvoice($invoice_id)
    {
        echo " v ".$invoice_id;
        if(isset($_POST['connect']))
        {
            // je definie l'url de connexion.
            $url = "http://localhost:4000/admin/facture/one/".$invoice_id;

            $alltoken = $_COOKIE['token'];
            $alltokentab = explode(';', $alltoken);
            $token = $alltokentab[0];
            $tokentab = explode('=',$token);
            $tokenVal = $tokentab[1];
            $Authorization = 'Bearer '.$tokenVal;

            $newIndex = $_POST['newIndex'];
            $penalty = $_POST['penalty'];
            $observation = $_POST['observation'];
            $dateSpicy = $_POST['dateSpicy'];
            $amountPaid = $_POST['amountPaid'];
            
            // je definie la donnée de ma facture.
            $facture = array(
                "newIndex"  => $newIndex,
                "observation" => $observation,
                "penalite"  => $penalty,
                "montantVerse"  => $amountPaid,
                "dateReleveNewIndex"  => $dateSpicy
            );

            // j'encode cette donnée là'.
            $data_json = json_encode($facture);

            // Initialisez une session CURL.
            $ch = curl_init();

            // Je definie les propriétés de connexion
            //CURLOPT_URL : permet de definir l'url
            curl_setopt($ch, CURLOPT_URL, $url);

            /*
                on renseignement l'option "CURLOPT_HEADER" avec "true" comme valeur
                pour inclure l'en-tête dans la réponse
            */
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));

            //CURLOPT_POST : si la requête doit utiliser le protocole POST pour sa résolution (boolean)
            curl_setopt($ch, CURLOPT_PUT, 1);
            
            //j'insere la donnée à etre envoyé
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
            //enfin d'avoir un retour sur l'etat de la requette on a CURLOPT_RETURNTRANSFER = true
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response  = curl_exec($ch);
            var_dump($response);
            curl_close($ch);

            $messageErr = null;
            $messageOK = null;

            $response = json_decode($response);

            if ($response->status == 200){
                $messageOK = "Action Done Successfully";
            }else{
                $messageErr = ucfirst($response->error);
            }

            echo "ok";
        }
    }

    public function allClient()
    {
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:4000/admin/auth/getClient',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array('Authorization: '.$Authorization),
        ));
        
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
    
        $i=0;
        $users = array();

        foreach($response as $key => $value){
            if($i >= 1){
                //echo $value;
                $users = $value;
                //dump($value);
            }
            $i = $i + 1;
            //dump($key);
        }

        //dump($users);
        if (gettype($users) != "array") {
        //    echo "je t'aime";
            $users = array();
        }
        //dump($users);
        return view('admin/facture',['users' => $users]);
    }

    public function addInvoice()
    {
        if(isset($_POST['connect']))
        {
            $alltoken = $_COOKIE['token'];
            $alltokentab = explode(';', $alltoken);
            $token = $alltokentab[0];
            $tokentab = explode('=',$token);
            $tokenVal = $tokentab[1];
            $Authorization = 'Bearer '.$tokenVal;

            $newIndex = $_POST['newIndex'];
            $penalty = $_POST['penalty'];
            $observation = $_POST['observation'];
            $dateSpicy = $_POST['dateSpicy'];
            $dataPaid = $_POST['dataPaid'];
            $idClient = $_POST['idClient'];
            $amountPaid = $_POST['amountPaid'];
            $oldIndex = $_POST['oldIndex'];
            // echo $idClient;

            // je definie l'url de connexion.
            $url = "http://localhost:4000/admin/facture/".$idClient;
            // je definie la donnée de ma facture.
            $facture = array(
                'newIndex' => $newIndex,
                'observation' => $observation,
                'penalite' => $penalty,
                'dataPaid' => $dataPaid,
                'montantVerse' => $amountPaid,
                'dateReleveNewIndex' => $dateSpicy,
                'oldIndex' => $oldIndex,
            );

            // j'encode cette donnée là'.
            $data_json = json_encode($facture);
            //var_dump($data_json);
            // Initialisez une session CURL.
            $ch = curl_init();

            // Je definie les propriétés de connexion
            //CURLOPT_URL : permet de definir l'url
            curl_setopt($ch, CURLOPT_URL, $url);

            /*
                on renseignement l'option "CURLOPT_HEADER" avec "true" comme valeur
                pour inclure l'en-tête dans la réponse
            */
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));

            //CURLOPT_POST : si la requête doit utiliser le protocole POST pour sa résolution (boolean)
            curl_setopt($ch, CURLOPT_POST, 1);
            
            //j'insere la donnée à etre envoyé
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
            //enfin d'avoir un retour sur l'etat de la requette on a CURLOPT_RETURNTRANSFER = true
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response  = curl_exec($ch);
            //var_dump($response);
            curl_close($ch);

            $messageErr = null;
            $messageOK = null;

            $response = json_decode($response);

            if ($response->status == 200){
                $messageOK = "Action Done Successfully";
            }else{
                $messageErr = ucfirst($response->error);
            }


            $curl = curl_init();
        
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://localhost:4000/admin/auth/getClient',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array('Authorization: '.$Authorization),
            ));
            
            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);
        
            $i=0;
            $users = array();
    
            foreach($response as $key => $value){
                if($i >= 1){
                    //echo $value;
                    $users = $value;
                    //dump($value);
                }
                $i = $i + 1;
                //dump($key);
            }

            return view('admin/facture',['users' => $users,'messageOK' => $messageOK,'messageErr' => $messageErr]);
        }
    }

    //Paginator

    public function index()
    {
        $posts = $this->postRepository->getActiveOrderByDate($this->nbrPages);
        return view('admin/consumption', compact('posts'));
    }

    protected function queryActiveOrderByDate()
    {
        return $this->model
            ->select('id', 'title', 'slug', 'excerpt', 'image')
            ->whereActive(true)
            ->latest();
    }

    public function getActiveOrderByDate($nbrPages)
    {
        return $this->queryActiveOrderByDate()->paginate($nbrPages);
    }
}