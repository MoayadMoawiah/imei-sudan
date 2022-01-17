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

/* C:\xampp\htdocs\imei/themes/imei/layouts/default.htm */
class __TwigTemplate_3d16cc7c3da9ef03cd933f5bae12f7ddddd039ac7fb2699c091c3aa303aa2b9e extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"ar\" dir=\"rtl\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    ";
        // line 10
        echo "    
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bootstrap5/css/bootstrap.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bootstrap5/css/bootstrap.rtl.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bootstrap5/css/bootstrap.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bootstrap5/css/bootstrap.rtl.min.css");
        echo "\">
    
    <title>مرحبا بالعالم!</title>
    
  </head>
  <body>
  
    ";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 22
        echo "
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    ";
        // line 27
        echo "    
    
    <script src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bootstrap5/js/bootstrap.bundle.js");
        echo "\"></script>
    <script src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bootstrap5/js/bootstrap.bundle.min.js");
        echo "\"></script>
    
    <script src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bootstrap5/js/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bootstrap5/js/bootstrap.min.js");
        echo "\"></script>
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
    -->
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\imei/themes/imei/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 33,  95 => 32,  90 => 30,  86 => 29,  82 => 27,  76 => 22,  74 => 21,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  49 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"ar\" dir=\"rtl\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    {#<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css\" integrity=\"sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q\" crossorigin=\"anonymous\">#}
    
    <link rel=\"stylesheet\" href=\"{{'assets/bootstrap5/css/bootstrap.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/bootstrap5/css/bootstrap.rtl.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/bootstrap5/css/bootstrap.min.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/bootstrap5/css/bootstrap.rtl.min.css'|theme}}\">
    
    <title>مرحبا بالعالم!</title>
    
  </head>
  <body>
  
    {%page%}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {#<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>#}
    
    
    <script src=\"{{'assets/bootstrap5/js/bootstrap.bundle.js'|theme}}\"></script>
    <script src=\"{{'assets/bootstrap5/js/bootstrap.bundle.min.js'|theme}}\"></script>
    
    <script src=\"{{'assets/bootstrap5/js/bootstrap.js'|theme}}\"></script>
    <script src=\"{{'assets/bootstrap5/js/bootstrap.min.js'|theme}}\"></script>
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
    -->
  </body>
</html>", "C:\\xampp\\htdocs\\imei/themes/imei/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("page" => 21);
        static $filters = array("theme" => 11);
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
