<style>
    * {
        margin: 0;
        padding: 0;
        font-family: Helvetica, Arial, sans-serif;


    }

    .sticky {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 3;
    }

    .navtop {
        padding: 20px 20px 20px 28px;
        background: rgb(255, 255, 255);

    }

    .navtop::after {
        content: "";
        position: absolute;
        border-bottom: 1px solid black;
        bottom: 0;
        left: 20px;
        right: 20px;

    }

    .navt {
        display: none;
    }

    .navbar-brand {
        height: 25px;
        width: 165px;
        overflow: hidden;
        background: url(./img/MED_IMG/logo3.1.jpg) center 0/cover;
        transition: .32s;
    }



    .txt {
        display: none;
        height: 100%;
        flex-grow: 1;
        margin-left: 32px;
        padding-left: 32px;
        border-left: 1px solid black;
        font-family: Merriweather, Noto Serif TC, Georgia, Times New Roman, Times, \\601D\6E90\5B8B\9AD4, "source-han-serif-tc", PMingLiU, SimSun, serif;
        font-weight: 400;
        letter-spacing: .56em;
        font-size: 1.5em;



    }

    .txt2 {

        color: #b59059;
        letter-spacing: .3em;
        font-size: .7em;
        margin-top: 0.8em;
        line-height: 1.7;
    }

    .navbar-toggler {
        position: absolute;
        right: 10px;
        top: 15px;
    }




    @media screen and (min-width:992px) {
        .me50 {
            margin-right: 120px;
        }

        .txt {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 96px;
        }

        .navbar-brand {
            height: 96px;
            width: 634px;
        }

        .navtop {
            padding-left: 0;
            padding-right: 0;
            margin-left: 150px;
            margin-right: 150px;
            position: relative;

        }

        .navtop::after {
            left: 0;
            right: 0;
        }

        .navtoppd {
            padding-top: 58px;
            padding-bottom: 30px;
        }

        .navt {
            display: block;
            margin-left: 150px;
            margin-right: 150px;
            border-bottom: 1px solid black;

        }

        .navbar-expand-lg .offcanvas {
            display: none;
        }

    }

    .trbt {
        color: #000;
        transition: .3s;
    }

    .serchbt svg {
        margin-left: 10px;
        margin-right: 10px;


    }



    .nav-item {
        margin-right: 3em;

    }

    .navbar-expand-lg .navbar-nav .nav-link {
        font-size: 1.2em;
        font-family: Merriweather, Noto Serif TC, Georgia, Times New Roman, Times, \\601D\6E90\5B8B\9AD4, "source-han-serif-tc", PMingLiU, SimSun, serif;
        color: #000;
        letter-spacing: .2em;
        line-height: 40px;
        padding: 10px 0;
    }

    .nav-item .nav-link:hover,
    .offcan-item .nav-link:hover,
    .collapse .trbt:hover,
    .other-menu>li>button:hover {
        color: #b59059;
        fill: #b59059;

    }

    .navbar-brand:hover {
        transform: scale(1.15);
    }
</style>