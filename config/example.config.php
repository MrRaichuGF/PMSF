<?php

namespace Config;

// Do not touch this!
require 'default.php';
use Medoo\Medoo;

//======================================================================
// PMSF - CONFIG FILE
// https://github.com/pmsf/PMSF
//======================================================================

//-----------------------------------------------------
// MAP SETTINGS
//-----------------------------------------------------

/* Location Settings */

$startingLat = 52.084992;                                           // Starting latitude
$startingLng = 5.302366;                                            // Starting longitude

/* Zoom and Cluster Settings */

$maxLatLng = 1;                                                     // Max latitude and longitude size (1 = ~110km, 0 to disable)
$defaultZoom = 16;                                                  // Default zoom level for first time users.
$maxZoomOut = 11;                                                   // Max zoom out level (11 ~= $maxLatLng = 1, 0 to disable, lower = the further you can zoom out)
$maxZoomIn = 18;                                                    // Max zoom in level 18, higher values will be loaded from level 18 and auto-scaled
$disableClusteringAtZoom = 15;                                      // Disable clustering above this value. 0 to disable
$zoomToBoundsOnClick = 15;                                          // Zoomlevel on clusterClick
$maxClusterRadius = 30;                                             // The maximum radius that a cluster will cover from the central marker (in pixels).
$spiderfyOnMaxZoom = 'true';                                        // Spiderfy cluster markers on click

/* Boundaries */
$noBoundaries = true;                                               // Enable/Disable boundaries to pull data from. Requires $boundaries to be set.
$showPokemonsOutsideBoundaries = false;
$showGymsOutsideBoundaries = false;
$showSpawnsOutsideBoundaries = false;
$showStopsOutsideBoundaries = false;

$boundaries = '51.9258236369112 5.4520494625403,
               51.8982915107015 5.4808885738685,
               51.8715904160174 5.4630357906653,
               51.8525084938523 5.4211504146888,
               51.8427523855973 5.3504259273841,
               51.8448734585841 5.2645952389075,
               51.8635345916882 5.1952440426185,
               51.9033756353006 5.2254564449622,
               51.9304812498708 5.4032976314857,
               51.9258236369112 5.4520494625403';                   // First and last coords have to be the same!

/* Anti scrape Settings */
$enableCsrf = true;                                                 // Don't disable this unless you know why you need to :)
$sessionLifetime = 43200;                                           // Session lifetime, in seconds
$blockIframe = true;                                                // Block your map being loaded in an iframe

/* Map Title + Language */

$title = "POGOmap";                                                 // Title to display in title bar
$headerTitle = "POGOmap";                                           // Title to display in header
$locale = "en";                                                     // Display language
$noLocaleSelection = false;
$enLocaleFlag = "us";                                               // Change country flag for english in the language changer
$raidmapLogo = '';                                                  // Upload logo to custom folder, leave '' for empty ( $raidmapLogo = 'custom/logo.png'; )

/* Info Modal */
$noInfoModal = true;                                                // Hide infomodal and button
$infoModalTitle = 'Info';                                           // Infomodal title
$infoModalContent = 'Your text info here';                          // HTML markup allowed (external html file load $infoModalContent = file_get_contents('custom/modal.html');

/* Google Maps key is ONLY USED FOR TILE LAYERS */

$gmapsKey = "";

/* Google Analytics */

$gAnalyticsId = "";                                                 // "" for empty, "UA-XXXXX-Y" add your Google Analytics tracking ID

/* Piwik Analytics */

$piwikUrl = "";
$piwikSiteId = "";

/* Cookie Disclamer */
$noCookie = true;                                                   // Display a Cookie Disclamer

/* header urls */
$paypalUrl = "";                                                    // PayPal donation URL, leave "" for empty
$discordUrl = "https://discord.gg/INVITE_LINK";                     // Discord URL, leave "" for empty
$whatsAppUrl = "";                                                  // WhatsApp URL, leave "" for empty
$telegramUrl = "";                                                  // Telegram URL, leave "" for empty
$patreonUrl = "";                                                   // Patreon URL, leave "" for empty
$customUrl = "";                                                    // Custom URL, leave "" for empty
$customUrlFontIcon = "far fa-smile-beam";                           // Choose a custom icon on: https://fontawesome.com/icons?d=gallery&m=free

/* Stats */
$noStatsToggle = false;                                             // Enables or disables the stats button in the header.
$noFullStats = false;                                               // Enables or disables full stats

/* MOTD */
$noMotd = true;                                                     // Message of the day.
$showMotdOnlyOnce = false;                                          // Only show motd if user didnt see the current $motdContent yet.
$motdTitle = "Message of the Day";
$motdContent = "This is an example MOTD<br>Do whatever you like with it.";

