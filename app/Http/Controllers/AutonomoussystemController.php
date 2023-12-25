<?php

namespace App\Http\Controllers;

use App\Models\autonomoussystem;
use App\Http\Requests\StoreautonomoussystemRequest;
use App\Http\Requests\UpdateautonomoussystemRequest;
use Illuminate\Support\Facades\Http;
use App\Helper;

class AutonomoussystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        
    $tablehtmlASN = "<table>
    <tr>
      <td>numbermin</td>
      <td>numbermax</td>
      <td>bits</td>
      <td>description</td>
      <td>reference</td>
    </tr>
    <tr>0	16	Reserved for RPKI unallocated space invalidation[19]	RFC 6483, RFC 7607</tr>
    Number
    Bits
    Description
    Reference
    0
    16
    Reserved for RPKI unallocated space invalidation[19]
    RFC 6483, RFC 7607
    1–23455
    16
    Public ASNs
    
    
    23456
    16
    Reserved for AS Pool Transition
    RFC 6793
    23457–64495
    16
    Public ASNs
    
    
    64496–64511
    16
    Reserved for use in documentation and sample code
    RFC 5398
    64512–65534
    16
    Reserved for private use
    RFC 1930, RFC 6996
    65535
    16
    Reserved
    RFC 7300
    65536–65551
    32
    Reserved for use in documentation and sample code
    RFC 5398, RFC 6793
    65552–131071
    32
    Reserved
    
    
    131072–4199999999
    32
    Public 32-bit ASNs
    
    
    
    
    <tr>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>         
      <td>23992</td>
    </tr> 
    <tr>
      <td>11</td>
      <td>22</td>
      <td>33</td>
      <td>45</td>         
      <td>23992</td>
    </tr>    
  </table>";

dd(Helper::loadTable($tablehtmlASN));

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
