<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class TraitValuesType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $displayOrder;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $name;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $searchId;
}