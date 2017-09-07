<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class FetchTokenResponseType extends BaseResponseType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $authToken;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $authenticationURL;

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $emailRecognized;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:s.u\Z'>")
	 */
	public $hardExpirationTime;

}