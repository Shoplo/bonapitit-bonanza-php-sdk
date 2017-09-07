<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\RegistrationDataType;

class FetchTokenRequest
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $validationCompleteURL;

	/**
	 * @var RegistrationDataType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\RegistrationDataType")
	 */
	public $registrationData;
}