<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Facture;

class FactureDetails extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function facture()
    {
        return $this->belongsTo(Facture::class, 'facture_id', 'id');
    }
}