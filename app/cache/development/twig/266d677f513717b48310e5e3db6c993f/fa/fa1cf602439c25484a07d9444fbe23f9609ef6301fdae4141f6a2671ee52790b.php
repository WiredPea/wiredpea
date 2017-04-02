<?php

/* index.twig */
class __TwigTemplate_b51f7c7748356f10ca459d17a9461f1e6fd9c79d5d1db90015f0e5dae897889e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "index.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb3d61c39ddd85a2aa10d0a4a6eaab097a33aaa9eb82870ff4ec8840ec62b83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3d61c39ddd85a2aa10d0a4a6eaab097a33aaa9eb82870ff4ec8840ec62b83e->enter($__internal_bb3d61c39ddd85a2aa10d0a4a6eaab097a33aaa9eb82870ff4ec8840ec62b83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb3d61c39ddd85a2aa10d0a4a6eaab097a33aaa9eb82870ff4ec8840ec62b83e->leave($__internal_bb3d61c39ddd85a2aa10d0a4a6eaab097a33aaa9eb82870ff4ec8840ec62b83e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_d0da3ae09dc1bd73fc81a039757ef1e6348af2427be232ca81c34bc1c7c748a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0da3ae09dc1bd73fc81a039757ef1e6348af2427be232ca81c34bc1c7c748a3->enter($__internal_d0da3ae09dc1bd73fc81a039757ef1e6348af2427be232ca81c34bc1c7c748a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    ";
        // line 5
        if (array_key_exists("record", $context)) {
            // line 6
            echo "
        <h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "title", array()), "html", null, true);
            echo "</h1>

        ";
            // line 10
            echo "        ";
            echo twig_include($this->env, $context, "partials/_fresh_install.twig");
            echo "

        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "teaser", array()), "html", null, true);
            echo "

        ";
            // line 14
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->popup($this->getAttribute(($context["record"] ?? null), "image", array()), 1200, 500);
            echo "

        ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "body", array()), "html", null, true);
            echo "

        ";
            // line 18
            echo twig_include($this->env, $context, "partials/_recordfooter.twig", array("record" => ($context["record"] ?? null)));
            echo "

    ";
        }
        // line 21
        echo "
";
        
        $__internal_d0da3ae09dc1bd73fc81a039757ef1e6348af2427be232ca81c34bc1c7c748a3->leave($__internal_d0da3ae09dc1bd73fc81a039757ef1e6348af2427be232ca81c34bc1c7c748a3_prof);

    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  74 => 18,  69 => 16,  64 => 14,  59 => 12,  53 => 10,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/_master.twig' %}

{% block main %}

    {% if record is defined %}

        <h1>{{ record.title }}</h1>

        {# Remove this block if you don't need it anymore. #}
        {{ include('partials/_fresh_install.twig') }}

        {{ record.teaser }}

        {{ popup(record.image, 1200, 500) }}

        {{ record.body }}

        {{ include('partials/_recordfooter.twig', { 'record': record }) }}

    {% endif %}

{% endblock main %}
", "index.twig", "");
    }
}
