<?php

namespace App\Http\Controllers;

use App\Friend;
use App\Http\Resources\Friend as FriendResource;
use App\User;
use App\Exceptions;
use Illuminate\Database\Eloquent\ModelNotFoundException;
// use Illuminate\Foundation\Validation\ValidationException;
use Illuminate\Database\Eloquent\ValidationException;

use Illuminate\Http\Request;

class FriendRequestController extends Controller
{
    public function store()
    {
        try {
            $data = request()->validate([
                'friend_id' => 'required',
            ]);
        } catch(ValidationException $e) {
           throw new ValidationErrorException(json_encode($e->errors()));
        }


        try {
            User::findOrFail($data['friend_id'])
                ->friends()->syncWithoutDetaching(auth()->user());
        } catch (ModelNotFoundException $e) {
            throw new UserNotFoundException();
        }
        
        return new FriendResource(
            Friend::where('user_id', auth()->user()->id)
                ->where('friend_id', $data['friend_id'])
                ->first()
        );
    }
}


// sync rule 30 withoutdetaching enables to save only one record in order to prevent multiple friendrequests of one user. 