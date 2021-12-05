# PSR interfaces pack
### build and up all containers
```
cd docker
docker-compose up -d
```
### installation
###### go into PHP container
```
cd docker
docker exec -it psr-http-interfaces-php sh
```
###### run composer
```
composer install
```
### hotkeys
###### up all containers and get into php container
```
./up.sh
```
###### down all containers
```
./down.sh
```
### testing
```
curl 10.10.0.3/tests/index.php
```