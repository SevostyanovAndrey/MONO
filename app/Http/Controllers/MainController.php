<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        $clients = DB::table('clients')
            ->join('autos', 'clients.id', '=', 'autos.client_id')
            ->select('clients.*', 'autos.brand', 'autos.numberAuto')
            ->paginate(5);

        return view('main', compact('clients'));
    }
}
