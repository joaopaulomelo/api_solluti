<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Produto\ProdutoRequest;
use App\Services\ProdutoService;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $produtoService;

    public function __construct(ProdutoService $produtoService)
    {
        $this->produtoService = $produtoService;
    }
    public function create(ProdutoRequest $request)
    {
        $produto = $this->produtoService->create($request);

        return response()->json($produto, 201);
    }

    public function update($produto_id, ProdutoRequest $request)
    {
        $produto = $this->produtoService->update($produto_id, $request);

        if ($produto) {
            return response()->json($produto, 200);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function show($produto_id)
    {
        $produto = $this->produtoService->show($produto_id);

        if ($produto) {
            return response()->json($produto, 200);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function destroy($produto_id)
    {
        $produto = $this->produtoService->destroy($produto_id);

        if ($produto) {
            return response()->json([], 204);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function list()
    {
        $produtos = $this->produtoService->list();

        return response()->json($produtos, 200);
    }
}
