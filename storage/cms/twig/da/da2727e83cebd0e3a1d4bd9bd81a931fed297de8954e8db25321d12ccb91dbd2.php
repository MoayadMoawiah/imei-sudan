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

/* C:\xampp\htdocs\imei/themes/imei/partials/statistics.htm */
class __TwigTemplate_e1c1b8649b2a2736d2f36ee6283240e34f5683ada2452f073566eec8a62055cb extends \Twig\Template
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
        echo "<section id=\"animated-number\" dir=\"rtl\">
    <div class=\"container\">
        <div class=\"section-header\">
            <h2 class=\"section-title text-center wow fadeInDown\">إحصائيات</h2>
            ";
        // line 6
        echo "        </div>

        <div class=\"row text-center\">
            <div class=\"col-sm-4 col-xs-3\">
                <div class=\"wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                    <div class=\"animated-number\" data-digit=\"2305\" data-duration=\"1000\"></div>
                    <strong>بلاغ</strong>
                </div>
            </div>
            <div class=\"col-sm-4 col-xs-3\">
                <div class=\"wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                    <div class=\"animated-number\" data-digit=\"1231\" data-duration=\"1000\"></div>
                    <strong>عملية بحث</strong>
                </div>
            </div>
            <div class=\"col-sm-4 col-xs-3\">
                <div class=\"wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                    <div class=\"animated-number\" data-digit=\"3025\" data-duration=\"1000\"></div>
                    <strong>جهاز مفقود</strong>
                </div>
            </div>
            ";
        // line 33
        echo "        </div>
    </div>
</section>
<!--/#animated-number-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\imei/themes/imei/partials/statistics.htm";
    }

    public function getDebugInfo()
    {
        return array (  68 => 33,  45 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"animated-number\" dir=\"rtl\">
    <div class=\"container\">
        <div class=\"section-header\">
            <h2 class=\"section-title text-center wow fadeInDown\">إحصائيات</h2>
            {#<p class=\"text-center wow fadeInDown\">إحصائيات المنصة</p>#}
        </div>

        <div class=\"row text-center\">
            <div class=\"col-sm-4 col-xs-3\">
                <div class=\"wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                    <div class=\"animated-number\" data-digit=\"2305\" data-duration=\"1000\"></div>
                    <strong>بلاغ</strong>
                </div>
            </div>
            <div class=\"col-sm-4 col-xs-3\">
                <div class=\"wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                    <div class=\"animated-number\" data-digit=\"1231\" data-duration=\"1000\"></div>
                    <strong>عملية بحث</strong>
                </div>
            </div>
            <div class=\"col-sm-4 col-xs-3\">
                <div class=\"wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                    <div class=\"animated-number\" data-digit=\"3025\" data-duration=\"1000\"></div>
                    <strong>جهاز مفقود</strong>
                </div>
            </div>
            {#<div class=\"col-sm-3 col-xs-6\">
                <div class=\"wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                    <div class=\"animated-number\" data-digit=\"1199\" data-duration=\"1000\"></div>
                    <strong>QUESTIONS ANSWERED</strong>
                </div>
            </div>#}
        </div>
    </div>
</section>
<!--/#animated-number-->", "C:\\xampp\\htdocs\\imei/themes/imei/partials/statistics.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
