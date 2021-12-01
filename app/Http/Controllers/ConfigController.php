<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConfigRequest;
use App\Models\Config;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // DB::table('config')->get();
        return view('/pages/config');
    }

    /**
     * Store post request.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(ConfigRequest $request)
    {
        $config = new Config();
        $config->ntp_server = $request->input('link');
        $config->save();

        return view('/pages/home');
    }
}
