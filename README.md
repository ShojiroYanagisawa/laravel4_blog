# laravel4_blog
Easy CRUD blog application for Laravel4 beginners.


# Installation

Get source code.
```
$ git clone git@github.com:ShojiroYanagisawa/laravel4_blog.git
$ cd laravel4_blog
```

Create mysql database.
```
$ mysql -uroot
> create database laravel4_blog
```

Create tables and initial data.
```
$ ./artisan migrate
$ ./artisan db:seed
```

Run php embedded server on local.
```
./atisan serve
```
