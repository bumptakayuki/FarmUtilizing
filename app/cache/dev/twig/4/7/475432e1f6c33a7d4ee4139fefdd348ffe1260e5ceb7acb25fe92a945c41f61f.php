<?php

/* DreamMarketClientBundle::base.html.twig */
class __TwigTemplate_475432e1f6c33a7d4ee4139fefdd348ffe1260e5ceb7acb25fe92a945c41f61f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>FarmUtilizing</title>

    <!-- CSS includes -->
    <link href=\"css/bootstrap/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Karla\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"css/theme.css\" rel=\"stylesheet\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/apple-touch-icon.png"), "html", null, true);
        echo "\" />


    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <title>";
        // line 29
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>

</head>
<body>

<!-- Navbar -->
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                    data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\" title=\"Roah Single Page Bootstrap Theme\">
                <img class=\"img-responsive\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"
                     style=\"height:40px; margin-top:10px; width: 200px;\"
                     alt=\"DreamMarket\"/>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">

                <li class=\"success\"><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\" class=\"smooth-scroll\">HOME</a></li>
                <li class=\"danger\"><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("blog_search");
        echo "\" class=\"smooth-scroll\">search project</a></li>
                <li class=\"warning\"><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("blog_company");
        echo "\" class=\"smooth-scroll\">Company</a></li>
                <li class=\"primary\"><a href=\"#contact\" class=\"smooth-scroll\">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- Carousel -->
<div id=\"theme-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#theme-carousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#theme-carousel\" data-slide-to=\"1\"></li>
        <li data-target=\"#theme-carousel\" data-slide-to=\"2\"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"item active\">
            <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide_01.jpg"), "html", null, true);
        echo "\" alt=\"carousel1\" style=\"width:100%; height:541px;\"/>
            <div class=\"carousel-caption\">
                <h1>週末の時間を有効活用しませんか？</h1>
                <p>空いた時間で農業</p>
            </div>
        </div>
        <div class=\"item\">
            <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide_02.jpg"), "html", null, true);
        echo "\" alt=\"carousel2\" style=\"width:100%; height:541px;\"/>
            <div class=\"carousel-caption\">
                <h1>ハードウエアスタートアップの実験</h1>
                <p>エレキ設計・ソフト設計・アプリ設計ができる方歓迎！
                    モノづくり・メーカーズに興味がある方、ご連絡お待ちしております</p>
            </div>
        </div>
        <div class=\"item\">
            <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide_03.jpg"), "html", null, true);
        echo "\" alt=\"carousel3\" style=\"width:100%; height:541px;\">
            <div class=\"carousel-caption\">
                <h1>古民家を改造してシェア、ゲストハウス/コミュニティスペースにしたい</h1>
                <p>様々な人が交流できるような場所したいと思っています！
                    また、たまに足を運びたくなるような空間を目指します。</p>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#theme-carousel\" role=\"button\" data-slide=\"prev\">
        <div class=\"carousel-control-arrow\">&#8249;</div>
    </a>
    <a class=\"right carousel-control\" href=\"#theme-carousel\" role=\"button\" data-slide=\"next\">
        <div class=\"carousel-control-arrow\">&#8250;</div>
    </a>
</div>

<div class=\"clearfix hidden-xs\" style=\"width:100%; height:50px;\"></div>

";
        // line 112
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "<div class=\"clearfix hidden-xs\" style=\"width:100%; height:30px;\"></div>
<footer id=\"subfooter\" class=\"clearfix\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <p style=\"font-size:18px;\">ONLINE RESOURCES</p>
                <p><a href=\"#nid\">Demos</a>
                <p><a href=\"#nid\">Documentation</a>
                <p><a href=\"#nid\">Support</a>
                <p><a href=\"#nid\">Blogs</a>
            </div>
            <div class=\"col-md-4\">
                <p style=\"font-size:18px;\">CORPORATE</p>
                <p><span class=\"fa fa-globe\"></span>神奈川県横浜市保土ヶ谷区</p>
                <p><span class=\"fa fa-phone\"></span>1234-21-1</p>
                <p><span class=\"fa fa-envelope\"></span>&nbsp;&nbsp;&nbsp;<a href=\"mailto:mail@example.com\">mail@example.com</a>
                </p>
            </div>
            <div class=\"col-md-4\">
                <p style=\"font-size:18px;\">NEWSLETTER</p>
                <p>
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter your email...\"/>
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\">Subscribe</button>
                        </span>
                </div>
                </p>
                <p><br/></p>
                <p>
                    <a class=\"fa fa-twitter footer-socialicon\" target=\"_blank\" href=\"https://twitter.com/\"></a>
                    <a class=\"fa fa-facebook footer-socialicon\" target=\"_blank\" href=\"https://www.facebook.com/\"></a>
                    <a class=\"fa fa-google-plus footer-socialicon\" target=\"_blank\" href=\"https://plus.google.com/\"></a>
                    <a class=\"fa fa-linkedin footer-socialicon\" target=\"_blank\" href=\"https://plus.google.com/\"></a>
                </p>
            </div>
        </div>
    </div>
</footer>

<footer id=\"footer\" class=\"clearfix\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">

            </div>
            <div class=\"col-md-4\">
                Project Block Inc. All Rights Reserved.
            </div>
        </div>
    </div>
</footer>

<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/theme.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js\"></script>

<script type=\"text/javascript\">
    jQuery(function (\$) {
        // Mix It Up Gallery and Magnific Popup setup
        \$('.container-gallery').mixItUp();
        \$('.container-gallery').magnificPopup({
            delegate: 'a',
            type: 'image'
        });

        // Google Maps setup
        var googlemap = new google.maps.Map(
                document.getElementById('googlemap'),
                {
                    center: new google.maps.LatLng(35, 139.77013750000003),
                    zoom: 8,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
        );
    });
</script>
";
        // line 194
        $this->displayBlock('javascripts', $context, $blocks);
        // line 195
        echo "</body>
</html>


";
    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 112
    public function block_body($context, array $blocks = array())
    {
    }

    // line 194
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "DreamMarketClientBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 194,  301 => 112,  296 => 30,  290 => 29,  282 => 195,  280 => 194,  254 => 171,  250 => 170,  246 => 169,  242 => 168,  238 => 167,  234 => 166,  179 => 113,  177 => 112,  155 => 93,  144 => 85,  134 => 78,  113 => 60,  109 => 59,  105 => 58,  93 => 49,  89 => 48,  68 => 31,  66 => 30,  62 => 29,  49 => 19,  45 => 18,  39 => 15,  23 => 1,);
    }
}
