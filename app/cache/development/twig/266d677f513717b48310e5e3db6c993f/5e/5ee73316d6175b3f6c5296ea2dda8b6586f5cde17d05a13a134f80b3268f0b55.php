<?php

/* @bolt/components/panel-activity.twig */
class __TwigTemplate_0958d968e20a2061253d4cbddfa0a3bb3dbc8894c5e788c34879b87c59e39068 extends Twig_Template
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
        $__internal_c5ca3c951a42548869b67102d6d43c8ec046923fdac2fa92b61272650bf57d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ca3c951a42548869b67102d6d43c8ec046923fdac2fa92b61272650bf57d22->enter($__internal_c5ca3c951a42548869b67102d6d43c8ec046923fdac2fa92b61272650bf57d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-activity.twig"));

        // line 5
        echo twig_include($this->env, $context, "@bolt/components/panel-activity-change.twig", ($context["context"] ?? null));
        echo "
";
        // line 6
        echo twig_include($this->env, $context, "@bolt/components/panel-activity-system.twig", ($context["context"] ?? null));
        echo "
";
        
        $__internal_c5ca3c951a42548869b67102d6d43c8ec046923fdac2fa92b61272650bf57d22->leave($__internal_c5ca3c951a42548869b67102d6d43c8ec046923fdac2fa92b61272650bf57d22_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-activity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Sidebar-Panel: Displays the latest activity
 # (Usage Example: Dashboards sidebar)
 #}
{{ include('@bolt/components/panel-activity-change.twig', context) }}
{{ include('@bolt/components/panel-activity-system.twig', context) }}
", "@bolt/components/panel-activity.twig", "");
    }
}
