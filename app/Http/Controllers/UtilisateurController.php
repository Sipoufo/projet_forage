<?php

namespace App\Http\Controllers;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use League\CommonMark\Inline\Element\Code;
use PhpParser\Node\Stmt\Echo_;
use Ramsey\Uuid\Type\Integer;


class UtilisateurController extends Controller
{
    //finish to paid invoice
    public function advanceInvoice()
    {
        $idFacture = $_POST['idFacture'];
        
        // je definie l'url de connexion.
        $url = "http://localhost:4000/admin/facture/statusPaidFacture/"+$idFacture;
        // je definie la donnée de ma facture.
        $facture = array(
            'status' => true
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
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        //CURLOPT_POST : si la requête doit utiliser le protocole POST pour sa résolution (boolean)
        curl_setopt($ch, CURLOPT_PUT, 1);
        
        //j'insere la donnée à etre envoyé
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
        //enfin d'avoir un retour sur l'etat de la requette on a CURLOPT_RETURNTRANSFER = true
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($ch);
        var_dump($response);
        curl_close($ch);
    }

    public function allInvoiceWhichHaveNotPaid()
    {
        // je definie l'url de connexion.
        $url = "http://localhost:4000/admin​/facture​/getFactureAdvance"; 

        // Initialisez une session CURL.
        $ch = curl_init();  
        
        // Récupérer le contenu de la page
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        
        //Saisir l'URL et la transmettre à la variable.
        curl_setopt($ch, CURLOPT_URL, $url); 

        //Exécutez la requête 
        $invoices = curl_exec($ch); 

        //Afficher le résultat
        echo $invoices; 
        
        //Je ferme la connexion et je libere les ressources
        curl_close($ch);
        
        $response = json_decode($invoices);
        var_dump($response);

        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        echo 'HTTP code: ' . $httpcode;

        //return view('admin/dashboard',['invoices' => $invoices]);
    }

    public function delete()
    {
        $url = "http://127.0.0.1/api/1";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($ch);
        var_dump($response);
        curl_close($ch);
    }

    public function previewClauses(){
        return view('clauses');
    }

    public function validClauses(Request $request){

        $latitude = $request->input('lat');
        $longitude = $request->input('lng');

        if(empty($latitude) || empty($longitude)){

            setcookie(session_name(),"",time()-3600);
            setcookie('token', "",time()-3600 ,"/",null,false,true);
            $_COOKIE = [];
            Session::forget('profile');
            Session::flash('position', 'You have to accept the search for your position - Activate the localisation in your browser');
            return redirect()->route('welcome');

        }else{

            $url = "http://localhost:4000/login/localisation";
            $alltoken = $_COOKIE['token'];
            $alltokentab = explode(';', $alltoken);
            $token = $alltokentab[0];
            $tokentab = explode('=',$token);
            $tokenVal = $tokentab[1];
            $Authorization = 'Bearer '.$tokenVal;
        
            $data = array(
                'longitude' => $longitude,
                'latitude' => $latitude,
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

            // print_r($response);
            if($response['status'] == 200){

                $userdata = $response['result'];
                $request->session()->put('id',$userdata['_id']);
                $request->session()->put('name',$userdata['name']);
                $request->session()->put('profile',$userdata['profile']);
                if(array_key_exists('profileImage', $userdata)){
                    $request->session()->put('photo',$userdata['profileImage']);
                }

                if($userdata['profile'] != 'user'){
                    return redirect()->route('adminHome');
                }else{
                    return redirect()->route('clientHome');
                } 
               
            }
        }

    }
}
