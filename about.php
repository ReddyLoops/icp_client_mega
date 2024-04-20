<!DOCTYPE html>
<html>

<head>
    <title>ABOUT - ICP </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<?php include 'nav.php';?>
<!-- image gallery style -->
<style>
@import url("https://fonts.googleapis.com/css2?family=Give+You+Glory&display=swap");

.image_gallery {
    height: 100%;
    width: 100%;
    padding: 0;
    margin: 0;
    font-family: "Give You Glory", cursive;
    background: #222;
    color: whitesmoke;
}

.wrapper {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 10rem 0;
}

.text {
    order: -1;
    flex-basis: 40rem;
    font-size: 10rem;
    text-align: center;
    line-height: 8rem;
    padding-right: 5rem;
    color: #32CD32;
}

.images {
    position: relative;
    flex-basis: 95rem;
}

.images img {
    position: relative;
    width: 30.75rem;
    height: 24.5rem;
    border: 1px solid #111;
    filter: grayscale(100%);
    opacity: 0.5;
    transition: 0.4s ease;
}

.images img:hover {
    cursor: pointer;
    filter: grayscale(0%);
    opacity: 1;
}

.images img.zoom {
    transform: scale(1.2);
    filter: grayscale(0%);
    border: 1px solid transparent;
    z-index: 99;
}

/* CONTACTS */
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");



.contacts_about {
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Poppins", sans-serif;
}

.contact-container {
    margin-top: 45px;
    max-width: 1500px;
    width: 100%;
    margin: 0 auto;
}

:root {
    /* //....... Color ........// */
    --primary-color: #ff3c78;
    --light-black: rgba(0, 0, 0, 0.89);
    --black: #000;
    --white: #fff;
    --grey: #aaa;
}


.form {
    display: flex;
    justify-content: space-between;
    margin: 80px 0;
}

.form .form-txt {
    flex-basis: 48%;
}

.form .form-txt h1 {
    font-weight: 600;
    color: var(--black);
    font-size: 40px;
    letter-spacing: 1.5px;
    margin: 0 0 10px 0;
    color: var(--light-black);
}

.form .form-txt span {
    color: var(--light-black);
    font-size: 14px;
}

.form .form-txt h3 {
    font-size: 22px;
    font-weight: 600;
    margin: 15px 0;
    color: var(--light-black);
}

.form .form-txt p {
    color: var(--light-black);
    font-size: 14px;
    margin: 0;
}

.form .form-details {
    flex-basis: 48%;
}


@media (max-width: 500px) {
    .form {
        display: flex;
        flex-direction: column;
    }

}

@media(min-width: 501px) and (max-width: 768px) {
    .form {
        display: flex;
        flex-direction: column;
    }

}

/* GOOGLE MAPS */
.map-wrapper {
    max-width: 800px;
    margin: 0 auto;
    padding: 40px 20px;
    background-color: #fff;
    box-shadow: 0 4px 9px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.map-wrapper h1 {
    text-align: center;
    font-size: 28px;
    font-weight: bold;
    color: #333;
    margin-bottom: 30px;
}

.map-container {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;

}

iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 10px;
}
</style>


<!-- TIMELINE -->
<style>
/* -------------------------------- 

Primary style

-------------------------------- */
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro);

*,
*::after,
*::before {
    box-sizing: border-box;
}

html {
    font-size: 62.5%;
}

/* body {
  font-size: 1.6rem;
  font-family: "Source Sans Pro", sans-serif;
  color: #383838;
  background-color: #f8f8f8;
} */

a {
    color: #7b9d6f;
    text-decoration: none;
}

/* -------------------------------- 

Main Components 

-------------------------------- */
.cd-horizontal-timeline {
    opacity: 0;
    margin: 2em auto;
    -webkit-transition: opacity 0.2s;
    -moz-transition: opacity 0.2s;
    transition: opacity 0.2s;
}

.cd-horizontal-timeline::before {
    /* never visible - this is used in jQuery to check the current MQ */
    content: 'mobile';
    display: none;
}

.cd-horizontal-timeline.loaded {
    /* show the timeline after events position has been set (using JavaScript) */
    opacity: 1;
}

.cd-horizontal-timeline .timeline {
    position: relative;
    height: 100px;
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
}

.cd-horizontal-timeline .events-wrapper {
    position: relative;
    height: 100%;
    margin: 0 40px;
    overflow: hidden;
}

.cd-horizontal-timeline .events-wrapper::after,
.cd-horizontal-timeline .events-wrapper::before {
    /* these are used to create a shadow effect at the sides of the timeline */
    content: '';
    position: absolute;
    z-index: 2;
    top: 0;
    height: 100%;
    width: 20px;
}

/* .cd-horizontal-timeline .events-wrapper::before {
  left: 0;
  background-image: -webkit-linear-gradient( left , #f8f8f8, rgba(248, 248, 248, 0));
  background-image: linear-gradient(to right, #f8f8f8, rgba(248, 248, 248, 0));
}
.cd-horizontal-timeline .events-wrapper::after {
  right: 0;
  background-image: -webkit-linear-gradient( right , #f8f8f8, rgba(248, 248, 248, 0));
  background-image: linear-gradient(to left, #f8f8f8, rgba(248, 248, 248, 0));
} */
.cd-horizontal-timeline .events {
    /* this is the grey line/timeline */
    position: absolute;
    z-index: 1;
    left: 0;
    top: 49px;
    height: 2px;
    /* width will be set using JavaScript */
    background: #dfdfdf;
    -webkit-transition: -webkit-transform 0.4s;
    -moz-transition: -moz-transform 0.4s;
    transition: transform 0.4s;
}

