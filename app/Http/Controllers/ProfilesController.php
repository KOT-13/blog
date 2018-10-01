<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class ProfilesController
 * @package App\Http\Controllers
 */
class ProfilesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $user = Auth::user();
        return view('profiles.show', compact('user'));
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    /**
     * @param StoreUserRequest $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(StoreUserRequest $request, User $user)
    {
        $userData = array_filter($request->all());
        if (isset($userData['password']))
            $userData['password'] = bcrypt($userData['password']);

        $user->fill($userData);
        $user->save();

        return redirect(route('profile.profile.show', compact('user')));
    }
}
