<?php

namespace Drupal\gprep_homepage_manager\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Routing\TrustedRedirectResponse;
use Drupal\Core\Url;

class EditorialDashboardController extends ControllerBase {

  public function build(): array {
    $sections = [
      [
        'title' => $this->t('Content'),
        'links' => [
          $this->linkItem('Add News', 'internal:/node/add/news_item', 'Create a news article or emergency update.'),
          $this->linkItem('All News', 'internal:/admin/content?title=&type=news_item&status=All', 'Review, edit, or unpublish existing news items.'),
          $this->linkItem('Add FAQ', 'internal:/node/add/faq_item', 'Create a new FAQ item.'),
          $this->linkItem('Add Resource', 'internal:/node/add/resource_item', 'Create a new resource page item.'),
          $this->linkItem('Content List', 'internal:/admin/content', 'Search and manage all website content.'),
        ],
      ],
      [
        'title' => $this->t('Homepage'),
        'links' => [
          $this->linkItem('Homepage Views', 'internal:/admin/structure/views', 'Manage repeatable homepage sections powered by Views.'),
          $this->linkItem('Homepage Blocks', 'internal:/admin/structure/block', 'Place and edit static homepage blocks.'),
          $this->linkItem('Hero Slide', 'internal:/node/add/hero_slide', 'Add a new homepage hero slide.'),
          $this->linkItem('Emergency Banner', 'internal:/node/add/emergency_banner_item', 'Add an emergency ticker item.'),
        ],
      ],
      [
        'title' => $this->t('Emergency'),
        'links' => [
          $this->linkItem('Emergency Settings', 'internal:/admin/config/system/gprep-site-settings', 'Turn emergency mode on or off and manage emergency page content.'),
          $this->linkItem('Incident Types', 'internal:/node/add/incident_type', 'Add or manage incident labels used by news.'),
          $this->linkItem('Emergency Homepage', 'internal:/', 'Review the public homepage output.'),
        ],
      ],
      [
        'title' => $this->t('Structure'),
        'links' => [
          $this->linkItem('Menus', 'internal:/admin/structure/menu', 'Manage main navigation and footer links.'),
          $this->linkItem('Views', 'internal:/admin/structure/views', 'Manage dynamic listing logic and outputs.'),
          $this->linkItem('Block Layout', 'internal:/admin/structure/block', 'Manage block placement and regions.'),
          $this->linkItem('Webforms', 'internal:/admin/structure/webform', 'Manage contact forms and submissions.'),
        ],
      ],
    ];

    $build = [
      '#type' => 'container',
      '#attributes' => ['class' => ['gprep-editorial-dashboard']],
      '#attached' => [
        'library' => ['gprep_homepage_manager/editorial-dashboard'],
      ],
    ];

    foreach ($sections as $delta => $section) {
      $section_build = [
        '#type' => 'container',
        '#attributes' => ['class' => ['gprep-editorial-section']],
        'title' => [
          '#markup' => '<h2>' . $section['title'] . '</h2>',
        ],
        'links' => [
          '#type' => 'container',
          '#attributes' => ['class' => ['gprep-editorial-links']],
        ],
      ];

      foreach ($section['links'] as $index => $link) {
        $section_build['links']['link_' . $index] = [
          '#markup' => '<a class="gprep-editorial-link" href="' . $link['url'] . '"><strong>' . $link['title'] . '</strong><span>' . $link['description'] . '</span></a>',
        ];
      }

      $build['section_' . $delta] = $section_build;
    }

    return $build;
  }

  public function newsRedirect(): TrustedRedirectResponse {
    return new TrustedRedirectResponse(Url::fromUri('internal:/admin/content?title=&type=news_item&status=All')->toString());
  }

  private function linkItem(string $title, string $uri, string $description): array {
    return [
      'title' => $title,
      'url' => Url::fromUri($uri)->toString(),
      'description' => $description,
    ];
  }

}
