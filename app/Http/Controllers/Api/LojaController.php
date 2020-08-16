<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Loja\LojaRequest;
use App\Services\LojaService;
use Illuminate\Http\Request;

class LojaController extends Controller
{
    private $lojaService;

    public function __construct(LojaService $lojaService)
    {
        $this->lojaService = $lojaService;
    }
    public function create(LojaRequest $request)
    {
        $loja = $this->lojaService->create($request);

        return response()->json($loja, 201);
    }

    public function update($loja_id, LojaRequest $request)
    {
        $loja = $this->lojaService->update($loja_id, $request);

        if ($loja) {
            return response()->json($loja, 200);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function show($loja_id)
    {
        $loja = $this->lojaService->show($loja_id);

        if ($loja) {
            return response()->json($loja, 200);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function destroy($loja_id)
    {
        $loja = $this->lojaService->destroy($loja_id);

        if ($loja) {
            return response()->json([], 204);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function list()
    {
        $lojas = $this->lojaService->list();

        return response()->json($lojas, 200);
    }
}
