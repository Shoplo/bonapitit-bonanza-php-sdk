<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class AddressType
{

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $addressID;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $cityName;

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
	public $countryName;

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
	public $postalCode;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $stateOrProvince;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $street1;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $street2;
}