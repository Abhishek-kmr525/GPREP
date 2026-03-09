<?php

namespace Drupal\gprep_homepage_manager\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Routing\TrustedRedirectResponse;
use Drupal\Core\Url;
use Drupal\node\NodeInterface;

class EditorialDashboardController extends ControllerBase {

  public function build(): array {
    $metrics = [
      $this->metricItem('News', $this->countPublishedNodes('news_item'), 'internal:/admin/gprep/news'),
      $this->metricItem('Resources', $this->countPublishedNodes('resource_item'), 'internal:/admin/gprep/resources'),
      $this->metricItem('FAQs', $this->countPublishedNodes('faq_item'), 'internal:/admin/gprep/faq'),
      $this->metricItem('Incidents', $this->countPublishedNodes('incident_type'), 'internal:/admin/content?title=&type=incident_type&status=All'),
    ];

    $sections = [
      [
        'title' => $this->t('Daily Publishing'),
        'links' => [
          $this->linkItem('Add News', 'internal:/node/add/news_item', 'Create a news article or emergency update.'),
          $this->linkItem('All News', 'internal:/admin/gprep/news', 'Review, edit, or unpublish existing news items.'),
          $this->linkItem('Add FAQ', 'internal:/node/add/faq_item', 'Create a new FAQ entry.'),
          $this->linkItem('All FAQs', 'internal:/admin/gprep/faq', 'Review and edit the FAQ list.'),
          $this->linkItem('Add Resource', 'internal:/node/add/resource_item', 'Create a new resource page item.'),
          $this->linkItem('All Resources', 'internal:/admin/gprep/resources', 'Review and edit all resource pages.'),
        ],
      ],
      [
        'title' => $this->t('Homepage'),
        'links' => [
          $this->linkItem('Homepage Blocks', 'internal:/admin/structure/block', 'Edit the App, CTA, and Who is GPREP sections.'),
          $this->linkItem('Homepage Views', 'internal:/admin/structure/views', 'Manage repeatable homepage sections powered by Views.'),
          $this->linkItem('Hero Slide', 'internal:/node/add/hero_slide', 'Add a new homepage hero slide.'),
          $this->linkItem('Emergency Banner', 'internal:/node/add/emergency_banner_item', 'Add an emergency ticker item.'),
          $this->linkItem('Homepage Content', 'internal:/admin/content', 'Search homepage content types from the full content list.'),
        ],
      ],
      [
        'title' => $this->t('Emergency'),
        'links' => [
          $this->linkItem('Emergency Settings', 'internal:/admin/config/system/gprep-site-settings', 'Turn emergency mode on or off and manage emergency page content.'),
          $this->linkItem('Add Incident Type', 'internal:/node/add/incident_type', 'Create a new incident option used by news filtering.'),
          $this->linkItem('All Incident Types', 'internal:/admin/content?title=&type=incident_type&status=All', 'Review and edit the current incident labels.'),
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
          $this->linkItem('Site Settings', 'internal:/admin/config/system/gprep-site-settings', 'Update phone, email, map, and emergency settings.'),
        ],
      ],
    ];

    $build = [
      '#type' => 'container',
      '#attributes' => ['class' => ['gprep-editorial-dashboard']],
      '#attached' => [
        'library' => ['gprep_homepage_manager/editorial-dashboard'],
      ],
      'hero' => [
        '#type' => 'container',
        '#attributes' => ['class' => ['gprep-editorial-hero']],
        'eyebrow' => ['#markup' => '<span class="gprep-editorial-eyebrow">GPREP Admin</span>'],
        'title' => ['#markup' => '<h1>Editorial Dashboard</h1>'],
        'copy' => ['#markup' => '<p>Use this dashboard for the main daily tasks. For quick searching, use the Gin toolbar search at the top of the admin panel.</p>'],
      ],
      'metrics' => [
        '#type' => 'container',
        '#attributes' => ['class' => ['gprep-editorial-metrics']],
      ],
    ];

    foreach ($metrics as $index => $metric) {
      $build['metrics']['metric_' . $index] = [
        '#markup' => '<a class="gprep-editorial-metric" href="' . $metric['url'] . '"><span class="gprep-editorial-metric__value">' . $metric['value'] . '</span><span class="gprep-editorial-metric__label">' . $metric['label'] . '</span></a>',
      ];
    }

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

  public function faqRedirect(): TrustedRedirectResponse {
    return new TrustedRedirectResponse(Url::fromUri('internal:/admin/content?title=&type=faq_item&status=All')->toString());
  }

  public function resourceRedirect(): TrustedRedirectResponse {
    return new TrustedRedirectResponse(Url::fromUri('internal:/admin/content?title=&type=resource_item&status=All')->toString());
  }

  private function linkItem(string $title, string $uri, string $description): array {
    return [
      'title' => $title,
      'url' => Url::fromUri($uri)->toString(),
      'description' => $description,
    ];
  }

  private function metricItem(string $label, int $value, string $uri): array {
    return [
      'label' => $label,
      'value' => (string) $value,
      'url' => Url::fromUri($uri)->toString(),
    ];
  }

  private function countPublishedNodes(string $bundle): int {
    return (int) $this->entityTypeManager()
      ->getStorage('node')
      ->getQuery()
      ->accessCheck(TRUE)
      ->condition('type', $bundle)
      ->condition('status', NodeInterface::PUBLISHED)
      ->count()
      ->execute();
  }

}
