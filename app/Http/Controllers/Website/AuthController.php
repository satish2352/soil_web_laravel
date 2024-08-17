<?php
namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;

class AuthController extends Controller {
    
    public function resetPasswordPage($token)
    {
        // Validate the token
        $passwordReset = \DB::table('password_resets')->where('token', $token)->first();

        if (!$passwordReset) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid or expired password reset token.'
            ]);
        }

        // Return a view or form for the user to reset their password
        // For example, you might render a Blade view or return a JSON response
        return view('reset_password', ['token' => $token]);
    }

}