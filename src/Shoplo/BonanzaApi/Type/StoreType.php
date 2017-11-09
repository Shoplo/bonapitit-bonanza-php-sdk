<?php


namespace Shoplo\BonanzaApi\Type;

use JMS\Serializer\Annotation as Serializer;

class StoreType
{
	/**
	 * @var CustomCategoryType[]
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\CustomCategoryType>")
	 */
	public $customCategory;

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $activated;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $description;

	/**
	 * @var URLType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\URLType")
	 */
	public $logo;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $name;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $policies;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $subscriptionLevel;

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $syndicated;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $url;
}