<?php

namespace App\Couriers\Courier2;

interface CourierTwoInterface
{
	public function createShipmentInfo($shipping_address);
	
	public function createShipmentInstructions($order_price, $delivery_fees);

	public function getShipmentWaybill();

	public function getShipmentTrackingDetails();
}