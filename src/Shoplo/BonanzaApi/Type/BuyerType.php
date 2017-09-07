<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class BuyerType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $email;
}