<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7e908fda6e2eb14fbd4f7bf434109273d85b9c25efb8560b326fe54e11f8584e extends Twig_Template
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
        $__internal_5b13d9c9c6d67693f2a0efec9f0e1e668d6c5b2b61edeaae8fd939e21dc5da87 = $this->env->getExtension("native_profiler");
        $__internal_5b13d9c9c6d67693f2a0efec9f0e1e668d6c5b2b61edeaae8fd939e21dc5da87->enter($__internal_5b13d9c9c6d67693f2a0efec9f0e1e668d6c5b2b61edeaae8fd939e21dc5da87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5b13d9c9c6d67693f2a0efec9f0e1e668d6c5b2b61edeaae8fd939e21dc5da87->leave($__internal_5b13d9c9c6d67693f2a0efec9f0e1e668d6c5b2b61edeaae8fd939e21dc5da87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
