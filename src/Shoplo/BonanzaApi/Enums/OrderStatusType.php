<?php


namespace Shoplo\BonanzaApi\Enums;


class OrderStatusType
{
	const ACTIVE     = 'Active';
	const CANCELLED  = 'Cancelled';
	const COMPLETED  = 'Completed';
	const INCOMPLETE = 'Incomplete';
	const IN_PROCESS = 'InProcess';
	const INVOICED   = 'Invoiced';
	const PROPOSED   = 'Proposed';
	const SHIPPED    = 'Shipped';
	const SOLD       = 'Sold';
}