<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\{BelongsTo};

class IntegrityData extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'id_number', 'user_id', 'institution_id', 'nature_id', 'description', 'category', 'source_id', 'date'];

    protected $casts = [
        'date' => 'date'
    ];

    const OFFICER_CATEGORIES = ['public' => 'public officer', 'state' => 'state officer'];

    protected static function boot()
    {
        parent::boot();

        self::creating(function (IntegrityData $data) {
            $data->user_id = auth()->id();
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function nature(): BelongsTo
    {
        return $this->belongsTo(Nature::class);
    }

    public function source(): BelongsTo
    {
        return $this->belongsTo(Source::class);
    }
}
