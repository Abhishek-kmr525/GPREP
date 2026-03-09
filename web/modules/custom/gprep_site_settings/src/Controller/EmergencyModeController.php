<?php

namespace Drupal\gprep_site_settings\Controller;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\DependencyInjection\ContainerInterface;

class EmergencyModeController extends ControllerBase {

  public function __construct(
    protected ConfigFactoryInterface $gprepConfigFactory,
    protected RequestStack $requestStack,
  ) {}

  public static function create(ContainerInterface $container): static {
    return new static(
      $container->get('config.factory'),
      $container->get('request_stack'),
    );
  }

  public function toggle(): RedirectResponse {
    $config = $this->gprepConfigFactory->getEditable('gprep_site_settings.settings');
    $enabled = (bool) $config->get('emergency_mode');
    $config->set('emergency_mode', !$enabled)->save();
    drupal_flush_all_caches();

    $this->messenger()->addStatus(!$enabled
      ? $this->t('Emergency mode enabled. The homepage now shows the emergency layout.')
      : $this->t('Emergency mode disabled. The homepage now shows the regular layout.'));

    $request = $this->requestStack->getCurrentRequest();
    $destination = $request?->headers->get('referer') ?: '/admin/config/system/gprep-site-settings';

    return new RedirectResponse($destination);
  }

}
