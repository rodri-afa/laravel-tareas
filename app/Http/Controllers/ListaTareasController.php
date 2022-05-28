<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemLista;

class ListaTareasController extends Controller
{
    public function inicio(){
        // $tareasArray = array("comprar el pan", "estudiar cliente", "sacar al perro");

        $tareasArray = ItemLista::where('completado', 0)->get();
        
        return view('tareas',[ "datosTareas" => $tareasArray]);
    }
    public function nueva_tarea(Request $request){
        
        if ($request->nueva_tarea != null){
            $tarea = new ItemLista;
            $tarea->nombre = $request->nueva_tarea;
            $tarea->completado = 0;
            $tarea->save();
        }
        return redirect('/');
    }

    public function completar_tarea($id){
        //echo "completar $id";
        $tarea = ItemLista::find($id);
        
        $tarea->completado = 1;
        $tarea->save();
        return redirect('/');

    }

}
