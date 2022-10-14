<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\PasswordRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    /** @var UserRepository $userRepository */
    protected $userRepository;

    /**
     * Constructor to initialize class
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository       = $userRepository;

    }
    /**
     * Method changePassword
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function changePassword(PasswordRequest $request)
    {
        $user = auth()->user();
        $this->userRepository->changePassword($user, $request->except(['_token', '_method']));
        
        return redirect()->route('home')->with('success','Your password changed successfully!');

        //$this->userRepository->create($request->all());

        //return redirect()->route('users.index')->with('success', "User created successfully!");
        // return response()->json([
        //     'status'  => true,
        //     'message' => 'Password changed successfully!'
        // ]);
    }

}
