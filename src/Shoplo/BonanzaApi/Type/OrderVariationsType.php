<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class OrderVariationsType
{
	/**
	 * @var OrderVariationType[]
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\OrderVariationType>")
	 */
	public $variation;
}