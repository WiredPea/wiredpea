<?php

/* @bolt/_nav/_secondary-configuration.twig */
class __TwigTemplate_e3580818740ec4180382617c9b0ca7ec025d8f767e36decb32f471a7befcfde3 extends Twig_Template
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
        $__internal_94c0991f1a25c6487263de669ac1b850d39778aad42c5914028fe3ee0d9cde29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c0991f1a25c6487263de669ac1b850d39778aad42c5914028fe3ee0d9cde29->enter($__internal_94c0991f1a25c6487263de669ac1b850d39778aad42c5914028fe3ee0d9cde29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-configuration.twig"));

        // line 1
        $context["config_menu"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "menu.admin", array(), "array"), "get", array(0 => "config"), "method");
        // line 2
        $context["sub"] = array(0 => array("icon" => $this->getAttribute($this->getAttribute(        // line 4
($context["config_menu"] ?? null), "get", array(0 => "users"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 5
($context["config_menu"] ?? null), "get", array(0 => "users"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 6
($context["config_menu"] ?? null), "get", array(0 => "users"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 7
($context["config_menu"] ?? null), "get", array(0 => "users"), "method"), "permission", array())), 1 => array("icon" => $this->getAttribute($this->getAttribute(        // line 9
($context["config_menu"] ?? null), "get", array(0 => "config_main"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 10
($context["config_menu"] ?? null), "get", array(0 => "config_main"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 11
($context["config_menu"] ?? null), "get", array(0 => "config_main"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 12
($context["config_menu"] ?? null), "get", array(0 => "config_main"), "method"), "permission", array())), 2 => array("icon" => $this->getAttribute($this->getAttribute(        // line 14
($context["config_menu"] ?? null), "get", array(0 => "config_contenttypes"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 15
($context["config_menu"] ?? null), "get", array(0 => "config_contenttypes"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 16
($context["config_menu"] ?? null), "get", array(0 => "config_contenttypes"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 17
($context["config_menu"] ?? null), "get", array(0 => "config_contenttypes"), "method"), "permission", array())), 3 => array("icon" => $this->getAttribute($this->getAttribute(        // line 19
($context["config_menu"] ?? null), "get", array(0 => "config_taxonomy"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 20
($context["config_menu"] ?? null), "get", array(0 => "config_taxonomy"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 21
($context["config_menu"] ?? null), "get", array(0 => "config_taxonomy"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 22
($context["config_menu"] ?? null), "get", array(0 => "config_taxonomy"), "method"), "permission", array())), 4 => "-", 5 => array("icon" => $this->getAttribute($this->getAttribute(        // line 26
($context["config_menu"] ?? null), "get", array(0 => "config_menu"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 27
($context["config_menu"] ?? null), "get", array(0 => "config_menu"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 28
($context["config_menu"] ?? null), "get", array(0 => "config_menu"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 29
($context["config_menu"] ?? null), "get", array(0 => "config_menu"), "method"), "permission", array())), 6 => array("icon" => $this->getAttribute($this->getAttribute(        // line 31
($context["config_menu"] ?? null), "get", array(0 => "config_routing"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 32
($context["config_menu"] ?? null), "get", array(0 => "config_routing"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 33
($context["config_menu"] ?? null), "get", array(0 => "config_routing"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 34
($context["config_menu"] ?? null), "get", array(0 => "config_routing"), "method"), "permission", array())), 7 => "-", 8 => array("icon" => $this->getAttribute($this->getAttribute(        // line 38
($context["config_menu"] ?? null), "get", array(0 => "dbcheck"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 39
($context["config_menu"] ?? null), "get", array(0 => "dbcheck"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 40
($context["config_menu"] ?? null), "get", array(0 => "dbcheck"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 41
($context["config_menu"] ?? null), "get", array(0 => "dbcheck"), "method"), "permission", array())), 9 => array("icon" => $this->getAttribute($this->getAttribute(        // line 43
($context["config_menu"] ?? null), "get", array(0 => "clearcache"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 44
($context["config_menu"] ?? null), "get", array(0 => "clearcache"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 45
($context["config_menu"] ?? null), "get", array(0 => "clearcache"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 46
($context["config_menu"] ?? null), "get", array(0 => "clearcache"), "method"), "permission", array())), 10 => array("icon" => $this->getAttribute($this->getAttribute(        // line 48
($context["config_menu"] ?? null), "get", array(0 => "log_change"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 49
($context["config_menu"] ?? null), "get", array(0 => "log_change"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 50
($context["config_menu"] ?? null), "get", array(0 => "log_change"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 51
($context["config_menu"] ?? null), "get", array(0 => "log_change"), "method"), "permission", array())), 11 => array("icon" => $this->getAttribute($this->getAttribute(        // line 53
($context["config_menu"] ?? null), "get", array(0 => "log_system"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 54
($context["config_menu"] ?? null), "get", array(0 => "log_system"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 55
($context["config_menu"] ?? null), "get", array(0 => "log_system"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 56
($context["config_menu"] ?? null), "get", array(0 => "log_system"), "method"), "permission", array())));
        // line 59
        echo "
";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nav"] ?? null), "submenu", array(0 => "fa:cogs", 1 => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.configuration"), 2 => ($context["sub"] ?? null), 3 => (($context["page_nav"] ?? null) == "Settings/Configuration")), "method"), "html", null, true);
        echo "
";
        
        $__internal_94c0991f1a25c6487263de669ac1b850d39778aad42c5914028fe3ee0d9cde29->leave($__internal_94c0991f1a25c6487263de669ac1b850d39778aad42c5914028fe3ee0d9cde29_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-configuration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 60,  66 => 59,  64 => 56,  63 => 55,  62 => 54,  61 => 53,  60 => 51,  59 => 50,  58 => 49,  57 => 48,  56 => 46,  55 => 45,  54 => 44,  53 => 43,  52 => 41,  51 => 40,  50 => 39,  49 => 38,  48 => 34,  47 => 33,  46 => 32,  45 => 31,  44 => 29,  43 => 28,  42 => 27,  41 => 26,  40 => 22,  39 => 21,  38 => 20,  37 => 19,  36 => 17,  35 => 16,  34 => 15,  33 => 14,  32 => 12,  31 => 11,  30 => 10,  29 => 9,  28 => 7,  27 => 6,  26 => 5,  25 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set config_menu = app['menu.admin'].get('config') %}
{% set sub = [
    {
        icon: config_menu.get('users').icon,
        label: config_menu.get('users').label,
        link: config_menu.get('users').uri,
        isallowed: config_menu.get('users').permission
    }, {
        icon: config_menu.get('config_main').icon,
        label: config_menu.get('config_main').label,
        link: config_menu.get('config_main').uri,
        isallowed: config_menu.get('config_main').permission
    }, {
        icon: config_menu.get('config_contenttypes').icon,
        label: config_menu.get('config_contenttypes').label,
        link: config_menu.get('config_contenttypes').uri,
        isallowed: config_menu.get('config_contenttypes').permission
    }, {
        icon: config_menu.get('config_taxonomy').icon,
        label: config_menu.get('config_taxonomy').label,
        link: config_menu.get('config_taxonomy').uri,
        isallowed: config_menu.get('config_taxonomy').permission
    },
    '-',
    {
        icon: config_menu.get('config_menu').icon,
        label: config_menu.get('config_menu').label,
        link: config_menu.get('config_menu').uri,
        isallowed: config_menu.get('config_menu').permission
    }, {
        icon: config_menu.get('config_routing').icon,
        label: config_menu.get('config_routing').label,
        link: config_menu.get('config_routing').uri,
        isallowed: config_menu.get('config_routing').permission
    },
    '-',
    {
        icon: config_menu.get('dbcheck').icon,
        label: config_menu.get('dbcheck').label,
        link: config_menu.get('dbcheck').uri,
        isallowed: config_menu.get('dbcheck').permission
    }, {
        icon: config_menu.get('clearcache').icon,
        label: config_menu.get('clearcache').label,
        link: config_menu.get('clearcache').uri,
        isallowed: config_menu.get('clearcache').permission
    }, {
        icon: config_menu.get('log_change').icon,
        label: config_menu.get('log_change').label,
        link: config_menu.get('log_change').uri,
        isallowed: config_menu.get('log_change').permission
    }, {
        icon: config_menu.get('log_system').icon,
        label: config_menu.get('log_system').label,
        link: config_menu.get('log_system').uri,
        isallowed: config_menu.get('log_system').permission
    }
] %}

{{ nav.submenu('fa:cogs', __('general.phrase.configuration'), sub, (page_nav == 'Settings/Configuration')) }}
", "@bolt/_nav/_secondary-configuration.twig", "");
    }
}
