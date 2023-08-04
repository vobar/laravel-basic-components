## This package logic and structure based on great [laravel/breeze](https://github.com/laravel/breeze) package

## Basic components for small sites on [LARAVEL](https://github.com/laravel/laravel) framework

> **Note**
>
> Mainly developed for laravel/breeze package for internal needs of our team and microservices/microsites development


Components for fast creating sites.\
Copying basic kit for some tagged entities in right places.

Do not write it! Only install =)

---

### HOW TO INSTALL
```php
composer require vobar/laravel-basic-components
```
---

### HOW TO PUBLISH
```php
php artisan basic:install [stack]
```
#### available stacks:

- vue
- blade


# OLD. WIP
- vue components:
  <details>
      <summary>SelectFilterable - is a select with filterable list --tag=vue-SelectFilterable</summary>

  **Attention!** Need headlessui npm package!

  Input parameters:
    - selected - selected element id
    - people - list with format:```[{id: 1, name: 'Не выбран'}]```

  #### Пример вызова:
    ```vue
        <SelectFilterable
            v-model:selected="goods.user_id"
            :people="store.responsibles"
        />
    ```

  </details>

---

#### License:

MIT

---

Special thanks:\
Alex M\
Ildar Y\
Sergey I\
Yaroslav T

