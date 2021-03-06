<?php

$generalInfo = \App\Models\GeneralInfoEn::all()->first();

return [
    //*** Meta Information ***//
    'metaDescription'   =>  'Takara Belmont | Duso официальный дистрибьютор',

    //*** Navigation Bar ***//
    'home'                  =>  'Главная',
    'homePage'              =>  'ГЛАВНАЯ СТРАНИЦА',
    'company'               =>  'О компании',
    'profile'               =>  'Профиль',
    'philosophy'            =>  'Философия',
    'history'               =>  'История',
    'distribution'          =>  'Дистрибьюторы',
    'products'              =>  'Товары',
    'productHighlights'     =>  'ТОП товаров',
    'latestNews'            =>  'Последние новости',
    'categories'            =>  'Категории',
    'lines'                 =>  'Линейки',
    'designers'             =>  'Дизайнеры',
    'designer'              =>  'Дизайнер',
    'designCenters'         =>  'Центры дизайна',
    'salonLayouts'          =>  'Макеты салонов',
    'salonPictures'         =>  'Фото салонов',
    'showrooms'             =>  'Шоурумы',
    'salonPlanner'          =>  'Планировщик салона',
    'news'                  =>  'Новости',
    'contacts'              =>  'Контакты',
    'emails'                =>  'Электронные адреса',
    'infoRequests'          =>  'Информационные запросы',
    'sendApplication'       =>  'Отправить резюме',
    'catalogRequests'       =>  'Запросы каталогов',
    'searchPlaceholder'     =>  'Название товара или код',
    'privacyPolicy'         =>  'Политика конфиденциальности',
    'productsSearch'        =>  'Поиск товаров',
    'productsFound'         =>  'Товаров найдено',
    'catalogRequest'        =>  'ЗАПРОС КАТАЛОГОВ',
    'website'               =>  'Вебсайт',
    'distributorText'       =>  'Официальный дистрибьютор',
    'search'                =>  'Поиск',


    //*** Side Bar ***//
    'sidebar.salonPictures' => 'Фото салонов',
    'sidebar.salonTrends'   => 'Тренды салонов',

    //*** Footer ***//
    'rightsReserved'        =>  'Все права защищены',

    //*** Basic ***//
    'more'                  =>  'Узнать больше',
    'back'                  =>  'Назад',
    'code'                  =>  'Код',
    'features'              =>  'Особенности',
    'dimensions'            =>  'Размеры',
    'sameLine'              =>  'Та же линия',
    'similarProducts'       =>  'Похожие продукты',
    'pageNotFound'          =>  'Страница не найдена',
    'urlNotFound'           =>  'Запрашиваемый линк не найден на сервере',

    //*** Distribution ***//
    'africa'                =>  'Африка',
    'europe'                =>  'Европа',
    'asia'                  =>  'Азия',
    'northAmerica'          =>  'Северная Америка',
    'southAmerica'          =>  'Южная Америка',
    'oceania'               =>  'Океания',
    'dealersIn'             =>  'Дилеры в',
    'backWorld'             =>  'Назад [Мир]',

    'albania'               =>  'Албания',
    'andorra'               =>  'Андорра',
    'liechtenstein'         =>  'Лихтенштейн',
    'bosnia'                =>  'Босния и Герцоговина',
    'belarus'               =>  'Республика Беларусь',
    'bulgaria'              =>  'Болгария',
    'croatia'               =>  'Хорватия',
    'czech'                 =>  'Республика Чехия',
    'denmark'               =>  'Дания',
    'estonia'               =>  'Эстония',
    'faroeIslands'          =>  'Фаррерские острова',
    'georgia'               =>  'Грузия',
    'luxembourg'            =>  'Люксембург',
    'belgium'               =>  'Бельгия',
    'spain'                 =>  'Испания',
    'portugal'              =>  'Португалия',
    'unitedKingdom'         =>  'Великобритания',
    'france'                =>  'Франция',
    'greece'                =>  'Греция',
    'hungary'               =>  'Венгрия',
    'iceland'               =>  'Исландия',
    'ireland'               =>  'Ирландия',
    'sanMarino'             =>  'Сан Марино',
    'italy'                 =>  'Италия',
    'serbia'                =>  'Сербия и Черногория',
    'latvia'                =>  'Латвия',
    'lithuania'             =>  'Литва',
    'macedonia'             =>  'Македония',
    'malta'                 =>  'Мальта',
    'moldova'               =>  'Республика Молдова',
    'netherlands'           =>  'Нидерланды',
    'norway'                =>  'Норвегия',
    'poland'                =>  'Польша',
    'romania'               =>  'Румыния',
    'russia'                =>  'Российская Федерация',
    'slovakia'              =>  'Словакия',
    'slovenia'              =>  'Словения',
    'sweden'                =>  'Швеция',
    'switzerland'           =>  'Швейцария',
    'austria'               =>  'Австрия',
    'turkey'                =>  'Турция',
    'ukraine'               =>  'Украина',
    'northenMarianaIslands' =>  'Северные Марианские острова',
    'monaco'                =>  'Монако',
    'finland'               =>  'Финляндия',
    'germany'               =>  'Германия',
    'antarctica'            =>  'Антарктида',
    'armenia'               =>  'Армения',
    'azerbaijan'            =>  'Азербайджан',

    //*** Company ***//
    'homeText'              =>  $generalInfo['company_desc_short'],
    'profileText'           =>  $generalInfo['company_desc_long'],
    'philosophyText'        =>  $generalInfo['company_philosophy_content'],
    'historyText'           =>  $generalInfo['company_history_content'],
    'cookiePolicy'          =>  $generalInfo['cookie_policy_content'],
    'privacyPolicyText'     =>  $generalInfo['privacy_policy_content'],
    'homeHeader'            =>  'Мебель для салонов красоты и оборудование салона красоты',
    'echosCollection'       =>  'Коллекция Echoes',

    //*** Design Center ***//
    'clickPlanner'          =>  'Пожалуйста, кликните сюда для запуска Планировщика Салона',
    'versionInCm'           =>  'Версия в сантиметрах',
    'versionInInch'         =>  'Версия в дюймах',
    'welcomeLaunchPad'      =>  'Добро пожаловать в интерактивную версию Планировщика Салона',
    'launchPadText'         =>  $generalInfo['salon_planner_content'],
    'emailsContacts'        =>  $generalInfo['contacts_emails_content'],
    'emailsMapLink'         =>  $generalInfo['contacts_googlemaps_link'],
    'notFound'              =>  'Страница не найдена'
];
