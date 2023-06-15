<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leitura;
use App\Models\Mac;
use App\Models\Sensor;

class LeituraController extends Controller
{
    function index()
    {
        $leitura = Leitura::All();
        // dd($produto);


        return view('LeituraList')->with(['leituras' => $leitura]);
    }

    function create()
{
    $Macs = Mac::orderBy('Nome')->get();
    $Sensors = Sensor::orderBy('Nome')->get();


    //dd($_sensors_bejo);
    return view('LeituraForm')->with([
        'Macs' => $Macs,
        'Sensors ' => $Sensors ,
    ]);
}


    function store(Request $request)
    {
        $request->validate(
            [
                'DataLeitura' => 'required',
                'HoraLeitura' => 'required | max: 500',
                'idMac' => ' nullable',
                'idSensor' => ' nullable',
            ],
            [
                'DataLeitura.required' => 'A data é obrigatória',
                'HoraLeitura.required' => 'O preco é obrigatório',
                'HoraLeitura.max' => 'Só é permitido 500 caracteres',
            ]
        );

        //dd( $request->nome);
        Leitura::create([
            'DataLeitura' => $request->DataLeitura,
            'HoraLeitura' => $request->HoraLeitura,
            'idMac' => $request->idMac,
            'idSensor' => $request->idSensor,
        ]);

        return \redirect()->action(
            'App\Http\Controllers\LeituraController@index'
        );
    }

    function edit($id)
    {
        //select * from usuario where id = $id;
        $leitura = Leitura::findOrFail($id);
        //dd($usuario);
        $_sensors_bejo = Sensor::orderBy('idSensor')->get();

        $Macs = Mac::orderBy('idMac')->get();

        return view('LeituraForm')->with([
            'leitura' => $leitura,
            'Macs' => $Macs,
            'Sensors' => $Sensors,
        ]);
    }

    function show($id)
    {
        //select * from usuario where id = $id;
        $leitura = Leitura::findOrFail($id);
        //dd($usuario);
        $Sensors = Sensor::orderBy('idSensor')->get();

        $Macs = Mac::orderBy('idMac')->get();

        return view('LeituraForm')->with([
            'leitura' => $leitura,
            'Macs' => $Macs,
            'Sensors ' => $Sensors,
        ]);
    }

    function update(Request $request)
    {
        //dd( $request->nome);
        $request->validate(
            [
                'DataLeitura' => 'required',
                'HoraLeitura' => 'required | max: 500',
                'idMac' => ' nullable',
                'idSensor' => ' nullable',
            ],
            [
                'DataLeitura.required' => 'A data é obrigatória',
                'HoraLeitura.required' => 'O preco é obrigatório',
                'HoraLeitura.max' => 'Só é permitido 500 caracteres',
            ]
        );


            Leitura::updateOrCreate(
            ['id' => $request->id],
            [

                'DataLeitura' => $request->DataLeitura,
                'HoraLeitura' => $request->HoraLeitura,
                'idMac' => $request->idMac,
                'idSensor' => $idSensor,
            ]
        );

        return \redirect()->action(
            'App\Http\Controllers\LeituraController@index'
        );
    }
    //

    function destroy($id)
    {
        $leitura = leitura::findOrFail($id);

        $leitura->delete();

        return \redirect()->action(
            'App\Http\Controllers\LeituraController@index'
        );
    }

    function search(Request $request)
    {
        if ($request->campo == 'nome') {
            $leitura = Leitura::where(
                'nome',
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $leituras = Leitura::all();
        }

        //dd($usuarios);
        return view('LeituraList')->with(['leitura' => $leituras]);
    }
}
// npm install --save-dev vite laravel-vite-plugin
// npm install --save-dev @vitejs/plugin-vue
// npm run build
