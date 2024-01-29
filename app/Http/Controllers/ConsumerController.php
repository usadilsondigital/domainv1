<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class ConsumerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$urlExternal = "http://localhost:5068/todoitems/encryptAdi/HellowrldThisismyfirstmessage/keynumber1123456";
        $response = Http::get($urlExternal); //"RfGsgCdDfdtHhyjzNrVBSd3l2nwaYbyP+wlCruq6JiE="
        return $response;*/
        return $this->decryptGeneral();


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
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


}
