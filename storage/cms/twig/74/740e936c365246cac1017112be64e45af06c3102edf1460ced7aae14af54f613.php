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

/* C:\xampp\htdocs\azimuth/themes/purpose/pages/maintenance.htm */
class __TwigTemplate_a9fb7128fd9d5ec110d6c6f9494520ed651fd1f46cd435658fe305a8f9d62ce7 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!-- Header -->
<section class=\"slice slice-lg vh-100 bg-gradient-primary overflow-hidden\" data-offset-top=\"#header-main\">
    <div class=\"bg-absolute-cover vh-100 overflow-hidden\">
        <figure class=\"w-100\">
            <img alt=\"Background\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/svg/backgrounds/bg-2.svg");
        echo "\" class=\"svg-inject\">
        </figure>
    </div>

    <div class=\"container h-100 d-flex align-items-center position-relative zindex-100\">
        <div class=\"col\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-7 text-center\">
                    <h6 class=\"h1 mb-5 font-weight-400 text-white\">Under Maintenance</h6>
                    <p class=\"px-md-5 text-white mb-5\">
                        We're currently working on some issue, please standby. 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Background -->
    <div class=\"position-absolute bottom-0 right-4 overflow-hidden\">
        <figure class=\"w-50\">
            <img alt=\"Illustration\" src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/svg/illustrations/monitor.svg");
        echo "\" class=\"svg-inject opacity-2\">
        </figure>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\azimuth/themes/purpose/pages/maintenance.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 25,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->
<section class=\"slice slice-lg vh-100 bg-gradient-primary overflow-hidden\" data-offset-top=\"#header-main\">
    <div class=\"bg-absolute-cover vh-100 overflow-hidden\">
        <figure class=\"w-100\">
            <img alt=\"Background\" src=\"{{ 'assets/img/svg/backgrounds/bg-2.svg' | theme }}\" class=\"svg-inject\">
        </figure>
    </div>

    <div class=\"container h-100 d-flex align-items-center position-relative zindex-100\">
        <div class=\"col\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-7 text-center\">
                    <h6 class=\"h1 mb-5 font-weight-400 text-white\">Under Maintenance</h6>
                    <p class=\"px-md-5 text-white mb-5\">
                        We're currently working on some issue, please standby. 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Background -->
    <div class=\"position-absolute bottom-0 right-4 overflow-hidden\">
        <figure class=\"w-50\">
            <img alt=\"Illustration\" src=\"{{ 'assets/img/svg/illustrations/monitor.svg' | theme }}\" class=\"svg-inject opacity-2\">
        </figure>
    </div>
</section>", "C:\\xampp\\htdocs\\azimuth/themes/purpose/pages/maintenance.htm", "");
    }
}
