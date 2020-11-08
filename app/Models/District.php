<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Thana;
use App\Models\Property;

class District extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_en',
        'name_bn',
        'created_at',
        'updated_at'

    ];

    public function thanas()
    {
        return $this->hasMany(Thana::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
