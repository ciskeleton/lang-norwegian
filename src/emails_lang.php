<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Systemoppdateringer tilgjengelig';
$lang['emails_updates_available_message'] = <<<EOT
Hei,

Nye systemoppdateringer er oppdaget for {site_anchor}.

Disse oppdateringene kan inkludere sikkerhetsrettinger, ytelsesforbedringer eller nye funksjoner.
Vi anbefaler at du gjennomgår dem så snart som mulig.

Du kan gjennomgå og administrere de tilgjengelige oppdateringene fra administrasjonsdashbordet:
{link}

Hvis du allerede har gjennomgått eller installert oppdateringene, er det ikke nødvendig med ytterligere handlinger.

Dette er en automatisk systemmelding sendt av {site_name}.
Vennligst ikke svar på denne e-posten.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Kontoaktivering';
$lang['emails_account_activation_request_message'] = <<<EOT
Hei {name},

Takk for registreringen på {site_anchor}. Kontoen din er opprettet og må aktiveres før du kan bruke den.

For å aktivere kontoen din, klikk på følgende lenke eller kopier og lim den inn i nettleseren din:
{link}

Med vennlig hilsen,
-- {site_name} team.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Ny aktiveringslenke';
$lang['emails_account_activation_resend_message'] = <<<EOT
Hei {name},

Du har nylig bedt om en ny aktiveringslenke på {site_anchor} fordi kontoen din ikke var aktiv.
For å aktivere kontoen din, klikk på følgende lenke eller kopier og lim den inn i nettleseren din:
{link}

Hvis du ikke ba om dette, kreves det ingen ytterligere handling.

Denne handlingen ble bedt om fra denne IP-adressen: {ip_link}.

Med vennlig hilsen,
-- {site_name} team.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Konto aktivert';
$lang['emails_account_activation_success_message'] = <<<EOT
Hei {name},

Kontoen din på {site_anchor} har blitt aktivert. Du kan nå <a href="{login_url}" target="_blank" rel="noopener">logge inn</a> når som helst.

Vi håper du vil nyte oppholdet ditt.

Med vennlig hilsen,
-- {site_name} team.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Konto venter på godkjenning';
$lang['emails_account_approval_pending_message'] = <<<EOT
Hei {name},

Takk for at du ble med på {site_anchor}. Kontoen din er opprettet, men må godkjennes av en administrator før den blir aktiv.
Vi beklager dette ekstra trinnet - det er kun av sikkerhetsmessige årsaker.

Du vil motta en bekreftelses-e-post så snart kontoen din er godkjent.

Vi håper du vil nyte oppholdet ditt.

Med vennlig hilsen,
-- {site_name} team.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Konto godkjent';
$lang['emails_account_approval_success_message'] = <<<EOT
Hei {name},

Gode nyheter! Kontoen din på {site_anchor} har nettopp blitt godkjent.

Du kan nå logge inn og begynne å bruke kontoen din umiddelbart:
{link}

Vi er glade for å ha deg med oss.

Med vennlig hilsen,
-- {site_name} team.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Konto gjenopprettet';
$lang['emails_account_restored_message'] = <<<EOT
Hei {name},

Denne e-posten bekrefter at kontoen din på {site_anchor} har blitt gjenopprettet.

Velkommen tilbake! Vi håper du vil nyte oppholdet ditt denne gangen.

