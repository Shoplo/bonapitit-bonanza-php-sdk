<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;

class GetCategoryTraitsRequest
{
	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $categoryId;
}
