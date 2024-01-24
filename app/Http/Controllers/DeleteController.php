<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroyUser($client)
    {
        DB::table('clients')->where('id', $client)->delete();
        return redirect()->route('main');
    }
    public function destroyAuto($client)
    {
        DB::table('autos')->where('id', $client)->delete();
        return redirect()->route('main');
    }
}
