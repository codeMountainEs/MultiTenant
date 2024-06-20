<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $fillable = [
        'name',
        'color',
    ];

    protected static function booted(): void
    {
        self::addGlobalScope('for_logged_rider', function (Builder $builder): void {
            if (auth()->guard('rider')->check()) {
                $builder->where('rider_id', auth()->id());
            }
        });

        self::saving(function (self $task): void {
            $task->rider_id = auth()->id();
        });
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function rider(): BelongsTo
    {
        return $this->belongsTo(Rider::class);
    }
}
