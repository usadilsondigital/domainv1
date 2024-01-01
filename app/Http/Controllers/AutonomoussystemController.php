<?php

namespace App\Http\Controllers;

use App\Models\autonomoussystem;
use App\Http\Requests\StoreautonomoussystemRequest;
use App\Http\Requests\UpdateautonomoussystemRequest;
use Illuminate\Support\Facades\Http;
use App\Helper;

class AutonomoussystemController extends Controller
{
    public function NuevoAS($numbermin,$numbermax,$bits,$description,$reference){
      
        \DB::table('autonomoussystems')->insert([
            'numbermin'=> $numbermin,
            'numbermax'=> $numbermax,
            'bits'=> $bits,
            'description'=> $description,
            'reference'=> $reference
        ]);
    }
    public function SeedCountry(): void
    {
        $file = fopen('countryseeder.csv', 'r');
        while (($line = fgetcsv($file)) !== FALSE) {
               \DB::table('countries')->insert([
                'name'=> $line[0],
                'formalname'=> $line[0],                
                'disputedsovereignty'=> $line[2],
                'unsystem_id'=> 0,
            ]);
        }        
        fclose($file);
    }

    public function SeedUnsystem(): void
    {
        $file = fopen('unsystemseeder.csv', 'r'); while (($line = fgetcsv($file)) !== FALSE) {
            \DB::table('unsystems')->insert([ 'name'=> $line[0]]);    }    fclose($file);
    }

    public function SeedAs(): void
    {
        $file = fopen('asseeder.csv', 'r');
        while (($line = fgetcsv($file)) !== FALSE) {
               \DB::table('autonomoussystems')->insert([
                'numbermin'=> $line[0],
                'numbermax'=> $line[1],
                'bits'=> $line[2],
                'description'=> $line[3],
                'reference'=> $line[4]
            ]);
        }
        
        fclose($file);
    }

    public function SeedRootserver(): void
    {
        $file = fopen('rootserverseeder.csv', 'r');
        while (($line = fgetcsv($file)) !== FALSE) {
               \DB::table('rootservers')->insert([
                'letter'=> $line[0],
                'ipv4'=> $line[1],
                'ipv6'=> $line[2],
                'oldname'=> $line[3],
                'operator'=> $line[4],
                'software'=> $line[5],
                'countryid'=> 0
            ]);
        }
        
        fclose($file);
    }
    
    public function SeedLanguage(): void
    {
        $file = fopen('languageseeder.csv', 'r');
        while (($line = fgetcsv($file)) !== FALSE) {
               \DB::table('languages')->insert([
                'name'=> $line[0],
                'currentwordscount'=> 0,
                'totalwords'=> 0
            ]);
        }
        
        fclose($file);
    }

            public function SeedTld():void {
                        $file = fopen('tldseeder.csv', 'r');
                        while (($line = fgetcsv($file)) !== FALSE) {
                            \DB::table('internettlds')->insert([
                                'name'=> $line[0],
                                'entity'=> $line[1],
                                'explanation'=> $line[2],
                                'notes'=> $line[3],
                                'registry'=> $line[4],
                                'administrator'=> $line[5],
                                'restriction'=> $line[6],
                                'typetldid'=> 0
                            ]);
                        }
            }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->SeedUnsystem();
        $this->SeedCountry();
        $this->SeedAs();
        $this->SeedRootserver();
        $this->SeedLanguage();
        $this->SeedTld();

        //dd(Helper::loadTable($tablehtmlASN));

        /* STEPS
        $url  = "https://en.wikipedia.org/wiki/Autonomous_system_(Internet)";
        $response = Http::get($url); 
        $response->body() : string;
        $response->json($key = null, $default = null) : array|mixed;
        $response->object() : object;
        $response->collect($key = null) : Illuminate\Support\Collection;
        $response->status() : int;
        $response->successful() : bool;
        $response->redirect(): bool;
        $response->failed() : bool;
        $response->clientError() : bool;
        $response->header($header) : string;
        $response->headers() : array;*/

        //call url
        //load html 
        //extract table html 
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreautonomoussystemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(autonomoussystem $autonomoussystem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(autonomoussystem $autonomoussystem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateautonomoussystemRequest $request, autonomoussystem $autonomoussystem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(autonomoussystem $autonomoussystem)
    {
        //
    }
}
