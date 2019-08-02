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

/* C:\xampp\htdocs\azimuth/themes/purpose/pages/homepage.htm */
class __TwigTemplate_eb31350c437ba05a65324bbc6860dc20092dd2402d2be5152315dc8bc98f0118 extends \Twig\Template
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
";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
<!-- Get started -->
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/get-started"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
<!-- Purchase Now -->
";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/purchase-now"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "
<!-- Features -->
";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/features"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "
<!-- Testimonials -->
";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/testimonials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "
<!-- Mission -->
";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/mission"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "
<!-- Pricing -->
";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/pricing"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "
<!-- Help -->
";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/help"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\azimuth/themes/purpose/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  90 => 21,  86 => 20,  82 => 18,  78 => 17,  74 => 15,  70 => 14,  66 => 12,  62 => 11,  58 => 9,  54 => 8,  50 => 6,  46 => 5,  42 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->
{% partial 'home/header' %}

<!-- Get started -->
{% partial 'home/get-started' %}

<!-- Purchase Now -->
{% partial 'home/purchase-now' %}

<!-- Features -->
{% partial 'home/features' %}

<!-- Testimonials -->
{% partial 'home/testimonials' %}

<!-- Mission -->
{% partial 'home/mission' %}

<!-- Pricing -->
{% partial 'home/pricing' %}

<!-- Help -->
{% partial 'home/help' %}", "C:\\xampp\\htdocs\\azimuth/themes/purpose/pages/homepage.htm", "");
    }
}
