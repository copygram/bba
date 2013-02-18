### Blood Bank Africa

To get up and running with BBA project.

####Install composer: 

You can run these commands to easily access composer from anywhere on your system:

$ curl -s https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer

Then, just run composer in order to run Composer instead of php composer.phar.

Correct any errors that you get. If you're on mac your php.ini should be located at /private/etc/ and if it's not there you might need to do sudo cp /private/etc/php.ini.default /private/etc/php.ini

If you have to add detect_unicode = Off to the php.ini you can try this:

sudo sh -c 'echo "detect_unicode = Off" >> /private/etc/php.ini'
You can always change the text in the echo to something else if there's another error.
 
####GIT
Install GIT: http://git-scm.com/download/mac
If this is the first time you are runnning this you'll want to do.


###Setting local server environment
sudo nano /etc/hosts and paste this in at the bottom:

127.0.0.1 bba.local

Install Vagrant : http://downloads.vagrantup.com/tags/v1.0.6
Install Oracle Virtual Box: https://www.virtualbox.org/wiki/Downloads

Download the setup.sh (https://dl.dropbox.com/u/21316108/setup.sh) and copygram box (https://dl.dropbox.com/u/21316108/copygram.box) to the same folder where cloned bba repo and run it: ./setup.sh

This will run a series of vagrant commands to set up the environment.

You'll end up with:

<your_folder>
  <Sites>
    bba
    ...
    ...
  setup.sh
  Vagrantfile
Settings:

Clone the bba repo ( https://github.com/copygram/bba.git ) to ../Sites/bba which was created after running the setup.sh file

MySQL root user has no password
Once it is done you can try it out with:

http://bba.local:8080/

If you are cloning the bba-repo it might need chmod -R o+w app/storage


###BBA database setup:






