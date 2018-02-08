<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class PrimaryCategoryType
{
	/**
	 * @var int
	 *
	 * @Serializer\Type("string")
	 */
	public $categoryId;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $categoryName;
}