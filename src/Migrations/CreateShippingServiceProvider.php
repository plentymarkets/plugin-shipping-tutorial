<?php

namespace ShippingTutorial\Migrations;

use Plenty\Modules\Order\Shipping\ServiceProvider\Contracts\ShippingServiceProviderRepositoryContract;
use Plenty\Plugin\Log\Loggable;


class CreateShippingServiceProvider
{
    use loggable;
	/*
	 * @var ShippingServiceProviderRepositoryContract $shippingServiceProviderRepository
	 */
	private $shippingServiceProviderRepository;

	/**
	 * @param ShippingServiceProviderRepositoryContract $shippingServiceProviderRepository
	 */
	public function __construct(ShippingServiceProviderRepositoryContract $shippingServiceProviderRepository)
	{
		$this->shippingServiceProviderRepository = $shippingServiceProviderRepository;
	}

	/**
	 * @return void
	 */
	public function run()
	{
        try
        {
            $this->shippingServiceProviderRepository->saveShippingServiceProvider(
                'ShippingTutorial',
                'plentymarkets ShippingTutorial');

        }
        catch (\Exception $e)
        {
            $this->getLogger('ShippingTutorial')->critical('Could not save or update shipping service provider');
        }

	}
}