Med vennlig hilsen,
-- {site_name} team.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Velkommen til {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Hei {name},

De fleste folk har virkelig lange velkomst-e-postsekvenser etter at du har registrert deg på siden deres.

Gode nyheter: vi er ikke som de fleste folk.
Men, vi vil likevel ønske deg velkommen og takke deg for at du ble med oss på {site_anchor}.

Vi håper du vil nyte oppholdet ditt. Vennligst ta imot vår vennlige hilsen.

-- {site_name} team.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Forespørsel om e-postendring';
$lang['emails_email_change_request_message'] = <<<EOT
Hei {name},

Du mottar denne e-posten fordi vi har mottatt en forespørsel om å endre e-post for kontoen din på {site_anchor}.

Klikk på følgende lenke eller kopier og lim den inn i nettleseren din hvis du vil fortsette:
{link}

Hvis du ikke har bedt om å endre e-postadresse, er det ikke nødvendig med ytterligere handling.

Denne handlingen ble bedt om fra denne IP-adressen: {ip_link}.

Med vennlig hilsen,
-- {site_name} team.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'E-postadresse endret';
$lang['emails_email_change_success_message'] = <<<EOT
Hei {name},

Denne e-posten bekrefter at e-postadressen din brukt på {site_anchor} har blitt endret.

Hvis du ikke utførte denne handlingen, vennligst kontakt oss så snart som mulig for å løse dette problemet.

Denne handlingen ble utført fra denne IP-adressen: {ip_link}.

Med vennlig hilsen,
-- {site_name} team.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Varsel om mislykket innlogging';
$lang['emails_login_alert_failure_message'] = <<<EOT
Hei {name},

Nylig har noen forsøkt å logge inn på din {site_name}-konto med feil passord.

Serverdato: {date}
Enhet: {browser}, {platform}
IP-adresse: {ip_link}

Hvis det ikke var deg, ikke bekymre deg - innloggingsforsøket mislyktes.

Hvis det var deg, men du ikke husker passordet ditt, klikk på lenken nedenfor for å tilbakestille det:
{reset_link}

Hvis du har problemer med å logge inn, kontakt teamet vårt eller be om en engangspåloggingslenke.

-- {site_name} team.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Varsel om vellykket innlogging';
$lang['emails_login_alert_success_message'] = <<<EOT
Hei {name},

Vi sender deg denne e-posten etter en vellykket innlogging til din {site_name}-konto.

Serverdato: {date}
Enhet: {browser}, {platform}
IP-adresse: {ip_link}

Hvis det var deg, kan du trygt ignorere denne e-posten.

Hvis det ikke var deg, vennligst endre passordet ditt umiddelbart for å sikre kontoen din.

Kontakt oss hvis du trenger hjelp.

-- {site_name} team.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Rask innloggingslenke';
$lang['emails_login_magic_link_message'] = <<<EOT
Hei {name},

Her er din magiske lenke for å logge inn på din {site_name}-konto.

Klikk på lenken nedenfor for å logge inn:
{link}

Lenken utløper: {time}

Hvis du ikke ba om denne lenken, kan du ignorere denne e-posten.

Med vennlig hilsen,
-- {site_name} team.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Tofaktorautentisering';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Hei {name},

Din to-faktor autentiseringskode er: <strong>{code}</strong>

Du kan alltid deaktivere to-faktor autentisering i kontoinnstillingene dine.

Denne handlingen ble utført fra denne IP-adressen: {ip_link}.

Med vennlig hilsen,
-- {site_name} team.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Forespørsel om tilbakestilling av passord';
$lang['emails_password_change_request_message'] = <<<EOT
Hei {name},

Du mottar denne e-posten fordi vi har mottatt en forespørsel om tilbakestilling av passord for kontoen din på {site_name}.

Klikk på følgende lenke eller kopier og lim den inn i nettleseren din hvis du vil fortsette:
{link}

Hvis du ikke ba om tilbakestilling av passord, er ingen ytterligere handling nødvendig.

Denne handlingen ble bedt om fra denne IP-adressen: {ip_link}.

Med vennlig hilsen,
-- {site_name} team.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Passordet ble endret';
$lang['emails_password_change_success_message'] = <<<EOT
Hei {name},

Denne e-posten bekrefter at passordet ditt på {site_name} har blitt endret med hell. Du kan nå <a href="{login_url}" target="_blank" rel="noopener">logge inn</a> med det nye passordet.

Hvis du ikke utførte denne handlingen, vennligst kontakt oss så snart som mulig for å løse dette problemet.

Denne handlingen ble utført fra denne IP-adressen: {ip_link}.

Med vennlig hilsen,
-- {site_name} team.
EOT;
