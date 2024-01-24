<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Exception|\Illuminate\Http\RedirectResponse
     */
    public function destroyUser($client)
    {
        try {
            DB::table('clients')->where('id', $client)->delete();
            return redirect()->route('main');
        } catch (\Exception $e) {
            return $e;
        }

    }
    public function destroyAuto($client)
    {
        try {
            DB::table('autos')->where('id', $client)->delete();
            return redirect()->route('main');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
