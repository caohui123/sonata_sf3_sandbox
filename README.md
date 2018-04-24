Sandbox Sonata Symfony 3.4
========================

Introduction
------------

This project is based on Symfony 3.4 and is a Sandbox for Sonata Project.


Installation
------------

### Install the environment

#### Requirements

php >= 7.1

#### Docker

[Docker apache](https://github.com/mattcontet/environment)

### Install the project

1. Clone the project
2. Build the project : `composer install` + Configure environment variables
3. Configure the project :
    - Build the DB :
            - `php bin/console doctrine:database:create`
            - `php bin/console doctrine:schema:create`
    - Create an admin user : `php bin/console fos:user:create admingr --super-admin`

Guidelines Git
--------------

### Commit messages

For your commit messages, please follow the [Golden Rules 1 - Commit message](https://sites.google.com/emakina.fr/technopedia/rules/golden-rules/1-commit-message)
  
### Pull requests

For your pull requests, please follow the [Golden Rules 4 - Pull request](https://sites.google.com/emakina.fr/technopedia/rules/golden-rules/4-pull-request)

Documentation
-------------

### Sonata Project Bundles

Here is the list of the sonata bundles implemented for this Sandbox.

#### Foundation

-    Sonata\CoreBundle\SonataCoreBundle
-    Sonata\NotificationBundle\SonataNotificationBundle
-    Sonata\FormatterBundle\SonataFormatterBundle
-    Sonata\IntlBundle\SonataIntlBundle
-    Sonata\CacheBundle\SonataCacheBundle
-    Sonata\SeoBundle\SonataSeoBundle
-    Sonata\DatagridBundle\SonataDatagridBundle
-    Sonata\EasyExtendsBundle\SonataEasyExtendsBundle

#### Admin
-    Sonata\AdminBundle\SonataAdminBundle
-    Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle
-    Sonata\TranslationBundle\SonataTranslationBundle
-    Sonata\DashboardBundle\SonataDashboardBundle
-    Sonata\AdminSearchBundle\SonataAdminSearchBundle

#### Feature
-    Sonata\BlockBundle\SonataBlockBundle
-    Sonata\ClassificationBundle\SonataClassificationBundle
-    Sonata\MediaBundle\SonataMediaBundle
-    Sonata\NewsBundle\SonataNewsBundle
-    Sonata\PageBundle\SonataPageBundle
-    Sonata\TimelineBundle\SonataTimelineBundle
-    Sonata\UserBundle\SonataUserBundle

### Useful routes

The term `root_path` is your server domain for this project.

The admin side : http://`root_path`/admin

Contributors
------------

For information, feed-back or questions, peoples who worked on this project are :

#### Back-end

* Kevin Dessimoulie - [patatesup@gmail.com](mailto:patatesup@gmail.com)
