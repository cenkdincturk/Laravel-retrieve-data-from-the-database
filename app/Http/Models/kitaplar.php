<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class kitaplar extends Model
{
    protected $table = "kitaplars";
    protected $fillable = ["kitap_adi", "kitap_turu", "kitap_sayfa"];

}
