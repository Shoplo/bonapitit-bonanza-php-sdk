<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ItemArrayType
{
	/**
	 * @var ItemType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\ItemType")
	 */
	public $item;
}