<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;

class GetUserProfileRequest
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $userId;
}