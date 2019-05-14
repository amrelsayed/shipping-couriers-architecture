<?php

namespace App;

use App\Couriers\Courier1\CourierOneInterface;
use App\ShipmentInterface;

class CourierOneAdapter implements ShipmentInterface
{
	private $courierOne;

	public function __construct(CourierOneInterface $courierOne)
	{
		$this->courierOne = $courierOne;
	}

	public function createShipment($orderPrice, $deliveryFees, $shippingAdress)
	{
		$this->courierOne->createShipmentAndGetWaybill($orderPrice, $deliveryFees, $shippingAdress);
	}

	public function trackShipment()
	{
		return $this->courierOne->getShipmentTrackingDetails();
	}
}