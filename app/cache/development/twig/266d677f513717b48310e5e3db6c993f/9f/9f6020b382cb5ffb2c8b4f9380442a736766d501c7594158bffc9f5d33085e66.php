<?php

/* @bolt/_macro/_pager.twig */
class __TwigTemplate_00f52a64373223106591b3106be1c405ef65e6af35a2197c05062a5a4b340771 extends Twig_Template
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
        $__internal_d73435aab552a7bce350b08ffdb414a686de1523a27865591518505c3110d87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73435aab552a7bce350b08ffdb414a686de1523a27865591518505c3110d87e->enter($__internal_d73435aab552a7bce350b08ffdb414a686de1523a27865591518505c3110d87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_macro/_pager.twig"));

        
        $__internal_d73435aab552a7bce350b08ffdb414a686de1523a27865591518505c3110d87e->leave($__internal_d73435aab552a7bce350b08ffdb414a686de1523a27865591518505c3110d87e_prof);

    }

    // line 7
    public function getpager($__pager__ = null, $__pagerName__ = null, $__surr__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pager" => $__pager__,
            "pagerName" => $__pagerName__,
            "surr" => $__surr__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a103fee8ffa792138118ab04274e3bd972a0a75fe503c4137178dad3d17df8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a103fee8ffa792138118ab04274e3bd972a0a75fe503c4137178dad3d17df8f2->enter($__internal_a103fee8ffa792138118ab04274e3bd972a0a75fe503c4137178dad3d17df8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "pager"));

            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->pager($this->env, ((array_key_exists("pagerName", $context)) ? (_twig_default_filter(($context["pagerName"] ?? null), "")) : ("")), ((array_key_exists("surr", $context)) ? (_twig_default_filter(($context["surr"] ?? null), 4)) : (4)), "backend"), "html", null, true);
            echo "
";
            
            $__internal_a103fee8ffa792138118ab04274e3bd972a0a75fe503c4137178dad3d17df8f2->leave($__internal_a103fee8ffa792138118ab04274e3bd972a0a75fe503c4137178dad3d17df8f2_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/_macro/_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  27 => 7,);
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
 # Renders a backend pager
 #
 # @param string  pagerName (default: '')
 # @param int     surr (default: 4)
 #}
{% macro pager(pager, pagerName, surr) %}
    {{ pager(pagerName|default(''), surr|default(4), 'backend') }}
{% endmacro %}
", "@bolt/_macro/_pager.twig", "");
    }
}
