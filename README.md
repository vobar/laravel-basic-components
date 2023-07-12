## This package logic and structure based on great [laravel/breeze](https://github.com/laravel/breeze) package

## Basic components for small sites on [LARAVEL](https://github.com/laravel/laravel) framework

> **Note**
>
> Mainly developed for laravel/breeze package


Components for fast creating sites.\
Copying basic kit for some tagged entities in right places.

Do not write it! Only install =)

---

### HOW TO INSTALL

composer require vobar/laravel-basic-site:dev-master

---

### HOW TO PUBLISH

php artisan vendor:publish --tag=[tag_name]

#### available tags:

- news
- slider (WIP)
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

