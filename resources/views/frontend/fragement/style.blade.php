<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<title>weone</title>
<link rel="icon" href="/images//header/weone.png">
<!-- Bootstrap core CSS-->
<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



<!-- Custom styles for this template-->

<link href="/css/main-frontend.css" rel="stylesheet">
<link href="/css/product.css" rel="stylesheet">

<link href="/css/footer_css.css" rel="stylesheet">
<link href="/css/contactus.css" rel="stylesheet">
<link href="/css/aboutus.css" rel="stylesheet">
<link href="/css/about_product.css" rel="stylesheet">
<link href="/css/category.css" rel="stylesheet">
<link href="/css/hover_images.css" rel="stylesheet">
<link href="/css/brand.css" rel="stylesheet">
<link href="/css/product-detail.css" rel="stylesheet">
<link href="/css/offer.css" rel="stylesheet">

<link href="/css/bootstrap-formhelpers.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">






<style>
    .hovereffect {
        width:100%;
        height:100%;
        float:left;
        overflow:hidden;
        position:relative;
        text-align:center;
        cursor:default;
    }

    .hovereffect .overlay {
        width:100%;
        height:100%;
        position:absolute;
        overflow:hidden;
        top:0;
        left:0;
        opacity:0;
        background-color:rgba(0,0,0,0.5);
        -webkit-transition:all .4s ease-in-out;
        transition:all .4s ease-in-out
    }

    .hovereffect img {
        display:block;
        position:relative;
        -webkit-transition:all .4s linear;
        transition:all .4s linear;
    }

    .hovereffect h2 {
        text-transform:uppercase;
        color:#fff;
        text-align:center;
        position:relative;
        font-size:17px;
        background:rgba(0,0,0,0.6);
        -webkit-transform:translatey(-100px);
        -ms-transform:translatey(-100px);
        transform:translatey(-100px);
        -webkit-transition:all .2s ease-in-out;
        transition:all .2s ease-in-out;
        padding:10px;
    }

    .hovereffect a.info {
        text-decoration:none;
        display:inline-block;
        text-transform:uppercase;
        color:#fff;
        border:1px solid #fff;
        background-color:transparent;
        opacity:0;
        filter:alpha(opacity=0);
        -webkit-transition:all .2s ease-in-out;
        transition:all .2s ease-in-out;
        margin:50px 0 0;
        padding:7px 14px;
    }

    .hovereffect a.info:hover {
        box-shadow:0 0 5px #fff;
    }

    .hovereffect:hover img {
        -ms-transform:scale(1.2);
        -webkit-transform:scale(1.2);
        transform:scale(1.2);
    }

    .hovereffect:hover .overlay {
        opacity:1;
        filter:alpha(opacity=100);
    }

    .hovereffect:hover h2,.hovereffect:hover a.info {
        opacity:1;
        filter:alpha(opacity=100);
        -ms-transform:translatey(0);
        -webkit-transform:translatey(0);
        transform:translatey(0);
    }

    .hovereffect:hover a.info {
        -webkit-transition-delay:.2s;
        transition-delay:.2s;
    }




    .fa-stack[data-count]:after{
        position:absolute;
        right:0%;
        top:0%;
        content: attr(data-count);
        font-size:40%;
        padding:.6em;
        border-radius:999px;
        line-height:.55em;
        color: white;
        color: #79bb2a;
        text-align:center;
        min-width:2em;
        font-weight:bold;
        background: white;
        border-style:solid;
    }
    .fa-circle {
        color:#79bb2a;
    }

    .red-cart {
        color: #79bb2a; background:white;
    }
    fa-stack-sv {
        left: 0;
        position: absolute;
        text-align: center;
        width: 100%; }
    .fa-stack-sv {
        font-size: 1.5em; }



</style>

