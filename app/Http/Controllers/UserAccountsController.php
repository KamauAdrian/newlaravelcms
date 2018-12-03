<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccountsController extends Controller
{
    public function store(UserAccountCreatedPostRequest $request, UserAccount $userAccount)
    {
        $userAccountCreated = $userAccount->create($request->all());

        event(new UserWasRegistered($userAccountCreated));

        if ($userAccountCreated) {
            flash()->success('Success', 'The user account has been successfully created!');
        } else {
            flash()->error('Error', 'The user account could not be successfully created!');
        }

        return redirect()->to('/');
    }
}
