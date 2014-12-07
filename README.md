Permutater
===============

Permutation Generator

## Features

 * Generate multiple text from one
 * Different ending and opening string

## Quick Start

In the `require` key of `composer.json` file add the following:

```
"chiabit/permutater": "1.0"
```

Run the Composer update command

```
$ composer update
```

In your `config/app.php` add

```php

'aliases' => array(

    'App'             => 'Illuminate\Support\Facades\App',
    'Artisan'         => 'Illuminate\Support\Facades\Artisan',
    ...
    'Permutater'      => 'Chiabit\Permutater\Facades\Permutater',
),
```

## Setup

### How to use

Once you have all of the configuration settings set up, in order to create an array of permutation of :

```php
Permutater::generate('I love [cat,dog,bird] and i want a [cake,coke,smile].', '[' , '[', ',');
```

This function accepts 4 parameters however

## License

Feed Reader is free software distributed under the terms of the MIT license

## Additional Information

Any issues, please [report here](https://github.com/chiabit/permutater/issues)