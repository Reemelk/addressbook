<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b8de229f899d45d8a9d4566d9363835bbe89f821573c814e6ab8cff0d0dcbb4e extends Twig_Template
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
        $__internal_2ffb7916e5c8261c2c76ed13e0245948251f1b109e14d83f0534ff4262efbd20 = $this->env->getExtension("native_profiler");
        $__internal_2ffb7916e5c8261c2c76ed13e0245948251f1b109e14d83f0534ff4262efbd20->enter($__internal_2ffb7916e5c8261c2c76ed13e0245948251f1b109e14d83f0534ff4262efbd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2ffb7916e5c8261c2c76ed13e0245948251f1b109e14d83f0534ff4262efbd20->leave($__internal_2ffb7916e5c8261c2c76ed13e0245948251f1b109e14d83f0534ff4262efbd20_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
