<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class WarningsType
{
	/**
	 * @var array
	 *
	 * @Serializer\Type("array")
	 */
	public $unrecognized_parameters;
}