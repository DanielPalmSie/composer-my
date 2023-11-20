# String Generator Project

## Requirements

This project requires PHP version 8.0 or higher.

## Usage

The main class in this project is `NumberGenerator` which is part of the `DanielPalm\StringGenerator` namespace. This class provides a method `sumNumbersRecursively` for recursively summing numbers from a given number up to 10.

To use this class, include it in your PHP script and create an instance of the class. You can then call the method `sumNumbersRecursively` to get the sum of numbers from your specified starting number up to 10.

## Example

Here's how you can use the `NumberGenerator`:

```php
<?php

require_once 'path/to/NumberGenerator.php';

use DanielPalm\StringGenerator\NumberGenerator;

$generator = new NumberGenerator();
$sum = $generator->sumNumbersRecursively(1);

echo $sum; // Outputs the sum of numbers from 1 to 10.
```

## Description of `sumNumbersRecursively` Method

The `sumNumbersRecursively` method takes two parameters:

1. `$number`: The starting number for the summation.
2. `$sum`: The initial sum, which defaults to 0.

It adds the current number to the sum and checks if the number is less than 10. If it is, it calls itself with the next incremental number and the current sum. The recursion continues until the number reaches 10, at which point the method returns the total sum.

This method is an effective way to demonstrate recursive logic in PHP.

## Installation

To include this class in your project, simply clone this repository or copy the `NumberGenerator.php` file into your project directory.

Ensure PHP 8.0 or higher is installed on your server to use this class.