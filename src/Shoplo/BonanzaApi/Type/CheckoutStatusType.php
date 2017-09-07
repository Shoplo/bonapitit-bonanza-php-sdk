<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class CheckoutStatusType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $status;
}