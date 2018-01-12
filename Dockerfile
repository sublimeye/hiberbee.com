FROM hiberbee/docker.symfony

ENV APP_ENV prod
ENV APP_DEBUG 0

MAINTAINER vlad@hiberbee.com

WORKDIR /var/www/hiberbee.com

COPY composer.json composer.lock ./

RUN composer install --no-scripts --no-autoloader

COPY package.json yarn.lock ./

RUN yarn --pure-lockfile

COPY ./ ./

RUN composer dump-autoload --optimize && \
	composer run-script post-install-cmd

RUN yarn build