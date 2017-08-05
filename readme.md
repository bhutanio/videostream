### VideoStream - Video Streaming site using Laravel and WebTorrent

[![Dependency Status](https://gemnasium.com/badges/github.com/bhutanio/videostream.svg)](https://gemnasium.com/github.com/bhutanio/videostream)

### Requirement
- [**PHP**](https://php.net) 5.6.4+ (**7+** preferred)
- PHP Extensions: openssl, mcrypt, mbstring, phpredis and php-zip
- Database server: [MySQL](https://www.mysql.com) or [**MariaDB**](https://mariadb.org)
- [Redis](http://redis.io) Server
- [Composer](https://getcomposer.org)
- [Node.js](https://nodejs.org/) with npm
- [FFMpeg](https://ffmpeg.org/)
- [mediainfo](https://mediaarea.net/en/MediaInfo)
- [transmission](https://transmissionbt.com/)

### Installation
* Install some packages `sudo apt-get install ffmpeg mediainfo transmission-cli`
* clone the repository: `git clone https://github.com/bhutanio/videostream.git videostream`
* create a database
* create configuration env file `.env` refer to `.env.example`
* install: `composer install --no-dev`
* setup database tables: `php artisan migrate`

#### Setup Admin Account
```bash
php artisan tinker
```
```php
DB::table('users')->where('id', 2)->update(['email'=>'myemail@example.com']);
```
Click on **forgot password** link on the **login page** and reset password for your admin user.

#### Setup Cron Job
```bash
crontab -e -u www-data
```
```bash
* * * * * php /home/web/videostream/artisan schedule:run >/dev/null 2>&1
*/5 * * * * php /home/web/videostream/artisan auth:clear-resets >/dev/null 2>&1
```

#### Setup Supervisor
```bash
nano /etc/supervisor/conf.d/videostream.conf
```
```bash
[program:videostream-queue]
process_name=%(program_name)s_%(process_num)02d
command=php /home/web/videostream/artisan queue:work --sleep=3 --tries=3
autostart=true
autorestart=true
user=www-data
numprocs=2
```

#### Setup Google ReCaptcha
Visit https://www.google.com/recaptcha/admin and register your site

Get **Site key** and **Secret key**, add them in your .env file
```$xslt
...
## Site Key
GOOGLE_RECAPTCHA_SITE=''
## Secret Key
GOOGLE_RECAPTCHA_SECRET=''
...
```

### License
VideoStream is open source software licensed under the [MIT license](http://opensource.org/licenses/MIT).