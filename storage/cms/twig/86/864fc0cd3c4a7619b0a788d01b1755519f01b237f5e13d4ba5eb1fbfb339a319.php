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

/* C:\xampp\htdocs\azimuth/themes/purpose/partials/navbar/topbar.htm */
class __TwigTemplate_1b979364a48b1f4228b4f6979febe10463913be47b058133e8af7651546a571b extends \Twig\Template
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
        echo "<div id=\"navbar-top-main\" class=\"navbar-top  navbar-dark bg-dark border-bottom\">
    <div class=\"container px-0\">
        <div class=\"navbar-nav align-items-center\">
            <div class=\"d-none d-lg-inline-block\">
                <span class=\"navbar-text mr-3\">Azimuth - Maritime Quiz</span>
            </div>
            <div>
                <ul class=\"nav\">
                    <div id=\"google_translate_element\"></div>
                </ul>
            </div>
            <div class=\"ml-auto\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link scroll-me\" href=\"#help\">Wiki</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/navbar/topbar.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"navbar-top-main\" class=\"navbar-top  navbar-dark bg-dark border-bottom\">
    <div class=\"container px-0\">
        <div class=\"navbar-nav align-items-center\">
            <div class=\"d-none d-lg-inline-block\">
                <span class=\"navbar-text mr-3\">Azimuth - Maritime Quiz</span>
            </div>
            <div>
                <ul class=\"nav\">
                    <div id=\"google_translate_element\"></div>
                </ul>
            </div>
            <div class=\"ml-auto\">
                <ul class=\"nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link scroll-me\" href=\"#help\">Wiki</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/navbar/topbar.htm", "");
    }
}
