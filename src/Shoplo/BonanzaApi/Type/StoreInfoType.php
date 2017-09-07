<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class StoreInfoType
{

	/**
	 * @var StoreDiscountType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\StoreDiscountType")
	 */
	public $storeDiscount;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $storeItemCount;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $storeName;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $storeURL;
}