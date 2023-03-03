composer install

if [ -f .git/hooks/pre-commit ]
then
  rm .git/hooks/pre-commit
fi

cp pre-commit-hook .git/hooks/pre-commit

chmod +x .git/hooks/pre-commit

./vendor/bin/phpunit

sleep infinity
