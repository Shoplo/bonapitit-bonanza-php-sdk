<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\GetSingleItemResponseType;

class GetUnlistedItemResponse extends BaseResponse
{
	/**
	 * @var GetSingleItemResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\GetSingleItemResponseType")
	 */
	public $getUnlistedItemResponse;
}