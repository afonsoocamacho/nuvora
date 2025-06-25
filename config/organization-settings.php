<?php

// use App\Models\Language;
// use App\Models\Currency;

// return [
//     'dashboard_theme' => [
//         'type' => 'select',
//         'label' => 'Dashboard Theme',
//         'options' => ['light', 'dark', 'nuvora'],
//         'default' => 'light',
//     ],
//     'auto_approve_members' => [
//         'type' => 'boolean',
//         'label' => 'Auto-Approve New Members',
//         'default' => false,
//     ],
//     'notifications_enabled' => [
//         'type' => 'boolean',
//         'label' => 'Enable Notifications',
//         'default' => true,
//     ],
//     'timezone' => [
//         'type' => 'select',
//         'label' => 'Timezone',
//         'options' => timezone_identifiers_list(),
//         'default' => 'Europe/Lisbon',
//     ],
//     'language_id' => [
//         'type' => 'select',
//         'label' => 'Default Language',
//         'options' => Language::pluck('name', 'id')->toArray(),
//         'default' => 1, // e.g. English
//     ],

//     'currency_id' => [
//         'type' => 'select',
//         'label' => 'Default Currency',
//         'options' => Currency::pluck('name', 'id')->toArray(),
//         'default' => 1, // e.g. EUR
//     ],
//     'date_format' => [
//         'type' => 'select',
//         'label' => 'Date Format',
//         'options' => [
//             'Y-m-d' => 'YYYY-MM-DD',
//             'd/m/Y' => 'DD/MM/YYYY',
//             'm/d/Y' => 'MM/DD/YYYY',
//         ],
//         'default' => 'Y-m-d',
//     ],
//     'enable_age_restriction' => [
//         'type' => 'boolean',
//         'label' => 'Enable Age Restriction',
//         'default' => false,
//     ],
//     'age_restriction' => [
//         'type' => 'number',
//         'label' => 'Minimum Age Restriction',
//         'default' => 18,
//         'min' => 0,
//     ],
//     'enable_2fa' => [
//         'type' => 'boolean',
//         'label' => 'Enable Two-Factor Authentication',
//         'default' => false,
//     ],
//     'plan_auto_renewal' => [
//         'type' => 'boolean',
//         'label' => 'Enable Plan Auto-Renewal',
//         'default' => true,
//     ],
// ];
