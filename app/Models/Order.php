<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property Carbon $orderdate
 * @property int $user_id
 * @property int $status
 *
 * @property-read User $user
 * @property-read Collection<int, OrderRow> $orderRows
 */
class Order extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'orderdate',
        'user_id',
        'status',
    ];

    protected $casts = [
        'orderdate' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function orderRows(): HasMany
    {
        return $this->hasMany(OrderRow::class);
    }
}