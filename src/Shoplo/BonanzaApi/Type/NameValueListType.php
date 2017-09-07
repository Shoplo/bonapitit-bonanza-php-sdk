<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class NameValueListType
{

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
	public $value;
}