<?php
namespace Ratchet;

include_once dirname(__DIR__, 2) .  '/vendor/autoload.php';

interface MessageComponentInterface extends ComponentInterface, MessageInterface {
}
