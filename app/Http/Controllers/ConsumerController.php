<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\DB;

class ConsumerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->decryptGeneral();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function decryptGeneral()
    {
        $key1 = "keynumber1123456";
        $iv = "vectorsof16bytes";
        $urlExternal = "http://localhost:5068/todoitems/enc/HellowrldThisismyfirstmessage";
        $response = null;
        $response = Http::get($urlExternal); //"SGVsbG93cmxkVGhpc2lzbXlmaXJzdG1lc3NhZ2U="
        $plainText = $this->decrypt($response->body());
    }
    public function decrypt($encryptedString)
    {
        $trimmedFirst = substr($encryptedString, 1); // Received from C# with "" extras
        $trimmedLast = substr($trimmedFirst, 0, -1);
        $decodedText = base64_decode($trimmedLast);
        return $decodedText;
    }


    /**
     * Searcher .
     */
    public function searcher()
    {
//ideas
//1website with .com with few letters that are open
//2wbesite with .com that expired yesterday

        //grab first word > 3  letters
        //looping in the extensions
        //grab first extension create "word.extension"
        //try to access to this "https://www.whois.com/whois/"+"word.extension"

        $word = $this->wordMoreThreeLetters();
       
        $extension = $this->extensionNow();
        $cadena  = "";
        
        foreach ($word as $key => $value) {
            $cadena = $value . $extension;
            $urlToTest = "https://www.whois.com/whois/" . $cadena;
            $response = Http::get($urlToTest);    
            $body = $response->body();
            $quantity = substr_count($body,"whois-data");
            if($quantity>2){
               
                //search other characteristcs
                //process raw data or process tags
                //see exmaple of response.txt
                //$qua = substr_count($body,'class="df-raw"');
                //$posRawData = strripos($body,'class="df-raw"');
                //strripos($body,'class="df-raw"');
                //$newPosRawData = $posRawData+ 34;           
                
            }else{
                 $quant = substr_count($body,"Looks like this domain has not been registered yet");
                 $this->InsertForNow($urlToTest,$value);
            }
        }       
       
        //$response->status();     
    }

    public function InsertForNow($name,$acronym){
        DB::table('typetlds')->insert([
            'name' => $name,
            'acronym' => $acronym,
            'level' => 1
        ]);
    }


    /**
     * wordMoreThreeLetters .
     */
    public function wordMoreThreeLetters()
    {
        $arrayWords = [];
            $words = DB::table('words')->get(); 
            foreach ($words as $wname) {
                $trimmed = trim(preg_replace('/\s+/', ' ',  $wname->name));
                 if( strlen($trimmed) > 2 && strlen($trimmed) < 9 ){
                     array_push($arrayWords ,$trimmed );
                 }
            }
            return $arrayWords;
    }


    /**
     * wordMoreThreeLetters .
     */
    public function extensionNow()
    {
        $extAux = ".com";
        return $extAux;
    }


}
