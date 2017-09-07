<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\PaginationInputType;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

class GetOrdersRequest
{
	/**
	 * @var RequesterCredentialsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\RequesterCredentialsType")
	 */
	public $requesterCredentials;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
	 */
	public $createTimeFrom;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
	 */
	public $createTimeTo;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
	 */
	public $modTimeFrom;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
	 */
	public $modTimeTo;

	/**
	 * @var int[]
	 *
	 * @Serializer\Type("array<int>")
	 */
	public $orderIDArray;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $orderRole;

	/**
	 * @var
	 */
	public $orderStatus;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
	 */
	public $soldTimeFrom;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
	 */
	public $soldTimeTo;

	/**
	 * @var PaginationInputType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\PaginationInputType")
	 */
	public $paginationInput;
}
