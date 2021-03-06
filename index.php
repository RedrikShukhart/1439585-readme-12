<?php
date_default_timezone_set('Europe/Moscow');
require_once('helpers.php');
require_once('functions.php');

$is_auth = rand(0, 1);
$user_name = 'Стас';

$cards = [
    [
        'title' => 'Цитата',
        'type' => 'post-quote',
        'content' => 'Мы в жизни любим только раз, а после ищем лишь похожих',
        'user_name' => 'Лариса',
        'avatar' => 'userpic-larisa-small.jpg'
    ],
    [
        'title' => 'Игра престолов',
        'type' => 'post-text',
        'content' => 'Не могу дождаться начала финального сезона своего любимого сериала!',
        'user_name' => 'Владик',
        'avatar' => 'userpic.jpg'
    ],
    [
        'title' => 'Наконец, обработал фотки!',
        'type' => 'post-photo',
        'content' => 'rock-medium.jpg',
        'user_name' => 'Виктор',
        'avatar' => 'userpic-mark.jpg'
    ],
    [
        'title' => 'Моя мечта',
        'type' => 'post-photo',
        'content' => 'coast-medium.jpg',
        'user_name' => 'Лариса',
        'avatar' => 'userpic-larisa-small.jpg'
    ],
    [
        'title' => 'Лучшие курсы',
        'type' => 'post-link',
        'content' => 'www.htmlacademy.ru',
        'user_name' => 'Владик',
        'avatar' => 'userpic.jpg'
    ],
    [
        'title' => 'Все лгут. Поисковики, Big Data и Интернет',
        'type' => 'post-text',
        'content' => 'Однако этот набор данных – не единственный инструмент для понимания нашего мира, предоставляемый интернетом. Вскоре я понял, что есть и другие золотоносные цифровые жилы. Я скачал всю Википедию, покопался в профилях Facebook и прошерстил Stormfront. Кроме того, PornHub, один из крупнейших порнографических сайтов интернета, дал мне свои полные данные по анонимному поиску и просмотрам видео, которые совершали люди со всего мира.',
        'user_name' => 'Владик',
        'avatar' => 'userpic.jpg'
    ],
    [
        'title' => 'Все лгут. Поисковики, Big Data',
        'type' => 'post-text',
        'content' => 'Сначала должен признаться: я не собираюсь давать точное определение того, что такое «большие данные». Почему? Потому что это, по сути, довольно расплывчатое понятие',
        'user_name' => 'Владик',
        'avatar' => 'userpic.jpg'
    ]
];

$mainContent = include_template('main.php', ['cards' => $cards]);

$popularPage = include_template('layout.php', ['mainContent' => $mainContent, 'user_name' => $user_name, 'titleName' => 'readme: популярное', 'is_auth' => $is_auth]);

print_r($popularPage);
