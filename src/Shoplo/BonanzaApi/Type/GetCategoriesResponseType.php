<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class GetCategoriesResponseType extends BaseResponseType
{
	/**
	 * @var CategoryArrayType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\CategoryArrayType")
	 */
	public $categoryArray;
}