/* Share links */
$noWhatsappLink = true;

/* Favicon */
$faviconPath = '';                                                  // Upload favicon.ico to custom folder, leave '' for empty ( $faviconPath = 'custom/favicon.ico'; )
$appIconPath = 'static/appicons/';

/* IMGBB API */
$imgurCID = "";

/* Counts */
$numberOfPokemon = 1008;
$numberOfItem = 1602;
$numberOfGrunt = 523;
$numberOfEgg = 20;

/* UserTimezone */
#$userTimezone = "Etc/UTC";                                         // If different from server settings set php frontend timezone https://www.php.net/manual/en/timezones.php

/* Toastr settings */
$toastDelay = 2000;                                                 // ToastDelay in milliseconds

//-----------------------------------------------------
// Login
//-----------------------------------------------------

$monologPath = 'php://stdout';
$useLoginCookie = false;                                            // Use cookie to restore session after browser is closed.
$forcedLogin = false;                                               // Force users to login before they can see map.
$allowMultiLogin = false;                                           // Allow users to login with multiple devices simulteously.

/* Discord Auth */
$noDiscordLogin = true;                                             // true/false | This will enable login through discord.
                                                                    // 1. Create a discord bot here -> https://discordapp.com/developers/applications/me
                                                                    // 2. Install composer with "apt-get install composer".
                                                                    // 3. Navigate to your website's root folder and type "composer install" to install the dependencies.
                                                                    // 4. Add your callback-page as a REDIRECT URI to your discord bot. Should be the same as $discordBotRedirectUri.
                                                                    // 5. Enter Client ID, Client Secret, Redirect URI and Token below.
$discordBotClientId = 0;
$discordBotClientSecret = "";
$discordBotRedirectUri = "https://Yourdomain.com/login?callback=discord";
$discordBotToken = "";
$discordLogLevel = "INFO";                                          // Do NOT change unless asked

/* Give certain users certain access levels. */
$discordUsers = [
    'USER-ID-HERE' => 5
];

/* Match role-id values with access levels in access config. Remove or add according your needs */

$guildRoles = [
    'guildIDS' => [
        'SERVER-ID-HERE' => [
            'ROLE-ID-HERE' => 1,
            'ROLE-ID-HERE' => 2,
            'ROLE-ID-HERE' => 3,
            'ROLE-ID-HERE' => 4
        ],
        'SERVER-ID-HERE' => [
            'ROLE-ID-HERE' => 1,
            'ROLE-ID-HERE' => 2,
            'ROLE-ID-HERE' => 3,
            'ROLE-ID-HERE' => 4
        ],
        'SERVER-ID-HERE' => [
            'ROLE-ID-HERE' => 1,
            'ROLE-ID-HERE' => 2,
            'ROLE-ID-HERE' => 3
        ]
    ]
];

/* Facebook Auth */
$noFacebookLogin = true;                                            // true/false
$facebookAppId = '';                                                // Facebook App ID
$facebookAppSecret = '';                                            // Facebook App Secret
$facebookAppRedirectUri = 'https://Yourdomain.com/login?callback=facebook'; // Callback url make sure this is the same as set in Facebook app config
$facebookAccessLevel = '1';                                         // Accesslevel used in access-config.php

/* Groupme Auth */
$noGroupmeLogin = true;                                             // true/false
$groupmeClientId = '';
$groupmeCallbackUri = 'https://Yourdomain.com/login?callback=groupme';
$groupmeAccessLevel = '1';

/* Patreon Auth */
$noPatreonLogin = false;                                            // true/false
$patreonClientId = '';
$patreonClientSecret = '';
$patreonCreatorAccessToken = '';
$patreonCallbackUri = 'https://Yourdomain.com/login?callback=patreon';

$patreonTierRequired = true;                                        // Member must have pledged set to false to allow any patreon user to log in.
$patreonTiers = [                                                   // Tier ids can be obtained by clicking the join tier button on patreon and the URL will show you checkout?rid=<NUMBER>
    '<NUMBER>' => 1,
    '<NUMBER>' => 2,
    '<NUMBER>' => 3
];

/* Blacklist Settings - Only available with Discord login */
$userBlacklist = [''];                                              // Array of user ID's that are always blocked from accessing the map
$userWhitelist = [''];                                              // Array of user ID's that's allowed to bypass the server blacklist
$serverBlacklist = [''];                                            // Array of server ID's. A user that's a member of any of these and not in your user whitelist will be blocked
$logFailedLogin = 'logs/failed_login.log';                          // File location of where to store a log file of blocked users

