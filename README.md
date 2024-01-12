# Commands used

docker build -t udemy-games .

docker run -d --rm -p 9201:8000 -v $(pwd):/app --name udemy-games udemy-games

docker ps

docker exec -it udemy-games sh

su # su: This command is used to switch user in the current shell session. When you run su without specifying a username, it usually defaults to switching to the superuser or root.

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