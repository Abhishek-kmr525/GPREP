# GPREP Drupal Website

Drupal 11 codebase for the GPREP website build.

## Stack

- Drupal `11`
- PHP `8.3`
- MariaDB / MySQL
- XAMPP for local development
- Webform for contact form management

## Repository Scope

This repository tracks:

- Composer-managed Drupal project files
- custom Drupal modules
- custom Drupal theme
- project delivery and client documentation

This repository does not track:

- `vendor/`
- Drupal core checked-in files
- local database content
- local uploaded files
- environment-specific `settings.php`

## Local Setup

1. Run `composer install`
2. Create the Drupal database
3. Add your local `web/sites/default/settings.php`
4. Enable the custom modules and theme
5. Import or recreate local content as needed

## Custom Code

- Theme: `web/themes/custom/gprep_theme`
- Modules:
  - `web/modules/custom/gprep_site_settings`
  - `web/modules/custom/gprep_homepage_manager`

## Documentation

- client docs: `docs/client/`
- project management docs: `docs/project-management/`
