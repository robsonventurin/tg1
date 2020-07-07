<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Config;

class ConfigController extends Controller
{
    function telaConfig(){
        $config = Config::all();
        return view('config.listar', ['config' => $config ]);
    }

    function alterarConfig(Request $req) {
        foreach($req->all() as $r => $e) {
            if ($r != '_token') {
                $config = Config::find($r);
                $config->link = $e;

                $config->save();
            }
        }
        
        return view('resultado', ['mensagem' => "Atualização das configurações foi bem sucedida!"]);
    }
}
