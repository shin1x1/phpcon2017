install:
	docker-compose run php composer install

dump-autoload:
	docker-compose run php composer dump-autoload

test:
	docker-compose run php ./vendor/bin/phpunit

