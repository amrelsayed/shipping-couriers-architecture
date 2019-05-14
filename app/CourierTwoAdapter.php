<?php

namespace App;


use App\Couriers\Courier2\CourierTwoInterface;
use App\ShipmentInterface;

class CourierTwoAdapter implements ShipmentInterface
{
	private $courierTwo;

	public function __construct(CourierTwoInterface $courierTwo)
	{
		$this->courierTwo = $courierTwo;
	}

	public function createShipment($orderPrice, $deliveryFees, $shippingAdress)
	{
		$this->courierTwo->createShipmentInfo($shippingAdress);
		$this->courierTwo->createShipmentInstructions($orderPrice, $deliveryFees);
	}

	public function trackShipment()
	{
		return array_merge($this->courierTwo->getShipmentWaybill(), $this->courierTwo->getShipmentTrackingDetails());
	}
}