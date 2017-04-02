<?php

/* @bolt/components/panel-news.twig */
class __TwigTemplate_128f887cfd3be58b09581bb5e6a27d8253810df33471a481770dac1176f60844 extends Twig_Template
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
        $__internal_0c6f0b99d3b4f06321f7d952c09e4b6aabf277fc0e0122e98bf068579a803ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6f0b99d3b4f06321f7d952c09e4b6aabf277fc0e0122e98bf068579a803ff7->enter($__internal_0c6f0b99d3b4f06321f7d952c09e4b6aabf277fc0e0122e98bf068579a803ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-news.twig"));

        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["context"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["type"] => $context["news"]) {
            if (( !$this->getAttribute(($context["context"] ?? null), "disable", array()) || ($context["type"] == "alert"))) {
                // line 6
                echo "    ";
                echo twig_include($this->env, $context, "@bolt/components/panel-news-item.twig");
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0c6f0b99d3b4f06321f7d952c09e4b6aabf277fc0e0122e98bf068579a803ff7->leave($__internal_0c6f0b99d3b4f06321f7d952c09e4b6aabf277fc0e0122e98bf068579a803ff7_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  22 => 5,);
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
 # Sidebar-Panel: Displays the latest news on Bolt
 # (Usage Example: Dashboards sidebar)
 #}
{% for type, news in context if not context.disable or type == 'alert' %}
    {{ include('@bolt/components/panel-news-item.twig') }}
{% endfor %}
", "@bolt/components/panel-news.twig", "");
    }
}
