# url-shortener
This simple PHP-based service converts URLs into short, redirected links on a custom top-level domain. It features an in-page alert system to notify the user upon a successful (or unsuccessful) URL shortening. The service also records the IP address of every user who successfully submits a short link, along with the short link's exact time of creation and how many clicks it has received.

* [View Demo](https://seb646.com/surl/)


## Getting Started
This service must be in your domain's root directory, and your web server must allow `.htaccess` file overrides. 

### Create the database
Create a MySQL database named `surl` and import the `database.sql` file. 

### Connect to the database
Open the `assets/config.ini.php` file and replace `YOUR_USERNAME` (line 7) and `YOUR_PASSWORD` (line 8) with your MySQL username and password.


## Credits
- This project is based on a URL shortener created by [Codecourse](https://www.youtube.com/channel/UCpOIUW62tnJTtpWFABxWZ8g) ([Video Tutorial](https://www.youtube.com/watch?v=QN2VXBNujRs));
- This project utilizes [Bootstrap 4.0](https://getbootstrap.com).

## License 
MIT License

Copyright (c) 2018 Sebastian Rodriguez

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
