<?php


namespace Shoplo\BonanzaApi\Enums;


class ItemStatusType
{
	const ACTIVE                  = 'Active';
	const CANCELED                = 'Canceled';
	const MISSING_REQUIRED_FIELDS = 'Missing required fields';
	const READY_FOR_SALE          = 'Ready for sale';
	const RESERVED                = 'Reserved';
	const SOLD                    = 'Sold';
	const UNKNOWN                 = 'Unknown';
}