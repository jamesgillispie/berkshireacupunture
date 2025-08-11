# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a WordPress theme built with Timber/Twig templating engine, using modern JavaScript (ES6+) with GSAP animations, TailwindCSS for styling, and a component-based architecture. The theme includes a styleguide system and supports Advanced Custom Fields (ACF).

## Development Commands

### Essential Commands
- `npm run watch` - Start development server with live reload and Browsersync
- `npm run build` - Build production-ready assets
- `npm run start` - Build assets and start live reload server  
- `npm run lint` - Lint all CSS, JS, MD, and PHP files
- `npm run format` - Auto-fix formatting errors for all file types
- `composer install` - Install PHP dependencies (Timber)
- `composer run-script lint` - PHP linting only
- `composer run-script format` - PHP formatting only

### Testing & Quality
- `npm run test:unit` - Run JavaScript unit tests
- `npm run test:e2e` - Run end-to-end tests
- `npm run lint:css` - Lint CSS/SCSS files
- `npm run lint:js` - Lint JavaScript files
- `npm run lint:php` - Lint PHP files via Composer

## Architecture

### Frontend Structure
- **JavaScript**: Component-based architecture with `AppController.js` as the main orchestrator
- **CSS**: TailwindCSS + custom CSS components in `src/css/app/`
- **Animation**: GSAP-powered animations with libraries like Lenis (smooth scroll), SplitType, and Three.js
- **Page Transitions**: Barba.js integration for smooth page transitions

### WordPress Integration  
- **Templating**: Timber/Twig templates in `views/` directory
- **PHP Classes**: PSR-4 autoloaded classes in `classes/` with `Tktk\` namespace
- **Asset Management**: WordPress Scripts (@wordpress/scripts) for build process
- **Menus**: Supports primary, secondary, footer, and social menus

### Key Components
- **AppController**: Main JavaScript controller that initializes all components
- **Setup.php**: WordPress theme setup and Twig customizations
- **Enqueue.php**: Asset enqueueing and script management
- **TimberContext.php**: Global Twig context management
- **StyleguideRoutes.php**: Component library routing

### Styleguide System
The theme includes a built-in component library accessible via custom routes. Components are documented with Twig templates and data files in `views/styleguide/`.

### Asset Build Process
- Entry point: `src/index.js`
- Output: `build/` directory
- Uses WordPress Scripts with PostCSS, TailwindCSS, and custom PostCSS plugins
- Supports both development and production builds

## WordPress Configuration Notes
- Requires Timber plugin activation
- Designed for use with Advanced Custom Fields
- Uses Composer for PHP dependency management
- Compatible with PHP 8.2+