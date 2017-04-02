<?php

/* @bolt/_sub/_configuration_notices.twig */
class __TwigTemplate_3f4dda6b2ccc6f5e7350ea97898916c104f5ead96317774360d7c8b6f510a012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_alert' => array($this, 'block_panel_alert'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate((( !twig_test_empty(($context["messages"] ?? null))) ? ("@bolt/_base/_panel.twig") : ("@bolt/_base/_nothing.twig")), "@bolt/_sub/_configuration_notices.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47bcd4cd111cce67785bb828f46da69f388f692f4ae61ace6ce5aa9c36670b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47bcd4cd111cce67785bb828f46da69f388f692f4ae61ace6ce5aa9c36670b24->enter($__internal_47bcd4cd111cce67785bb828f46da69f388f692f4ae61ace6ce5aa9c36670b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_configuration_notices.twig"));

        // line 4
        $context["messages"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "logger.flash", array(), "array"), "get", array(0 => "configuration"), "method");
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47bcd4cd111cce67785bb828f46da69f388f692f4ae61ace6ce5aa9c36670b24->leave($__internal_47bcd4cd111cce67785bb828f46da69f388f692f4ae61ace6ce5aa9c36670b24_prof);

    }

    // line 8
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_891aa6a7b912d630f8a290b1a0b509f201e3b8060f2a7d205c2ae7e86f196157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891aa6a7b912d630f8a290b1a0b509f201e3b8060f2a7d205c2ae7e86f196157->enter($__internal_891aa6a7b912d630f8a290b1a0b509f201e3b8060f2a7d205c2ae7e86f196157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo "panel-configuration";
        
        $__internal_891aa6a7b912d630f8a290b1a0b509f201e3b8060f2a7d205c2ae7e86f196157->leave($__internal_891aa6a7b912d630f8a290b1a0b509f201e3b8060f2a7d205c2ae7e86f196157_prof);

    }

    // line 10
    public function block_panel_alert($context, array $blocks = array())
    {
        $__internal_28e1d4e62a439c6623c335d84951cc7bfcbc440783681aec90b41a5377cc95eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e1d4e62a439c6623c335d84951cc7bfcbc440783681aec90b41a5377cc95eb->enter($__internal_28e1d4e62a439c6623c335d84951cc7bfcbc440783681aec90b41a5377cc95eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_alert"));

        // line 11
        echo "    class=\"progress-bar progress-bar-info progress-bar-striped active\"
    style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px;\"
";
        
        $__internal_28e1d4e62a439c6623c335d84951cc7bfcbc440783681aec90b41a5377cc95eb->leave($__internal_28e1d4e62a439c6623c335d84951cc7bfcbc440783681aec90b41a5377cc95eb_prof);

    }

    // line 15
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_a4e02cd6bae378f74af333a765d53f8c60f5e3284b646124b4b84094f1a37d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e02cd6bae378f74af333a765d53f8c60f5e3284b646124b4b84094f1a37d6b->enter($__internal_a4e02cd6bae378f74af333a765d53f8c60f5e3284b646124b4b84094f1a37d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-bullhorn";
        
        $__internal_a4e02cd6bae378f74af333a765d53f8c60f5e3284b646124b4b84094f1a37d6b->leave($__internal_a4e02cd6bae378f74af333a765d53f8c60f5e3284b646124b4b84094f1a37d6b_prof);

    }

    // line 17
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_9ebb62ae5f562978cb331d285f60845a690c0785a1c4acf7c2758c92af754621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebb62ae5f562978cb331d285f60845a690c0785a1c4acf7c2758c92af754621->enter($__internal_9ebb62ae5f562978cb331d285f60845a690c0785a1c4acf7c2758c92af754621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo "<b>Configuration Notices</b>";
        
        $__internal_9ebb62ae5f562978cb331d285f60845a690c0785a1c4acf7c2758c92af754621->leave($__internal_9ebb62ae5f562978cb331d285f60845a690c0785a1c4acf7c2758c92af754621_prof);

    }

    // line 19
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_dab4fbeb834ce069245f07cfaa13185f3654ae6b14f312ac33dfde0f0f989003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab4fbeb834ce069245f07cfaa13185f3654ae6b14f312ac33dfde0f0f989003->enter($__internal_dab4fbeb834ce069245f07cfaa13185f3654ae6b14f312ac33dfde0f0f989003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 20
        echo "    ";
        $context["shown"] = array();
        // line 21
        echo "    <p>
        ";
        // line 22
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.bolt-configuration-issues-detected");
        echo "
    </p>
    <ul>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 26
            echo "        ";
            if (!twig_in_filter($context["msg"], ($context["shown"] ?? null))) {
                // line 27
                echo "            <li>";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->ymllink($context["msg"]);
                echo "</li>
            ";
                // line 28
                $context["shown"] = twig_array_merge(($context["shown"] ?? null), array(0 => $context["msg"]));
                // line 29
                echo "        ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </ul>
";
        
        $__internal_dab4fbeb834ce069245f07cfaa13185f3654ae6b14f312ac33dfde0f0f989003->leave($__internal_dab4fbeb834ce069245f07cfaa13185f3654ae6b14f312ac33dfde0f0f989003_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_configuration_notices.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 31,  126 => 30,  123 => 29,  121 => 28,  116 => 27,  113 => 26,  109 => 25,  103 => 22,  100 => 21,  97 => 20,  91 => 19,  79 => 17,  67 => 15,  58 => 11,  52 => 10,  40 => 8,  33 => 6,  31 => 4,  22 => 6,);
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
 # Sidebar-Panel-Item: Displays the 'Configuration needed' items
 #}
{% set messages = app['logger.flash'].get('configuration') %}

{% extends (messages is not empty) ? '@bolt/_base/_panel.twig' : '@bolt/_base/_nothing.twig' %}

{% block panel_class 'panel-configuration' %}

{% block panel_alert %}
    class=\"progress-bar progress-bar-info progress-bar-striped active\"
    style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px;\"
{% endblock panel_alert %}

{% block panel_icon 'fa-bullhorn' %}

{% block panel_head %}<b>Configuration Notices</b>{% endblock %}

{% block panel_body %}
    {% set shown = [] %}
    <p>
        {{ __('general.bolt-configuration-issues-detected') }}
    </p>
    <ul>
    {% for msg in messages %}
        {% if msg not in shown %}
            <li>{{ msg|ymllink }}</li>
            {% set shown = shown|merge([msg]) %}
        {% endif %}
    {% endfor %}
    </ul>
{% endblock panel_body %}
", "@bolt/_sub/_configuration_notices.twig", "");
    }
}
