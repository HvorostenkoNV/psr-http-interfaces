variables:
 - $projectRoot             : project root, for example /home/current_user/projects/psr-http-interfaces
 - $projectDockerDirectory  : project docker directory, $projectRoot/docker
 - $port                    : manual http port, edits into .env configs file

project checking:
 - make super user mod, running:
   $ sudo su
 - install docker
 - install docker compose
 - run project composer installation:
   $ docker run \
     --rm \
     --interactive \
     --tty \
     --volume $projectRoot:/app \
     composer install
 - go to $projectDockerDirectory
 - edit .env
 - run all containers up:
   $ docker-compose up -d
 - check it, running:
   $ docker container ls
 - check project is ok, running:
   $ curl localhost:$port/docker/index.php