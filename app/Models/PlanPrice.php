<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlanPrice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['plan_id', 'billing_cycle', 'price', 'currency_id'];

    /**
     * Relationships
     */

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
    public function organizationPlans()
    {
        return $this->hasMany(OrganizationPlan::class);
    }
}
