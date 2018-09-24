# PHP URL Shortener 
[![Build status](https://ci.appveyor.com/api/projects/status/3hr7cqlt75vy7wfl?svg=true)](https://ci.appveyor.com/project/seb646/url-shortener) [![MIT License](https://img.shields.io/badge/license-MIT-blue.svg "MIT License")](https://github.com/seb646/url-shortener/blob/master/LICENSE.md) 

This simple PHP-based service converts URLs into short, redirected links on a custom top-level domain. It features an in-page alert system to notify the user upon a successful (or unsuccessful) URL shortening. The service also records the IP address of every user who successfully submits a short link, along with the short link's exact time of creation and how many clicks it has received.

Live Demo: [https://php-url-shortener.herokuapp.com/](https://php-url-shortener.herokuapp.com/)


## Getting Started
This service must be in your domain's root directory, and your web server must allow `.htaccess` file overrides. 

### Create the database
Create a MySQL database named `surl` and import the `database.sql` file. 

### Connect to the database
Open the `assets/config.ini.php` file and replace `YOUR_USERNAME` (line 7) and `YOUR_PASSWORD` (line 8) with your MySQL username and password.


## Credits
- This project is based on a URL shortener created by [Codecourse](https://www.youtube.com/channel/UCpOIUW62tnJTtpWFABxWZ8g) ([Video Tutorial](https://www.youtube.com/watch?v=QN2VXBNujRs));
- This project utilizes [Bootstrap 4.0](https://getbootstrap.com).
