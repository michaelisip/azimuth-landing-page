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

/* C:\xampp\htdocs\azimuth/themes/purpose/partials/home/get-started.htm */
class __TwigTemplate_e39c875bab42ad51cb5634b891a41e7bddd6141f3139253286a764e855af8353 extends \Twig\Template
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
        echo "<section class=\"slice slice-lg\" id=\"get-started\">
    <div class=\"container\">
        <div class=\"text-center\">
            <h1>It's time to change the game</h1>
            <div class=\"fluid-paragraph mt-4\">
                <p class=\"lead text-muted lh-180\">
                    Purpose is a great UI package based on Bootstrap 4 that includes the most important components and features so you can jumpstart the hard work and get right to the website creation fast and easy.
                </p>
                <a href=\"\" class=\"btn btn-dark btn-icon rounded-pill hover-scale-110 mt-5\">
                    <span class=\"btn-inner--text\">Let's get started</span>
                    <span class=\"btn-inner--icon\"><i class=\"fas fa-angle-right\"></i></span>
                </a>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/home/get-started.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"slice slice-lg\" id=\"get-started\">
    <div class=\"container\">
        <div class=\"text-center\">
            <h1>It's time to change the game</h1>
            <div class=\"fluid-paragraph mt-4\">
                <p class=\"lead text-muted lh-180\">
                    Purpose is a great UI package based on Bootstrap 4 that includes the most important components and features so you can jumpstart the hard work and get right to the website creation fast and easy.
                </p>
                <a href=\"\" class=\"btn btn-dark btn-icon rounded-pill hover-scale-110 mt-5\">
                    <span class=\"btn-inner--text\">Let's get started</span>
                    <span class=\"btn-inner--icon\"><i class=\"fas fa-angle-right\"></i></span>
                </a>
            </div>
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/home/get-started.htm", "");
    }
}
