<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class CalculatedShippingRateType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $packageSize;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $shippingWeightLbs;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $shippingWeightOz;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $shippingHeight;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $shippingWidth;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $shippingDepth;

}