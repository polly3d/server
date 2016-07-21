<?php

/**
 * This configuration file is only provided to document the different
 * configuration options and their usage.
 *
 * DO NOT COMPLETELY BASE YOUR CONFIGURATION FILE ON THIS SAMPLE. THIS MAY BREAK
 * YOUR INSTANCE. Instead, manually copy configuration switches that you
 * consider important for your instance to your working ``config.php``, and
 * apply configuration options that are pertinent for your instance.
 *
 * This file is used to generate the configuration documentation. 
 * Please consider following requirements of the current parser:
 *  * all comments need to start with `/**` and end with ` *\/` - each on their
 *    own line
 *  * add a `@see CONFIG_INDEX` to copy a previously described config option
 *    also to this line
 *  * everything between the ` *\/` and the next `/**` will be treated as the
 *    config option
 *  * use RST syntax
 */

$CONFIG = array(


/**
 * Default Parameters
 *
 * These parameters are configured by the Nextcloud installer, and are required
 * for your Nextcloud server to operate.
 */


/**
 * This is a unique identifier for your Nextcloud installation, created
 * automatically by the installer. This example is for documentation only,
 * and you should never use it because it will not work. A valid ``instanceid``
 * is created when you install Nextcloud.
 *
 * 'instanceid' => 'd3c944a9a',
 */
'instanceid' => '',

 /**
  * The salt used to hash all passwords, auto-generated by the Nextcloud
  * installer. (There are also per-user salts.) If you lose this salt you lose
  * all your passwords. This example is for documentation only, and you should
  * never use it.
  *
  * @deprecated This salt is deprecated and only used for legacy-compatibility,
  * developers should *NOT* use this value for anything nowadays.
  *
  * 'passwordsalt' => 'd3c944a9af095aa08f',
 */
'passwordsalt' => '',

/**
 * Your list of trusted domains that users can log into. Specifying trusted
 * domains prevents host header poisoning. Do not remove this, as it performs
 * necessary security checks.
 */
'trusted_domains' =>
  array (
    'demo.example.org',
    'otherdomain.example.org',
  ),


/**
 * Where user files are stored; this defaults to ``data/`` in the Nextcloud
 * directory. The SQLite database is also stored here, when you use SQLite.
 */
'datadirectory' => '/var/www/nextcloud/data',

/**
 * The current version number of your Nextcloud installation. This is set up
 * during installation and update, so you shouldn't need to change it.
 */
'version' => '',

/**
 * Identifies the database used with this installation. See also config option
 * ``supportedDatabases``
 *
 * Available:
 * 	- sqlite (SQLite3)
 * 	- mysql (MySQL/MariaDB)
 * 	- pgsql (PostgreSQL)
 * 	- oci (Oracle)
 */
'dbtype' => 'sqlite',

/**
 * Your host server name, for example ``localhost``, ``hostname``,
 * ``hostname.example.com``, or the IP address. To specify a port use
 * ``hostname:####``; to specify a Unix socket use
 * ``localhost:/path/to/socket``.
 */
'dbhost' => '',

/**
 * The name of the Nextcloud database, which is set during installation. You
 * should not need to change this.
 */
'dbname' => 'nextcloud',

/**
 * The user that Nextcloud uses to write to the database. This must be unique
 * across Nextcloud instances using the same SQL database. This is set up during
 * installation, so you shouldn't need to change it.
 */
'dbuser' => '',

/**
 * The password for the database user. This is set up during installation, so
 * you shouldn't need to change it.
 */
'dbpassword' => '',

/**
 * Prefix for the Nextcloud tables in the database.
 */
'dbtableprefix' => '',

/**
 * Indicates whether the Nextcloud instance was installed successfully; ``true``
 * indicates a successful installation, and ``false`` indicates an unsuccessful
 * installation.
 */
'installed' => false,


/**
 * User Experience
 *
 * These optional parameters control some aspects of the user interface. Default
 * values, where present, are shown.
 */

/**
 * This sets the default language on your Nextcloud server, using ISO_639-1
 * language codes such as ``en`` for English, ``de`` for German, and ``fr`` for
 * French. It overrides automatic language detection on public pages like login
 * or shared items. User's language preferences configured under "personal ->
 * language" override this setting after they have logged in.
 */
'default_language' => 'en',

/**
 * Set the default app to open on login. Use the app names as they appear in the
 * URL after clicking them in the Apps menu, such as documents, calendar, and
 * gallery. You can use a comma-separated list of app names, so if the first
 * app is not enabled for a user then Nextcloud will try the second one, and so
 * on. If no enabled apps are found it defaults to the Files app.
 */
'defaultapp' => 'files',

/**
 * ``true`` enables the Help menu item in the user menu (top right of the
 * Nextcloud Web interface). ``false`` removes the Help item.
 */
'knowledgebaseenabled' => true,

/**
 * ``true`` enables avatars, or user profile photos. These appear on the User
 * page, on user's Personal pages and are used by some apps (contacts, mail,
 * etc). ``false`` disables them.
 */
'enable_avatars' => true,

/**
 * ``true`` allows users to change their display names (on their Personal
 * pages), and ``false`` prevents them from changing their display names.
 */
'allow_user_to_change_display_name' => true,

/**
 * Lifetime of the remember login cookie, which is set when the user clicks the
 * ``remember`` checkbox on the login screen. The default is 15 days, expressed
 * in seconds.
 */
'remember_login_cookie_lifetime' => 60*60*24*15,

/**
 * The lifetime of a session after inactivity; the default is 24 hours,
 * expressed in seconds.
 */
'session_lifetime' => 60 * 60 * 24,

/**
 * Enable or disable session keep-alive when a user is logged in to the Web UI.
 * Enabling this sends a "heartbeat" to the server to keep it from timing out.
 */
'session_keepalive' => true,

/**
 * The directory where the skeleton files are located. These files will be
 * copied to the data directory of new users. Leave empty to not copy any
 * skeleton files.
 */
'skeletondirectory' => '/path/to/nextcloud/core/skeleton',

/**
 * The ``user_backends`` app (which needs to be enabled first) allows you to
 * configure alternate authentication backends. Supported backends are:
 * IMAP (OC_User_IMAP), SMB (OC_User_SMB), and FTP (OC_User_FTP).
 */
'user_backends' => array(
	array(
		'class' => 'OC_User_IMAP',
		'arguments' => array('{imap.gmail.com:993/imap/ssl}INBOX')
	)
),

/**
 * If your user backend does not allow to reset the password (e.g. when it's a
 * read-only user backend like LDAP), you can specify a custom link, where the
 * user is redirected to, when clicking the "reset password" link after a failed
 * login-attempt.
 */
'lost_password_link' => 'https://example.org/link/to/password/reset',

/**
 * Mail Parameters
 *
 * These configure the email settings for Nextcloud notifications and password
 * resets.
 */

/**
 * The return address that you want to appear on emails sent by the Nextcloud
 * server, for example ``nc-admin@example.com``, substituting your own domain,
 * of course.
 */
'mail_domain' => 'example.com',

/**
 * FROM address that overrides the built-in ``sharing-noreply`` and
 * ``lostpassword-noreply`` FROM addresses.
 */
'mail_from_address' => 'nextcloud',

/**
 * Enable SMTP class debugging.
 */
'mail_smtpdebug' => false,

/**
 * Which mode to use for sending mail: ``sendmail``, ``smtp``, ``qmail`` or
 * ``php``.
 *
 * If you are using local or remote SMTP, set this to ``smtp``.
 *
 * If you are using PHP mail you must have an installed and working email system
 * on the server. The program used to send email is defined in the ``php.ini``
 * file.
 *
 * For the ``sendmail`` option you need an installed and working email system on
 * the server, with ``/usr/sbin/sendmail`` installed on your Unix system.
 *
 * For ``qmail`` the binary is /var/qmail/bin/sendmail, and it must be installed
 * on your Unix system.
 */
'mail_smtpmode' => 'sendmail',

/**
 * This depends on ``mail_smtpmode``. Specify the IP address of your mail
 * server host. This may contain multiple hosts separated by a semi-colon. If
 * you need to specify the port number append it to the IP address separated by
 * a colon, like this: ``127.0.0.1:24``.
 */
'mail_smtphost' => '127.0.0.1',

/**
 * This depends on ``mail_smtpmode``. Specify the port for sending mail.
 */
'mail_smtpport' => 25,

/**
 * This depends on ``mail_smtpmode``. This sets the SMTP server timeout, in
 * seconds. You may need to increase this if you are running an anti-malware or
 * spam scanner.
 */
'mail_smtptimeout' => 10,

/**
 * This depends on ``mail_smtpmode``. Specify when you are using ``ssl`` or
 * ``tls``, or leave empty for no encryption.
 */
'mail_smtpsecure' => '',

/**
 * This depends on ``mail_smtpmode``. Change this to ``true`` if your mail
 * server requires authentication.
 */
'mail_smtpauth' => false,

/**
 * This depends on ``mail_smtpmode``. If SMTP authentication is required, choose
 * the authentication type as ``LOGIN`` (default) or ``PLAIN``.
 */
'mail_smtpauthtype' => 'LOGIN',

/**
 * This depends on ``mail_smtpauth``. Specify the username for authenticating to
 * the SMTP server.
 */
'mail_smtpname' => '',

/**
 * This depends on ``mail_smtpauth``. Specify the password for authenticating to
 * the SMTP server.
 */
'mail_smtppassword' => '',


/**
 * Proxy Configurations
 */

/**
 * The automatic hostname detection of Nextcloud can fail in certain reverse
 * proxy and CLI/cron situations. This option allows you to manually override
 * the automatic detection; for example ``www.example.com``, or specify the port
 * ``www.example.com:8080``.
 */
'overwritehost' => '',

/**
 * When generating URLs, Nextcloud attempts to detect whether the server is
 * accessed via ``https`` or ``http``. However, if Nextcloud is behind a proxy
 * and the proxy handles the ``https`` calls, Nextcloud would not know that
 * ``ssl`` is in use, which would result in incorrect URLs being generated.
 * Valid values are ``http`` and ``https``.
 */
'overwriteprotocol' => '',

/**
 * Nextcloud attempts to detect the webroot for generating URLs automatically.
 * For example, if ``www.example.com/nextcloud`` is the URL pointing to the
 * Nextcloud instance, the webroot is ``/nextcloud``. When proxies are in use,
 * it may be difficult for Nextcloud to detect this parameter, resulting in
 * invalid URLs.
 */
'overwritewebroot' => '',

/**
 * This option allows you to define a manual override condition as a regular
 * expression for the remote IP address. For example, defining a range of IP
 * addresses starting with ``10.0.0.`` and ending with 1 to 3:
 * ``^10\.0\.0\.[1-3]$``
 */
'overwritecondaddr' => '',

/**
 * Use this configuration parameter to specify the base URL for any URLs which
 * are generated within Nextcloud using any kind of command line tools (cron or
 * occ). The value should contain the full base URL:
 * ``https://www.example.com/nextcloud``
 */
'overwrite.cli.url' => '',

/**
 * To have clean URLs without `/index.php` this parameter needs to be configured.
 *
 * This parameter will be written as "RewriteBase" on update and installation of
 * Nextcloud to your `.htaccess` file. While this value is often simply the URL
 * path of the Nextcloud installation it cannot be set automatically properly in
 * every scenario and needs thus some manual configuration.
 *
 * In a standard Apache setup this usually equals the folder that Nextcloud is
 * accessible at. So if Nextcloud is accessible via "https://mycloud.org/nextcloud"
 * the correct value would most likely be "/nextcloud". If Nextcloud is running
 * under "https://mycloud.org/" then it would be "/".
 *
 * Note that above rule is not valid in every case, there are some rare setup
 * cases where this may not apply. However, to avoid any update problems this
 * configuration value is explicitly opt-in.
 *
 * After setting this value run `occ maintenance:update:htaccess` and when following
 * conditions are met Nextcloud uses URLs without index.php in it:
 *
 * - `mod_rewrite` is installed
 * - `mod_env` is installed
 */
'htaccess.RewriteBase' => '/',

/**
 * The URL of your proxy server, for example ``proxy.example.com:8081``.
 */
'proxy' => '',

/**
 * The optional authentication for the proxy to use to connect to the internet.
 * The format is: ``username:password``.
 */
'proxyuserpwd' => '',


/**
 * Deleted Items (trash bin)
 *
 * These parameters control the Deleted files app.
 */

/**
 * If the trash bin app is enabled (default), this setting defines the policy
 * for when files and folders in the trash bin will be permanently deleted.
 * The app allows for two settings, a minimum time for trash bin retention,
 * and a maximum time for trash bin retention.
 * Minimum time is the number of days a file will be kept, after which it
 * may be deleted. Maximum time is the number of days at which it is guaranteed
 * to be deleted.
 * Both minimum and maximum times can be set together to explicitly define
 * file and folder deletion. For migration purposes, this setting is installed
 * initially set to "auto", which is equivalent to the default setting in
 * Nextloud.
 *
 * Available values:
 *
 * * ``auto``      
 *     default setting. keeps files and folders in the trash bin for 30 days 
 *     and automatically deletes anytime after that if space is needed (note: 
 *     files may not be deleted if space is not needed).
 * * ``D, auto``   
 *     keeps files and folders in the trash bin for D+ days, delete anytime if 
 *     space needed (note: files may not be deleted if space is not needed)
 * * ``auto, D``   
 *     delete all files in the trash bin that are older than D days   
 *     automatically, delete other files anytime if space needed
 * * ``D1, D2``    
 *     keep files and folders in the trash bin for at least D1 days and 
 *     delete when exceeds D2 days
 * * ``disabled``  
 *     trash bin auto clean disabled, files and folders will be kept forever
 */
'trashbin_retention_obligation' => 'auto',


/**
 * File versions
 *
 * These parameters control the Versions app.
 */

/**
 * If the versions app is enabled (default), this setting defines the policy
 * for when versions will be permanently deleted.
 * The app allows for two settings, a minimum time for version retention,
 * and a maximum time for version retention.
 * Minimum time is the number of days a version will be kept, after which it
 * may be deleted. Maximum time is the number of days at which it is guaranteed
 * to be deleted.
 * Both minimum and maximum times can be set together to explicitly define
 * version deletion. For migration purposes, this setting is installed
 * initially set to "auto", which is equivalent to the default setting in
 * Nextloud.
 *
 * Available values:
 *
 * * ``auto``      
 *     default setting. Automatically expire versions according to expire 
 *     rules. Please refer to :doc:`../configuration_files/file_versioning` for
 *     more information.
 * * ``D, auto``   
 *     keep versions at least for D days, apply expire rules to all versions 
 *     that are older than D days
 * * ``auto, D``   
 *     delete all versions that are older than D days automatically, delete 
 *     other versions according to expire rules
 * * ``D1, D2``    
 *     keep versions for at least D1 days and delete when exceeds D2 days
 * * ``disabled``  
 *     versions auto clean disabled, versions will be kept forever
 */
'versions_retention_obligation' => 'auto',

/**
 * Nextcloud Verifications
 *
 * Nextcloud performs several verification checks. There are two options,
 * ``true`` and ``false``.
 */

/**
 * Checks an app before install whether it uses private APIs instead of the
 * proper public APIs. If this is set to true it will only allow to install or
 * enable apps that pass this check.
 */
'appcodechecker' => true,

/**
 * Check if Nextcloud is up-to-date and shows a notification if a new version is
 * available.
 */
'updatechecker' => true,

/**
 * URL that Nextcloud should use to look for updates
 */
'updater.server.url' => 'https://updates.nextcloud.org/server/',

/**
 * Release channel to use for updates
 */
'updater.release.channel' => 'stable',

/**
 * Is Nextcloud connected to the Internet or running in a closed network?
 */
'has_internet_connection' => true,

/**
 * Allows Nextcloud to verify a working WebDAV connection. This is done by
 * attempting to make a WebDAV request from PHP.
 */
'check_for_working_webdav' => true,

/**
 * Allows Nextcloud to verify a working .well-known URL redirects. This is done
 * by attempting to make a request from JS to
 * https://your-domain.com/.well-known/caldav/
 */
'check_for_working_wellknown_setup' => true,

/**
 * This is a crucial security check on Apache servers that should always be set
 * to ``true``. This verifies that the ``.htaccess`` file is writable and works.
 * If it is not, then any options controlled by ``.htaccess``, such as large
 * file uploads, will not work. It also runs checks on the ``data/`` directory,
 * which verifies that it can't be accessed directly through the Web server.
 */
'check_for_working_htaccess' => true,

/**
 * In certain environments it is desired to have a read-only configuration file.
 * When this switch is set to ``true`` Nextcloud will not verify whether the
 * configuration is writable. However, it will not be possible to configure
 * all options via the Web interface. Furthermore, when updating Nextcloud
 * it is required to make the configuration file writable again for the update
 * process.
 */
'config_is_read_only' => false,

/**
 * Logging
 */

/**
 * By default the Nextcloud logs are sent to the ``owncloud.log`` file in the
 * default Nextcloud data directory.
 * If syslogging is desired, set this parameter to ``syslog``.
 * Setting this parameter to ``errorlog`` will use the PHP error_log function
 * for logging.
 */
'log_type' => 'owncloud',

/**
 * Log file path for the Nextcloud logging type.
 * Defaults to ``[datadirectory]/owncloud.log``
 */
'logfile' => '/var/log/owncloud.log',

/**
 * Loglevel to start logging at. Valid values are: 0 = Debug, 1 = Info, 2 =
 * Warning, 3 = Error, and 4 = Fatal. The default value is Warning.
 */
'loglevel' => 2,

/**
 * If you maintain different instances and aggregate the logs, you may want
 * to distinguish between them. ``syslog_tag`` can be set per instance
 * with a unique id. Only available if ``log_type`` is set to ``syslog``.
 * The default value is ``Nextcloud``.
 */
'syslog_tag' => 'Nextcloud',

/**
 * Log condition for log level increase based on conditions. Once one of these
 * conditions is met, the required log level is set to debug. This allows to
 * debug specific requests, users or apps
 *
 * Supported conditions:
 *  - ``shared_secret``: if a request parameter with the name `log_secret` is set to
 *                this value the condition is met
 *  - ``users``:  if the current request is done by one of the specified users,
 *                this condition is met
 *  - ``apps``:   if the log message is invoked by one of the specified apps,
 *                this condition is met
 *
 * Defaults to an empty array.
 */
'log.condition' => [
	'shared_secret' => '57b58edb6637fe3059b3595cf9c41b9',
	'users' => ['sample-user'],
	'apps' => ['files'],
],

/**
 * This uses PHP.date formatting; see http://php.net/manual/en/function.date.php
 */
'logdateformat' => 'F d, Y H:i:s',

/**
 * The default timezone for logfiles is UTC. You may change this; see
 * http://php.net/manual/en/timezones.php
 */
'logtimezone' => 'Europe/Berlin',

/**
 * Append all database queries and parameters to the log file. Use this only for
 * debugging, as your logfile will become huge.
 */
'log_query' => false,

/**
 * Log successful cron runs.
 */
'cron_log' => true,

/**
 * Enables log rotation and limits the total size of logfiles. The default is 0,
 * or no rotation. Specify a size in bytes, for example 104857600 (100 megabytes
 * = 100 * 1024 * 1024 bytes). A new logfile is created with a new name when the
 * old logfile reaches your limit. If a rotated log file is already present, it
 * will be overwritten.
 */
'log_rotate_size' => false,

/**
 * This section is for configuring the download links for Nextcloud clients, as
 * seen in the first-run wizard and on Personal pages.
 */
'customclient_desktop' =>
	'https://nextcloud.com/install/',
'customclient_android' =>
	'https://play.google.com/store/apps/details?id=com.nextcloud.client',
'customclient_ios' =>
	'https://itunes.apple.com/us/app/nextcloud/id1125420102?mt=8',

/**
 * Apps
 *
 * Options for the Apps folder, Apps store, and App code checker.
 */

/**
 * When enabled, admins may install apps from the Nextcloud app store.
 */
'appstoreenabled' => true,

/**
 * The URL of the appstore to use.
 */
'appstoreurl' => 'https://api.owncloud.com/v1',

/**
 * Whether to show experimental apps in the appstore interface
 *
 * Experimental apps are not checked for security issues and are new or known
 * to be unstable and under heavy development. Installing these can cause data
 * loss or security breaches.
 */
'appstore.experimental.enabled' => false,

/**
 * Use the ``apps_paths`` parameter to set the location of the Apps directory,
 * which should be scanned for available apps, and where user-specific apps
 * should be installed from the Apps store. The ``path`` defines the absolute
 * file system path to the app folder. The key ``url`` defines the HTTP Web path
 * to that folder, starting from the Nextcloud webroot. The key ``writable``
 * indicates if a Web server can write files to that folder.
 */
'apps_paths' => array(
	array(
		'path'=> '/var/www/nextcloud/apps',
		'url' => '/apps',
		'writable' => true,
	),
),

/**
 * @see appcodechecker
 */


/**
 * Previews
 *
 * Nextcloud supports previews of image files, the covers of MP3 files, and text
 * files. These options control enabling and disabling previews, and thumbnail
 * size.
 */

/**
 * By default, Nextcloud can generate previews for the following filetypes:
 *
 * - Image files
 * - Covers of MP3 files
 * - Text documents
 *
 * Valid values are ``true``, to enable previews, or
 * ``false``, to disable previews
 */
'enable_previews' => true,
/**
 * The maximum width, in pixels, of a preview. A value of ``null`` means there
 * is no limit.
 */
'preview_max_x' => 2048,
/**
 * The maximum height, in pixels, of a preview. A value of ``null`` means there
 * is no limit.
 */
'preview_max_y' => 2048,
/**
 * If a lot of small pictures are stored on the Nextcloud instance and the
 * preview system generates blurry previews, you might want to consider setting
 * a maximum scale factor. By default, pictures are upscaled to 10 times the
 * original size. A value of ``1`` or ``null`` disables scaling.
 */
'preview_max_scale_factor' => 10,

/**
 * max file size for generating image previews with imagegd (default behaviour)
 * If the image is bigger, it'll try other preview generators,
 * but will most likely show the default mimetype icon
 *
 * Value represents the maximum filesize in megabytes
 * Default is 50
 * Set to -1 for no limit
 */
'preview_max_filesize_image' => 50,

/**
 * custom path for LibreOffice/OpenOffice binary
 */
'preview_libreoffice_path' => '/usr/bin/libreoffice',
/**
 * Use this if LibreOffice/OpenOffice requires additional arguments.
 */
'preview_office_cl_parameters' =>
	' --headless --nologo --nofirststartwizard --invisible --norestore '.
	'--convert-to pdf --outdir ',

/**
 * Only register providers that have been explicitly enabled
 *
 * The following providers are enabled by default:
 *
 *  - OC\Preview\PNG
 *  - OC\Preview\JPEG
 *  - OC\Preview\GIF
 *  - OC\Preview\BMP
 *  - OC\Preview\XBitmap
 *  - OC\Preview\MarkDown
 *  - OC\Preview\MP3
 *  - OC\Preview\TXT
 *
 * The following providers are disabled by default due to performance or privacy
 * concerns:
 *
 *  - OC\Preview\Illustrator
 *  - OC\Preview\Movie
 *  - OC\Preview\MSOffice2003
 *  - OC\Preview\MSOffice2007
 *  - OC\Preview\MSOfficeDoc
 *  - OC\Preview\OpenDocument
 *  - OC\Preview\PDF
 *  - OC\Preview\Photoshop
 *  - OC\Preview\Postscript
 *  - OC\Preview\StarOffice
 *  - OC\Preview\SVG
 *  - OC\Preview\TIFF
 *  - OC\Preview\Font
 *
 * .. note:: Troubleshooting steps for the MS Word previews are available
 *    at the :doc:`../configuration_files/collaborative_documents_configuration`
 *    section of the Administrators Manual.
 *
 * The following providers are not available in Microsoft Windows:
 *
 *  - OC\Preview\Movie
 *  - OC\Preview\MSOfficeDoc
 *  - OC\Preview\MSOffice2003
 *  - OC\Preview\MSOffice2007
 *  - OC\Preview\OpenDocument
 *  - OC\Preview\StarOffice
 */
'enabledPreviewProviders' => array(
	'OC\Preview\PNG',
	'OC\Preview\JPEG',
	'OC\Preview\GIF',
	'OC\Preview\BMP',
	'OC\Preview\XBitmap',
	'OC\Preview\MP3',
	'OC\Preview\TXT',
	'OC\Preview\MarkDown'
),

/**
 * LDAP
 *
 * Global settings used by LDAP User and Group Backend
 */

/**
 * defines the interval in minutes for the background job that checks user
 * existence and marks them as ready to be cleaned up. The number is always
 * minutes. Setting it to 0 disables the feature.
 * See command line (occ) methods ldap:show-remnants and user:delete
 */
'ldapUserCleanupInterval' => 51,

/**
 * Comments
 *
 * Global settings for the Comments infrastructure
 */

/**
 * Replaces the default Comments Manager Factory. This can be utilized if an
 * own or 3rdParty CommentsManager should be used that – for instance – uses the
 * filesystem instead of the database to keep the comments.
 */
'comments.managerFactory' => '\OC\Comments\ManagerFactory',

/**
 * Replaces the default System Tags Manager Factory. This can be utilized if an
 * own or 3rdParty SystemTagsManager should be used that – for instance – uses the
 * filesystem instead of the database to keep the comments.
 */
'systemtags.managerFactory' => '\OC\SystemTag\ManagerFactory',

/**
 * Maintenance
 *
 * These options are for halting user activity when you are performing server
 * maintenance.
 */

/**
 * Enable maintenance mode to disable Nextcloud
 *
 * If you want to prevent users from logging in to Nextcloud before you start 
 * doing some maintenance work, you need to set the value of the maintenance 
 * parameter to true. Please keep in mind that users who are already logged-in 
 * are kicked out of Nextcloud instantly.
 */
'maintenance' => false,

/**
 * When set to ``true``, the Nextcloud instance will be unavailable for all
 * users who are not in the ``admin`` group.
 */
'singleuser' => false,


/**
 * SSL
 */

/**
 * Extra SSL options to be used for configuration.
 */
'openssl' => array(
	'config' => '/absolute/location/of/openssl.cnf',
),

/**
 * Allow the configuration of system wide trusted certificates
 */
'enable_certificate_management' => false,

/**
 * Memory caching backend configuration
 *
 * Available cache backends:
 *
 * * ``\OC\Memcache\APC``        Alternative PHP Cache backend
 * * ``\OC\Memcache\APCu``       APC user backend
 * * ``\OC\Memcache\ArrayCache`` In-memory array-based backend (not recommended)
 * * ``\OC\Memcache\Memcached``  Memcached backend
 * * ``\OC\Memcache\Redis``      Redis backend
 * * ``\OC\Memcache\XCache``     XCache backend
 *
 * Advice on choosing between the various backends:
 *
 * * APCu should be easiest to install. Almost all distributions have packages.
 *   Use this for single user environment for all caches.
 * * Use Redis or Memcached for distributed environments.
 *   For the local cache (you can configure two) take APCu.
 */

/**
 * Memory caching backend for locally stored data
 *
 * * Used for host-specific data, e.g. file paths
 */
'memcache.local' => '\OC\Memcache\APCu',

/**
 * Memory caching backend for distributed data
 *
 * * Used for installation-specific data, e.g. database caching
 * * If unset, defaults to the value of memcache.local
 */
'memcache.distributed' => '\OC\Memcache\Memcached',

/**
 * Connection details for redis to use for memory caching.
 *
 * For enhanced security it is recommended to configure Redis
 * to require a password. See http://redis.io/topics/security
 * for more information.
 */
'redis' => array(
	'host' => 'localhost', // can also be a unix domain socket: '/tmp/redis.sock'
	'port' => 6379,
	'timeout' => 0.0,
	'password' => '', // Optional, if not defined no password will be used.
	'dbindex' => 0, // Optional, if undefined SELECT will not run and will use Redis Server's default DB Index.
),

/**
 * Server details for one or more memcached servers to use for memory caching.
 */
'memcached_servers' => array(
	// hostname, port and optional weight. Also see:
	// http://www.php.net/manual/en/memcached.addservers.php
	// http://www.php.net/manual/en/memcached.addserver.php
	array('localhost', 11211),
	//array('other.host.local', 11211),
),


/**
 * Location of the cache folder, defaults to ``data/$user/cache`` where
 * ``$user`` is the current user. When specified, the format will change to
 * ``$cache_path/$user`` where ``$cache_path`` is the configured cache directory
 * and ``$user`` is the user.
 */
'cache_path' => '',

/**
 * Using Object Store with Nextcloud
 */

/**
 * This example shows how to configure Nextcloud to store all files in a
 * swift object storage.
 *
 * It is important to note that Nextcloud in object store mode will expect
 * exclusive access to the object store container because it only stores the
 * binary data for each file. The metadata is currently kept in the local
 * database for performance reasons.
 *
 * WARNING: The current implementation is incompatible with any app that uses
 * direct file IO and circumvents our virtual filesystem. That includes
 * Encryption and Gallery. Gallery will store thumbnails directly in the
 * filesystem and encryption will cause severe overhead because key files need
 * to be fetched in addition to any requested file.
 *
 * One way to test is applying for a trystack account at http://trystack.org/
 */
'objectstore' => array(
	'class' => 'OC\\Files\\ObjectStore\\Swift',
	'arguments' => array(
		// trystack will user your facebook id as the user name
		'username' => 'facebook100000123456789',
		// in the trystack dashboard go to user -> settings -> API Password to
		// generate a password
		'password' => 'Secr3tPaSSWoRdt7',
		// must already exist in the objectstore, name can be different
		'container' => 'nextcloud',
		// create the container if it does not exist. default is false
		'autocreate' => true,
		// required, dev-/trystack defaults to 'RegionOne'
		'region' => 'RegionOne',
		// The Identity / Keystone endpoint
		'url' => 'http://8.21.28.222:5000/v2.0',
		// required on dev-/trystack
		'tenantName' => 'facebook100000123456789',
		// dev-/trystack uses swift by default, the lib defaults to 'cloudFiles'
		// if omitted
		'serviceName' => 'swift',
		// The Interface / url Type, optional
		'urlType' => 'internal'
	),
),


/**
 * Sharing
 *
 * Global settings for Sharing
 */

/**
 * Replaces the default Share Provider Factory. This can be utilized if
 * own or 3rdParty Share Providers be used that – for instance – uses the
 * filesystem instead of the database to keep the share information.
 */
'sharing.managerFactory' => '\OC\Share20\ProviderFactory',



/**
 * All other configuration options
 */

/**
 * Additional driver options for the database connection, eg. to enable SSL
 * encryption in MySQL or specify a custom wait timeout on a cheap hoster.
 */
'dbdriveroptions' => array(
	PDO::MYSQL_ATTR_SSL_CA => '/file/path/to/ca_cert.pem',
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET wait_timeout = 28800'
),

/**
 * sqlite3 journal mode can be specified using this configuration parameter -
 * can be 'WAL' or 'DELETE' see for more details https://www.sqlite.org/wal.html
 */
'sqlite.journal_mode' => 'DELETE',

/**
 * Database types that are supported for installation.
 *
 * Available:
 * 	- sqlite (SQLite3)
 * 	- mysql (MySQL)
 * 	- pgsql (PostgreSQL)
 * 	- oci (Oracle)
 */
'supportedDatabases' => array(
	'sqlite',
	'mysql',
	'pgsql',
	'oci',
),

/**
 * Override where Nextcloud stores temporary files. Useful in situations where
 * the system temporary directory is on a limited space ramdisk or is otherwise
 * restricted, or if external storages which do not support streaming are in
 * use.
 *
 * The Web server user must have write access to this directory.
 */
'tempdirectory' => '/tmp/nextcloudtemp',

/**
 * The hashing cost used by hashes generated by Nextcloud
 * Using a higher value requires more time and CPU power to calculate the hashes
 */
'hashingCost' => 10,

/**
 * Blacklist a specific file or files and disallow the upload of files
 * with this name. ``.htaccess`` is blocked by default.
 * WARNING: USE THIS ONLY IF YOU KNOW WHAT YOU ARE DOING.
 */
'blacklisted_files' => array('.htaccess'),

/**
 * Define a default folder for shared files and folders other than root.
 */
'share_folder' => '/',

/**
 * If you are applying a theme to Nextcloud, enter the name of the theme here.
 * The default location for themes is ``nextcloud/themes/``.
 */
'theme' => '',

/**
 * The default cipher for encrypting files. Currently AES-128-CFB and
 * AES-256-CFB are supported.
 */
'cipher' => 'AES-256-CFB',

/**
 * The minimum Nextcloud desktop client version that will be allowed to sync with
 * this server instance. All connections made from earlier clients will be denied
 * by the server. Defaults to the minimum officially supported Nextcloud desktop
 * client version at the time of release of this server version.
 *
 * When changing this, note that older unsupported versions of the Nextcloud desktop
 * client may not function as expected, and could lead to permanent data loss for
 * clients or other unexpected results.
 */
'minimum.supported.desktop.version' => '1.7.0',

/**
 * EXPERIMENTAL: option whether to include external storage in quota
 * calculation, defaults to false.
 */
'quota_include_external_storage' => false,

/**
 * Specifies how often the local filesystem (the Nextcloud data/ directory, and
 * NFS mounts in data/) is checked for changes made outside Nextcloud. This 
 * does not apply to external storages.
 *
 * 0 -> Never check the filesystem for outside changes, provides a performance
 * increase when it's certain that no changes are made directly to the
 * filesystem
 *
 * 1 -> Check each file or folder at most once per request, recommended for
 * general use if outside changes might happen.
 */
'filesystem_check_changes' => 0,

/**
 * By default Nextcloud will store the part files created during upload in the
 * same storage as the upload target. Setting this to false will store the part
 * files in the root of the users folder which might be required to work with certain
 * external storage setups that have limited rename capabilities.
 */
'part_file_in_storage' => true,

/**
 * All css and js files will be served by the Web server statically in one js
 * file and one css file if this is set to ``true``. This improves performance.
 */
'asset-pipeline.enabled' => false,

/**
 * The parent of the directory where css and js assets will be stored if
 * pipelining is enabled; this defaults to the Nextcloud directory. The assets
 * will be stored in a subdirectory of this directory named 'assets'. The
 * server *must* be configured to serve that directory as $WEBROOT/assets.
 * You will only likely need to change this if the main Nextcloud directory
 * is not writeable by the Web server in your configuration.
 */
'assetdirectory' => '/var/www/nextcloud',

/**
 * Where ``mount.json`` file should be stored, defaults to ``data/mount.json``
 * in the Nextcloud directory.
 */
'mount_file' => '/var/www/nextcloud/data/mount.json',

/**
 * When ``true``, prevent Nextcloud from changing the cache due to changes in
 * the filesystem for all storage.
 */
'filesystem_cache_readonly' => false,

/**
 * Secret used by Nextcloud for various purposes, e.g. to encrypt data. If you
 * lose this string there will be data corruption.
 */
'secret' => '',

/**
 * List of trusted proxy servers
 * 
 * If you configure these also consider setting `forwarded_for_headers` which
 * otherwise defaults to `HTTP_X_FORWARDED_FOR` (the `X-Forwarded-For` header).
 */
'trusted_proxies' => array('203.0.113.45', '198.51.100.128'),

/**
 * Headers that should be trusted as client IP address in combination with
 * `trusted_proxies`. If the HTTP header looks like 'X-Forwarded-For', then use
 * 'HTTP_X_FORWARDED_FOR' here.
 *
 * If set incorrectly, a client can spoof their IP address as visible to
 * Nextcloud, bypassing access controls and making logs useless!
 *
 * Defaults to 'HTTP_X_FORWARED_FOR' if unset
 */
'forwarded_for_headers' => array('HTTP_X_FORWARDED', 'HTTP_FORWARDED_FOR'),

/**
 * max file size for animating gifs on public-sharing-site.
 * If the gif is bigger, it'll show a static preview
 *
 * Value represents the maximum filesize in megabytes. Default is ``10``. Set to
 * ``-1`` for no limit.
 */
'max_filesize_animated_gifs_public_sharing' => 10,


/**
 * Enables transactional file locking.
 * This is enabled by default.
 *
 * Prevents concurrent processes from accessing the same files
 * at the same time. Can help prevent side effects that would
 * be caused by concurrent operations. Mainly relevant for
 * very large installations with many users working with
 * shared files.
 */
'filelocking.enabled' => true,

/**
 * Memory caching backend for file locking
 *
 * Because most memcache backends can clean values without warning using redis
 * is highly recommended to *avoid data loss*.
 */
'memcache.locking' => '\\OC\\Memcache\\Redis',

/**
 * Set this Nextcloud instance to debugging mode
 *
 * Only enable this for local development and not in production environments
 * This will disable the minifier and outputs some additional debug information
 */
'debug' => false,

/**
 * This entry is just here to show a warning in case somebody copied the sample
 * configuration. DO NOT ADD THIS SWITCH TO YOUR CONFIGURATION!
 *
 * If you, brave person, have read until here be aware that you should not
 * modify *ANY* settings in this file without reading the documentation.
 */
'copied_sample_config' => true,

);
