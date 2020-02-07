<?php

namespace App;

use App\Models\TwitterAccount;
use App\Notifications\PassResetNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function twitterAccounts(): HasMany
    {
        return $this
            ->hasMany(TwitterAccount::class)
            ->orderBy('id', 'desc')
        ;
    }

    /**
     * パスワードリセット通知の送信をオーバーライド
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
      $this->notify(new PassResetNotification($token));
    }

    public function findTargetTwitterAccountById(int $twitterAccountId): TwitterAccount
    {
        return $this
            ->twitterAccounts()
            ->with(
                'targetTwitterAccounts',
                'targetTwitterFollowKeywords',
                'targetTwitterLikeKeywords',
                'twitterTweetReservations'
            )
            ->findOrFail($twitterAccountId)
        ;
    }
}
