# Launch And Handoff Notes

## Current Delivery State

- Drupal 11 site is running locally for development
- GitHub repository is the source of versioned code
- Ubuntu server is available for deployment and validation
- key editorial flows are now connected to Drupal admin

## Handoff Package Contents

- user manual
- admin UX audit and structure notes
- Trello board with feature status and checklist history
- GitHub commit history
- deployment-ready server environment

## Pre-Launch Checklist

### Content
- review homepage sections
- review About, Enrolled Members, Stakeholders, Resources, FAQ, News, Contact, and Map pages
- confirm menu labels and footer links
- confirm contact details and map URL

### Emergency
- confirm emergency mode toggle works
- confirm emergency homepage content is current
- confirm latest news and ticker items are correct
- review mobile emergency homepage before activation

### Editorial
- confirm the correct user roles are assigned
- confirm content editors can publish content
- confirm site managers can access site settings and emergency controls
- confirm Webform submissions can be viewed and exported

### Technical
- clear Drupal cache before release
- confirm homepage, inner pages, and admin login return expected responses
- confirm server and GitHub are in sync

## Launch-Day Sequence

1. Freeze major content structure changes.
2. Review final published content.
3. Push final approved code to GitHub.
4. Deploy the same approved code to the server.
5. Rebuild Drupal cache.
6. Run a public smoke test.
7. Confirm emergency toggle and News publishing still work.

## Handoff Notes For Client

- editors should start from `GPREP Admin > Dashboard`
- emergency operations should be handled by `GPREP Site Manager`
- day-to-day publishing should be handled by `GPREP Content Editor`
- avoid editing Views or theme code during normal content operations

## Open Risks To Review Before Final Sign-Off

- final QA and accessibility review still needs a dedicated pass
- some About page body content remains theme-managed
- final domain and SSL handoff steps should be confirmed before production go-live
