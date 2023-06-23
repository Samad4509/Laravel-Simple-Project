<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $products=[];
    public function __construct()
    {
        $this->products=[
            '0'=>[
                'id'=>1,
                'category_id'=>1,
                'name'=>'Motichur Laddu',
                'price'=>'550',
                'image'=>'img-3/1.jpg',
            ],
            '1'=>[
                'id'=>2,
                'category_id'=>2,
                'name'=>'Regular Vanilla Cake',
                'price'=>'1550',
                'image'=>'img-3/2.jpg',
            ],
            '2'=>[
                'id'=>2,
                'category_id'=>3,
                'name'=>'Brown Bread',
                'price'=>'150',
                'image'=>'img-3/3.jpg',
            ],
            '3'=>[
                'category_id'=>4,
                'name'=>'Brown Bread',
                'price'=>'150',
                'image'=>'img-3/3.jpg',
            ],
            '4'=>[
                'id'=>5,
                'category_id'=>5,
                'name'=>'Butter Cookies',
                'price'=>'550',
                'image'=>'img-3/4.jpg',
            ],
            '5'=>[
                'id'=>6,
                'category_id'=>6,
                'name'=>'Bela Biscuit',
                'price'=>'250',
                'image'=>'img-3/5.jpg',
            ],
            '6'=>[
                'id'=>6,
                'category_id'=>1,
                'name'=>'Bela Biscuit',
                'price'=>'250',
                'image'=>'img-3/5.jpg',
            ],
        ];
    }
    public function getAllProduct()
    {
        return $this->products;
    }
}
