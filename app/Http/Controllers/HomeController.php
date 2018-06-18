<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{
   
    
    public function paymentPage(){
        
        $parameters=array();
        
        return view('payment',$parameters);
    }
}
