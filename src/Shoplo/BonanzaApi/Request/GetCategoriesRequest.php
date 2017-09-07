<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;

class GetCategoriesRequest
{
	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $categoryParent = 0;
}
