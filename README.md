# url-shortener
This simple URL shortener was created using PHP. This service tracks the date each link was added and how many times each link has been clicked. The main page (`index.php`) features a display of the five most recent links and the five most clicked links. There is also a built in links directory (`directory.php`) page to track every link in the database. There is also an included `.htaccess` file that directs `example.com/redirect.php?code=xxxxx` to `example.com/xxxxx`.

* [View Demo](https://seb646.com/surl/)

## Database Setup
Create a database named `surl` and import `surl.sql`. Replace `USERNAME` and `PASSWORD` with your MySQL username and password in the following documents: 
* `index.php` (line 6);
* `directory.php` (line 3);
* `redirect.php` (line 8);
* `assets/classes/Shortener.php` (line 8).

## Credits
- The original project that this URL shortener was based on was created by [Codecourse](https://www.youtube.com/channel/UCpOIUW62tnJTtpWFABxWZ8g) ([Original Video](https://www.youtube.com/watch?v=QN2VXBNujRs));
- This project uses [Bootstrap](https://getbootstrap.com).
