<?php


namespace Shoplo\BonanzaApi\Type;


class CustomCategoryType
{
	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $categoryId;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $name;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $order;
}