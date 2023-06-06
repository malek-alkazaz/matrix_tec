<?php

namespace App\Services;

use App\Models\Cost;
use App\Models\Project;
use App\Models\Currency;
use Illuminate\Http\Request;
use App\Helpers\CurrencyHelper;
use App\Http\Resources\CostResource;

class CostService{

    public function index()
    {
        return $costs = CostResource::collection(Cost::all());
    }

    public function store($request)
    {
        $project = Project::findOrFail($request->project_id);
        foreach ($request->costs as $cost) {
            Cost::create([
                "project_id" => $project->id,
                "name" => $cost['name'],
                "description" => $cost['description'],
                "amount" => $cost['amount'],
                "currency_id" => $cost['currency_id']
            ]);
        }
        return $cost = Cost::where('project_id',$project->id)->get();
    }

    public function show($cost){
        return new CostResource($cost);
    }

    public function update($request , $id){

        $cost = Cost::find($id);
        $cost->update([
            'name' => ($request->name) ? $request->name : $cost->name ,
            'description' => ($request->description) ? $request->description : $cost->description,
            'amount' => ($request->amount) ? $request->amount : $cost->amount,
            'currency_id' => ($request->currency_id) ? $request->currency_id : $cost->currency_id,
        ]);
        return new CostResource($cost);
    }

    public function destroy($id)
    {
        $cost = Cost::find($id);
        if($cost){
            $cost->delete();
            return $id;
        }else{
            return null;
        }
    }

    public function convertCurrency($request){
        $isfound = Currency::where('code', $request->fromCurrency)->firstOrFail();
        if($isfound){
            $currency_from = $request->amount / Currency::where('code', $request->fromCurrency)->firstOrFail()->rate;
            $converted_currency = $currency_from * Currency::where('code', $request->toCurrency)->firstOrFail()->rate;
            return round($converted_currency,2);
        }
    }

    public function calcProjectCost($projectId){
        try {
            $project = Project::find($projectId);
            $defaultCurrency = config('app.default_currency'); // العملة الافتراضية للنظام
            $totalCost = 0;
            foreach ($project->costs as $cost) {
                $totalCost += CurrencyHelper::convertCurrency($cost->amount, $cost->currency, $defaultCurrency);
            }
            return $totalCost;

        } catch (\Throwable $th) {
            return null;
        }
    }

    public function calcProjectCostWithCurrency($projectId, $currencyCode){
        try{
            $project = Project::find($projectId);

            $isfound = Currency::where('code', $currencyCode)->firstOrFail();
            if($isfound){
                $totalCost = 0;
                foreach ($project->costs as $cost) {
                    $totalCost += CurrencyHelper::convertCurrency($cost->amount, $cost->currency, $currencyCode);
                }
                return $totalCost;
            }
            return null;
        } catch (\Throwable $th) {
            return null;
        }
    }
}
