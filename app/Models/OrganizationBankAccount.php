<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrganizationBankAccount extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'organization_id',
        'iban',
        'bic',
        'account_holder_name',
        'is_primary'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'iban' => 'encrypted',
        'bic' => 'encrypted',
    ];

    /**
     * Relationships
     */

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
