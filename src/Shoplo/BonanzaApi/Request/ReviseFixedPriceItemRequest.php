<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;

class ReviseFixedPriceItemRequest extends AddFixedPriceItemRequest
{
	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $itemID;

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $discardOldVariations;
}
