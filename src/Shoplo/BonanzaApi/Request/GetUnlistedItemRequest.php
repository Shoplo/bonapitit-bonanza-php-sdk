<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;

class GetUnlistedItemRequest extends SecureRequest
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $itemID;
}
