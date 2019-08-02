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

/* C:\xampp\htdocs\azimuth/themes/purpose/partials/home/header.htm */
class __TwigTemplate_7f11330a499e50ba47ec37c80181111962dc28e5e225ec7155e55365015acd56 extends \Twig\Template
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
        echo "<section class=\"slice slice-lg bg-gradient-primary\" data-offset-top=\"#header-main\">
    <div class=\"container py-6 py-lg-0 d-flex align-items-center position-relative zindex-100\">
        <div class=\"col\">
            <div class=\"row\">
                <div class=\"col-xl-5 col-lg-6 align-self-center\">
                    <div class=\"text-center text-lg-left pb-5\">
                        <h2 class=\"h1 text-white mb-4\">One purpose can change your <span class=\"text-info typed\" id=\"type-example-1\" data-type-this=\"creativity., energy., life.\"></span></h2>
                        <p class=\"lead lh-180 text-white\">With we have optimized the customization process to save your team time when building websites.</p>
                        <div class=\"mt-5\">
                            <a href=\"#\" class=\"btn btn-app-store hover-translate-y-n3 mr-lg-4 mb-4\">
                                <i class=\"fab fa-apple\"></i>
                                <span class=\"btn-inner--text\">Download on the</span>
                                <span class=\"btn-inner--brand\">App Store</span>
                            </a>
                            <a href=\"#\" class=\"btn btn-app-store hover-translate-y-n3 mb-4\">
                                <i class=\"fab fa-google-play\"></i>
                                <span class=\"btn-inner--text\">Download on the</span>
                                <span class=\"btn-inner--brand\">Play Store</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 ml-lg-auto align-self-end\">
                    <div class=\"position-relative\" style=\"z-index: 10;\">
                        <img alt=\"Image placeholder\" src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/azimuth.png");
        echo "\" class=\"img-fluid img-center\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"shape-container\" data-shape-position=\"bottom\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1600 220\" preserveAspectRatio=\"none\" class=\"ie-shape-wave-3\">
            <path d=\"M918.34,99.41C388.23,343.6,47.11,117.12,0,87.54V220H1600V87.54C1378.72-76.71,1077.32,27.41,918.34,99.41Z\"></path>
        </svg>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/home/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 25,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"slice slice-lg bg-gradient-primary\" data-offset-top=\"#header-main\">
    <div class=\"container py-6 py-lg-0 d-flex align-items-center position-relative zindex-100\">
        <div class=\"col\">
            <div class=\"row\">
                <div class=\"col-xl-5 col-lg-6 align-self-center\">
                    <div class=\"text-center text-lg-left pb-5\">
                        <h2 class=\"h1 text-white mb-4\">One purpose can change your <span class=\"text-info typed\" id=\"type-example-1\" data-type-this=\"creativity., energy., life.\"></span></h2>
                        <p class=\"lead lh-180 text-white\">With we have optimized the customization process to save your team time when building websites.</p>
                        <div class=\"mt-5\">
                            <a href=\"#\" class=\"btn btn-app-store hover-translate-y-n3 mr-lg-4 mb-4\">
                                <i class=\"fab fa-apple\"></i>
                                <span class=\"btn-inner--text\">Download on the</span>
                                <span class=\"btn-inner--brand\">App Store</span>
                            </a>
                            <a href=\"#\" class=\"btn btn-app-store hover-translate-y-n3 mb-4\">
                                <i class=\"fab fa-google-play\"></i>
                                <span class=\"btn-inner--text\">Download on the</span>
                                <span class=\"btn-inner--brand\">Play Store</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 ml-lg-auto align-self-end\">
                    <div class=\"position-relative\" style=\"z-index: 10;\">
                        <img alt=\"Image placeholder\" src=\"{{ 'assets/img/brand/azimuth.png' | theme }}\" class=\"img-fluid img-center\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"shape-container\" data-shape-position=\"bottom\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1600 220\" preserveAspectRatio=\"none\" class=\"ie-shape-wave-3\">
            <path d=\"M918.34,99.41C388.23,343.6,47.11,117.12,0,87.54V220H1600V87.54C1378.72-76.71,1077.32,27.41,918.34,99.41Z\"></path>
        </svg>
    </div>
</section>", "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/home/header.htm", "");
    }
}
