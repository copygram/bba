#!/bin/sh
vagrant ssh -c 'mysql -u root -e "drop database bba;"'
vagrant ssh -c 'mysql -u root -e "create database bba;"'
vagrant ssh -c 'mysql -u root -D bba < /vagrant/Sites/bba/bba.sql'