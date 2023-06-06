<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use App\Services\CurrencyService;

class CurrencyController extends Controller
{
    use ResponseAPI;
    private $currencyService;

    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currencys = $this->currencyService->index();
        if($currencys){
            return $this->success($currencys);
        }
        return $this->error();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $currency = $this->currencyService->store($request);
        if($currency){
            return $this->success($currency);
        }
        return $this->error();
    }

    /**
     * Display the specified resource.
     */
    public function show(Currency $currency)
    {
        $currency = $this->currencyService->show($currency);
        if($currency){
            return $this->success($currency);
        }
        return $this->notFound();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Currency $currency)
    {
        $currency = $this->currencyService->update($request , $currency->id);
        if($currency){
            return $this->success($currency);
        }
        return $this->error();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Currency $currency)
    {
        if($currency){
            $currency = $this->currencyService->destroy($currency->id);
            if($currency == null){
                return $this->notFound();
            }else{
                return $this->deleted($currency);
            }
        }
        return $this->error();
    }
}
