variables:
 - $projectRoot             : project root, for example /home/current_user/projects/psr-http-interfaces
 - $projectDockerDirectory  : project docker directory, $projectRoot/docker
 - $httpManualPort          : manual http port, edits into .env configs file

requirements:
 - docker
 - docker compose

project composer installation with docker:
 - go into $projectRoot
 - use docker composer container, running:
   $ docker run \
     --rm \
     --interactive \
     --tty \
     --volume $PWD:/app \
     composer install

project testing:
 - go into $projectDockerDirectory
 - edit .env
 - lift all containers up, running:
   $ docker-compose up -d
 - check it, running:
   $ docker container ls
 - check project is ok, running:
   $ curl localhost:$httpManualPort/docker/index.php