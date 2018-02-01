<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\AddItemType;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

class AddFixedPriceItemRequest extends SecureRequest
{
	/**
	 * @var AddItemType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\AddItemType")
	 */
	public $item;
}