/* Native Auth */
$noNativeLogin = true;                                              // This will enable the built in login system.
$domainName = '';                                                   // If this is empty, reset-password emails will use the domain name taken from the URL.
$adminUsers = ['admin@example.com', 'Superadmin#13337'];            // You can add multiple admins by adding them to the array.

//-----------------------------------------------------
// FRONTEND SETTINGS
//-----------------------------------------------------

/* Marker Settings */
$noMinLLRank = false;                                               // true/false
$noMinGLRank = false;                                               // true/false
$noMinULRank = false;                                               // true/false
$noExcludeMinIV = false;                                            // true/false
$noMinIV = false;                                                   // true/false
$noMinLevel = false;                                                // true/false
$noHighLevelData = false;                                           // true/false
$noCatchRates = false;                                              // true/false
$noRarityDisplay = false;                                           // true/false
$noWeatherIcons = true;                                             // true/false
$no0IvShadow = false;                                               // true/false
$no100IvShadow = false;                                             // true/false
$noPvpShadow = false;                                               // true/false
$noHideSingleMarker = false;                                        // true/false

/* Notification Settings */
$noNotifyPokemon = false;                                           // true/false
$noNotifyRarity = false;                                            // true/false
$noNotifyIv = false;                                                // true/false
$noNotifyLevel = false;                                             // true/false
$noNotifyRaid = false;                                              // true/false
$noNotifySound = false;                                             // true/false
$noCriesSound = false;                                              // true/false
$noNotifyBounce = false;                                            // true/false
$noNotifyNotification = false;                                      // true/false

/* Marker Settings */
$noPokemon = false;                                                 // true/false
$enablePokemon = 'true';                                            // true/false
$noPokemonNames = false;                                            // true/false
$noPokemonNumbers = false;                                          // true/false
$noHidePokemon = false;                                             // true/false
$hidePokemon = '[10, 13, 16, 19, 21, 29, 32, 41, 46, 48, 50, 52, 56, 74, 77, 96, 111, 133, 161, 163, 167, 177, 183, 191, 194, 168]'; // [] for empty
$hidePokemonCoords = false;                                         // true/false
$pokemonReportTime = false;                                         // true/false
$pokemonToExclude = [];

$pokemonGenSearchString = 'generation';                             // When custom string is used translations do not work.

$noPvp = false;                                                     // true/false
$noPvpCapText = false;                                              // Add [Cap XX] text in popup. true/false
$minLLRank = '0';                                                   // "0" for empty or a number
$minGLRank = '0';                                                   // "0" for empty or a number
$minULRank = '0';                                                   // "0" for empty or a number
$globalRankLimitLL = 4096;                                          // 0 = Dynamic limit according to active user filter, 1 to 4096(max) = Fixed limit
$globalRankLimitGL = 4096;                                          // 0 = Dynamic limit according to active user filter, 1 to 4096(max) = Fixed limit
$globalRankLimitUL = 4096;                                          // 0 = Dynamic limit according to active user filter, 1 to 4096(max) = Fixed limit
$globalCpLimitLL = 0;                                               // 0 = no limit or a number like 450
$globalCpLimitGL = 0;                                               // 0 = no limit or a number like 1400
$globalCpLimitUL = 0;                                               // 0 = no limit or a number like 2400

$minIV = '0';                                                       // "0" for empty or a number
$minLevel = '0';                                                    // "0" for empty or a number
$excludeMinIV = '[131, 143, 147, 148, 149, 248]';                   // [] for empty

$noMissingIVOnly = true;                                            // true/false
$noBigKarp = false;                                                 // true/false
$noTinyRat = false;                                                 // true/false
$noZeroIvToggle = false;                                            // true/false
$noHundoIvToggle = false;                                           // true/false
$noIndependantPvpAndStatsToggle = false;                            // true/false
$noDespawnTimeType = true;                                          // true/false
$showDespawnTimeType = 0;                                           // 0 = All, 1 = Verified, 2 = Unverified, 3 = Unverified + Nearby (Nearby = no spawn point)
$noPokemonGender = false;                                           // true/false
$showPokemonGender = 0;                                             // 0 = All, 1 = Male, 2 = Female

/* Gyms */
$noGyms = false;                                                    // true/false
$enableGyms = 'false';                                              // true/false
$hideGymCoords = false;                                             // true/false
$noExEligible = false;                                              // true/false
$exEligible = 'false';                                              // true/false
$noTeams = false;                                                   // true/false
$noInBattle = false;                                                // true/false
$noOpenSpot = false;                                                // true/false
$noMinMaxFreeSlots = false;                                         // true/false
$noLastScan = false;                                                // true/false

