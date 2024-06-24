<?php

namespace App\Helpers\Responses;

class ObjectResponse
{
    /**
     * Returning a success Object Response.
     *
     * @param string $message => Message of Object Response
     * @param int $statusCode => Success HTTP Status Code (2xx Status Code)
     * @param mixed $data     => Data of Object Response (Optional and can be NULL)
     * 
     * @return object
     */
    public static function success(string $message = null, int $statusCode = 200, mixed $data = null): object
    {
        return (object) [
            'code' => $statusCode,
            'message' => $message,
            'success' => true,
            'data' => $data,
        ];
    }

    /**
     * Returning an error Object Response.
     *
     * @param string $message => Message of Object Response
     * @param int $statusCode => Error HTTP Status Code (4xx or 5xx Status Code)
     * @param mixed $errors   => Error Data of Object Response (Optional and can be NULL)
     * 
     * @return object
     */
    public static function error(string $message = null, int $statusCode = 500, mixed $errors = null): object
    {
        return (object) [
            'code' => $statusCode,
            'message' => $message,
            'success' => false,
            'errors' => $errors
        ];
    }

    /**
     * Returning a success Object Response with Access Token.
     *
     * @param string $token   => Access Token of Object Response
     * @param mixed $data     => Data of Object Response (Optional and can be NULL)
     * 
     * @return object
     */
    public static function token(string $token, string $token_expired, mixed $data = null): object
    {
        return (object) [
            'data' => $data,
            'code' => 201,
            'success' => true,
            'token_type' => 'Bearer',
            'token' => [
                'access_token' => $token,
                'expired_at' => $token_expired
            ]
        ];
    }
}