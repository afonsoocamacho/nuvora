<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MemberMembership extends Model
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
        'membership_id',
        'membership_price_id',
        'billing_cycle',
        'price',
        'start_at',
        'end_at',
        'status',
        'renewal_type'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected function casts(): array
    {
        return [
            'start_at' => 'date',
            'end_at' => 'date',
        ];
    }

    /**
     * Relationships
     */

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }

    public function price()
    {
        return $this->belongsTo(MembershipPrice::class, 'membership_price_id');
    }
}
