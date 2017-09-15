<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\AddItemType;
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
	 * @var AddItemType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\AddItemType")
	 */
	public $item;
}
