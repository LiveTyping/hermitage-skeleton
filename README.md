Hermitage Skeleton
==================

This is web-application skeletone for the Hermitage - cool image storage and image manager in one for your applications!

Hermitage is a micro-service based on Slim that provides storage, 
delivery and modification of your images for the desired clients and devices. Hermitage can:
* Take and give the image through the simple REST API
* Use as a repository local file system, or Amazon S3. If this is not enough, you can easily write your own adapter
* Give the image in one of a few preset formats. Add your own - a matter of seconds!

More Hermitage documentation in [Hermitage repo](https://github.com/LiveTyping/hermitage)

# Installation

Run the [Composer](https://getcomposer.org) command to install:

```bash
composer require livetyping/hermitage-skeleton ~0.1
```

# Configuration

### Environment variables

Copy the `.env.example` file to the local `.env` and configure it:

```bash
cp vendor/livetyping/hermitage/.env.example .env
```

### Image versions

Edit the file `config/versions.php`.

***NOTES:***
- Set `AUTH_SECRET` to some random string.
- Check and edit the file `config/main.php` to customize your application as required.

# License

Hermitage Skeleton is licensed under the MIT license.

See the [LICENSE](LICENSE) file for more information.
