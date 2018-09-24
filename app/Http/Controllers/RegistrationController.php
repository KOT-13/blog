<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Mail\Welcome;
use App\User;
use Illuminate\Support\Facades\Mail;

/**
 * Class RegistrationController
 * @package App\Http\Controllers
 */
class RegistrationController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('registration.create');
    }

    /**
     * @param StoreUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUserRequest $request)
    {
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        auth()->login($user);

        Mail::to($user)->send(new Welcome);

        return redirect()->home();
    }
}
