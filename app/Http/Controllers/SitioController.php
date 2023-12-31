<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function contactoForm($tipo = null)
    {
        return view('contacto', compact('tipo'));
    }

    public function contactoSave(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'comentario' => ['required','min:5','max:50'],
        ]);
    
        $contacto = new Contacto();
        $contacto->correo = $request->correo;
        $contacto->comentario = $request->comentario;
        $contacto->save();
    
        return redirect()->back();
    }
}
