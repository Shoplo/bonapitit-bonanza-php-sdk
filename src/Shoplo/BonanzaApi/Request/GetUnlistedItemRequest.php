<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

class GetUnlistedItemRequest
{
	/**
	 * @var RequesterCredentialsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\RequesterCredentialsType")
	 */
	public $requesterCredentials;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $itemID;
}
