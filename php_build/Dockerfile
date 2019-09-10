FROM php:7.2-apache

RUN docker-php-ext-install mysqli

ADD all_db_dump_file.sql /docker-entrypoint-initdb.d
