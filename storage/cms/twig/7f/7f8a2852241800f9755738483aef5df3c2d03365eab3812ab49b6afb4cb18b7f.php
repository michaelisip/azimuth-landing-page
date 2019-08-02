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

/* C:\xampp\htdocs\azimuth/themes/purpose/partials/footer/main.htm */
class __TwigTemplate_251daa3b7b1fe37dbeb5d043589cd80fa5545261c76b0f9cfa6d618e52fded22 extends \Twig\Template
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
        echo "<div class=\"row pt-md justify-content-center\">
    <div class=\"col-lg-8 mb-5 mb-lg-0 text-center\">
        <a href=\"/index.html\">
            <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/logo.png");
        echo "\" alt=\"Footer logo\" class=\"mb-4\" style=\"height: 120px;\">
        </a>
        <p>Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/footer/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row pt-md justify-content-center\">
    <div class=\"col-lg-8 mb-5 mb-lg-0 text-center\">
        <a href=\"/index.html\">
            <img src=\"{{ 'assets/img/brand/logo.png' | theme }}\" alt=\"Footer logo\" class=\"mb-4\" style=\"height: 120px;\">
        </a>
        <p>Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
    </div>
</div>", "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/footer/main.htm", "");
    }
}
