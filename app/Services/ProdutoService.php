<?php


namespace App\Services;


use App\Models\Produto;

class ProdutoService
{
    private $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function create($request)
    {

        return $this->produto->create($request->only($this->produto->getFillable()));
    }

    public function update($produto_id, $request)
    {
        $produto = $this->produto->find($produto_id);

        if ($produto) {
            $produto->nome = $request->nome;
            $produto->valor = $request->valor;
            $produto->loja_id = $request->loja_id;
            $produto->ativo = 1;
            $produto->save();

            return $produto;
        } else {
            return null;
        }
    }


    public function show($produto_id)
    {
        return $this->produto->find($produto_id);
    }

    public function destroy($produto_id)
    {
        $produto = $this->show($produto_id);

        if ($produto) {
            $this->produto->find($produto_id)->delete();

            return true;
        } else {
            return false;
        }
    }

    public function list()
    {
        $produtos = Produto::all();

        return $produtos;
    }


}
