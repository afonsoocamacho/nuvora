<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MemberInvoice extends Model
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
        'member_membership_id',
        'reference',
        'amount',
        'amount_paid',
        'currency',
        'status',
        'issued_at',
        'due_at',
        'notes'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected function casts(): array
    {
        return [
            'issued_at' => 'date',
            'due_at' => 'date',
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
        return $this->belongsTo(MemberMembership::class, 'member_membership_id');
    }

    public function payments()
    {
        return $this->hasMany(MemberPayment::class);
    }
}
