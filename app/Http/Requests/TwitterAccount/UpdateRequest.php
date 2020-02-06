<?php

namespace App\Http\Requests\TwitterAccount;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->twitterAccounts()->find($this->route('id'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'unfollow_range' => ['required', 'integer', 'min:7', 'max:99'],

            'target_twitter_accounts.*.id' => ['sometimes', 'nullable', 'integer'],
            'target_twitter_accounts.*.uid' => ['required', 'integer'],
            'target_twitter_accounts.*.name' => ['required', 'string'],
            'target_twitter_accounts.*.nickname' => ['required', 'string'],
            'target_twitter_accounts.*.description' => ['nullable', 'string'],
            'target_twitter_accounts.*.avatar' => ['nullable', 'string'],

            'target_twitter_follow_keywords.*.id' => ['sometimes', 'nullable', 'integer'],
            'target_twitter_follow_keywords.*.condition' => ['required', 'string'],
            'target_twitter_follow_keywords.*.word' => ['required', 'string', 'min:1', 'max:100'],

            'target_twitter_like_keywords.*.id' => ['sometimes', 'nullable', 'integer'],
            'target_twitter_like_keywords.*.condition' => ['required', 'string'],
            'target_twitter_like_keywords.*.word' => ['required', 'string', 'min:1', 'max:100'],
        ];
    }
}
