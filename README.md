# PHP Before Laravel

[The PHP Practitioner - Jeffrey Way](https://laracasts.com/series/php-for-beginners)

# .htaccess (Apache)

[Redirect All Requests To Index.php Using](https://gist.github.com/RaVbaker/2254618)

## Array Filtering - EPISODE 18

- array_map()
- array_filter();
- array_column();

# Fnctions
```php
ucwords();
```

```php
htmlspecialchars();
```

```php
extract();

// example
$data = [
    'name' => 'Joe',
    'age' => 12,
    'gender' => 1
];

extract($data);

echo $name;   // 'Joe'
echo $age;    // '12'
echo $gender; // '1'
```

# PHP 5.6+

[Variable-length argument lists](http://php.net/manual/en/functions.arguments.php#functions.variable-arg-list)

## 1
```php
function dump(...$args)
{
    var_dump($args);
}

dump(1, 2, 3, 4, 5, 6);

/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
)
*/
```

## 2

```php
function dump2($a, $b)
{
    var_dump($a); // a
    var_dump($b); // b
}

dump2(...['a', 'b']));
```
