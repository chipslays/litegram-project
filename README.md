# 📁 Litegram Project

Ready-to-use project structure based on [Litegram](https://github.com/chipslays/litegram) library.

## Installation

```bash
composer create-project chipslays/litegram-project SuperDuperBot
```

## Quick-start

- [Create](#installation) project via composer or cloning;
- Go to `config/bot.php` and configure project;
- Go to `bot/core/bootstrap/plugins.php` and comment/uncomment something;
- Add some logic in `bot/brain.php` file;
- If you want use database, type in Terminal:
```bash
php lite migrate:up
```
> **NOTE:** Before doing this 👆, set up database config in `config/bot.php`.
- If you want use webhook, type in Terminal:
```bash
php lite webhook:set
```
- Or if you want use long-polling, type in Terminal:
```bash
php lite polling
```

🎉 Congrats, now bot is online.

## License

The Litegram is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

