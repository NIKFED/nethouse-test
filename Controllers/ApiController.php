<?php

namespace Controllers;

use Illuminate\Routing\Controller;

abstract class ApiController extends Controller
{
    protected $statusCode = 200;

    protected function getStatusCode()
    {
        return $this->statusCode;
    }

    protected function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    protected function respond($data, $headers = [])
    {
        return response()->json($data, $this->getStatusCode(), $headers);
    }
}
