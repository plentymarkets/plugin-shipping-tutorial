<?php
namespace ShippingTutorial\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class ShippingTutorialRouteServiceProvider
 * @package ShippingTutorial\Providers
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
            'uses'       => 'ShippingTutorial\Controllers\ShipmentController@registerShipments'
        ]);

        // Example route for rest call from webshop template
        $router->post('shipment/plenty_tutorial/find-parcel-shop-by-address', [
            'middleware' => 'oauth',
            'uses'       => 'ShippingTutorial\Controllers\ShippingTutorial@findParcelShopByAddress'
        ]);

  	}

}
