# BootstraoDateTimePickerBundle

## Introduction

This bundle provides a fully-featured datetime picker field.

### Requeriments

- Symfony 2.8+
- Twitter Bootstrap

### Features

- DateTime Picker
- Bootstrap Styling

## Installing

### Add composer

Add the dependency to your composer.json

```yml
    "require": {
        ...
	    "felipyamorim/bootstrap-datetime-picker-bundle" : "dev-master"
	}
```

### Add bundle class in kernel

Register the bundle class in your AppKernel.php
```php
    public function registerBundles()
    {
        $bundles = array(
        ...
        new FelipyAmorim\BootstraoDateTimePickerBundle\FelipyAmorimBootstraoDateTimePickerBundle(),
        ...
        );
    }
```

Install assets

Symfony 3:
```
$ php bin/console install:assets
```

Symfony 2:
```
$ php app/console install:assets
```

All done!

## License

MIT

