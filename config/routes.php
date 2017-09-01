<?php
/**
 * Setup routes with a single request method:
 *
 * $app->get('/', TExAPITest\Action\HomePageAction::class, 'home');
 * $app->post('/album', TExAPITest\Action\AlbumCreateAction::class, 'album.create');
 * $app->put('/album/:id', TExAPITest\Action\AlbumUpdateAction::class, 'album.put');
 * $app->patch('/album/:id', TExAPITest\Action\AlbumUpdateAction::class, 'album.patch');
 * $app->delete('/album/:id', TExAPITest\Action\AlbumDeleteAction::class, 'album.delete');
 *
 * Or with multiple request methods:
 *
 * $app->route('/contact', TExAPITest\Action\ContactAction::class, ['GET', 'POST', ...], 'contact');
 *
 * Or handling all request methods:
 *
 * $app->route('/contact', TExAPITest\Action\ContactAction::class)->setName('contact');
 *
 * or:
 *
 * $app->route(
 *     '/contact',
 *     TExAPITest\Action\ContactAction::class,
 *     Zend\Expressive\Router\Route::HTTP_METHOD_ANY,
 *     'contact'
 * );
 */

$app->get('/', TExAPITest\Action\HomePageAction::class, 'home');
$app->get('/api/ping', TExAPITest\Action\PingAction::class, 'api.ping');

$app->get('/api/carro', TExAPITest\Action\Automovel\Action\Listar::class, 'carros.listar');
$app->post('/api/carro', TExAPITest\Action\Automovel\Action\Inserir::class, 'carros.inserir');
$app->put('/api/carro/{id}', TExAPITest\Action\Automovel\Action\Editar::class, 'carros.editar');
$app->get('/api/carro/{id}', TExAPITest\Action\Automovel\Action\Buscar::class, 'carros.pegar.porId');
$app->delete('/api/carro/{id}', TExAPITest\Action\Automovel\Action\Deletar::class, 'carros.deletar');
