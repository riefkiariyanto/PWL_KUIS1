<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angota extends Model
{
    use HasFactory;
    protected $table = 'angotas';
    protected $primaryKey = 'anggota_id';
}
