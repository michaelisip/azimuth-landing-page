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

/* C:\xampp\htdocs\azimuth/themes/purpose/partials/home/pricing.htm */
class __TwigTemplate_18c7ed43a992781fbc1b97748354b35672975bb17c8240d828db5a2236a5b91b extends \Twig\Template
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
        echo "<section class=\"slice slice-lg\" id=\"pricing\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10\">
                <div class=\"mb-5 text-center\">
                    <h3 class=\" mt-4\">Pricing plans</h3>
                    <div class=\"fluid-paragraph mt-3\">
                        <p class=\"lead lh-180\">We'll make sure we build everything you need from now on</p>
                    </div>
                </div>
                <div class=\"pricing-container\">
                    <div class=\"text-center mb-7\">
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <button type=\"button\" class=\"btn btn-secondary active\" data-pricing=\"monthly\">Monthly billing</button>
                            <button type=\"button\" class=\"btn btn-secondary\" data-pricing=\"yearly\">Yearly billing</button>
                        </div>
                    </div>
                    <div class=\"pricing card-group flex-column flex-lg-row mb-3 shadow-none\">
                        <div class=\"card card-pricing text-center border shadow-none hover-shadow\">
                            <div class=\"card-header py-5 border-0 delimiter-bottom\">
                                <span class=\"d-block h5 mb-4\">Single</span>
                                <div class=\"h1 text-primary text-center mb-0\" data-pricing-value=\"196\">\$<span class=\"price\">49</span></div>
                                <span class=\"h6 text-muted\">per month</span>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"list-unstyled mb-4\">
                                    <li>Up to 5 users</li>
                                    <li>Basic support on Github</li>
                                    <li>Monthly updates</li>
                                    <li>Free cancelation</li>
                                </ul>
                                <button type=\"button\" class=\"btn btn-sm btn-neutral mb-3\">Start free trial</button>
                            </div>
                        </div>
                        <div class=\"card card-pricing text-center popular scale-110\">
                            <div class=\"card-header py-5 border-0 delimiter-bottom\">
                                <span class=\"d-block h5 mb-4\">Multiple</span>
                                <div class=\"h1 text-primary text-center mb-0\" data-pricing-value=\"396\">\$<span class=\"price\">99</span></div>
                                <span class=\"h6 text-muted\">per month</span>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"list-unstyled mb-4\">
                                    <li>Up to 5 users</li>
                                    <li>Basic support on Github</li>
                                    <li>Monthly updates</li>
                                    <li>Free cancelation</li>
                                </ul>
                                <button type=\"button\" class=\"btn btn-sm btn-neutral mb-3\">Start free trial</button>
                            </div>
                        </div>
                        <div class=\"card card-pricing text-center border shadow-none hover-shadow\">
                            <div class=\"card-header py-5 border-0 delimiter-bottom\">
                                <span class=\"d-block h5 mb-4\">Extended</span>
                                <div class=\"h1 text-primary text-center mb-0\" data-pricing-value=\"1596\">\$<span class=\"price\">399</span></div>
                                <span class=\"h6 text-muted\">per month</span>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"list-unstyled mb-4\">
                                    <li>Up to 5 users</li>
                                    <li>Basic support on Github</li>
                                    <li>Monthly updates</li>
                                    <li>Free cancelation</li>
                                </ul>
                                <button type=\"button\" class=\"btn btn-sm btn-neutral mb-3\">Start free trial</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/home/pricing.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"slice slice-lg\" id=\"pricing\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10\">
                <div class=\"mb-5 text-center\">
                    <h3 class=\" mt-4\">Pricing plans</h3>
                    <div class=\"fluid-paragraph mt-3\">
                        <p class=\"lead lh-180\">We'll make sure we build everything you need from now on</p>
                    </div>
                </div>
                <div class=\"pricing-container\">
                    <div class=\"text-center mb-7\">
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <button type=\"button\" class=\"btn btn-secondary active\" data-pricing=\"monthly\">Monthly billing</button>
                            <button type=\"button\" class=\"btn btn-secondary\" data-pricing=\"yearly\">Yearly billing</button>
                        </div>
                    </div>
                    <div class=\"pricing card-group flex-column flex-lg-row mb-3 shadow-none\">
                        <div class=\"card card-pricing text-center border shadow-none hover-shadow\">
                            <div class=\"card-header py-5 border-0 delimiter-bottom\">
                                <span class=\"d-block h5 mb-4\">Single</span>
                                <div class=\"h1 text-primary text-center mb-0\" data-pricing-value=\"196\">\$<span class=\"price\">49</span></div>
                                <span class=\"h6 text-muted\">per month</span>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"list-unstyled mb-4\">
                                    <li>Up to 5 users</li>
                                    <li>Basic support on Github</li>
                                    <li>Monthly updates</li>
                                    <li>Free cancelation</li>
                                </ul>
                                <button type=\"button\" class=\"btn btn-sm btn-neutral mb-3\">Start free trial</button>
                            </div>
                        </div>
                        <div class=\"card card-pricing text-center popular scale-110\">
                            <div class=\"card-header py-5 border-0 delimiter-bottom\">
                                <span class=\"d-block h5 mb-4\">Multiple</span>
                                <div class=\"h1 text-primary text-center mb-0\" data-pricing-value=\"396\">\$<span class=\"price\">99</span></div>
                                <span class=\"h6 text-muted\">per month</span>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"list-unstyled mb-4\">
                                    <li>Up to 5 users</li>
                                    <li>Basic support on Github</li>
                                    <li>Monthly updates</li>
                                    <li>Free cancelation</li>
                                </ul>
                                <button type=\"button\" class=\"btn btn-sm btn-neutral mb-3\">Start free trial</button>
                            </div>
                        </div>
                        <div class=\"card card-pricing text-center border shadow-none hover-shadow\">
                            <div class=\"card-header py-5 border-0 delimiter-bottom\">
                                <span class=\"d-block h5 mb-4\">Extended</span>
                                <div class=\"h1 text-primary text-center mb-0\" data-pricing-value=\"1596\">\$<span class=\"price\">399</span></div>
                                <span class=\"h6 text-muted\">per month</span>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"list-unstyled mb-4\">
                                    <li>Up to 5 users</li>
                                    <li>Basic support on Github</li>
                                    <li>Monthly updates</li>
                                    <li>Free cancelation</li>
                                </ul>
                                <button type=\"button\" class=\"btn btn-sm btn-neutral mb-3\">Start free trial</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/home/pricing.htm", "");
    }
}
