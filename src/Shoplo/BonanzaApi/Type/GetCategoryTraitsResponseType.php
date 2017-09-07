<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class GetCategoryTraitsResponseType extends BaseResponseType
{
	/**
	 * @var TraitArrayType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\TraitArrayType")
	 */
	public $traitArray;
}