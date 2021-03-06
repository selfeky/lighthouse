<?php

namespace Nuwave\Lighthouse\Tests\Support\Models;

use Illuminate\Database\Eloquent\Model;
use Nuwave\Lighthouse\Support\Traits\RelayConnection;

class User extends Model
{
    use RelayConnection;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id', 'name', 'email',
    ];

    /**
     * User's assigned tasks.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    /**
     * User assigned company.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
