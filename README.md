# SimpleTranslator

SimpleTranslator is a lightweight and extensible PHP library for managing translations in multiple languages. It supports various file formats, dynamic configurations, caching, and features like pluralization and gender-specific translations.

---

## Features

- **Dynamic Configurations:** Customize settings via environment variables or config files.
- **Multi-Format Support:** JSON, YAML, and XML translation files are supported.
- **Fallback Language:** Automatically falls back to a default language if a translation file is missing.
- **Error Handling:** Gracefully handles missing or unreadable files and keys.
- **Caching:** Reduces repeated lookups by caching translations.
- **Pluralization and Gender-Specific Translations:** Adapts based on count and gender.

---

# installation
The package is available on github and packagist, so for install and use this package you just need to install it by composer :
```
composer require kiumars-babolhavaeji/simple-php-translator
```

Usage
1. Configure the Library
Set environment variables for dynamic configurations:

```
export TRANSLATOR_LANGUAGE=en
export TRANSLATOR_TYPE=.json
export TRANSLATOR_ROOT=/path/to/translations
```


2. Translation Example

```
use SimpleTranslator\Lang;

echo Lang::translate('hello'); // Output: Translation of 'hello'
echo Lang::translate('apple', ['count' => 2]); // Output: Apples (based on pluralization)
echo Lang::translate('actor', ['gender' => 'female']); // Output: Actress
```



