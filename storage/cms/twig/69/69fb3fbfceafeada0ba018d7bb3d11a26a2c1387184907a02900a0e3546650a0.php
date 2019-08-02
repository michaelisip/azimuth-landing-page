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

/* C:\xampp\htdocs\azimuth/themes/purpose/pages/404.htm */
class __TwigTemplate_d1f88f97898db24125831b9871a3eaaf4b16dc3ea0676029724e40a8115db62d extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/svg/backgrounds/bg-4.svg");
        echo "\" class=\"svg-inject\">
        </figure>
    </div>

    <div class=\"container h-100 d-flex align-items-center position-relative zindex-100\">
        <div class=\"col\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-7 text-center\">
                    <h6 class=\"h1 mb-5 font-weight-400 text-white\">Page not found</h6>
                    <a href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("Homepage");
        echo "\" class=\"btn btn-white btn-icon rounded-pill hover-translate-y-n3\">
                        <span class=\"btn-inner--icon\"><i class=\"fas fa-home\"></i></span>
                        <span class=\"btn-inner--text\">Return home?</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Background -->
    <div class=\"position-absolute bottom-0 right-4 overflow-hidden\">
        <figure class=\"w-50\">
            <img alt=\"Page Not Found\" src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/svg/illustrations/page-not-found.svg");
        echo "\" class=\"svg-inject opacity-2\">
        </figure>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\azimuth/themes/purpose/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 26,  53 => 14,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->
<section class=\"slice slice-lg vh-100 bg-gradient-primary overflow-hidden\" data-offset-top=\"#header-main\">
    <div class=\"bg-absolute-cover vh-100 overflow-hidden\">
        <figure class=\"w-100\">
            <img alt=\"Background\" src=\"{{ 'assets/img/svg/backgrounds/bg-4.svg' | theme }}\" class=\"svg-inject\">
        </figure>
    </div>

    <div class=\"container h-100 d-flex align-items-center position-relative zindex-100\">
        <div class=\"col\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-7 text-center\">
                    <h6 class=\"h1 mb-5 font-weight-400 text-white\">Page not found</h6>
                    <a href=\"{{ 'Homepage' | page }}\" class=\"btn btn-white btn-icon rounded-pill hover-translate-y-n3\">
                        <span class=\"btn-inner--icon\"><i class=\"fas fa-home\"></i></span>
                        <span class=\"btn-inner--text\">Return home?</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Background -->
    <div class=\"position-absolute bottom-0 right-4 overflow-hidden\">
        <figure class=\"w-50\">
            <img alt=\"Page Not Found\" src=\"{{ 'assets/img/svg/illustrations/page-not-found.svg' | theme }}\" class=\"svg-inject opacity-2\">
        </figure>
    </div>
</section>", "C:\\xampp\\htdocs\\azimuth/themes/purpose/pages/404.htm", "");
    }
}
