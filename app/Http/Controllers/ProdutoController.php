<?php 

namespace App\Http\Controllers; 
use DB;
use App\Http\Controllers\Controller;
use Request;
use App\Produto;
use Validator;
use App\Http\Requests\ProdutoRequest;
use Auth;
use App\Categoria;

class ProdutoController extends Controller {

	 public function __construct()
    {
        $this->middleware('autorizador');
    }

	public function lista(){
		$produtos = Produto::all();
		return view('listagem')->with('produtos', $produtos);
	}

	public function mostra($id){
		$produto = Produto::find($id);
		// print_r($produto);
		return view('detalhes')->with('p', $produto);
	}

	public function novo(){
		return view('formulario')->with('categorias', Categoria::all());
	}

	public function adiciona(ProdutoRequest $request){
		Produto::create($request->all());
		return redirect('/')->withInput();
	}

	public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();
		return redirect('/');
	}

}