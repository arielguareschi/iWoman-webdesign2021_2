<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function upload(Request $request){
        if ($request->hasFile('upload')){
            $nomeOriginal = $request->file('upload')->getClientOriginalName();
            $nomeArquivo = pathinfo($nomeOriginal, PATHINFO_FILENAME);
            $extensao = $request->file('upload')->getClientOriginalExtension();
            $nomeOriginal = $nomeArquivo . '_' . time() . '.' . $extensao;
            $request->file('upload')->move(public_path('imagens'), $nomeArquivo);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('imagens/'.$nomeArquivo);
            $msg = 'Imagem enviada com sucesso!';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');

            echo $response;
        }
    }
}
