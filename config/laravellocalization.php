<?php

return [
    // Locales information
    'supportedLocales' => [
        'en' => ['name' => 'English', 'script' => 'Latn', 'native' => 'English', 'regional' => 'en_US'],
        'ar' => ['name' => 'Arabic',  'script' => 'Arab', 'native' => 'العربية',  'regional' => 'ar_AE'], // Using AE as example regional
        'he' => ['name' => 'Hebrew',  'script' => 'Hebr', 'native' => 'עברית',    'regional' => 'he_IL'], // Using IL as example regional
    ],

    // Use Illuminate\Support\Facades\Request::getPreferredLanguage() to detect
    // the language automatically. You MUST configure your web server to pass
    // the Accept-Language header correctly for this feature to work.
    // See: https://github.com/mcamara/laravel-localization/wiki/Automatically-Detect-Visitor-Locale
    'useAcceptLanguageHeader' => true, // DETECT BROWSER LANGUAGE

    // If LaravelLocalizationRedirectFilter is active and hideDefaultLocaleInURL
    // is true, the url would not have the default application language
    //
    // IMPORTANT: If you want BOTH domain.com/url AND domain.com/lang/url to work,
    // you need middleware. Setting this to true means domain.com/url will ONLY
    // work for the DEFAULT locale ('en' in this case). Prefixed routes always work.
    'hideDefaultLocaleInURL' => true, // Allows domain.com/about for English

    // If you want to display the locales in particular order in the language selector,
    // you should define the order here. Read the documentation provided examples.  
    // 'localesOrder' => ['en', 'ar', 'he'], // Optional: Define order if needed

    // Set the default locale if none is detected (browser, cookie, URL)
    'defaultLocale' => 'en',

    // If you want to use cookies to set locale instead of sessions, set this parameter to true
    // The locale will be stored in a cookie named 'laravel_localization'.
    // Note: Use 'localeSessionRedirect' or 'localeCookieRedirect' middleware accordingly.
    // We will use the Session redirect middleware by default as it's common.
    // The package *reads* cookies automatically if 'useAcceptLanguageHeader' is true
    // as part of the detection chain, but this sets whether *storing* uses cookie or session.
    'useCookieLocalization' => false, // We'll use session for remembering choice via middleware

    // Key used in Session/Cookie to store the locale.
    'sessionKey' => 'laravel_localization_locale', // Default session key name
    'cookieName' => 'laravel_localization_locale', // Default cookie name

    // Set the class handling localization logic. Modify only if necessary.
    // 'translator' => \Mcamara\LaravelLocalization\Translator::class,

    // Set the service provider for localization routes. Modify only if necessary.
    // 'serviceProvider' => \Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider::class,
];
