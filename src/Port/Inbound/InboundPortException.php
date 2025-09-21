<?php

namespace Rotaz\Hex\Port\Inbound;

use Rotaz\Hex\Port\PortException;

/**
 * Represents an exception specific to inbound port operations.
 *
 * This interface extends the base PortException interface to differentiate
 * exceptions that are specific to the inbound port operation context.
 */
interface InboundPortException extends PortException
{

}