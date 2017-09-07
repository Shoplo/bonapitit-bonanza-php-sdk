<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ErrorMessageType
{
	/**
	 * @var array
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\ErrorType>")
	 */
	public $error;
}