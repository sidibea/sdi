<?php

/* ::front.html.twig */
class __TwigTemplate_3d5d976e140c65f0e15878dfc4e776a6c83a10048beaf8e110566456c7cd9c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyId' => array($this, 'block_bodyId'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'panel' => array($this, 'block_panel'),
            'topnav' => array($this, 'block_topnav'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a788e18f3fc35ce0c183a926b2f6cd0c995c5cdd40dd910a963378afada1d16e = $this->env->getExtension("native_profiler");
        $__internal_a788e18f3fc35ce0c183a926b2f6cd0c995c5cdd40dd910a963378afada1d16e->enter($__internal_a788e18f3fc35ce0c183a926b2f6cd0c995c5cdd40dd910a963378afada1d16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">

<!-- RabinsXP.com HTML5 Templates -->
<head>
    <meta charset=\"utf-8\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " | Soudou Design International</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- http://www.456bereastreet.com/archive/201209/tell_css_that_javascript_is_available_asap/ -->
    <script>
        document.documentElement.className = document.documentElement.className.replace(/(\\s|^)no-js(\\s|\$)/, '\$1js\$2');
    </script>

    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/style.css"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/rs-plugin/css/settings.css"), "html", null, true);
        echo "\">
    <!--[if IE 7]>
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/css/font-awesome-ie7.min.css"), "html", null, true);
        echo "\">
    <![endif]-->

    <!--[if lt IE 9]>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>

</head>
<body id=\"";
        // line 32
        $this->displayBlock('bodyId', $context, $blocks);
        echo "\" class=\"";
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">
<!-- Preloader -->
<div id=\"preloader\">
    <div id=\"status\">&nbsp;
    </div>
</div>
<div id=\"wrapper\">
    ";
        // line 39
        $this->displayBlock('panel', $context, $blocks);
        // line 42
        echo "


    <div id=\"topbar\">
        ";
        // line 46
        $this->displayBlock('topnav', $context, $blocks);
        // line 49
        echo "
    </div>

    <header id=\"dmheader\">
        ";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 56
        echo "
    </header><!-- /dmheader -->
     ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "
    <div id=\"dmfooter\">
        ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "    </div><!-- dmfooter -->

    <div id=\"lastcontainer\">
        <div class=\"container\">
            <p>Copyright © ";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Soudou Design International .</p>
        </div><!-- /container -->
    </div><!-- /lastcontainer -->

    <div class=\"dmtop\">Scroll to Top</div>
</div><!-- /wrapper -->


<!-- ALL PLUGINS -->
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/jquery.js"), "html", null, true);
        echo "\"></script>
<!-- RS PLUGINS -->
<script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/rs-plugin/js/jquery.themepunch.plugins.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    var revapi;
    jQuery(document).ready(function() {
        revapi = jQuery('.tp-banner').revolution(
                {

                    delay:9000,
                    startwidth:1170,
                    startheight:530,
                    hideThumbs:10,
                    fullWidth:\"on\",
                    forceFullWidth:\"on\",
                    navigationType:\"none\",
                    navigationStyle:\"round\",
                    touchenabled:\"on\",
                    onHoverStop:\"off\",
                    shadow:0,
                    stopLoop:\"off\",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:\"off\",
                });
    });
</script>

