<?php

/* @bolt/_base/_nothing.twig */
class __TwigTemplate_9d892881ead77828180a1216df88401a353bdeaf2066bdc7f11aba41b38e4353 extends Twig_Template
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
        $__internal_bdfb8f264a5be52dc701733a1c3caa7bf4244e1c476b9877149178c611ef44d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfb8f264a5be52dc701733a1c3caa7bf4244e1c476b9877149178c611ef44d9->enter($__internal_bdfb8f264a5be52dc701733a1c3caa7bf4244e1c476b9877149178c611ef44d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_nothing.twig"));

        
        $__internal_bdfb8f264a5be52dc701733a1c3caa7bf4244e1c476b9877149178c611ef44d9->leave($__internal_bdfb8f264a5be52dc701733a1c3caa7bf4244e1c476b9877149178c611ef44d9_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_nothing.twig";
    }

    public function getDebugInfo()
    {
        return array ();
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
 # Outputs nothing for conditional extends
 #}
", "@bolt/_base/_nothing.twig", "");
    }
}
