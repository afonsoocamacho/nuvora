<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'organization_id',
        'member_type_id',
        'country_id',
        'card_number',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'birthdate',
        'status',
        'joined_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected function casts(): array
    {
        return [
            'birthdate' => 'date',
            'joined_at' => 'datetime',
        ];
    }

    /**
     * Relationships
     */

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
    public function addresses()
    {
        return $this->hasMany(MemberAddress::class);
    }
    public function bankAccounts()
    {
        return $this->hasMany(MemberBankAccount::class);
    }
    public function memberships()
    {
        return $this->hasMany(MemberMembership::class);
    }
    public function invoices()
    {
        return $this->hasMany(MemberInvoice::class);
    }
    public function memberType()
    {
        return $this->belongsTo(MemberType::class);
    }
    public function activeMembership()
    {
        return $this->hasOne(MemberMembership::class)
            ->where('status', 'active')
            ->orderByDesc('start_at'); // latest active, just in case
    }
}
