<?php

/* @bolt/_nav/_secondary-search.twig */
class __TwigTemplate_17276f86f951ac5d16b40eddefeb101159d172476b3996ea459d05b2a33db404 extends Twig_Template
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
        $__internal_a679476cbff65756f78837fa8a56c3f8919aa7aa002c70362f2aee77f573d0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a679476cbff65756f78837fa8a56c3f8919aa7aa002c70362f2aee77f573d0c1->enter($__internal_a679476cbff65756f78837fa8a56c3f8919aa7aa002c70362f2aee77f573d0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-search.twig"));

        // line 1
        echo "<li class=\"search\">
    <form class=\"navbar-form\">
        <i class=\"icon fa fa-search\"></i><div class=\"form-group has-feedback omnisearch\" role=\"search\">
            <select class=\"form-control\"></select>
        </div>
    </form>
</li>
";
        
        $__internal_a679476cbff65756f78837fa8a56c3f8919aa7aa002c70362f2aee77f573d0c1->leave($__internal_a679476cbff65756f78837fa8a56c3f8919aa7aa002c70362f2aee77f573d0c1_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-search.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"search\">
    <form class=\"navbar-form\">
        <i class=\"icon fa fa-search\"></i><div class=\"form-group has-feedback omnisearch\" role=\"search\">
            <select class=\"form-control\"></select>
        </div>
    </form>
</li>
", "@bolt/_nav/_secondary-search.twig", "");
    }
}
