<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_eb7ff193d4c9eb21e3c2d9dc62b95da4b511ef1c89c79832cb8ef19533b1c119 extends Twig_Template
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
        $__internal_58b2ee544b9a2b5aa74c9f7952568432681fe78aaab70ecdfb6a1a8f8b819dab = $this->env->getExtension("native_profiler");
        $__internal_58b2ee544b9a2b5aa74c9f7952568432681fe78aaab70ecdfb6a1a8f8b819dab->enter($__internal_58b2ee544b9a2b5aa74c9f7952568432681fe78aaab70ecdfb6a1a8f8b819dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_58b2ee544b9a2b5aa74c9f7952568432681fe78aaab70ecdfb6a1a8f8b819dab->leave($__internal_58b2ee544b9a2b5aa74c9f7952568432681fe78aaab70ecdfb6a1a8f8b819dab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
