<?php

namespace App\Couriers\Courier1;

interface CourierOneInterface
{
	public function createShipmentAndGetWaybill($orderPrice, $deliveryFees, $shippingAdress);

	public function getShipmentTrackingDetails();
}