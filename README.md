# [Leap Bedrock](https://roots.io/bedrock/)
[![Build Status](https://travis-ci.org/LeapXD/bedrock.svg)](https://travis-ci.org/LeapXD/bedrock)

Just a simple fork from bedrock with some added stuff in the composer file 

Bedrock is a modern WordPress stack that helps you get started with the best development tools and project structure.

Much of the philosophy behind Bedrock is inspired by the [Twelve-Factor App](http://12factor.net/) methodology including the [WordPress specific version](https://roots.io/twelve-factor-wordpress/).
## Requirements

* PHP >= 5.4
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
* NPM - [Install](https://nodejs.org/download/)
* Or if you're fancy you can use homebrew to install both

## Quick start

>**MAKE SURE YOU HAVE COMPOSER AND NPM INSTALLED AND GLOBALLY AVAILABLE**

1. Create a new project directory: `$ mkdir example.com && cd example.com`
2. Clone Leap Bedrock: `$ git clone --depth=1 git@github.com:LeapXD/bedrock.git site && cd site && rm -rf .git && mv .env.example .env && composer update`
3. Clone Leap Starter Theme: `$ git clone --depth=1 git@github.com:LeapXD/leaptheme.git web/app/themes/leaptheme && cd web/app/themes/leaptheme && rm -rf .git && npm install && bower install && gulp`
4. Sit back and get some coffee / play ping pong cause if this is being installed on a remote server it'll take a little while to install everything.
5. change the `devUrl` variable in the `web/app/themes/leaptheme/manifest.json` file to your dev site URL

After that your folder structure is complete and you're ready to configure the individual components.


### Leap/Theme

```bash
$ cd web/app/themes/leaptheme
$ npm install
$ bower install
$ gulp
```
## Features

* Better folder structure
* Dependency management with [Composer](http://getcomposer.org)
* Easy WordPress configuration with environment specific files
* Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
* Autoloader for mu-plugins (use regular plugins as mu-plugins)

Use [bedrock-ansible](https://github.com/roots/bedrock-ansible) for additional features:

* Easy development environments with [Vagrant](http://www.vagrantup.com/)
* Easy server provisioning with [Ansible](http://www.ansible.com/) (Ubuntu 14.04, PHP 5.6 or HHVM, MariaDB)
* One-command deploys



## Installation

1. Clone the git repo - `git clone https://github.com/LeapXD/bedrock.git`
2. Run `composer install`
3. Copy `.env.example` to `.env` and update environment variables:
  * `DB_NAME` - Database name
  * `DB_USER` - Database user
  * `DB_PASSWORD` - Database password
  * `DB_HOST` - Database host
  * `WP_ENV` - Set to environment (`development`, `staging`, `production`)
  * `WP_HOME` - Full URL to WordPress home (http://example.com)
  * `WP_SITEURL` - Full URL to WordPress including subdirectory (http://example.com/wp)
4. Add theme(s) in `web/app/themes` as you would for a normal WordPress site.
4. Set your site vhost document root to `/path/to/site/web/` (`/path/to/site/current/web/` if using deploys)
5. Access WP admin at `http://example.com/wp/wp-admin`

## Deploys

There are two methods to deploy Bedrock sites out of the box:

* [bedrock-ansible](https://github.com/roots/bedrock-ansible)
* [bedrock-capistrano](https://github.com/roots/bedrock-capistrano)

Any other deployment method can be used as well with one requirement:

`composer install` must be run as part of the deploy process.

## Documentation

* [Folder structure](https://github.com/roots/bedrock/wiki/Folder-structure)
* [Configuration files](https://github.com/roots/bedrock/wiki/Configuration-files)
* [Environment variables](https://github.com/roots/bedrock/wiki/Environment-variables)
* [Composer](https://github.com/roots/bedrock/wiki/Composer)
* [wp-cron](https://github.com/roots/bedrock/wiki/wp-cron)
* [mu-plugins autoloader](https://github.com/roots/bedrock/wiki/mu-plugins-autoloader)

## Contributing

Contributions are welcome from everyone. We have [contributing guidelines](CONTRIBUTING.md) to help you get started.

## Community

Keep track of development and community news.

* Participate on the [Roots Discourse](https://discourse.roots.io/)
* Follow [@rootswp on Twitter](https://twitter.com/rootswp)
* Read and subscribe to the [Roots Blog](https://roots.io/blog/)
* Subscribe to the [Roots Newsletter](https://roots.io/subscribe/)
