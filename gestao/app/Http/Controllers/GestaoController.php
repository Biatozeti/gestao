<?php

namespace App\Http\Controllers;

use App\Http\Requests\GestaoFormRequest;
use Illuminate\Http\Request;

class GestaoController extends Controller
{
    public function titulo(GestaoFormRequest $request)
    {
      $projeto = GestaoController::create([
  
        'titulo' => $request->titulo,
        'descricao' => $request->descricao,
        'data_inicio' => $request->data_inicio,
        'data_termino' => $request->data_termino,
        'valor_projeto' => $request->valor_projeto,
        'status' => $request->status,
        

      ]);

    return response()->json([
      "success" => true,
      "message" => "pojeto gravado com sucesso",
      "data" => $projeto
    ], 200);
  }

  public function update(request $request)
  {
    $projeto = GestaoController::find($request->id);

    if (!isset($cliente)) {
      return response()->json([
        'status' => false,
        'message' => "cadastro nao encontrado "
      ]);
    }
    if (isset($request->titulo)) {
      $projeto->titulo = $request->titulo;
    }

    if (isset($request->descricao)) {
      $projeto->descricao = $request->descricao;
    }
    if (isset($request->data_inicio)) {
      $projeto->data_inicio= $request->data_inicio;
    }
    if (isset($request->data_termino)) {
      $projeto->data_termino= $request->data_termino;
    }
    if (isset($request->valor_projeto)) {
        $projeto->valor_projeto= $request->valor_projeto;
    }
    if (isset($request->status)) {
        $projeto->status= $request->status;
    }
    $projeto-> update();
        
    return response()->json([
      'status' => true,
      'message' => 'projeto atualizado'
    ]);
}
public function delete($id)
{
  $projeto= projeto::find($id);

  if (!isset($projeto)) {
    return response()->json([
      'status' => false,
      'message' => "projeto nao encontrado "
    ]);
}

  $projeto->delete();
  return response()->json([
    'status' => true,
    'message' => "projeto deletado com sucesso"
  ]);

}
public function buscarPorId(Request $request)
        {
          $projeto = projeto::where('id', 'like', '%' . $request->buscarPorId . '%')->get();
      
          if (count($projeto) > 0) {
            return response()->json([
              'status' => true,
              'data' => $projeto
            ]);
        }
  
}
public function buscarPorNome(Request $request)
{
  $projeto = projeto::where('nome', 'like', '%' . $request->buscarPorNome . '%')->get();

  if (count($projeto) > 0) {
    return response()->json([
      'status' => true,
      'data' => $projeto
    ]);
}

  }
}