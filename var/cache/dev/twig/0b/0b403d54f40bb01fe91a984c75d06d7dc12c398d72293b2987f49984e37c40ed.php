<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c0b5c8a23c85e1315461d42adc1d4fcd33478e5733f2ce3b75490f12e93d874 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7355b0bc677049fa9e60cd7a1bc2a104f41bf83a6d99a4f16b06bc43d1fffef8 = $this->env->getExtension("native_profiler");
        $__internal_7355b0bc677049fa9e60cd7a1bc2a104f41bf83a6d99a4f16b06bc43d1fffef8->enter($__internal_7355b0bc677049fa9e60cd7a1bc2a104f41bf83a6d99a4f16b06bc43d1fffef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7355b0bc677049fa9e60cd7a1bc2a104f41bf83a6d99a4f16b06bc43d1fffef8->leave($__internal_7355b0bc677049fa9e60cd7a1bc2a104f41bf83a6d99a4f16b06bc43d1fffef8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b5c704e14a885528d1f9e46079cfb6e6d070db466a04c41e9fe682e5c524724e = $this->env->getExtension("native_profiler");
        $__internal_b5c704e14a885528d1f9e46079cfb6e6d070db466a04c41e9fe682e5c524724e->enter($__internal_b5c704e14a885528d1f9e46079cfb6e6d070db466a04c41e9fe682e5c524724e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b5c704e14a885528d1f9e46079cfb6e6d070db466a04c41e9fe682e5c524724e->leave($__internal_b5c704e14a885528d1f9e46079cfb6e6d070db466a04c41e9fe682e5c524724e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff94c88f44340da786285fdd79749e4038e74a155b8139e052b1709215c58b7e = $this->env->getExtension("native_profiler");
        $__internal_ff94c88f44340da786285fdd79749e4038e74a155b8139e052b1709215c58b7e->enter($__internal_ff94c88f44340da786285fdd79749e4038e74a155b8139e052b1709215c58b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff94c88f44340da786285fdd79749e4038e74a155b8139e052b1709215c58b7e->leave($__internal_ff94c88f44340da786285fdd79749e4038e74a155b8139e052b1709215c58b7e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e280f4f7787e11bcb83bc4bf0acfbbcd93a46fb7863c9ea536366a89fa093f81 = $this->env->getExtension("native_profiler");
        $__internal_e280f4f7787e11bcb83bc4bf0acfbbcd93a46fb7863c9ea536366a89fa093f81->enter($__internal_e280f4f7787e11bcb83bc4bf0acfbbcd93a46fb7863c9ea536366a89fa093f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e280f4f7787e11bcb83bc4bf0acfbbcd93a46fb7863c9ea536366a89fa093f81->leave($__internal_e280f4f7787e11bcb83bc4bf0acfbbcd93a46fb7863c9ea536366a89fa093f81_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
