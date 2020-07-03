<?php namespace App\Http\Controllers;

use App\Empleo;
use Illuminate\Http\Request;

class EmpleoController extends Controller
{
    public function index()
    {
        $empleos = Empleo::all();
        //return response()->json($categorias, 200);
        return view('views.indexempleo')->with('empleo',$empleos);;
    }

    public function getEmpleos($id_empleo)
    {
        $empleos = Empleo::findOrfail($id_empleo);
        if($empleos)
        {
            return response()->json($empleos, 200);
        }

        return response()->json(["Empleo no encontrado"], 404);

    }

    public function createEmpleo(Request $request)
    {
        $empleos = new Empleo;  
        $empleos->nombre = $request->nombre;
        $empleos->descripcion = $request->descripcion;
        $empleos->save();
        //return response()->json($categoria);  
       // return view('views.createcategoria');
       return view('views.welcome');
    }
    public function createEmpleoindex(Request $request)
    {
        return view('views.createempleo');
    }

    public function updateEmpleo(Request $request,$id_empleo)
     { 

        $empleo= Empleo::findOrfail($id_empleo);    
        $empleo->nombre = $request->nombre;
        $empleo->descripcion = $request->descripcion;
        $empleo->save();
        //return response()->json($categoria);
        
        return view('views.welcome', compact('empleo'));
        
     }
     public function updateEmpleoindex(Request $request,$id_empleo)
     { 
        $empleo= Empleo::findOrfail($id_empleo);   
        return view('views.actualizarempleo',compact('empleo'));
     }

     public function destroyEmpleo($id_empleo)
     {
        $empleo = Empleo::findOrfail($id_empleo);
        $empleo->delete();
         //return response()->json('La categoria fue eliminada');
         return view('views.welcome');
     }
     public function destroyEmpleoindex($id_empleo)
     {
        $empleo = Empleo::findOrfail($id_empleo);
        return view('views.eliminarempleo', compact('empleo'));
         //return response()->json('La categoria fue eliminada');
     }
}