/* Raids */
$noRaids = false;                                                   // true/false
$enableRaids = 'false';                                             // true/false
$noActiveRaids = true;                                              // true/false
$activeRaids = 'false';                                             // true/false
$noMinMaxRaidLevel = true;                                          // true/false
$minRaidLevel = 1;
$maxRaidLevel = 10;
$noRaidTimer = false;                                               // true/false
$enableRaidTimer = 'false';                                         // true/false
$noRaidbossNames = false;                                           // true/false
$noRaidbossNumbers = false;                                         // true/false
$hideRaidboss = '[]';
$excludeRaidboss = [];
$generateExcludeRaidboss = true;                                    // true/false
$noRaideggNumbers = false;                                          // true/false
$hideRaidegg = '[]';
$excludeRaidegg = [];

/* Pokestops */
$noPokestops = false;                                               // true/false
$enablePokestops = 'false';                                         // true/false
$hidePokestopCoords = false;                                        // true/false

$noAllPokestops = false;                                            // true/false
$enableAllPokestops = 'false';                                      // true/false

$noLures = false;                                                   // true/false
$enableLured = 'false';                                             // true/false

$noEventStops = false;                                              // true/false
$enableEventStops = 'false';                                        // true/false
$noEventStopsTimer = false;                                         // true/false
$enableEventStopsTimer = 'false';                                   // true/false

$noTeamRocket = false;                                              // true/false
$enableTeamRocket = 'false';                                        // true/false
$noTeamRocketTimer = false;                                         // true/false
$enableTeamRocketTimer = 'false';                                   // true/false
$noTeamRocketEncounterData = true;                                  // true/false | Show/Hide possible rewards. Requires grunttype.json to be up to date.
$noGrunts = false;                                                  // true/false
$noGruntNumbers = false;                                            // true/false
$hideGrunts = '[]';
$excludeGrunts = [];
$generateExcludeGrunts = true;                                      // true/false

$noQuests = false;                                                  // true/false
$enableQuests = 'false';                                            // true/false
$noQuestsARTaskToggle = true;                                       // true/false
$noQuestsPokemon = false;                                           // true/false
$noQuestsItems = false;                                             // true/false
$noQuestsEnergy = false;                                            // true/false
$noQuestsCandy = false;                                             // true/false
$noQuestsStardust = false;                                          // true/false
$noQuestsXP = false;                                                // true/false
$noItemNames = false;                                               // true/false
$noItemNumbers = true;                                              // true/false
$defaultDustAmount = 500;
$defaultXpAmount = 500;
$hideQuestsPokemon = '[]';                                          // Pokemon ids will default be hidden in the menu every user is able to change this personaly
$excludeQuestsPokemon = [];                                         // All Pokémon in this array will not be shown in the filter.
$generateExcludeQuestsPokemon = true;                               // Generate $excludeQuestsPokemon based on active quests in database
$hideQuestsItem = '[4, 5, 301, 401, 402, 403, 404, 501, 602, 603, 604, 702, 704, 707, 801, 901, 902, 903, 1001, 1002, 1401, 1402, 1403, 1404, 1405]'; // Item ids "See protos https://github.com/Furtif/POGOProtos/blob/master/src/POGOProtos/Inventory/Item/ItemId.proto"
$excludeQuestsItem = [4, 5, 301, 401, 402, 403, 404, 501, 602, 603, 604, 702, 704, 707, 801, 901, 902, 903, 1001, 1002, 1401, 1402, 1403, 1404, 1405]; // All excluded item wil not be shown in the filter.
$generateExcludeQuestsItem = true;                                  // Generate $excludeQuestsItems based on active quests in database
$hideQuestsEnergy = '[]';
$excludeQuestsEnergy = [];
$generateExcludeQuestsEnergy = true;                                // Generate $excludeQuestsEnergy based on active quests in database
$hideQuestsCandy = '[]';
$excludeQuestsCandy = [];
$generateExcludeQuestsCandy = true;                                 // Generate $excludeQuestsCandy based on active quests in database

/* Manual quest hide options */
$hideQuestTypes = [0, 1, 2, 3, 12, 18, 19, 22, 24, 25];
$hideRewardTypes = [0, 1, 4, 5, 6];
$hideConditionTypes = [0, 4, 5, 11, 12, 13, 16, 17, 19, 20];

/* Manual quest show options */
$showEncounters = [201];
$showItems = [1, 2, 3, 101, 102, 103, 104, 201, 202, 701, 703, 705, 706, 707, 1301];

