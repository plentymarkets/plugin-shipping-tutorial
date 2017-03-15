<?php
namespace ShippingTutorial\Providers;

use Plenty\Modules\Order\Shipping\ServiceProvider\Services\ShippingServiceProviderService;
use Plenty\Modules\EventProcedures\Services\Entries\ProcedureEntry;
use Plenty\Modules\EventProcedures\Services\EventProceduresService;
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

    /**
     * @param ShippingServiceProviderService $shippingServiceProviderService
     * @param EventProceduresService $eventProceduresService
     */
    public function boot(ShippingServiceProviderService $shippingServiceProviderService, EventProceduresService $eventProceduresService)
    {

        // Example to register shipping service provider
        /*$eventProceduresService->registerProcedure('dpd', ProcedureEntry::PROCEDURE_GROUP_ORDER, [
            'de' => 'dpd registriert',
            'en' => 'dpd registered'
        ], 'DPD\\Procedures\\ShippingNotificationEventProcedure@run');*/


        // Register (For PUSH Calls)
        $shippingServiceProviderService->registerShippingProvider(
            'ShippingTutorial',
            ['de' => '*** Plenty shipping tutorial ***', 'en' => '*** Plenty shipping tutorial ***'],
            [
                'ShippingTutorial\\Controllers\\ShippingController@registerShipments',
                'ShippingTutorial\\Controllers\\ShippingController@getLabels',
                'ShippingTutorial\\Controllers\\ShippingController@deleteShipments',
            ]);
    }
}
