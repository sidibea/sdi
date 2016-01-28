<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0548f5cc05c8015333be8f544c44af5d8c7b5378410130a57dc161e84d254fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9166dd986bf51d1b81b906ae195c68460dde4740b73f803cabad4111c40b02f = $this->env->getExtension("native_profiler");
        $__internal_f9166dd986bf51d1b81b906ae195c68460dde4740b73f803cabad4111c40b02f->enter($__internal_f9166dd986bf51d1b81b906ae195c68460dde4740b73f803cabad4111c40b02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9166dd986bf51d1b81b906ae195c68460dde4740b73f803cabad4111c40b02f->leave($__internal_f9166dd986bf51d1b81b906ae195c68460dde4740b73f803cabad4111c40b02f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c19ea6e057a3be770b1388d4a8997650446ce82a707941a6def5784cc5d30f4 = $this->env->getExtension("native_profiler");
        $__internal_1c19ea6e057a3be770b1388d4a8997650446ce82a707941a6def5784cc5d30f4->enter($__internal_1c19ea6e057a3be770b1388d4a8997650446ce82a707941a6def5784cc5d30f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1c19ea6e057a3be770b1388d4a8997650446ce82a707941a6def5784cc5d30f4->leave($__internal_1c19ea6e057a3be770b1388d4a8997650446ce82a707941a6def5784cc5d30f4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9abfb0fb9cdcd447a658ae12ac9c98dd3d1265144af8e01ba521b6d52ce0c2f4 = $this->env->getExtension("native_profiler");
        $__internal_9abfb0fb9cdcd447a658ae12ac9c98dd3d1265144af8e01ba521b6d52ce0c2f4->enter($__internal_9abfb0fb9cdcd447a658ae12ac9c98dd3d1265144af8e01ba521b6d52ce0c2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9abfb0fb9cdcd447a658ae12ac9c98dd3d1265144af8e01ba521b6d52ce0c2f4->leave($__internal_9abfb0fb9cdcd447a658ae12ac9c98dd3d1265144af8e01ba521b6d52ce0c2f4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f10839f825f74483eb0aeb1e678edf0c65d67588d84dcd94c78213e1b4de46c = $this->env->getExtension("native_profiler");
        $__internal_3f10839f825f74483eb0aeb1e678edf0c65d67588d84dcd94c78213e1b4de46c->enter($__internal_3f10839f825f74483eb0aeb1e678edf0c65d67588d84dcd94c78213e1b4de46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3f10839f825f74483eb0aeb1e678edf0c65d67588d84dcd94c78213e1b4de46c->leave($__internal_3f10839f825f74483eb0aeb1e678edf0c65d67588d84dcd94c78213e1b4de46c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