$noSpawnPoints = false;                                             // true/false
$enableSpawnPoints = 'false';                                       // true/false

$noRanges = false;                                                  // true/false
$enableRanges = 'false';                                            // true/false

$noScanPolygon = true;                                              // true/false
$enableScanPolygon = 'false';                                       // true/false
$geoJSONfile = 'custom/scannerarea.json';                           // path to geoJSON file create your own on http://geojson.io/ adjust filename

$noLiveScanLocation = true;                                         // Show scan devices on the map
$enableLiveScan = 'false';                                          // true/false
$hideDeviceAfterMinutes = 0;                                        // Hide scan devices from map after x amount of minutes not being updated in database. 0 to disable.
$deviceOfflineAfterSeconds = 300;                                   // Mark scan devices offline (red color) after x amount of seconds not being updated in database.

$hideDeleted = true;                                                // true/false | Hide deleted Pokestop / Gyms from map

/* Location & Search Settings */
$noSearchLocation = false;                                          // true/false

$noStartMe = false;                                                 // true/false
$enableStartMe = 'false';                                           // true/false

$noStartLast = false;                                               // true/false
$enableStartLast = 'false';                                         // true/false

$noFollowMe = false;                                                // true/false
$enableFollowMe = 'false';                                          // true/false

$noSpawnArea = false;                                               // true/false
$enableSpawnArea = 'false';                                         // true/false

/* Notification Settings */
$notifyPokemon = '[201]';                                           // [] for empty
$notifyRarity = '[]';                                               // "Common", "Uncommon", "Rare", "Very Rare", "Ultra Rare"
$notifyIv = '""';                                                   // "" for empty or a number
$notifyLevel = '""';                                                // "" for empty or a number
$notifyRaid = 0;                                                    // 1,2,3,4,5 or 6 - 0 to disable
$notifySound = 'false';                                             // true/false
$criesSound = 'false';                                              // true/false
$notifyBounce = 'true';                                             // true/false
$notifyNotification = 'true';                                       // true/false

/* Style Settings */
$noDarkMode = false;                                                // true/false

$copyrightSafe = true;                                              // true/false
$iconFolderArray = [                                                // Default Icon repo to be used
    'gym' => [                                                      // String or Array of multiple icon sets
        'Ingame' => 'static/sprites/gym/ingame/',
        'Rocketmap' => 'static/sprites/gym/rocketmap/',
        'Shield' => 'static/sprites/gym/shield/',
        'Comic' => 'static/sprites/gym/comic/'
    ],
    'invasion' => 'static/sprites/',                                // String of icon set
    'misc' => 'static/sprites/',                                    // String of icon set
    'nest' => 'static/sprites/',                                    // String of icon set
    'pokemon' => 'static/sprites/',                                 // String or Array of multiple icon sets
    'pokestop' => 'static/sprites/',                                // String of icon set
    'raid' => 'static/sprites/',                                    // String of icon set
    'reward' => 'static/sprites/',                                  // String or Array of multiple icon sets
    'team' => 'static/sprites/',                                    // String of icon set
    'type' => 'static/sprites/',                                    // String of icon set
    'weather' => 'static/sprites/'                                  // String of icon set
];

$noMapStyle = false;                                                // true/false
$mapStyle = 'openstreetmap';                                        // Set default Map Style
$forcedTileServer = false;                                          // true/false

