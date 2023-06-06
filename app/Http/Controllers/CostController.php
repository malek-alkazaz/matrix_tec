<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use App\Models\Project;
use App\Models\Currency;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use App\Services\CostService;
use App\Helpers\CurrencyHelper;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CostController extends Controller
{
    use ResponseAPI;
    private $costService;

    public function __construct(CostService $costService)
    {
        $this->costService = $costService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $costs = $this->costService->index();
        if($costs){
            return $this->success($costs);
        }
        return $this->error();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cost = $this->costService->store($request);
        if($cost){
            return $this->created($cost);
        }
        return $this->error();
    }

    /**
     * Display the specified resource.
     */
    public function show(Cost $cost)
    {
        $cost = $this->costService->show($cost);
        if($cost){
            return $this->success($cost);
        }
        return $this->notFound();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cost $cost)
    {
        $cost = $this->costService->update($request , $cost->id);
        if($cost){
            return $this->success($cost);
        }
        return $this->error();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if($id){
            $cost = $this->costService->destroy($id);
            if($cost == null){
                return $this->notFound();
            }else{
                return $this->deleted($cost);
            }
        }
        return $this->error();
    }


    public function convertCurrency(Request $request)
    {
        try{
            $converted_currency =$this->costService->convertCurrency($request);
            return $this->success($converted_currency);
        }catch (ModelNotFoundException $e) {
            return $this->notFound();
        }
    }

    public function calcProjectCost($projectId)
    {
        $cost = $this->costService->calcProjectCost($projectId);
        if($cost){
            return $this->success($cost);
        }
        return $this->notFound();
    }

    public function calcProjectCostWithCurrency(Request $request)
    {
        $cost = $this->costService->calcProjectCostWithCurrency($request->project_id ,$request->currency);
        if($cost){
            return $this->success($cost);
        }
        return $this->notFound();
    }

}
