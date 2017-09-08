<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class AddItemSpecificsType
{
	/**
	 * Array of label/value pairs, for example [ [ "condition", "new" ], [ "genre", "romance" ] ]
	 *
	 * @var array
	 *
	 * @Serializer\Type("array")
	 */
	public $specifics;

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $discardOld;
}