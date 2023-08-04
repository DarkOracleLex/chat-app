FROM node:18.17.0-alpine

WORKDIR /var/www

RUN apk update && apk add --no-cache \
    shadow

# Глобально устанавливаем laravel-echo-server
RUN npm install -g laravel-echo-server

# В контейнере открываем 9000 порт
EXPOSE 6001

CMD ["laravel-echo-server", "start"]