<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Nastavitve',
    'settings_save' => 'Shrani nastavitve',
    'settings_save_success' => 'Nastavitve shranjene',

    // App Settings
    'app_customization' => 'Prilagoditev',
    'app_features_security' => 'Lastnosti & Varnost',
    'app_name' => 'Ime aplikacije',
    'app_name_desc' => 'To ime je prikazano v glavi in vsaki sistemski e-pošti.',
    'app_name_header' => 'Prikaži ime v glavi',
    'app_public_access' => 'Javni dostop',
    'app_public_access_desc' => 'Če omogočite to možnost, bo obiskovalcem, ki niso prijavljeni, omogočen dostop do vsebine v BookStack.',
    'app_public_access_desc_guest' => 'Dostop za javne obiskovalce je mogoče nadzorovati prek uporabnika "Gost".',
    'app_public_access_toggle' => 'Dovoli javni dostop',
    'app_public_viewing' => 'Dovoli javni pregled?',
    'app_secure_images' => 'Nalaganje slik z večjo varnostjo',
    'app_secure_images_toggle' => 'Omogoči nalaganje slik z večjo varnostjo',
    'app_secure_images_desc' => 'Zaradi delovanja so vse slike javne. Ta možnost doda naključni, hard-to-guess niz pred Url-ji slike. Prepričajte se, da indeksi imenikov niso omogočeni, da preprečite enostaven dostop.',
    'app_editor' => 'Urejevalnik strani',
    'app_editor_desc' => 'Izberite urejevalnik, ki bodo uporabniki uporabljali za urejanje strani.',
    'app_custom_html' => 'Po meri HTML vsebina glave',
    'app_custom_html_desc' => 'Katerakoli vsebina dodana tukaj, bo vstavljena na dno <head> dela vsake strani. To je uporabno za uporabo prevladujočih slogov ali dodajanje analitike.',
    'app_custom_html_disabled_notice' => 'Po meri narejena HTML glava vsebine je onemogočena na tej strani z nastavitvami, da se zagotovi, da bodo morebitne zrušitve lahko povrnjene.',
    'app_logo' => 'Logotip aplikacije',
    'app_logo_desc' => 'Ta slika bi morala biti 43px visoka. <br>Velike slike bodo pomanjšane.',
    'app_primary_color' => 'Osnovna barva aplikacije',
    'app_primary_color_desc' => 'Nastavi osnovno barvo za aplikacijo vključno s pasico, gumbi in povezavami.',
    'app_homepage' => 'Domača stran aplikacije',
    'app_homepage_desc' => 'Izberi pogled, da se pokaže na domači strani, namesto osnovnega pogleda. Dovoljenja strani so prezrta za izbrane strani.',
    'app_homepage_select' => 'Izberi stran',
    'app_footer_links' => 'Povezave v nogi',
    'app_footer_links_desc' => 'Dodaj URL povezave, ki bodo na voljo v nogi spletne strani. Povezave bodo vidne na dnu večine strani, vključno s tistimi, ki ne zahtevajo prijave. Na voljo imate oznako "trans::<key>" za uporabo sistemskih prevodov. Na primer: uporaba oznake "trans::common.privacy_policy" bo poskrbela za prevod besedila "Privacy Policy" in oznaka "trans::common.terms_of_service" bo poskrbela za prevod besedila "Terms of Service".',
    'app_footer_links_label' => 'Oznaka povezave',
    'app_footer_links_url' => 'Naslov URL povezave',
    'app_footer_links_add' => 'Dodaj povezavo v nogo',
    'app_disable_comments' => 'Onemogoči komentarje',
    'app_disable_comments_toggle' => 'Onemogoči komentarje',
    'app_disable_comments_desc' => 'Onemogoči komentarje na vseh straneh v aplikaciji. <br> Obstoječi komentarji se ne prikazujejo.',

    // Color settings
    'content_colors' => 'Barve vsebine',
    'content_colors_desc' => 'Nastavi barve za vse elemente v hierarhiji. Izbor barv s podobno barvno svetlostjo je priporočljivo za osnovne barve za branje.',
    'bookshelf_color' => 'Barva police',
    'book_color' => 'knjiga barv',
    'chapter_color' => 'barvno poglavje',
    'page_color' => 'Stran barv',
    'page_draft_color' => 'stran osnutka barv',

    // Registration Settings
    'reg_settings' => 'registracija',
    'reg_enable' => 'onemogočena registracija',
    'reg_enable_toggle' => 'omogočena registracija',
    'reg_enable_desc' => 'Ko je registracija omogočena, se  bo uporabnik lahko prijavil sam kot uporabnik aplikacije. Po registraciji je uporabniku dodeljena ena prevzeta vloga.',
    'reg_default_role' => 'prevzeta uporabniška vloga po registraciji',
    'reg_enable_external_warning' => 'Ta možnosti je ignorirana ko zunanja LDAP ali SAML avtentikacija je akitivna. Uporabniški računi za ne obstoječe uporabnike bodo avtomatsko izdelani, če avtentikacija zunanjih uporabljenih sistemov je uspešna.',
    'reg_email_confirmation' => 'potrditev e-pošte',
    'reg_email_confirmation_toggle' => 'potrebna potrditev e-pošte',
    'reg_confirm_email_desc' => 'Če uporabite omejitev domene, bo potrebna potrditev e-pošte in ta možnost bo prezrta.',
    'reg_confirm_restrict_domain' => 'omejitev domene',
    'reg_confirm_restrict_domain_desc' => 'Vnesite seznam domen, ločenih z vejico, na katere želite omejiti registracijo. Uporabnik bo prejel e-pošto za potrditev naslova, preden bo omogočena interakcija z aplikacijo. <br> Upoštevajte, da uporabnik po uspešni registrciji lahko spremeni svoj e-poštni naslov.',
    'reg_confirm_restrict_domain_placeholder' => 'Brez omejitev',

    // Maintenance settings
    'maint' => 'Vzdrževanje',
    'maint_image_cleanup' => 'Odstrani /počisti slike',
    'maint_image_cleanup_desc' => 'Pregleda vsebino strani in revizij ter ugotovi, katere slike in risbe so v uporabi in katere so odvečne. Preden to poženeš, naredi popolno varnostno kopijo podatkovne zbirke in slik.',
    'maint_delete_images_only_in_revisions' => 'Izbriši tudi slike, ki obstajajo le v starih različicah strani',
    'maint_image_cleanup_run' => 'Zaženi čiščenje',
    'maint_image_cleanup_warning' => 'Najdenih je bilo :count verjetno neuporabljenih slik. Ali si prepričan, da želiš odstraniti izbrane slike?',
    'maint_image_cleanup_success' => ':count verjetno neuporavljenih slik je bilo najdenih in izbrisanih!',
    'maint_image_cleanup_nothing_found' => 'Ni bilo najdenih neuporabljenih slik, nič ni izbrisano!',
    'maint_send_test_email' => 'Pošlji testno e-pismo',
    'maint_send_test_email_desc' => 'To pošlje testno e-pošto na vaš e-poštni naslov, naveden v vašem profilu.',
    'maint_send_test_email_run' => 'Pošlji testno sporočilo',
    'maint_send_test_email_success' => 'e-pošta poslana na :naslov',
    'maint_send_test_email_mail_subject' => 'Testno e-sporočilo',
    'maint_send_test_email_mail_greeting' => 'Zdi se, da dostava e-pošte deluje!',
    'maint_send_test_email_mail_text' => 'Čestitke! Če ste prejeli e-poštno obvestilo so bile vaše e-poštne nastavitve pravilno konfigurirane.',
    'maint_recycle_bin_desc' => 'Izbrisane police, knjige, poglavja in strani se pošljejo v koš, da jih je mogoče obnoviti ali trajno izbrisati. Starejše predmete v košu lahko čez nekaj časa samodejno odstranite, odvisno od konfiguracije sistema.',
    'maint_recycle_bin_open' => 'Odpri koš',

    // Recycle Bin
    'recycle_bin' => 'Koš',
    'recycle_bin_desc' => 'Tu lahko obnovite predmete, ki so bili izbrisani, ali pa jih trajno odstranite s sistema. Ta seznam je nefiltriran, za razliko od podobnih seznamov dejavnosti v sistemu, kjer se uporabljajo filtri dovoljenj.',
    'recycle_bin_deleted_item' => 'Izbrisan element',
    'recycle_bin_deleted_parent' => 'Parent',
    'recycle_bin_deleted_by' => 'Izbrisal uporabnik',
    'recycle_bin_deleted_at' => 'Čas izbrisa',
    'recycle_bin_permanently_delete' => 'Trajno izbrišem?',
    'recycle_bin_restore' => 'Obnovi',
    'recycle_bin_contents_empty' => 'Koš je prazen',
    'recycle_bin_empty' => 'Izprazni koš',
    'recycle_bin_empty_confirm' => 'S tem boste trajno uničili vse predmete v košu, vključno z vsebino vsakega predmeta. Ali ste prepričani, da želite izprazniti koš?',
    'recycle_bin_destroy_confirm' => 'S tem dejanjem boste ta element skupaj s spodaj navedenimi podrejenimi elementi trajno izbrisali iz sistema in te vsebine ne boste mogli obnoviti. Ali ste prepričani, da želite trajno izbrisati ta element?',
    'recycle_bin_destroy_list' => 'Predmeti, ki naj bodo trajno izbrisani',
    'recycle_bin_restore_list' => 'Predmeti, ki naj bodo obnovljeni',
    'recycle_bin_restore_confirm' => 'S tem dejanjem boste izbrisani element, vključno z vsemi podrejenimi elementi, obnovili na prvotno mesto. Če je bilo prvotno mesto od takrat izbrisano in je zdaj v košu, bo treba obnoviti tudi nadrejeni element.',
    'recycle_bin_restore_deleted_parent' => 'Nadrejeni element je bil prav tako izbrisan. Dokler se ne obnovi nadrejenega elementa, ni mogoče obnoviti njemu podrejenih elementov.',
    'recycle_bin_restore_parent' => 'Restore Parent',
    'recycle_bin_destroy_notification' => 'Izbrisano :count skupno število elementov iz koša.',
    'recycle_bin_restore_notification' => 'Obnovljeno :count skupno število elementov iz koša.',

    // Audit Log
    'audit' => 'Dnevnik dogodkov',
    'audit_desc' => 'Ta dnevnik dogodkov prikazuje seznam dejavnosti, ki jim sledi sistem. Seznam je nefiltriran, za razliko od podobnih seznamov dejavnosti v sistemu, kjer se uporabljajo filtri dovoljenj.',
    'audit_event_filter' => 'Filter dogodkov',
    'audit_event_filter_no_filter' => 'Ni filtra',
    'audit_deleted_item' => 'Izbrisan element',
    'audit_deleted_item_name' => 'Naziv: :name',
    'audit_table_user' => 'Uporabnik',
    'audit_table_event' => 'Dogodek',
    'audit_table_related' => 'Povezani predmet ali podrobnost',
    'audit_table_ip' => 'IP Address',
    'audit_table_date' => 'Datum zadnje dejavnosti',
    'audit_date_from' => 'Časovno obdobje od',
    'audit_date_to' => 'Časovno obdobje do',

    // Role Settings
    'roles' => 'Vloge',
    'role_user_roles' => 'Vloge uporabnika',
    'role_create' => 'Ustvari novo vlogo',
    'role_create_success' => 'Vloga uspešno ustvarjena',
    'role_delete' => 'Brisanje vloge',
    'role_delete_confirm' => 'Izbrisana bo vloga z imenom \':roleName\'.',
    'role_delete_users_assigned' => 'Ta vloga ima dodeljenih :userCount uporabnikov. V kolikor želite uporabnike preseliti iz te vloge, spodaj izberite novo vlogo.',
    'role_delete_no_migration' => "Ne prenašaj uporabnikov",
    'role_delete_sure' => 'Ali ste prepričani, da želite izbrisati to vlogo?',
    'role_delete_success' => 'Vloga uspešno izbrisana',
    'role_edit' => 'Uredi vlogo',
    'role_details' => 'Podrobnosti vloge',
    'role_name' => 'Naziv vloge',
    'role_desc' => 'Kratki opis vloge',
    'role_mfa_enforced' => 'Requires Multi-Factor Authentication',
    'role_external_auth_id' => 'Zunanje dokazilo ID',
    'role_system' => 'Sistemska dovoljenja',
    'role_manage_users' => 'Upravljanje uporabnikov',
    'role_manage_roles' => 'Upravljanje vlog in dovoljenja vlog',
    'role_manage_entity_permissions' => 'Upravljanje dovoljenj vseh knjig, poglavij in strani',
    'role_manage_own_entity_permissions' => 'Upravljanje dovoljenj za svojo knjigo, poglavje in strani',
    'role_manage_page_templates' => 'Uredi predloge',
    'role_access_api' => 'API za dostop do sistema',
    'role_manage_settings' => 'Nastavitve za upravljanje',
    'role_export_content' => 'Export content',
    'role_asset' => 'Sistemska dovoljenja',
    'roles_system_warning' => 'Zavedajte se, da lahko dostop do kateregakoli od zgornjih treh dovoljenj uporabniku omogoči, da spremeni lastne privilegije ali privilegije drugih v sistemu. Vloge s temi dovoljenji dodelite samo zaupanja vrednim uporabnikom.',
    'role_asset_desc' => 'Ta dovoljenja nadzorujejo privzeti dostop do sredstev v sistemu. Dovoljenja za knjige, poglavja in strani bodo razveljavila ta dovoljenja.',
    'role_asset_admins' => 'Skrbniki samodejno pridobijo dostop do vseh vsebin, vendar lahko te možnosti prikažejo ali pa skrijejo možnosti uporabniškega vmesnika.',
    'role_all' => 'Vse',
    'role_own' => 'Lasten',
    'role_controlled_by_asset' => 'Nadzira ga sredstvo, v katerega so naloženi',
    'role_save' => 'Shrani vlogo',
    'role_update_success' => 'Vloga uspešno posodobljena',
    'role_users' => 'Uporabniki v tej vlogi',
    'role_users_none' => 'Tej vlogi trenutno ni dodeljen noben uporabnik',

    // Users
    'users' => 'Uporabniki',
    'user_profile' => 'Uporabniški profil',
    'users_add_new' => 'Dodaj novega uporabnika',
    'users_search' => 'Išči uporabnike',
    'users_latest_activity' => 'Zadnja dejavnost',
    'users_details' => 'Podatki o uporabniku',
    'users_details_desc' => 'Nastavite prikazno ime in e-poštni naslov za tega uporabnika. E-poštni naslov bo uporabljen za prijavo v aplikacijo.',
    'users_details_desc_no_email' => ' Nastavite prikazno ime za tega uporabnika, da ga bodo drugi lahko prepoznali.',
    'users_role' => 'Vloge uporabnika',
    'users_role_desc' => 'Izberi vloge, ki bodo dodeljene uporabniku. Če je uporabniku dodeljenih več vlog, se dovoljenja združijo in prejmenjo vsa dovoljenja dodeljenih vlog.',
    'users_password' => 'Uporabniško geslo',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 8 characters long.',
    'users_send_invite_text' => 'Uporabniku lahko pošljete e-poštno sporočilo s povabilom, ki mu omogoča, da nastavi svoje geslo, ali pa ga nastavite kar sami.',
    'users_send_invite_option' => 'Pošlji uporabniku e-poštno povabilo',
    'users_external_auth_id' => 'Zunanje dokazilo ID',
    'users_external_auth_id_desc' => 'To je ID, s katerim se ta uporabnik ujema pri komunikaciji z vašim zunanjim sistemom za preverjanje pristnosti.',
    'users_password_warning' => 'Spodaj izpolni le, če želiš spremeniti geslo.',
    'users_system_public' => 'Ta uporabnik predstavlja vse gostujoče uporabnike, ki obiščejo vašo wiki stran. Za prijavo je ni mogoče uporabiti, ampak je dodeljena samodejno.',
    'users_delete' => 'Brisanje uporabnika',
    'users_delete_named' => 'Brisanje uporabnika :userName',
    'users_delete_warning' => 'Iz sistema se bo popolnoma  izbrisal uporabnik z imenom \':userName\'',
    'users_delete_confirm' => 'Ste prepričani, da želite izbrisati tega uporabnika?',
    'users_migrate_ownership' => 'Prenesi lastništvo',
    'users_migrate_ownership_desc' => 'Izberite uporabnika, če želite nanj prenesti lastništvo vseh vnosov.',
    'users_none_selected' => 'Ni izbranega uporabnika',
    'users_delete_success' => 'Uporabnik uspešno odstranjen',
    'users_edit' => 'Uredi uporabnika',
    'users_edit_profile' => 'Uredi profil',
    'users_edit_success' => 'Uporabnik uspešno posodobljen',
    'users_avatar' => 'Uporabnikov avatar',
    'users_avatar_desc' => 'Izberi sliko, ki predstavlja uporabnika. Velikost mora biti približno 256px.',
    'users_preferred_language' => 'Izbrani jezik',
    'users_preferred_language_desc' => 'Ta možnost bo spremenila jezik, ki se uporablja za uporabniški vmesnik aplikacije. To ne bo vplivalo na nobeno vsebino, ki jo ustvari uporabnik.',
    'users_social_accounts' => 'Družbene ikone / računi',
    'users_social_accounts_info' => 'Tu lahko za hitrejšo in lažjo prijavo povežete druge račune. Prekinitev povezave računa tukaj ne prekliče predhodno odobrenega dostopa. Prekličite dostop iz nastavitev profila v povezanem družabnem računu.',
    'users_social_connect' => 'Povežite račun',
    'users_social_disconnect' => 'Odklop računa',
    'users_social_connected' => ':socialAccount račun je bil uspešno dodan vašemu profilu.',
    'users_social_disconnected' => ':socialAccount račun je bil uspešno odstranjen iz vašega profila.',
    'users_api_tokens' => 'API žeton',
    'users_api_tokens_none' => 'Nič API žetonov ni bilo ustvarjenih za uporabnika',
    'users_api_tokens_create' => 'Ustvari žeton',
    'users_api_tokens_expires' => 'Poteče',
    'users_api_tokens_docs' => 'API dokumentacija',
    'users_mfa' => 'Multi-Factor Authentication',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'Ustvari žeton',
    'user_api_token_name' => 'Ime',
    'user_api_token_name_desc' => 'Dajte žetonu berljivo ime kot prihodnji opomnik o predvidenem namenu.',
    'user_api_token_expiry' => 'Datum poteka',
    'user_api_token_expiry_desc' => 'Določi datum izteka uporabnosti žetona. Po tem datumu, zahteve poslane s tem žetonom, ne bodo več delovale. 
