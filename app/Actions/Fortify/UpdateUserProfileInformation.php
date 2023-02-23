<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'paypal_address' => [
            'required',
            'string',
            'email',
            'max:255',
            // Rule::unique('paypal_address')->ignore($user->id),
            ],
        ])->validateWithBag('updateProfileInformation');

        if ($input['paypal_address'] !== $user->paypal_address) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'paypal_address' => $input['paypal_address'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'paypal_address' => $input['paypal_address'],
            // 'name' => $input['name'],
            // 'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        // $user->sendEmailVerificationNotification();
    }
}
