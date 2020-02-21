<?php
namespace Ratchet\Http;

include_once dirname(__DIR__, 3) . '/vendor/autoload.php';

use Ratchet\ConnectionInterface;
use Psr\Http\Message\RequestInterface;

class NoOpHttpServerController implements HttpServerInterface {
    public function onOpen(ConnectionInterface $conn, RequestInterface $request = null) {
    }

    public function onMessage(ConnectionInterface $from, $msg) {
    }

    public function onClose(ConnectionInterface $conn) {
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
    }
}
