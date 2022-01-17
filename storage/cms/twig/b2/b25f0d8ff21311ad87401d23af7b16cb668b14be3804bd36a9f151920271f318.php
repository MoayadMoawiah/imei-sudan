<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\imei/themes/imei/layouts/theme.htm */
class __TwigTemplate_1deb5dccbbf8513d64a3f2511fd0b7cbe67a47803b2bf986a3fc58781e052442 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    
    <title>IMEI SUDAN</title>
    
    <!-- core CSS -->
    <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/css/animate.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/css/owl.carousel.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/css/owl.transitions.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/css/prettyPhoto.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/css/main.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/css/responsive.css");
        echo "\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/js/html5shiv.js");
        echo "\"></script>
    <script src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/js/respond.min.js");
        echo "\"></script>
    <![endif]-->
    
    <link rel=\"shortcut icon\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/images/IMEI-sudan.png");
        echo "\">
    
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/images/ico/apple-touch-icon-144-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/images/ico/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/images/ico/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/images/ico/apple-touch-icon-57-precomposed.png");
        echo "\">
</head>
<!--/head-->

<body id=\"home\" class=\"homepage\">

    <header id=\"header\">
        <nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"\"><img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/images/IMEI-sudan.png");
        echo "\" alt=\"logo\" style=\"width: 67px;height: 57px;\"></a>
                </div>

                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        
                        
                        
                        <li class=\"scroll\"><a href=\"#animated-number\">الإحصائيات</a></li>
";
        // line 58
        echo "                        <li class=\"scroll\"><a href=\"#about\">من نحن</a></li>
                        <li class=\"scroll active\"><a href=\"#home\">الرئيسية</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->
    
    ";
        // line 69
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 70
        echo "
    <footer id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    &copy; 2014 Your Company. Designed by <a target=\"_blank\" href=\"http://shapebootstrap.net/\" title=\"Free Twitter Bootstrap WordPress Themes and HTML templates\">ShapeBootstrap</a>
                </div>
                <div class=\"col-sm-6\">
                    <ul class=\"social-icons\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-flickr\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-github\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/js/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/js/bootstrap.min.js");
        echo "\"></script>
    <script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script src=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/js/owl.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/js/mousescroll.js");
        echo "\"></script>
    <script src=\"";
        // line 101
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/js/smoothscroll.js");
        echo "\"></script>
    <script src=\"";
        // line 102
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/js/jquery.prettyPhoto.js");
        echo "\"></script>
    <script src=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/js/jquery.isotope.min.js");
        echo "\"></script>
    <script src=\"";
        // line 104
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/js/jquery.inview.min.js");
        echo "\"></script>
    <script src=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/js/wow.min.js");
        echo "\"></script>
    <script src=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/js/main.js");
        echo "\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\imei/themes/imei/layouts/theme.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 106,  220 => 105,  216 => 104,  212 => 103,  208 => 102,  204 => 101,  200 => 100,  196 => 99,  191 => 97,  187 => 96,  159 => 70,  157 => 69,  144 => 58,  132 => 47,  113 => 31,  109 => 30,  105 => 29,  101 => 28,  96 => 26,  90 => 23,  86 => 22,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    
    <title>IMEI SUDAN</title>
    
    <!-- core CSS -->
    <link href=\"{{'assets/theme/css/bootstrap.min.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/theme/css/font-awesome.min.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/theme/css/animate.min.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/theme/css/owl.carousel.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/theme/css/owl.transitions.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/theme/css/prettyPhoto.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/theme/css/main.css'|theme}}\" rel=\"stylesheet\">
    <link href=\"{{'assets/theme/css/responsive.css'|theme}}\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"{{'assets/theme/js/html5shiv.js'|theme}}\"></script>
    <script src=\"{{'assets/theme/js/respond.min.js'|theme}}\"></script>
    <![endif]-->
    
    <link rel=\"shortcut icon\" href=\"{{'assets/theme/images/IMEI-sudan.png'|theme}}\">
    
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{'assets/theme/images/ico/apple-touch-icon-144-precomposed.png'|theme}}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{'assets/theme/images/ico/apple-touch-icon-114-precomposed.png'|theme}}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{'assets/theme/images/ico/apple-touch-icon-72-precomposed.png'|theme}}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{'assets/theme/images/ico/apple-touch-icon-57-precomposed.png'|theme}}\">
</head>
<!--/head-->

<body id=\"home\" class=\"homepage\">

    <header id=\"header\">
        <nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"\"><img src=\"{{'assets/theme/images/IMEI-sudan.png'|theme}}\" alt=\"logo\" style=\"width: 67px;height: 57px;\"></a>
                </div>

                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        
                        
                        
                        <li class=\"scroll\"><a href=\"#animated-number\">الإحصائيات</a></li>
{#                        <li class=\"scroll\"><a href=\"#regester\">تسجيل بلاغ</a></li>
                        <li class=\"scroll\"><a href=\"#search\">بحث عن جهاز</a></li>
#}                        <li class=\"scroll\"><a href=\"#about\">من نحن</a></li>
                        <li class=\"scroll active\"><a href=\"#home\">الرئيسية</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->
    
    {%page%}

    <footer id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    &copy; 2014 Your Company. Designed by <a target=\"_blank\" href=\"http://shapebootstrap.net/\" title=\"Free Twitter Bootstrap WordPress Themes and HTML templates\">ShapeBootstrap</a>
                </div>
                <div class=\"col-sm-6\">
                    <ul class=\"social-icons\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-flickr\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-github\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src=\"{{'assets/theme/js/jquery.js'|theme}}\"></script>
    <script src=\"{{'assets/theme/js/bootstrap.min.js'|theme}}\"></script>
    <script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script src=\"{{'assets/theme/js/owl.carousel.min.js'|theme}}\"></script>
    <script src=\"{{'assets/theme/js/mousescroll.js'|theme}}\"></script>
    <script src=\"{{'assets/theme/js/smoothscroll.js'|theme}}\"></script>
    <script src=\"{{'assets/theme/js/jquery.prettyPhoto.js'|theme}}\"></script>
    <script src=\"{{'assets/theme/js/jquery.isotope.min.js'|theme}}\"></script>
    <script src=\"{{'assets/theme/js/jquery.inview.min.js'|theme}}\"></script>
    <script src=\"{{'assets/theme/js/wow.min.js'|theme}}\"></script>
    <script src=\"{{'assets/theme/js/main.js'|theme}}\"></script>
</body>

</html>", "C:\\xampp\\htdocs\\imei/themes/imei/layouts/theme.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("page" => 69);
        static $filters = array("theme" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['page'],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
