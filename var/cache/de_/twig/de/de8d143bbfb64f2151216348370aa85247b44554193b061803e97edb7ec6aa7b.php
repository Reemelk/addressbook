<?php

/* UserBundle:Profile:show_content.html.twig */
class __TwigTemplate_62d2248fe25df8d1a0dd30f4cc58beaf261c9df5318fcc1bfb1013473f1e0bb6 extends Twig_Template
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
        $__internal_fd287dcfdab581befcc9daed5ea43a62153f5885306ec7de3a1e99f15d661ef9 = $this->env->getExtension("native_profiler");
        $__internal_fd287dcfdab581befcc9daed5ea43a62153f5885306ec7de3a1e99f15d661ef9->enter($__internal_fd287dcfdab581befcc9daed5ea43a62153f5885306ec7de3a1e99f15d661ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_fd287dcfdab581befcc9daed5ea43a62153f5885306ec7de3a1e99f15d661ef9->leave($__internal_fd287dcfdab581befcc9daed5ea43a62153f5885306ec7de3a1e99f15d661ef9_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */