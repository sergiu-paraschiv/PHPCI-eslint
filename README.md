# PHPCI-eslint

### Eslint reporter for [PHPCI](https://www.phptesting.org/)


Add this to `composer.json`:

```
composer require sergiu-paraschiv/phpci-eslint
```

Then the task to `phpci.yml`:
```
test:
    ...
    \SergiuParaschiv\PHPCI\Plugin\Eslint:
        directory: "frontend"
        command: "npm run lint:ci"
        allowed_errors: 10
        allowed_warnings: 20
        data_offset: 2
    ...
```

Eslint should run with the `-f json` flag.

`data_offset` is the number of lines at the top of the output to skip before parsing the response.

`lint:ci` in `package.json` should be `"lint:ci": "eslint 'app/**/*.js' -f json; exit 0",`
