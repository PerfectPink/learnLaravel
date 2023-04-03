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
            <span onclick="renderNews('all')">All</span>
        </div>
        <div>
            <span onclick="renderNews('books')">Books</span>
        </div>
        <div>
            <span onclick="renderNews('films')">Cinema</span>
        </div>
        <div>
            <span onclick="renderNews('games')">Games</span>
        </div>
        <div>
            <span onclick="renderNews('finances')">Finances</span>
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
<template id="singleNewView-tmpl">
    <div class="wrapper">
        <div>
            <!-- upper section -->
            <div>
                <p class="f-30px">--title</p> 
            </div>
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
            <div>
                <span class="f-28px">--description</span>
            </div>
            <div class="reviewSection f-24px" id="reviewSection">
                <!-- likes/dislikes section -->
                <p>Do you liked this news?</p>
                <div >
                    <button class="ratingButton newsDislikes" onclick="ratingChange('dislikes','--id',this)">
                        <!-- <img src="{{ asset('assets/img/like.png') }}"> -->
                    </button>
                    <button class="ratingButton newsLikes" onclick="ratingChange('likes','--id',this)">
                        <!-- <img src="{{ asset('assets/img/dislike.png') }}"> -->
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

</html>

</html>