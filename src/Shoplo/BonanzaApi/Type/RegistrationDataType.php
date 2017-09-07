<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class RegistrationDataType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */

	public $firstName;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */

	public $lastName;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */

	public $city;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */

	public $state;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */

	public $country;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */

	public $zipCode;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */

	public $email;

}