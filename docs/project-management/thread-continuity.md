# Thread Continuity

## Use this file to resume in a new thread

If this conversation gets too long, a new thread should start by reading:

- `project-delivery/notes/thread-continuity.md`
- `project-delivery/notes/project-operations.md`
- `project-delivery/notes/timeline-plan.md`
- `project-delivery/trello/current-sprint-plan.md`
- `Client Documents/requirements_summary.md`

## Current date context

- Current working date: `2026-03-07`
- Target delivery: before `2026-03-25`

## Current repo status

- GitHub repo URL: `https://github.com/Abhishek-kmr525/GPREP.git`
- Local repo path: `/Volumes/ADG/GPREP- Development/GPREP-repo`
- Repo status: cloned successfully, repository is empty
- Current branch: `codex/project-setup`

## Current Drupal build status

- Drupal local install exists outside the empty repo at:
  `/Applications/XAMPP/xamppfiles/htdocs/drupal11`
- Local preview URL:
  `http://localhost:8080/`
- PHP in local runtime:
  `8.3.30`

## Current design source status

- Full HTML design source is available locally at:
  `/Volumes/ADG/GPREP- Development/project-delivery/design-handoff`

Important files observed there:

- `index.html`
- `emergency` design currently referenced from staging:
  `https://adgstaging.in/demos/gprep/final/emergency.html`
- other inner pages:
  `about.html`, `contact.html`, `faq.html`, `map.html`, `news.html`, etc.

## Official requirement direction

- Build direction is Drupal, not WordPress
- Emergency-mode dark-site behavior is a major requirement
- Client chose Drupal in meeting notes
- Existing content is mostly not to be migrated directly; client will provide updated content

## What has already been done

- RFP, addenda, SRS, sitemap, and meeting notes reviewed
- Requirements summary created
- Project-delivery workspace created
- Trello/GitHub/client-doc workflow files created
- Initial header/footer implementation was tested in the local Drupal instance
- Empty GitHub repo cloned locally
- First working branch created

## What must happen next

1. Inspect local design handoff carefully
2. Decide repo structure:
   - Drupal code committed into `GPREP-repo`
   - or theme/docs only committed there
3. Start proper commit flow from `codex/project-setup`
4. Build from source files, not just staging URLs
5. Implement emergency page and content structure next

## Weekly operating model

- User will share weekly sprint MOM
- MOM should be converted into:
  - decisions
  - actions
  - blockers
  - Trello card updates
  - documentation updates
  - sprint execution plan

## If a new thread starts

The first prompt should say something like:

`Read /Volumes/ADG/GPREP- Development/project-delivery/notes/thread-continuity.md and continue from the recorded state.`
