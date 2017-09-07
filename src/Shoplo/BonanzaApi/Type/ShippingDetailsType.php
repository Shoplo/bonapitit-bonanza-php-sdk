<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ShippingDetailsType
{
	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $amount;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $insuranceFee;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $notes;

	/**
	 * @var string[]
	 *
	 * @Serializer\Type("array<string>")
	 */
	public $servicesArray;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $shippingService;
}