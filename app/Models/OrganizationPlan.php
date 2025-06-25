<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrganizationPlan extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected $fillable = [
        'organization_id',
        'plan_id',
        'plan_price_id',
        'billing_cycle',
        'price',
        'start_at',
        'end_at',
        'status'
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

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function price()
    {
        return $this->belongsTo(PlanPrice::class);
    }
}
