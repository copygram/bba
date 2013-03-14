#!/bin/sh
vagrant ssh -c 'mysqldump -u root -d bba > /vagrant/Sites/bba/bba.sql'