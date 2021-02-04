# Developing packages - packagist

## Create vendor package

- **dev-pack** folder consist of created packages
- Both consist of `src` & `composer.json`
- - *src* : PHP files & classes
- - *composer.json* : Package name, description, type, autoload, ...

## Using created package

- use `composer init` to initialize `composer.json`
- Add `repositories` section & `type` , `url` for multiple package paths
- in `require` section, add above mentionned packages name with version `dev-master`
- Do `composer install`



