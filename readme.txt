requirements:
 - docker
 - docker compose

project composer installation with docker:
 - go into project root
 - use docker composer container, running:
   $ docker run \
     --rm \
     --interactive \
     --tty \
     --volume $PWD:/app \
     composer install

project testing:
 - go into project root
 - edit .env
 - lift all containers up, running:
   $ docker-compose up -d
 - check it, running:
   $ docker container ls
 - check project is ok, running:
   $ curl localhost:${http manual port from env settings}/tests/index.php