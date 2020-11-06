<?php
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is:  vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
 ********************************************************************************/

$mod_strings = array(
	// Translations for JS (please use the prefix JSLBL in key)
	'JSLBL_Saving_And_Verifying' => 'Saving & Verifying',
	'JSLBL_PASSWORD_CANNOT_BE_EMPTY'=>'Password cannot be empty',
	'JSLBL_SERVERNAME_CANNOT_BE_EMPTY'=>'Server Name cannot be empty',
	'JSLBL_USERNAME_CANNOT_BE_EMPTY'=>'User Name cannot be empty',
	'JSLBL_ERROR' => 'Error',

	// General translations
	'SUCCESSFUL_REGISTRATION_TITLE' => 'Authentification Correct',
	'SUCCESSFUL_REGISTRATION_MESSAGE' => 'You have correctly established authentification credentials with %s. You can now start using the functionality.',
	'UNSUCCESSFUL_REGISTRATION_TITLE' => 'Authentification Incorrect',
	'UNSUCCESSFUL_REGISTRATION_MESSAGE' => 'You have NOT established authentification credentials with %s. You will have to repeat the process if you want to start using the functionality.',
	'IntegrationAuthorizationClick' => 'Click here to establish %s Authorization',
	'HubSpot Activation' => 'HubSpot Activation',
	'hubspot_active' => 'Integration Active',
	'hubspot_mssync' => 'Master/Slave Sync Active',
	'hubspot_clientId' => 'HubSpot Client ID',
	'hubspot_oauthclientId' => 'oAuth Client ID',
	'hubspot_clientSecret' => 'Client API Key or oAuth Secret',
	'hubspot_apiurl' => 'API URL',
	'hubspot_pollFrequency' => 'HubSpot Poll Frequency',
	'hubspot_relateDealWith' => 'Related Deals with',
	'GContacts Activation' => 'Google Contacts Activation',
	'_active' => 'Integration Active',
	'_apiurl' => 'API URL',
	'_clientId' => 'Client ID',
	'_clientSecret' => 'Client API Key',
	'2FA Activation' => 'Two Factor Authentication Activation',
	'GoTo2FAActivation' => 'Two Factor Activation',
	'2FA Secret Code' => '2FA Secret Code',
	'Available Integrations' => 'Available Integrations',
	'Zendesk Activation' => 'Zendesk Activation',
	'zendesk_active' => 'Integration Active',
	'zendesk_apiurl' => 'API Domain',
	'zendesk_accessCode' => 'Zendesk Access Token',
	'zendesk_username' => 'Zendesk User Name',
	'Whatsapp Activation' => 'Whatsapp Activation',
	'whatsapp_sid' => 'Whatsapp SID',
	'whatsapp_token' => 'Whatsapp Token',
	'whatsapp_senderphone'=> 'Whatsapp Sender Phone',
	'SendGrid Activation' => 'SendGrid Activation',
	'TransEmail_title' => 'Configuration for Transactional Email',
	'TransEmail_subtitle' => 'Substitutes outgoing email server',
	'MktEmail_title' => 'Configuration for Marketing Email',
	'MktEmail_subtitle' => 'Only for messages, programmed emails and specificaly programmed processes',
	'LBL_CONFIG_INCOMING_MAIL_SERVER' => 'Configure Incoming Mail Server',
	'LBL_SELECT_SERVER_TYPE' => 'Select Server Type',
	'LBL_CONFIG_OUTGOING_MAIL_SERVER' => 'Configure Outgoing Mail Server',
	'LBL_USER_SMTP_CONFIG' => 'User IMAP/SMTP Configuration',
	'LBL_IC_SUCCESS_CONFIG_VALIDATION' => 'Incoming Mail Server Configuration Saved and Validated',
	'LBL_IC_WARNING_CONFIG_VALIDATION' => 'Incoming Mail Server Configuration Not Validated',
	'LBL_IC_CONFIG_VALIDATION_FAIL' => 'Incoming Mail Server Configuration Validation Failed',
	'LBL_OG_SUCCESS_CONFIG_VALIDATION' => 'Outgoing Mail Server Configuration Saved and Validated',
	'LBL_OG_WARNING_CONFIG_VALIDATION' => 'Outgoing Mail Server Configuration Not Validated',
	'LBL_OG_CONFIG_VALIDATION_FAIL' => 'Outgoing Mail Server Configuration Validation Failed',
	'LBL_ERROR' => 'Error',
	'GMP Activation' => 'Google Measurement Protocol Activation',
	'gmp_gid' => 'Google Universal analytics ID',
	'gmp_gversion' => 'Measurement Protocol Version',
	'gmp_deacterror' => 'Workflows that use this task exist!! Please eliminate them before deactivating.',
	'Record Versioning' => 'Record Versioning',
	'Record Versioning_Desc' => 'Add versioning to your records',
	'GoTo2FAActivation_Desc' => 'Add Two Factor authentication for your users',
	'HubSpot Activation_Desc' => 'Synchronize your information with HubSpot',
	'GVEditable' => 'The Global Variable module must be editable in order to activate this feature.',
	'SMTP Configuration_Desc' => 'Configure incoming and outgoing email accounts for your users',
	'Zendesk Activation_Desc' => 'Synchronize your information with ZenDesk',
	'Whatsapp Activation_Desc' => 'Send notifications to your contacts using Whatsapp',
	'SendGrid Activation_Desc' => 'Send emails using SendGrid',
	'GMP Activation_Desc' => 'Send your sales to Google Analytics',
	'Elasticsearch_Desc' => 'Create ElasticSearch Index for module',
	'ElasticSearch Activation' => 'ElasticSearch Activation',
	'LogAll Activation' => 'Log Everything',
	'LogAll_Desc' => 'Log all the events and data changes that happen in the application to the message queue.',
	'LogAll_Active' => 'Currently logging everything.',
	'LogAll_Inactive' => 'Currently not logging anything.',
	'Login Sync Activation' => 'Login System Synchronization',
	'Login_Synic Desc' => 'Automatically login to other coreBOS road runner web service when logged in to this one.',
	'cbInstalls' => 'coreBOS Installs',
	'PrivateKeyNotSet' => 'No Private Key is set',
	'PrivateKeyIsSet' => 'Private Key is set',
	'setPrivateKey' => 'Set Shared Private Key',
	'noServerSelected' => 'No server selected to update',
	'noServerValue' => 'Selected Server is empty',
	'Map_Query' => 'Get Map Query',
	'choosemap' => 'Choose a Map',
	'sel_fields_es' => 'Select Fields for Elasticsearch Mapping',
	'Analyzed' => 'Analyzed',
	'Missing_GlobalVar' => 'Global Variables ElasticSearch IP missing',
	'SAML Activation' => 'SAML Activation',
	'SAML Activation_Desc' => 'Login all users from a central Identity Provider',
	'SAML SP' => 'Service Provider',
	'SAML IP' => 'Identity Provider',
	'SAML EID' => 'Entity ID',
	'SAML NID' => 'Name ID Format',
	'SAML ACS' => 'Assertion Consumer Service',
	'SAML SSO' => 'Single Sign On Service',
	'SAML SLO' => 'Single Logout Service',
	'SAML x509' => 'x509 Certificate',
	'SAML WS' => 'Web Service API',
	'SAML RWURL' => 'Relay Response URL 1',
	'SAML RWURL2' => 'Relay Response URL 2',
	'SAML RWURL3' => 'Relay Response URL 3',
	'LBL_API_URL' => 'SendGrid API URL',
	'cache_select_adapter_type' => 'Select adapter type',
	'cache_adapter_memory' => 'Memory',
	'cache_adapter_redis' => 'Redis',
	'cache_adapter_memcached' => 'Memcached',
	'cache_ip' => 'Server IP',
	'cache_port' => 'Service Port',
	'cache_ip_required' => 'Cache server IP is required',
	'cache_port_required' => 'Cache service PORT is required',
	'Cache Activation' => 'Cache layer activation',
	'Cache Activation_Desc' => 'Make use of a cache layer implemented for three adapters: Memory, Redis, Memcached',
);
?>
