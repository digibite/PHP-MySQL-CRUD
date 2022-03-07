# todoApp-PHP-MySQL

Hello there and welcome to this simple tutorial on how to run this web app.  Greetings and welcome, in this tutorial you will find the instructions and 

1. Install XAMPP (Note: Other PHP Apache and Ngnix servers can be utilised also, this tutorial will focus XAMPP's Apache and MySQL servers).
2. Once installed search for the XAMPP control panel. On Windows, the default location will be C:\xampp and when using MacOS you can hold down "command" along with the space bar buttons, and search for "XAMPP control panel".
3. Select and open the XAMPP control panel by double clicking on the X icon with the orange background.
4. Click on the start buttons next to Apache and MySQL text in the XAMP control panel.
5. At this point your MySQL server should be running on port 3306.(Note: If your MySQL server is not running on the 3306 port, you will need to manually update $dbHost = 'localhost:3306'; and public $host = 'localhost:3306'; in the db.php file to your port number. The app demostrates two different MySQL connection approaches.)
7. Now open your web browser and go to http://localhost/phpmyadmin/. This will take you to the phpMyAdmin dashboard page.
8. On the left side you will see a list of databases, please click on the text that says "test" to open up the test database.
9. Click on the SQL tab
10. Find the "DBschema" file in the root directory of this repository and open it.
11. Copy and paste all the text from the DBschema file into the phpMyAdmin SQL text editor.
12. Click on the "Go" button.
13. This will create the database tables needed for this app to run.
14. Now, on your browser go to http://localhost/PHP-MySQL-CRUD/login.php
15. You will find yourself in the login section of the app. 
16. The login email is "john@gmail" and password is "password".
17. If your login was succesful you can now save, edit and delete company names by using this app.
