# WCAG 2.2 AA Workplan

## Objective

Break the accessibility review into practical delivery cards that cover the full WCAG 2.2 Level A and Level AA scope required for the project.

Official references:
- [WCAG 2.2 Recommendation](https://www.w3.org/TR/WCAG22/)
- [How to Meet WCAG 2.2 Quick Reference](https://www.w3.org/WAI/WCAG22/quickref/)

## Project Scope

Primary review targets:
- homepage
- emergency homepage mode
- About page
- Enrolled Members page
- Stakeholders page
- Resources listing and detail pages
- FAQ page
- News listing and detail pages
- Contact page and Webform
- Map page
- Drupal editorial/admin experience where client editors work daily

## Audit Setup and Evidence Standard

### Test Matrix

Browsers:
- Chrome latest
- Safari latest
- Firefox latest

Viewport targets:
- desktop: `1440 x 900`
- tablet: `768 x 1024`
- mobile: `390 x 844`

Additional review states:
- 200 percent zoom
- 400 percent zoom for reflow-critical templates
- portrait and landscape where orientation matters
- emergency mode on and off

Representative templates:
- homepage
- emergency homepage
- content listing pages
- content detail pages
- form pages
- admin/editor screens used daily by the client

### Keyboard-only Test Flow

Use keyboard-only review for:
- primary navigation
- skip links
- sliders and carousels
- accordions and tabs
- forms and validation
- modal or overlay behavior if introduced

Primary keys:
- `Tab`
- `Shift + Tab`
- `Enter`
- `Space`
- arrow keys where components depend on them
- `Esc` for dismissible UI

### Screen Reader Spot-check Flow

Primary manual checks:
- VoiceOver with Safari on macOS
- keyboard plus spoken feedback check for menus, headings, forms, tabs, accordions, and status messages

Recommended secondary verification if available:
- NVDA with Firefox on Windows

### Tooling

Use:
- browser devtools accessibility tree checks
- browser contrast inspection tools
- keyboard-only testing
- zoom and reflow testing in-browser
- Playwright screenshots for visual evidence
- issue logs mapped to template, page, and component

### Severity and Evidence Format

Severity:
- `Critical`: blocks task completion or emergency communication
- `High`: strong barrier for a core journey or major template
- `Medium`: meaningful barrier with workaround
- `Low`: limited impact or isolated defect

Evidence for each issue:
- page URL
- template/component name
- viewport/browser used
- WCAG success criterion number
- observed behavior
- user impact
- recommended fix
- screenshot or DOM evidence where useful

## Delivery Structure

The WCAG work should run as grouped Trello cards rather than one large vague QA task.

## Card 1. WCAG 2.2 AA Audit Setup and Evidence

Purpose:
- define test scope, evidence format, representative templates, devices, browsers, and assistive-technology checks before remediation starts

Checklist:
- confirm page inventory and template coverage
- define desktop and mobile test matrix
- define keyboard-only test flow
- define screen reader spot-check flow
- define contrast and zoom tooling
- create issue severity and evidence format

## Card 2. WCAG 2.2 AA Perceivable: Text Alternatives and Media

Success criteria covered:
- 1.1.1 Non-text Content
- 1.2.1 Audio-only and Video-only (Prerecorded)
- 1.2.2 Captions (Prerecorded)
- 1.2.3 Audio Description or Media Alternative (Prerecorded)
- 1.2.4 Captions (Live)
- 1.2.5 Audio Description (Prerecorded)

Checklist:
- verify decorative versus informative image treatment
- verify alt text quality on content images and logos
- review icons, buttons, linked images, and social icons
- review any video or audio embeds for captions or alternatives
- review emergency/media content handling if rich media is added later

## Card 3. WCAG 2.2 AA Perceivable: Structure and Adaptable Content

Success criteria covered:
- 1.3.1 Info and Relationships
- 1.3.2 Meaningful Sequence
- 1.3.3 Sensory Characteristics
- 1.3.4 Orientation
- 1.3.5 Identify Input Purpose

Checklist:
- review heading hierarchy and landmark usage
- review lists, tables, cards, and accordion semantics
- review reading and tab order against visual order
- review orientation behavior on mobile and tablet
- review autocomplete/input-purpose support on forms

Implemented for this card:
- added explicit navigation labels for the primary and emergency tabbed navigation
- added descriptive titles to the public map iframes
- confirmed a single main landmark with header and footer landmarks on the main public templates
- added contact form input-purpose metadata for name and email fields using Webform autocomplete support

## Card 4. WCAG 2.2 AA Perceivable: Color, Contrast, Reflow, and Visibility

Success criteria covered:
- 1.4.1 Use of Color
- 1.4.2 Audio Control
- 1.4.3 Contrast (Minimum)
- 1.4.4 Resize Text
- 1.4.5 Images of Text
- 1.4.10 Reflow
- 1.4.11 Non-text Contrast
- 1.4.12 Text Spacing
- 1.4.13 Content on Hover or Focus

Checklist:
- review text contrast across all templates
- review non-text contrast for buttons, borders, inputs, tabs, and focus states
- review resize text up to 200 percent
- review reflow at mobile and zoomed desktop widths
- review text spacing overrides
- review tooltip, menu, and hover/focus content behavior

## Card 5. WCAG 2.2 AA Operable: Keyboard, Timing, and Seizure Safety

Success criteria covered:
- 2.1.1 Keyboard
- 2.1.2 No Keyboard Trap
- 2.1.4 Character Key Shortcuts
- 2.2.1 Timing Adjustable
- 2.2.2 Pause, Stop, Hide
- 2.3.1 Three Flashes or Below Threshold

Checklist:
- complete keyboard-only journeys for all major pages
- verify menus, sliders, accordions, tabs, and forms are keyboard operable
- verify there are no keyboard traps
- review auto-advancing or moving content for pause/stop behavior
- review flashing or motion risks

## Card 6. WCAG 2.2 AA Operable: Navigation and Focus

Success criteria covered:
- 2.4.1 Bypass Blocks
- 2.4.2 Page Titled
- 2.4.3 Focus Order
- 2.4.4 Link Purpose (In Context)
- 2.4.5 Multiple Ways
- 2.4.6 Headings and Labels
- 2.4.7 Focus Visible
- 2.4.11 Focus Not Obscured (Minimum)

Checklist:
- review skip links and repeated-block bypass patterns
- review page titles and browser titles
- review link text quality and ambiguity
- review headings and form labels
- review visible focus styling and consistency
- review fixed headers, sticky bars, and overlays for obscured focus

## Card 7. WCAG 2.2 AA Operable: Pointer, Touch, Dragging, and Targets

Success criteria covered:
- 2.5.1 Pointer Gestures
- 2.5.2 Pointer Cancellation
- 2.5.3 Label in Name
- 2.5.4 Motion Actuation
- 2.5.7 Dragging Movements
- 2.5.8 Target Size (Minimum)

Checklist:
- review click/tap interactions for alternatives to complex gestures
- review cancellation behavior on touch/pointer actions
- review button and control accessible names against visible labels
- review drag-only behavior and provide alternatives where needed
- review target sizes for buttons, links, icons, and pagination controls

## Card 8. WCAG 2.2 AA Understandable: Language, Predictability, and Help

Success criteria covered:
- 3.1.1 Language of Page
- 3.1.2 Language of Parts
- 3.2.1 On Focus
- 3.2.2 On Input
- 3.2.3 Consistent Navigation
- 3.2.4 Consistent Identification
- 3.2.6 Consistent Help

Checklist:
- confirm page language and language-switch behavior
- review components for unexpected context changes
- review repeated navigation consistency
- review repeated control naming consistency
- review availability and placement of help/contact mechanisms

## Card 9. WCAG 2.2 AA Understandable: Forms, Errors, and Authentication

Success criteria covered:
- 3.3.1 Error Identification
- 3.3.2 Labels or Instructions
- 3.3.3 Error Suggestion
- 3.3.4 Error Prevention (Legal, Financial, Data)
- 3.3.7 Redundant Entry
- 3.3.8 Accessible Authentication (Minimum)

Checklist:
- review form labels, hints, and required-state communication
- review validation errors and inline guidance
- review error suggestions and recovery paths
- review confirmation or reversal for high-risk submissions if introduced
- review redundant data entry patterns
- review authentication flow for cognitive barrier risks

## Card 10. WCAG 2.2 AA Robust: Semantics, Name/Role/Value, and Status Messages

Success criteria covered:
- 4.1.2 Name, Role, Value
- 4.1.3 Status Messages

Checklist:
- review interactive components for correct roles and states
- review tabs, accordions, dialogs, sliders, and menus
- review dynamic updates announced to assistive technology
- review status/error/success messaging behavior

## Card 11. Accessibility Remediation, Retest, and Sign-off

Purpose:
- consolidate issues found in the cards above and close the loop before client review

Checklist:
- log issues by severity and page
- fix high-priority issues first
- retest remediated items
- confirm no critical regressions on desktop and mobile
- prepare accessibility summary for client review

## Recommended Order

1. Audit setup and evidence
2. Perceivable review
3. Operable review
4. Understandable review
5. Robust review
6. Remediation and retest

## Expected Output

- Trello cards with WCAG-scoped checklists
- issue log tied to pages and templates
- prioritized remediation list
- final accessibility summary for client handoff
