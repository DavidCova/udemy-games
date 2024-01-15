# Commands used

docker build -t udemy-games .

docker run -d --rm -p 8000:8000 -v $(pwd):/app --name udemy-games udemy-games

docker ps

docker exec -it udemy-games sh

su # su: This command is used to switch user in the current shell session. When you run su without specifying a username, it usually defaults to switching to the superuser or root.

docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' udemy-games_database_1

## Installing symfony messenger

composer require symfony/messenger

## CloudAMQP

check your AMQP details under https://customer.cloudamqp.com/instance, click the name of the created instance, under AMQP details there should be a fully formed URL that you can paste on the `.env.local` **MESSENGER_TRANSPORT_DSN=**# udemy-games

# udemy-games

composer require symfony/amqp-messenger

./bin/console debug:autowiring mess
./bin/console debug:messenger

# Troubleshooting

If your container runs into errors when rebuilding, consider restarting docker

`sudo service docker restart`

### Docker compose

`docker-compose up -d --build`      # Build the containers

`docker-compose exec app /bin/bash` # Enter the app (service) container. Check docker-compose.yaml for a list of services, in this case `app` or `database` are possible services to shell into.

```sh
docker exec -it udemy-games sh
# su
# composer require symfony/orm-pack

# Do you want to include Docker configuration from recipes? n

# composer require --dev symfony/maker-bundle

```

edit your .env.local file with the sqlite configuration

**Creating the first entity**

```sh
./bin/console make:entity

./bin/console make:migration

./bin/console doctrine:migrations:migrate

./bin/console dbal:run-sql "SELECT * FROM games"
```
