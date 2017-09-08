<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\ItemType;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

class AddFixedPriceItemRequest
{
	/**
	 * @var RequesterCredentialsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\RequesterCredentialsType")
	 */
	public $requesterCredentials;

	/**
	 * @var ItemType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\ItemType")
	 */
	public $item;
}
