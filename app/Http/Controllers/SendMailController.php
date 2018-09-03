<?php

namespace App\Http\Controllers;

use App\Mail\OrcamentoApp;
use App\Mail\OrcamentoSite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;


class SendMailController extends Controller
{
    /**
     *
     * @param  Request  $request
     * @return Response
     *
     */


    public function enviarOrcamentoSite(Request $request)
    {
        $data=[
            'email' => $request->input('email'),
            'nome' => $request->input('nome'),
            'especificacoes' => $request->input('especificacoes'),
            'empresa' => $request->input('empresa'),
            'funcionalidades' => $request->input('items'),
            'preco' => $request->input('preco'),
        ];
        try{
            $result = Mail::to($data["email"])->send(new OrcamentoSite($data));
    
           }catch(Exception $e){
            return redirect('orcamento')->with('Message','Erro ao enviar o email.');
           }
    }
    public function enviarOrcamentoParaInfo(Request $request)
    {
        $data=[
            'email' => $request->input('email'),
            'nome' => $request->input('nome'),
            'especificacoes' => $request->input('especificacoes'),
            'empresa' => $request->input('empresa'),
            'funcionalidades' => $request->input('items'),
            'preco' => $request->input('preco'),
        ];
        try{
            $result = Mail::to('info@digitalinput.pt')->send(new OrcamentoSite($data));

    
           }catch(Exception $e){
            return redirect()->back()->with('Message','Erro ao enviar o email.');
           }
    }

    public function enviarOrcamentoApp(Request $request){
      
        $data=[
            'email' => $request->input('email'),
            'funcionalidades' => $request->input('funcionalidades'),
            'nome' => $request->input('nome'),
            'empresa' => $request->input('empresa'),
            'business' => $request->input('business'),
        ];
        try{
            $result = Mail::to('info@digitalinput.pt')->send(new OrcamentoApp($data));

    
           }catch(Exception $e){
            dd($e);

           }
    }


}