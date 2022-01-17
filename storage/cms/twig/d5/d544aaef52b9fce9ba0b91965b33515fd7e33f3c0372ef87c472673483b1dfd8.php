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

/* C:\xampp\htdocs\imei/themes/imei/partials/slider.htm */
class __TwigTemplate_c3bf46e7a0dd34e5500e6eea7e8f9e44442ab1a453403ce00752ddc9040eb2e3 extends \Twig\Template
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
        echo "<section id=\"main-slider\">
    <div class=\"owl-carousel\">
        <div class=\"item\" style=\"background-image: url(";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/images/slider/bg3.jpg");
        echo ");\">
            <div class=\"slider-inner\">
                <div class=\"container\">
                    <div class=\"row\" dir=\"rtl\">
                        <div class=\"col-sm-6\">
                            <div class=\"carousel-content\">
                                <h2><span></span> منصة (IMEI) السودان</h2>
                                <p>
                                    مرحبا بكم في المنصة السودانية للمعرف الدولي للأجهزة المحمولة
                                </p>
                                <a class=\"btn btn-primary btn-lg\" href=\"#about\">لمعرفة المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.item-->
        <div class=\"item\" style=\"background-image: url(";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/theme/images/slider/bg4.jpg");
        echo ");\">
            <div class=\"slider-inner\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"carousel-content\">
                                <h2>IMEI Sudan</h2>
                                <p>Welcome to the Sudanese platform for the international identification of mobile devices</p>
                                <a class=\"btn btn-primary btn-lg\" href=\"#about\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.item-->
    </div>
    <!--/.owl-carousel-->
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\imei/themes/imei/partials/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"main-slider\">
    <div class=\"owl-carousel\">
        <div class=\"item\" style=\"background-image: url({{'assets/theme/images/slider/bg3.jpg'|theme}});\">
            <div class=\"slider-inner\">
                <div class=\"container\">
                    <div class=\"row\" dir=\"rtl\">
                        <div class=\"col-sm-6\">
                            <div class=\"carousel-content\">
                                <h2><span></span> منصة (IMEI) السودان</h2>
                                <p>
                                    مرحبا بكم في المنصة السودانية للمعرف الدولي للأجهزة المحمولة
                                </p>
                                <a class=\"btn btn-primary btn-lg\" href=\"#about\">لمعرفة المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.item-->
        <div class=\"item\" style=\"background-image: url({{'assets/theme/images/slider/bg4.jpg'|theme}});\">
            <div class=\"slider-inner\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"carousel-content\">
                                <h2>IMEI Sudan</h2>
                                <p>Welcome to the Sudanese platform for the international identification of mobile devices</p>
                                <a class=\"btn btn-primary btn-lg\" href=\"#about\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.item-->
    </div>
    <!--/.owl-carousel-->
</section>", "C:\\xampp\\htdocs\\imei/themes/imei/partials/slider.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
