# PHPCI-eslint

### Eslint reporter for [PHPCI](https://www.phptesting.org/)


Add this to `composer.json`:

```
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/sergiu-paraschiv/PHPCI-eslint"
    }
],

"require": {
    ...

    "sergiu-paraschiv/PHPCI-eslint": "~1.3"
},
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
