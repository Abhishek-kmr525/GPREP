# Website Content User Manual

## Purpose

This document explains how the client can manage the editable homepage sections and key inner pages in Drupal without changing code.

Site URLs:
- Frontend: `http://localhost:8080/`
- Admin login: `http://localhost:8080/user/login`
- Admin dashboard: `http://localhost:8080/admin`

## What Is Editable From Admin

The following homepage sections are now backend-managed:
- Top `Current Emergency` ticker
- Hero banner slider
- `About Us` section below the hero banner
- `Enrolled Members` section
- `Stakeholders` section
- `Partner Municipalities` section
- `Resources` section
- `FAQ` section
- `News` section
- Right-side `Emergency Updates` panel
- Header menu
- Footer menus
- Header/footer contact details and social links

The following inner pages are also now connected:
- `Enrolled Members` page
- `Contact Us` page
- `Map` page

## 1. Current Emergency Ticker

This is the red strip at the top of the homepage that shows active emergency messages.

Admin path:
- `http://localhost:8080/node/add/emergency_banner_item`

To add a new ticker item:
1. Log in to Drupal admin.
2. Open `Content`.
3. Click `Add content`.
4. Choose `Emergency Banner Item`.
5. Enter the title.
6. Set `Display Order`.
7. Save.

To edit or delete:
1. Go to `Content`.
2. Filter by content type `Emergency Banner Item`.
3. Use `Edit` or `Delete`.

Field notes:
- `Title`: message shown in the ticker
- `Display Order`: lower number shows first

## 2. Hero Banner Slider

This is the large homepage banner with image, title, description, and button.

Admin path:
- `http://localhost:8080/node/add/hero_slide`

To add a new slide:
1. Log in to Drupal admin.
2. Open `Content`.
3. Click `Add content`.
4. Choose `Hero Slide`.
5. Fill in the fields.
6. Save.

To edit or delete:
1. Go to `Content`.
2. Filter by content type `Hero Slide`.
3. Use `Edit` or `Delete`.

Field notes:
- `Title`: main banner heading
- `Slide Description`: banner text under the heading
- `Slide Image`: background image for the slide
- `Button Text`: CTA text such as `Read More`
- `Button Link`: CTA destination
- `Display Order`: lower number shows first

## 3. Emergency Updates Panel

This is the right-side updates list on the homepage.

Admin path:
- `http://localhost:8080/node/add/emergency_update`

To add a new update:
1. Log in to Drupal admin.
2. Open `Content`.
3. Click `Add content`.
4. Choose `Emergency Update`.
5. Fill in the update title and time fields.
6. Save.

To edit or delete:
1. Go to `Content`.
2. Filter by content type `Emergency Update`.
3. Use `Edit` or `Delete`.

Field notes:
- `Title`: update headline shown in the panel
- `Update Time`: exact time text such as `11:15 AM`
- `Relative Time`: relative text such as `30 min ago`
- `Update Link`: destination when clicked
- `Display Order`: lower number shows first

## 4. About Us Section

This is the homepage content block shown below the hero banner.

Admin path:
- `http://localhost:8080/node/add/homepage_about_section`

To edit the existing section:
1. Log in to Drupal admin.
2. Open `Content`.
3. Filter by content type `Homepage About Section`.
4. Click `Edit`.
5. Update the image, headings, text, or button.
6. Save.

Recommended usage:
- keep only one published `Homepage About Section`
- if a second one is created, the first published one will be used on the homepage

Field notes:
- `Title`: main heading such as `What is GPREP`
- `Section Tagline`: small label above the heading such as `About Us`
- `Primary Body`: first text block
- `Secondary Heading`: second heading such as `What We Do`
- `Secondary Body`: second text block
- `Section Image`: left-side image
- `Button Text`: CTA label
- `Button Link`: CTA destination

## 5. Partner Municipalities Section

This section shows the partner municipality logos on the homepage.

Admin paths:
- section heading: `http://localhost:8080/node/add/homepage_partner_section`
- partner items: `http://localhost:8080/node/add/partner_municipality`

To edit the section heading:
1. Open `Content`.
2. Filter by `Homepage Partner Section`.
3. Edit the published item.

To add or edit partner logos:
1. Open `Content`.
2. Filter by `Partner Municipality`.
3. Add, edit, reorder, or unpublish items.

Field notes for `Partner Municipality`:
- `Title`: partner name
- `Logo Image`: municipality logo
- `Partner URL`: website link
- `Display Order`: controls the display sequence

## 6. Enrolled Members Section

This section appears below `About Us` on the homepage.

Admin paths:
- section heading/intro/button: `http://localhost:8080/node/add/home_enrolled_section`
- member cards: `http://localhost:8080/node/add/enrolled_member`

To edit the section intro:
1. Open `Content`.
2. Filter by `Homepage Enrolled Members Section`.
3. Edit the published item.

