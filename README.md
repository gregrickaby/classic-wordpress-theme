# Classic WordPress Theme <!-- omit in toc -->

A classic PHP-based theme, with modern tooling and support for Gutenberg blocks.

## Table of Contents <!-- omit in toc -->

- [Features](#features)
- [Why?](#why)
- [Setup](#setup)
	- [Requirements](#requirements)
	- [Install](#install)
- [Development](#development)
	- [Asset Structure](#asset-structure)
	- [Styling](#styling)
	- [JavaScript](#javascript)
	- [Theme Files](#theme-files)
	- [theme.json](#themejson)
	- [NPM Scripts](#npm-scripts)

---

## Features

- [Webpack 5](https://webpack.js.org/guides/getting-started/)
- [TailwindCSS](https://tailwindcss.com/)
- [theme.json](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)
- [LiveReload](http://livereload.com/)
- [Github Actions](https://github.com/features/actions)
- [WP CLI](https://make.wordpress.org/cli/handbook/)
- [WordPress Coding Standards](https://codex.wordpress.org/WordPress_Coding_Standards)
- Whole lotta linting, Prettier, and PHPCBF support

---

## Why?

This isn't a [block theme](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/) and does not support full-site editing on purpose.

There's no doubt that block-based themes are the future of WordPress; however, PHP-based themes with deep integration with Gutenberg and modern tooling are still as relevant as ever.

I wanted to create a "classic" theme that gave developers world class support for tooling _and_ the latest Gutenberg block features like `theme.json`. Plus, I love to tinker and being on the bleeding edge is fun!

---

## Setup

### Requirements

- [Node 14](https://nodejs.org/en/)
- [NPM 7](https://docs.npmjs.com/about-npm)
- [Composer 2](https://getcomposer.org/)

### Install

Clone this theme into `wp-content/themes`:

```bash
git clone git@github.com:gregrickaby/classic-wordpress-theme.git
```

Install dependencies:

```bash
composer install && npm i --legacy-peer-deps
```

Run a build to bundle all theme assets:

```bash
npm run build
```

Finally, activate the theme in the WordPress dashboard.

---

## Development

### Asset Structure

The `src` directory is where all theme assets should be placed. Webpack is configured to bundle them into the `/build` directory.

```txt
├── src
│   index.js
│   ├── css
│   │   ├── index.css
│   │   └── tailwind.css
│   ├── fonts
│   │   └── OpenSans-Regular.woff2
│   ├── images
│   │   └── placeholder.png
│   └── js
│       └── placeholder.js
```

### Styling

This theme includes support for [TailwindCSS](https://tailwindcss.com/). It uses the [JIT compiler](https://tailwindcss.com/docs/just-in-time-mode), so live reloads are ⚡️ fast.

To get started, open `index.css` and start adding your styles. To customize further, open `tailwind.config.js` or `theme.json`.

### JavaScript

This theme uses Webpack 5 is ready for anything `esnext`. Simply create your JS files and place them in `/src/js/` then use ES6 imports in `src/index.js`.

### Theme Files

It can frustrating to "tear down" a theme just to get started. I tried to keep the theme files and use of template tags to the bare minimum.

### theme.json

WordPress 5.8 comes with a new mechanism to configure the editor that enables a finer-grained control and introduces the first step in managing styles for future WordPress releases: the `theme.json` file.

The `theme.json` kinda mimics the config workflow for [tailwind.config.js](https://tailwindcss.com/docs/configuration):

```json
// theme.json
{
  "version": 1,
  "settings": {
    "color": {},
    "layout": {}
  },
  "styles": {
    "color": {},
    "typography": {},
    "elements": {},
    "blocks": {}
  },
  "templateParts": {},
  "customTemplates": {}
}

```

You can learn more about `theme.json` in the [Block Editor Handbook](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/) and check out the [theme-experiments repo](https://github.com/WordPress/theme-experiments) on Github.


### NPM Scripts

Watch for changes and LiveReload:

```bash
npm run dev
```

> Heads up! You'll need a [browser extension](http://livereload.com/extensions/) for LiveReload to work!

Bundle assets for production:

```bash
npm run build
```

Format files:

```bash
npm run format
```

Lint files:

```bash
npm run lint
```

---
