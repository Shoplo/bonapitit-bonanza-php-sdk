<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class OrderItemType extends ItemType
{
	/**
	 * @var OrderVariationsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\OrderVariationsType")
	 */
	public $variations;

}