To add or edit member cards:
1. Open `Content`.
2. Filter by `Enrolled Member`.
3. Add, edit, reorder, or unpublish items.

Field notes for `Enrolled Member`:
- `Title`: member name
- `Designation`: role text under the name
- `Profile Image`: card image
- `Display Order`: controls card order

## 7. Stakeholders Section

This section appears below `Enrolled Members` on the homepage.

Admin paths:
- section heading/intro/button: `http://localhost:8080/node/add/home_stakeholder_section`
- stakeholder cards: `http://localhost:8080/node/add/stakeholder_item`

To edit the section intro:
1. Open `Content`.
2. Filter by `Homepage Stakeholders Section`.
3. Edit the published item.

To add or edit stakeholder cards:
1. Open `Content`.
2. Filter by `Stakeholder Item`.
3. Add, edit, reorder, or unpublish items.

Field notes for `Stakeholder Item`:
- `Title`: person name
- `Designation`: role text
- `Profile Image`: card image
- `Display Order`: controls card order

## 8. Resources Section

This section shows the homepage resource cards.

Admin paths:
- section heading/button: `http://localhost:8080/node/add/homepage_resources_section`
- resource cards: `http://localhost:8080/node/add/resource_item`

To edit the section heading or button:
1. Open `Content`.
2. Filter by `Homepage Resources Section`.
3. Edit the published item.

To add or edit resource cards:
1. Open `Content`.
2. Filter by `Resource Item`.
3. Add, edit, reorder, or unpublish items.

Field notes for `Resource Item`:
- `Title`: card heading
- `Card Image`: top banner image
- `Icon Image`: icon used on the card
- `Resource Summary`: short descriptive text
- `Button Text`: CTA label
- `Button Link`: CTA destination
- `Display Order`: controls card order

## 9. FAQ Section

This section shows the homepage FAQ intro and accordion list.

Admin paths:
- FAQ section intro: `http://localhost:8080/node/add/homepage_faq_section`
- FAQ items: `http://localhost:8080/node/add/faq_item`

To edit the left-side FAQ intro block:
1. Open `Content`.
2. Filter by `Homepage FAQ Section`.
3. Edit the published item.

To add or edit FAQ entries:
1. Open `Content`.
2. Filter by `FAQ Item`.
3. Add, edit, reorder, or unpublish items.

Field notes for `Homepage FAQ Section`:
- `Title`: main heading
- `Section Tagline`: small label above the heading
- `Primary Body`: short intro paragraph
- `Button Text`: CTA label
- `Button Link`: CTA destination
- `Secondary Heading`: heading above the accordion list

Field notes for `FAQ Item`:
- `Title`: question
- `Answer Body`: expanded answer text
- `Display Order`: controls question order

## 10. News Section

This section appears after the homepage app section.

Admin paths:
- section heading: `http://localhost:8080/node/add/home_news_section`
- news cards: `http://localhost:8080/node/add/news_item`
- incident types: `http://localhost:8080/node/add/incident_type`

To edit the section heading:
1. Open `Content`.
2. Filter by `Homepage News Section`.
3. Edit the published item.

To add or edit news cards:
1. Open `Content`.
2. Filter by `News Item`.
3. Add, edit, reorder, or unpublish items.

To add or edit incident types:
1. Open `Content`.
2. Filter by `Incident Type`.
3. Add, edit, or unpublish incident options.

Field notes for `News Item`:
- `Title`: headline
- `Display Date`: optional short date helper field
- `Display Time`: time shown on the single news page
- `Card Image`: news image
- `Summary`: short card text
- `News Detail Content`: full article content for the single news page
- `Incident`: selected incident type for filtering and sidebar counts
- `Source URL`: original source link
- `Display Order`: optional ordering helper field

## 10A. News Module And News Pages

Public pages:
- `http://localhost:8080/news`
- example single news page: `http://localhost:8080/news/update-31-gprep-deactivated-evacuation-alert-remains-in-place`

Current behavior:
- the homepage `News` section is dynamic
- the `/news` page is dynamic
- each `News Item` has its own single news page
- incident types are managed from Drupal admin and reused for filtering/counts
- the newest official GPREP news items have been imported into Drupal

What the client can do:
- add news
- edit news
- unpublish or delete news
- add new incident types
- rename incident types
- select an incident type while creating/editing a news item
- update the imported content later from admin

Important implementation note:
- for image safety/compliance, the current news images use the approved local design assets, not copied Google images

## 11. Theme-Managed Homepage Sections

The following sections are currently implemented in the theme, not through Drupal content entries:
- app section
- `24/7 Available`
- `Who is GPREP`

These can be converted to backend-managed content later if needed.

## 12. Header And Footer Menus

These are editable from Drupal menu management.

Admin paths:
- Main menu: `http://localhost:8080/admin/structure/menu/manage/main`
- Footer resources: `http://localhost:8080/admin/structure/menu/manage/footer-resources`
- Footer quick links: `http://localhost:8080/admin/structure/menu/manage/footer-quick-links`

