<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Offer;
use App\Models\District;
use App\Models\Thana;
use App\Models\Region;

class Property extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'offer_id',
        'district_id',
        'thana_id',
        'region_id',
        'amount_of_land_en',
        'amount_of_land_bn',
        'near_by_en',
        'near_by_bn',
        'minimum_price_en',
        'minimum_price_bn',
        'road_en',
        'road_bn',
        'house_en',
        'house_bn',
        'floor_en',
        'floor_bn',
        'flat_space_en',
        'flat_space_bn',
        'no_of_bedroom_en',
        'no_of_bedroom_bn',
        'rent_per_month_en',
        'rent_per_month_bn',
        'rent_from_month',
        'description_en',
        'description_bn',
        'created_at',
        'updated_at'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }

    public function District()
    {
        return $this->belongsTo(District::class);
    }

    public function thana()
    {
        return $this->belongsTo(Thana::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
