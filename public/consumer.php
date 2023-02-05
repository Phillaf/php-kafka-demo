<?php

$consumer = new \RdKafka\Consumer();
$consumer->setLogLevel(LOG_DEBUG);
$consumer->addBrokers("kafka:9092");

$topic = $consumer->newTopic("test");

$topic->consumeStart(0, RD_KAFKA_OFFSET_BEGINNING);

echo "consumer started" . PHP_EOL;
while (true) {
    $msg = $topic->consume(0, 1000);
    if (isset($msg->payload)) {
        echo $msg->payload . PHP_EOL;
    }
}
