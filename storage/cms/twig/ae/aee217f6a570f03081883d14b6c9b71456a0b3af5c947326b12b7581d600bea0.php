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

/* C:\xampp\htdocs\imei/themes/imei/pages/home.htm */
class __TwigTemplate_2131812cb8bc4661340b05e691fb613f97a80328e64b24ecc4879a19ffcddb2e extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
    <section id=\"cta\" class=\"wow fadeIn\" dir=\"rtl\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-9\">
                    <h2>إبحث عن هاتفك المفقود</h2>
                    <p>
                    أدخل رقم المعرف الدولي للجهاز (IMEI)، ثم أضغط على بحث
                    </p>
                    
                    <form id=\"main-contact-form\" name=\"contact-form\" method=\"post\" action=\"#\">
                    
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"رقم المعرف الدولي (IMEI)\" required>
                        </div>
                    
                        
                    </form>
                </div>
                <div class=\"col-sm-3 text-right\">
                    <a class=\"btn btn-primary btn-lg\" href=\"#\">بحث</a>
                </div>
            </div>
        </div>
    </section>
    <!--/#cta-->
    
    <section id=\"cta\" class=\"wow fadeIn\" dir=\"rtl\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-9\">
                    <h2>تسجيل جهاز مفقود</h2>
                    <p>
                    أدخل رقم المعرف الدولي للجهاز (IMEI)، ثم أضغط على حفظ
                    </p>
                    
                    <form id=\"main-contact-form\" name=\"contact-form\" method=\"post\" action=\"#\">
                    
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"رقم المعرف الدولي (IMEI)\" required>
                        </div>
                        
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"نوع الجهاز\" required>
                        </div>
                        
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"الموديل\" required>
                        </div>
                        
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"رقم الهاتف للتواصل\" required>
                        </div>
                        
                        
                    </form>
                </div>
                <div class=\"col-sm-3 text-right\">
                    <a class=\"btn btn-primary btn-lg\" href=\"#\">حفظ</a>
                </div>
            </div>
        </div>
    </section>
    <!--/#cta-->
    
";
        // line 69
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("statistics"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\imei/themes/imei/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 69,  50 => 4,  46 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'slider' %}

{% partial 'about' %}

    <section id=\"cta\" class=\"wow fadeIn\" dir=\"rtl\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-9\">
                    <h2>إبحث عن هاتفك المفقود</h2>
                    <p>
                    أدخل رقم المعرف الدولي للجهاز (IMEI)، ثم أضغط على بحث
                    </p>
                    
                    <form id=\"main-contact-form\" name=\"contact-form\" method=\"post\" action=\"#\">
                    
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"رقم المعرف الدولي (IMEI)\" required>
                        </div>
                    
                        
                    </form>
                </div>
                <div class=\"col-sm-3 text-right\">
                    <a class=\"btn btn-primary btn-lg\" href=\"#\">بحث</a>
                </div>
            </div>
        </div>
    </section>
    <!--/#cta-->
    
    <section id=\"cta\" class=\"wow fadeIn\" dir=\"rtl\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-9\">
                    <h2>تسجيل جهاز مفقود</h2>
                    <p>
                    أدخل رقم المعرف الدولي للجهاز (IMEI)، ثم أضغط على حفظ
                    </p>
                    
                    <form id=\"main-contact-form\" name=\"contact-form\" method=\"post\" action=\"#\">
                    
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"رقم المعرف الدولي (IMEI)\" required>
                        </div>
                        
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"نوع الجهاز\" required>
                        </div>
                        
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"الموديل\" required>
                        </div>
                        
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"رقم الهاتف للتواصل\" required>
                        </div>
                        
                        
                    </form>
                </div>
                <div class=\"col-sm-3 text-right\">
                    <a class=\"btn btn-primary btn-lg\" href=\"#\">حفظ</a>
                </div>
            </div>
        </div>
    </section>
    <!--/#cta-->
    
{% partial 'statistics' %}", "C:\\xampp\\htdocs\\imei/themes/imei/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
