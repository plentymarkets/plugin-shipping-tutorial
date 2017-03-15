<?php

namespace ShippingTutorial\Migrations;

use Plenty\Modules\Order\Shipping\ServiceProvider\Contracts\ShippingServiceProviderRepositoryContract;

class CreateShippingServiceProvider
{
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
		$this->shippingServiceProviderRepository->saveShippingServiceProvider(
			['pluginName' => 'ShippingTutorial', 'name' => 'ShippingTutorial']);
	}
}