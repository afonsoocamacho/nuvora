<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrganizationInvoice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'organization_id',
        'organization_plan_id',
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

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function plan()
    {
        return $this->belongsTo(OrganizationPlan::class);
    }

    public function payments()
    {
        return $this->hasMany(OrganizationPayment::class);
    }
}
