<?php

namespace App\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class PostException extends Exception
{
    public function __construct(
        string $message = "Error al crear un post",
        int $code = Response::HTTP_INTERNAL_SERVER_ERROR,
        Exception $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function render()
    {
        if (request()->isJson()) {
            return new JsonResponse(
                ['message' => $this->message, 'code' => $this->code],
                $this->code
            );
        }
    }
}
