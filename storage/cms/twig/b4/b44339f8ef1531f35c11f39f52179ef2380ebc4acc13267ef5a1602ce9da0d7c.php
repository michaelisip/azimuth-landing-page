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

/* C:\xampp\htdocs\azimuth/themes/purpose/partials/footer/bottom.htm */
class __TwigTemplate_a22b0c2504c4d148d7ee74c909c83e7bb5bc25cef099f869f1211eb504525521 extends \Twig\Template
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
        echo "<div class=\"row align-items-center justify-content-md-between py-4 mt-4 delimiter-top\">
    <div class=\"col-md-6\">
        <div class=\"copyright text-sm font-weight-bold text-center text-md-left\">
            &copy; ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"\" class=\"font-weight-bold\" target=\"_blank\">Azimuth</a>. All rights reserved.
        </div>
    </div>
    <div class=\"col-md-6\">
        <ul class=\"nav justify-content-center justify-content-md-end mt-3 mt-md-0\">
            <li class=\"nav-item\">
                <a class=\"nav-link scroll-me\" href=\"#body\">
                    Back to top
                </a>
            </li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/footer/bottom.htm";
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
        return new Source("<div class=\"row align-items-center justify-content-md-between py-4 mt-4 delimiter-top\">
    <div class=\"col-md-6\">
        <div class=\"copyright text-sm font-weight-bold text-center text-md-left\">
            &copy; {{ \"now\" | date('Y') }} <a href=\"\" class=\"font-weight-bold\" target=\"_blank\">Azimuth</a>. All rights reserved.
        </div>
    </div>
    <div class=\"col-md-6\">
        <ul class=\"nav justify-content-center justify-content-md-end mt-3 mt-md-0\">
            <li class=\"nav-item\">
                <a class=\"nav-link scroll-me\" href=\"#body\">
                    Back to top
                </a>
            </li>
        </ul>
    </div>
</div>", "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/footer/bottom.htm", "");
    }
}
