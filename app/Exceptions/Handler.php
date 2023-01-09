<?php

namespace App\Exceptions;

use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
    * A list of the exception types that are not reported.
    *
    * @var array<int, class-string<Throwable>>
    */
    protected $dontReport = [
        //
    ];
    
    /**
    * A list of the inputs that are never flashed for validation exceptions.
    *
    * @var array<int, string>
    */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];
    
    /**
    * Register the exception handling callbacks for the application.
    *
    * @return void
    */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
        $this->renderable(function(QueryException $exception) {
            if ($exception) {
            return redirect()->back()
                 ->with('messages-danger', 'OPS!! Verique se o cliente esta vinculado ao Did ou Ramais. 
                 Exclua o vinculo para prosseguir com a exclusão do cliente');
            }
        });
    }
    

}
