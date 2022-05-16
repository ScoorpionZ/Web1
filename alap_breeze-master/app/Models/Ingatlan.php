<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingatlan extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table='ingatlan';
    protected $fillable = ['id','kategoria','leiras','hirdetesDatuma','tehermentes','ar','kepUrl'];

    public function kategoria()
    {
        return $this->hasOne(Kategoria::class, 'id', 'kategoria');
    }
}
