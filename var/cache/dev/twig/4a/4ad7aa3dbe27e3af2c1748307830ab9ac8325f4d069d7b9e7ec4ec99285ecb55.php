<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_cd0a17497c3668b28f8abab723115d1367c64bb508c40abfc8c5caf991de6e1e extends Twig_Template
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
        $__internal_05f8de07ddad2437ae4447b30ac6806dcec641ef68873a2941106cb941f966d9 = $this->env->getExtension("native_profiler");
        $__internal_05f8de07ddad2437ae4447b30ac6806dcec641ef68873a2941106cb941f966d9->enter($__internal_05f8de07ddad2437ae4447b30ac6806dcec641ef68873a2941106cb941f966d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_05f8de07ddad2437ae4447b30ac6806dcec641ef68873a2941106cb941f966d9->leave($__internal_05f8de07ddad2437ae4447b30ac6806dcec641ef68873a2941106cb941f966d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
