<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{

    public function __invoke($client)
    {
        $data = DB::table('clients')->where('id', "$client")->first();
        $dataAuto = DB::table('autos')->where('client_id', "$client")->get();
        return view('edit', compact(['data', 'dataAuto']));
    }
}
