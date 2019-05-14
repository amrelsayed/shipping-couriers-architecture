<?php

namespace App;

interface ShipmentInterface
{
	public function createShipment($orderPrice, $deliveryFees, $shippingAdress);
	
	public function trackShipment();
}
