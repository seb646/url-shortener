# url-shortener
This simple PHP-based service converts URLs into "short links" on a custom top-level domain (`http://YOUR.TLD/xxxxx`). If the service can create a database entry for a URL, an alert will output the URL's custom short link. Alternatively, if the service cannot shorten a user's URL, an alert will output an error message. Upon the creation of a short link, the service records the client's IP address and the date/time. The service also records the number of clicks each short link has. 

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
