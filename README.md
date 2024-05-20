# Installation

First, clone this repository:

### Clone this repository

git clone https://github.com/digibite/PHP-MySQL-CRUD.git
PHP-MySQL-CRUD

### Download and Install [XAMPP](https://www.apachefriends.org/download.html) (Note: Other PHP Apache and Ngnix servers can be used too, but we will focus XAMPP's Apache and MySQL servers).

⋅⋅* Once installed search for the XAMPP control panel. On Windows, the default location will be C:\xampp and on MacOS open Spotlight(CMD+Space bar) search for "XAMPP control panel".
⋅⋅* Open the XAMPP control panel by double clicking on the X icon with the orange background.
⋅⋅* Click on the start buttons next to Apache and MySQL text in the XAMP control panel.
⋅⋅* At this point your MySQL server should be running on port 3306.(Note: If your MySQL server is not running on the 3306 port, you will need to manually update $dbHost = 'localhost:3306'; and public $host = 'localhost:3306'; in the db.php file to your port number. The app demostrates two different MySQL connection approaches.)
⋅⋅* Now open your web browser and go to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/). This will take you to the phpMyAdmin dashboard page.
⋅⋅* On the left side you will see a list of databases, please click on the text that says "test" to open up the test database.
⋅⋅* Click on the SQL tab
⋅⋅*. Find the "DBschema" file in the root directory of this repository and open it.
⋅⋅* Copy and paste all the text from the DBschema file into the phpMyAdmin SQL text editor.
⋅⋅* Click on the "Go" button.
⋅⋅* This will create the database tables needed for this app to run.
⋅⋅* Now, on your browser go to [http://localhost/PHP-MySQL-CRUD/login.php](http://localhost/PHP-MySQL-CRUD/login.php)
⋅⋅* You will find yourself in the login section of the app.
⋅⋅* The login email is "john@gmail" and password is "password".
⋅⋅\* If your login was succesful you can now save, edit and delete company names by using this app. Enjoy!
