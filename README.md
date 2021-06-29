# How to install ?

#### *Requirements :* Symfony 5.x, Composer 2.x, PHP 7.4.x and an SQL database like MySQL

#### Run this following commands at the root of the Symfony project :
#### *Don't forget to edit your .env files with your informations for the SQL database*

- ```composer install```
- ```php bin/console d:d:c```
- ```php bin/console doctrine:schema:update --force```
- ```symfony server:start```

Now the Symfony's web server should be ready, so go to http://localhost:8000/ *(maybe the port can be a little different depends on your configuration)*

You should now be able to create an account with the **Register** button, the registration is done in a Bootstrap modal.

And then you can logged to your account with the **Login** button, the connection is also done in a modal.

*Note :* You must be logged in to access http://localhost:8000/user-only 
