<?php

namespace App\Traits\Utilities;

use Illuminate\Http\Response;
use App\Helpers\Responses\JsonResponse;
use Illuminate\Validation\ValidationException;

trait HandleJsonValidation
{
    /**
     * pass if validation failed to public validator instance.
     * 
     * @param \Illuminate\Contracts\Validation\Validator $validator
     * @return void
     */
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {   
        if($this->is('api*')){
            throw new ValidationException($validator, JsonResponse::error(
                'Invalid Request Payload',
                Response::HTTP_UNPROCESSABLE_ENTITY,
                $validator->getMessageBag()
            ));
        }
    }
}