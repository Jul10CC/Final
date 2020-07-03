<?php namespace App\Http\Controllers;

use App\Empleado;
use App\Empleo;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        $empleos = Empleo::all();
        //return response()->json($productos, $categorias, 200);
        return view('views.indexempleado')->with('empleado',$empleados);
    }

    public function getEmpleados($id)
    {
        $empleado = Empleado::findOrfail($id);
        if($empleado)
        {
            return response()->json($empleado, 200);
        }

        return response()->json(["Empleado no encontrado"], 404);

    }

    public function createEmpleado(Request $request)
    {
        $empleado = new Empleado;  
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->direccion = $request->direccion;
        $empleado->id_empleo = $request->id_empleo;
        $empleado->save();
        //return response()->json($producto);  
        return view('views.welcome');
    }
    public function createEmpleadoindex(Request $request)
    {
        $empleado = Empleado::all();
        $empleo = Empleo::all();
        return view('views.createempleado',compact('empleado'),compact('empleo'));
    }
    public function updateEmpleado(Request $request,$id)
     { 

        $empleado = Empleado::findOrfail($id);    
        $empleo = Empleo::all();
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->direccion = $request->direccion;
        $empleado->id_empleo = $request->id_empleo;
        $empleado->save();
        //return response()->json($producto);
        return view('views.welcome', compact('empleado'),compact('empleo'));
     }

     public function updateEmpleadoindex(Request $request,$id)
     { 
        $empleado= Empleado::findOrfail($id);   
        $empleo = Empleo::all();
        return view('views.actualizarempleado',compact('empleado'),compact('empleo'));
     }

     public function destroyEmpleado($id)
     {
        $empleado = Empleado::findOrfail($id);
        $empleado->delete();
        //return response()->json('El producto fue eliminado');
        return view('views.welcome');
     }
     public function destroyEmpleadoindex($id)
     {
        $empleado = Empleado::findOrfail($id);
        return view('views.eliminarempleado', compact('empleado'));
         //return response()->json('La categoria fue eliminada');
     }
}