<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_38e46277e17e466216180b397679be57314abc1a771c29ea2ba7faa80fbe35e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_6fbfbc9897b5a9af41113a97947b546332849dd0b847fff3f7752af760a3353f = $this->env->getExtension("native_profiler");
        $__internal_6fbfbc9897b5a9af41113a97947b546332849dd0b847fff3f7752af760a3353f->enter($__internal_6fbfbc9897b5a9af41113a97947b546332849dd0b847fff3f7752af760a3353f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fbfbc9897b5a9af41113a97947b546332849dd0b847fff3f7752af760a3353f->leave($__internal_6fbfbc9897b5a9af41113a97947b546332849dd0b847fff3f7752af760a3353f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4bc2a662876f28930c9b226fecc8be5c6cb382aa96583b029d67c10e4ac1269e = $this->env->getExtension("native_profiler");
        $__internal_4bc2a662876f28930c9b226fecc8be5c6cb382aa96583b029d67c10e4ac1269e->enter($__internal_4bc2a662876f28930c9b226fecc8be5c6cb382aa96583b029d67c10e4ac1269e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_4bc2a662876f28930c9b226fecc8be5c6cb382aa96583b029d67c10e4ac1269e->leave($__internal_4bc2a662876f28930c9b226fecc8be5c6cb382aa96583b029d67c10e4ac1269e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
