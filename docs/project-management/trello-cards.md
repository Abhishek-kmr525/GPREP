# GPREP Trello Cards

## Usage Note

This file is written so cards can be copied directly into Trello. Each card includes:
- suggested list
- labels
- due date
- description
- checklist

---

## Card 1

**Title**
- `Homepage Drupal Build and CMS Wiring`

**List**
- `Done`

**Labels**
- `Drupal`, `Frontend`, `Content`, `Docs`

**Due Date**
- `2026-03-10`

**Description**
- Deliver the non-emergency homepage in Drupal using the approved prototype, while ensuring key content is client-editable from backend. This includes the emergency ticker, hero slider, About section, Enrolled Members, Stakeholders, Partner Municipalities, Resources, FAQ, News, and editable header/footer settings.

**Checklist**
- [x] build header and footer from approved design
- [x] make header menu editable from Drupal
- [x] make footer menus editable from Drupal
- [x] connect phone, email, emergency number, and social links to site settings
- [x] build current emergency ticker
- [x] implement marquee movement right to left
- [x] build hero slider with prototype images and content
- [x] make hero slides editable from admin
- [x] build About, Enrolled Members, Stakeholders, Partner Municipalities, Resources, FAQ, and News sections
- [x] remove unnecessary hardcoded frontend-only content where client needs backend control
- [x] update user manual

---

## Card 2

**Title**
- `About Page Build and Shared Partner Municipalities`

**List**
- `Done`

**Labels**
- `Drupal`, `Frontend`, `Content`

**Due Date**
- `2026-03-11`

**Description**
- Build the About page in Drupal using the approved design and reuse the global `Partner Municipalities` content already created for the homepage so the same logos/data stay consistent across pages.

**Checklist**
- [x] create About page route/content shell
- [x] implement About page design in theme
- [x] connect shared Partner Municipalities section
- [x] verify frontend output
- [ ] decide whether About body content should remain theme-managed or move to admin-managed content

---

## Card 3

**Title**
- `Enrolled Members Listing Page`

**List**
- `Done`

**Labels**
- `Drupal`, `Frontend`, `Content`, `Docs`

**Due Date**
- `2026-03-12`

**Description**
- Build the dedicated Enrolled Members page using the same Drupal model already powering the homepage cards. This ensures the admin can add, update, reorder, and remove members in one place and have both homepage and inner page stay aligned.

**Checklist**
- [x] create page
- [x] render enrolled members intro and grid
- [x] pull data from existing `Enrolled Member` content type
- [x] link homepage CTA to `/enrolled-members`
- [x] verify live page
- [x] update user manual

---

## Card 4

**Title**
- `Contact Page with Editable Webform and Submission Tracking`

**List**
- `Done`

**Labels**
- `Drupal`, `Backend`, `Content`, `Docs`

**Due Date**
- `2026-03-12`

**Description**
- Build the Contact page using global site settings for contact information and a Drupal Webform for enquiries. Admin must be able to customize fields later and view all submitted entries from backend, similar to a WordPress form plugin workflow.

**Checklist**
- [x] install and enable Webform
- [x] create `contact_us` form
- [x] render contact page design
- [x] pull phone, email, emergency number, address, and map URL from site settings
- [x] confirm admin can edit form fields
- [x] confirm admin can view submissions list
- [x] update user manual with builder and submissions paths

---

## Card 5

**Title**
- `Map Page Build Without Banner`

**List**
- `Done`

**Labels**
- `Drupal`, `Frontend`, `Integration`

**Due Date**
- `2026-03-12`

**Description**
- Build the Map page as a direct map-first experience. The page should not show the standard banner/breadcrumb section and must pull the embed source from global site settings so the map can be updated without code changes.

**Checklist**
- [x] create page
- [x] remove banner/breadcrumb section
- [x] render map directly on page
- [x] pull map URL from site settings
- [x] verify page output

---

## Card 6

**Title**
- `Stakeholders Inner Page`

**List**
- `Ready To Start`

**Labels**
- `Drupal`, `Frontend`, `Content`

**Due Date**
- `2026-03-15`

**Description**
- Build the dedicated Stakeholders page using the existing stakeholder content model already created for the homepage. The admin should manage cards once and see changes reflected consistently.

**Checklist**
- [ ] review uploaded design/source for stakeholder page
- [ ] create page structure in Drupal
- [ ] render stakeholder intro and listing grid
- [ ] pull items from existing `Stakeholder Item` content type
- [ ] connect CTA from homepage if required
- [ ] QA visual alignment
- [ ] document admin workflow in user manual

---

## Card 7

**Title**
- `Resources Inner Page and Content Flow`

**List**
- `Ready To Start`

**Labels**
- `Drupal`, `Frontend`, `Content`

**Due Date**
- `2026-03-16`

**Description**
- Create the Resources page in Drupal and connect it to the existing resource card model. The page should present the approved design while preserving backend editability for resource cards, summaries, images, and destination links.

**Checklist**
- [ ] review prototype page
- [ ] build page template
- [ ] pull from existing `Resource Item` content
- [ ] validate card links and media
- [ ] review mobile layout
- [ ] update documentation

---

## Card 8

