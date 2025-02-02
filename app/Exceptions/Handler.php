<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {   
        if($exception instanceof \Tymon\JWTAuth\Exceptions\TokenBlacklistedException){
            return response(["Error" => "Token is expired get New One"], \Symfony\Component\HttpFoundation\Response::HTTP_BAD_REQUEST);
        }

        if($exception instanceof \Tymon\JWTAuth\Exceptions\Tymon\JWTAuth\Exceptions\TokenInvalidException){
            return response(["Error" => "Token is invalid"], \Symfony\Component\HttpFoundation\Response::HTTP_BAD_REQUEST);
        }

        if($exception instanceof \Tymon\JWTAuth\Exceptions\Tymon\JWTAuth\Exceptions\TokenExpiredException){
            return response(["Error" => "Token is expired"], \Symfony\Component\HttpFoundation\Response::HTTP_BAD_REQUEST);
        }

        if($exception instanceof \Tymon\JWTAuth\Exceptions\JWTException){
            return response(["Error" => "Token is not provided"], \Symfony\Component\HttpFoundation\Response::HTTP_BAD_REQUEST);
        }
        return parent::render($request, $exception);
    }
}
