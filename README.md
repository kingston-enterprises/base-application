# Kingston Enterprises ICarus Framework Base Application
base icarusapplication template

[Icarus](https://github.com/kingston-enterprises/icarus-framework.git) was created with the goal of creating a simple PHP framework that gives you all the power and flexibility without burying you in a mountain of complex libraries and features that just slow you down.

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
![Kingston Enterprises Icarus FrameWork Welcome Screen](https://user-images.githubusercontent.com/67066977/239186863-e29c2e0f-08d5-4574-9a0b-d435f43d12e6.png)

## Dependencies
- apart from the icarus framework the only dependency is Vlucas` phpdotenv library see their repo [here](https://github.com/vlucas/phpdotenv)

