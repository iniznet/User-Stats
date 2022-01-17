# vue-wp-plugin-starter
Vue Wordpress Plugin Starter with Vue3, Typescript, and Laravel Mix (Webpack wrapper)

Effortlessly create a new plugin with this template!

Preview online: https://niiknow.github.io/vue-wp-plugin-starter/

![screenshot](https://raw.githubusercontent.com/niiknow/vue-wp-plugin-starter/master/screenshot.gif?raw=true)

**Scaffolding**

As this is a template project, simply click the "Use this template" button and run the [init-plugin.sh](init-plugin.sh) bash script to scaffold a new plugin.

Run:
```shell
bash init-plugin.sh
```

Use `composer install` to install php dependencies, and use `npm install` for front-end dependencies.

To build `dist.zip` for deployment:
```shell
composer app:package
```

Deploy `dist.zip` to a wordpress website:
```shell
cd your-wp-site-root
cd wp-content/plugins
unzip dist.zip -d wp-your-plugin-folder-name
```

Also, don't forget to update [readme.txt](readme.txt) file appropriately since it is one of wordpress plugin required file.

# Vue/Front-end apps
There are two front-end apps in this starter/example.  Let say your prefix is `wp-awesome-plugin`, then your shortcodes would be (also see `include/FrontendLoader.php`):

```html
<!-- frontend app (full route) example -->
[wp-awesome-plugin-vue-app postfix='frontend']

<!-- frontview app (dynamic view) example, render component in frontview/views/Comp2.vue folder -->
[wp-awesome-plugin-vue-app postfix='frontview' view="Comp2"]
```

Since admin does not require shortcode, it is automatically generate with wrapper id=`admin-app-wrapper`

Run/preview locally:
```shell
npm run watch
```

# Project structures
```
vue-wp-plugin-starter/
└───assets/
    │   admin.css                    - postcss for wordpress admin
    │   admin.html                   - admin demo html template
    │   frontend.css                 - postcss for front-end supporting full routing
    │   frontend.html                - front-end demo html template
    │   frontview.css                - postcss for front-end allow dynamic vue view/page
    │   frontview.html               - demo of dynamic vue view/page html template
└───config/
    │   settings.php                 - plugin config file for admin settings page
└───includes/
    └───Api/
    |   │   SettingsController.php   - REST Api for admin settings
    │   AdminLoader.php              - load wordpress admin stuff
    │   ApiRouters.php               - load REST Api routes
    │   Assets.php                   - maintain plugin assets
    │   CliLoader.php                - load CLI commands
    │   ExampleCommand.php           - hello world command
    │   FrontendLoader.php           - load vue front-end shortcodes
    │   Main.php                     - Main plugin instance
    │   Migrations.php               - handle database migrations
└───public/
    └───css/                         - output of assets/ folder
    └───js/                          - compiled/output of src
    │   mix-manifest.json            - versioning builted assets
└───src/
    └───admin/
    │   └───router/
    │   |   |    index.ts            - map all route/files in admin router folder
    │   |   admin-menu-fix.js        - SPA menu selector for wordpress admin
    │   |   admin.ts                 - admin main entry point
    │   |   App.vue                  - admin main view
    └───frontend/
    │   └───router/
    │   |   |    index.ts            - map all route/files in frontend router folder
    │   └───views/
    │   |   |    Home.Vue
    │   |   App.vue                  - frontend main view
    │   |   frontend.ts              - frontend main entry point
    └───frontview/
    │   └───router/
    │   |   |    index.ts            - just a dummy router
    │   └───views/
    │   |   |    Comp2.Vue           - demo second view
    │   |   |    Home.Vue            - demo main/first view
    │   |   App.vue                  - main view
    │   |   frontview.ts             - main entry point
    │   shims-vue.d.ts               - allow vue to use in typescript
    │   shims-window.d.ts            - allow windows object use in typescript
└───tests/
    └───jsunit/
    │   └───admin/
    │   │   └───views/
    │   |   |   Dashboard.spec.ts    - Demo jest/javascript unit testing
    └───phpunit/
    │   └───inc/                     - mocking/fake and base files
    │   |   |   class-wp-rest-controller.php
    │   |   |   PluginTestCase.php
    │   └───testcases/               - PHP unit testing files
    │   |   AdminTests.php
    │   |   ApiTests.php
    │   |   AssetsTests.php
    │   |   FrontendTests.php
    │   |   SettingControllerTests.php
    │   bootstrap.php                - loader file, act like (fake) plugin file in main folder
-----
.... root files can be seen above so it's not listed.  Above listing is
.... to provide overview of our project structure so not all files are listed here.
-----
```

# FAQ
1.  Can I use SASS/SCSS intead of postCss?

* Yes.  Simply uses mix.sass instead of mix.postCss in webpack.mix.js file.  Since there are multiple assets (admin, frontend, frontview), you can also mix different css processors between them too.

2.  Why does my CSS failed to output?

* Is there syntax error in your CSS file?  You can try sass instead of postCss transform.  sass is better at letting you know if you CSS is having error.  postCss just fail and doesn't notify you of the error.

... more TBD

# GPLv2 or later
