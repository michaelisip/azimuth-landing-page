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

/* C:\xampp\htdocs\azimuth/themes/purpose/partials/home/purchase-now.htm */
class __TwigTemplate_cb2755b540701b361c30464570de28558d29fe32dc8bf7c3b674f231aa93a66a extends \Twig\Template
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
        echo "<section class=\"slice slice-lg\" id=\"purchase\">
    <div class=\"container\">
        <div class=\"row row-grid align-items-center justify-content-around\">
            <div class=\"col-lg-5 order-lg-2\">
                <div class=\"pr-md-4\">
                    <h5 class=\"h3\">Change the way you build wesites. Forever.</h5>
                    <p class=\"text-muted lead my-4\">With Boomerang you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                    <a href=\"\" target=\"_blank\" class=\"btn btn-primary rounded-pill btn-icon mt-4\">
                        <span class=\"btn-inner--icon\"><i class=\"fas fa-cart-plus\"></i></span>
                        <span class=\"btn-inner--text\">Purchase now</span>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6 order-lg-1\">
                <div class=\"position-relative\" style=\"z-index: 10;\">
                    <img alt=\"Image placeholder\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/theme/light/app-3.png");
        echo "\" class=\"img-center img-fluid\">
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/home/purchase-now.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"slice slice-lg\" id=\"purchase\">
    <div class=\"container\">
        <div class=\"row row-grid align-items-center justify-content-around\">
            <div class=\"col-lg-5 order-lg-2\">
                <div class=\"pr-md-4\">
                    <h5 class=\"h3\">Change the way you build wesites. Forever.</h5>
                    <p class=\"text-muted lead my-4\">With Boomerang you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                    <a href=\"\" target=\"_blank\" class=\"btn btn-primary rounded-pill btn-icon mt-4\">
                        <span class=\"btn-inner--icon\"><i class=\"fas fa-cart-plus\"></i></span>
                        <span class=\"btn-inner--text\">Purchase now</span>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6 order-lg-1\">
                <div class=\"position-relative\" style=\"z-index: 10;\">
                    <img alt=\"Image placeholder\" src=\"{{ 'assets/img/theme/light/app-3.png' | theme }}\" class=\"img-center img-fluid\">
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/home/purchase-now.htm", "");
    }
}
