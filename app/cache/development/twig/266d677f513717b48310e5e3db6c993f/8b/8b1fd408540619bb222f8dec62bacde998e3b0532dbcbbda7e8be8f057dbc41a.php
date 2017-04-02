<?php

/* @bolt/exception/database/exception.twig */
class __TwigTemplate_6e08afdb8be95f0a2c5d4d4de42a647319ef19c489ee3a337e4520d4024563df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@bolt/exception/exception.twig", "@bolt/exception/database/exception.twig", 1);
        $this->blocks = array(
            'exception' => array($this, 'block_exception'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/exception/exception.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76abe89504b4d110b3847703caddff16891189124f21438941281c5d0a1f7188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76abe89504b4d110b3847703caddff16891189124f21438941281c5d0a1f7188->enter($__internal_76abe89504b4d110b3847703caddff16891189124f21438941281c5d0a1f7188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/exception/database/exception.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76abe89504b4d110b3847703caddff16891189124f21438941281c5d0a1f7188->leave($__internal_76abe89504b4d110b3847703caddff16891189124f21438941281c5d0a1f7188_prof);

    }

    // line 3
    public function block_exception($context, array $blocks = array())
    {
        $__internal_c46ce0d0c32860dad848b2e9f77258e10c535566d08876da9d37b73d2448e30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46ce0d0c32860dad848b2e9f77258e10c535566d08876da9d37b73d2448e30e->enter($__internal_c46ce0d0c32860dad848b2e9f77258e10c535566d08876da9d37b73d2448e30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "exception"));

        // line 4
        echo "    ";
        if ((($context["type"] ?? null) == "connect")) {
            // line 5
            echo "        ";
            echo twig_include($this->env, $context, "@bolt/exception/database/_failed-connect.twig");
            echo "
    ";
        } elseif ((        // line 6
($context["type"] ?? null) == "driver")) {
            // line 7
            echo "        ";
            echo twig_include($this->env, $context, "@bolt/exception/database/_driver.twig");
            echo "
    ";
        } elseif ((        // line 8
($context["type"] ?? null) == "path")) {
            // line 9
            echo "        ";
            echo twig_include($this->env, $context, "@bolt/exception/database/_invalid-path.twig");
            echo "
    ";
        }
        
        $__internal_c46ce0d0c32860dad848b2e9f77258e10c535566d08876da9d37b73d2448e30e->leave($__internal_c46ce0d0c32860dad848b2e9f77258e10c535566d08876da9d37b73d2448e30e_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/exception/database/exception.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  55 => 8,  50 => 7,  48 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@bolt/exception/exception.twig' %}

{% block exception %}
    {% if type == 'connect' %}
        {{ include('@bolt/exception/database/_failed-connect.twig') }}
    {% elseif type == 'driver' %}
        {{ include('@bolt/exception/database/_driver.twig') }}
    {% elseif type == 'path' %}
        {{ include('@bolt/exception/database/_invalid-path.twig') }}
    {% endif %}
{% endblock exception %}
", "@bolt/exception/database/exception.twig", "");
    }
}
