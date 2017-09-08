<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class VariationType
{
	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $price;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $quantity;

	/**
	 * @var NameValueListType[]
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\NameValueListType")
	 */
	public $nameValueList;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $upc;
}