.cd-horizontal-timeline .filling-line {
    /* this is used to create the green line filling the timeline */
    position: absolute;
    z-index: 1;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-color: #7b9d6f;
    -webkit-transform: scaleX(0);
    -moz-transform: scaleX(0);
    -ms-transform: scaleX(0);
    -o-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: left center;
    -moz-transform-origin: left center;
    -ms-transform-origin: left center;
    -o-transform-origin: left center;
    transform-origin: left center;
    -webkit-transition: -webkit-transform 0.3s;
    -moz-transition: -moz-transform 0.3s;
    transition: transform 0.3s;
}

.cd-horizontal-timeline .events a {
    position: absolute;
    bottom: 0;
    z-index: 2;
    text-align: center;
    font-size: 1.3rem;
    padding-bottom: 15px;
    color: #383838;
    /* fix bug on Safari - text flickering while timeline translates */
    -webkit-transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -o-transform: translateZ(0);
    transform: translateZ(0);
}

.cd-horizontal-timeline .events a::after {
    /* this is used to create the event spot */
    content: '';
    position: absolute;
    left: 50%;
    right: auto;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: -5px;
    height: 12px;
    width: 12px;
    border-radius: 50%;
    border: 2px solid #dfdfdf;
    background-color: #f8f8f8;
    -webkit-transition: background-color 0.3s, border-color 0.3s;
    -moz-transition: background-color 0.3s, border-color 0.3s;
    transition: background-color 0.3s, border-color 0.3s;
}

.no-touch .cd-horizontal-timeline .events a:hover::after {
    background-color: #7b9d6f;
    border-color: #7b9d6f;
}

.cd-horizontal-timeline .events a.selected {
    pointer-events: none;
}

.cd-horizontal-timeline .events a.selected::after {
    background-color: #7b9d6f;
    border-color: #7b9d6f;
}

.cd-horizontal-timeline .events a.older-event::after {
    border-color: #7b9d6f;
}

@media only screen and (min-width: 1100px) {
    .cd-horizontal-timeline {
        margin: 6em auto auto auto;
    }

    .cd-horizontal-timeline::before {
        /* never visible - this is used in jQuery to check the current MQ */
        content: 'desktop';
    }
}

.cd-timeline-navigation a {
    /* these are the left/right arrows to navigate the timeline */
    position: absolute;
    z-index: 1;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    height: 34px;
    width: 34px;
    border-radius: 50%;
    border: 2px solid #dfdfdf;
    /* replace text with an icon */
    overflow: hidden;
    color: transparent;
    text-indent: 100%;
    white-space: nowrap;
    -webkit-transition: border-color 0.3s;
    -moz-transition: border-color 0.3s;
    transition: border-color 0.3s;
}

.cd-timeline-navigation a::after {
    /* arrow icon */
    content: '';
    position: absolute;
    height: 16px;
    width: 16px;
    left: 50%;
    top: 50%;
    bottom: auto;
    right: auto;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    -o-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background: url(../img/cd-arrow.svg) no-repeat 0 0;
}

.cd-timeline-navigation a.prev {
    left: 0;
    -webkit-transform: translateY(-50%) rotate(180deg);
    -moz-transform: translateY(-50%) rotate(180deg);
    -ms-transform: translateY(-50%) rotate(180deg);
    -o-transform: translateY(-50%) rotate(180deg);
    transform: translateY(-50%) rotate(180deg);
}

.cd-timeline-navigation a.next {
    right: 0;
}

.no-touch .cd-timeline-navigation a:hover {
    border-color: #7b9d6f;
}

.cd-timeline-navigation a.inactive {
    cursor: not-allowed;
}

.cd-timeline-navigation a.inactive::after {
    background-position: 0 -16px;
}

.no-touch .cd-timeline-navigation a.inactive:hover {
    border-color: #dfdfdf;
}

.cd-horizontal-timeline .events-content {
    position: relative;
    width: 100%;
    margin: 2em 0;
    overflow: hidden;
    -webkit-transition: height 0.4s;
    -moz-transition: height 0.4s;
    transition: height 0.4s;
}

.cd-horizontal-timeline .events-content li {
    position: absolute;
    z-index: 1;
    width: 100%;
    left: 0;
    top: 0;
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
    padding: 0 5%;
    opacity: 0;
    -webkit-animation-duration: 0.4s;
    -moz-animation-duration: 0.4s;
    animation-duration: 0.4s;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
}

