<?php


namespace Apackage\Astore\FacadeClasses;


use AmrShawky\LaravelCurrency\Facade\Currency;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
class CurrentCurrency 
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $converted = '';

        if($request->filled("currency_from")){
            $convertedObj = Currency::convert()
                    ->from($request->get('currency_from'))
                    ->to($request->get('currency_to'))
                    ->amount($request->get('amount'));
                    
            if($request->filled('date')){
                $convertedObj = $convertedObj->date($request->get('date'));
            }

            $converted = $convertedObj->get();
        }
        
        return view('astore::currency',compact('converted'));
    }
}