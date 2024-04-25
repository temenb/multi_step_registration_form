<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'state',
        'user_id',
        'translation_uuid',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function country(): hasOne
    {
        return $this->hasOne(User::class);
    }
}
