<?php

namespace App\Containers\User\Exceptions;

use App\Ship\Parents\Exceptions\Exception;
use Exception as BaseException;
use Symfony\Component\HttpFoundation\Response;

class MessageException extends Exception
{
    public $httpStatusCode = Response::HTTP_BAD_REQUEST;

    public $message = 'Exception Default Message.';

    public $code = 0;

    public function __construct($message = ' ', $errors = null, $statusCode = null, $code = 0, BaseException $previous = null, $headers = [])
    {
        $this->message = $message;
        parent::__construct($message, $errors, $statusCode, $code, $previous, $headers);
    }


    public function render($request)
    {
        return response()->json([
            'message' => $this->message,
        ]);
    }
}
