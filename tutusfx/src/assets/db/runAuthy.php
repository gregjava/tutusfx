<?php
	
use DatabaseTransactions;

require '../../bootstrap/autoload.php'; // LOCATE AND EXTRACT THE CORRECT FOLDER!!!

$app = require_once '../../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle( $request = Illuminate\Http\Request::capture() );

$response->send();

$kernel->terminate($request, $response);
