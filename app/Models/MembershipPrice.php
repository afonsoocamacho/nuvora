<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MembershipPrice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['membership_id', 'billing_cycle', 'price', 'currency_id'];

    /**
     * Relationships
     */

    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }
}
