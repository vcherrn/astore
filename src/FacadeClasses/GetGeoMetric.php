<?php


namespace Apackage\Astore\FacadeClasses;


use AmrShawky\LaravelCurrency\Facade\GeoMetric;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
class GetGeoMetric 
{
    
    
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $pricetag = [500,1000,1500,2500];
        $price = array_rand(array_flip($pricetag), 1);
       
        return $price;
    }
}