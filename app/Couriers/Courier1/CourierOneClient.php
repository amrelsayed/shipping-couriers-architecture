<?php

namespace App\Couriers\Courier1;

use App\Couriers\Courier1\CourierOneInterface;

class CourierOneClient implements CourierOneInterface
{
	private $orderPrice;

	private $deliveryFees;

	private $shippingAdress;

	public function createShipmentAndGetWaybill($orderPrice, $deliveryFees, $shippingAdress)
	{
		$this->orderPrice = $orderPrice;
		$this->deliveryFees = $deliveryFees;
		$this->shippingAdress = $shippingAdress;
	}

	public function getShipmentTrackingDetails()
	{
		return array(
			'order_price' => $this->orderPrice,
			'delivery_fees' => $this->deliveryFees,
			'shipping_address' => $this->shippingAdress,
		);
	}
}