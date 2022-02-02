docker-dev-shell:
	docker-compose exec php bash

docker-dev-reload:
	docker-compose up -d

docker-dev-restart: docker-dev-stop docker-dev-start

docker-dev-stop:
	docker-compose stop

docker-dev-start:
	docker-compose up -d