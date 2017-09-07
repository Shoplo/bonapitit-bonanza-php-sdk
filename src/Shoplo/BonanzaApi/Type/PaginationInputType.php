<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class PaginationInputType
{
	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $entriesPerPage;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $pageNumber;
}