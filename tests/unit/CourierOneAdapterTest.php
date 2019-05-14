<?php

use App\CourierOneAdapter;
use App\Couriers\Courier1\CourierOneClient;
use PHPUnit\Framework\TestCase;

class CourierOneAdapterTest extends TestCase
{
	public function testCanGetShippingDetails()
	{
		$courierOne = new CourierOneClient();

		$courier = new CourierOneAdapter($courierOne);

		$courier->createShipment(400, 20, 'Cairo');

		$shipment_details = $courier->trackShipment();
		
		$this->assertArrayHasKey('order_price', $shipment_details);
		$this->assertArrayHasKey('delivery_fees', $shipment_details);
		$this->assertArrayHasKey('shipping_address', $shipment_details);
	}
}