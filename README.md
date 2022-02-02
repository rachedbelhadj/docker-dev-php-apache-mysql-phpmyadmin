PHP + Apache + MySql
==============

## Installation

# Docker

How to use Docker to setup a dev environment.

## Installing/Configuring

### Requirements

* [Docker](https://docs.docker.com/install/#supported-platforms)
* [Docker compose](https://docs.docker.com/compose/install) >= 1.23

Test your versions with :
* `docker --version`
* `docker-compose --version`

#### Add current user to Docker group on Linux :

```
sudo usermod -a -G docker username
```

* Reboot system to apply this modification

Then, run:

```bash
$ docker-compose up -d
```

#### Add host to linux

```
sudo bash -c 'echo "127.0.0.1 appdev.loc" >> /etc/hosts'
```

##### Shell docker php

```bash
$ make docker-dev-shell
```