.cd-horizontal-timeline .events-content li.selected {
    /* visible event content */
    position: relative;
    z-index: 2;
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.cd-horizontal-timeline .events-content li.enter-right,
.cd-horizontal-timeline .events-content li.leave-right {
    -webkit-animation-name: cd-enter-right;
    -moz-animation-name: cd-enter-right;
    animation-name: cd-enter-right;
}

.cd-horizontal-timeline .events-content li.enter-left,
.cd-horizontal-timeline .events-content li.leave-left {
    -webkit-animation-name: cd-enter-left;
    -moz-animation-name: cd-enter-left;
    animation-name: cd-enter-left;
}

.cd-horizontal-timeline .events-content li.leave-right,
.cd-horizontal-timeline .events-content li.leave-left {
    -webkit-animation-direction: reverse;
    -moz-animation-direction: reverse;
    animation-direction: reverse;
}

.cd-horizontal-timeline .events-content li>* {
    max-width: 800px;
    margin: 0 auto;
}

.cd-horizontal-timeline .events-content h2 {
    font-weight: bold;
    font-size: 2.6rem;
    font-family: "Playfair Display", serif;
    font-weight: 700;
    line-height: 1.2;
    color: #7b9d6f;
}

.cd-horizontal-timeline .events-content em {
    display: block;
    font-style: italic;
    margin: 10px auto;
    font-weight: bold;
}

.cd-horizontal-timeline .events-content em::before {
    content: '- ';
}

.cd-horizontal-timeline .events-content p {
    font-size: 1.4rem;
    min-height: 300px;
    /* color: #959595; */
}

.cd-horizontal-timeline .events-content em,
.cd-horizontal-timeline .events-content p {
    line-height: 1.6;
}

@media only screen and (min-width: 768px) {
    .cd-horizontal-timeline .events-content h2 {
        font-size: 7rem;
    }

    .cd-horizontal-timeline .events-content em {
        font-size: 2rem;
    }

    .cd-horizontal-timeline .events-content p {
        font-size: 1.8rem;
    }
}

@-webkit-keyframes cd-enter-right {
    0% {
        opacity: 0;
        -webkit-transform: translateX(100%);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0%);
    }
}

@-moz-keyframes cd-enter-right {
    0% {
        opacity: 0;
        -moz-transform: translateX(100%);
    }

    100% {
        opacity: 1;
        -moz-transform: translateX(0%);
    }
}

@keyframes cd-enter-right {
    0% {
        opacity: 0;
        -webkit-transform: translateX(100%);
        -moz-transform: translateX(100%);
        -ms-transform: translateX(100%);
        -o-transform: translateX(100%);
        transform: translateX(100%);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
    }
}

@-webkit-keyframes cd-enter-left {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100%);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0%);
    }
}

@-moz-keyframes cd-enter-left {
    0% {
        opacity: 0;
        -moz-transform: translateX(-100%);
    }

    100% {
        opacity: 1;
        -moz-transform: translateX(0%);
    }
}

@keyframes cd-enter-left {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100%);
        -moz-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        -o-transform: translateX(-100%);
        transform: translateX(-100%);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
    }
}


/* core_values */
/* * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
} */

.core_values {
  font-size: 20px;
  font-family: 'Lato', 'Arial', sans-serif;
  font-weight: 400;
  height: 40%;
  display:flex;
}

.wrapper_values {
  width: 100%;
  /* height: 100vh; */
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-around;
  /* background-color: rgba(248,248,248,1); */
}

.card_values {
  width: 500px;
  height: 200px;
  background-color: #fff;
  box-shadow: 0 2px 6px 0 hsla(0,0%,0%,0.2);
  border-radius: 10px;
  padding: 38px 0 0 110px ;
  position: relative;
  overflow: hidden;
}

.card_values h5 {
  margin-bottom: 15px;
}

.card_values p {
  font-size: 80%;
  color: rgba(0,0,0,0.5);
  max-width: 350px;
}

.icon_values {
  width: 25%;
  height: auto;
  position: absolute;
  left: -35px;
}

