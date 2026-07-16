<?php

namespace ShippingTutorial\Migrations;

use ShippingTutorial\Configuration\PluginConfiguration;
use Plenty\Modules\Order\Shipping\ServiceProvider\Contracts\ShippingServiceProviderRepositoryContract;

class CreateShippingServiceProvider
{
    private $shippingServiceProviderRepository;

    public function __construct(ShippingServiceProviderRepositoryContract $shippingServiceProviderRepository)
    {
        $this->shippingServiceProviderRepository = $shippingServiceProviderRepository;
    }

    public function run()
    {
        $this->shippingServiceProviderRepository->saveShippingServiceProvider(
            PluginConfiguration::PLUGIN_NAME,
            PluginConfiguration::SHIPPING_PROVIDER
        );
    }
}
