<?php

/* UserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_c081fff1f9218ed945eb84d02f83a72b521413c18f1c8e7970995f98098ad014 extends Twig_Template
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
        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : null)), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  35 => 8,  29 => 6,  27 => 5,  22 => 3,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*     <div>*/
/*         {% if invalid_username is defined %}*/
/*             <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>*/
/*         {% endif %}*/
/*         <label for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*         <input type="text" id="username" name="username" required="required" />*/
/*     </div>*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.request.submit'|trans }}" />*/
/*     </div>*/
/* </form>*/
/* */
