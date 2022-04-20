<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * Class ComentarioController
 * @package App\Http\Controllers
 */
class ComentarioController extends Controller
{

    public function getComentario(){
        return response()->json(Comentario::all(),200);
    }


    public function store(Request $request)
    {
        $validator0 = Validator::make($request->all(), [
            'nombre' => 'required|min:4|max:40',
        ]);

        if($validator0->fails()){
            return response()->json(['Error'=>'El nombre no puede estar vacío y debe tener entre 4 a 40 caracteres.'], 203);
        }

        $validator1 = Validator::make($request->all(), [
            'apellido' => 'required|min:4|max:40',
        ]);

        if($validator1->fails()){
            return response()->json(['Error'=>'El apellido no puede estar vacío y debe tener entre 4 a 40 caracteres.'], 203);
        }

        $validator2 = Validator::make($request->all(), [
            'correo' => 'required|email|min:10|max:50',
        ]);

        if($validator2->fails()){
            return response()->json(['Error'=>'El correo debe tener de 10 a 50 caracteres y un formato válido ejemplo@gmail.com'], 203);
        }

        if (!str_contains($request->correo, "@") || !str_contains($request->correo, ".")){
            return response()->json(['Error'=>'El correo debe tener de 10 a 50 caracteres y un formato válido ejemplo@gmail.com'], 203);
        }

        $validator3 = Validator::make($request->all(), [
            'telefono' => 'required|min:8|max:8',
        ]);

        if($validator3->fails()){
            return response()->json(['Error'=>'El teléfono no puede estar vacío y debe tener 8 dígitos.'], 203);
        }

        $validator3 = Validator::make($request->all(), [
            'comentario' => 'required|min:4|max:200',
        ]);

        if($validator3->fails()){
            return response()->json(['Error'=>'El comentario no puede estar vacío y debe tener entre 4 a 200 caracteres.'], 203);
        }

        $comentario = Comentario::create($request->all());

        return response($comentario, 200);
    }

    public function show($id)
    {
        $comentario = Comentario::find($id);

        if  ($id < 1){
            return response()->json(['Error'=>'El Id no puede ser menor o igual a cero'], 203);
        }

        if  (is_null($comentario)){
            return response()->json(['Error'=>'No existe este registro'], 203);
        }

        return response($comentario, 200); 
    }

    public function update(Request $request,$id)
    {

        $comentario = Comentario::find($id);

        if  ($id < 1){
            return response()->json(['Error'=>'El Id no puede ser menor o igual a cero'], 203);
        }

        if  (is_null($comentario)){
            return response()->json(['Error'=>'No existe este registro'], 203);
        }

        $validator0 = Validator::make($request->all(), [
            'nombre' => 'required|min:4|max:40',
        ]);

        if($validator0->fails()){
            return response()->json(['Error'=>'El nombre no puede estar vacío y debe tener entre 4 a 40 caracteres.'], 203);
        }

        $validator1 = Validator::make($request->all(), [
            'apellido' => 'required|min:4|max:40',
        ]);

        if($validator1->fails()){
            return response()->json(['Error'=>'El apellido no puede estar vacío y debe tener entre 4 a 40 caracteres.'], 203);
        }

        $validator2 = Validator::make($request->all(), [
            'correo' => 'required|email|min:10|max:50',
        ]);

        if($validator2->fails()){
            return response()->json(['Error'=>'El correo debe tener de 10 a 50 caracteres y un formato válido ejemplo@gmail.com'], 203);
        }

        if (!str_contains($request->correo, "@") || !str_contains($request->correo, ".")){
            return response()->json(['Error'=>'El correo debe tener de 10 a 50 caracteres y un formato válido ejemplo@gmail.com'], 203);
        }

        $validator3 = Validator::make($request->all(), [
            'telefono' => 'required|min:8|max:8',
        ]);

        if($validator3->fails()){
            return response()->json(['Error'=>'El teléfono no puede estar vacío y debe tener 8 dígitos.'], 203);
        }

        $validator3 = Validator::make($request->all(), [
            'comentario' => 'required|min:4|max:200',
        ]);

        if($validator3->fails()){
            return response()->json(['Error'=>'El comentario no puede estar vacío y debe tener entre 4 a 200 caracteres.'], 203);
        }

        $Comentario->update($request->all());

        return response()->json(['Mensaje'=>'Registro Actualizado con exito'], 200);

    }

    public function destroy($id)
    {
        $comentario = Comentario::find($id)->delete();

        return response()->json(['Mensaje'=>'Eliminado con exito'], 200);
    }
}
