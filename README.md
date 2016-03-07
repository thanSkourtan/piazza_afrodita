# piazza_afrodita
A dynamic website built for educational purposes with the use of php, jQuery, css bootstrap, html, sql.

It features a main website for an italian restaurant with:

1. A login/signup system with 3 different types of priviledges assigned to users. 
2. A reservation system.
3. An ordering system.
4. A photo gallery.

and an administrator site with

1. A user manager system.
2. A news - menu - reservation - order - gallery manager system.

Both sites use ajax through jQuery in order to make asynchronous calls to the database.


Installation details.

1. Install xampp.
2. Clone the repository into the htdocs folder of your xampp installation (normally placed in windows in C:\xampp\htdocs\). After the cloning process, the root folder of the website should be C:\xampp\htdocs\piazza_afrodita\).
3. Create an empty database named afrodita.
4. Move, through the cmd, into the folder where the database file afrodita.sql is and type 
mysql -u root -p afrodita < afrodita.sql
assuming that the root user exists and that it is password protected. Otherwise, use a valid user - password combination for your setup.
5. Place your user - password combination from previous step to C:\xampp\htdocs\piazza_afrodita\admin\config\setup.php and C:\xampp\htdocs\piazza_afrodita\config\setup.php as arguments to the mysqli_connect function in both cases.
6. Done!
