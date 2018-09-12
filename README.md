# Behat Transformation Context
[![Build Status](https://drone.fpfis.eu/api/badges/openeuropa/behat-transformation-context/status.svg)](https://drone.fpfis.eu/openeuropa/behat-transformation-context/)
[![Packagist](https://img.shields.io/packagist/v/openeuropa/behat-transformation-context.svg)](https://packagist.org/packages/openeuropa/behat-transformation-context)

This package provides a Behat context allowing to transform human readable labels to selectors or page paths.
Such functionality improves the readability of the Behat tests.

## Installation

```
$ composer require openeuropa/behat-transformation-context
```

## Configuration

Add the extension and context to your test suite in `behat.yml`:

```yaml
default:
  suites:
    default:
      contexts:
        - OpenEuropa\Behat\TransformationContext:
            elements:
              header: 'div#header'
            pages:
              home: 'index.php'
```

## Usage

We can use steps such as [these](https://github.com/openeuropa/behat-transformation-context/blob/master/tests/features/behat-test.feature):

```yaml
    Given I point to *the home page*
    Then previous step targets "*index.php*"
    When I point to the "*header*" element
    Then previous step targets "*div#header*"
```

## Development

Running tests locally:

```
$ git clone git@github.com:openeuropa/behat-transformation-context.git
$ cd behat-transformation-context
$ composer install
$ ./vendor/bin/behat
```

### Using Docker Compose

The setup procedure described above can be sensitively simplified by using Docker Compose.

Requirements:

- [Docker](https://www.docker.com/get-docker)
- [Docker-compose](https://docs.docker.com/compose/)

Copy docker-compose.yml.dist into docker-compose.yml.

You can make any alterations you need for your local Docker setup. However, the defaults should be enough to set the project up.

Run:

```
$ docker-compose up -d
```

Then:

```
$ docker-compose exec web composer install
```

[GrumPHP](https://github.com/phpro/grumphp/tree/master/doc) tasks will be ran at every commit, if you with to run them without performing a commit use the following command:

```
$ ./vendor/bin/grumphp run
```
If you want to simulate a commit message use:

```
$ ./vendor/bin/grumphp git:pre-commit
```
