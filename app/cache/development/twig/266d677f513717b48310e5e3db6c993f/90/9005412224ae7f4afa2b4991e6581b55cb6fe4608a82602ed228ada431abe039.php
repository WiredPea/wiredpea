<?php

/* @bolt/components/panel-activity-change.twig */
class __TwigTemplate_914dfe23f1c4979f9860aec5a232c90d6808134f85c7f80b3d87a32b335bfbc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate((($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed("changelog")) ? ("@bolt/_base/_panel.twig") : ("@bolt/_base/_nothing.twig")), "@bolt/components/panel-activity-change.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ff8a4049066017a08d984bd5dabdc7d1eba91f5b7e3c5bfa46c2a02484bb784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff8a4049066017a08d984bd5dabdc7d1eba91f5b7e3c5bfa46c2a02484bb784->enter($__internal_3ff8a4049066017a08d984bd5dabdc7d1eba91f5b7e3c5bfa46c2a02484bb784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-activity-change.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ff8a4049066017a08d984bd5dabdc7d1eba91f5b7e3c5bfa46c2a02484bb784->leave($__internal_3ff8a4049066017a08d984bd5dabdc7d1eba91f5b7e3c5bfa46c2a02484bb784_prof);

    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_a125c0ae76fc60b6bf0d32bd3e0e52a99a78d598a48119a813262c7898d501c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a125c0ae76fc60b6bf0d32bd3e0e52a99a78d598a48119a813262c7898d501c4->enter($__internal_a125c0ae76fc60b6bf0d32bd3e0e52a99a78d598a48119a813262c7898d501c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo "panel-activity";
        
        $__internal_a125c0ae76fc60b6bf0d32bd3e0e52a99a78d598a48119a813262c7898d501c4->leave($__internal_a125c0ae76fc60b6bf0d32bd3e0e52a99a78d598a48119a813262c7898d501c4_prof);

    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_098766b59b8e3921c319b277f858659600ba3d83e7582dfcd347d6ed5c670938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098766b59b8e3921c319b277f858659600ba3d83e7582dfcd347d6ed5c670938->enter($__internal_098766b59b8e3921c319b277f858659600ba3d83e7582dfcd347d6ed5c670938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-clock-o";
        
        $__internal_098766b59b8e3921c319b277f858659600ba3d83e7582dfcd347d6ed5c670938->leave($__internal_098766b59b8e3921c319b277f858659600ba3d83e7582dfcd347d6ed5c670938_prof);

    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_6fcec9bca85083544078a5bfbb022d9daac709a9a3d3349766e58013ddcee80e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fcec9bca85083544078a5bfbb022d9daac709a9a3d3349766e58013ddcee80e->enter($__internal_6fcec9bca85083544078a5bfbb022d9daac709a9a3d3349766e58013ddcee80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.change");
        
        $__internal_6fcec9bca85083544078a5bfbb022d9daac709a9a3d3349766e58013ddcee80e->leave($__internal_6fcec9bca85083544078a5bfbb022d9daac709a9a3d3349766e58013ddcee80e_prof);

    }

    // line 13
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_0b323523f52ba5f07619df292cd0c7e2207c334fc485294a49b9ddc8057e1fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b323523f52ba5f07619df292cd0c7e2207c334fc485294a49b9ddc8057e1fd7->enter($__internal_0b323523f52ba5f07619df292cd0c7e2207c334fc485294a49b9ddc8057e1fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 14
        echo "
    ";
        // line 15
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/components/panel-activity-change.twig", 15);
        // line 16
        echo "    ";
        $context["__internal_f4a814fe122ad6a7057d8e405efc873615d859cb1e5a5a8c17d536624e0312f3"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/components/panel-activity-change.twig", 16);
        // line 17
        echo "
    <ul class=\"activity\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "change", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array(), "any", false, true), "get", array(0 => "contenttypes"), "method", false, true), $this->getAttribute($context["log"], "contenttype", array()), array(), "array", true, true)) {
                // line 22
                echo "                    ";
                $context["contenttype"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "contenttypes"), "method"), $this->getAttribute($context["log"], "contenttype", array()), array(), "array");
                // line 23
                echo "                    ";
                $context["contenttype_display_name"] = $this->getAttribute(($context["contenttype"] ?? null), "singular_name", array());
                // line 24
                echo "                    ";
                $context["content_display_name"] = $context["macro"]->getcontentlink_by_id(($context["contenttype"] ?? null), $this->getAttribute($context["log"], "title", array()), $this->getAttribute($context["log"], "contentid", array()));
                // line 25
                echo "                ";
            } else {
                // line 26
                echo "                    ";
                $context["contenttype_display_name"] = $this->getAttribute($context["log"], "contenttype", array());
                // line 27
                echo "                    ";
                $context["content_display_name"] = $this->getAttribute($context["log"], "title", array());
                // line 28
                echo "                ";
            }
            // line 29
            echo "
                ";
            // line 30
            if (($this->getAttribute($context["log"], "mutation_type", array()) == "INSERT")) {
                // line 31
                echo "                    ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.created");
                echo " ";
                echo twig_escape_filter($this->env, ($context["contenttype_display_name"] ?? null), "html", null, true);
                echo "
                ";
            } elseif (($this->getAttribute(            // line 32
$context["log"], "mutation_type", array()) == "UPDATE")) {
                // line 33
                echo "                    ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.saved");
                echo " ";
                echo twig_escape_filter($this->env, ($context["contenttype_display_name"] ?? null), "html", null, true);
                echo "
                ";
            } elseif (($this->getAttribute(            // line 34
$context["log"], "mutation_type", array()) == "DELETE")) {
                // line 35
                echo "                    ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.deleted");
                echo " ";
                echo twig_escape_filter($this->env, ($context["contenttype_display_name"] ?? null), "html", null, true);
                echo "
                ";
            }
            // line 37
            echo "                \"<strong>";
            echo twig_escape_filter($this->env, ($context["content_display_name"] ?? null), "html", null, true);
            echo "</strong>\" ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.by");
            echo "
                <em>";
            // line 38
            echo $context["macro"]->getuserlink((($this->getAttribute($context["log"], "ownerid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["log"], "ownerid", array()), "")) : ("")));
            echo "</em>
                <small>(";
            // line 39
            echo $context["__internal_f4a814fe122ad6a7057d8e405efc873615d859cb1e5a5a8c17d536624e0312f3"]->getbuic_moment($this->getAttribute($context["log"], "date", array()));
            echo ")</small>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </ul>

    <p><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelog");
        echo "\" class=\"btn btn-default\">
        <i class=\"fa fa-fw fa-archive\"></i>
        ";
        // line 46
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.button.more");
        echo "
    </a></p>

";
        
        $__internal_0b323523f52ba5f07619df292cd0c7e2207c334fc485294a49b9ddc8057e1fd7->leave($__internal_0b323523f52ba5f07619df292cd0c7e2207c334fc485294a49b9ddc8057e1fd7_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-activity-change.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 46,  175 => 44,  171 => 42,  162 => 39,  158 => 38,  151 => 37,  143 => 35,  141 => 34,  134 => 33,  132 => 32,  125 => 31,  123 => 30,  120 => 29,  117 => 28,  114 => 27,  111 => 26,  108 => 25,  105 => 24,  102 => 23,  99 => 22,  97 => 21,  94 => 20,  90 => 19,  86 => 17,  83 => 16,  81 => 15,  78 => 14,  72 => 13,  60 => 11,  48 => 9,  36 => 7,  21 => 5,);
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
{% extends (isallowed('changelog')) ? '@bolt/_base/_panel.twig' : '@bolt/_base/_nothing.twig' %}

{% block panel_class 'panel-activity' %}

{% block panel_icon 'fa-clock-o' %}

{% block panel_head __('panel.latest-activity.change') %}

{% block panel_body %}

    {% import '@bolt/_macro/_macro.twig' as macro %}
    {% from '@bolt/_buic/_moment.twig' import buic_moment %}

    <ul class=\"activity\">
        {% for log in context.change %}
            <li>
                {% if app.config.get('contenttypes')[log.contenttype] is defined %}
                    {% set contenttype = app.config.get('contenttypes')[log.contenttype] %}
                    {% set contenttype_display_name = contenttype.singular_name %}
                    {% set content_display_name = macro.contentlink_by_id(contenttype, log.title, log.contentid) %}
                {% else %}
                    {% set contenttype_display_name = log.contenttype %}
                    {% set content_display_name = log.title %}
                {% endif %}

                {% if log.mutation_type == 'INSERT' %}
                    {{ __('panel.latest-activity.created') }} {{ contenttype_display_name }}
                {% elseif log.mutation_type == 'UPDATE' %}
                    {{ __('panel.latest-activity.saved') }} {{ contenttype_display_name }}
                {% elseif log.mutation_type == 'DELETE' %}
                    {{ __('panel.latest-activity.deleted') }} {{ contenttype_display_name }}
                {% endif %}
                \"<strong>{{ content_display_name }}</strong>\" {{ __('panel.latest-activity.by') }}
                <em>{{ macro.userlink(log.ownerid|default('')) }}</em>
                <small>({{ buic_moment(log.date) }})</small>
            </li>
        {% endfor %}
    </ul>

    <p><a href=\"{{ path('changelog') }}\" class=\"btn btn-default\">
        <i class=\"fa fa-fw fa-archive\"></i>
        {{ __('panel.latest-activity.button.more') }}
    </a></p>

{% endblock panel_body %}
", "@bolt/components/panel-activity-change.twig", "");
    }
}
