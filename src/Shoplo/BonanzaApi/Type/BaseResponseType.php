<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

abstract class BaseResponseType
{
	/**
	 * @var ErrorMessageType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\ErrorMessageType")
	 */
	public $errorMessage;

	/**
	 * @var WarningsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\WarningsType")
	 */
	public $warnings;
}