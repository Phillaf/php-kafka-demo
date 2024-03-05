<?php

$conf = new RdKafka\Conf();
$conf->set('log_level', (string) LOG_DEBUG);
$producer = new \RdKafka\Producer($conf);

if ($producer->addBrokers("kafka:9092") < 1) {
    echo "Failed adding brokers\n";
    exit;
}

$topic = $producer->newTopic("test");

if (!$producer->getMetadata(false, $topic, 2000)) {
    echo "Failed to get metadata, is broker down?\n";
    exit;
}

$topic->produce(RD_KAFKA_PARTITION_UA, 0, $_SERVER['QUERY_STRING']);

echo "Message published\n";
