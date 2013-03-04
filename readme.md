### Blood Bank Africa

To get up and running with BBA project you just need to clone this repo and use [composer][1] to install all dependencies.

---

#### Local development environment
How to set up you local devenv is covered here: [Copygram Devenv][2]

#### Project setup
If you are (and you should) using the local devenv:
* Clone the bba repo to ```./sites/bba```.
* ```composer install```
* ```./db_drop_create_load.sh```
  * You might need to do ```chmod +x db_drop_create_load.sh``` before you can run it.


Once it is done you can try it out with:
http://bba.local:8080/


###BBA database setup:
If changes are made to the database they can be exported with: ```./db_export.sh```.
This will create/overwrite the file ```./Sites/bba/bba.sql```.

You can then commit and push this file so that it's possible to pull and then import it with: ```./db_drop_create_load.sh```

[1]: http://getcomposer.org/
[2]: https://github.com/copygram/vagrant/blob/master/README.md
