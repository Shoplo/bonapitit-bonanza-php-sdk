<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;

class GetSingleItemRequest
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $itemID;
}
