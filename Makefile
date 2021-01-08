phpstan:
	vendor/bin/phpstan analyse -c phpstan.neon

php-cs-fixer:
	tools/php-cs-fixer/vendor/bin/php-cs-fixer fix src

lint: php-cs-fixer phpstan