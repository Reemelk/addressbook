<?php

/* @User/Resetting/reset_content.html.twig */
class __TwigTemplate_6cda65d8f08796fbda413eb365ba7cd0cf785c83539002b53b753b24e23ad27e extends Twig_Template
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
        $__internal_f99ba21db3cff2da500f533dccb5a7aba9f8758732d2e7e7be70b3ddf48b45d2 = $this->env->getExtension("native_profiler");
        $__internal_f99ba21db3cff2da500f533dccb5a7aba9f8758732d2e7e7be70b3ddf48b45d2->enter($__internal_f99ba21db3cff2da500f533dccb5a7aba9f8758732d2e7e7be70b3ddf48b45d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_f99ba21db3cff2da500f533dccb5a7aba9f8758732d2e7e7be70b3ddf48b45d2->leave($__internal_f99ba21db3cff2da500f533dccb5a7aba9f8758732d2e7e7be70b3ddf48b45d2_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.reset.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
