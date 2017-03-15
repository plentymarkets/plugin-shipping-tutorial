<?php

namespace DPD\Procedures;

use Plenty\Modules\EventProcedures\Events\EventProceduresTriggered;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
use Plenty\Modules\Order\Models\Legacy\Order;
use Plenty\Modules\Order\Shipping\Contracts\ParcelServicePresetRepositoryContract;


/**
 * Class ShippingNotificationEventProcedure
 *
 * Test only, showing how to use an event action from here
 */
class ShippingNotificationEventProcedure
{

	/**
	 */
	public function __construct()
	{
	}

	/**
	 * Run the action from an event action in PY.
	 *
	 * @param EventProceduresTriggered $eventTriggered
	 */
	public function run(EventProceduresTriggered $eventTriggered)
	{
		/** @var Order $order */
		$order = $eventTriggered->getOrder();

		$trackingCode = $this->getTrackingCode($order);
        $shippingProfile = $this->getShippingProfile($order);

	}


	/**
	 * Get tracking code.
	 *
	 * @param Order $order
	 *
	 * @return mixed|null
	 */
	private function getTrackingCode($order)
	{
		try
		{
			/** @var OrderRepositoryContract $orderRepo */
			$orderRepo = pluginApp(OrderRepositoryContract::class);

			$packageNumbers = $orderRepo->getPackageNumbers($order->id);

			if(is_array($packageNumbers) && count($packageNumbers))
			{
				return $packageNumbers[0];
			}
		}
		catch(\Exception $ex)
		{
//			$this->logger->log('Can not get tracking code for order id ' . $order->id . ': ' . $ex->getMessage());
		}

		return null;
	}

	/**
	 * Get the order shipping profile.
	 *
	 * @param Order $order
	 *
	 * @return mixed|null
	 */
	private function getShippingProfile($order)
	{
		try
		{
			/** @var ParcelServicePresetRepositoryContract $parcelServicePresetRepo */
			$parcelServicePresetRepo = pluginApp(ParcelServicePresetRepositoryContract::class);

			$parcelServicePreset = $parcelServicePresetRepo->getPresetById($order->shippingProfileId);

            return $parcelServicePreset;

		}
		catch(\Exception $ex)
		{
//			$this->logger->log('Can not get profile for order id ' . $order->id . ': ' . $ex->getMessage());
		}

		return null;
	}
}
