<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\indexModel;

class indexController extends Controller
{
    public function __construct(){
        $this->indexModel = new indexModel();
    }

    public function index(){
        $data = [
            'barang'=>$this->indexModel->getData()
        ];
        return view ('index', $data);
    }

    public function insert(){
        $file = Request()->gambar;
        $fileName = Request()->nama.'.'.$file->extension();
        $file->move(public_path('gambar'), $fileName);

        $data = [
            'nama' => request()->nama,
            'harga' => request()->harga,
            'deskripsi' => request()->deskripsi,
            'kategoriId' => request()->kategori,
            'gambar' => $fileName,
        ];

        $this->indexModel->addData($data);
        return redirect()->  route ('index1')-> with('pesan', 'barang berhasil diinput!'); 
    }
}
