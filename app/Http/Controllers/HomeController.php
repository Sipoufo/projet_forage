<?php

namespace App\Http\Controllers;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class HomeController extends Controller
{
    public function sign_in(Request $request){

    	return view('welcome');
    }

    public function login(Request $request){

    	$phone = $request->input('phone');
        $password = md5(sha1($request->input('password')));

	    $url = "http://localhost:4000/login";
	    $data = array(
	        'phone' => $phone,
	        'password' => $password,
	    );
	    $data_json = json_encode($data);
	    $headers = [];

	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	    curl_setopt($ch, CURLOPT_POST, 1);
	    curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_HEADERFUNCTION,
	        function ($curl, $header) use (&$headers) {
	            $len = strlen($header);
	            $header = explode(':', $header, 2);
	              if (count($header) < 2) // ignore invalid headers
	                  return $len;

	            $headers[strtolower(trim($header[0]))][] = trim($header[1]);
	            return $len;
	          }
	    );
	    $response  = curl_exec($ch);
	    curl_close($ch); 

	    $informations = json_decode($response, true);

	    if($informations['status'] == 200){
	        
	        $userdata = $informations['result'];
	        $cookie = $headers['set-cookie'];
	        $tokentab = explode(';', $cookie[0]);
	        $expire = $tokentab[1];
	        $expiretab =  explode('=', $expire);
	        $timeout  = $expiretab[1];

	        $location = $userdata['localisation'];

	        if($userdata['isDelete'] == 1){

	        	Session::flash('message', 'You account doesn\'t exist anymore');
	        	return redirect()->back()->withInput();

	        }else{

	        	if($userdata['status'] != 1){

	        	Session::flash('message', 'You have been blocked!');
	        	return redirect()->back();

	        	}else{

			        if(!empty($location['longitude']) && !empty($location['latitude'])){

			              $request->session()->put('id',$userdata['_id']);
			        	  $request->session()->put('name',$userdata['name']);
			        	  $request->session()->put('profile',$userdata['profile']);

			        	  if(array_key_exists('profileImage', $userdata)){
			        		$request->session()->put('photo',$userdata['profileImage']);
			        	  }
			        	  // $request->session()->put('photo',$userdata['profileImage']);

			              setcookie('token', $cookie[0],time() + $timeout,null,null,false,true);

			              if($userdata['profile'] != 'user'){
			              	return redirect()->route('adminHome');
			              }else{
			              	return redirect()->route('clientHome');
			              } 
			              
			        }else{
			        	  $request->session()->put('profile',$userdata['profile']);
						  setcookie('token', $cookie[0],time() + $timeout,null,null,false,true);
			              return redirect()->route('seeClauses');
			        }
	        	}

	        }

	    }else{
	        $err  = $informations['error'];
	        Session::flash('message', $err);
	        return redirect()->back()->withInput();
	    }
	}

	public function forgot_password(){
		return view('forgotPassword');
	}

	public function reset(){
		//
	}

	// public function clientHome(){
 //    	return view('client/dashboard');
 //    }

    public function adminHome(){

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
				array_push($invoicesAdvenced,$value);
                //$invoicesAdvenced = $value;
                //dump($value);
            }
            $i = $i + 1;
            //dump($key);
        }

		if (gettype($invoicesAdvenced) != "array") {
		//    echo "je t'aime";
			$invoicesAdvenced = array();
		}
		
    	return view('admin/dashboard',['invoices' => $invoicesAdvenced]);
    }

    
}
