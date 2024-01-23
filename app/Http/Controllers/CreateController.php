<?php

namespace App\Http\Controllers;

use App\Http\Requests\AutoRequest;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;
use Throwable;

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

    public function store(Request $request)
    {
            $data = $request->validate([
                'fullName' => 'min:3|required ',
                'gender' => 'required ',
                "phone" => 'required ',
                'address' => ''
            ]);
            DB::table('clients')->insert($data);

    }
    public function storeAuto(Request $request){
        $data = $request->validate([
            'brand' => 'min:3|required ',
            'model' => 'required ',
            "color" => 'required ',
            'numberAuto' => 'required',
            'client_id' => 'required'

        ]);
        DB::table('autos')->insert($data);
        return redirect()->route('create');
    }
}