Če pustite to polje prazno, bo iztek uporabnosti 100.let .',
    'user_api_token_create_secret_message' => 'Takoj po ustvarjanju tega žetona se ustvari in prikaže "Token ID" "in" Token Secret ". Skrivnost bo prikazana samo enkrat, zato se pred nadaljevanjem prepričajte o varnosti kopirnega mesta.',
    'user_api_token_create_success' => 'API žeton uspešno ustvarjen',
    'user_api_token_update_success' => 'API žeton uspešno posodobljen',
    'user_api_token' => 'API žeton',
    'user_api_token_id' => 'Žeton ID',
    'user_api_token_id_desc' => 'To je sistemski identifikator, ki ga ni mogoče urejati za ta žeton in ga je treba navesti v zahtevah za API.',
    'user_api_token_secret' => 'Skrivnost žetona',
    'user_api_token_secret_desc' => 'To je sistemsko ustvarjena skrivnost za ta žeton, ki jo bo treba navesti v zahtevah za API. To bo prikazano samo enkrat, zato kopirajte to vrednost na varno mesto.',
    'user_api_token_created' => 'Žeton ustvarjen :timeAgo',
    'user_api_token_updated' => 'Žeton posodobljen :timeAgo',
    'user_api_token_delete' => 'Briši žeton',
    'user_api_token_delete_warning' => 'Iz sistema se bo popolnoma  izbrisal API žeton z imenom \':tokenName\' ',
    'user_api_token_delete_confirm' => 'Ali ste prepričani, da želite izbrisati ta API žeton?',
    'user_api_token_delete_success' => 'API žeton uspešno izbrisan',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_create' => 'Create New Webhook',
    'webhooks_none_created' => 'No webhooks have yet been created.',
    'webhooks_edit' => 'Edit Webhook',
    'webhooks_save' => 'Save Webhook',
    'webhooks_details' => 'Webhook Details',
    'webhooks_details_desc' => 'Provide a user friendly name and a POST endpoint as a location for the webhook data to be sent to.',
    'webhooks_events' => 'Webhook Events',
    'webhooks_events_desc' => 'Select all the events that should trigger this webhook to be called.',
    'webhooks_events_warning' => 'Keep in mind that these events will be triggered for all selected events, even if custom permissions are applied. Ensure that use of this webhook won\'t expose confidential content.',
    'webhooks_events_all' => 'All system events',
    'webhooks_name' => 'Webhook Name',
    'webhooks_timeout' => 'Webhook Request Timeout (Seconds)',
    'webhooks_endpoint' => 'Webhook Endpoint',
    'webhooks_active' => 'Webhook Active',
    'webhook_events_table_header' => 'Events',
    'webhooks_delete' => 'Delete Webhook',
    'webhooks_delete_warning' => 'This will fully delete this webhook, with the name \':webhookName\', from the system.',
    'webhooks_delete_confirm' => 'Are you sure you want to delete this webhook?',
    'webhooks_format_example' => 'Webhook Format Example',
    'webhooks_format_example_desc' => 'Webhook data is sent as a POST request to the configured endpoint as JSON following the format below. The "related_item" and "url" properties are optional and will depend on the type of event triggered.',
    'webhooks_status' => 'Webhook Status',
    'webhooks_last_called' => 'Last Called:',
    'webhooks_last_errored' => 'Last Errored:',
    'webhooks_last_error_message' => 'Last Error Message:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'danščina',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
