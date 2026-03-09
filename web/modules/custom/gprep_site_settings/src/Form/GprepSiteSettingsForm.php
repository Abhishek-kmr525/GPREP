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
      '#description' => $this->t('Use this area to control the emergency homepage and the content shown when emergency mode is active.'),
    ];
    $form['emergency']['emergency_mode'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable emergency homepage mode'),
      '#description' => $this->t('When enabled, the public homepage switches from the regular homepage to the emergency homepage layout.'),
      '#default_value' => $config->get('emergency_mode'),
    ];
    $form['emergency']['emergency_contact'] = [
      '#type' => 'details',
      '#title' => $this->t('Emergency contact bar'),
      '#open' => TRUE,
    ];
    $form['emergency']['emergency_contact']['emergency_label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Emergency label'),
      '#description' => $this->t('Small label shown above the emergency phone number in the header area.'),
      '#default_value' => $config->get('emergency_label'),
    ];
    $form['emergency']['emergency_contact']['emergency_phone'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Emergency phone display text'),
      '#description' => $this->t('Visible phone text, for example 9-1-1.'),
      '#default_value' => $config->get('emergency_phone'),
    ];
    $form['emergency']['emergency_contact']['emergency_phone_link'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Emergency phone link value'),
      '#description' => $this->t('Digits only, used in the tel: link.'),
      '#default_value' => $config->get('emergency_phone_link'),
    ];
    $form['emergency']['incident_panel'] = [
      '#type' => 'details',
      '#title' => $this->t('Incident panel'),
      '#open' => TRUE,
    ];
    $form['emergency']['incident_panel']['emergency_incident_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Incident title'),
      '#description' => $this->t('Main heading shown in the emergency incident details panel.'),
      '#default_value' => $config->get('emergency_incident_title'),
    ];
    $form['emergency']['incident_panel']['emergency_incident_body'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Incident summary'),
      '#description' => $this->t('Shown in the main incident details panel on the emergency homepage.'),
      '#default_value' => $config->get('emergency_incident_body'),
      '#rows' => 4,
    ];
    $form['emergency']['incident_panel']['emergency_incident_button_text'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Incident button text'),
      '#description' => $this->t('Optional call-to-action label for the incident panel button.'),
      '#default_value' => $config->get('emergency_incident_button_text'),
    ];
    $form['emergency']['incident_panel']['emergency_incident_button_link'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Incident button URL'),
      '#description' => $this->t('Use an internal path like /news or a full external URL.'),
      '#default_value' => $config->get('emergency_incident_button_link'),
    ];
    $form['emergency']['alert_panel'] = [
      '#type' => 'details',
      '#title' => $this->t('Alert panel'),
      '#open' => TRUE,
    ];
    $form['emergency']['alert_panel']['emergency_alert_intro'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Alert intro text'),
      '#description' => $this->t('Introductory text shown above the alert box.'),
      '#default_value' => $config->get('emergency_alert_intro'),
      '#rows' => 3,
    ];
    $form['emergency']['alert_panel']['emergency_alert_feed_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Alert feed box title'),
      '#default_value' => $config->get('emergency_alert_feed_title'),
    ];
    $form['emergency']['alert_panel']['emergency_alert_feed_message'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Alert feed box message'),
      '#default_value' => $config->get('emergency_alert_feed_message'),
      '#rows' => 2,
    ];
    $form['emergency']['alert_panel']['emergency_alert_type'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Active alert type'),
      '#description' => $this->t('For example Evacuation Order or Evacuation Alert.'),
      '#default_value' => $config->get('emergency_alert_type'),
    ];
    $form['emergency']['alert_panel']['emergency_alert_area'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Active alert affected area'),
      '#default_value' => $config->get('emergency_alert_area'),
    ];
    $form['emergency']['alert_panel']['emergency_alert_datetime'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Active alert date and time'),
      '#description' => $this->t('Free-text display value shown to visitors.'),
      '#default_value' => $config->get('emergency_alert_datetime'),
    ];
    $form['emergency']['alert_panel']['emergency_alert_instructions'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Active alert instructions'),
      '#default_value' => $config->get('emergency_alert_instructions'),
      '#rows' => 3,
    ];
    $form['emergency']['donations_panel'] = [
      '#type' => 'details',
      '#title' => $this->t('Donations tab'),
      '#open' => TRUE,
    ];
    $form['emergency']['donations_panel']['emergency_donations_heading'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Donations heading'),
      '#default_value' => $config->get('emergency_donations_heading'),
    ];
    $form['emergency']['donations_panel']['emergency_donations_items'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Donations list'),
      '#description' => $this->t('One item per line using the format: Title | Button label | URL'),
      '#default_value' => $config->get('emergency_donations_items'),
      '#rows' => 6,
    ];
    $form['emergency']['temporary_access_panel'] = [
      '#type' => 'details',
      '#title' => $this->t('Temporary access tab'),
      '#open' => TRUE,
    ];
    $form['emergency']['temporary_access_panel']['emergency_temporary_access_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Temporary access title'),
      '#default_value' => $config->get('emergency_temporary_access_title'),
    ];
    $form['emergency']['temporary_access_panel']['emergency_temporary_access_body'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Temporary access body'),
      '#default_value' => $config->get('emergency_temporary_access_body'),
      '#rows' => 4,
    ];
    $form['emergency']['temporary_access_panel']['emergency_temporary_access_button_text'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Temporary access button text'),
      '#default_value' => $config->get('emergency_temporary_access_button_text'),
    ];
    $form['emergency']['temporary_access_panel']['emergency_temporary_access_button_link'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Temporary access button URL'),
      '#description' => $this->t('Use an internal path like /contact or a full external URL.'),
      '#default_value' => $config->get('emergency_temporary_access_button_link'),
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
      ->set('emergency_mode', (bool) $form_state->getValue('emergency_mode'))
      ->set('emergency_label', $form_state->getValue('emergency_label'))
      ->set('emergency_phone', $form_state->getValue('emergency_phone'))
      ->set('emergency_phone_link', $form_state->getValue('emergency_phone_link'))
      ->set('emergency_incident_title', $form_state->getValue('emergency_incident_title'))
      ->set('emergency_incident_body', $form_state->getValue('emergency_incident_body'))
      ->set('emergency_incident_button_text', $form_state->getValue('emergency_incident_button_text'))
      ->set('emergency_incident_button_link', $form_state->getValue('emergency_incident_button_link'))
      ->set('emergency_alert_intro', $form_state->getValue('emergency_alert_intro'))
      ->set('emergency_alert_feed_title', $form_state->getValue('emergency_alert_feed_title'))
      ->set('emergency_alert_feed_message', $form_state->getValue('emergency_alert_feed_message'))
      ->set('emergency_alert_type', $form_state->getValue('emergency_alert_type'))
      ->set('emergency_alert_area', $form_state->getValue('emergency_alert_area'))
      ->set('emergency_alert_datetime', $form_state->getValue('emergency_alert_datetime'))
      ->set('emergency_alert_instructions', $form_state->getValue('emergency_alert_instructions'))
      ->set('emergency_donations_heading', $form_state->getValue('emergency_donations_heading'))
      ->set('emergency_donations_items', $form_state->getValue('emergency_donations_items'))
      ->set('emergency_temporary_access_title', $form_state->getValue('emergency_temporary_access_title'))
      ->set('emergency_temporary_access_body', $form_state->getValue('emergency_temporary_access_body'))
      ->set('emergency_temporary_access_button_text', $form_state->getValue('emergency_temporary_access_button_text'))
      ->set('emergency_temporary_access_button_link', $form_state->getValue('emergency_temporary_access_button_link'))
      ->set('facebook_url', $form_state->getValue('facebook_url'))
      ->set('twitter_url', $form_state->getValue('twitter_url'))
      ->set('footer_copyright', $form_state->getValue('footer_copyright'))
      ->set('language_label', $form_state->getValue('language_label'))
      ->set('map_embed_url', $form_state->getValue('map_embed_url'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
