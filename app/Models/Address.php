<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property string $uuid
 * @property bool $state
 * @property string $user_uuid
 * @property string $translation_uuid
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Address extends Model
{
    public $fillable = [
        'user_id',
        'country_id',
        'city',
        'address',
        'zip_code',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function country(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
