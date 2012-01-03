<?php
/**
 * MGR French Lexicon Entries for Big Brother
 *
 * @package bigbrother
 * @subpackage lexicon
 */
$_lang['bigbrother.main_title'] = 'Google Analytics';

/* Alert */
$_lang['bigbrother.alert_failed'] = 'Echec';

/* Action buttons - modAB */
$_lang['bigbrother.revoke_authorization'] = 'Revoquer l\'autorisation';
$_lang['bigbrother.revoke_permission'] = 'Revoquer les permissions ?';
$_lang['bigbrother.revoke_permission_msg'] = "En révoquant l'autorisation, vous devrez passer à nouveau par le processus de configuration pour authoriser MODx à acceder a l'API de Google.<br/>Etes-vous sûr de vouloir révoquer les autorisations";

/* Authenticate */
$_lang['bigbrother.bd_root_desc'] = 'Verifie si SimpleXML et l\'extension PHP cURL sont activées avant de continuer la phase d\'authentification';
$_lang['bigbrother.bd_root_crumb_text'] = 'Verification des pré-requis';

$_lang['bigbrother.verify_prerequisite_settings'] = 'Vérification des paramètres Préalable';
$_lang['bigbrother.start_the_login_process'] = 'Démarrer le processus d\'authentification';
$_lang['bigbrother.callback_label'] = 'Callback URL';
$_lang['bigbrother.callback_label_under'] = "Si l'URL spécifiée dans ce champs ne correspond à la page ou vous vous trouvez, copier/coller l'URL en cours dans le champs.";

/* Oauth complete */
$_lang['bigbrother.bd_oauth_complete_in_progress'] = 'Authentification en cours...';
$_lang['bigbrother.bd_oauth_authorize'] = 'Authorisation';
$_lang['bigbrother.oauth_select_account'] = 'Selectionnez un compte...';
$_lang['bigbrother.oauth_btn_select_account'] = 'Selectionner ce compte et voir les rapports';

/* Oauth response */
$_lang['bigbrother.err_load_oauth'] = "Impossible de charger la classe OAuth nécessaire. Veuillez réinstaller le composant ou contacter le webmaster.";

/* mgr - breadcrumbs */
$_lang['bigbrother.bd_authorize'] = 'Authorisation';
$_lang['bigbrother.bd_choose_an_account'] = 'Choisissez un compte';

/* mgr - Authenticate Ajax response strings */
$_lang['bigbrother.class_simplexml'] = '<strong>Il semblerait que <a href="http://us3.php.net/manual/en/book.simplexml.php">SimpleXML</a> n\'est pas compilé dans votre version de PHP. <br/> Il est requis par le plugin pour fonctionner correctement.</strong>';
$_lang['bigbrother.function_curl'] = '<strong>Il semblerait que  <a href="http://www.php.net/manual/en/book.curl.php">cURL</a>  n\'est pas compilé dans votre version de PHP. <br/> Il est requis par le plugin pour fonctionner correctement.</strong>';
$_lang['bigbrother.redirect_to_google'] = 'Redirection sur le site de Google, veuillez patienter...';
$_lang['bigbrother.authentification_complete'] = 'Authentification terminée.</p><p>Selectionnez le compte que désirez utilisé par défaut dans la liste ci-dessous.<br/> Vous pourrez a tout moment changez de compte via le soptions du CMP.';
$_lang['bigbrother.account_set_succesfully_wait'] = 'Compte selectionné avec succès! Veuillez patienter...';

/* Reports */
$_lang['bigbrother.desc_markup'] = '<h3>{title}<span>{date_begin} - {date_end}</span></h3><div class="account-infos">{name}<span>{id}</span></div>';
$_lang['bigbrother.loading'] = 'Chargement...';

/* Content Overview */

$_lang['bigbrother.content'] = 'Contenu';
$_lang['bigbrother.content_overview'] = 'Vue d\'ensemble du Contenu';
$_lang['bigbrother.site_content'] = 'Site Content';
$_lang['bigbrother.visits_comparisons'] = 'Visits compared to the previous month';

/* Audience Overview */
$_lang['bigbrother.audience'] = 'Audience';
$_lang['bigbrother.audience_overview'] = 'Vue d\'ensemble de l\'Audience';
$_lang['bigbrother.audience_visits'] = 'Visites';

$_lang['bigbrother.demographics'] = 'Demographiques';
$_lang['bigbrother.language'] = 'Langues';
$_lang['bigbrother.country'] = 'Pays';

$_lang['bigbrother.system'] = 'Système';
$_lang['bigbrother.browser'] = 'Navigateur';
$_lang['bigbrother.operating_system'] = 'Système d\'exploitation';
$_lang['bigbrother.service_provider'] = 'Fournisseurs d\'accès';

