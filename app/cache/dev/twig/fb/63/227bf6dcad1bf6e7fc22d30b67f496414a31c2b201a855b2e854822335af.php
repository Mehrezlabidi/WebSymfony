<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_fb63227bf6dcad1bf6e7fc22d30b67f496414a31c2b201a855b2e854822335af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 30,  62 => 28,  59 => 27,  36 => 18,  33 => 17,  52 => 23,  47 => 22,  41 => 19,  37 => 21,  35 => 20,  23 => 12,  20 => 11,  34 => 16,  31 => 16,  29 => 15,  26 => 14,  22 => 12,  19 => 11,);
    }
}
