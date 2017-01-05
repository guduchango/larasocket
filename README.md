# Implementació de Socket en Laravel 5.1

Esto es una implementación de websockets de laravel 5.1 con nodejs a traves de redis.

## ¿Que son los web socket?

Los web socket permiten abrir una forma de comunicación entre el navegador y el servidor, siendo bidireccional.

Tanto el navegador como el servidor pueden comunicarse entre ellos, actualmente mediante http o https  el cliente 
hace una petición y el servidor responde a esa petición (siguiendo este camino), con web socket el servidor puede 
enviar "datos" al cliente sin que el cliente haya enviado una petición.

## Prerequisitos

+ Laravel 5.1
+ NodeJS installed
+ Redis installed

## Used Packages

### PHP

+ predis/predis: for redis client

### NodeJS

+ express: expressjs framework for routing
+ socket.io: socket.io library for web socket
+ ioredis: ioredis library as redis client


## ¿Como instalar redis en ubuntu? 

Como instala redis en ubuntu [Instalación redis](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-redis)

## Instalación

Clonar el repositorio

```
git clone git@github.com:guduchango/larasocket.git
```

Dependencias Composer

```
composer install
```

Instalar dependencias nodejs

```
npm install
```

Then run redis server using the following command-

```
sudo service redis_6379 start
```

Then start nodejs server using-

```
node socket.js
```

At last start laravel server 

```
php artisan serve
```

Then visit http://localhost:8000 to view app in browser.