$_lang['bigbrother.mobile'] = 'Mobile';
$_lang['bigbrother.screen_resolution'] = 'Resolution d\'écran';

/* Traffic sources Overview */
$_lang['bigbrother.traffic_sources'] = 'Sources de Trafic';
$_lang['bigbrother.traffic_sources_overview'] = 'Vue d\'ensemble des Sources de Trafic';
$_lang['bigbrother.traffic_sources_visits'] = 'Visites';

$_lang['bigbrother.organic_source'] = 'Moteurs de recherches';
$_lang['bigbrother.keyword'] = 'Mots clés';
$_lang['bigbrother.referral_source'] = 'Sites référents';
$_lang['bigbrother.landing_page'] = 'Page de destination';

/* Misc - Dimensions */
$_lang['bigbrother.none'] = '(aucune)';
$_lang['bigbrother.direct_traffic'] = 'Accès directs';

$_lang['bigbrother.search_traffic'] = 'organic';
$_lang['bigbrother.referral_traffic'] = 'referral';

$_lang['bigbrother.search_traffic_replace_with'] = 'Moteurs de recherches';
$_lang['bigbrother.referral_traffic_replace_with'] = 'Sites référents';

/* Misc - Metrics */
$_lang['bigbrother.visits_and_uniques'] = 'Visites and Visiteurs Uniques';
$_lang['bigbrother.avg_time_on_site'] = 'Temps moyen passé sur la page';
$_lang['bigbrother.page'] = 'Page';
$_lang['bigbrother.pagetitle'] = 'Titre de la page';
$_lang['bigbrother.pageviews'] = 'Pages vues';
$_lang['bigbrother.pageviews_per_visit'] = 'Pages / Visite';
$_lang['bigbrother.unique_pageviews'] = 'Consultations uniques';
$_lang['bigbrother.bounce_rate'] = 'Taux de rebond';
$_lang['bigbrother.visits'] = 'Visites';
$_lang['bigbrother.visitors'] = 'Visiteurs';
$_lang['bigbrother.percent_visits'] = '% Visites';
$_lang['bigbrother.exit_rate'] = 'Sorties (en %)';
$_lang['bigbrother.new_visits'] = 'Nouvelles Visites';
$_lang['bigbrother.new_visits_in_percent'] = 'Nouvelles Visites (en %)';
$_lang['bigbrother.direct_traffic'] = 'Accès directs';
$_lang['bigbrother.search_engines'] = 'Moteurs de recherches';

/* Options panel */
$_lang['bigbrother.options'] = 'Options';
$_lang['bigbrother.save_settings'] = 'Sauvegarder les préférences';
$_lang['bigbrother.general_options'] = 'Options Générale';
$_lang['bigbrother.dashboard_options'] = 'Options du Dashboard';

/* Options panel - cmp options */
$_lang['bigbrother.accounts_list'] = 'Liste des comptes disponibles';
$_lang['bigbrother.accounts_list_desc'] = 'Sélectionnez le compte que vous souhaitez utiliser pour vos rapports';

$_lang['bigbrother.date_range'] = 'Plage de date';
$_lang['bigbrother.date_range_desc'] = 'Séléctionnez la plage de date pour vos rapports';

$_lang['bigbrother.15_jours'] = '15 jours';
$_lang['bigbrother.30_jours'] = '30 jours';
$_lang['bigbrother.45_jours'] = '45 jours';
$_lang['bigbrother.60_jours'] = '60 jours';

$_lang['bigbrother.report_end_date'] = 'Date de fin de rapport';
$_lang['bigbrother.report_end_date_desc'] = 'Selectionnez la date def in de rapport';

$_lang['bigbrother.caching_time'] = 'Temps de cache';
$_lang['bigbrother.caching_time_desc'] = 'Combien de temps les résultats doivent être mis en cache (en secondes)';

$_lang['bigbrother.admin_groups'] = 'Groupes d\'Administrateur';
$_lang['bigbrother.admin_groups_desc'] = 'Liste de groupe d\'utilisateur MODx séparé par des virgules ayant acces aux options';

/* Options panel - dashboard options */
$_lang['bigbrother.show_visits_on_dashboard'] = 'Dashboard Widget - Visites';
$_lang['bigbrother.show_visits_on_dashboard_desc'] = 'Montrer les Visites sur le dashboard';

$_lang['bigbrother.show_metas_on_dashboard'] = 'Dashboard Widget - Metas';
$_lang['bigbrother.show_metas_on_dashboard_desc'] = 'Montrer les metas informations sur le dashboard';

$_lang['bigbrother.show_pies_on_dashboard'] = 'Dashboard Widget - Visitors and Traffic Sources Overview';
$_lang['bigbrother.show_pies_on_dashboard_desc'] = 'Monter les Visiteurs et les Sources de Trafic sur le dashboard';