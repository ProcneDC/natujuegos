<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bird;
use Illuminate\Support\Facades\DB;


class GameController extends Controller
{
    public function index()
    {
        $aves = Bird::all();

    	return view('game.index_game', compact('aves'));
    }
    public function set_game()
    {
        return view('game.set_game');
    }    
    public function set_game_practice()
    {
        return view('game.practice_game');
    }      
    public function set_game_eco()
    {
        return view('game.practice_game_eco');
    }     
    public function set_game_family()
    {
        return view('game.practice_game_family');
    }    

    public function index_game()
    {

        //traigo todas las aves con foto
        $aves = Bird::where('photo', '!=' , '' )->get();

    	//$aves = Bird::all();

        //falta filtro deecoregiones cuando se necesite (para count)

    	//$cantidad = count($aves);

        $arr_aves = $aves->toArray();

        //dd($arr_aves);

        $cantidad = count($arr_aves);
        $cantidad = $cantidad - 1;

    	$random = rand(1, $cantidad);

        //$ave = Bird::find($random);
        $ave = $arr_aves[$random];
        //dd($ave);
        //dd($ave['photo']);

        do{
            $random2 = rand(1, $cantidad);
        }
        while($random2 == $random);

        do{
            $random3 = rand(1, $cantidad);
        }
        while(($random3 == $random) || ($random3 == $random2));

        do{
            $random4 = rand(1, $cantidad);
        }
        while(($random4 == $random) || ($random4 == $random2) || ($random4 == $random3));

        do{
            $random5 = rand(1, $cantidad);
        }
        while(($random5 == $random) || ($random5 == $random2) || ($random5 == $random3) || ($random5 == $random4));

        //$respuesta2 = Bird::find($random2);
        //$respuesta3 = Bird::find($random3);
        //$respuesta4 = Bird::find($random4);
        //$respuesta5 = Bird::find($random5);

        $respuesta2 = $arr_aves[$random2];
        $respuesta3 = $arr_aves[$random3];
        $respuesta4 = $arr_aves[$random4];
        $respuesta5 = $arr_aves[$random5];

        //defino la cantidad de respuestas (5)
        $respuestasEnOrden = [$ave, $respuesta2, $respuesta3, $respuesta4, $respuesta5];
        //dd($respuestasEnOrden);


        function array_random_assoc($arr, $num = 1) {
            $keys = array_keys($arr);
            shuffle($keys);
            
            $r = array();
            for ($i = 0; $i < $num; $i++) {
                $r[$keys[$i]] = $arr[$keys[$i]];
            }
            return $r;
        }

        $respuestasDesordenadas = [];
        //dd(count($respuestasEnOrden));

        do{
            for ($i=0; $i < count($respuestasEnOrden) ; $i++) { 
                $valor = array_random_assoc($respuestasEnOrden);
                $keyDelValor = key($valor);

                if (($key = array_search($valor[$keyDelValor], $respuestasEnOrden)) !== false) {
                    unset($respuestasEnOrden[$key]);
                }

                $respuestasDesordenadas[] = $valor;
            }
        }while(!empty($respuestasEnOrden));
        //dd($respuestasEnOrden);
        //dd(count($respuestasEnOrden));
        //dd($respuestasDesordenadas); 

        // Eliminar un nivel de keys

        for ($i=0; $i < count($respuestasDesordenadas) ; $i++) { 
                $keyDelValor2 = key($respuestasDesordenadas[$i]);
                $respuestasDesordenadas[$i] = $respuestasDesordenadas[$i][$keyDelValor2];
        }

        //dd($respuestasDesordenadas);

    	return view('game.index_game', compact('ave' , 'respuestasDesordenadas'));
    }

    public function index_game_response()
    {
//
    }


}
