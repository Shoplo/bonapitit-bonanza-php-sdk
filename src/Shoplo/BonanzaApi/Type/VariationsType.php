<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class VariationsType
{
	/**
	 * @var VariationType[]
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\VariationType>")
	 */
	public $variation;
}