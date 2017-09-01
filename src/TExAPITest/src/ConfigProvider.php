<?php

namespace TExAPITest;

/**
 * The configuration provider for the App module
 *
 * @see https://docs.zendframework.com/zend-component-installer/
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencies(),
            'templates'    => $this->getTemplates(),
        ];
    }

    /**
     * Returns the container dependencies
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            'invokables' => [
                Action\PingAction::class => Action\PingAction::class,
            ],
            'factories'  => [
                Action\HomePageAction::class => Action\HomePageFactory::class,

                Action\Automovel\Action\Deletar::class => Action\Automovel\Factory\Deletar::class,
                Action\Automovel\Action\Editar::class => Action\Automovel\Factory\Editar::class,
                Action\Automovel\Action\Inserir::class => Action\Automovel\Factory\Inserir::class,
                Action\Automovel\Action\Listar::class => Action\Automovel\Factory\Listar::class,
                Action\Automovel\Action\Buscar::class => Action\Automovel\Factory\Buscar::class,


            ],
        ];
    }

    /**
     * Returns the templates configuration
     *
     * @return array
     */
    public function getTemplates()
    {
        return [
            'paths' => [
                'app'    => [__DIR__ . '/../templates/app'],
                'error'  => [__DIR__ . '/../templates/error'],
                'layout' => [__DIR__ . '/../templates/layout'],
            ],
        ];
    }
}
