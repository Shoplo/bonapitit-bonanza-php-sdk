<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class OrderItemArrayType
{
	/**
	 * @var OrderItemType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\OrderItemType")
	 */
	public $item;
}