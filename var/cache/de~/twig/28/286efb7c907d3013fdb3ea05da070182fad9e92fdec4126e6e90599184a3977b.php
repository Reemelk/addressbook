<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_8858ec56889f19ae937ce5dd4c13933061c9bd379e4c0a89864c34f8e93f9be3 extends Twig_Template
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
        $__internal_e3365af01f405d8cfe3446a7db81c7f993411b546d460438c426242254941970 = $this->env->getExtension("native_profiler");
        $__internal_e3365af01f405d8cfe3446a7db81c7f993411b546d460438c426242254941970->enter($__internal_e3365af01f405d8cfe3446a7db81c7f993411b546d460438c426242254941970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e3365af01f405d8cfe3446a7db81c7f993411b546d460438c426242254941970->leave($__internal_e3365af01f405d8cfe3446a7db81c7f993411b546d460438c426242254941970_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */