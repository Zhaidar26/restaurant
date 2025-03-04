<?php
namespace App\Actions\Fortify;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Http\Request;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = auth()->user();

        // Redirect berdasarkan usertype
        if ($user->usertype == 1) {
            return redirect('admin/dashboard'); // Pastikan ini benar
        }


        return redirect('/'); // User biasa
    }
}
