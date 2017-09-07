<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\GetCategoryTraitsResponseType;

class GetCategoryTraitsResponse extends BaseResponse
{
	/**
	 * @var GetCategoryTraitsResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\GetCategoryTraitsResponseType")
	 */
	public $getCategoryTraitsResponse;
}