<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/grid.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/pulloutpanel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/superfish.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/jquery.fs.naver.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/jquery.flexslider.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("front/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- Preloader -->
<script type=\"text/javascript\">
    \$(window).load(function() {
        \$('#status').delay(800).fadeOut('slow');
        \$('#preloader').delay(800).fadeOut('slow');
        \$('body').delay(800).css({'overflow':'visible'});
    })
</script>
</body>

<!-- RabinsXP.com HTML5 Templates -->
</html>";
        
        $__internal_a788e18f3fc35ce0c183a926b2f6cd0c995c5cdd40dd910a963378afada1d16e->leave($__internal_a788e18f3fc35ce0c183a926b2f6cd0c995c5cdd40dd910a963378afada1d16e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7eae41f84367ef557252f2aa29c5c9828edea87331b4b02a2ebd0bf47e74495 = $this->env->getExtension("native_profiler");
        $__internal_e7eae41f84367ef557252f2aa29c5c9828edea87331b4b02a2ebd0bf47e74495->enter($__internal_e7eae41f84367ef557252f2aa29c5c9828edea87331b4b02a2ebd0bf47e74495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_e7eae41f84367ef557252f2aa29c5c9828edea87331b4b02a2ebd0bf47e74495->leave($__internal_e7eae41f84367ef557252f2aa29c5c9828edea87331b4b02a2ebd0bf47e74495_prof);

    }

    // line 32
    public function block_bodyId($context, array $blocks = array())
    {
        $__internal_a604d871efe50cd69672f8c94eee8abfd586baa3dded2a3bd87dd2fe6f86caf1 = $this->env->getExtension("native_profiler");
        $__internal_a604d871efe50cd69672f8c94eee8abfd586baa3dded2a3bd87dd2fe6f86caf1->enter($__internal_a604d871efe50cd69672f8c94eee8abfd586baa3dded2a3bd87dd2fe6f86caf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyId"));

        echo "custom1 ";
        
        $__internal_a604d871efe50cd69672f8c94eee8abfd586baa3dded2a3bd87dd2fe6f86caf1->leave($__internal_a604d871efe50cd69672f8c94eee8abfd586baa3dded2a3bd87dd2fe6f86caf1_prof);

    }

    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_dcdc29a9eaad80956cd531ae8f3518b5c6347059c61f3e844c4198e08a03763c = $this->env->getExtension("native_profiler");
        $__internal_dcdc29a9eaad80956cd531ae8f3518b5c6347059c61f3e844c4198e08a03763c->enter($__internal_dcdc29a9eaad80956cd531ae8f3518b5c6347059c61f3e844c4198e08a03763c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        echo "home ";
        
        $__internal_dcdc29a9eaad80956cd531ae8f3518b5c6347059c61f3e844c4198e08a03763c->leave($__internal_dcdc29a9eaad80956cd531ae8f3518b5c6347059c61f3e844c4198e08a03763c_prof);

    }

    // line 39
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f6901a855c25392ca8380a7e97a961c48870876c7ad0086f854b3f9055d4d1a = $this->env->getExtension("native_profiler");
        $__internal_7f6901a855c25392ca8380a7e97a961c48870876c7ad0086f854b3f9055d4d1a->enter($__internal_7f6901a855c25392ca8380a7e97a961c48870876c7ad0086f854b3f9055d4d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 40
        echo "        ";
        $this->loadTemplate("includes/panel.html.twig", "::front.html.twig", 40)->display($context);
        // line 41
        echo "    ";
        
        $__internal_7f6901a855c25392ca8380a7e97a961c48870876c7ad0086f854b3f9055d4d1a->leave($__internal_7f6901a855c25392ca8380a7e97a961c48870876c7ad0086f854b3f9055d4d1a_prof);

    }

    // line 46
    public function block_topnav($context, array $blocks = array())
    {
        $__internal_0a11238e340a56e31f62a14b0d057597689a19e5e159c7d97336eff33bcba765 = $this->env->getExtension("native_profiler");
        $__internal_0a11238e340a56e31f62a14b0d057597689a19e5e159c7d97336eff33bcba765->enter($__internal_0a11238e340a56e31f62a14b0d057597689a19e5e159c7d97336eff33bcba765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topnav"));

        // line 47
        echo "            ";
        $this->loadTemplate("includes/top_nav.html.twig", "::front.html.twig", 47)->display($context);
        // line 48
        echo "        ";
        
        $__internal_0a11238e340a56e31f62a14b0d057597689a19e5e159c7d97336eff33bcba765->leave($__internal_0a11238e340a56e31f62a14b0d057597689a19e5e159c7d97336eff33bcba765_prof);

    }

    // line 53
    public function block_header($context, array $blocks = array())
    {
        $__internal_24b963acc3ae838df5e57d4e2437ab7eb69f40fca7819fb3b2ffc0394892d8ed = $this->env->getExtension("native_profiler");
        $__internal_24b963acc3ae838df5e57d4e2437ab7eb69f40fca7819fb3b2ffc0394892d8ed->enter($__internal_24b963acc3ae838df5e57d4e2437ab7eb69f40fca7819fb3b2ffc0394892d8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 54
        echo "            ";
        $this->loadTemplate("includes/header.html.twig", "::front.html.twig", 54)->display($context);
        // line 55
        echo "        ";
        
        $__internal_24b963acc3ae838df5e57d4e2437ab7eb69f40fca7819fb3b2ffc0394892d8ed->leave($__internal_24b963acc3ae838df5e57d4e2437ab7eb69f40fca7819fb3b2ffc0394892d8ed_prof);

    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        $__internal_8f9cba9703af5d0237bde0a6281b7cf1ef80a4787da38c7e098a7923a6618098 = $this->env->getExtension("native_profiler");
        $__internal_8f9cba9703af5d0237bde0a6281b7cf1ef80a4787da38c7e098a7923a6618098->enter($__internal_8f9cba9703af5d0237bde0a6281b7cf1ef80a4787da38c7e098a7923a6618098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_8f9cba9703af5d0237bde0a6281b7cf1ef80a4787da38c7e098a7923a6618098->leave($__internal_8f9cba9703af5d0237bde0a6281b7cf1ef80a4787da38c7e098a7923a6618098_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a7ab7b73187c09cca07b108c45f6e46a706e54153b3e2169a55ecc586cb91860 = $this->env->getExtension("native_profiler");
        $__internal_a7ab7b73187c09cca07b108c45f6e46a706e54153b3e2169a55ecc586cb91860->enter($__internal_a7ab7b73187c09cca07b108c45f6e46a706e54153b3e2169a55ecc586cb91860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 62
        echo "            ";
        $this->loadTemplate("includes/footer.html.twig", "::front.html.twig", 62)->display($context);
        // line 63
        echo "        ";
        
        $__internal_a7ab7b73187c09cca07b108c45f6e46a706e54153b3e2169a55ecc586cb91860->leave($__internal_a7ab7b73187c09cca07b108c45f6e46a706e54153b3e2169a55ecc586cb91860_prof);

    }

    public function getTemplateName()
    {
        return "::front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 63,  335 => 62,  329 => 61,  317 => 58,  310 => 55,  307 => 54,  301 => 53,  294 => 48,  291 => 47,  285 => 46,  278 => 41,  275 => 40,  269 => 39,  246 => 32,  234 => 8,  214 => 114,  210 => 113,  206 => 112,  202 => 111,  198 => 110,  194 => 109,  190 => 108,  186 => 107,  182 => 106,  153 => 80,  149 => 79,  144 => 77,  132 => 68,  126 => 64,  124 => 61,  120 => 59,  118 => 58,  114 => 56,  112 => 53,  106 => 49,  104 => 46,  98 => 42,  96 => 39,  84 => 32,  78 => 29,  73 => 27,  66 => 23,  61 => 21,  56 => 19,  52 => 18,  39 => 8,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html class="no-js" lang="en">*/
/* */
/* <!-- RabinsXP.com HTML5 Templates -->*/
/* <head>*/
/*     <meta charset="utf-8">*/
/* */
/*     <title>{% block title %} {% endblock %} | Soudou Design International</title>*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     <!-- http://www.456bereastreet.com/archive/201209/tell_css_that_javascript_is_available_asap/ -->*/
/*     <script>*/
/*         document.documentElement.className = document.documentElement.className.replace(/(\s|^)no-js(\s|$)/, '$1js$2');*/
/*     </script>*/
/* */
/*     <!-- CSS Files -->*/
/*     <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('front/style.css') }}">*/
/*     <link rel="shortcut icon" href="favicon.ico">*/
/*     <link rel="stylesheet" href="{{ asset('front/rs-plugin/css/settings.css') }}">*/
/*     <!--[if IE 7]>*/
/*     <link rel="stylesheet" href="{{ asset('front/css/font-awesome-ie7.min.css') }}">*/
/*     <![endif]-->*/
/* */
/*     <!--[if lt IE 9]>*/
/*     <script src="{{ asset('front/js/html5shiv.min.js') }}"></script>*/
/*     <![endif]-->*/
/*     <script src="{{ asset('front/js/modernizr.custom.js') }}"></script>*/
/* */
/* </head>*/
/* <body id="{% block bodyId %}custom1 {% endblock %}" class="{% block bodyClass %}home {% endblock %}">*/
/* <!-- Preloader -->*/
/* <div id="preloader">*/
/*     <div id="status">&nbsp;*/
/*     </div>*/
/* </div>*/
/* <div id="wrapper">*/
/*     {% block panel %}*/
/*         {% include('includes/panel.html.twig') %}*/
/*     {% endblock %}*/
/* */
/* */
/* */
/*     <div id="topbar">*/
/*         {% block topnav %}*/
/*             {% include('includes/top_nav.html.twig') %}*/
/*         {% endblock %}*/
/* */
/*     </div>*/
/* */
/*     <header id="dmheader">*/
/*         {% block header %}*/
/*             {% include('includes/header.html.twig') %}*/
/*         {% endblock %}*/
/* */
/*     </header><!-- /dmheader -->*/
/*      {% block content %} {% endblock %}*/
/* */
/*     <div id="dmfooter">*/
/*         {% block footer %}*/
/*             {% include('includes/footer.html.twig') %}*/
/*         {% endblock %}*/
/*     </div><!-- dmfooter -->*/
/* */
/*     <div id="lastcontainer">*/
/*         <div class="container">*/
/*             <p>Copyright © {{ "now" | date('Y') }} Soudou Design International .</p>*/
/*         </div><!-- /container -->*/
/*     </div><!-- /lastcontainer -->*/
/* */
/*     <div class="dmtop">Scroll to Top</div>*/
/* </div><!-- /wrapper -->*/
/* */
/* */
/* <!-- ALL PLUGINS -->*/
/* <script src="{{ asset('front/js/jquery.js') }}"></script>*/
/* <!-- RS PLUGINS -->*/
/* <script type="text/javascript" src="{{ asset('front/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('front/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>*/
/* <script type="text/javascript">*/
/*     var revapi;*/
/*     jQuery(document).ready(function() {*/
/*         revapi = jQuery('.tp-banner').revolution(*/
/*                 {*/
/* */
/*                     delay:9000,*/
/*                     startwidth:1170,*/
/*                     startheight:530,*/
/*                     hideThumbs:10,*/
/*                     fullWidth:"on",*/
/*                     forceFullWidth:"on",*/
/*                     navigationType:"none",*/
/*                     navigationStyle:"round",*/
/*                     touchenabled:"on",*/
/*                     onHoverStop:"off",*/
/*                     shadow:0,*/
/*                     stopLoop:"off",*/
/*                     stopAfterLoops:-1,*/
/*                     stopAtSlide:-1,*/
/*                     shuffle:"off",*/
/*                 });*/
/*     });*/
/* </script>*/
/* */
/* <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>*/
/* <script src="{{ asset('front/js/jquery.prettyPhoto.js') }}"></script>*/
/* <script src="{{ asset('front/js/grid.js') }}"></script>*/
/* <script src="{{ asset('front/js/pulloutpanel.min.js') }}"></script>*/
/* <script src="{{ asset('front/js/superfish.js') }}"></script>*/
/* <script src="{{ asset('front/js/jquery.fs.naver.min.js') }}"></script>*/
/* <script src="{{ asset('front/js/jquery.flexslider.min.js') }}"></script>*/
/* <script src="{{ asset('front/js/jquery.isotope.min.js') }}"></script>*/
/* <script src="{{ asset('front/js/custom.js') }}"></script>*/
/* <!-- Preloader -->*/
/* <script type="text/javascript">*/
/*     $(window).load(function() {*/
/*         $('#status').delay(800).fadeOut('slow');*/
/*         $('#preloader').delay(800).fadeOut('slow');*/
/*         $('body').delay(800).css({'overflow':'visible'});*/
/*     })*/
/* </script>*/
/* </body>*/
/* */
/* <!-- RabinsXP.com HTML5 Templates -->*/
/* </html>*/
