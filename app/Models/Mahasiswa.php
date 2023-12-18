<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = "nim";
    public $incrementing = false;
    protected $keyType = "string";
    public $timestamps = true;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($mahasiswa) {
            $mahasiswa->updated_at = null;
        });
    }
}
