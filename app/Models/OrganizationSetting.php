<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrganizationSetting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['organization_id', 'key', 'value'];

    /**
     * Relationships
     */

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
