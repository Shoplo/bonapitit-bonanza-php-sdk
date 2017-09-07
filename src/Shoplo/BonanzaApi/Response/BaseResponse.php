<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;

abstract class BaseResponse
{
	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:s.u\Z'>")
	 */
	public $timestamp;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $version;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $ack;
}