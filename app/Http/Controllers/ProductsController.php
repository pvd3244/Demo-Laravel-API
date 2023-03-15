<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $title = 'Xin chao cac ban';
        $x = 10;
        $arr = [
            'name' => 'Pham Dinh',
            'age' => '21',
        ];
        // \Debugbar::info($arr);
        // \Debugbar::error('Error!');
        // \Debugbar::warning('Watch out ???');
        // \Debugbar::addMessage('Message 123', 'mylabel');
        //return view('products.index', compact('title', 'x', 'arr')); 
        return view('products.index', [
            'title' => $title,
            'x' => $x,
            'arr' => $arr
        ]);
    }

    public function detail($name, $id)
    {
        return view('products.index', [
            'name' => $name,
            'id' => $id
        ]);
    }

    public function getData(Request $request)
    {
        dd($request->all());
        return $request;
    }
}
