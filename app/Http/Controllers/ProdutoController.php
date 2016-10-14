<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$produtos = \App\produto::paginate(15);

    	return view('produto.index',compact('produtos'));
    }
    public function adicionar()
    {
    	return view('produto.adicionar');
    }

 

    public function salvar(\App\Http\Requests\produtoRequest $request){
    	\App\produto::create($request->all());

    	\Session::flash('flash_message',[
			'msg'=>"produto adicionado com Sucesso!",
			'class'=>"alert-success"
    	]);

    	return redirect()->route('produto.adicionar');
    }

    public function editar($id)
    {
        $produto = \App\produto::find($id);
        if(!$produto){
            \Session::flash('flash_message',[
                'msg'=>"Não existe esse produto cadastrado! Deseja cadastrar um novo produto?",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('produto.adicionar');
        }

        return view('produto.editar',compact('produto'));
    }

    public function atualizar(\App\Http\Requests\produtoRequest $request,$id)
    {
        \App\produto::find($id)->update($request->all());
        
        \Session::flash('flash_message',[
            'msg'=>"produto atualizado com Sucesso!",
            'class'=>"alert-success"
        ]);

        return redirect()->route('produto.index');        
        
    }

    public function deletar($id)
    {
        $produto = \App\produto::find($id);

        $produto->delete();

        \Session::flash('flash_message',[
            'msg'=>"produto deletado com Sucesso!",
            'class'=>"alert-success"
        ]);

        return redirect()->route('produto.index'); 
    }

}