.red { color: #E53935; }
.blue { color: #1E88E5; }
.green { color: #00C853; }

</style>

<body>
    <section class="hero">
        <div class="content">
            <div class="header">
                <h1 style="font-size: 50px; font-weight: 700;">About</h1>
            </div>
        </div>
    </section>

    <!-- <section class="core_values">
    <div class="wrapper_values">
  <div class="card_values">
    <img class="icon_values" src="https://image.ibb.co/f5tkSS/cape.png">
    <h5 class="red">Vision</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
  </div>
  <div class="card_values">
    <img class="icon_values" src="https://image.ibb.co/cAdPMn/iceberg.png">
    <h5 class="blue">Mission</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
  </div>
  <div class="card_values">
    <img class="icon_values" src="https://image.ibb.co/cd5M1n/trees.png">
    <h5 class="green">Values</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
  </div>
</div>
    </section> -->

    

    <section class="cd-horizontal-timeline section_timeline" style="height: 70%;">
        <h1 style="position: relative; margin: auto; width: 80%"><strong>ICP Pandi</strong> Timeline</h1>
        <div class="timeline">
            <div class="events-wrapper">
                <div class="events">
                    <ol>
                        <li><a href="#0" data-date="16/01/2014" class="selected">1792</a></li>
                        <li><a href="#0" data-date="28/02/2014">1880</a></li>
                        <li><a href="#0" data-date="20/04/2014">1899</a></li>
                        <li><a href="#0" data-date="20/05/2014">1930</a></li>
                        <li><a href="#0" data-date="09/07/2014">1940</a></li>
                        <li><a href="#0" data-date="30/08/2014">30 Aug</a></li>
                        <li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
                        <li><a href="#0" data-date="01/11/2014">01 Nov</a></li>
                        <li><a href="#0" data-date="10/12/2014">10 Dec</a></li>
                        <li><a href="#0" data-date="19/01/2015">29 Jan</a></li>
                        <li><a href="#0" data-date="03/03/2015">3 Mar</a></li>
                    </ol>

                    <span class="filling-line" aria-hidden="true"></span>
                </div> <!-- .events -->
            </div> <!-- .events-wrapper -->

            <ul class="cd-timeline-navigation">
                <ul><a href="#0" class="prev inactive">Prev</a></ul>
                <ul><a href="#0" class="next">Next</a></ul>
            </ul> <!-- .cd-timeline-navigation -->
        </div> <!-- .timeline -->

        <div class="events-content">
            <ol>
                <li class="selected" data-date="16/01/2014">
                    <h2>PANDI</h2>
                    <em>January 16th, 1792</em>
                    <p>
                        PANDI WAS FOUNDED IN 1792.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                        recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus
                        sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi!
                        Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro
                        doloribus.
                    </p>
                </li>

                <li data-date="28/02/2014">
                    <h2>THE EARTHQUAKE</h2>
                    <em>February 28th, 1880</em>
                    <p>
                        THE EARTHQUAKE OF 1880 DAMAGED THE CHURCH AND THE CONVENT CONSTRUCTED EARLY IN THE NINETEENTH
                        CENTURY.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                        recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus
                        sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi!
                        Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro
                        doloribus.
                    </p>
                </li>

                <li data-date="20/04/2014">
                    <h2>AMERICAN AND FILIPINO</h2>
                    <em>March 20th, 1899</em>
                    <p>
                        THEY WERE FINALLY DESTROYED BY FIRE, WITH THE TOWN ITSELF, INCIDENT TO AN ENCOUNTER BETWEEN
                        AMERICAN AND FILIPINO FORCES IN APRIL
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                        recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus
                        sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi!
                        Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro
                        doloribus.
                    </p>
                </li>

                <li data-date="20/05/2014">
                    <h2>Stolen Image</h2>
                    <em>May 20th, 1930</em>
                    <p>
                        The church is home to an image of the Virgin Mary that is believed to be miraculous. There are
                        two local legends as to how the image arrived in Santa Maria: first is that it was brought to
                        the town by the Franciscan Friars, second is that it was sculpted out of wood from a galleon.
                        The image has been stolen in the 1930s and was retrieved in Nueva Ecija by a man named Teofilo
                        Ramirez who claimed that the Virgin Mary appeared in his dream and gave instructions as to where
                        the image can be found. The image was returned to the town on a February and the townsfolk
                        accordingly adjusted their feast day to the first Thursday of February except when its falls on
                        February 2 (the feast of the Our Lady of the Candles).[
                    </p>
                </li>

                <li data-date="09/07/2014">
                    <h2>Event title here</h2>
                    <em>March 3, 2018</em>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                        recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus
                        sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi!
                        Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro
                        doloribus.
                    </p>
                </li>

                <li data-date="30/08/2014">
                    <h2>Event title here</h2>
                    <em>August 30th, 2014</em>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                        recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus
                        sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi!
                        Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro
                        doloribus.
                    </p>
                </li>

                <li data-date="15/09/2014">
                    <h2>Event title here</h2>
                    <em>September 15th, 2014</em>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                        recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus
                        sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi!
                        Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro
                        doloribus.
                    </p>
                </li>

                <li data-date="01/11/2014">
                    <h2>Event title here</h2>
                    <em>November 1st, 2014</em>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                        recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus
                        sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi!
                        Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro
                        doloribus.
                    </p>
                </li>

                <li data-date="10/12/2014">
                    <h2>Event title here</h2>
                    <em>December 10th, 2014</em>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                        recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus
                        sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi!
                        Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro
                        doloribus.
                    </p>
                </li>

                <li data-date="19/01/2015">
                    <h2>Event title here</h2>
                    <em>January 19th, 2015</em>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                        recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus
                        sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi!
                        Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro
                        doloribus.
                    </p>
                </li>

                <li data-date="03/03/2015">
                    <h2>Event title here</h2>
                    <em>March 3rd, 2015</em>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit
                        recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus
                        sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi!
                        Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro
                        doloribus.
                    </p>
                </li>
            </ol>
        </div> <!-- .events-content -->
    </section>

    <section class="image_gallery">
        <div class="wrapper">
            <div class="images">
                <img src="image/img1.jpg">
                <img src="image/img2.jpg">
                <img src="image/img3.jpg">
                <img src="image/img4.jpg">
                <img src="image/img9.jpg">
                <img src="image/img6.jpg">
                <img src="image/img7.jpg">
                <img src="image/img5.jpg">
                <img src="image/img8.jpg">
            </div>
            <div class="text">
                <p>Our Church.</p>
            </div>
        </div>
    </section>

    <section class="about-myself">
        <div class="content">
            <h2>HISTORY</h2>
            <p>The Pandi Church in Bulacan is a historical and culturally significant Dominican church that holds a deep
                devotion to the 'Immaculate Conception.' Its rich history dates to the 1890s, when it was initially
                constructed. Over the years, the church has undergone extensive improvements and meticulous restoration
                efforts, particularly around 1999, in a bid to preserve its architectural and spiritual heritage.
                What makes the Pandi Church truly remarkable is the harmonious blend of old and new. While the main body
                of the church has been lovingly restored and upgraded to accommodate modern needs, the preservationists
                and caretakers of this sacred site have been careful to retain portions of the original structure. These
                cherished remnants can be found in the altar area and the camarin, a room situated behind the altar.
                <br>
                <br>
                Visitors to the Pandi Church are treated to a unique and immersive experience, where they can witness
                the passage of time and the evolution of architectural styles. The juxtaposition of the restored
                sections with the original elements offers a profound sense of connection to the past, inviting
                contemplation and reverence.
                It's essential to note that the Pandi Church should not be confused with the Sta. Maria Church, which
                shares the same dedication to the 'Immaculate Conception.' Each of these churches has its distinct
                history, architectural features, and cultural significance, contributing to the rich tapestry of
                religious heritage in Bulacan. As such, the Pandi Church stands as a testament to the dedication and
                commitment of the Dominican community to preserving their religious and architectural legacy for
                generations to come.
            </p>
        </div>
    </section>


    <section class="portfolio">
        <div class="content">

            <h1>Events and Activities</h1>

            <div class="projects">
                <div class="column">
                    <div class="project">
                        <div class="project-image">
                            <!-- Credit image : Unsplash - Harman Abiwardani -->
                            <img src="image/event1.png" alt="" />
                        </div>
                        <div class="project-title">
                            <h2>Event #1</h2>
                        </div>
                        <div class="project-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi asperiores odio
                                libero,
                                molestiae at suscipit totam sequi, delectus temporibus. Provident itaque illum animi
                                cupiditate
                                quaerat! Id inventore, excepturi sequi totam. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Maiores iure ex repudiandae, enim maxime.</p>
                        </div>
                    </div>

                    <div class="project">
                        <div class="project-image">
                            <!-- Credit image : Unsplash - Patrick Hendry -->
                            <img src="image/event2.jpg" alt="" />
                        </div>
                        <div class="project-title">
                            <h2>Event #2</h2>
                        </div>
                        <div class="project-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi magni consequatur
                                dolores
                                distinctio quod accusamus voluptatum obcaecati animi expedita rem odio explicabo
                                veritatis
                                voluptas ducimus voluptate earum laborum, qui maiores doloremque deserunt sapiente
                                corporis
                                et
                                culpa, nihil fuga. Sit nemo maxime itaque maiores iure, similique ratione veritatis
                                quidem
                                nulla
                                explicabo.</p>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="project">
                        <div class="project-image">
                            <!-- Credit image : Unsplash - Ken Cheung -->
                            <img src="image/event3.jpg" alt="" />
                        </div>
                        <div class="project-title">
                            <h2>Event #3</h2>
                        </div>
                        <div class="project-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi asperiores odio
                                libero,
                                molestiae at suscipit totam sequi, delectus temporibus. Provident itaque illum animi
                                cupiditate
                                quaerat! Id inventore, excepturi sequi totam. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Maiores iure ex repudiandae, enim maxime.</p>
                        </div>
                    </div>
                    <div class="project">
                        <div class="project-image">
                            <!-- Credit image : Unsplash - Ken Cheung -->
                            <img src="image/event4.jpg" alt="" />
                        </div>
                        <div class="project-title">
                            <h2>Event #4</h2>
                        </div>
                        <div class="project-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi asperiores odio
                                libero,
                                molestiae at suscipit totam sequi, delectus temporibus. Provident itaque illum animi
                                cupiditate
                                quaerat! Id inventore, excepturi sequi totam. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Maiores iure ex repudiandae, enim maxime.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contacts_about">
        <div class="contact-container">
            <form>
                <div class="form">
                    <div class="form-txt">
                        <h1>Contact Us</h1>
                        <strong>J.P Rizal St, Poblacion, Pandi, 3014 Bulacan</strong><br>
                        <a href="your_link_url_here"></ul>
                            <p>Email - <u
                                    style="text-underline-position: under; color: green;">immaculateconception1874@gmail.com</u>
                            </p>
                        </a>
                        <a href="your_link_url_here"></ul>
                            <p>Facebook - <u
                                    style="text-underline-position: under; color: green;">fb.com/immaculateconceptionparishpandi1874</u>
                            </p>
                        </a>
                        <a href="your_link_url_here"></ul>
                            <p>Contact Number - <u
                                    style="text-underline-position: under; color: green;">0916-5798-189</u></p>
                        </a>



                        <h3>Parish Office Schedule:</h3>
                        <p>MONDAYS - Parish office is closed on Mondays.</p>
                        <p>TUESDAYS TO SUNDAYS - 8:00 AM to 12:00 PM; 2:00 PM to 5:00 PM</p>

                        <h3>Schedule of Masses:</h3>
                        <li>Monday - 6:00 AM</li>
                        <li>Tuesday - 6:00 AM</li>
                        <li>Wednesday - 6:00 AM</li>
                        <li>Thursday - 6:00 AM</li>
                        <li>Friday - 6:00 AM</li>
                        <li>Saturday - 6:00 AM</li>
                        <li>Sunday - 6:00 AM, 8:00 AM, 5:00 PM</li>
                    </div>
                    <div class="form-details">
                        <div class="map-wrapper">
                            <h1>Explore Our Location</h1>
                            <div class="map-container">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.323117284999!2d120.95520931135269!3d14.863199870532387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ab89e41cfb07%3A0x2f2337a16ed664d4!2sSimbahan%20ng%20Parokya%20ng%20Immaculada%20Concepcion%20-%20Pandi%2C%20Bulacan!5e0!3m2!1sen!2sph!4v1712323258198!5m2!1sen!2sph"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>


<?php include 'footer.php';?>
<script>
$(document).ready(function() {
    // Main variables
    var $aboutTitle = $('.about-myself .content h2');
    var $developmentWrapper = $('.development-wrapper');
    var developmentIsVisible = false;


    /* ####### HERO SECTION ####### */

    $('.hero .content .header').delay(500).animate({
        'opacity': '1',
        'top': '50%'
    }, 1000);


    $(window).scroll(function() {

        var bottom_of_window = $(window).scrollTop() + $(window).height();

        /* ##### ABOUT MYSELF SECTION #### */
        if (bottom_of_window > ($aboutTitle.offset().top + $aboutTitle.outerHeight())) {
            $('.about-myself .content h2').addClass('aboutTitleVisible');
        }
        /* ##### EXPERIENCE SECTION #### */

        // Check the location of each element hidden */
        $('.experience .content .hidden').each(function(i) {

            var bottom_of_object = $(this).offset().top + $(this).outerHeight();

            /* If the object is completely visible in the window, fadeIn it */
            if (bottom_of_window > bottom_of_object) {

                $(this).animate({
                    'opacity': '1',
                    'margin-left': '0'
                }, 600);
            }
        });

        /*###### SKILLS SECTION ######*/

        var middle_of_developmentWrapper = $developmentWrapper.offset().top + $developmentWrapper
            .outerHeight() / 2;

        if ((bottom_of_window > middle_of_developmentWrapper) && (developmentIsVisible == false)) {

            $('.skills-bar-container li').each(function() {

                var $barContainer = $(this).find('.bar-container');
                var dataPercent = parseInt($barContainer.data('percent'));
                var elem = $(this).find('.progressbar');
                var percent = $(this).find('.percent');
                var width = 0;

                var id = setInterval(frame, 15);

                function frame() {
                    if (width >= dataPercent) {
                        clearInterval(id);
                    } else {
                        width++;
                        elem.css("width", width + "%");
                        percent.html(width + " %");
                    }
                }
            });
            developmentIsVisible = true;
        }
    }); // -- End window scroll --
});
</script>

<!-- image gallery -->
<script>
$(".images img").click(function() {
    $(this).addClass("zoom");
});

$(".images img").mouseleave(function() {
    $(this).removeClass("zoom");
});
</script>


<!-- TIMELINE -->
<script>
jQuery(document).ready(function($) {
    var timelines = $('.cd-horizontal-timeline'),
        eventsMinDistance = 60;

    (timelines.length > 0) && initTimeline(timelines);

    function initTimeline(timelines) {
        timelines.each(function() {
            var timeline = $(this),
                timelineComponents = {};
            //cache timeline components 
            timelineComponents['timelineWrapper'] = timeline.find('.events-wrapper');
            timelineComponents['eventsWrapper'] = timelineComponents['timelineWrapper'].children(
                '.events');
            timelineComponents['fillingLine'] = timelineComponents['eventsWrapper'].children(
                '.filling-line');
            timelineComponents['timelineEvents'] = timelineComponents['eventsWrapper'].find('a');
            timelineComponents['timelineDates'] = parseDate(timelineComponents['timelineEvents']);
            timelineComponents['eventsMinLapse'] = minLapse(timelineComponents['timelineDates']);
            timelineComponents['timelineNavigation'] = timeline.find('.cd-timeline-navigation');
            timelineComponents['eventsContent'] = timeline.children('.events-content');

            //assign a left postion to the single events along the timeline
            setDatePosition(timelineComponents, eventsMinDistance);
            //assign a width to the timeline
            var timelineTotWidth = setTimelineWidth(timelineComponents, eventsMinDistance);
            //the timeline has been initialize - show it
            timeline.addClass('loaded');

            //detect click on the next arrow
            timelineComponents['timelineNavigation'].on('click', '.next', function(event) {
                event.preventDefault();
                updateSlide(timelineComponents, timelineTotWidth, 'next');
            });
            //detect click on the prev arrow
            timelineComponents['timelineNavigation'].on('click', '.prev', function(event) {
                event.preventDefault();
                updateSlide(timelineComponents, timelineTotWidth, 'prev');
            });
            //detect click on the a single event - show new event content
            timelineComponents['eventsWrapper'].on('click', 'a', function(event) {
                event.preventDefault();
                timelineComponents['timelineEvents'].removeClass('selected');
                $(this).addClass('selected');
                updateOlderEvents($(this));
                updateFilling($(this), timelineComponents['fillingLine'], timelineTotWidth);
                updateVisibleContent($(this), timelineComponents['eventsContent']);
            });

            //on swipe, show next/prev event content
            timelineComponents['eventsContent'].on('swipeleft', function() {
                var mq = checkMQ();
                (mq == 'mobile') && showNewContent(timelineComponents, timelineTotWidth,
                'next');
            });
            timelineComponents['eventsContent'].on('swiperight', function() {
                var mq = checkMQ();
                (mq == 'mobile') && showNewContent(timelineComponents, timelineTotWidth,
                'prev');
            });

            //keyboard navigation
            $(document).keyup(function(event) {
                if (event.which == '37' && elementInViewport(timeline.get(0))) {
                    showNewContent(timelineComponents, timelineTotWidth, 'prev');
                } else if (event.which == '39' && elementInViewport(timeline.get(0))) {
                    showNewContent(timelineComponents, timelineTotWidth, 'next');
                }
            });
        });
    }

    function updateSlide(timelineComponents, timelineTotWidth, string) {
        //retrieve translateX value of timelineComponents['eventsWrapper']
        var translateValue = getTranslateValue(timelineComponents['eventsWrapper']),
            wrapperWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', ''));
        //translate the timeline to the left('next')/right('prev') 
        (string == 'next') ?
        translateTimeline(timelineComponents, translateValue - wrapperWidth + eventsMinDistance, wrapperWidth -
            timelineTotWidth): translateTimeline(timelineComponents, translateValue + wrapperWidth -
            eventsMinDistance);
    }

    function showNewContent(timelineComponents, timelineTotWidth, string) {
        //go from one event to the next/previous one
        var visibleContent = timelineComponents['eventsContent'].find('.selected'),
            newContent = (string == 'next') ? visibleContent.next() : visibleContent.prev();

        if (newContent.length > 0) { //if there's a next/prev event - show it
            var selectedDate = timelineComponents['eventsWrapper'].find('.selected'),
                newEvent = (string == 'next') ? selectedDate.parent('li').next('li').children('a') :
                selectedDate.parent('li').prev('li').children('a');

            updateFilling(newEvent, timelineComponents['fillingLine'], timelineTotWidth);
            updateVisibleContent(newEvent, timelineComponents['eventsContent']);
            newEvent.addClass('selected');
            selectedDate.removeClass('selected');
            updateOlderEvents(newEvent);
            updateTimelinePosition(string, newEvent, timelineComponents, timelineTotWidth);
        }
    }

    function updateTimelinePosition(string, event, timelineComponents, timelineTotWidth) {
        //translate timeline to the left/right according to the position of the selected event
        var eventStyle = window.getComputedStyle(event.get(0), null),
            eventLeft = Number(eventStyle.getPropertyValue("left").replace('px', '')),
            timelineWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', '')),
            timelineTotWidth = Number(timelineComponents['eventsWrapper'].css('width').replace('px', ''));
        var timelineTranslate = getTranslateValue(timelineComponents['eventsWrapper']);

        if ((string == 'next' && eventLeft > timelineWidth - timelineTranslate) || (string == 'prev' &&
                eventLeft < -timelineTranslate)) {
            translateTimeline(timelineComponents, -eventLeft + timelineWidth / 2, timelineWidth -
                timelineTotWidth);
        }
    }

    function translateTimeline(timelineComponents, value, totWidth) {
        var eventsWrapper = timelineComponents['eventsWrapper'].get(0);
        value = (value > 0) ? 0 : value; //only negative translate value
        value = (!(typeof totWidth === 'undefined') && value < totWidth) ? totWidth :
        value; //do not translate more than timeline width
        setTransformValue(eventsWrapper, 'translateX', value + 'px');
        //update navigation arrows visibility
        (value == 0) ? timelineComponents['timelineNavigation'].find('.prev').addClass('inactive'):
            timelineComponents['timelineNavigation'].find('.prev').removeClass('inactive');
        (value == totWidth) ? timelineComponents['timelineNavigation'].find('.next').addClass('inactive'):
            timelineComponents['timelineNavigation'].find('.next').removeClass('inactive');
    }

    function updateFilling(selectedEvent, filling, totWidth) {
        //change .filling-line length according to the selected event
        var eventStyle = window.getComputedStyle(selectedEvent.get(0), null),
            eventLeft = eventStyle.getPropertyValue("left"),
            eventWidth = eventStyle.getPropertyValue("width");
        eventLeft = Number(eventLeft.replace('px', '')) + Number(eventWidth.replace('px', '')) / 2;
        var scaleValue = eventLeft / totWidth;
        setTransformValue(filling.get(0), 'scaleX', scaleValue);
    }

    function setDatePosition(timelineComponents, min) {
        for (i = 0; i < timelineComponents['timelineDates'].length; i++) {
            var distance = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][
                    i]),
                distanceNorm = Math.round(distance / timelineComponents['eventsMinLapse']) + 2;
            timelineComponents['timelineEvents'].eq(i).css('left', distanceNorm * min + 'px');
        }
    }

    function setTimelineWidth(timelineComponents, width) {
        var timeSpan = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][
                timelineComponents['timelineDates'].length - 1
            ]),
            timeSpanNorm = timeSpan / timelineComponents['eventsMinLapse'],
            timeSpanNorm = Math.round(timeSpanNorm) + 4,
            totalWidth = timeSpanNorm * width;
        timelineComponents['eventsWrapper'].css('width', totalWidth + 'px');
        updateFilling(timelineComponents['timelineEvents'].eq(0), timelineComponents['fillingLine'],
        totalWidth);

        return totalWidth;
    }

    function updateVisibleContent(event, eventsContent) {
        var eventDate = event.data('date'),
            visibleContent = eventsContent.find('.selected'),
            selectedContent = eventsContent.find('[data-date="' + eventDate + '"]'),
            selectedContentHeight = selectedContent.height();

        if (selectedContent.index() > visibleContent.index()) {
            var classEnetering = 'selected enter-right',
                classLeaving = 'leave-left';
        } else {
            var classEnetering = 'selected enter-left',
                classLeaving = 'leave-right';
        }

        selectedContent.attr('class', classEnetering);
        visibleContent.attr('class', classLeaving).one(
            'webkitAnimationEnd oanimationend msAnimationEnd animationend',
            function() {
                visibleContent.removeClass('leave-right leave-left');
                selectedContent.removeClass('enter-left enter-right');
            });
        eventsContent.css('height', selectedContentHeight + 'px');
    }

    function updateOlderEvents(event) {
        event.parent('li').prevAll('li').children('a').addClass('older-event').end().end().nextAll('li')
            .children('a').removeClass('older-event');
    }

    function getTranslateValue(timeline) {
        var timelineStyle = window.getComputedStyle(timeline.get(0), null),
            timelineTranslate = timelineStyle.getPropertyValue("-webkit-transform") ||
            timelineStyle.getPropertyValue("-moz-transform") ||
            timelineStyle.getPropertyValue("-ms-transform") ||
            timelineStyle.getPropertyValue("-o-transform") ||
            timelineStyle.getPropertyValue("transform");

        if (timelineTranslate.indexOf('(') >= 0) {
            var timelineTranslate = timelineTranslate.split('(')[1];
            timelineTranslate = timelineTranslate.split(')')[0];
            timelineTranslate = timelineTranslate.split(',');
            var translateValue = timelineTranslate[4];
        } else {
            var translateValue = 0;
        }

        return Number(translateValue);
    }

    function setTransformValue(element, property, value) {
        element.style["-webkit-transform"] = property + "(" + value + ")";
        element.style["-moz-transform"] = property + "(" + value + ")";
        element.style["-ms-transform"] = property + "(" + value + ")";
        element.style["-o-transform"] = property + "(" + value + ")";
        element.style["transform"] = property + "(" + value + ")";
    }

    //based on http://stackoverflow.com/questions/542938/how-do-i-get-the-number-of-days-between-two-dates-in-javascript
    function parseDate(events) {
        var dateArrays = [];
        events.each(function() {
            var dateComp = $(this).data('date').split('/'),
                newDate = new Date(dateComp[2], dateComp[1] - 1, dateComp[0]);
            dateArrays.push(newDate);
        });
        return dateArrays;
    }

    function parseDate2(events) {
        var dateArrays = [];
        events.each(function() {
            var singleDate = $(this),
                dateComp = singleDate.data('date').split('T');
            if (dateComp.length > 1) { //both DD/MM/YEAR and time are provided
                var dayComp = dateComp[0].split('/'),
                    timeComp = dateComp[1].split(':');
            } else if (dateComp[0].indexOf(':') >= 0) { //only time is provide
                var dayComp = ["2000", "0", "0"],
                    timeComp = dateComp[0].split(':');
            } else { //only DD/MM/YEAR
                var dayComp = dateComp[0].split('/'),
                    timeComp = ["0", "0"];
            }
            var newDate = new Date(dayComp[2], dayComp[1] - 1, dayComp[0], timeComp[0], timeComp[1]);
            dateArrays.push(newDate);
        });
        return dateArrays;
    }

    function daydiff(first, second) {
        return Math.round((second - first));
    }

    function minLapse(dates) {
        //determine the minimum distance among events
        var dateDistances = [];
        for (i = 1; i < dates.length; i++) {
            var distance = daydiff(dates[i - 1], dates[i]);
            dateDistances.push(distance);
        }
        return Math.min.apply(null, dateDistances);
    }

    /*
    	How to tell if a DOM element is visible in the current viewport?
    	http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
    */
    function elementInViewport(el) {
        var top = el.offsetTop;
        var left = el.offsetLeft;
        var width = el.offsetWidth;
        var height = el.offsetHeight;

        while (el.offsetParent) {
            el = el.offsetParent;
            top += el.offsetTop;
            left += el.offsetLeft;
        }

        return (
            top < (window.pageYOffset + window.innerHeight) &&
            left < (window.pageXOffset + window.innerWidth) &&
            (top + height) > window.pageYOffset &&
            (left + width) > window.pageXOffset
        );
    }

    function checkMQ() {
        //check if mobile or desktop device
        return window.getComputedStyle(document.querySelector('.cd-horizontal-timeline'), '::before')
            .getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
    }
});
</script>

</html>