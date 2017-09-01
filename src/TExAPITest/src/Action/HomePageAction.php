<?php

namespace TExAPITest\Action;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router;
use Zend\Expressive\Template;
use Zend\Expressive\Plates\PlatesRenderer;
use Zend\Expressive\Twig\TwigRenderer;
use Zend\Expressive\ZendView\ZendViewRenderer;

class HomePageAction implements ServerMiddlewareInterface
{
    private $router;
    private $template;
    private $entityManager;

    public function __construct(
        Router\RouterInterface $router)
    {
        $this->router   = $router;
    }

    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {


            return new JsonResponse([
                'endPoint' => '/api/carro',
            ]);

    }
}
