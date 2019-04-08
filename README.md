# Php-Kafka demo

Example docker environment where php can write and read from kafka.

## Requirements

On your own machine you should have:

- docker
- docker-compose

## Run the demo

```
docker-compose up -d
```

Send your message in the querystring by visiting `http://localhost?hello`.

```
docker-compose exec php php /usr/share/nginx/www/public/consumer.php
```

The line above should print the messages in the shell

## Documentation

- Docker images for [kafka](https://hub.docker.com/r/wurstmeister/kafka/) and [zookeeper](https://hub.docker.com/r/wurstmeister/zookeeper/)
- [librdkafka](https://github.com/edenhill/librdkafka), a C implementation of the kafka protocol
- [php-rdkafka](https://github.com/arnaud-lb/php-rdkafka), a kafka client for php
