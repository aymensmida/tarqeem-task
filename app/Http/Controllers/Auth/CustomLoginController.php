<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
class CustomLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard();
    }

    protected function username()
    {
        return 'email';
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');

        // Check if the user exists and is not soft-deleted
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        if (!$user || $user->trashed()) {
            return false;
        }

        return $this->guard()->attempt(
            $credentials, $request->filled('remember')
        );
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    protected function login(Request $request)
    {

        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $user = $this->guard()->getProvider()->retrieveByCredentials($this->credentials($request));

        if ($user && $user->trashed()) {
            return $this->sendFailedLoginResponse($request, 'Your account has been deleted.');
        }

        return $this->sendFailedLoginResponse($request);
    }
}
