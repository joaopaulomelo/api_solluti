<?php


namespace App\Services;


use App\Models\Loja;

class LojaService
{
    private $produto;

    public function __construct(Loja $loja)
    {
        $this->loja = $loja;
    }

    public function create($request)
    {

        return $this->loja->create($request->only($this->loja->getFillable()));
    }

    public function update($loja_id, $request)
    {
        $loja = $this->produto->find($loja_id);

        if ($loja) {
            $loja->nome = $request->nome;
            $loja->email = $request->email;
            $loja->save();

            return $loja;
        } else {
            return null;
        }
    }


    public function show($loja_id)
    {
        return $this->loja->find($loja_id);
    }

    public function destroy($loja_id)
    {
        $loja = $this->show($loja_id);

        if ($loja) {
            $this->loja->find($loja_id)->delete();

            return true;
        } else {
            return false;
        }
    }

    public function list()
    {
        $lojas = Loja::all();

        return $lojas;
    }
}
