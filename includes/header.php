<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/icons.php';

if (!isset($PAGE)) $PAGE = 'index';
if (!isset($PAGE_TITLE)) $PAGE_TITLE = 'Главная';
?>
<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= htmlspecialchars($SITE['name']) ?> — <?= htmlspecialchars($PAGE_TITLE) ?></title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="app">
    <?php include __DIR__ . '/sidebar.php'; ?>
    <main class="main">
