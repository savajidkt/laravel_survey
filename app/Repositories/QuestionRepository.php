<?php

namespace App\Repositories;

use App\Models\Question;
use Exception;
use Illuminate\Support\Facades\Hash;


class QuestionRepository
{
    /**
     * Method create
     *
     * @param array $data [explicite description]
     *
     * @return Question
     */
    public function create(array $data): Question
    {
        $data = [
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'address'     => $data['address'],
            'email'         => $data['email'],
            'password'      => Hash::make($data['password']),
        ];

        return Question::create($data);
    }

    /**
     * Method update
     *
     * @param array $data [explicite description]
     * @param Question $question [explicite description]
     *
     * @return Question
     * @throws Exception
     */
    public function update(array $data, Question $question): Question
    {
        $data = [
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'address'       => $data['address'],
            'email'         => $data['email']
        ];

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        if ($question->update($data)) {
            return $question;
        }

        throw new Exception('Question update failed.');
    }

    /**
     * Method delete
     *
     * @param Question $question [explicite description]
     *
     * @return bool
     * @throws Exception
     */
    public function delete(Question $question): bool
    {
        if ($question->delete()) {
            return true;
        }

        throw new Exception('Question delete failed.');
    }
}
