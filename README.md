# Drupal.org Project Data Test

A test script for interacting with the Drupal.org API using the [opdavies/drupalorg-api-php](https://github.com/opdavies/drupalorg-api-php) library.

## Usage

- Specify the project node IDs in `$projectIds`.
- Run the script with `$ php test.php`.
- This displays the title, download count and star count for each project, as well as the combined total download and star counts.

## Example

```
$ php test.php
array:3 [
  0 => array:3 [
    "title" => "Override Node Options"
    "downloads" => 216843
    "stars" => 16
  ]
  1 => array:3 [
    "title" => "Copyright Block module"
    "downloads" => 14593
    "stars" => 4
  ]
  2 => array:3 [
    "title" => "Commerce Events"
    "downloads" => 0
    "stars" => 0
  ]
]
"Total downloads: 231436"
"Total stars: 20"
```