$mapStyleList = [
    "openstreetmap" => [
        "name" => "OpenStreetMap",
        "url" => "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
        "key" => "",
        "attribution" => "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        "maxnativezoom" => 18
    ],
    "darkmatter" => [
        "name" => "Dark Matter",
        "url" => "https://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_all/{z}/{x}/{y}.png",
        "key" => "",
        "attribution" => "&copy; <a href='https://carto.com/'>Carto</a>",
        "maxnativezoom" => 18
    ],
    "styletopo" => [
        "name" => "ToPo Map",
        "url" => "https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png",
        "key" => "",
        "attribution" => "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        "maxnativezoom" => 18
    ],
    "stylesatellite" => [
        "name" => "Satellite",
        "url" => "https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}",
        "key" => "",
        "attribution" => "Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community",
        "maxnativezoom" => 18
    ],
    "googlemapssat" => [       // DO NOT CHANGE
        "name" => "Google Maps Satellite",
        "url" => "",
        "key" => "",
        "attribution" => "",
        "maxnativezoom" => null
    ],
    "googlemapsroad" => [      // DO NOT CHANGE
        "name" => "Google Maps Roadmap",
        "url" => "",
        "key" => "",
        "attribution" => "",
        "maxnativezoom" => null
    ],
    "mapbox" => [
        "name" => "Mapbox Streets",
        "url" => "https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/256/{z}/{x}/{y}?access_token=",
        "key" => "",
        "attribution" => "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        "maxnativezoom" => 18
    ],
    "mapboxDark" => [
        "name" => "Mapbox Dark",
        "url" => "https://api.mapbox.com/styles/v1/mapbox/dark-v10/tiles/256/{z}/{x}/{y}?access_token=",
        "key" => "",
        "attribution" => "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        "maxnativezoom" => 18
    ],
    "mapboxPogoDynamic" => [
        "name" => "Mapbox Pokémon Go Dynamic",
        "url" => "",
        "key" => "",
        "attribution" => "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        "maxnativezoom" => null
    ],
    "mapboxPogo" => [
        "name" => "Mapbox Pokémon Go",
        "url" => "https://api.mapbox.com/styles/v1/anonymous89/ck2uz9d5t09qm1cl66b9giwun/tiles/256/{z}/{x}/{y}@2x?access_token=",
        "key" => "",
        "attribution" => "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        "maxnativezoom" => 18
    ],
    "mapboxPogoDark" => [
        "name" => "Mapbox Pokémon Go Dark",
        "url" => "https://api.mapbox.com/styles/v1/anonymous89/ck2xw3j6h0e0v1dqtlcx9c4od/tiles/256/{z}/{x}/{y}@2x?access_token=",
        "key" => "",
        "attribution" => "&copy; <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        "maxnativezoom" => 18
    ],
    "tileserver" => [
        "name" => "Tileserver",
        "url" => "",
        "key" => "",
        "attribution" => "Tileserver",
        "maxnativezoom" => 18
    ]
];

$noDirectionProvider = false;                                       // true/false
$directionProvider = 'google';                                      // google, waze, apple, bing, google_pin

$noIconSize = false;                                                // true/false
$pokemonIconSize = 30;                                              // 20 = Small, 30 = Normal, 45 = Large, 60 = X-Large

$noIconNotifySizeModifier = false;                                  // true/false | Increase size of notified Pokemon
$iconNotifySizeModifier = 15;                                       // 0, 15, 30, 45

$noLocationStyle = false;                                           // true/false
$locationStyle = 'none';                                            // none, google, red, red_animated, blue, blue_animated, yellow, yellow_animated, pokesition, pokeball

$triggerGyms = '[]';                                                // Add Gyms that the OSM-Query doesn't take care of like '["gym_id", "gym_id"]'
$onlyTriggerGyms = false;                                           // Only show EX-Gyms that are defined in $triggerGyms
$noExGyms = false;                                                  // Do not display EX-Gyms on the map

//-----------------------------------------------------
// Manual Submissions
// In order to make Manual Raids and Quests work you need to have the $geoJSONfile set to a valid geoJSON.json file
//-----------------------------------------------------

$noSubmit = true;                                                   // true/false
$hideIfManual = false;                                              // true/false
$noManualRaids = true;                                              // true/false | Enable/Disable ManualRaids permanently ( Comment this line if you want to use the block below )
$noDiscordSubmitLogChannel = true;                                  // Send webhooks to discord channel upon submission
$submitMapUrl = '';
$discordSubmitLogChannelUrl = 'https://discordapp.com/api/webhooks/<yourCHANNELhere>';    // Sends gym/pokestop submit & pokestop rename directly to discord can also be an array ['URL', 'URL'] or as many as you like.
$discordPOISubmitLogChannelUrl = 'https://discordapp.com/api/webhooks/<yourCHANNELhere>'; // Sends gym/pokestop submit & pokestop rename directly to discord can also be an array ['URL', 'URL'] or as many as you like.
$noManualPokemon = true;                                            // true/false
$pokemonTimer = 900;                                                // Time in seconds before a submitted Pokémon despawns. (not used atm)
$noManualGyms = true;                                               // true/false
$noRenameGyms = true;                                               // true/false
$noManualPokestops = true;                                          // true/false
$noRenamePokestops = true;                                          // true/false
$noConvertPokestops = true;                                         // true/false
$noManualQuests = true;                                             // true/false

//-----------------------------------------------------
// Ingress portals
//-----------------------------------------------------

$enablePortals = 'false';                                           // true/false
$enableNewPortals = 0;                                              // O: all, 1: new portals only
$noPortals = true;                                                  // true/false
$noDeletePortal = true;                                             // true/false
$noConvertPortal = true;                                            // true/false
$markPortalsAsNew = 86400;                                          // Time in seconds to mark new imported portals as new ( 86400 for 1 day )

//-----------------------------------------------------
// s2 cells
//-----------------------------------------------------

