<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\EndFixedPriceItemResponseType;

class EndFixedPriceItemResponse extends BaseResponse
{
	/**
	 * @var EndFixedPriceItemResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\EndFixedPriceItemResponseType")
	 */
	public $endFixedPriceItemResponse;
}