<?php

namespace App\Services;

use App\Models\Cost;
use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Resources\CurrencyResource;

class CurrencyService{

    public function index()
    {
        return $currencys = CurrencyResource::collection(Currency::all());
    }

    public function store($request)
    {
        $currency = Currency::create([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'rate' => $request->input('rate'),
        ]);

        return $currency;
    }

    public function show($currency){
        return new CurrencyResource($currency);
    }

    public function update($request , $id){
        $currency = Currency::find($id);
        $currency->update([
            'name' => ($request->name) ? $request->name : $currency->name ,
            'code' => ($request->code) ? $request->code : $currency->code,
            'rate' => ($request->rate) ? $request->rate : $currency->rate ,
        ]);
        return new CurrencyResource($currency);
    }

    public function destroy($id)
    {
        $currency = Currency::find($id);
        if($currency){
            $currency->delete();
            return $id;
        }else{
            return null;
        }
    }
}