$noS2Cells = true;                                                  // true/false
$enableS2Cells = 'false';                                           // true/false
$noPlacementRanges = false;                                         // true/false
$enablePlacementRanges = 'false';                                   // true/false
$enableLevel13Cells = 'false';                                      // true/false
$enableLevel14Cells = 'false';                                      // true/false
$enableLevel15Cells = 'false';                                      // true/false
$enableLevel17Cells = 'false';                                      // true/false

$s2Colors = [
    'red',          // pokestop placement cell with a marker
    'green',        // 1 more until new gym
    'orange',       // 2 more until new gym
    'black'         // Max amount of gyms reached
];

//-----------------------------------------------------
// POI
//-----------------------------------------------------

$noPoi = true;                                                      // true/false | Allow users to view POI markers
$noAddPoi = true;                                                   // true/false | Allow to add POI markers (locations eligible for submitting Pokestops/Ingress portals)
$enablePoi = 'false';                                               // true/false
$noDeletePoi = true;                                                // true/false
$noEditPoi = true;                                                  // true/false
$noMarkPoi = true;                                                  // true/false

$noDeleteGyms = false;                                              // true/false
$noToggleExGyms = false;                                            // true/false
$noDeletePokestops = false;                                         // true/false

$raidBosses = [1, 4, 7, 129, 138, 140, 147, 82, 108, 125, 126, 185, 303, 65, 68, 95, 106, 107, 123, 135, 142, 76, 112, 131, 143, 248, 359, 144, 145, 146, 377];

$sendWebhook = false;                                               // true/false | Sends Raids & Pokémon. Needs a 3th party program like pokealarm.
$webhookUrl = null;                                                 //['url-1','url-2']

//---------------------------------------------------
// Quest Webhooks
//---------------------------------------------------

$sendQuestWebhook = false;                                          // Experimental use only
$questWebhookUrl = null;                                            // Experimental use only
$webhookSystem = [''];                                              // Supported are either 'pokealarm' or 'poracle'

$manualFiveStar = [
    'webhook' => false,                                             // If set to false no webhooks will be send on raid_cron.php
    'pokemon_id' => 377,
    'cp' => 41777,
    'move_1' => null,
    'move_2' => null,
    'form' => 0
];

//-----------------------------------------------------
// Search
//-----------------------------------------------------

$noSearch = false;                                                  // true/false
$noSearchPokestops = true;                                          // true/false
$noSearchGyms = true;                                               // true/false
$noSearchManualQuests = false;                                      // true/false
$noSearchNests = true;                                              // true/false
$noSearchPortals = true;                                            // true/false
$noSearchPokemon = true;                                            // true/false
$defaultUnit = "km";                                                // mi/km
$maxSearchResults = 10;                                             //Max number of search results
$maxSearchNameLength = 0;                                           // 0 = Unlimited. Shorten pokestop names in reward search results if longer than this value to prevent UI layout issues

//-----------------------------------------------------
// Community
//-----------------------------------------------------

$noCommunity = true;                                                // true/false
$enableCommunities = 'false';                                       // true/false
$noAddNewCommunity = true;                                          // true/false
$noDeleteCommunity = true;                                          // true/false
$noEditCommunity = true;                                            // true/false

//-----------------------------------------------------
// Nests
//-----------------------------------------------------

$noNests = true;                                                    // true/false
$noNestsAvg = true;                                                 // true/false
$nestAvgMax = 50;                                                   // Nest Average filter maximum
$nestAvgDefault = 5;                                                // Nest Average filter default
$enableNests = 'false';                                             // true/false
$hideNestCoords = false;                                            // true/false
$noManualNests = true;                                              // true/false
$noDeleteNests = true;                                              // true/false
$deleteNestsOlderThan = 42;                                         // days after not updated nests are removed from database by nest cron
$nestBotName = "NestBot";
$migrationDay = strtotime('5 April 2018');                          // Adjust day value after non consitent 14 day migration
$noAddNewNests = true;                                              // true/false
$excludeNestMons = [2,3,5,6,8,9,11,12,14,15,17,18,20,22,24,26,28,29,30,31,32,33,34,36,38,40,42,44,45,49,51,53,55,57,59,61,62,64,65,67,68,70,71,73,75,76,78,80,82,83,85,87,88,89,91,93,94,97,99,101,103,105,106,107,108,109,110,112,113,114,115,117,119,121,122,128,130,131,132,134,135,136,137,139,142,143,144,145,146,147,148,149,150,151,153,154,156,157,159,160,161,162,163,164,165,166,167,168,169,171,172,173,174,175,176,177,178,179,180,181,182,183,184,186,187,188,189,191,192,194,195,196,197,199,201,204,205,207,208,210,212,214,217,218,219,221,222,223,224,225,228,229,230,232,233,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,253,254,256,257,259,260,262,263,264,265,266,267,268,269,270,271,272,274,275,276,277,279,280,281,282,284,286,287,288,289,290,291,292,293,294,295,297,298,301,303,304,305,306,308,310,313,314,316,317,319,321,323,324,326,327,328,329,330,331,332,334,335,336,337,338,339,340,342,344,346,348,349,350,351,352,354,356,357,358,359,360,361,362,363,364,365,366,367,368,369,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386];

