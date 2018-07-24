# Yii2 Framework


* Installed apache2 (a web server)
```
sudo apt-get install apache2 apache2-doc apache2-utils
```
*  Installed PHP
*  Installed Composer
*  Installed mysql
*  Installed phpmyadmin
*  Using composer installed yii2 framework's basic project template

*  After installing I was able to run yii file in apache serve

```
./yii serve
```
* Then opened the page with `localhost:8080`

* Changed `enableprettyurl` to `True` in `web.php` to get nice url not the script name
* Created a user and gave permissions to access databases
* Created a database in mysql using phpmyadmin
* Changed database settings in `db.php` in config folder
* Created a table named book in database `local`
* Created a model for tables book using model generator form ``http://localhost:8080/index.php/gii/model``  which auto generates the code required for that
* Now added a row in the table book
* Added a extra attribute `book_desc` using migrations by adding details in `up()` and `down()` function in migration file
* Created a table named author in database `local`
* Linked both the tables using foreign keys (author id from table book with table author)
