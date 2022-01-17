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

/* C:\xampp\htdocs\imei/themes/imei/partials/about.htm */
class __TwigTemplate_83fc23efd7fd10b67d8bb13df06880884c8072a3bc9b7f2b92ede46b6bc37bab extends \Twig\Template
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
        echo "<section id=\"about\" dir=\"rtl\">
    <div class=\"container\">

        <div class=\"section-header\">
            <h2 class=\"section-title text-center wow fadeInDown\">ماهو رقم IMEI</h2>
            <p class=\"text-center wow fadeInDown\">التعريف الدولي للأجهزة المحمولة</p>
        </div>

        <div class=\"row\">
            ";
        // line 17
        echo "
            <div class=\"col-sm-6 wow \">
                <h3 class=\"column-title\">رقم التعريف الدولي للأجهزة المحمولة (IMEI)</h3>
                <p> لاهو رقم تعريف فريد أو رقم تسلسلي تمتلكه جميع الهواتف المحمولة والهواتف الذكية. عادة ما يكون طوله 15 رقمًا.
                </p>
                <p>يمكن العثور على رقم IMEI على الملصق الفضي الموجود على ظهر هاتفك ، أو أسفل حزمة البطارية ، أو في العلبة التي جاء فيها هاتفك.</p>
                <p>يمكنك أيضًا عرض رقم IMEI على شاشة هاتفك المحمول أو هاتفك الذكي عن طريق إدخال * # 06 # في لوحة المفاتيح. </p>
            </div>
            
            <div class=\"col-sm-6 wow \">
                <h3 class=\"column-title\">منصة IMEI السودان</h3>
                <p>
                هي منصة لتسجيل أي عملية سرقة للهواتف المحمولة والأجهزة الحديثة ، وإتاحة الفرصة لأي مشتري من التحثث من أن الجهاز المراد شراءة غير مسروق، عبر التحقق من رقم المعرف الدولي للجهاز في المنصة للتثلثل من حالات السرقة و الحيطة من شراء الأجهزة المسروقة
                </p>
            </div>
            
        </div>
    </div>
</section>
<!--/#about-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\imei/themes/imei/partials/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  50 => 17,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"about\" dir=\"rtl\">
    <div class=\"container\">

        <div class=\"section-header\">
            <h2 class=\"section-title text-center wow fadeInDown\">ماهو رقم IMEI</h2>
            <p class=\"text-center wow fadeInDown\">التعريف الدولي للأجهزة المحمولة</p>
        </div>

        <div class=\"row\">
            {#<div class=\"col-sm-6 wow fadeInLeft\">
                <h3 class=\"column-title\">Video Intro</h3>
                <!-- 16:9 aspect ratio -->
                <div class=\"embed-responsive embed-responsive-16by9\">
                    <iframe src=\"//player.vimeo.com/video/58093852?title=0&amp;byline=0&amp;portrait=0&amp;color=e79b39\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>#}

            <div class=\"col-sm-6 wow \">
                <h3 class=\"column-title\">رقم التعريف الدولي للأجهزة المحمولة (IMEI)</h3>
                <p> لاهو رقم تعريف فريد أو رقم تسلسلي تمتلكه جميع الهواتف المحمولة والهواتف الذكية. عادة ما يكون طوله 15 رقمًا.
                </p>
                <p>يمكن العثور على رقم IMEI على الملصق الفضي الموجود على ظهر هاتفك ، أو أسفل حزمة البطارية ، أو في العلبة التي جاء فيها هاتفك.</p>
                <p>يمكنك أيضًا عرض رقم IMEI على شاشة هاتفك المحمول أو هاتفك الذكي عن طريق إدخال * # 06 # في لوحة المفاتيح. </p>
            </div>
            
            <div class=\"col-sm-6 wow \">
                <h3 class=\"column-title\">منصة IMEI السودان</h3>
                <p>
                هي منصة لتسجيل أي عملية سرقة للهواتف المحمولة والأجهزة الحديثة ، وإتاحة الفرصة لأي مشتري من التحثث من أن الجهاز المراد شراءة غير مسروق، عبر التحقق من رقم المعرف الدولي للجهاز في المنصة للتثلثل من حالات السرقة و الحيطة من شراء الأجهزة المسروقة
                </p>
            </div>
            
        </div>
    </div>
</section>
<!--/#about-->", "C:\\xampp\\htdocs\\imei/themes/imei/partials/about.htm", "");
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
