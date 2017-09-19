<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class PaginationResultType extends PaginationInputType
{
	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $totalNumberOfEntries;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $totalNumberOfPages;
}