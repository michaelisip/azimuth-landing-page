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

/* C:\xampp\htdocs\azimuth/themes/purpose/partials/navbar/main.htm */
class __TwigTemplate_a2545465b917f51d59fbac6bfdf03863fb6f9ae4e3bfaa43c82f2eab2f569d67 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-dark\" id=\"navbar-main\">
    <div class=\"container px-lg-0\">
        <!-- Logo -->
        <a class=\"navbar-brand mr-lg-4\" href=\"\">
            <img alt=\"Image placeholder\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/logo.png");
        echo "\" id=\"navbar-logo\" style=\"height: 100px;\">
        </a>
        <!-- Navbar collapse trigger -->
        <button class=\"navbar-toggler pr-0\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-main-collapse\" aria-controls=\"navbar-main-collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <!-- Navbar nav -->
        <div class=\"collapse navbar-collapse\" id=\"navbar-main-collapse\">
            <ul class=\"navbar-nav align-items-lg-center\">
                <li class=\"nav-item \">
                    <a class=\"nav-link scroll-me\" href=\"#get-started\">Overview</a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link scroll-me\" href=\"#features\">Features</a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link scroll-me\" href=\"#testimonials\">Testimonials</a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link scroll-me\" href=\"#mission\">Mission</a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link scroll-me\" href=\"#mission\">Pricing Plans</a>
                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/navbar/main.htm";
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
        return new Source("<nav class=\"navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-dark\" id=\"navbar-main\">
    <div class=\"container px-lg-0\">
        <!-- Logo -->
        <a class=\"navbar-brand mr-lg-4\" href=\"\">
            <img alt=\"Image placeholder\" src=\"{{ 'assets/img/brand/logo.png' | theme }}\" id=\"navbar-logo\" style=\"height: 100px;\">
        </a>
        <!-- Navbar collapse trigger -->
        <button class=\"navbar-toggler pr-0\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-main-collapse\" aria-controls=\"navbar-main-collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <!-- Navbar nav -->
        <div class=\"collapse navbar-collapse\" id=\"navbar-main-collapse\">
            <ul class=\"navbar-nav align-items-lg-center\">
                <li class=\"nav-item \">
                    <a class=\"nav-link scroll-me\" href=\"#get-started\">Overview</a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link scroll-me\" href=\"#features\">Features</a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link scroll-me\" href=\"#testimonials\">Testimonials</a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link scroll-me\" href=\"#mission\">Mission</a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link scroll-me\" href=\"#mission\">Pricing Plans</a>
                </li>
            </ul>
        </div>
    </div>
</nav>", "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/navbar/main.htm", "");
    }
}
