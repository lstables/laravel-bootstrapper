## Laravel Bootstrapper

### Getting Started

*I'm assuming you're using [Laravel Homestead](http://laravel.com/docs/5.1/homestead)*

1. Add the following to your `Homestead.yaml` file:

<pre>
sites:
    - map: laravel-bootstrapper.dev
      to: /home/vagrant/Code/laravel/laravel-bootstrapper/public
databases:
    - laravel-bootstrapper
</pre> 

2. And the following to your `/etc/hosts` file:
<pre>
    192.168.10.10 laravel-bootstrapper.dev
</pre>

3. Either run `homestead provision` or ssh into Homestead and run `serve laravel-bootstrapper.dev path/to/laravel-bootstrapper/public` changing the path accordingly.

### Features

### Roadmap