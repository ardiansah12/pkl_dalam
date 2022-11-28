<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmpanBalik extends Model
{
    use HasFactory;
    public $fillable = ['nama', 'email', 'tanggal', 'pesan'];
    public $timestamps = true;
}
