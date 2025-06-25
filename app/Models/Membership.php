<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Membership extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'organization_id',
        'name',
        'slug',
        'description',
        'features',
        'is_visible',
        'is_default'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected function casts(): array
    {
        return [
            'features' => 'array',
        ];
    }

    /**
     * Relationships
     */

    public function prices()
    {
        return $this->hasMany(MembershipPrice::class);
    }
}
