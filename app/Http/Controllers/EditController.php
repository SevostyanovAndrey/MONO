<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EditController extends Controller
{

    public function edit($client)
    {
        try {
            $data = DB::table('clients')->where('id', "$client")->first();
            $dataAuto = DB::table('autos')->where('client_id', "$client")->get()->reverse();
            return view('edit', compact(['data', 'dataAuto']));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function updateClient($client)
    {
        try {
            $data = request()->validate([
                'fullName' => 'min:3|required ',
                'gender' => 'required ',
                "phone" => 'required',
                'address' => ''
            ]);
            DB::table('clients')->where('id', $client)->update($data);
            return redirect()->route('view', $client);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function updateAuto($client)
    {
        try {
            $data = request()->validate([
                'brand' => 'min:3|required ',
                'model' => 'required ',
                "color" => 'required ',
                'numberAuto' => 'required',
                'status' => '',
                'client_id' => 'required'
            ]);

            $enabled = request()->input('enable');
            if ($enabled == "on") {
                $enabled = true;
            } else $enabled = false;

            $data['status'] = $enabled;

            DB::table('autos')->where('client_id', $client)->update($data);

            return redirect()->route('view', $client);
        } catch (\Exception $e) {
            return $e;
        }
    }
}
