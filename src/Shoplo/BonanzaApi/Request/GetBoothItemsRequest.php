<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

class GetBoothItemsRequest extends SecureRequest
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $boothId;

	/**
	 * @var string[]
	 *
	 * @Serializer\Type("array<string>")
	 */
	public $itemStatus;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $itemsPerPage;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $page;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $order = 'newest';
}
