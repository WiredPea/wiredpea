<?php

/* @bolt/components/panel-news-item.twig */
class __TwigTemplate_8074aa7bd58c8fd3d7cb13aa9d1cb78c84303c5dddef226222d64b29dccb3b47 extends Twig_Template
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
        // line 5
        return $this->loadTemplate((($this->getAttribute(($context["news"] ?? null), "title", array(), "any", true, true)) ? ("@bolt/_base/_panel.twig") : ("@bolt/_base/_nothing.twig")), "@bolt/components/panel-news-item.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4b23b133d9bd5c75c632d59bbea549b816f85388d2c517319fab2d8dbc538ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b23b133d9bd5c75c632d59bbea549b816f85388d2c517319fab2d8dbc538ac->enter($__internal_b4b23b133d9bd5c75c632d59bbea549b816f85388d2c517319fab2d8dbc538ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-news-item.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4b23b133d9bd5c75c632d59bbea549b816f85388d2c517319fab2d8dbc538ac->leave($__internal_b4b23b133d9bd5c75c632d59bbea549b816f85388d2c517319fab2d8dbc538ac_prof);

    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_014bf0005953fa772431edcee3f79fb0425593ef7ad1e32f925d0c2acfbd4fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014bf0005953fa772431edcee3f79fb0425593ef7ad1e32f925d0c2acfbd4fc7->enter($__internal_014bf0005953fa772431edcee3f79fb0425593ef7ad1e32f925d0c2acfbd4fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo "panel-news";
        
        $__internal_014bf0005953fa772431edcee3f79fb0425593ef7ad1e32f925d0c2acfbd4fc7->leave($__internal_014bf0005953fa772431edcee3f79fb0425593ef7ad1e32f925d0c2acfbd4fc7_prof);

    }

    // line 9
    public function block_panel_alert($context, array $blocks = array())
    {
        $__internal_4ff6a9df7f2584327823848f6ae00b9562d2c9eb90f7dcc38082aa78cc0c9295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff6a9df7f2584327823848f6ae00b9562d2c9eb90f7dcc38082aa78cc0c9295->enter($__internal_4ff6a9df7f2584327823848f6ae00b9562d2c9eb90f7dcc38082aa78cc0c9295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_alert"));

        // line 10
        echo "    ";
        if (($this->getAttribute(($context["news"] ?? null), "type", array()) == "alert")) {
            // line 11
            echo "        class=\"progress-bar progress-bar-danger progress-bar-striped active\" style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px; font-weight: bold; color: #000;\"
    ";
        } else {
            // line 13
            echo "        class=\"panel-heading\"
    ";
        }
        
        $__internal_4ff6a9df7f2584327823848f6ae00b9562d2c9eb90f7dcc38082aa78cc0c9295->leave($__internal_4ff6a9df7f2584327823848f6ae00b9562d2c9eb90f7dcc38082aa78cc0c9295_prof);

    }

    // line 17
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_164cb9d5599d63d0f082ed8755f0ccd449e886306b6f4860381a569e02f92fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164cb9d5599d63d0f082ed8755f0ccd449e886306b6f4860381a569e02f92fcd->enter($__internal_164cb9d5599d63d0f082ed8755f0ccd449e886306b6f4860381a569e02f92fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-bullhorn";
        
        $__internal_164cb9d5599d63d0f082ed8755f0ccd449e886306b6f4860381a569e02f92fcd->leave($__internal_164cb9d5599d63d0f082ed8755f0ccd449e886306b6f4860381a569e02f92fcd_prof);

    }

    // line 19
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_584b6efe269196d800ea81a0a6012ceef16ee20093c43de48a1310014b36c05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584b6efe269196d800ea81a0a6012ceef16ee20093c43de48a1310014b36c05e->enter($__internal_584b6efe269196d800ea81a0a6012ceef16ee20093c43de48a1310014b36c05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["news"] ?? null), "title", array()), "html", null, true);
        
        $__internal_584b6efe269196d800ea81a0a6012ceef16ee20093c43de48a1310014b36c05e->leave($__internal_584b6efe269196d800ea81a0a6012ceef16ee20093c43de48a1310014b36c05e_prof);

    }

    // line 21
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_0c726d4017bf5abaaf696756beb045258afd96a4b8af5a070f88944b52c69837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c726d4017bf5abaaf696756beb045258afd96a4b8af5a070f88944b52c69837->enter($__internal_0c726d4017bf5abaaf696756beb045258afd96a4b8af5a070f88944b52c69837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 22
        echo "    ";
        echo $this->getAttribute(($context["news"] ?? null), "teaser", array());
        echo "
";
        
        $__internal_0c726d4017bf5abaaf696756beb045258afd96a4b8af5a070f88944b52c69837->leave($__internal_0c726d4017bf5abaaf696756beb045258afd96a4b8af5a070f88944b52c69837_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-news-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 22,  95 => 21,  83 => 19,  71 => 17,  62 => 13,  58 => 11,  55 => 10,  49 => 9,  37 => 7,  22 => 5,);
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
 # Sidebar-Panel-Item: Displays the latest news on Bolt
 # (Usage Example: Dashboards sidebar)
 #}
{% extends (news.title is defined) ? '@bolt/_base/_panel.twig' : '@bolt/_base/_nothing.twig' %}

{% block panel_class 'panel-news' %}

{% block panel_alert %}
    {% if news.type == 'alert' %}
        class=\"progress-bar progress-bar-danger progress-bar-striped active\" style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px; font-weight: bold; color: #000;\"
    {% else %}
        class=\"panel-heading\"
    {% endif %}
{% endblock panel_alert %}

{% block panel_icon 'fa-bullhorn' %}

{% block panel_head news.title %}

{% block panel_body %}
    {{ news.teaser|raw }}
{% endblock panel_body %}
", "@bolt/components/panel-news-item.twig", "");
    }
}
