# Admin Panel Restructure Strategy and UX Audit

## Objective

Define a client-friendly Drupal admin structure that feels closer to a WordPress editorial workflow without breaking Drupal best practices around content types, Views, blocks, and permissions.

## 1. Current Editor Pain Points

### News
- editors need a fast way to see all news and add new news without hunting through generic Drupal content screens
- incident tagging must be obvious during publishing because it also affects filters and emergency behavior

### FAQ
- FAQ editors should work from a short list and a focused add form, not from the full mixed content table
- homepage FAQ and `/faq` page need to stay aligned from one source

### Resources
- resources combine landing-page cards and detail pages, so editors need a clear explanation of what fields affect cards versus long-form detail pages
- legacy prototype URLs can confuse editors if not hidden behind the final Drupal flow

### Homepage
- repeatable homepage sections should not be edited from Twig or block placement screens by day-to-day editors
- static promotional sections need clearer ownership than generic Drupal blocks alone provide

### Emergency Content
- emergency mode is high-risk content, so it needs a controlled toggle, clearer field guidance, and a predictable publishing order
- the emergency homepage mixes settings-form content, shared news content, global map data, and ticker items, so documentation is required

## 2. Current Flow Versus Desired Editorial Flow

### Current technical flow
- Drupal content lives across content types, Views, blocks, and settings forms
- Gin and Admin Toolbar already improve navigation, but editors still need clearer task-based entry points

### Desired client flow
1. Log in.
2. Open `GPREP Admin`.
3. Choose a task-focused area such as `News`, `FAQ`, `Resources`, `Homepage`, or `Emergency`.
4. Use `All ...` or `Add ...` shortcuts instead of the generic `Add content` list.
5. Publish and review the public page.

### Outcome
- editors work from business tasks
- site managers retain access to structure and global settings
- high-risk actions stay permission-gated

## 3. Content Management Pattern Decisions

### Use content types for repeatable editorial items
- News
- FAQ
- Resources
- Enrolled Members
- Stakeholders
- Partner Municipalities
- Hero Slides
- Emergency Banner Items
- Incident Types

### Use Views for repeatable listings
- homepage news, faq, resources, enrolled members, stakeholders, and partners
- About page partner listing
- list-style editorial screens where one source should feed multiple pages

### Use Drupal blocks for static promotional sections
- homepage app section
- homepage CTA section
- homepage `Who is GPREP` section

### Use a settings form for global or operational controls
- contact details
- social links
- map URL
- emergency mode toggle
- emergency incident, alert, donation, and temporary-access settings

## 4. Quick-Access Areas Editors Need Most

These are the high-frequency editorial destinations and should stay available from `GPREP Admin`:

- Dashboard
- All News
- Add News
- All FAQs
- Add FAQ
- All Resources
- Add Resource
- All Enrolled Members
- Add Enrolled Member
- All Stakeholders
- Add Stakeholder
- Emergency settings
- Menus
- Webform submissions

## 5. Recommended Admin Information Architecture

### Top navigation model
- `GPREP Admin`
  - `Dashboard`
  - `News`
  - `FAQs`
  - `Resources`
  - `Enrolled Members`
  - `Stakeholders`
  - `Homepage`
  - `Emergency`
  - `Forms`

### Role split
- `GPREP Content Editor`
  - day-to-day publishing only
- `GPREP Site Manager`
  - homepage, emergency, and global settings responsibilities

### Guardrails
- emergency mode toggle restricted to site managers
- dashboard structure links shown only when the current role can use them
- Views remain the source of truth for repeatable listings, but editors are expected to manage content rather than edit View configuration

## 6. Execution Alignment

The admin structure work should drive the remaining execution this way:

- editorial documentation must point editors to `GPREP Admin` shortcuts first
- QA must include editor-flow checks, not only frontend checks
- handoff notes must separate editor responsibilities from site-manager responsibilities
- launch review must confirm emergency workflow, News workflow, and Webform submissions workflow

## Recommended Next Checks

- run a final editorial QA pass for News, FAQ, Resources, Homepage blocks, and Emergency mode
- confirm the client is comfortable with the role split before UAT
- keep future features inside the same task-based admin structure instead of adding disconnected entry points
