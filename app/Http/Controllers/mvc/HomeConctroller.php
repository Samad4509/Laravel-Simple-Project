<?php

namespace App\Http\Controllers\mvc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use function Symfony\Component\Console\Style\choice;

class HomeConctroller extends Controller
{
    public $product,$products=[],$result;
    public function index()
    {
        $this->product=new Product();
        $this->products=$this->product->getAllProduct();
        return view('home',['products'=>$this->products]);
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function calculator()
    {
        return view('calculator');
    }
    public function makeCalculator(Request $request)
    {
       if($request->choice=='+')
       {
           $this->result=$request->first_number +$request->last_number;
       }
        elseif($request->choice=='-')
        {
            $this->result=$request->first_number - $request->last_number;
        }
       return back()->with('massage',$this->result);
    }
}
