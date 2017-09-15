<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class UpdateBoothResponseType extends BaseResponseType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $resultMessage;

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $success;
}