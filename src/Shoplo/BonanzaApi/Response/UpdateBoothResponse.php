<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\UpdateBoothResponseType;

class UpdateBoothResponse extends BaseResponse
{
	/**
	 * @var UpdateBoothResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\UpdateBoothResponseType")
	 */
	public $updateBoothResponse;
}