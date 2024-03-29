<style>
    .mxsec1 {
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 110px;

    }

    .carousel {
        position: relative;
    }

    .carousel-indicators {
        margin: 0;
        padding: 0;
        list-style-type: none;
        position: absolute;
        top: 130px;
        left: 30px;
        right: auto;
        bottom: auto;


    }

    .carousel-indicators [data-bs-target] {
        width: 4px;
        height: 4px;
        background-color: #000;
    }

    .carousel-indicators .active {
        background-color: #b59059;
    }

    .carousel-item {
        position: relative;
    }

    .date {

        min-width: 83px;
        max-width: 85px;
        position: absolute;
        top: 0;
        left: 0;
        text-align: center;
        font-family: 'Playfair Display', serif;

        letter-spacing: .075em
    }

    .datetxt {
        border: 1px dashed #000;
        border-radius: 50%;
        width: 100%;
        aspect-ratio: 1/1;
        margin-bottom: 0.2em;
        padding: 10px 5px 5px;
        position: relative;

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        box-sizing: border-box;
        font-size: 2.2em;

    }

    .date .datetxt span {
        display: block;
        line-height: .7;
    }

    .year {

        -webkit-transform: scale(.5);
        transform: scale(.5)
    }


    .datetxt::before {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: 4px;
        border: 1px solid #000;
        border-radius: 50%;
        pointer-events: none;
    }


    .date .datetxt .month {
        -webkit-transform: scale(.3);
        transform: scale(.3);
    }


    .num {
        display: block;
        position: absolute;
        top: 266px;
        left: 10px;
        background-color: #000;
        color: #fff;
        transform: scale(.5);
        width: 7.34em;
        line-height: 2.1;
        letter-spacing: .2em;
        text-align: center;
        margin-left: -1.5em;

    }

    .maincont {
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: center;

    }


    .carousel-item.active {}



    .maintopic {
        margin-left: 38%;
        line-height: 1.5;
        width: 55%;
        font-family: 'Times New Roman', Times, serif;
        font-size: 1.3rem;
    }


    .desc {
        font-size: .86rem;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        letter-spacing: .1em;


    }

    .topic {
        font-family: inherit;
        font-size: 1.3rem;
        font-weight: 500;
        line-height: 1.6;
        letter-spacing: .285em;
        border-bottom: 2px solid #000;
        padding-bottom: 0.5em;
        margin: 0 0 0.5em;
        width: 100%;
    }

    .timehold {
        font-size: .7em;
        letter-spacing: .1em;

    }

    .place {
        font-size: .7em;
    }

    .read {
        z-index: 1;
        font-size: 1rem;
        border-bottom: 1px solid black;
        vertical-align: bottom;
        font-family: Merriweather, Noto Serif TC, Georgia, Times New Roman, Times, \\601D\6E90\5B8B\9AD4, "source-han-serif-tc", PMingLiU, SimSun, serif;
        font-style: italic;
        text-decoration: none;
        color: #000;
        transition: .5s;
    }

    .more {
        color: #b59059;
    }

    .read:hover {
        color: #b59059;
    }

    .topicpic {
        margin: 20px 0;
    }




    @media screen and (min-width:992px) {

        .carousel-indicators {
            top: 250px;
            left: 75px;

        }

        .carousel-indicators [data-bs-target] {
            width: 7px;
            height: 9px;

        }


        .mxsec1 {
            padding-top: 40px;
            padding-left: 150px;
            padding-right: 150px
        }

        .date {
            width: 10%;
            max-width: 140px;
            min-width: 170px;
        }

        .datetxt {


            padding: 20px 8px 8px;
            font-size: 4.2em;
        }

        .date .datetxt span {

            line-height: .8;
        }

        .datetxt::before {
            margin: 7px;
        }

        .year {
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        .maincont {

            flex-direction: row;
            align-items: flex-start;
            position: relative;
            align-items: stretch;

        }

        .maintopic {
            margin-left: 10%;
            line-height: 1.5;
            width: 30%;

            padding: 2% 4.5%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;


        }

        .topicpic {
            width: 60%;
            height: auto;

        }

        .topic {
            font-size: 2.2rem;


        }

        .descwrapper {
            flex-grow: 1;
        }

        .desc {


            font-size: 1rem;
            line-height: 1.7;
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .timehold,
        .place {
            font-size: .9em;
            letter-spacing: .1em;
            margin-bottom: 10px;
        }

        .read {

            font-size: 1.3rem;

        }

        .num {
            top: auto;
            bottom: 0;
            left: 55px;
            width: 90px;
            transform: scale(.7);
        }
    }
</style>