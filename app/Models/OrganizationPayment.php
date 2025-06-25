<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrganizationPayment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'organization_invoice_id',
        'amount',
        'method',
        'reference',
        'paid_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected function casts(): array
    {
        return [
            'paid_at' => 'datetime',
        ];
    }

    /**
     * Relationships
     */
    public function invoice()
    {
        return $this->belongsTo(OrganizationInvoice::class);
    }
}