$noNestPolygon = true;                                              // true/false
$enableNestPolygon = 'false';                                       // true/false
$nestGeoJSONfile = 'custom/nest.json';                              // path to geoJSON file provided by https://github.com/M4d40/PMSFnestScript

//-----------------------------------------------------
// Areas
//-----------------------------------------------------

$noAreas = true;                                                    // true/false
$quickAreas = [
    "Newyork" => [
        "Manhattan" => "lat,lon,zoom",
        "Brooklyn" => "lat,lon,zoom",
        "Queens" => "lat,lon,zoom"
    ],
    "Los Angeles" => [
        "Pasadena" => "lat,lon,zoom",
        "Glendale" => "lat,lon,zoom",
        "Montebello" => "lat,lon,zoom",
        "Inglewood" => "lat,lon,zoom",
        "Santa Monica" => "lat,lon,zoom"
    ],
    "Las Vegas" => "lat,lon,zoom",
    "Albuquerque" => "lat,lon,zoom",
    "Dallas" => "lat,lon,zoom",
    "Chicago" => "lat,lon,zoom",
    "Sacramento" => "lat,lon,zoom",
    "Denver" => "lat,lon,zoom"
];

//-----------------------------------------------------
// Weather Config
//-----------------------------------------------------

$noHeaderWeatherIcon = true;                                        // true/false
$noWeatherOverlay = true;                                           // true/false
$enableWeatherOverlay = 'false';                                    // true/false

$weather = [
    0 => null,
    1 => 'clear',
    2 => 'rain',
    3 => 'partly_cloudy',
    4 => 'cloudy',
    5 => 'windy',
    6 => 'snow',
    7 => 'fog'
];

$weatherColors = [
    'grey',         // no weather
    '#fdfd96',      // clear
    'darkblue',     // rain
    'grey',         // partly cloudy
    'darkgrey',     // cloudy
    'purple',       // windy
    'white',        // snow
    'black'         // fog
];

//-----------------------------------------------------
// Holiday Overlay
//-----------------------------------------------------

$letItSnow = true;                                                  // Show snow overlay between 24th and 26th December
$makeItBang = false;                                                // Show fireworks overlay between 31st December and 1st January
$showYourLove = false;                                              // Show valentine overlay on 14th February

//-----------------------------------------------------
// DEBUGGING
//-----------------------------------------------------

// Do not enable unless requested
$enableDebug = false;                                               // true/false
$enableJSDebug = false;                                             // true/false

//-----------------------------------------------------
// DATABASE CONFIG
//-----------------------------------------------------

$map = "rdm";                                                       // rdm / rocketmap
$fork = "default";                                                  // default / mad
$queryInterval = '5000';                                            // Interval between raw_data requests.

$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'scannerdb',
    'server' => '127.0.0.1',
    'username' => 'database_user',
    'password' => 'database_password',
    'charset' => 'utf8',

    // [optional]
    'port' => 3306                                                 // Comment out if not needed, just add // in front!
    //'socket' => /path/to/socket/,
]);
//-----------------------------------------------------
//Manual Database is used for:
//Login
//Community markers
//Ingress Portal markers
//Nest markers
//POI markers
//Clean DB files are to be found in the sql/manualdb folder.
//Uncomment the section below to use mentioned manual functions.
//-----------------------------------------------------
//$manualdb = new Medoo([
//    'database_type' => 'mysql',
//    'database_name' => 'manualdb',
//    'server' => '127.0.0.1',
//    'username' => 'database_user',
//    'password' => 'database_password',
//    'charset' => 'utf8mb4'
//]);

// DONT EDIT THE CODE BELOW UNLESS YOU KNOW WHAT YOUR ARE DOING
if (($noNativeLogin === false || $noDiscordLogin === false || $noFacebookLogin === false || $noPatreonLogin === false) && !empty($_SESSION['user']->user)) {
    if (file_exists('config/access-config.php')) {
        include 'config/access-config.php';
    }
}
