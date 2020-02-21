<?php
namespace Ratchet\WebSocket;

include_once '../../../vendor/autoload.php';

use Ratchet\ComponentInterface;

interface MessageComponentInterface extends ComponentInterface, MessageCallableInterface {
}
