<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\ItemType;

class ReviseFixedPriceItemRequest
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

	/**
	 * @var ItemType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\ItemType")
	 */
	public $item;
}
