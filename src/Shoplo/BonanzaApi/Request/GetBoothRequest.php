<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;

class GetBoothRequest extends SecureRequest
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $boothId;
}
