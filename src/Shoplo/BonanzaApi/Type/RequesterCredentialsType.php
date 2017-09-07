<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class RequesterCredentialsType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $bonanzleAuthToken;
}