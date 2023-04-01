<?php

?>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/newsmain.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
    </style>
    <script defer src="{{ asset('assets/js/newsmain.js') }}"></script>
    <title>News</title>
</head>

<body>
    <nav>
        <div>
            <span onclick="renderNews('all')">"Всё"</span>
        </div>
        <div>
            <span onclick="renderNews('books')">"Книги"</span>
        </div>
        <div>
            <span onclick="renderNews('films')">"Кино"</span>
        </div>
        <div>
            <span onclick="renderNews('games')">"Игры"</span>
        </div>
        <div>
            <span onclick="renderNews('finances')">"Финансы"</span>
        </div>
    </nav>

    <section class="newsBlock" id="newsworkplace">
    </section>
</body>
<template id="newsItem-tmpl">
    <div class="newsItem">
        <p class="colorgrey">--category</p>
        <p class="newsTitle" onclick="renderSingleNews(--id)">--title</p>
        <div class="newsItemStats">
            <div class="flexrow">
                <div>
                    <img class="newsItemStat newsViews">
                    <span>--views</span>
                </div>
                <div>
                    <img class="newsItemStat newsLikes">
                    <span>--likes</span>
                </div>
                <div>
                    <img class="newsItemStat newsDislikes">
                    <span>--dislikes</span>
                </div>
            </div>

        </div>
    </div>
</template>

</html>

</html>