# GPREP Trello Brief

## Board Objective

Track the Drupal website delivery for GPREP from active build through pre-launch, with clear ownership, visible progress, and a finish target before `2026-03-25`.

## Recommended Trello Lists

- `Client Approved / Locked`
- `Ready To Start`
- `In Progress`
- `Blocked / Waiting`
- `Review / QA`
- `Done`

## Delivery Rules

- Every development card must include:
  - outcome
  - client value
  - due date
  - checklist
  - dependency note if blocked
- Every client-facing page or feature should have:
  - Drupal build task
  - content/admin editability task
  - QA/review task
  - documentation or user-manual task where needed
- Every completed feature should be reflected in:
  - Drupal
  - user manual
  - GitHub branch/commit status
  - Trello card status

## Project Deadline

- Final target: before `2026-03-25`

## Current Actual Build State

Completed in Drupal:
- homepage structure
- editable header/footer
- emergency ticker
- hero slider
- homepage sections: About, Enrolled Members, Stakeholders, Partner Municipalities, Resources, FAQ, News
- About page
- Enrolled Members page
- Contact page with Webform
- Map page without banner

In progress at project level:
- Trello/project operations setup
- GitHub publishing flow for latest Drupal work
- remaining inner pages
- emergency page refinement
- deployment preparation

Still required:
- stakeholder inner page
- news inner page
- resources inner page
- FAQ inner page
- emergency page finalization
- server deployment over SSH
- QA/accessibility/mobile review
- final documentation and handoff

## Card Writing Standard

Use this card pattern:

- `Title`: short, outcome-based
- `Description`: what is being delivered, why it matters, what admin can manage
- `Labels`: `Frontend`, `Drupal`, `Backend`, `Content`, `QA`, `DevOps`, `Docs`, `Client Review`
- `Due date`: real target date before `2026-03-25`
- `Checklist`: clear execution steps, not vague reminders

## Priority Order

1. finish core public pages and CMS editability
2. publish working code to GitHub in clean commits
3. prepare staging/server deployment over SSH
4. complete QA, documentation, and client handoff support
