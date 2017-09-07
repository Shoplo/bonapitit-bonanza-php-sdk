<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\GetCategoriesResponseType;

class GetCategoriesResponse extends BaseResponse
{
	/**
	 * @var GetCategoriesResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\GetCategoriesResponseType")
	 */
	public $getCategoriesResponse;
}