<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_a6bef588d6e2f74542c3f86b742765916acd125428fdb1f8b85bf8f21b9718de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f8ff5511ad5cdd4c8919256e273877280e231cc847f611bce58abcea60c505f = $this->env->getExtension("native_profiler");
        $__internal_0f8ff5511ad5cdd4c8919256e273877280e231cc847f611bce58abcea60c505f->enter($__internal_0f8ff5511ad5cdd4c8919256e273877280e231cc847f611bce58abcea60c505f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f8ff5511ad5cdd4c8919256e273877280e231cc847f611bce58abcea60c505f->leave($__internal_0f8ff5511ad5cdd4c8919256e273877280e231cc847f611bce58abcea60c505f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e59599692f68b987647ea9a7f1fc97c689f0c14d5b0108b8a4173e8a9cd69026 = $this->env->getExtension("native_profiler");
        $__internal_e59599692f68b987647ea9a7f1fc97c689f0c14d5b0108b8a4173e8a9cd69026->enter($__internal_e59599692f68b987647ea9a7f1fc97c689f0c14d5b0108b8a4173e8a9cd69026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_e59599692f68b987647ea9a7f1fc97c689f0c14d5b0108b8a4173e8a9cd69026->leave($__internal_e59599692f68b987647ea9a7f1fc97c689f0c14d5b0108b8a4173e8a9cd69026_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
