<?php

/* @bolt/_buic/_moment.twig */
class __TwigTemplate_3223d653d71fc14590932cb1e92cedd0af9f45775b0038a54c4535b793fb0889 extends Twig_Template
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
        $__internal_91b6b15eb217a398c119955000634d2e3774e69c7efc406893973f6c09334aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b6b15eb217a398c119955000634d2e3774e69c7efc406893973f6c09334aa6->enter($__internal_91b6b15eb217a398c119955000634d2e3774e69c7efc406893973f6c09334aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_buic/_moment.twig"));

        
        $__internal_91b6b15eb217a398c119955000634d2e3774e69c7efc406893973f6c09334aa6->leave($__internal_91b6b15eb217a398c119955000634d2e3774e69c7efc406893973f6c09334aa6_prof);

    }

    // line 6
    public function getbuic_moment($__datetime__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "datetime" => $__datetime__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c9f9ed11a8a90aae71ccbe3e6ec5100e1a676a38d1612b9cce63ee20bb6b6efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c9f9ed11a8a90aae71ccbe3e6ec5100e1a676a38d1612b9cce63ee20bb6b6efa->enter($__internal_c9f9ed11a8a90aae71ccbe3e6ec5100e1a676a38d1612b9cce63ee20bb6b6efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "buic_moment"));

            // line 7
            $context["dt"] = twig_date_format_filter($this->env, ($context["datetime"] ?? null), "Y-m-d\\TH:i:sP");
            // line 8
            echo "<time class=\"buic-moment\" data-bolt-widget=\"buicMoment\" datetime=\"";
            echo twig_escape_filter($this->env, ($context["dt"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["dt"] ?? null), "html", null, true);
            echo "</time>";
            
            $__internal_c9f9ed11a8a90aae71ccbe3e6ec5100e1a676a38d1612b9cce63ee20bb6b6efa->leave($__internal_c9f9ed11a8a90aae71ccbe3e6ec5100e1a676a38d1612b9cce63ee20bb6b6efa_prof);

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
        return "@bolt/_buic/_moment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  42 => 7,  27 => 6,);
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
 # Renders a datetime that displays relative time.
 #
 # @param string datetime ISO-datetime ('Y-m-d H:i:s') to display.
 #}
{% macro buic_moment(datetime) -%}
    {%- set dt = datetime|date('Y-m-d\\\\TH:i:sP') -%}
    <time class=\"buic-moment\" data-bolt-widget=\"buicMoment\" datetime=\"{{ dt }}\">{{ dt }}</time>
{%- endmacro %}
", "@bolt/_buic/_moment.twig", "");
    }
}
