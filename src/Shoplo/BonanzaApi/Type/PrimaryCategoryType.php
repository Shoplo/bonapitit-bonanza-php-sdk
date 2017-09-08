<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class PrimaryCategoryType
{
	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $categoryId;
}