# url-shortener
This simple PHP-based service converts URLs into "shortened" URLs on a custom TLD. The service can record the date/time a short link was created and how many times that short link was clicked. The main page (`index.php`) features a form for a user to shorten a URL, a warning message if a link cannot be shortened (and an alert if a URL has been successfully shortened), a display of the five most recent short links, and a display of the five most clicked links. There is also a public links directory (`directory.php`) to track every URL in the database. Also included is a `.htaccess` file that directs `http://YOUR_TLD.com/redirect.php?code=xxxxx` to `http://YOUR_TLD.com/xxxxx`.

* [View Demo](https://seb646.com/surl/)

## Getting Started

### Installing
This service must be uploaded to your domain's root directory. Your server must also allow `.htaccess` file overrides. 

### Database Setup
Create a database named `surl` and import the `surl.sql` file. 

### Dataabse Condifuration 
Open the `assets/config.ini.php` file and replace `YOUR_USERNAME` (line 7) and `YOUR_PASSWORD` (line 8) with your MySQL username and password.

## Credits
- This project is based on a URL shortener created by [Codecourse](https://www.youtube.com/channel/UCpOIUW62tnJTtpWFABxWZ8g) ([Video Tutorial](https://www.youtube.com/watch?v=QN2VXBNujRs));
- This project utilizes [Bootstrap 4.0](https://getbootstrap.com).