# url-shortener
This simple PHP-based URL shortner records the date/time a short link is created and how many times that short link has been clicked. The main page (`index.php`) features a form to shorten a URL, a warning message if a link cannot be shortened (and an alert if a link has been successfully shortened), a display of the five most recent short links, and a display of the five most clicked links. There is also a public links directory (`directory.php`) to track every URL in the database. Also included is a `.htaccess` file that directs `http://example.com/redirect.php?code=xxxxx` to `http://example.com/xxxxx`.

* [View Demo](https://seb646.com/surl/)

## Database Setup
Create a database named `surl` and import `surl.sql`. Replace `USERNAME` and `PASSWORD` with your MySQL username and password in the following documents: 
* `index.php` (line 6);
* `directory.php` (line 3);
* `redirect.php` (line 8);
* `assets/classes/Shortener.php` (line 8).

## Credits
- This project is based on a URL shortener created by [Codecourse](https://www.youtube.com/channel/UCpOIUW62tnJTtpWFABxWZ8g) ([Video Tutorial](https://www.youtube.com/watch?v=QN2VXBNujRs));
- This project utilizes [Bootstrap 4.0](https://getbootstrap.com).
