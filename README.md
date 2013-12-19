# DataValues Iri

DataValues Iri is a small library that contains IRI value objects, parsers and formatters.

It is part of the [DataValues set of libraries](https://github.com/DataValues).

[![Build Status](https://secure.travis-ci.org/DataValues/Iri.png?branch=master)](http://travis-ci.org/DataValues/Iri)
[![Code Coverage](https://scrutinizer-ci.com/g/DataValues/Iri/badges/coverage.png?s=10ee05d60b5246cfd5df438b63c4d5dae4b4c5a7)](https://scrutinizer-ci.com/g/DataValues/Iri/)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/DataValues/Iri/badges/quality-score.png?s=9bdf21bb15c3d7b9cede985fdacf7e37b507e899)](https://scrutinizer-ci.com/g/DataValues/Iri/)

On [Packagist](https://packagist.org/packages/data-values/iri):
[![Latest Stable Version](https://poser.pugx.org/data-values/iri/version.png)](https://packagist.org/packages/data-values/iri)
[![Download count](https://poser.pugx.org/data-values/iri/d/total.png)](https://packagist.org/packages/data-values/iri)

## Installation

The recommended way to use this library is via [Composer](http://getcomposer.org/).

### Composer

To add this package as a local, per-project dependency to your project, simply add a
dependency on `data-values/iri` to your project's `composer.json` file.
Here is a minimal example of a `composer.json` file that just defines a dependency on
version 1.0 of this package:

    {
        "require": {
            "data-values/iri": "1.0.*"
        }
    }

### Manual

Get the code of this package, either via git, or some other means. Also get all dependencies.
You can find a list of the dependencies in the "require" section of the composer.json file.
Then take care of autoloading the classes defined in the src directory.

## Tests

This library comes with a set up PHPUnit tests that cover all non-trivial code. You can run these
tests using the PHPUnit configuration file found in the root directory. The tests can also be run
via TravisCI, as a TravisCI configuration file is also provided in the root directory.

## Authors

DataValues Iri has been written by [Jeroen De Dauw] (https://github.com/JeroenDeDauw), as
[Wikimedia Germany](https://wikimedia.de) employee for the [Wikidata project](https://wikidata.org/).

## Release notes

### 0.1 (2013-11-17)

Initial release with these features:

* IriValue
* IriFormatter

## Links

* [DataValues Iri on Packagist](https://packagist.org/packages/data-values/iri)
* [DataValues Iri on TravisCI](https://travis-ci.org/DataValues/Iri)
