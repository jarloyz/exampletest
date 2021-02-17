<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
    /**
     * The forecast that belong to the city.
     */
    public function forecast(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Forecast::class);
    }

}
