include .env

DOCKER = docker compose -f docker-compose.yml
DOCKER_PHP-FPM = ${DOCKER} exec php-fpm

up:
	docker-compose up --build -d

down:
	docker-compose down

ps:
	${DOCKER} ps

bash:
	${DOCKER_PHP-FPM} bash
