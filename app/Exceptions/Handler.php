<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\HttpException;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    // A list of the exception types that are not reported.
    protected $dontReport = [
        AuthorizationException::class,
        AuthenticationException::class,
        HttpException::class,
        QueryExceptionException::class,
        ModelNotFoundException::class,
        ValidationException::class,
        PDOException::class,
    ];

    // A list of the inputs that are never flashed for validation exceptions.
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Throwable $exception)
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
    // public function render($request, Throwable $exception)
    // {
    //     if ($this->isHttpException($exception)) {
    //         if (view()->exists('errors.'.$exception->getStatusCode())) {
    //             return response()->view('errors.'.$exception->getStatusCode(), [], $exception->getStatusCode() );
    //         }
    //     }
    //     return parent::render($request, $exception);
    // }

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $exception) {
            if ($this->isHttpException($exception)) {
                if (view()->exists('errors.'.$exception->getStatusCode())) {
                    return response()->view('errors.'.$exception->getStatusCode(), [], $exception->getStatusCode() );
                }
            }
            return false;
            // return parent::reportable($request, $exception);
        });
    }
}
