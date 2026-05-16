<?php
// Базовые настройки сайта
session_start();

$SITE = [
    'name'      => 'LAMBADA BONUS',
    'project'   => 'CRMP ПРОЕКТ',
    'year'      => date('Y'),
    'vk'        => 'vk.com/lambadabonus',
    'discord'   => 'discord.gg/lambadabonus',
    'online'    => 1891,
];

// Демо-пользователь
$USER = [
    'name' => 'Игрок',
    'id'   => 12345,
];

// Список серверов
$SERVERS = [
    ['num' => '01', 'name' => 'LAMBADA BONUS | 01 SERVER', 'online' => 856, 'slots' => 1000, 'ping' => 65,  'ping_color' => 'good'],
    ['num' => '02', 'name' => 'LAMBADA BONUS | 02 SERVER', 'online' => 623, 'slots' => 1000, 'ping' => 78,  'ping_color' => 'mid'],
    ['num' => '03', 'name' => 'LAMBADA BONUS | 03 SERVER', 'online' => 412, 'slots' => 1000, 'ping' => 102, 'ping_color' => 'bad'],
];

// Новости
$NEWS = [
    [
        'tag'   => 'важно',
        'tag_color' => 'red',
        'title' => 'ОТКРЫТИЕ ПРОЕКТА',
        'text'  => 'Сервер открылся! Ждём каждого наших игроков!',
        'date'  => '24.05.2025',
        'time'  => '12:00',
    ],
    [
        'tag'   => 'обновление',
        'tag_color' => 'blue',
        'title' => 'СТАБИЛЬНЫЕ ОБНОВЛЕНИЯ',
        'text'  => 'Мы регулярно выпускаем обновления для вашего комфорта!',
        'date'  => '23.05.2025',
        'time'  => '18:30',
    ],
    [
        'tag'   => 'событие',
        'tag_color' => 'green',
        'title' => 'ИВЕНТЫ И МЕРОПРИЯТИЯ',
        'text'  => 'Участвуй в мероприятиях и получай уникальные награды!',
        'date'  => '22.05.2025',
        'time'  => '20:15',
    ],
];

// Меню сайдбара
$MENU = [
    ['key' => 'index',     'label' => 'ГЛАВНАЯ',   'icon' => 'home'],
    ['key' => 'news',      'label' => 'НОВОСТИ',   'icon' => 'news'],
    ['key' => 'servers',   'label' => 'СЕРВЕРЫ',   'icon' => 'server'],
    ['key' => 'shop',      'label' => 'МАГАЗИН',   'icon' => 'cart'],
    ['key' => 'settings',  'label' => 'НАСТРОЙКИ', 'icon' => 'gear'],
    ['key' => 'support',   'label' => 'ПОДДЕРЖКА', 'icon' => 'headset'],
    ['key' => 'account',   'label' => 'АККАУНТ',   'icon' => 'user'],
    ['key' => 'logout',    'label' => 'ВЫХОД',     'icon' => 'exit'],
];
