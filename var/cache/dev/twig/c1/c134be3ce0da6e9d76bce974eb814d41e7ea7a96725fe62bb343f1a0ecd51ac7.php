<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_e9c72f44eedf7f7fcdb152d4c7ff5b2707ff61f7bbc0d2a1f0dccc90da59ae3d extends Twig_Template
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
        $__internal_a6fd5425f8320f0eaba690c42f67fb55bf23b23bfbe625661eef2ecd9d8de9bb = $this->env->getExtension("native_profiler");
        $__internal_a6fd5425f8320f0eaba690c42f67fb55bf23b23bfbe625661eef2ecd9d8de9bb->enter($__internal_a6fd5425f8320f0eaba690c42f67fb55bf23b23bfbe625661eef2ecd9d8de9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a6fd5425f8320f0eaba690c42f67fb55bf23b23bfbe625661eef2ecd9d8de9bb->leave($__internal_a6fd5425f8320f0eaba690c42f67fb55bf23b23bfbe625661eef2ecd9d8de9bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
