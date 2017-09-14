<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\GetOrdersReponseType;

class GetOrdersResponse extends BaseResponse
{
	/**
	 * @var GetOrdersReponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\GetOrdersReponseType")
	 */
	public $getOrdersResponse;
}