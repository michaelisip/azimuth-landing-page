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

/* C:\xampp\htdocs\azimuth/themes/purpose/partials/home/testimonials.htm */
class __TwigTemplate_878e77d19a11684551226466776c2a54adcc092b82fdd013959eb9a4cb4e59d2 extends \Twig\Template
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
        echo "<section class=\"slice slice-lg\" id=\"testimonials\">
    <div class=\"container\">
        <div class=\"mb-5 text-center\">
            <h3 class=\" mt-4\">What our customers say</h3>
            <div class=\"fluid-paragraph mt-3\">
                <p class=\"lead lh-180\">Start building fast, beautiful and modern looking websites in no time using our theme.</p>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-11\">
            <div class=\"swiper-js-container overflow-hidden\">
                <div class=\"swiper-container\" data-swiper-items=\"1\" data-swiper-space-between=\"0\" data-swiper-sm-items=\"2\" data-swiper-xl-items=\"3\">
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide p-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <img alt=\"Image placeholder\" src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/theme/light/team-1-800x800.jpg");
        echo "\" class=\"avatar  rounded-circle\">
                                        </div>
                                        <div class=\"pl-3\">
                                            <h5 class=\"h6 mb-0\">Heather Wright</h5>
                                            <small class=\"d-block text-muted\">Google</small>
                                        </div>
                                    </div>
                                    <p class=\"mt-4 lh-180\">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                    <span class=\"static-rating static-rating-sm\">
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide p-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <img alt=\"Image placeholder\" src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/theme/light/team-2-800x800.jpg");
        echo "\" class=\"avatar  rounded-circle\">
                                        </div>
                                        <div class=\"pl-3\">
                                            <h5 class=\"h6 mb-0\">Monroe Parker</h5>
                                            <small class=\"d-block text-muted\">Apple</small>
                                        </div>
                                    </div>
                                    <p class=\"mt-4 lh-180\">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                    <span class=\"static-rating static-rating-sm\">
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide p-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div>
                                        <img alt=\"Image placeholder\" src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/theme/light/team-3-800x800.jpg");
        echo "\" class=\"avatar  rounded-circle\">
                                    </div>
                                    <div class=\"pl-3\">
                                        <h5 class=\"h6 mb-0\">John Sullivan</h5>
                                        <small class=\"d-block text-muted\">Amazon</small>
                                    </div>
                                </div>
                                <p class=\"mt-4 lh-180\">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                    <span class=\"static-rating static-rating-sm\">
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide p-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <img alt=\"Image placeholder\" src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/theme/light/team-4-800x800.jpg");
        echo "\" class=\"avatar  rounded-circle\">
                                        </div>
                                        <div class=\"pl-3\">
                                            <h5 class=\"h6 mb-0\">James Lewis</h5>
                                            <small class=\"d-block text-muted\">Google</small>
                                        </div>
                                    </div>
                                    <p class=\"mt-4 lh-180\">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                    <span class=\"static-rating static-rating-sm\">
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide p-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <img alt=\"Image placeholder\" src=\"";
        // line 111
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/theme/light/team-5-800x800.jpg");
        echo "\" class=\"avatar  rounded-circle\">
                                        </div>
                                        <div class=\"pl-3\">
                                            <h5 class=\"h6 mb-0\">Julia Howe</h5>
                                            <small class=\"d-block text-muted\">Google</small>
                                        </div>
                                    </div>
                                    <p class=\"mt-4 lh-180\">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                    <span class=\"static-rating static-rating-sm\">
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class=\"swiper-pagination w-100 mt-4 d-flex align-items-center justify-content-center\"></div>
            </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/home/testimonials.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 111,  133 => 88,  107 => 65,  81 => 42,  55 => 19,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"slice slice-lg\" id=\"testimonials\">
    <div class=\"container\">
        <div class=\"mb-5 text-center\">
            <h3 class=\" mt-4\">What our customers say</h3>
            <div class=\"fluid-paragraph mt-3\">
                <p class=\"lead lh-180\">Start building fast, beautiful and modern looking websites in no time using our theme.</p>
            </div>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-11\">
            <div class=\"swiper-js-container overflow-hidden\">
                <div class=\"swiper-container\" data-swiper-items=\"1\" data-swiper-space-between=\"0\" data-swiper-sm-items=\"2\" data-swiper-xl-items=\"3\">
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide p-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <img alt=\"Image placeholder\" src=\"{{ 'assets/img/theme/light/team-1-800x800.jpg' | theme }}\" class=\"avatar  rounded-circle\">
                                        </div>
                                        <div class=\"pl-3\">
                                            <h5 class=\"h6 mb-0\">Heather Wright</h5>
                                            <small class=\"d-block text-muted\">Google</small>
                                        </div>
                                    </div>
                                    <p class=\"mt-4 lh-180\">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                    <span class=\"static-rating static-rating-sm\">
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide p-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <img alt=\"Image placeholder\" src=\"{{ 'assets/img/theme/light/team-2-800x800.jpg' | theme }}\" class=\"avatar  rounded-circle\">
                                        </div>
                                        <div class=\"pl-3\">
                                            <h5 class=\"h6 mb-0\">Monroe Parker</h5>
                                            <small class=\"d-block text-muted\">Apple</small>
                                        </div>
                                    </div>
                                    <p class=\"mt-4 lh-180\">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                    <span class=\"static-rating static-rating-sm\">
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide p-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                <div class=\"d-flex align-items-center\">
                                    <div>
                                        <img alt=\"Image placeholder\" src=\"{{ 'assets/img/theme/light/team-3-800x800.jpg' | theme }}\" class=\"avatar  rounded-circle\">
                                    </div>
                                    <div class=\"pl-3\">
                                        <h5 class=\"h6 mb-0\">John Sullivan</h5>
                                        <small class=\"d-block text-muted\">Amazon</small>
                                    </div>
                                </div>
                                <p class=\"mt-4 lh-180\">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                    <span class=\"static-rating static-rating-sm\">
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide p-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <img alt=\"Image placeholder\" src=\"{{ 'assets/img/theme/light/team-4-800x800.jpg' | theme }}\" class=\"avatar  rounded-circle\">
                                        </div>
                                        <div class=\"pl-3\">
                                            <h5 class=\"h6 mb-0\">James Lewis</h5>
                                            <small class=\"d-block text-muted\">Google</small>
                                        </div>
                                    </div>
                                    <p class=\"mt-4 lh-180\">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                    <span class=\"static-rating static-rating-sm\">
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide p-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div>
                                            <img alt=\"Image placeholder\" src=\"{{ 'assets/img/theme/light/team-5-800x800.jpg' | theme }}\" class=\"avatar  rounded-circle\">
                                        </div>
                                        <div class=\"pl-3\">
                                            <h5 class=\"h6 mb-0\">Julia Howe</h5>
                                            <small class=\"d-block text-muted\">Google</small>
                                        </div>
                                    </div>
                                    <p class=\"mt-4 lh-180\">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                    <span class=\"static-rating static-rating-sm\">
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                        <i class=\"star fas fa-star voted\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class=\"swiper-pagination w-100 mt-4 d-flex align-items-center justify-content-center\"></div>
            </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\azimuth/themes/purpose/partials/home/testimonials.htm", "");
    }
}
