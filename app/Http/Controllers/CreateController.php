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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function create()
    {
        return view('create');
    }

    public function storeAuto(Request $request)
    {
        try {
            $data = $request->validate([
                'brand' => 'min:3|required ',
                'model' => 'required ',
                "color" => 'required ',
                'numberAuto' => 'required|unique:autos,numberAuto',
                'status' => '',
                'client_id' => 'required'
            ]);
            $enabled = request()->input('enable');
            if ($enabled == "on") {
                $enabled = true;
            } else $enabled = false;
            $data['status'] = $enabled;
            DB::table('autos')->insert($data);
            return redirect()->route('view', $data["client_id"]);
        } catch (\Exception $e) {
            return $e;
        }

    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'fullName' => 'min:3|required ',
                'gender' => 'required ',
                "phone" => 'required|unique:clients,phone',
                'address' => ''
            ]);
            DB::table('clients')->insert($data);
            $clientId = DB::getPdo()->lastInsertId();

            return redirect()->route('view', $clientId);
        } catch (\Exception $e) {
            return $e;
        }
    }
}
