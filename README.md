# SpinupWP Site Template

A template for developing single WordPress sites using Lando and hosting on the SpinupWP platform.

## Resources 📒

- [SpinupWP Dashboard](https://spinupwp.app)
- [SpinupWP Documentation](https://spinupwp.com/docs/)
- [Deploy with Git on SpinupWP](https://spinupwp.com/docs/git/)

## Requirements ✅

- [PHP 7.2+](https://www.php.net)
- [Lando](https://lando.dev)
- [Composer](https://getcomposer.com)

### SpinupWP Git Configuration

This template is built to deploy using SpinupWP's built-in feature to deploy using Git. As such, it is expected that sites which use this template will utilize that feature and other methods of deployment are not supported.

## IDE Configuration 👩🏽‍💻

This template includes functionality for developing with VSCode. It has a built in listener to XDebug, so utilizing VSCode give a big head start for a local development environemt. Other IDEs are not supported at this time, but feel free to configure to your hearts desire.

---

## Setup ⚒️

Prior to setup, ensure that you have Lando 3.0+ installed. Prefered method of install is using [Homebrew](https://brew.sh), but this is not required.

### Start the Development Enviornment

    lando start

This command is pre-configured to install Composer dependencies.

## Plugins and Themes 🔌

This template is setup to ignore Plugins and Themes by default, as these are typically installed via Composer. In those cases where Composer cannot be utilized to manage plugins and themes, adding a theme will require editing the .`.gitignore` at root to ensure that new manual addition is tracked.

## Deployments 🚀

As was previously mentioned, this template is configure to deploy using SpinupWP's built-in feature to deploy with Git.

### Deploy Script

In order to utilize the built-in deploy feature, you must add the following command to the deploy script for your application.

    composer install --optimize-autoloader --no-dev --prefer-dist

## Contribute 👨🏻‍💻

Contribution documentation coming soon... #waitForIt 😉
