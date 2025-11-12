<?php

namespace App\Exceptions;

<<<<<<< HEAD
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
=======
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399

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
<<<<<<< HEAD
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
=======
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
<<<<<<< HEAD
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
=======
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
>>>>>>> 289fb23019f049e78edf03069ee7b1b551cc9399
    {
        return parent::render($request, $exception);
    }
}
