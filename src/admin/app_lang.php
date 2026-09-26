<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponenter';
$lang['admin_content'] = 'Innhold';
$lang['admin_database_backup'] = 'Database-sikkerhetskopier';
$lang['admin_extensions'] = 'Utvidelser';
$lang['admin_firewall'] = 'Brannmur';
$lang['admin_help'] = 'Hjelp';
$lang['admin_languages'] = 'Språk';
$lang['admin_logs'] = 'Systemlogger';
$lang['admin_media'] = 'Mediabibliotek';
$lang['admin_modules'] = 'Moduler';
$lang['admin_plugins'] = 'Pluginer';
$lang['admin_reports'] = 'Aktivitetslogg';
$lang['admin_settings'] = 'Systeminnstillinger';
$lang['admin_sysinfo'] = 'Systeminformasjon';
$lang['admin_system'] = 'System';
$lang['admin_system_firewall'] = 'Systembrannmur';
$lang['admin_themes'] = 'Temaer';
$lang['admin_updates'] = 'Systemoppdateringer';
$lang['admin_users'] = 'Brukere';
$lang['admin_view_site'] = 'Vis nettsted';
$lang['per_page'] = 'Per side';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Takk for at du laget med <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Ingen aktive elementer.} other{<b>#</b> av <b>%s</b> elementer er aktive.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'Installasjonen mislyktes: %s';
$lang['admin_install_location_app'] = 'Kun denne applikasjonen';
$lang['admin_install_location_core'] = 'Alle applikasjoner';
$lang['admin_install_location_select'] = '&#151; Velg plassering &#151;';
$lang['admin_install_update_confirm'] = 'Er du sikker på at du vil oppdatere denne pakken?';
$lang['admin_install_update_error'] = 'Oppdatering av pakken mislyktes.';
$lang['admin_install_update_skip_confirm'] = 'Er du sikker på at du vil hoppe over denne oppdateringen?';
$lang['admin_install_update_skip_error'] = 'Kunne ikke hoppe over denne oppdateringen.';
$lang['admin_install_update_skip_success'] = 'Oppdateringen ble hoppet over.';
$lang['admin_install_update_success'] = 'Pakken ble oppdatert.';
$lang['admin_install_upload_tip'] = 'Installer en pakke ved å laste opp <b>.zip</b>-filen her.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Kunne ikke rydde gamle sikkerhetskopifiler.';
$lang['admin_database_backup_clean_success'] = '%d sikkerhetskopifiler slettet. %d diskplass frigjort.';
$lang['admin_database_backup_create'] = 'Opprett sikkerhetskopi';
$lang['admin_database_backup_create_confirm'] = 'Er du sikker på at du vil opprette en sikkerhetskopi nå?';
$lang['admin_database_backup_create_error'] = 'Kunne ikke opprette sikkerhetskopifil. Sørg for at mappen <b>%s</b> er skrivbar.';
$lang['admin_database_backup_create_success'] = 'Database-sikkerhetskopifil <b>%s</b> ble opprettet.';
$lang['admin_database_backup_delete_confirm'] = 'Er du sikker på at du vil slette disse sikkerhetskopifilene?';
$lang['admin_database_backup_delete_error'] = 'Kunne ikke slette valgte sikkerhetskopifiler.';
$lang['admin_database_backup_delete_success'] = 'Sikkerhetskopifiler ble slettet.';
$lang['admin_database_backup_download_error'] = 'Kunne ikke laste ned valgte sikkerhetskopifil.';
$lang['admin_database_backup_download_success'] = 'Sikkerhetskopifil ble lastet ned.';
$lang['admin_database_backup_lock_confirm'] = 'Er du sikker på at du vil låse disse sikkerhetskopifilene?';
$lang['admin_database_backup_lock_error'] = 'Kunne ikke låse valgte sikkerhetskopifiler.';
$lang['admin_database_backup_lock_success'] = 'Sikkerhetskopifiler ble låst.';
$lang['admin_database_backup_locked_error'] = 'Kunne ikke slette låste sikkerhetskopifiler.';
$lang['admin_database_backup_missing_error'] = 'Sikkerhetskopifilen ble ikke funnet.';
$lang['admin_database_backup_unlock_confirm'] = 'Er du sikker på at du vil låse opp disse sikkerhetskopifilene?';
$lang['admin_database_backup_unlock_error'] = 'Kunne ikke låse opp valgte sikkerhetskopifiler.';
$lang['admin_database_backup_unlock_success'] = 'Sikkerhetskopifiler ble låst opp.';
$lang['admin_database_prune'] = 'Rens';
$lang['admin_database_prune_confirm'] = 'Er du sikker på at du vil rense databasen? En sikkerhetskopi vil bli opprettet før kjøring.';
$lang['admin_database_prune_error'] = 'Kunne ikke rense databasen.';
$lang['admin_database_prune_next'] = 'Neste rensing: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Databasen ble renset.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Slett logger';
$lang['admin_logs_delete_confirm'] = 'Er du sikker på at du vil slette valgte loggfiler?';
$lang['admin_logs_delete_error'] = 'Kunne ikke slette loggfiler.';
$lang['admin_logs_delete_success'] = 'Loggfiler ble slettet.';
$lang['admin_logs_error_disabled'] = 'Logging er for øyeblikket ikke aktivert.';
$lang['admin_logs_error_empty'] = 'Ingen logger funnet.';
$lang['admin_logs_error_missing'] = 'Loggfilen ble ikke funnet, eller den var tom.';
$lang['admin_logs_tip'] = 'Logging kan raskt skape veldig store filer. For live sider, vurder å slette gamle.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Er du sikker på at du vil slette valgte e-poster?';
$lang['admin_emails_delete_error'] = 'Kunne ikke slette valgte e-poster.';
$lang['admin_emails_delete_success'] = 'Valgte e-poster ble slettet.';
$lang['admin_emails_email_from'] = 'Sendt fra';
$lang['admin_emails_mail_queue'] = 'E-postkø';
$lang['admin_emails_mailer'] = 'Masseutsendelse';
$lang['admin_emails_search'] = 'Søk i e-poster etter emne eller innhold...';
$lang['admin_emails_send_error'] = 'Kunne ikke legge e-post i kø. Prøv igjen.';
$lang['admin_emails_send_none'] = 'Ingen brukere passer med valgte kriterier.';
$lang['admin_emails_send_success'] = 'E-posten er lagt i kø og vil bli sendt snart.';
$lang['admin_emails_send_to_banned'] = 'Send til utestengte brukere.';
$lang['admin_emails_send_to_deleted'] = 'Send til slettede brukere.';
$lang['admin_emails_send_to_disabled'] = 'Send til inaktive brukere.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Legg til bruker';
$lang['admin_users_all_users'] = 'Alle brukere';
$lang['admin_users_ban_confirm'] = 'Er du sikker på at du vil utestenge valgte brukere?';
$lang['admin_users_ban_error'] = 'Kan ikke utestenge valgte brukere.';
$lang['admin_users_ban_success'] = 'Valgte brukere ble utestengt.';
$lang['admin_users_delete_confirm'] = 'Er du sikker på at du vil slette valgte brukere?';
$lang['admin_users_delete_error'] = 'Kan ikke slette valgte brukere.';
$lang['admin_users_delete_success'] = 'Valgte brukere ble slettet.';
$lang['admin_users_disable_confirm'] = 'Er du sikker på at du vil deaktivere valgte brukere?';
$lang['admin_users_disable_error'] = 'Kan ikke deaktivere valgte brukere.';
$lang['admin_users_disable_success'] = 'Valgte brukere ble deaktivert.';
$lang['admin_users_edit'] = 'Rediger bruker';
$lang['admin_users_edit_error'] = 'Kunne ikke oppdatere bruker.';
$lang['admin_users_edit_success'] = 'Bruker ble oppdatert.';
$lang['admin_users_enable_confirm'] = 'Er du sikker på at du vil aktivere valgte brukere?';
$lang['admin_users_enable_error'] = 'Kan ikke aktivere valgte brukere.';
$lang['admin_users_enable_success'] = 'Valgte brukere ble aktivert.';
$lang['admin_users_groups'] = 'Grupper';
$lang['admin_users_lock_confirm'] = 'Er du sikker på at du vil låse valgte brukere?';
$lang['admin_users_lock_error'] = 'Kunne ikke låse valgte brukere.';
$lang['admin_users_lock_success'] = 'Valgte brukere ble låst.';
$lang['admin_users_logged'] = 'Innloggede brukere';
$lang['admin_users_manage'] = 'Behandle brukere';
$lang['admin_users_remove_confirm'] = 'Er du sikker på at du vil slette valgte brukere og alle deres data permanent?';
$lang['admin_users_remove_error'] = 'Kan ikke slette valgte brukere og alle deres data permanent.';
$lang['admin_users_remove_success'] = 'Valgte brukere og alle deres data ble slettet.';
$lang['admin_users_restore_confirm'] = 'Er du sikker på at du vil gjenopprette valgte brukere?';
$lang['admin_users_restore_error'] = 'Kan ikke gjenopprette valgte brukere.';
$lang['admin_users_restore_success'] = 'Valgte brukere ble gjenopprettet.';
$lang['admin_users_search'] = 'Søk etter navn, brukernavn eller e-post...';
$lang['admin_users_unban_confirm'] = 'Er du sikker på at du vil oppheve utestengelsen av valgte brukere?';
$lang['admin_users_unban_error'] = 'Kan ikke oppheve utestengelsen av valgte brukere.';
$lang['admin_users_unban_success'] = 'Utestengelsen av valgte brukere ble opphevet.';
$lang['admin_users_unlock_confirm'] = 'Er du sikker på at du vil låse opp valgte brukere?';
$lang['admin_users_unlock_error'] = 'Kunne ikke låse opp valgte brukere.';
$lang['admin_users_unlock_success'] = 'Valgte brukere ble låst opp.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Tøm logger';
$lang['admin_reports_clear_confirm'] = 'Er du sikker på at du vil tømme handlingsloggen?';
$lang['admin_reports_clear_error'] = 'Kunne ikke tømme handlingsloggen.';
$lang['admin_reports_clear_success'] = 'Handlingsloggen ble tømt.';
$lang['admin_reports_latest_actions'] = 'Siste handlinger';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Er du sikker på at du vil slette valgte filer?';
$lang['admin_media_delete_error'] = 'Kunne ikke slette filer.';
$lang['admin_media_delete_success'] = 'Filer ble slettet.';
$lang['admin_media_file_delete_error'] = 'Kunne ikke slette fil.';
$lang['admin_media_file_delete_success'] = 'Fil ble slettet.';
$lang['admin_media_file_update_error'] = 'Kunne ikke oppdatere fil.';
$lang['admin_media_file_update_success'] = 'Fil ble oppdatert.';
$lang['admin_media_search'] = 'Søk etter navn, beskrivelse eller filnavn...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Ingen aktive moduler.} other{<b>#</b> av <b>%s</b> moduler er aktive.}';
$lang['admin_modules_add'] = 'Legg til modul';
$lang['admin_modules_delete_confirm'] = 'Er du sikker på at du vil slette modulen: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Kunne ikke slette modulen.';
$lang['admin_modules_delete_error_active'] = 'Aktive moduler kan ikke slettes.';
$lang['admin_modules_delete_success'] = 'Modul ble slettet.';
$lang['admin_modules_disable_all_confirm'] = 'Er du sikker på at du vil deaktivere alle moduler?';
$lang['admin_modules_disable_all_error'] = 'Kunne ikke deaktivere alle moduler.';
$lang['admin_modules_disable_all_success'] = 'Alle moduler ble deaktivert.';
$lang['admin_modules_disable_confirm'] = 'Er du sikker på at du vil deaktivere modulen: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Kunne ikke deaktivere modulen.';
$lang['admin_modules_disable_success'] = 'Modul ble deaktivert.';
$lang['admin_modules_enable_all_confirm'] = 'Er du sikker på at du vil aktivere alle moduler?';
$lang['admin_modules_enable_all_error'] = 'Kunne ikke aktivere alle moduler.';
$lang['admin_modules_enable_all_success'] = 'Alle moduler ble aktivert.';
$lang['admin_modules_enable_confirm'] = 'Er du sikker på at du vil aktivere modulen: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Kunne ikke aktivere modulen.';
$lang['admin_modules_enable_success'] = 'Modul ble aktivert.';
$lang['admin_modules_global'] = 'Global modul (delt)';
$lang['admin_modules_install_confirm'] = 'Er du sikker på at du vil installere modulen: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'Installasjon av modulen mislyktes.';
$lang['admin_modules_install_success'] = 'Modulen ble installert.';
$lang['admin_modules_install_tip'] = 'Moduler legger til nye funksjoner og funksjonalitet til nettstedet ditt. Se tilgjengelige moduler i <a href="%s" target="_blank" rel="noopener">modulkatalogen</a> eller last opp en som en <b>.zip</b>-pakke.';
$lang['admin_modules_update_confirm'] = 'Er du sikker på at du vil oppdatere denne modulen?';
$lang['admin_modules_update_error'] = 'Oppdatering av modulen mislyktes.';
$lang['admin_modules_update_success'] = 'Modulen ble oppdatert.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Ingen aktive plugins.} other{<b>#</b> av <b>%s</b> plugins er aktive.}';
$lang['admin_plugins_add'] = 'Legg til plugin';
$lang['admin_plugins_delete_confirm'] = 'Er du sikker på at du vil slette plugin: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Kunne ikke slette plugin.';
$lang['admin_plugins_delete_error_active'] = 'Aktive programtillegg kan ikke slettes.';
$lang['admin_plugins_delete_success'] = 'Plugin ble slettet.';
$lang['admin_plugins_disable_all_confirm'] = 'Er du sikker på at du vil deaktivere alle pluginer?';
$lang['admin_plugins_disable_all_error'] = 'Kunne ikke deaktivere alle pluginer.';
$lang['admin_plugins_disable_all_success'] = 'Alle pluginer ble deaktivert.';
$lang['admin_plugins_disable_confirm'] = 'Er du sikker på at du vil deaktivere plugin: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Kunne ikke deaktivere plugin.';
$lang['admin_plugins_disable_success'] = 'Plugin ble deaktivert.';
$lang['admin_plugins_enable_all_confirm'] = 'Er du sikker på at du vil aktivere alle plugin?';
$lang['admin_plugins_enable_all_error'] = 'Kunne ikke aktivere alle plugin.';
$lang['admin_plugins_enable_all_success'] = 'Alle plugin ble aktivert.';
$lang['admin_plugins_enable_confirm'] = 'Er du sikker på at du vil aktivere plugin: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Kunne ikke aktivere plugin.';
$lang['admin_plugins_enable_success'] = 'Plugin ble aktivert.';
$lang['admin_plugins_global'] = 'Globalt programtillegg (delt)';
$lang['admin_plugins_install_confirm'] = 'Er du sikker på at du vil installere programtillegget: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'Installasjon av programtillegget mislyktes.';
$lang['admin_plugins_install_success'] = 'Programtillegget ble installert.';
$lang['admin_plugins_install_tip'] = 'Plugin utvider eksisterende funksjoner med ekstra alternativer eller integrasjoner. Installer fra <a href="%s" target="_blank" rel="noopener">plugin-katalogen</a> eller last opp en <b>.zip</b>-fil.';
$lang['admin_plugins_update_confirm'] = 'Er du sikker på at du vil oppdatere dette programtillegget?';
$lang['admin_plugins_update_error'] = 'Oppdatering av programtillegget mislyktes.';
$lang['admin_plugins_update_success'] = 'Programtillegget ble oppdatert.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Legg til tema';
$lang['admin_themes_delete_confirm'] = 'Er du sikker på at du vil slette temaet: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Kunne ikke slette temaet.';
$lang['admin_themes_delete_error_active'] = 'Du kan ikke slette det aktive temaet.';
$lang['admin_themes_delete_success'] = 'Tema ble slettet.';
$lang['admin_themes_disable_confirm'] = 'Er du sikker på at du vil deaktivere temaet: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Kunne ikke deaktivere temaet.';
$lang['admin_themes_disable_error_active'] = 'Det aktive temaet kan ikke deaktiveres.';
$lang['admin_themes_disable_success'] = 'Temaet ble deaktivert.';
$lang['admin_themes_enable_confirm'] = 'Er du sikker på at du vil aktivere temaet: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Kunne ikke aktivere temaet.';
$lang['admin_themes_enable_success'] = 'Tema ble aktivert.';
$lang['admin_themes_install_confirm'] = 'Er du sikker på at du vil installere temaet: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'Installasjon av temaet mislyktes.';
$lang['admin_themes_install_success'] = 'Temaet ble installert.';
$lang['admin_themes_install_tip'] = 'Temaer endrer nettstedets utseende og layout. Velg fra <a href="%s" target="_blank" rel="noopener">temabiblioteket</a> eller last opp en <b>.zip</b>-fil for å installere ditt eget.';
$lang['admin_themes_none_tip'] = 'Denne applikasjonen kjører uten et tema. Installer ett for å tilpasse det offentlige grensesnittet.';
$lang['admin_themes_update_confirm'] = 'Er du sikker på at du vil oppdatere dette temaet?';
$lang['admin_themes_update_error'] = 'Oppdatering av temaet mislyktes.';
$lang['admin_themes_update_success'] = 'Temaet ble oppdatert.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menyer';
$lang['admin_menus_assign_error'] = 'Kunne ikke oppdatere menylokasjoner.';
$lang['admin_menus_assign_success'] = 'Menylokasjoner ble oppdatert.';
$lang['admin_menus_header'] = 'Det finnes <b>%s</b> tilgjengelige menylokasjoner.';
$lang['admin_menus_location'] = 'Lokasjon';
$lang['admin_menus_locations'] = 'Menylokasjoner';
$lang['admin_menus_manage'] = 'Behandle menyer';
$lang['admin_menus_menu'] = 'Tildelt meny';
$lang['admin_menus_none'] = '&#151; Ingen &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Legg til språk';
$lang['admin_languages_default_confirm'] = 'Er du sikker på at du vil gjøre dette språket til nettstedets standardspråk?';
$lang['admin_languages_default_error'] = 'Kunne ikke endre standardspråk.';
$lang['admin_languages_default_error_nochange'] = 'Dette språket er allerede standardspråket.';
$lang['admin_languages_default_success'] = 'Standardspråk ble endret.';
$lang['admin_languages_delete_confirm'] = 'Er du sikker på at du vil slette språket: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'Sletting av språket mislyktes.';
$lang['admin_languages_delete_error_active'] = 'Aktive språk kan ikke slettes.';
$lang['admin_languages_delete_error_default'] = 'Standardspråket kan ikke slettes.';
$lang['admin_languages_delete_success'] = 'Språket ble slettet.';
$lang['admin_languages_disable_all_confirm'] = 'Er du sikker på at du vil deaktivere alle språk?';
$lang['admin_languages_disable_all_error'] = 'Kunne ikke deaktivere alle språk.';
$lang['admin_languages_disable_all_success'] = 'Alle språk ble deaktivert.';
$lang['admin_languages_disable_confirm'] = 'Er du sikker på at du vil deaktivere språket: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Kunne ikke deaktivere språket.';
$lang['admin_languages_disable_error_default'] = 'Standardspråket kan ikke deaktiveres.';
$lang['admin_languages_disable_error_nochange'] = 'Dette språket er allerede deaktivert.';
$lang['admin_languages_disable_success'] = 'Språk ble deaktivert.';
$lang['admin_languages_enable_all_confirm'] = 'Er du sikker på at du vil aktivere alle språk?';
$lang['admin_languages_enable_all_error'] = 'Kunne ikke aktivere alle språk.';
$lang['admin_languages_enable_all_success'] = 'Alle språk ble aktivert.';
$lang['admin_languages_enable_confirm'] = 'Er du sikker på at du vil aktivere språket: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Kunne ikke aktivere språket.';
$lang['admin_languages_enable_error_nochange'] = 'Dette språket er allerede aktivert.';
$lang['admin_languages_enable_success'] = 'Språk ble aktivert.';
$lang['admin_languages_install_confirm'] = 'Er du sikker på at du vil installere språket: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'Installasjon av språket mislyktes.';
$lang['admin_languages_install_success'] = 'Språket ble installert.';
$lang['admin_languages_install_tip'] = 'Språk legger til oversettelser for nettstedets grensesnitt og innhold. Bla gjennom tilgjengelige språk i <a href="%s" target="_blank" rel="noopener">språkkatalogen</a>, eller last opp en <b>.zip</b>-pakke for å installere ditt eget.';
$lang['admin_languages_tip'] = 'Aktiver, deaktiver, og sett nettstedets standardspråk. Aktiverte språk er tilgjengelige for nettstedsbesøkende.';
$lang['admin_languages_update_confirm'] = 'Er du sikker på at du vil oppdatere dette språket?';
$lang['admin_languages_update_error'] = 'Oppdatering av språket mislyktes.';
$lang['admin_languages_update_success'] = 'Språket ble oppdatert.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Pakken eksisterer allerede.';
$lang['package_archive_download_failed'] = 'Kunne ikke laste ned pakkearkiv.';
$lang['package_backup_create_error'] = 'Kunne ikke opprette sikkerhetskopi av pakken.';
$lang['package_backup_dir_failed'] = 'Kunne ikke opprette sikkerhetskopimappe %s';
$lang['package_backup_missing'] = 'Sikkerhetskopifilen finnes ikke.';
$lang['package_backup_path_error'] = 'Klarte ikke å finne banen til sikkerhetskopifilen.';
$lang['package_backup_request_invalid'] = 'Ugyldig forespørsel om sikkerhetskopi.';
$lang['package_backup_restore_error'] = 'Kunne ikke gjenopprette sikkerhetskopien av pakken.';
$lang['package_catalog_type_unknown'] = 'Ukjent katalogtype.';
$lang['package_checksum_error'] = 'Sjekksumverifisering (checksum) av pakken mislyktes.';
$lang['package_copy_files_error'] = 'Kunne ikke kopiere pakkefiler til destinasjonen.';
$lang['package_copy_updates_error'] = 'Kunne ikke kopiere oppdateringsfiler til destinasjonen.';
$lang['package_dest_dir_failed'] = 'Kunne ikke opprette destinasjonsmappe %s';
$lang['package_destination_error'] = 'Klarte ikke å finne pakkens destinasjon.';
$lang['package_download_dir_failed'] = 'Kunne ikke opprette nedlastingsmappe %s';
$lang['package_download_empty'] = 'Pakkenedlastingen ga et tomt svar.';
$lang['package_download_request_invalid'] = 'Ugyldig forespørsel om nedlasting av pakke.';
$lang['package_extract_failed'] = 'Kunne ikke pakke ut ZIP %s';
$lang['package_invalid_lang_files'] = 'Ugyldig språk — obligatoriske språkfiler for applikasjonen mangler.';
$lang['package_invalid_lang_structure'] = 'Ugyldig språk — admin- og/eller ci3-mapper mangler.';
$lang['package_invalid_missing_info'] = 'Ugyldig %s: mangler "info.php".';
$lang['package_invalid_module_structure'] = 'Ugyldig modul — obligatoriske config- og/eller controllers-mapper mangler.';
$lang['package_invalid_plugin_boot'] = 'Ugyldig plugin — mangler "boot.php".';
$lang['package_invalid_plugin_contents'] = 'Ugyldig plugin — plugins kan ikke inneholde kontrollerere eller visninger (views).';
$lang['package_invalid_theme_boot'] = 'Ugyldig tema — mangler "boot.php".';
$lang['package_invalid_theme_views'] = 'Ugyldig tema — mangler views-mappe.';
$lang['package_no_root_dir'] = 'Pakken inneholder ingen rotmappe.';
$lang['package_not_downloadable'] = 'Pakken kan ikke lastes ned offentlig.';
$lang['package_not_in_registry'] = 'Pakken er ikke tilgjengelig i det offentlige registeret.';
$lang['package_request_invalid'] = 'Ugyldig pakkeforespørsel.';
$lang['package_rollback_request_invalid'] = 'Ugyldig forespørsel om tilbakewrulling (rollback).';
$lang['package_root_mismatch'] = 'Pakkearkivets rot stemmer ikke overens med %s';
$lang['package_single_root_required'] = 'Pakken må inneholde nøyaktig én rotmappe.';
$lang['package_source_error'] = 'Klarte ikke å finne pakkens kilde.';
$lang['package_system_core_restricted'] = 'Systemkomponenter kan ikke installeres som pakker.';
$lang['package_temp_dir_failed'] = 'Kunne ikke opprette midlertidig mappe %s';
$lang['package_type_unknown'] = 'Ukjent pakketype.';
$lang['package_update_request_invalid'] = 'Ugyldig forespørsel om pakkeoppdatering.';
$lang['package_update_root_mismatch'] = 'Oppdateringsarkivets rot stemmer ikke overens med %s.';
$lang['package_upload_dir_failed'] = 'Kunne ikke opprette opplastingsmappe %s';
$lang['package_url_invalid'] = 'Ugyldig URL for pakkedistribusjon.';
$lang['package_write_failed'] = 'Kunne ikke skrive pakke til %s';
$lang['package_zip_not_found'] = 'Pakke-ZIP finnes ikke: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Nye oppdateringer tilgjengelig!';
$lang['update_backup_error'] = 'Kunne ikke opprette en sikkerhetskopi av eksisterende pakke. Oppdateringen ble avbrutt.';
$lang['update_check_disabled'] = 'Automatiske oppdateringssjekker er deaktivert. Aktiver dem for å se oppdateringer.';
$lang['update_check_error'] = 'Kunne ikke kjøre oppdateringssjekken for øyeblikket.';
$lang['update_check_success'] = 'Oppdateringssjekk fullført.';
$lang['update_install_error'] = 'Pakken kunne ikke installeres. Forrige versjon ble beholdt.';
$lang['update_install_success'] = 'Pakke oppdatert til nyeste versjon.';
$lang['update_interval_3days'] = 'Hver 3. dag';
$lang['update_interval_biweekly'] = 'Hver 2. uke';
$lang['update_interval_daily'] = 'Hver dag';
$lang['update_interval_monthly'] = 'En gang i måneden';
$lang['update_interval_weekly'] = 'En gang i uken';
$lang['update_not_available'] = 'Nettstedet ditt er oppdatert.';
$lang['update_rollback_confirm'] = 'Er du sikker på at du vil gjenopprette den forrige versjonen?';
$lang['update_rollback_error'] = 'Kunne ikke gjenopprette forrige versjon. Manuell inngripen kan være nødvendig.';
$lang['update_rollback_success'] = 'Forrige versjon gjenopprettet.';
$lang['updates_available'] = 'Tilgjengelige oppdateringer';
$lang['updates_check_now'] = 'Sjekk nå';
$lang['updates_check_now_confirm'] = 'Er du sikker på at du vil sjekke etter oppdateringer nå?';
$lang['updates_current_version'] = 'Gjeldende versjon';
$lang['updates_enable'] = 'Aktiver oppdateringer';
$lang['updates_last_check'] = 'Siste sjekk: %s';
$lang['updates_latest_version'] = 'Nyeste versjon';
$lang['updates_next_check'] = 'Neste planlagte sjekk: %s';
$lang['updates_previous_version'] = 'Forrige versjon';
$lang['updates_recent'] = 'Nylig oppdatert';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Blokkering av den angitte IP-adressen mislyktes.';
$lang['admin_firewall_ban_success'] = 'IP-adressen er blitt blokkert.';
$lang['admin_firewall_block_ip'] = 'Blokker IP-adresse';
$lang['admin_firewall_delete_confirm'] = 'Er du sikker på at du vil oppheve blokkeringen av de valgte IP-adressene?';
$lang['admin_firewall_delete_error'] = 'Opphevelse av blokkeringen av de valgte IP-adressene mislyktes.';
$lang['admin_firewall_delete_success'] = 'De valgte IP-adressene er blitt opphevet blokkering.';
$lang['admin_firewall_duration'] = 'Blokkeringsvarighet';
$lang['admin_firewall_permanent'] = 'Permanent';
$lang['admin_firewall_reason'] = 'Blokkeringsårsak';
$lang['admin_firewall_tip'] = 'Se og administrer IP-adresser som er blokkert av brannmuren på grunn av gjentatte overtredelser eller mistenkelig aktivitet.';

// Settings
$lang['404_ban_duration'] = '404 Utestengelsesvarighet';
$lang['404_threshold'] = '404-streikegrense';
$lang['uri_ban_duration'] = 'URI-utestengelsesvarighet';
$lang['uri_strike_threshold'] = 'URI-streikegrense';
