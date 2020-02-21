<?php
namespace Ratchet\WebSocket;

include_once dirname(__DIR__, 3) . '/vendor/autoload.php';

use Ratchet\ComponentInterface;

interface MessageComponentInterface extends ComponentInterface, MessageCallableInterface {
}
