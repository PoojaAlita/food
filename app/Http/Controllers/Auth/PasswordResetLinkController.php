<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    /* public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    } */


public function store(Request $request)
{
    $request->validate([
        'email' => ['required', 'email'],
    ]);

    try {
        $status = Password::sendResetLink(
           $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('status', __('A password reset link has been sent to your email address.'));
        } else {
            return back()->withInput($request->only('email'))->withErrors(['email' => __($status)]);
        }
    } catch (\Exception $e) {
        Log::error('Password reset email error: ' . $e->getMessage());
        return back()->withInput($request->only('email'))->withErrors(['email' => __('An error occurred while sending the password reset email.')]);
    }
}

}
