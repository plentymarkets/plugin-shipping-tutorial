<?php
namespace ShippingTutorial\Providers;

use ShippingTutorial\Configuration\PluginConfiguration;
use Plenty\Modules\Order\Shipping\ServiceProvider\Services\ShippingServiceProviderService;
use Plenty\Plugin\ServiceProvider;

/**
 * Class ShippingTutorialServiceProvider
 * @package ShippingTutorial\Providers
 */
class ShippingTutorialServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
	    // add REST routes by registering a RouteServiceProvider if necessary
//	     $this->getApplication()->register(ShippingTutorialRouteServiceProvider::class);
    }

    public function boot(ShippingServiceProviderService $shippingServiceProviderService)
    {

        $shippingServiceProviderService->registerShippingProvider(
            PluginConfiguration::PLUGIN_NAME,
            ['de' => '*** Plenty shipping tutorial ***', 'en' => '*** Plenty shipping tutorial ***'],
            [
                PluginConfiguration::PLUGIN_NAME . '\\Controllers\\ShippingController@registerShipments',
                PluginConfiguration::PLUGIN_NAME . '\\Controllers\\ShippingController@deleteShipments',
            ]);
    }
}
