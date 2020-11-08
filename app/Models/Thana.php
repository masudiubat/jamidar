<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\District;
use App\Models\Region;
use App\Models\Property;

class Thana extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'district_id',
        'name_en',
        'name_bn',
        'created_at',
        'updated_at'

    ];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function regions()
    {
        return $this->hasMany(Region::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
