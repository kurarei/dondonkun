<?php

namespace App\Http\Requests\TwitterTweetReservation;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;
use Auth;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->twitterAccounts()->find($this->route('twitterAccountId'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'message' => ['required', 'string', 'min:1', 'max:140'],
            'reservation_datetime' => ['required'],
        ];
    }


    public function validated(): array
    {
        $validated = parent::validated();
        $validated['reservation_datetime'] = Carbon::parse($validated['reservation_datetime']);
        return $validated;
    }
}
