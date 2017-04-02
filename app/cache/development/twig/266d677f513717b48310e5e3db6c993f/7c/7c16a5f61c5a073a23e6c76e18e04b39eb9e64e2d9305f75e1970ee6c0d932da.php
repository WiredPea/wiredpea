<?php

/* @bolt/components/panel-activity-system.twig */
class __TwigTemplate_00165238750fc1966d94c46d571fd1edfae272fddca6381ebbc0091a0de3d3a0 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed("systemlog")) ? ("@bolt/_base/_panel.twig") : ("@bolt/_base/_nothing.twig")), "@bolt/components/panel-activity-system.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25883b45e4dbbc7523e3173400cb0b3c65af0fa0c5ebdb810314c581097fcff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25883b45e4dbbc7523e3173400cb0b3c65af0fa0c5ebdb810314c581097fcff7->enter($__internal_25883b45e4dbbc7523e3173400cb0b3c65af0fa0c5ebdb810314c581097fcff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-activity-system.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25883b45e4dbbc7523e3173400cb0b3c65af0fa0c5ebdb810314c581097fcff7->leave($__internal_25883b45e4dbbc7523e3173400cb0b3c65af0fa0c5ebdb810314c581097fcff7_prof);

    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_dfbcaf1eb56436ea9972c1235089e7113a6c49f167f5962f1d1aabadbad35de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfbcaf1eb56436ea9972c1235089e7113a6c49f167f5962f1d1aabadbad35de0->enter($__internal_dfbcaf1eb56436ea9972c1235089e7113a6c49f167f5962f1d1aabadbad35de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo "panel-activity";
        
        $__internal_dfbcaf1eb56436ea9972c1235089e7113a6c49f167f5962f1d1aabadbad35de0->leave($__internal_dfbcaf1eb56436ea9972c1235089e7113a6c49f167f5962f1d1aabadbad35de0_prof);

    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_8764172d4f1653dd97d35adee8327ed150c779e08cf30c68818216245c1a9ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8764172d4f1653dd97d35adee8327ed150c779e08cf30c68818216245c1a9ed1->enter($__internal_8764172d4f1653dd97d35adee8327ed150c779e08cf30c68818216245c1a9ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-clock-o";
        
        $__internal_8764172d4f1653dd97d35adee8327ed150c779e08cf30c68818216245c1a9ed1->leave($__internal_8764172d4f1653dd97d35adee8327ed150c779e08cf30c68818216245c1a9ed1_prof);

    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_5869397d58a7cbf6e54b3b6f10ec128518bd32419b4da5808a180cc405ddcfbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5869397d58a7cbf6e54b3b6f10ec128518bd32419b4da5808a180cc405ddcfbe->enter($__internal_5869397d58a7cbf6e54b3b6f10ec128518bd32419b4da5808a180cc405ddcfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.system");
        
        $__internal_5869397d58a7cbf6e54b3b6f10ec128518bd32419b4da5808a180cc405ddcfbe->leave($__internal_5869397d58a7cbf6e54b3b6f10ec128518bd32419b4da5808a180cc405ddcfbe_prof);

    }

    // line 13
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_983ae76f449da2d05493243c5d9c31e32cbad70706159acd89675b2235fef364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983ae76f449da2d05493243c5d9c31e32cbad70706159acd89675b2235fef364->enter($__internal_983ae76f449da2d05493243c5d9c31e32cbad70706159acd89675b2235fef364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 14
        echo "
    ";
        // line 15
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/components/panel-activity-system.twig", 15);
        // line 16
        echo "    ";
        $context["__internal_4dce2a14241d73f06abc953f5c7378a91a4ea2767bbb74877407e4ea2f331610"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/components/panel-activity-system.twig", 16);
        // line 17
        echo "
    <ul class=\"activity\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "system", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            if (($this->getAttribute($context["log"], "route", array()) == "postLogin")) {
                // line 22
                echo "                    ";
                if (($this->getAttribute($context["log"], "ownerid", array()) == 0)) {
                    // line 23
                    echo "                        <em>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
                    echo "</em>
                    ";
                } else {
                    // line 25
                    echo "                        <em>";
                    echo $context["macro"]->getuserlink($this->getAttribute($context["log"], "ownerid", array()));
                    echo "</em> ";
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.logged-in");
                    echo "
                    ";
                }
                // line 27
                echo "                ";
            } elseif (($this->getAttribute($context["log"], "route", array()) == "logout")) {
                // line 28
                echo "                    <em>";
                echo $context["macro"]->getuserlink((($this->getAttribute($context["log"], "ownerid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["log"], "ownerid", array()), "")) : ("")));
                echo "</em> ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.logged-out");
                echo "
                ";
            } else {
                // line 30
                echo "                    <em>";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->shy($this->getAttribute($context["log"], "message", array()));
                echo "</em>
                ";
            }
            // line 32
            echo "                <small>(";
            echo $context["__internal_4dce2a14241d73f06abc953f5c7378a91a4ea2767bbb74877407e4ea2f331610"]->getbuic_moment($this->getAttribute($context["log"], "date", array()));
            echo ")</small>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </ul>

    <p><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("systemlog");
        echo "\" class=\"btn btn-default\">
        <i class=\"fa fa-fw fa-archive\"></i>
        ";
        // line 39
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.button.more");
        echo "
    </a></p>

";
        
        $__internal_983ae76f449da2d05493243c5d9c31e32cbad70706159acd89675b2235fef364->leave($__internal_983ae76f449da2d05493243c5d9c31e32cbad70706159acd89675b2235fef364_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-activity-system.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 39,  147 => 37,  143 => 35,  133 => 32,  127 => 30,  119 => 28,  116 => 27,  108 => 25,  102 => 23,  99 => 22,  97 => 21,  94 => 20,  90 => 19,  86 => 17,  83 => 16,  81 => 15,  78 => 14,  72 => 13,  60 => 11,  48 => 9,  36 => 7,  21 => 5,);
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
{% extends (isallowed('systemlog')) ? '@bolt/_base/_panel.twig' : '@bolt/_base/_nothing.twig' %}

{% block panel_class 'panel-activity' %}

{% block panel_icon 'fa-clock-o' %}

{% block panel_head __('panel.latest-activity.system') %}

{% block panel_body %}

    {% import '@bolt/_macro/_macro.twig' as macro %}
    {% from '@bolt/_buic/_moment.twig' import buic_moment %}

    <ul class=\"activity\">
        {% for log in context.system %}
            <li>
                {% if log.route == 'postLogin' %}
                    {% if log.ownerid == 0 %}
                        <em>{{ log.message }}</em>
                    {% else %}
                        <em>{{ macro.userlink(log.ownerid) }}</em> {{ __('panel.latest-activity.logged-in') }}
                    {% endif %}
                {% elseif log.route == 'logout' %}
                    <em>{{ macro.userlink(log.ownerid|default('')) }}</em> {{ __('panel.latest-activity.logged-out') }}
                {% else %}
                    <em>{{ log.message|raw|shy }}</em>
                {% endif %}
                <small>({{ buic_moment(log.date) }})</small>
            </li>
        {% endfor %}
    </ul>

    <p><a href=\"{{ path('systemlog') }}\" class=\"btn btn-default\">
        <i class=\"fa fa-fw fa-archive\"></i>
        {{ __('panel.latest-activity.button.more') }}
    </a></p>

{% endblock panel_body %}
", "@bolt/components/panel-activity-system.twig", "");
    }
}
