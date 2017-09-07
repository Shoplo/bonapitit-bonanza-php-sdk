<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class UserType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $aboutMeURL;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $feedbackDetailsURL;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $feedbackRatingStar;

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $newUser;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:s.u\Z'>")
	 */
	public $registrationDate;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $status;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $userId;
}