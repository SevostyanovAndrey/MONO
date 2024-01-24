<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Exception|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        try {
            $clients = DB::table('clients')
                ->join('autos', 'clients.id', '=', 'autos.client_id')
                ->select('clients.*', 'autos.brand', 'autos.numberAuto')
                ->paginate(5);
            $badClients = DB::table('clients')->get();

            $uniqAuto = DB::table('autos')->select('brand', DB::raw('count(*) as count'))
                ->where('status', 1)->groupBy('brand')->get();

            return view('main', compact('clients', 'badClients', "uniqAuto"));
        } catch (\Exception $e) {
            return $e;
        }
    }
}
