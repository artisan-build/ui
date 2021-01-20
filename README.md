# Artisan UI

An open source UI Kit featuring Tailwind and Alpine-powered Blade components, optimized for use with or without Livewire.

<a href="https://artisan.build"><img src="https://repository-images.githubusercontent.com/323002393/4261fb80-42ba-11eb-9d7b-2c295d42da7b" alt="Artisan, Build" height="360"></a>

### Installation

Assuming that you are running PHP 7.4 or higher and Laravel 7 or higher, just run:
`composer require artisan-build/ui`

If you are running an older version of PHP or an older verison of Laravel, you'll need to upgrade both before you can use this package.

### Usage

This package registers things like buttons, icons, form inputs, and table rows as [blade components](https://laravel.com/docs/8.x/blade#components). Each component uses TailwindCSS (v2) and, if Javascript is required, Alpine.js. They are all designed to easily integrate into TALL stack projects. You can add wire:* or x-* attributes to any component. Any valid HTML attribute you pass to a component will work as expected.

Assuming that you are running the most current version of this package, you can find a list of all the components, and the parameters they accept [on the Artisan UI website](https://artisanui.com).

### Contributing

There are several ways you can get involved in helping to build this package.

__Create A New Component:__ You can create an entirely new component if you want to add something we don't have at all. This requires a PR with a new component class, a default (Tailwind CSS or No CSS) template, and a test class with the default version well tested.

__Review Pull Requests:__ Only a handful of core team members have the ability to merge in pull requests, but we welcome and encourage feedback on pull requests from all users of this package. Read through the code to make sure it's up to par. Pull in the branch and take the component through its paces. Recommend changes and let us know if you think it's ready to merge.

__Help Users With Issues:__ In projects like this, most issues opened are actually just cries for help. They might indicate some deficiency in the documentation. Sometimes the user just lacks some foundational knowledge we take for granted. Your help in pointing users who have trouble in the right direction and letting us know where you think we could improve the documentation will go a long way toward making this project a success.

### Linting and Testing

```shell script
composer lint # Runs php-cs-fixer to fix your coding style
composer check # Runs lint and then phpunit
```
