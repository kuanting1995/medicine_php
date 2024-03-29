<style>
    .offcanvas {
        background-color: #d6d6d6;
    }



    .offcanvas-header {
        padding: 20px 20px 20px 28px;
        position: relative;
    }

    .offcanvas-header::after {
        content: "";
        position: absolute;
        border-bottom: 1px solid black;
        bottom: 0;
        left: 20px;
        right: 20px;

    }

    .offcan-brand {
        height: 25px;
        width: 165px;
        overflow: hidden;
        background: url(./img//MED_IMG/logo1.jpg);
        background-size: 100% auto;
        background-position: 0 100%;

        transition: .32s;
    }

    .offcan-nav {
        list-style: none;
        margin: 40px 0 80px 0;
        padding-left: 1rem;
    }


    .offcan-item>.nav-link {
        text-decoration: none;
        color: black;
        font-family: Helvetica, Arial, sans-serif;
    }

    .other-menu {
        list-style: none;
        padding-left: 1rem;
    }


    .input-group {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .search-target {
        text-align: end;
        margin-top: 15px;
    }

    .search-target>label {
        margin-right: 15px;
        font-size: .9rem;
    }

    #che {
        box-shadow: 0 0 0 1px #000;
        background-origin: content-box;
        background-color: transparent;
    }


    #che:checked {
        background-color: #b59059;
    }

    .custom-check1 {
        width: 12px;
        height: 12px;
        appearance: none;
        border: 2px solid #d6d6d6;
        margin-right: 5px;
    }

    .input-group>#field {
        margin-left: 15px;
        background-color: transparent;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: 1px solid #000;
    }
</style>