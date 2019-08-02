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

/* C:\xampp\htdocs\azimuth/themes/purpose/layouts/default.htm */
class __TwigTemplate_c8763e137ec6238e74681db9e0141704aa2eb4505d9dca0bae2077f349549d27 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"Azimuth\">
    <meta name=\"generator\" content=\"Azimuth\">

    <title>
        Azimuth | ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "
    </title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/favicon.png");
        echo "\" type=\"image/png\">

    <!-- Google Fonts -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Shadows+Into+Light\">

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css\">

    <!-- Styles -->
    <!-- <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/libs/swiper/dist/css/swiper.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/purpose.css");
        echo "\" id=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/custom.css");
        echo "\" id=\"stylesheet\"> -->

    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/libs/swiper/dist/css/swiper.min.css", 1 => "assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css", 2 => "assets/css/purpose.css", 3 => "assets/css/custom.css"]);
        // line 36
        echo "\">

    ";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 39
        echo "
</head>

<body class=\"bg-dark bg-noise\" id=\"body\">

    <!-- Header -->
    <header class=\"header header-transparent\" id=\"header-main\">
        <!-- Topbar -->
        ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar/topbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "
        <!-- Main navbar -->
        ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar/main"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "    </header>

    <!-- Content -->
    <div class=\"main-content\">
        ";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 56
        echo "    </div>

    <!-- Footer -->
    <footer id=\"footer-main\">
        <div class=\"footer footer-dark bg-gradient-primary\">
            <div class=\"container\">

                <!-- Footer Info -->
                ";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer/main"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "
                <!-- Footer Bottom -->
                ";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer/bottom"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 68
        echo "
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- <script src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/purpose.core.js");
        echo "\"></script>
    <script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/libs/swiper/dist/js/swiper.min.js");
        echo "\"></script>
    <script src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js");
        echo "\"></script>
    <script src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/libs/typed.js/lib/typed.min.js");
        echo "\"></script>
    <script src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/purpose.js");
        echo "\"></script>
    <script src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom.js");
        echo "\"></script> -->

    <script src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\" defer></script>

    <script src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/purpose.core.js", 1 => "assets/libs/swiper/dist/js/swiper.min.js", 2 => "assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js", 3 => "assets/libs/typed.js/lib/typed.min.js", 4 => "assets/js/purpose.js", 5 => "assets/js/custom.js"]);
        // line 90
        echo "\"></script>

    ";
        // line 92
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 93
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 94
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\azimuth/themes/purpose/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 94,  208 => 93,  193 => 92,  189 => 90,  187 => 83,  180 => 79,  176 => 78,  172 => 77,  168 => 76,  164 => 75,  160 => 74,  152 => 68,  148 => 67,  144 => 65,  140 => 64,  130 => 56,  128 => 55,  122 => 51,  118 => 50,  114 => 48,  110 => 47,  100 => 39,  97 => 38,  93 => 36,  91 => 31,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  62 => 17,  55 => 13,  47 => 8,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"Azimuth\">
    <meta name=\"generator\" content=\"Azimuth\">

    <title>
        Azimuth | {{ this.page.title }}
    </title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"{{ 'assets/img/brand/favicon.png' | theme }}\" type=\"image/png\">

    <!-- Google Fonts -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Shadows+Into+Light\">

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css\">

    <!-- Styles -->
    <!-- <link rel=\"stylesheet\" href=\"{{ 'assets/libs/swiper/dist/css/swiper.min.css' |theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/purpose.css' | theme }}\" id=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/custom.css' | theme }}\" id=\"stylesheet\"> -->

    <link rel=\"stylesheet\" href=\"{{ [
        'assets/libs/swiper/dist/css/swiper.min.css',
        'assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css',
        'assets/css/purpose.css',
        'assets/css/custom.css',
        ] | theme }}\">

    {% styles %}

</head>

<body class=\"bg-dark bg-noise\" id=\"body\">

    <!-- Header -->
    <header class=\"header header-transparent\" id=\"header-main\">
        <!-- Topbar -->
        {% partial 'navbar/topbar' %}

        <!-- Main navbar -->
        {% partial 'navbar/main' %}
    </header>

    <!-- Content -->
    <div class=\"main-content\">
        {% page %}
    </div>

    <!-- Footer -->
    <footer id=\"footer-main\">
        <div class=\"footer footer-dark bg-gradient-primary\">
            <div class=\"container\">

                <!-- Footer Info -->
                {% partial 'footer/main' %}

                <!-- Footer Bottom -->
                {% partial 'footer/bottom' %}

            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- <script src=\"{{ 'assets/js/purpose.core.js' | theme }}\"></script>
    <script src=\"{{ 'assets/libs/swiper/dist/js/swiper.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/libs/typed.js/lib/typed.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/purpose.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/custom.js' | theme }}\"></script> -->

    <script src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\" defer></script>

    <script src=\"{{ [
        'assets/js/purpose.core.js',
        'assets/libs/swiper/dist/js/swiper.min.js',
        'assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js',
        'assets/libs/typed.js/lib/typed.min.js',
        'assets/js/purpose.js',
        'assets/js/custom.js',
        ] | theme }}\"></script>

    {% framework extras %}
    {% scripts %}

</body>

</html>", "C:\\xampp\\htdocs\\azimuth/themes/purpose/layouts/default.htm", "");
    }
}
