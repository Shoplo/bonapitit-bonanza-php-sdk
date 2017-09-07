<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class CategoryArrayType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $categoryBriefName;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $categoryId;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $categoryLevel;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $categoryName;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $traitCount;
}