**Title**
- `FAQ Inner Page and Accordion Management`

**List**
- `Ready To Start`

**Labels**
- `Drupal`, `Frontend`, `Content`

**Due Date**
- `2026-03-16`

**Description**
- Create the FAQ page using the current FAQ content structure so the client can continue to manage questions and answers from Drupal admin without touching code.

**Checklist**
- [ ] review uploaded design/source
- [ ] build page template
- [ ] connect existing FAQ intro content
- [ ] connect existing FAQ items
- [ ] verify accordion behavior
- [ ] update documentation

---

## Card 9

**Title**
- `News Listing and Detail Flow`

**List**
- `Ready To Start`

**Labels**
- `Drupal`, `Frontend`, `Content`

**Due Date**
- `2026-03-17`

**Description**
- Build a proper News page flow so the client can publish and manage news items from admin and users can access a full listing and read each update cleanly.

**Checklist**
- [ ] review prototype news page
- [ ] define listing page structure
- [ ] confirm whether detail pages should use node pages or theme route
- [ ] connect existing `News Item` content type
- [ ] validate dates, images, summaries, and links
- [ ] update documentation

---

## Card 10

**Title**
- `Emergency Page Final Drupal Implementation`

**List**
- `Ready To Start`

**Labels**
- `Drupal`, `Frontend`, `Critical`

**Due Date**
- `2026-03-18`

**Description**
- Implement the emergency page in Drupal to match the approved prototype and support the emergency communication requirement of the client. This is a critical client-facing capability and should prioritize clarity, speed, and backend manageability where relevant.

**Checklist**
- [ ] compare current implementation with emergency prototype
- [ ] build/adjust page sections to match design
- [ ] confirm which sections must be editable from admin
- [ ] test emergency ticker and updates behavior
- [ ] review mobile rendering
- [ ] update documentation

---

## Card 11

**Title**
- `Publish Latest Drupal Work to GitHub`

**List**
- `Ready To Start`

**Labels**
- `GitHub`, `Dev Workflow`, `Documentation`

**Due Date**
- `2026-03-14`

**Description**
- Move the latest local Drupal implementation into the tracked Git workflow with clean commits and a reviewable branch state. This is required so development is not trapped only in the local XAMPP environment.

**Checklist**
- [ ] identify which Drupal files need to be moved into repo scope
- [ ] confirm repo structure for Drupal source
- [ ] create clean commit sequence by feature area
- [ ] push branch updates to GitHub
- [ ] prepare PR summary notes

---

## Card 12

**Title**
- `Server SSH Access and Deployment Preparation`

**List**
- `Ready To Start`

**Labels**
- `DevOps`, `Deployment`, `Critical`

**Due Date**
- `2026-03-18`

**Description**
- Prepare deployment execution by validating SSH access, understanding server environment requirements, and creating a safe Drupal deployment checklist. This must be ready before final code handoff and launch preparation.

**Checklist**
- [ ] collect SSH host, port, user, and key details
- [ ] validate SSH login
- [ ] inspect server PHP, database, and web root setup
- [ ] identify deployment path and release process
- [ ] document environment variables and secrets handling
- [ ] define backup and rollback steps
- [ ] define first deployment checklist

---

## Card 13

**Title**
- `QA, Accessibility, and Responsive Review`

**List**
- `Ready To Start`

**Labels**
- `QA`, `Accessibility`, `Frontend`

**Due Date**
- `2026-03-20`

**Description**
- Run a structured review of the implemented Drupal pages against design, responsiveness, accessibility expectations, and admin usability so the project can move toward client review with fewer regressions.

**Checklist**
- [ ] homepage visual review
- [ ] inner pages visual review
- [ ] mobile review
- [ ] keyboard and focus review
- [ ] heading and semantic structure review
- [ ] form usability review
- [ ] fix pass for issues found

---

## Card 14

**Title**
- `Client Documentation, User Manual, and Handoff Pack`

**List**
- `In Progress`

**Labels**
- `Docs`, `Client`, `Handoff`

**Due Date**
- `2026-03-22`

**Description**
- Maintain delivery documentation continuously so the client receives a usable admin guide, feature explanations, and operating notes rather than last-minute scattered handoff material.

**Checklist**
- [x] create user manual baseline
- [x] document homepage content management
- [x] document enrolled members page workflow
- [x] document contact page workflow
- [x] document map page workflow
- [ ] document remaining inner pages
- [ ] prepare launch/handoff notes
- [ ] prepare post-launch support notes if required

---

## Card 15

**Title**
- `Weekly MOM, Sprint Tracking, and Trello Maintenance`

**List**
- `In Progress`

**Labels**
- `Project Management`, `Docs`, `Client`

**Due Date**
- `2026-03-25`

**Description**
- Keep project operations disciplined week by week by converting meeting outcomes into action items, board updates, blockers, and execution priorities.

**Checklist**
- [x] create MOM template
- [x] create project operations notes
- [x] create timeline plan
- [x] create sprint board
- [x] create Trello-ready cards
- [ ] update board after each sprint call
- [ ] convert each MOM into action list and next sprint priorities
- [ ] keep due dates aligned to `2026-03-25`
