<?php

use App\CourierTwoAdapter;
use App\Couriers\Courier2\CourierTwoClient;
use PHPUnit\Framework\TestCase;

class CourierTwoAdapterTest extends TestCase
{
	public function testCanGetCourierTwoShippingDetails()
	{
		$courierTwo = new CourierTwoClient();

		$courier = new CourierTwoAdapter($courierTwo);

		$courier->createShipment(400, 20, 'Cairo');

		$shipment_details = $courier->trackShipment();
		
		$this->assertArrayHasKey('order_price', $shipment_details);
		$this->assertArrayHasKey('delivery_fees', $shipment_details);
		$this->assertArrayHasKey('shipping_address', $shipment_details);
	}
}