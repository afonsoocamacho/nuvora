<?php

namespace App\Models;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Notifications\Notifiable;

class Organization extends Authenticatable
{
    use HasFactory, SoftDeletes, Notifiable, TwoFactorAuthenticatable;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'slug',
        'type',
        'phone_number',
        'email',
        'email_verified_at',
        'password',
        'vat_number',
        'description',
        'logo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relationships
     */

    public function socialLinks()
    {
        return $this->hasMany(OrganizationSocialLink::class);
    }
    public function addresses()
    {
        return $this->hasMany(OrganizationAddress::class);
    }
    public function bankAccounts()
    {
        return $this->hasMany(OrganizationBankAccount::class);
    }
    public function settings()
    {
        return $this->hasMany(OrganizationSetting::class);
    }
    public function sessions()
    {
        return $this->hasMany(OrganizationSession::class);
    }
    public function plans()
    {
        return $this->hasMany(OrganizationPlan::class);
    }
    public function members()
    {
        return $this->hasMany(Member::class);
    }
    public function invoices()
    {
        return $this->hasMany(OrganizationInvoice::class);
    }
}
