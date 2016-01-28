<?php

/* SDIFrontBundle::index.html.twig */
class __TwigTemplate_2334254259897031962d4b633ef0ddcf884312802f6227e455a9a3064ec9766d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SDIFrontBundle::layout.html.twig", "SDIFrontBundle::index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SDIFrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a7040aafe84425b068704f070862706cdbf553c50c4f4f820c422b4aa2912a8 = $this->env->getExtension("native_profiler");
        $__internal_8a7040aafe84425b068704f070862706cdbf553c50c4f4f820c422b4aa2912a8->enter($__internal_8a7040aafe84425b068704f070862706cdbf553c50c4f4f820c422b4aa2912a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SDIFrontBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a7040aafe84425b068704f070862706cdbf553c50c4f4f820c422b4aa2912a8->leave($__internal_8a7040aafe84425b068704f070862706cdbf553c50c4f4f820c422b4aa2912a8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5008ec44f4edc80fbb2a6c8fc497f2c48fc885c8358c8fdb290b11e0d26a8f76 = $this->env->getExtension("native_profiler");
        $__internal_5008ec44f4edc80fbb2a6c8fc497f2c48fc885c8358c8fdb290b11e0d26a8f76->enter($__internal_5008ec44f4edc80fbb2a6c8fc497f2c48fc885c8358c8fdb290b11e0d26a8f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Bienvenue sur notre site ! ";
        
        $__internal_5008ec44f4edc80fbb2a6c8fc497f2c48fc885c8358c8fdb290b11e0d26a8f76->leave($__internal_5008ec44f4edc80fbb2a6c8fc497f2c48fc885c8358c8fdb290b11e0d26a8f76_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ee24f7f245f38bad7967fc684b3536fb08186227e4f7e118112f4be8a272241 = $this->env->getExtension("native_profiler");
        $__internal_2ee24f7f245f38bad7967fc684b3536fb08186227e4f7e118112f4be8a272241->enter($__internal_2ee24f7f245f38bad7967fc684b3536fb08186227e4f7e118112f4be8a272241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
        ";
        // line 6
        $this->loadTemplate("SDIFrontBundle:includes:slider.html.twig", "SDIFrontBundle::index.html.twig", 6)->display($context);
        // line 7
        echo "
    <section class=\"flexlinebottom\">
        <div class=\"container\">
            <div class=\"row-fluid custommessage\">
                <div class=\"span9\">
                    <h2>Bienvenue sur notre site !</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by... </p>
                </div>

            </div>
        </div><!-- /container -->
    </section><!-- /flexlinebottom -->

    <section class=\"dmstepwrap\">
        <div class=\"container\">
            <div class=\"services3 row-fluid clearfix\">

                <div class=\"step span3 intro\">
                    <h3>What can <strong>we offer?</strong></h3>
                    <p>Designing jewellery is an intricate field of study that borrows heavily from the rich historical heritage of India and other countries. The modern day artisans are taught about the different processes that start from a creative inspiration and culminate into an intricate piece of jewellery that is adored and lovingly worn....</p>
                </div><!-- end step -->

                <div class=\"step span3 step1\">
                    <div class=\"icon\">
                        <i class=\"icon-laptop\"></i>
                    </div>
                    <h3>Certification</h3>
                    <p>Diamonds and gemstones of similar appearance can have important differences in value. An IGI Certificate clearly discloses the details of any item it accompanies, providing confidence for both buyer and seller....</p>
                    <hr>
                    <a href=\"#\" target=\"_blank\">Learn more +</a>
                </div>

                <div class=\"step span3 step2\">
                    <div class=\"icon\">
                        <i class=\"icon-mobile-phone\"></i>
                    </div>
                    <h3>School of Gemology</h3>
                    <p>Whether you want to become a more confident buyer, a diamond grader, jewelry designer, sales professional or Graduate Gemologist, IGI's worldwide schools offer an unrivaled range of coursework.</p>
                    <hr>
                    <a href=\"#\" target=\"_blank\">Learn more +</a>
                </div>

                <div class=\"step span3 step3\">
                    <div class=\"icon\">
                        <i class=\"icon-shopping-cart\"></i>
                    </div>
                    <h3>Upcoming Shows</h3>
                    <p>Jan 22 - 25:
                        Helen Brett New Orleans<br>
                        Jan 22 - 27:
                        VicenzaOro (Hall 3 #128)<br>
                        Jan 31 - Feb 2:
                        Antwerp Diamond Trade Fair<br>
                        Feb 2 - 7:
                        AGTA Tucson
                    </p>
                    <hr>
                    <a href=\"#\" target=\"_blank\">Learn more +</a>
                </div>

            </div>
        </div><!-- /container -->
    </section><!-- /flexlinebottom -->

    <div class=\"portfoliowrapper clearfix\">
        <div class=\"text-center\">
            <h2>Nos derniers travaux</h2>
        </div>
        <section id=\"portfolio\">
            <div class=\"dm-portfolio\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"span12\">
                            <nav class=\"portfolio-filter\">
                                <ul>
                                    <li><a href=\"#\" class=\"btn btn-general\" data-filter=\"*\">All Works (32)</a></li>
                                    <li><a href=\"#\" class=\"btn btn-general\" data-filter=\".web-design\">Jewellery Design</a></li>
                                    <li><a href=\"#\" class=\"btn btn-general\" data-filter=\".development\">Classes</a></li>
                                    <li><a href=\"#\" class=\"btn btn-general\" data-filter=\".photoshop\">Chairs</a></li>
                                    <li><a href=\"#\" class=\"btn btn-general\" data-filter=\".video\">Materials</a></li>
                                </ul>
                            </nav>
                        </div> <!--/span12 -->
                    </div> <!--/row -->
                </div> <!--/container -->
            </div> <!--/dm portfolio -->

            <div class=\"portfolio-container text-center\">
                <div class=\"portfolio\">

                    <div class=\"portfolio-item web-design development\">
                        <div class=\"image-container\">
                            <a href=\"portfolio-single-1.html\">
                                <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/demos/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <span class=\"zoom\"></span>
                            </a>
                        </div>
                        <h4>An Examle Slideshow Portfolio Item</h4>
                        <p class=\"portfolio-categories\"><i class=\"icon-folder-open-alt\"></i> web design - development</p>
                    </div>

                    <div class=\"portfolio-item photoshop\">
                        <div class=\"image-container\">
                            <a href=\"portfolio-single-1.html\">
                                <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/demos/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <span class=\"zoom\"></span>
                            </a>
                        </div>
                        <h4>Illustration of chalkboard with chalk.</h4>
                        <p class=\"portfolio-categories\">photoshop</p>
                    </div>

                    <div class=\"portfolio-item development video\">
                        <div class=\"image-container\">
                            <a href=\"portfolio-single-1.html\">
                                <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/demos/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <span class=\"zoom\"></span>
                            </a>
                        </div>
                        <h4>Illustrations made for Best and M and M’s newest</h4>
                        <p class=\"portfolio-categories\"><i class=\"icon-folder-open-alt\"></i> development - video</p>
                    </div>

                    <div class=\"portfolio-item web-design\">
                        <div class=\"image-container\">
                            <a href=\"portfolio-single-1.html\">
                                <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/demos/4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <span class=\"zoom\"></span>
                            </a>
                        </div>
                        <h4>MediaMonks Mascot (Youtube Video)</h4>
                        <p class=\"portfolio-categories\"><i class=\"icon-folder-open-alt\"></i> web design</p>
                    </div>

                    <div class=\"portfolio-item video\">
                        <div class=\"image-container\">
                            <a href=\"portfolio-single-1.html\">
                                <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/demos/5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <span class=\"zoom\"></span>
                            </a>
                        </div>
                        <h4>Illustrations for Kinder Surprise Project.</h4>
                        <p class=\"portfolio-categories\"><i class=\"icon-folder-open-alt\"></i> video</p>
                    </div>

                    <div class=\"portfolio-item video photoshop\">
                        <div class=\"image-container\">
                            <a href=\"portfolio-single-1.html\">
                                <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/demos/6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <span class=\"zoom\"></span>
                            </a>
                        </div>
                        <h4>Black Design Hand Made Work</h4>
                        <p class=\"portfolio-categories\"><i class=\"icon-folder-open-alt\"></i> video - photoshop</p>
                    </div>

                    <div class=\"portfolio-item web-design\">
                        <div class=\"image-container\">
                            <a href=\"portfolio-single-1.html\">
                                <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/demos/13.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <span class=\"zoom\"></span>
                            </a>
                        </div>
                        <h4>KLM – Be My Guest</h4>
                        <p class=\"portfolio-categories\"><i class=\"icon-folder-open-alt\"></i> web design</p>
                    </div>

                    <div class=\"portfolio-item development\">
                        <div class=\"image-container\">
                            <a href=\"portfolio-single-1.html\">
                                <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/demos/12.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <span class=\"zoom\"></span>
                            </a>
                        </div>
                        <h4>Illustration made for WIRED magazine</h4>
                        <p class=\"portfolio-categories\"><i class=\"icon-folder-open-alt\"></i> development</p>
                    </div>

                    <div class=\"portfolio-item web-design video\">
                        <div class=\"image-container\">
                            <a href=\"portfolio-single-1.html\">
                                <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/demos/14.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <span class=\"zoom\"></span>
                            </a>
                        </div>
                        <h4>Illustration for Route Mobiel</h4>
                        <p class=\"portfolio-categories\"><i class=\"icon-folder-open-alt\"></i> web design - video</p>
                    </div>

                    <div class=\"portfolio-item photoshop\">
                        <div class=\"image-container\">
                            <a href=\"portfolio-single-1.html\">
                                <img src=\"demos/10_demo_big.jpg\" alt=\"\">
                                <span class=\"zoom\"></span>
                            </a>
                        </div>
                        <h4>An Example Audio Portfolio Item</h4>
                        <p class=\"portfolio-categories\"><i class=\"icon-folder-open-alt\"></i> photoshop</p>
                    </div>
                </div> <!-- End Portfolio -->

            </div> <!-- End Portfolio Container -->
        </section> <!-- End Portfolio Section -->
    </div><!-- /portfoliowrapper -->
";
        
        $__internal_2ee24f7f245f38bad7967fc684b3536fb08186227e4f7e118112f4be8a272241->leave($__internal_2ee24f7f245f38bad7967fc684b3536fb08186227e4f7e118112f4be8a272241_prof);

    }

    public function getTemplateName()
    {
        return "SDIFrontBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 188,  251 => 177,  237 => 166,  223 => 155,  209 => 144,  195 => 133,  181 => 122,  167 => 111,  153 => 100,  58 => 7,  56 => 6,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends "SDIFrontBundle::layout.html.twig" %}*/
/* {% block title %} Bienvenue sur notre site ! {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*         {% include('SDIFrontBundle:includes:slider.html.twig') %}*/
/* */
/*     <section class="flexlinebottom">*/
/*         <div class="container">*/
/*             <div class="row-fluid custommessage">*/
/*                 <div class="span9">*/
/*                     <h2>Bienvenue sur notre site !</h2>*/
/*                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by... </p>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div><!-- /container -->*/
/*     </section><!-- /flexlinebottom -->*/
/* */
/*     <section class="dmstepwrap">*/
/*         <div class="container">*/
/*             <div class="services3 row-fluid clearfix">*/
/* */
/*                 <div class="step span3 intro">*/
/*                     <h3>What can <strong>we offer?</strong></h3>*/
/*                     <p>Designing jewellery is an intricate field of study that borrows heavily from the rich historical heritage of India and other countries. The modern day artisans are taught about the different processes that start from a creative inspiration and culminate into an intricate piece of jewellery that is adored and lovingly worn....</p>*/
/*                 </div><!-- end step -->*/
/* */
/*                 <div class="step span3 step1">*/
/*                     <div class="icon">*/
/*                         <i class="icon-laptop"></i>*/
/*                     </div>*/
/*                     <h3>Certification</h3>*/
/*                     <p>Diamonds and gemstones of similar appearance can have important differences in value. An IGI Certificate clearly discloses the details of any item it accompanies, providing confidence for both buyer and seller....</p>*/
/*                     <hr>*/
/*                     <a href="#" target="_blank">Learn more +</a>*/
/*                 </div>*/
/* */
/*                 <div class="step span3 step2">*/
/*                     <div class="icon">*/
/*                         <i class="icon-mobile-phone"></i>*/
/*                     </div>*/
/*                     <h3>School of Gemology</h3>*/
/*                     <p>Whether you want to become a more confident buyer, a diamond grader, jewelry designer, sales professional or Graduate Gemologist, IGI's worldwide schools offer an unrivaled range of coursework.</p>*/
/*                     <hr>*/
/*                     <a href="#" target="_blank">Learn more +</a>*/
/*                 </div>*/
/* */
/*                 <div class="step span3 step3">*/
/*                     <div class="icon">*/
/*                         <i class="icon-shopping-cart"></i>*/
/*                     </div>*/
/*                     <h3>Upcoming Shows</h3>*/
/*                     <p>Jan 22 - 25:*/
/*                         Helen Brett New Orleans<br>*/
/*                         Jan 22 - 27:*/
/*                         VicenzaOro (Hall 3 #128)<br>*/
/*                         Jan 31 - Feb 2:*/
/*                         Antwerp Diamond Trade Fair<br>*/
/*                         Feb 2 - 7:*/
/*                         AGTA Tucson*/
/*                     </p>*/
/*                     <hr>*/
/*                     <a href="#" target="_blank">Learn more +</a>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div><!-- /container -->*/
/*     </section><!-- /flexlinebottom -->*/
/* */
/*     <div class="portfoliowrapper clearfix">*/
/*         <div class="text-center">*/
/*             <h2>Nos derniers travaux</h2>*/
/*         </div>*/
/*         <section id="portfolio">*/
/*             <div class="dm-portfolio">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="span12">*/
/*                             <nav class="portfolio-filter">*/
/*                                 <ul>*/
/*                                     <li><a href="#" class="btn btn-general" data-filter="*">All Works (32)</a></li>*/
/*                                     <li><a href="#" class="btn btn-general" data-filter=".web-design">Jewellery Design</a></li>*/
/*                                     <li><a href="#" class="btn btn-general" data-filter=".development">Classes</a></li>*/
/*                                     <li><a href="#" class="btn btn-general" data-filter=".photoshop">Chairs</a></li>*/
/*                                     <li><a href="#" class="btn btn-general" data-filter=".video">Materials</a></li>*/
/*                                 </ul>*/
/*                             </nav>*/
/*                         </div> <!--/span12 -->*/
/*                     </div> <!--/row -->*/
/*                 </div> <!--/container -->*/
/*             </div> <!--/dm portfolio -->*/
/* */
/*             <div class="portfolio-container text-center">*/
/*                 <div class="portfolio">*/
/* */
/*                     <div class="portfolio-item web-design development">*/
/*                         <div class="image-container">*/
/*                             <a href="portfolio-single-1.html">*/
/*                                 <img src="{{ asset('front/demos/1.jpg') }}" alt="">*/
/*                                 <span class="zoom"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <h4>An Examle Slideshow Portfolio Item</h4>*/
/*                         <p class="portfolio-categories"><i class="icon-folder-open-alt"></i> web design - development</p>*/
/*                     </div>*/
/* */
/*                     <div class="portfolio-item photoshop">*/
/*                         <div class="image-container">*/
/*                             <a href="portfolio-single-1.html">*/
/*                                 <img src="{{ asset('front/demos/2.jpg') }}" alt="">*/
/*                                 <span class="zoom"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <h4>Illustration of chalkboard with chalk.</h4>*/
/*                         <p class="portfolio-categories">photoshop</p>*/
/*                     </div>*/
/* */
/*                     <div class="portfolio-item development video">*/
/*                         <div class="image-container">*/
/*                             <a href="portfolio-single-1.html">*/
/*                                 <img src="{{ asset('front/demos/3.jpg') }}" alt="">*/
/*                                 <span class="zoom"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <h4>Illustrations made for Best and M and M’s newest</h4>*/
/*                         <p class="portfolio-categories"><i class="icon-folder-open-alt"></i> development - video</p>*/
/*                     </div>*/
/* */
/*                     <div class="portfolio-item web-design">*/
/*                         <div class="image-container">*/
/*                             <a href="portfolio-single-1.html">*/
/*                                 <img src="{{ asset('front/demos/4.jpg') }}" alt="">*/
/*                                 <span class="zoom"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <h4>MediaMonks Mascot (Youtube Video)</h4>*/
/*                         <p class="portfolio-categories"><i class="icon-folder-open-alt"></i> web design</p>*/
/*                     </div>*/
/* */
/*                     <div class="portfolio-item video">*/
/*                         <div class="image-container">*/
/*                             <a href="portfolio-single-1.html">*/
/*                                 <img src="{{ asset('front/demos/5.jpg') }}" alt="">*/
/*                                 <span class="zoom"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <h4>Illustrations for Kinder Surprise Project.</h4>*/
/*                         <p class="portfolio-categories"><i class="icon-folder-open-alt"></i> video</p>*/
/*                     </div>*/
/* */
/*                     <div class="portfolio-item video photoshop">*/
/*                         <div class="image-container">*/
/*                             <a href="portfolio-single-1.html">*/
/*                                 <img src="{{ asset('front/demos/6.jpg') }}" alt="">*/
/*                                 <span class="zoom"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <h4>Black Design Hand Made Work</h4>*/
/*                         <p class="portfolio-categories"><i class="icon-folder-open-alt"></i> video - photoshop</p>*/
/*                     </div>*/
/* */
/*                     <div class="portfolio-item web-design">*/
/*                         <div class="image-container">*/
/*                             <a href="portfolio-single-1.html">*/
/*                                 <img src="{{ asset('front/demos/13.jpg') }}" alt="">*/
/*                                 <span class="zoom"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <h4>KLM – Be My Guest</h4>*/
/*                         <p class="portfolio-categories"><i class="icon-folder-open-alt"></i> web design</p>*/
/*                     </div>*/
/* */
/*                     <div class="portfolio-item development">*/
/*                         <div class="image-container">*/
/*                             <a href="portfolio-single-1.html">*/
/*                                 <img src="{{ asset('front/demos/12.jpg') }}" alt="">*/
/*                                 <span class="zoom"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <h4>Illustration made for WIRED magazine</h4>*/
/*                         <p class="portfolio-categories"><i class="icon-folder-open-alt"></i> development</p>*/
/*                     </div>*/
/* */
/*                     <div class="portfolio-item web-design video">*/
/*                         <div class="image-container">*/
/*                             <a href="portfolio-single-1.html">*/
/*                                 <img src="{{ asset('front/demos/14.jpg') }}" alt="">*/
/*                                 <span class="zoom"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <h4>Illustration for Route Mobiel</h4>*/
/*                         <p class="portfolio-categories"><i class="icon-folder-open-alt"></i> web design - video</p>*/
/*                     </div>*/
/* */
/*                     <div class="portfolio-item photoshop">*/
/*                         <div class="image-container">*/
/*                             <a href="portfolio-single-1.html">*/
/*                                 <img src="demos/10_demo_big.jpg" alt="">*/
/*                                 <span class="zoom"></span>*/
/*                             </a>*/
/*                         </div>*/
/*                         <h4>An Example Audio Portfolio Item</h4>*/
/*                         <p class="portfolio-categories"><i class="icon-folder-open-alt"></i> photoshop</p>*/
/*                     </div>*/
/*                 </div> <!-- End Portfolio -->*/
/* */
/*             </div> <!-- End Portfolio Container -->*/
/*         </section> <!-- End Portfolio Section -->*/
/*     </div><!-- /portfoliowrapper -->*/
/* {% endblock %}*/
