<?php

/* SDIFrontBundle::layout.html.twig */
class __TwigTemplate_6d6eb9e73da0dbc625ba4d829d5b1a12a9bdd2e75d506fbd361a87f4b558a15b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::front.html.twig", "SDIFrontBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyId' => array($this, 'block_bodyId'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e70372648c9a26a1634e391a0389ca90160cd252bd8c29aa58b1164f3f7c98c7 = $this->env->getExtension("native_profiler");
        $__internal_e70372648c9a26a1634e391a0389ca90160cd252bd8c29aa58b1164f3f7c98c7->enter($__internal_e70372648c9a26a1634e391a0389ca90160cd252bd8c29aa58b1164f3f7c98c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SDIFrontBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e70372648c9a26a1634e391a0389ca90160cd252bd8c29aa58b1164f3f7c98c7->leave($__internal_e70372648c9a26a1634e391a0389ca90160cd252bd8c29aa58b1164f3f7c98c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aac7ae064afa6d504a2e5ed81055d136db59a481dc2a825a0586f8a1a4747c0e = $this->env->getExtension("native_profiler");
        $__internal_aac7ae064afa6d504a2e5ed81055d136db59a481dc2a825a0586f8a1a4747c0e->enter($__internal_aac7ae064afa6d504a2e5ed81055d136db59a481dc2a825a0586f8a1a4747c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aac7ae064afa6d504a2e5ed81055d136db59a481dc2a825a0586f8a1a4747c0e->leave($__internal_aac7ae064afa6d504a2e5ed81055d136db59a481dc2a825a0586f8a1a4747c0e_prof);

    }

    // line 6
    public function block_bodyId($context, array $blocks = array())
    {
        $__internal_42c4676b1c71a410d3c69f987363bec9e9e3e55700b0dc863ef5d81c63ec17d2 = $this->env->getExtension("native_profiler");
        $__internal_42c4676b1c71a410d3c69f987363bec9e9e3e55700b0dc863ef5d81c63ec17d2->enter($__internal_42c4676b1c71a410d3c69f987363bec9e9e3e55700b0dc863ef5d81c63ec17d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyId"));

        echo "  ";
        
        $__internal_42c4676b1c71a410d3c69f987363bec9e9e3e55700b0dc863ef5d81c63ec17d2->leave($__internal_42c4676b1c71a410d3c69f987363bec9e9e3e55700b0dc863ef5d81c63ec17d2_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_0a8fcc6b6fcee3fcf192fff9cd980530aaa497d26981eccf9e7aa951e10e7b26 = $this->env->getExtension("native_profiler");
        $__internal_0a8fcc6b6fcee3fcf192fff9cd980530aaa497d26981eccf9e7aa951e10e7b26->enter($__internal_0a8fcc6b6fcee3fcf192fff9cd980530aaa497d26981eccf9e7aa951e10e7b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
";
        
        $__internal_0a8fcc6b6fcee3fcf192fff9cd980530aaa497d26981eccf9e7aa951e10e7b26->leave($__internal_0a8fcc6b6fcee3fcf192fff9cd980530aaa497d26981eccf9e7aa951e10e7b26_prof);

    }

    // line 11
    public function block_script($context, array $blocks = array())
    {
        $__internal_06efcc2cb0a671bf902cae440a12483fdbe577b3ce7e32ef0f4d92602ccf3c74 = $this->env->getExtension("native_profiler");
        $__internal_06efcc2cb0a671bf902cae440a12483fdbe577b3ce7e32ef0f4d92602ccf3c74->enter($__internal_06efcc2cb0a671bf902cae440a12483fdbe577b3ce7e32ef0f4d92602ccf3c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        echo " ";
        
        $__internal_06efcc2cb0a671bf902cae440a12483fdbe577b3ce7e32ef0f4d92602ccf3c74->leave($__internal_06efcc2cb0a671bf902cae440a12483fdbe577b3ce7e32ef0f4d92602ccf3c74_prof);

    }

    public function getTemplateName()
    {
        return "SDIFrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  71 => 8,  65 => 7,  53 => 6,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::front.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block bodyId %}  {% endblock %}*/
/* {% block content %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block script %} {% endblock %}*/
