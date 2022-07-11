# Sandbox development Austral Symfony Bundle

[![License](https://img.shields.io/github/license/austral-project/sandbox)](https://img.shields.io/github/license/austral-project/sandbox)


## Install

__Clone git repository__

```bash
git clone git@github.com:austral-project/sandbox.git
```

__Copy .env file__
```bash
cp .env.dist .env
```
_Edit file with your EMAIL_FROM and EMAIL_TO_

__Copy config file for Docker__
```bash
cp deploy/.env.dist deploy/.env
cp deploy/supervisord.conf.dist deploy/supervisord.conf
```

__Install composer__
```bash
cp deploy
docker-compose run php composer install
```

__Start Docker__
```bash
cp deploy
docker-compose up -d
```

__Austral admin interface__
```
http://127.0.0.1:8088/austral-admin/

Login : admin
Password : admin
```

__Austral website interface__
```
http://127.0.0.1:8088
```

## Docker used

### Austral Alpine ###
View repository : [Docker Hub](https://hub.docker.com/r/australproject/alpine/) or [Gitub](https://github.com/austral-project/docker-alpine)

__Versions__
* Alpine : 3.15

### Austral Nginx ###
View repository : [Docker Hub](https://hub.docker.com/r/australproject/nginx/) or [Gitub](https://github.com/austral-project/docker-nginx)

__Versions__
* Nginx : 1.20

### Austral PHP ###
View repository : [Docker Hub](https://hub.docker.com/r/australproject/php/) or [Gitub](https://github.com/austral-project/docker-php)

__Versions__
* PHP : 8.0.18
* Node : 16.14.2
* NPM : 8.1.3
* Squoosh-cli : 0.7.2
* PostgreSQL-client : 14.4
* MySQL-client : 10.6

### Austral PHP Supervisor ###
View repository : [Docker Hub](https://hub.docker.com/r/australproject/php-supervisor/) or [Gitub](https://github.com/austral-project/docker-php-supervisor)

__Versions__
* PHP : 8.0.18
* Node : 16.14.2
* NPM : 8.1.3
* Squoosh-cli : 0.7.2
* PostgreSQL-client : 14.4
* MySQL-client : 10.6

### Postgres 14.2  ###
View repository : [Docker Hub](https://registry.hub.docker.com/_/postgres)

__Versions__
* Alpine : 3.16
* PostgreSQL-server : 14.2

### Dunglas Mercure  ###
View repository : [Docker Hub](https://registry.hub.docker.com/r/dunglas/mercure)

__Versions__
* Mercure : 0.13


## Commit Messages

The commit message must follow the [Conventional Commits specification](https://www.conventionalcommits.org/).
The following types are allowed:

* `update`: Update
* `fix`: Bug fix
* `feat`: New feature
* `docs`: Change in the documentation
* `spec`: Spec change
* `test`: Test-related change
* `perf`: Performance optimization

Examples:

    update : Something

    fix: Fix something

    feat: Introduce X

    docs: Add docs for X

    spec: Z disambiguation

## License and Copyright
See [License](https://austral.dev/en/license)

## Credits
Created by [Matthieu Beurel](https://www.mbeurel.com). Sponsored by [Yipikai Studio](https://yipikai.studio).