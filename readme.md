## Laravel Bootstrapper

A little project I put together for rapid development. I've included the things I use all the time amongst a few others. Feel free to fork it, download it and of course submit pull requests if you think it is appropriate.

### Getting Started

*I'm assuming you're using [Laravel Homestead](http://laravel.com/docs/5.1/homestead)*

1. Copy the example `.env.example` file and rename it to `.env` and add your database credentials:

    <pre>
    DB_HOST=192.168.10.10
    DB_DATABASE=laravel-bootstrapper
    DB_USERNAME=homestead
    DB_PASSWORD=secret
    </pre>

2. Run `php artisan key:generate` to create your `APP_KEY`

3. Run `composer install`

4. Run `npm install`

5. Run `gulp`

6. Run `php artisan migrate`

7. Edit the user account in `database/seeds/ConstantsTableSeeder.php`

8. Run `php artisan db:seed --class=ConstantsTableSeeder`

9. Add the following to your `Homestead.yaml` file:

    <pre>
    sites:
        - map: laravel-bootstrapper.dev
          to: /home/vagrant/Code/laravel/laravel-bootstrapper/public
    databases:
        - laravel-bootstrapper
    </pre>

10. And the following to your `/etc/hosts` file:

    <pre>
    192.168.10.10 laravel-bootstrapper.dev
    </pre>

11. Either run `homestead provision` or ssh into Homestead and run `serve laravel-bootstrapper.dev path/to/laravel-bootstrapper/public` changing the path accordingly.

### Features

1. Bootstrap Sass
2. Font-Awesome Sass
3. Elixir Versioning
4. Default About pages
5. Base user account

### Roadmap

[] Bootstrap 4