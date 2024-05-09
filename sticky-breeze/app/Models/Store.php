<?php

namespace App\Models;

use App\Enums\StoreStatus;
use App\Observers\StoreObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ObservedBy(StoreObserver::class)]
class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo', 'name', 'slug', 'description', 'status'
    ];

    protected function casts(): array
    {
        return [
            'status' => StoreStatus::class,
        ];
    }

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}
