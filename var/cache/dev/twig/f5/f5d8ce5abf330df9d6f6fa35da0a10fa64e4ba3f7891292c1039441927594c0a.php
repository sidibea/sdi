<?php

/* includes/header.html.twig */
class __TwigTemplate_b13485129464ca0eeaf3bb27a2505d317d07db073b23f07f1bb14390c47304d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2aa1e0f1b879086de4ecd4b9d243091eba16f817afcbe14198d08656d2d58f6 = $this->env->getExtension("native_profiler");
        $__internal_a2aa1e0f1b879086de4ecd4b9d243091eba16f817afcbe14198d08656d2d58f6->enter($__internal_a2aa1e0f1b879086de4ecd4b9d243091eba16f817afcbe14198d08656d2d58f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div id=\"dmtop\">
        <a class=\"cssLogo\" href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("sdi_front_homepage");
        echo "\">SDI</a>
        <nav id=\"cp-nav\">
            <ul class=\"flexnav\" data-breakpoint=\"800\">
                <li class=\"current\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("sdi_front_homepage");
        echo "\">Acceuil</a></li>
                <li><a href=\"#\">A Propos</a>
                    <ul>
                        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("sdi_front_about");
        echo "\">A propos de SGI</a></li>
                        <li><a href=\"services.html\">Certifications</a></li>
                        <li><a href=\"team-members.html\">Affiliations/Partenaires</a></li>

                    </ul>
                </li>
                <li><a href=\"#\">Education</a>
                    <ul>
                        <li><a href=\"portfolio-filter.html\">Nos Cours</a></li>
                        <li><a href=\"portfolio-without-filter.html\">Formulaire d'inscription</a></li>
                        <li><a href=\"portfolio-single-1.html\">Inscription en ligne</a></li>
                    </ul>
                </li>
                <li>
                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("sdi_front_gallery");
        echo "\">Gallerie</a></li>
                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("sdi_front_testimonials");
        echo "\">Testimonials</a> </li>

                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("sdi_front_contact");
        echo "\">Contact</a></li>
            </ul>
        </nav><!-- end #cp-nav -->
    </div><!-- /dmtop -->
</div><!-- /container -->";
        
        $__internal_a2aa1e0f1b879086de4ecd4b9d243091eba16f817afcbe14198d08656d2d58f6->leave($__internal_a2aa1e0f1b879086de4ecd4b9d243091eba16f817afcbe14198d08656d2d58f6_prof);

    }

    public function getTemplateName()
    {
        return "includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 26,  59 => 24,  55 => 23,  38 => 9,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* <div class="container">*/
/*     <div id="dmtop">*/
/*         <a class="cssLogo" href="{{ path('sdi_front_homepage') }}">SDI</a>*/
/*         <nav id="cp-nav">*/
/*             <ul class="flexnav" data-breakpoint="800">*/
/*                 <li class="current"><a href="{{ path('sdi_front_homepage') }}">Acceuil</a></li>*/
/*                 <li><a href="#">A Propos</a>*/
/*                     <ul>*/
/*                         <li><a href="{{ path('sdi_front_about') }}">A propos de SGI</a></li>*/
/*                         <li><a href="services.html">Certifications</a></li>*/
/*                         <li><a href="team-members.html">Affiliations/Partenaires</a></li>*/
/* */
/*                     </ul>*/
/*                 </li>*/
/*                 <li><a href="#">Education</a>*/
/*                     <ul>*/
/*                         <li><a href="portfolio-filter.html">Nos Cours</a></li>*/
/*                         <li><a href="portfolio-without-filter.html">Formulaire d'inscription</a></li>*/
/*                         <li><a href="portfolio-single-1.html">Inscription en ligne</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li>*/
/*                 <li><a href="{{ path('sdi_front_gallery') }}">Gallerie</a></li>*/
/*                 <li><a href="{{ path('sdi_front_testimonials') }}">Testimonials</a> </li>*/
/* */
/*                 <li><a href="{{ path('sdi_front_contact') }}">Contact</a></li>*/
/*             </ul>*/
/*         </nav><!-- end #cp-nav -->*/
/*     </div><!-- /dmtop -->*/
/* </div><!-- /container -->*/
