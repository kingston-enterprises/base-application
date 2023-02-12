# Kingston Enterprises ICarus Framework Base Application
base icarusapplication template

Icarus was created with the goal of creating a lightweight, user-friendly framework to help accelerate the development of our clients' websites.
The idea is that we can simply install the tested code for the fundamental features when beginning a new client project and then simply build on that. 

### Base Application
- The base application is our own template for getting started building icarus applications. to get started 
just clone the [repository](https://github.com/kingston-enterprises/base-application)

```sh
$ git clone https://github.com/kingston-enterprises/base-application
```

- Then run composer install

```sh
$ composer install
```

- Then open the `env.example` file, enter your database credentials and then save it as `env.`
- Next just cd into your scripts directory and run the database migrations.

```sh
$ cd scripts
$ php migrations.php
```

- Next move into your public folder and start your php server.

```sh
$ cd public
$ php -S localhost:5050
```

- then just open your localhost in your browser and you should see something like this and you will be good to go.
![Kingston Enterprises Icarus FrameWork Welcome Screen](https://user-images.githubusercontent.com/67066977/218307804-52990155-c354-4704-95f4-d87d526a7f7d.png)

## Dependencies
- apart from the icarus framework the only dependency is Vlucas` phpdotenv library see their repo [here](https://github.com/vlucas/phpdotenv)

