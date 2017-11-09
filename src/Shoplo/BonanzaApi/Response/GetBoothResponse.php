<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\GetBoothResponseType;

class GetBoothResponse extends BaseResponse
{
	/**
	 * @var GetBoothResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\GetBoothResponseType")
	 */
	public $getBoothResponse;
}