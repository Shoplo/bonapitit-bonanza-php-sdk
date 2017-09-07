<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class TraitArrayType
{

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $id;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $label;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $parentTraitId;

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $variationsEnabled;

	/**
	 * @var TraitValuesType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\TraitValuesType")
	 */
	public $traitValues;
}