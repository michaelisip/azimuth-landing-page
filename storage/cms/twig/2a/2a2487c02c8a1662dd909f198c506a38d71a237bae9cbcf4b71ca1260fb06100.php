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

/* C:\xampp\htdocs\azimuth/themes/purpose/partials/home/mission.htm */
class __TwigTemplate_9ab4a4090a9f3a37e1d882d49116f8be66614d0b66347cc8ea0ef7a645fa252d extends \Twig\Template
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
        echo "<section class=\"slice slice-xl overflow-hidden bg-gradient-dark delimiter-top delimiter-bottom\" id=\"mission\">
    <!-- SVG background -->
    <div class=\"bg-absolute-cover bg-size--contain d-flex align-items-center\">
        <figure class=\"w-100\">
            <img alt=\"Image placeholder\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/svg/backgrounds/bg-3.svg");
        echo "\" class=\"svg-inject\">
        </figure>
    </div>
    <div class=\"container position-relative zindex-100\">
        <div class=\"text-center\">
            <h6 class=\"text-muted\">- Our mission -</h6>
            <div class=\"fluid-paragraph mt-4\">
                <p class=\"lead text-white lh-180\">Purpose is a great free UI package based on Bootstrap 4 that includes the most important components and features so you can jumpstart the hard work and get right to the website creation fast and easy.</p>
                <a href=\"#\" class=\"btn btn-primary rounded-pill btn-icon mt-5\">
                    <span class=\"btn-inner--icon\"><i class=\"fas fa-angle-right\"></i></span>
                    <span class=\"btn-inner--text\">Learn more</span>
                </a>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/home/mission.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"slice slice-xl overflow-hidden bg-gradient-dark delimiter-top delimiter-bottom\" id=\"mission\">
    <!-- SVG background -->
    <div class=\"bg-absolute-cover bg-size--contain d-flex align-items-center\">
        <figure class=\"w-100\">
            <img alt=\"Image placeholder\" src=\"{{ 'assets/img/svg/backgrounds/bg-3.svg' | theme }}\" class=\"svg-inject\">
        </figure>
    </div>
    <div class=\"container position-relative zindex-100\">
        <div class=\"text-center\">
            <h6 class=\"text-muted\">- Our mission -</h6>
            <div class=\"fluid-paragraph mt-4\">
                <p class=\"lead text-white lh-180\">Purpose is a great free UI package based on Bootstrap 4 that includes the most important components and features so you can jumpstart the hard work and get right to the website creation fast and easy.</p>
                <a href=\"#\" class=\"btn btn-primary rounded-pill btn-icon mt-5\">
                    <span class=\"btn-inner--icon\"><i class=\"fas fa-angle-right\"></i></span>
                    <span class=\"btn-inner--text\">Learn more</span>
                </a>
            </div>
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/home/mission.htm", "");
    }
}
