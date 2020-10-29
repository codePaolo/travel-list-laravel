# Travel List - Laravel Demo App

This is a Laravel demo application where I can list places I've been, and where I want to go.

http://localhost:8000/

Once you have Docker and Docker Compose installed, you can get this environment up and running with:

```
docker-compose build app
docker-compose up -d
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
```


