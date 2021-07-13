<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class indexModel extends Model
{
    public function getData() {
        return DB:: table('barang')->get();
    }

    public function addData($data) {
        DB::table('barang')->insert($data);
    }
}
