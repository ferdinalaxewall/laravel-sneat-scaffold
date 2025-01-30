<?php

namespace App\Helpers\Responses;

use Illuminate\Http\JsonResponse as HttpJsonResponse;

class JsonResponse
{
    /**
     * Returning HTTP Response as a success JSON Response.
     *
     * @param  string  $message  => Message of JSON Response
     * @param  int  $statusCode  => Success HTTP Status Code (2xx Status Code)
     * @param  mixed  $data  => Data of JSON Response (Optional and can be NULL)
     */
    public static function success(?string $message = null, int $statusCode = 200, mixed $data = null): HttpJsonResponse
    {
        return response()->json([
            'code' => $statusCode,
            'message' => $message,
            'success' => true,
            'data' => $data,
        ], $statusCode);
    }

    /**
     * Returning HTTP Response as a failed JSON Response.
     *
     * @param  string  $message  => Message of JSON Response
     * @param  int  $statusCode  => Error HTTP Status Code (4xx or 5xx Status Code)
     * @param  mixed  $errors  => Error Data of JSON Response (Optional and can be NULL)
     */
    public static function error(?string $message = null, int $statusCode = 500, mixed $errors = null): HttpJsonResponse
    {
        return response()->json([
            'code' => $statusCode,
            'message' => $message,
            'success' => false,
            'errors' => $errors,
        ], $statusCode);
    }

    /**
     * Returning HTTP Response as a success JSON Response with Access Token.
     *
     * @param  string  $token  => Access Token of JSON Response
     * @param  mixed  $data  => Data of JSON Response (Optional and can be NULL)
     */
    public static function token(string $token, string $token_expired, mixed $data = null, $statusCode = 201): HttpJsonResponse
    {
        return response()->json([
            'data' => $data,
            'code' => $statusCode,
            'success' => true,
            'token_type' => 'Bearer',
            'token' => [
                'access_token' => $token,
                'expired_at' => $token_expired,
            ],
        ], 201);
    }

    /**
     * Returning HTTP Response as a JSON Response from Object Response.
     *
     * @param  object  $objectResponse  => Object Response Resource
     */
    public static function fromObject(object $objectResponse): HttpJsonResponse
    {
        return response()->json((array) $objectResponse, $objectResponse->code);
    }
}
