<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class TransactionArrayType
{
	/**
	 * @var TransactionType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\TransactionType")
	 */
	public $transaction;
}