Hermitage Skeleton
==================

This is web-application skeleton for the Hermitage - cool image storage and image manager in one for your applications!

Hermitage is a micro-service based on Slim. It provides storage, 
delivery and modification of your images for clients and devices you want. Hermitage can:
* Take and put the image through the simple REST API
* Use local file system or Amazon S3 as a repository. And you can easily write your own adapter if needed.
* Put the image in one of preset formats. You can add your own - it's a matter of seconds!

More Hermitage documentation in [Hermitage repo](https://github.com/LiveTyping/hermitage)

# Installation

Run the [Composer](https://getcomposer.org) command to install:

```bash
composer create-project livetyping/hermitage-skeleton hermitage
```

# Configuration

### Environment variables

Copy the `.env.example` file to a local `.env` and configure it:

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
