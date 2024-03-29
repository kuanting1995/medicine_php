<style>
    .mxsec2 {

        padding-left: 50px;
        padding-right: 50px;
        position: relative;
    }

    .banner-logo {

        transition: 2s;
    }


    .activity-wrapper {
        margin-top: 30px;

    }

    .titl {
        margin-bottom: 35px;
    }


    .tilten {
        letter-spacing: .075em;
        font-style: italic;
        font-weight: 400;
        font-size: 1.7rem;
        font-family: 'Times New Roman', Times, serif
    }

    .tiltch {
        font-size: 1.1em;
        letter-spacing: .2em;
        font-family: 'Times New Roman', Times, serif;
        font-weight: 400;
    }

    .cardwrapper {
        margin-bottom: 30px;
    }

    .cardimg {
        width: 100%;



    }

    .cardimg img {
        border: 1px solid black;
        padding: 15px;
        width: 100%;
        object-fit: cover;
        transition: .5s;
    }

    .actxt {
        font-family: 'Times New Roman', Times, serif;
        font-size: 1.2rem;
        font-weight: 400;
        letter-spacing: .2em;
        line-height: 1.52631579;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        padding-bottom: 7px;
        border-bottom: .1px solid black;
    }


    .acdate {

        padding-top: 7px;
        font-size: 14px;
        letter-spacing: .075em;
        word-wrap: break-word;
        word-break: normal;
        margin-bottom: 5px;
    }

    .acplace {
        font-size: 14px;
        letter-spacing: .075em;

    }

    .cardimg .more_img {
        border: none;

        max-width: 600px;

    }



    .cardimg>img:hover,
    .entrust-img:hover {
        opacity: .6;
    }


    .controlbt .ctbtn {
        width: 15px;
        height: 80px;
        fill: black;
        transition: .6s;
    }

    .controlbt:hover .ctbtn {
        fill: #b59059;
    }

    .carousel-control-prev {
        left: -25px;
        width: 15px;
    }

    .carousel-control-next {
        right: -25px;
        width: 15px;
    }

    .about img {
        width: 100%;
        margin-bottom: 30px;
    }



    .rdbt {
        display: inline-block;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        font-style: italic;
        color: black;
        width: 100%;
        border: 1px solid black;
        line-height: 38px;
        transition: .3s;
    }

    .rdbt:hover {
        background: #b59059;
        color: #fff;
    }


    .deco,
    .about-pc {
        display: none;
    }

    .deco-txt {
        margin-bottom: 30px;
        font-size: 1.2rem;
        font-style: italic;
        font-family: 'Times New Roman', Times, serif;
    }

    .deco::after {
        content: "";
        display: block;
        margin: 0 auto;
        width: 1px;
        height: 250px;
        background: #000;
    }

    @media screen and (min-width:992px) {

        .mxsec2 {
            padding-left: 150px;
            padding-right: 150px
        }

        .banner-logo {
            position: absolute;
            left: 350px;
            width: 40%;
            top: -300px;

        }

        .newac {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;


        }

        .titl {
            margin-bottom: 150px;

        }

        .cardwrapper {
            padding-left: 18px;
            padding-right: 18px;
            width: 50%;
        }

        .activity-wrapper {
            margin-top: 15%;
            margin-left: 30%;
            min-height: 900px;

        }

        .actxt {
            font-size: 1.5rem;

        }

        .acdate,
        .acplace {
            display: inline-block;
            margin: 5px 30px 10px 0;
            font-size: 1rem;
            letter-spacing: .1em
        }


        .carousel-control-prev {
            left: -80px;
        }

        .carousel-control-next {
            right: -80px;
        }

        .about-m {
            display: none;
        }

        .about-pc {
            display: block;
        }

        .about {
            position: absolute;
            left: 150px;
            width: 20%;
            top: -150px;
            max-width: 330px;
        }

        .deco {
            display: inline-block;
            margin-bottom: 30px;
            margin-left: 20%;
            line-height: 1.4;
        }

        .rdbt {
            line-height: 55px
        }

    }
</style>