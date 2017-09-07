<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\GetUserResponseType;

class GetUserResponse extends BaseResponse
{
	/**
	 * @var GetUserResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\GetUserResponseType")
	 */
	public $getUserResponse;
}