<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;

class GetBoothItemsRequest
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
