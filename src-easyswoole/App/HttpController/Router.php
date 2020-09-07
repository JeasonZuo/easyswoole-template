<?php
namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\AbstractRouter;
use FastRoute\RouteCollector;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;

class Router extends  AbstractRouter
{
    function initialize(RouteCollector $routeCollector)
    {
        $routeCollector->get('/test' ,function (Request $request, Response $response) {
            $response->write('this router index');
        });
    }
}