<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MemberAddress extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'organization_id',
        'member_id',
        'type',
        'address',
        'address_line_2',
        'city',
        'postal_code',
        'country_id'
    ];

    /**
     * Relationships
     */

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
