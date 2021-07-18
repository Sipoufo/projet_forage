<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use League\CommonMark\Inline\Element\Code;
use PhpParser\Node\Stmt\Echo_;
use Ramsey\Uuid\Type\Integer;

class UtilisateurController extends Controller
{
    //Function about invoice
    public function allInvoicesOfClient()
    {
        // je definie l'url de connexion.
        $url = "http://localhost:3000/client/facture"; 
        
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

        return view('client/consumption',['invoices' => $invoices]);
        
    }

    public function allInvoiceWhichHavePaidOfClient($idClient)
    {
        # code...
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

    public function paidFacture()
    {
        $idFacture = $_POST['newIndex'];
        
        // je definie l'url de connexion.
        $url = "http://localhost:3000/client/facture/paid/"+$idFacture;
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
        curl_setopt($ch, CURLOPT_POST, 1);
        
        //j'insere la donnée à etre envoyé
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
        //enfin d'avoir un retour sur l'etat de la requette on a CURLOPT_RETURNTRANSFER = true
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($ch);
        var_dump($response);
        curl_close($ch);
    }

    //Function about data
    public function updateData()
    {
       
        $url = "http://127.0.0.1/api/1";

        $data = array(
            'name' => 'Bob',
            'age' => 25
        );
        $data_json = json_encode($data);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //CURLOPT_HTTPHEADER : un tableau non associatif permettant de modifier des paramètres du header envoyé par la requête (tableau).
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
        //pour forcer le format de la commande HTTP (chaine de caractères, PUT,GET,POST,CONNECT,HEAD,etc.).
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
        //CURLOPT_RETURNTRANSFER : si nous voulons ou non récupérer le contenu de la requête appelée (boolean)
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        var_dump($response);
        curl_close($ch);

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

    //Client
    public function allClient()
    {
        
        $alltoken = $_COOKIE['token'];
        $alltokentab = explode(';', $alltoken);
        $token = $alltokentab[0];
        $tokentab = explode('=',$token);
        $tokenVal = $tokentab[1];
        $Authorization = 'Bearer '.$tokenVal;

        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'authorization: '.$Authorization));
        // $users = curl_exec($ch);
        // curl_close($ch);
        // $response = json_decode($users);
        // var_dump($response);

    
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:3000/admin/auth/getClient',
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
        var_dump($response);
        return view('admin/facture',['users' => $response]);
    }

    public function addInvoice()
    {
        echo "dump";
        if(isset($_POST['connect']))
        {
            $alltoken = $_COOKIE['token'];
            $alltokentab = explode(';', $alltoken);
            $token = $alltokentab[0];
            $tokentab = explode('=',$token);
            $tokenVal = $tokentab[1];
            $Authorization = 'Bearer '.$tokenVal;

            $newIndex = $_POST['newIndex'];
            $oldIndex = $_POST['lastIndex'];

            $consommation = $oldIndex - $newIndex;
            $montantConsommation = $_POST['priceKW'];

            $montantTotal = $consommation * $montantConsommation;

            $dataLimitePaid = $_POST['dataLimitePaid'];
            
            $dateReleveOldIndex = $_POST['newIndex'];

            $idClient = $_POST['idClient'];


            // je definie l'url de connexion.
            $url = "http://localhost:4000/admin/facture/"+$idClient;
            // je definie la donnée de ma facture.
            $facture = array(
                'newIndex' => $newIndex,
                'oldIndex' => $oldIndex,
                'consommation' => $consommation,
                'montantConsommation' => $montantConsommation,
                'montantTotal' => $montantTotal,
                'dataLimitePaid' => $dataLimitePaid,
                'dateReleveOldIndex' => new Date,
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
            curl_setopt($ch, CURLOPT_POST, 1);
            
            //j'insere la donnée à etre envoyé
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
            //enfin d'avoir un retour sur l'etat de la requette on a CURLOPT_RETURNTRANSFER = true
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response  = curl_exec($ch);
            var_dump($response);
            curl_close($ch);
        }
    }
}
