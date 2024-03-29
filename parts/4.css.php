<style>
    .planingtit {
        display: none;
    }

    .planing-row {
        margin-top: 50px;
        display: flex;
        flex-direction: column;

    }

    .topbar {
        width: 100%;
        border-width: 3px 0 1px;
        border-style: solid;
        border-color: #000;
        height: 6px;
        margin: 0.5em 0 1em;
    }

    .planen,
    .planch,
    .plantxt {
        width: 75%;
        font-weight: 400;
        line-height: 1.25;
        font-family: 'Times New Roman', Times, serif;
    }

    .planen {
        letter-spacing: .1em;
        font-style: italic;
        font-size: 2.5rem;

    }

    .planch {
        font-size: 1rem;
        margin-top: 0.3em;

        letter-spacing: .2em;
        margin-bottom: 48px;
    }

    .plantxt {
        max-width: 18em;
        line-height: 1.81818182;
        font-style: normal;
        margin-bottom: 60px;
    }

    .entrustbar {
        transition: .5s;
        background: #000;
        height: .3px;
        width: 2.5rem;
        margin: 10px 80% 15px 0;

    }

    .entrust>a>.tiltch {
        margin-bottom: 10px;
    }

    .entrust-ti {
        text-decoration: none;
        color: #000;
        transition: .5s;
    }


    .entrust-txt {
        margin-bottom: 30px;
        font-size: .7em;
        letter-spacing: .15em;
    }

    .entrust-img {
        width: 100%;
        object-fit: cover;
        margin-bottom: 30px;
        transition: .5s;

    }

    .entrust>a.read {
        display: inline-block;
        margin-bottom: 30px;

    }

    .planing-img-wrapper {
        display: flex;
        flex-direction: row;
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .planing-img {
        width: 85%;
        object-fit: cover;
    }

    .planing-txt {
        transform-origin: left bottom;
        white-space: nowrap;
        transform: rotate(90deg);
        position: absolute;
        left: 82%;
        font-size: .8em;
        font-style: italic;
        line-height: 1.7;
        letter-spacing: .075em;
    }



    .article-wrapper {
        width: 100%;
        margin: 40px 0;
        padding-top: 30px;
        border-top: 3px solid #000;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }


    .articlebox {
        width: 100%;
        height: 250px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .artxt {
        font-size: .1em;
    }

    .tit,
    .titch {
        font-weight: 525;
        line-height: 1.25;
        font-family: 'Times New Roman', Times, serif;
        margin-bottom: 5px;


    }

    .tit {
        font-size: 2.5rem;
        font-style: italic;
    }



    .float-end {
        float: none !important;
    }

    .topbt {
        color: #000;
        display: block;
        width: 100%;
        text-align: center;
        padding-bottom: 10px;
        border-bottom: 1px solid #000;
        transition: .2s;

    }


    .footer {
        background-color: #f8f8f8;
        padding: 30px 50px;

    }

    .foot-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        position: relative;


    }

    .footer-logo {
        width: 100%;
        text-align: center;
        margin: 30px 0;
    }

    .footer-logo img {
        width: 100px;

    }

    .foot-txt-container {
        margin-bottom: 30px;
    }

    .center {
        color: #b59059;
        font-size: .9em;

        letter-spacing: .2em;
        margin: 0 0 10px
    }


    .center-adr,
    .gmail,
    .phone,
    .author,
    .author37 {
        font-size: .7em;
        color: #000;
        letter-spacing: .2em;
        margin: 0 0 15px;
        text-decoration: none;
    }

    .copyright {
        width: 60%;
        font-size: .8em;
        letter-spacing: .1em;
    }

    .author {
        margin-top: 0;
    }

    .about-list {
        display: none;
    }






    .icon {
        text-align: start;
        width: 60%;
        padding: 0 0 10px 0;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .fb,
    .inst {
        display: flex;
        justify-content: center;
        align-items: center;

        width: 42px;
        aspect-ratio: 1/1;
        background: #000;
        transition: .1s;
        border-radius: 50%;
    }

    .line {
        border: 8px solid black;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 42px;
        aspect-ratio: 1/1;
        border-radius: 50%;
        overflow: hidden;


    }

    .linegr {
        display: none;
    }

    .fb:hover {
        background: #1877f2
    }

    .inst:hover {
        background: #c32aa3
    }

    .line:hover {
        border: 7px solid #00c437;
    }

    .line:hover .linebl {
        display: none;
    }

    .line:hover .linegr {
        display: inline-block;
    }

    .topbt:hover,
    .entrust-ti:hover {
        color: #b59059;
        fill: #b59059;
    }

    .entrust-ti:hover .entrustbar {
        background: #b59059;
    }

    .center-adr:hover,
    .gmail:hover,
    .phone:hover,
    .author37:hover,
    .list_item:hover {
        color: #000;
        text-decoration: underline;
    }


    .side {
        display: none;
    }

    .menu-btn {
        position: absolute;
        position: fixed;
        right: 0;
        top: 50%;
        transform: translateX(35%) rotate(90deg);

        transition: .2s;
        width: 130px;
        height: 40px;
        background-color: #000;
        border-bottom: 3px solid #b59059;
        border-radius: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .side-menu {
        color: #fff;
        fill: #fff;
        text-align: center;
        letter-spacing: .2rem;
        margin-right: 5px;
    }

    .menu-btn:hover {
        background-color: #b59059;
    }

    @media screen and (min-width:992px) {
        .planing-wrapper {
            margin-top: 300px;
        }


        .planingtit {
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;

        }

        .planingtit div {
            width: auto;
            margin: 0 40px 0 0;

        }

        .planingtit .planen {
            font-size: 3rem;
        }

        .planingtit .planch {
            font-size: 1.5rem;
        }

        .planing-row {
            margin-top: 10px;

            flex-direction: row;
            flex-wrap: wrap;
        }

        .planingleft {
            padding: 35px 0 0 0;
            width: 20%;
            display: flex;
            flex-direction: column;
        }

        .planch {
            flex-grow: 1;
        }

        .plantxt {
            margin-bottom: 30px;
            font-size: 1.1rem;
        }

        .entrust {
            width: 40%;
            padding: 35px 130px 0 120px;
        }

        .planing-img-wrapper {
            width: 40%;
        }

        .pimg {
            height: 100%;
        }

        .planing-img {
            width: 100%;
            object-fit: cover;
        }


        .planing-txt {
            font-size: .9em;


        }

        .article-wrapper {
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-end;
        }

        .tit {
            font-size: 3rem;
            margin: 0 40px 0 0;

        }

        .titch {
            font-size: 1.5rem;
            margin: 0 30px 0 0;
            padding-bottom: 8px;
        }

        .footer {
            padding: 30px 150px 150px;
        }



        .foot-wrapper {
            padding: 250px 10px 0 0px;
            flex-direction: row;
            justify-content: flex-start;
            flex-wrap: wrap;


        }

        .footer-logo {
            margin: -120px 0 0 -20px;
            width: 20%;
        }

        .footer-logo>img {
            width: 49%;
        }

        .foot-txt-container {
            width: 30%;
            padding: 0 0 0 30px;
            font-size: 1.3em;


        }

        .gmail {
            margin-top: 80px;
        }



        .about-list {
            display: block;
            width: 25%;
            padding-right: 30px;

        }

        .list-area {
            list-style: none;
        }

        .list_item {
            font-size: .7em;
            color: #000;
            letter-spacing: .2em;
            margin: 0 0 15px;
            text-decoration: none;
            line-height: 2;
        }

        .list_title {
            font-size: 1rem;
            font-weight: 550;
            letter-spacing: .2em;
            color: #b59059;
            margin-bottom: 5px;
        }










        .icon {
            width: 11%;

        }

        .copyright {
            position: absolute;
            bottom: -100px;
            left: 19%;
            width: auto;

        }

        .copyright .author {
            display: inline-block;
            margin-left: 30px;
        }

        .copyright,
        .author,
        .author37 {
            font-size: .9rem;
        }


        .side {
            display: inline-block;

        }







    }
</style>