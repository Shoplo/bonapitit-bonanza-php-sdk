<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class OrderArrayType
{
	/**
	 * @var OrderType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\OrderType")
	 */
	public $order;
}