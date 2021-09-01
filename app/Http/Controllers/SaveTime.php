<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Salman\Mqtt\MqttClass\Mqtt;

class SaveTime extends Controller
{
    public function saveTime(Request $request)
    {
        $hora = $request->input('hourInput');
        $minutos = $request->input('minutesInput');

        $json = "{\"hora\":$hora,\"minutos\":$minutos}";

        $mqtt = new Mqtt();
        try {
            $output = $mqtt->ConnectAndPublish('s2d/tw2021/torre/cfg', $json, 'phpUser');
            $message = 'Alterações salvas com sucesso';
        } catch (\Throwable $th) {
            $output = false;
        } finally {
            $result = $output ? 'success' : 'error';
            $message = $output ? 'Alterações salvas com sucesso' : 'Ocorreu um erro ao salvar, tente novamente!';
        }

        return redirect()->back()->with($result, $message);
    }
}
