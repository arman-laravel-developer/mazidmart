<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products ()
    {
        return $this->hasMany(OfferProduct::class, 'offer_id', 'id');
    }
}
