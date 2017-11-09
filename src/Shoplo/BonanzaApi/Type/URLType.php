<?php


namespace Shoplo\BonanzaApi\Type;

use JMS\Serializer\Annotation as Serializer;

class URLType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $url;
}