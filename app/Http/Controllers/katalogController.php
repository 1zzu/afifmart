<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\katalogModel;


class katalogController extends Controller
{
    public function __construct(){
        $this->katalogModel = new katalogModel();   
    }    
    public function katalog(){
        $data = [
            'barang' => $this -> katalogModel -> getData()
        ];
        return view ('katalog', $data); 
    }
}
