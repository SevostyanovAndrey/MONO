<?php

namespace App\Http\Controllers;

use App\Http\Requests\AutoRequest;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('create');
    }
    public function storeClient(ClientRequest $request)
    {
        $data = $request->validated();
        DB::table('clients')->insert($data);
    }
    public function storeAuto(AutoRequest $request){
        $data = $request->validated();
        DB::table('autos')->insert($data);
    }
}
