<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class PaginationOutputType extends PaginationInputType
{
	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $totalEntries;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $totalPages;
}