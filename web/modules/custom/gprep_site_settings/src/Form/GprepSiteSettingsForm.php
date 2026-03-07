<?php

namespace Drupal\gprep_site_settings\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class GprepSiteSettingsForm extends ConfigFormBase {

  public function getFormId(): string {
    return 'gprep_site_settings_form';
  }

  protected function getEditableConfigNames(): array {
    return ['gprep_site_settings.settings'];
  }

  public function buildForm(array $form, FormStateInterface $form_state): array {
    $config = $this->config('gprep_site_settings.settings');

    $form['contact'] = [
      '#type' => 'details',
      '#title' => $this->t('Contact details'),
      '#open' => TRUE,
    ];
    $form['contact']['phone'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Phone display text'),
      '#default_value' => $config->get('phone'),
    ];
    $form['contact']['phone_link'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Phone link value'),
      '#description' => $this->t('Digits only, used in tel: links.'),
      '#default_value' => $config->get('phone_link'),
    ];
    $form['contact']['email'] = [
      '#type' => 'email',
      '#title' => $this->t('Email'),
      '#default_value' => $config->get('email'),
    ];
    $form['contact']['address'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Office address'),
      '#default_value' => $config->get('address'),
      '#rows' => 3,
    ];

    $form['emergency'] = [
      '#type' => 'details',
      '#title' => $this->t('Emergency details'),
      '#open' => TRUE,
    ];
    $form['emergency']['emergency_label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Emergency label'),
      '#default_value' => $config->get('emergency_label'),
    ];
    $form['emergency']['emergency_phone'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Emergency phone display text'),
      '#default_value' => $config->get('emergency_phone'),
    ];
    $form['emergency']['emergency_phone_link'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Emergency phone link value'),
      '#default_value' => $config->get('emergency_phone_link'),
    ];

    $form['social'] = [
      '#type' => 'details',
      '#title' => $this->t('Social links'),
      '#open' => TRUE,
    ];
    $form['social']['facebook_url'] = [
      '#type' => 'url',
      '#title' => $this->t('Facebook URL'),
      '#default_value' => $config->get('facebook_url'),
    ];
    $form['social']['twitter_url'] = [
      '#type' => 'url',
      '#title' => $this->t('X URL'),
      '#default_value' => $config->get('twitter_url'),
    ];

    $form['footer'] = [
      '#type' => 'details',
      '#title' => $this->t('Footer settings'),
      '#open' => TRUE,
    ];
    $form['footer']['footer_copyright'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Footer copyright'),
      '#default_value' => $config->get('footer_copyright'),
    ];

    $form['misc'] = [
      '#type' => 'details',
      '#title' => $this->t('Miscellaneous'),
      '#open' => TRUE,
    ];
    $form['misc']['language_label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Language label'),
      '#default_value' => $config->get('language_label'),
    ];
    $form['misc']['map_embed_url'] = [
      '#type' => 'url',
      '#title' => $this->t('Map embed URL'),
      '#default_value' => $config->get('map_embed_url'),
    ];

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state): void {
    $this->configFactory->getEditable('gprep_site_settings.settings')
      ->set('phone', $form_state->getValue('phone'))
      ->set('phone_link', $form_state->getValue('phone_link'))
      ->set('email', $form_state->getValue('email'))
      ->set('address', $form_state->getValue('address'))
      ->set('emergency_label', $form_state->getValue('emergency_label'))
      ->set('emergency_phone', $form_state->getValue('emergency_phone'))
      ->set('emergency_phone_link', $form_state->getValue('emergency_phone_link'))
      ->set('facebook_url', $form_state->getValue('facebook_url'))
      ->set('twitter_url', $form_state->getValue('twitter_url'))
      ->set('footer_copyright', $form_state->getValue('footer_copyright'))
      ->set('language_label', $form_state->getValue('language_label'))
      ->set('map_embed_url', $form_state->getValue('map_embed_url'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
