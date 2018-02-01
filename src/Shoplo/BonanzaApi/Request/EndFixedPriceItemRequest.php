<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

class EndFixedPriceItemRequest extends SecureRequest
{
	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $itemID;
}
