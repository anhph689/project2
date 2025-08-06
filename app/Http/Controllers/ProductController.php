<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        //Danh sách sản phẩm
        $listProducts = [
            [
                'id' => '1',
                'name' => 'iphone14'
            ],
            [
                'id' => '2',
                'name' => 'iphone15'
            ]
        ];
        // return view('list-product')->with([
        //     'listProducts' => $listProducts
        // ]);
        return view('list-product', compact('listProducts'));
    }

    public function getProduct($id, $name = ''){
        echo $id;
        echo $name;
    }

    public function updateProduct(Request $request){
        echo $request->id;
        echo $request->name;
    }
}
