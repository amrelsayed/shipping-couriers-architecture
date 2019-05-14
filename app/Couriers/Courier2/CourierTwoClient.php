<?php

namespace App\Couriers\Courier2;

use App\Couriers\Courier2\CourierTwoInterface;

class CourierTwoClient implements CourierTwoInterface
{
	private $orderPrice;

	private $deliveryFees;

	private $shippingAdress;

	public function createShipmentInfo($shippingAdress)
	{
		$this->shippingAdress = $shippingAdress;
	}

	public function createShipmentInstructions($orderPrice, $deliveryFees)
	{
		$this->orderPrice = $orderPrice;
		$this->deliveryFees = $deliveryFees;
	}

	public function getShipmentWaybill()
	{
		return array(
			'order_price' => $this->orderPrice,
			'delivery_fees' => $this->deliveryFees,
		);
	}

	public function getShipmentTrackingDetails()
	{
		return array(
			'shipping_address' => $this->shippingAdress,
		);
	}
}