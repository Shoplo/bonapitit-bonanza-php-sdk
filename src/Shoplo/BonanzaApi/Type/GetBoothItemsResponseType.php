<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class GetBoothItemsResponseType extends BaseResponseType
{
	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $currentPage;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $size;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $totalEntries;

	/**
	 * @var ItemType[]
	 *
	 * @Serializer\Type("array<Shoplo\BonanzaApi\Type\ItemType>")
	 */
	public $items;
}