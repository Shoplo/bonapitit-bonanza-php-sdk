<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class SellerInfoType
{

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $storeOwner;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $storeURL;
}