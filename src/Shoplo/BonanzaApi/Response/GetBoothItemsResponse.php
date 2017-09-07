<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\GetBoothItemsResponseType;

class GetBoothItemsResponse extends BaseResponse
{
	/**
	 * @var GetBoothItemsResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\GetBoothItemsResponseType")
	 */
	public $getBoothItemsResponse;
}