The client can:
- add menu items
- edit labels
- change links
- reorder menu items
- delete old items

## 13. Header/Footer Contact Details

These are editable from the custom site settings screen.

Admin path:
- `http://localhost:8080/admin/config/system/gprep-site-settings`

The client can update:
- phone number
- office address
- email address
- emergency contact label
- emergency contact number
- map embed URL
- Facebook URL
- Twitter/X URL
- copyright text

## 14. Enrolled Members Inner Page

Public page:
- `http://localhost:8080/enrolled-members`

This page is connected to the same `Enrolled Member` content used on the homepage. If the client adds, edits, reorders, or removes members in Drupal, both the homepage section and the full page update from the same source.

Homepage CTA:
- the `View All Enrolled Members` button now links to this page

Admin paths:
- section intro/button: `http://localhost:8080/node/add/home_enrolled_section`
- member cards: `http://localhost:8080/node/add/enrolled_member`

What the client can manage here:
- section heading and intro text
- CTA button label and link
- member name
- member designation
- member image
- card order

## 15. Contact Us Page

Public page:
- `http://localhost:8080/contact`

This page pulls company contact details from the global site settings and uses a Drupal `Webform` for the enquiry form.

Global details used on the page:
- office address
- phone number
- email address
- emergency call label/number
- map embed URL

Admin paths:
- global site settings: `http://localhost:8080/admin/config/system/gprep-site-settings`
- form builder: `http://localhost:8080/admin/structure/webform/manage/contact_us`
- submissions list: `http://localhost:8080/admin/structure/webform/manage/contact_us/results/submissions`

What the client can do:
1. Update address, phone, email, emergency number, and map URL from `Site Settings`.
2. Edit the contact form fields from the `Webform` builder.
3. Add or remove fields as needed.
4. Review all submitted responses from the submissions screen.
5. Export submissions if needed from the `Webform` results area.

Important note:
- this works similarly to WordPress form plugins in that the admin can both customize fields and see the full list of submitted entries in the backend

## 16. Map Page

Public page:
- `http://localhost:8080/map`

This page is intentionally minimal. It does not show the page banner or breadcrumb section. It directly shows the map and then the footer.

Admin path:
- `http://localhost:8080/admin/config/system/gprep-site-settings`

What controls this page:
- `Map Embed URL` from the global site settings screen

If the client updates the map embed URL, the map page updates automatically.

## 17. Resources Module And Individual Resource Pages

Public page:
- `http://localhost:8080/resources`

Example individual resource page:
- `http://localhost:8080/evacuee_rights_and_gesponsibilities`

Yes, this is backend-managed. In Drupal terms, this is currently handled through the `Resource Item` content type. That means the client can add, edit, unpublish, reorder, or delete resource entries from admin.

Admin paths:
- resources section heading/button: `http://localhost:8080/node/add/homepage_resources_section`
- individual resource items: `http://localhost:8080/node/add/resource_item`

What the client can manage for each resource:
- title
- card image
- icon image
- card summary
- button text
- display order
- long-form detail content for the individual page

Current behavior:
- the homepage `Resources` section is dynamic
- the `/resources` page is dynamic
- each resource item has its own individual page in the approved detail-page format
- placeholder detail content is currently added and can be replaced later from Drupal admin

## 18. FAQ Module And FAQ Page

Public page:
- `http://localhost:8080/faq`

Yes, this is backend-managed through the existing FAQ content model.

Admin paths:
- FAQ section intro: `http://localhost:8080/node/add/homepage_faq_section`
- individual FAQ items: `http://localhost:8080/node/add/faq_item`

What the client can do:
- add FAQ items
- edit FAQ items
- delete or unpublish FAQ items
- reorder FAQ items
- update the homepage FAQ intro block

Current behavior:
- the homepage FAQ section is dynamic
- the `/faq` page is dynamic
- the same FAQ items are reused for homepage and FAQ page

## Publishing Notes

- Any content can be unpublished if it should not appear on the website.
- Use `Display Order` to control the sequence instead of deleting and recreating items.
- For homepage items, keep titles short so the design remains clean.
- Banner images should be optimized before upload for better performance.

## Recommended Client Workflow

When a new emergency happens:
1. Update the `Current Emergency` ticker items.
2. Update or add a `Hero Slide`.
3. Review the homepage `About Us` section only if organization messaging needs to change.
4. Review `Enrolled Members`, `Stakeholders`, `Partner Municipalities`, `Resources`, `FAQ`, and `News` sections if homepage content needs to change.
5. Add new `Emergency Update` items in order.
6. Review menu links and contact details only if needed.

## Current Scope Note

This manual covers the homepage sections and the currently connected inner pages. Additional pages and modules should get their own user-manual sections as they are implemented.
