<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $price
 * @property Carbon $effdate
 * @property int $product_id
 *
 * @property-read Product $product
 */
class Price extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'price',
        'effdate',
        'product_id',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'effdate' => 'datetime',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}