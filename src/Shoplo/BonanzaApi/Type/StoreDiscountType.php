<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class StoreDiscountType
{
	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $priceThreshold;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $discountPercent;
}