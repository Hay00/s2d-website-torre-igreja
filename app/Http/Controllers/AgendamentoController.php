<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgendamentoRequest;
use App\Models\Agendamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendamentoController extends Controller
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
        $selectList = ['0' => 'Feriado', '1' => 'Data Especial', '2' => 'Obito', '3' => 'Outro'];
        return view('/pages/agendamentos', ['selectList' => $selectList]);
    }

    public function create()
    {
        $list = DB::table('tipos_agendamentos')->get(['nome']);
        $selectList = [];
        foreach ($list as $value) {
            $selectList[] = $value->nome;
        }
        return view('/pages/agendamentos', ['selectList' => $selectList]);
    }

    public function store(AgendamentoRequest $request)
    {
        // Salva o agendamento
        $agendamento = new Agendamentos();
        $agendamento->nome = $request->input('nome');
        $agendamento->tipo = $request->input('tipo');
        $agendamento->data = $request->input('data');
        $agendamento->hora = $request->input('hora');
        $agendamento->save();

        return view('/pages/home');
    }
}
