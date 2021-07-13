<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class katalogModel extends Model
{
    public function getData() {
        return DB:: table('barang')->paginate(20);
    }
}
