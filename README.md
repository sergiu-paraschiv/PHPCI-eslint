# PHPCI-eslint

### Eslint reporter for [PHPCI](https://www.phptesting.org/)


Add this to `composer.json`:

```
composer require sergiu-paraschiv/phpci-eslint
```

Then the task to `phpci.yml`:
```
\SergiuParaschiv\PHPCI\Plugin\Eslint:
    directory: "frontend"
    command: "npm run -s lint:ci"
    allowed_errors: 10
    allowed_warnings: 20
```

Npm should run with the `-s` flag.

Eslint should run with the `-f json` flag.

`lint:ci` in `package.json` should be `"lint:ci": "eslint 'app/**/*.js' -f json; exit 0",`
