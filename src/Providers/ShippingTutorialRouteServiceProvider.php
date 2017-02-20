<?php
namespace PluginShippingTutorial\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class ShippingTutorialRouteServiceProvider
 * @package PluginShippingTutorial\Providers
 */
class ShippingTutorialRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->post('shipment/plenty_tutorial/register_shipments', [
            'middleware' => 'oauth',
            'uses'       => 'PluginShippingTutorial\Controllers\ShipmentController@registerShipments'
        ]);
  	}

}
