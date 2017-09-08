<?php


namespace Shoplo\BonanzaApi\Enums;


class ItemStatusType
{
	const FOR_SALE       = 'for_sale';
	const READY_TO_POST  = 'ready_to_post';
	const MISSING_FIELDS = 'missing_fields';
	const RESERVED       = 'reserved';
	const SOLD           = 'sold';
	const PENDING_PICKUP = 'pending_pickup';
}