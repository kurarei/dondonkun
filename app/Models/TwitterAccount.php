<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;


class TwitterAccount extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'token',
        'secret',
        'uid',
        'name',
        'nickname',
        'email',
        'avatar',
        'user_json',
    ];

    protected $hidden = [
        'uid',
        'token',
        'secret',
        'user_json',
    ];

    protected $casts = [
        'user_json' => 'json',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
