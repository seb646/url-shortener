# url-shortener
This simple PHP-based service converts URLs into short links on a custom top-level domain. After each URL shortening, this service records the client's IP address and the date/time. This service also tracks the number of uses for each short link. 

The main page (`index.php`) features a form for a user to shorten a URL, a warning message if the service fails to shorten a URL (and an alert if the service successfully shortens a URL), a display of the five most recent short links, and a display of the five most-clicked short links. There is also a public short links directory (`directory.php`) to track every short link in the database. Also included is a `.htaccess` file that directs `http://YOUR.TLD/redirect.php?code=xxxxx` to `http://YOUR.TLD/xxxxx`.

* [View Demo](https://seb646.com/surl/)


## Getting Started

### File Uploading
This service will not function unless uploaded to a domain's root directory. The server must also allow `.htaccess` file overrides. 

### Create a Database
Create a database named `surl` and import the `database.sql` file. 

### Database Connection
Open the `assets/config.ini.php` file and replace `YOUR_USERNAME` (line 7) and `YOUR_PASSWORD` (line 8) with your MySQL username and password.


## Credits
- This project is based on a URL shortener created by [Codecourse](https://www.youtube.com/channel/UCpOIUW62tnJTtpWFABxWZ8g) ([Video Tutorial](https://www.youtube.com/watch?v=QN2VXBNujRs));
- This project utilizes [Bootstrap 4.0](https://getbootstrap.com).
