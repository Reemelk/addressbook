<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_32b87c01eebfc1209f4c9378b965a24e95056d93f22a9a055f774481e472b79f extends Twig_Template
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
        $__internal_2a429d8da243c5b799d2dbe312cd8b916b9e18639649ec7ba4fdc8386e36eba9 = $this->env->getExtension("native_profiler");
        $__internal_2a429d8da243c5b799d2dbe312cd8b916b9e18639649ec7ba4fdc8386e36eba9->enter($__internal_2a429d8da243c5b799d2dbe312cd8b916b9e18639649ec7ba4fdc8386e36eba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2a429d8da243c5b799d2dbe312cd8b916b9e18639649ec7ba4fdc8386e36eba9->leave($__internal_2a429d8da243c5b799d2dbe312cd8b916b9e18639649ec7ba4fdc8386e36eba9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
