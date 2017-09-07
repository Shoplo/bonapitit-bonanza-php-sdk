<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\GetUserProfileResponseType;

class GetUserProfileResponse extends BaseResponse
{
	/**
	 * @var GetUserProfileResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\GetUserProfileResponseType")
	 */
	public $getUserProfileResponse;
}