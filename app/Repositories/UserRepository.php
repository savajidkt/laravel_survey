<?php

namespace App\Repositories;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    /**
     * Method create
     *
     * @param array $data [explicite description]
     *
     * @return User
     */
    public function create(array $data): User
    {
        $data = [
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'email'         => $data['email'],
            'password'      => Hash::make($data['password']),
        ];

        return User::create($data);
    }

    /**
     * Method update
     *
     * @param array $data [explicite description]
     * @param User $user [explicite description]
     *
     * @return User
     * @throws Exception
     */
    public function update(array $data, User $user): User
    {
        $data = [
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'email'         => $data['email']
        ];

        if( isset($data['password']) )
        {
            $data['password'] = Hash::make($data['password']);
        }

        if( $user->update($data) )
        {
            return $user;
        }

        throw new Exception('User update failed.');
    }

    /**
     * Method delete
     *
     * @param User $user [explicite description]
     *
     * @return bool
     * @throws Exception
     */
    public function delete(User $user): bool
    {
        if( $user->delete() )
        {
            return true;
        }

        throw new Exception('User delete failed.');
    }
}