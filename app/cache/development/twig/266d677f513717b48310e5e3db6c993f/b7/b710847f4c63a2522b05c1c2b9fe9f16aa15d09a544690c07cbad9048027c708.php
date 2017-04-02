<?php

/* @bolt/_nav/_secondary-translations.twig */
class __TwigTemplate_382f90b3baf8fcbd37fa8289dc0f7b15f02354de043ac3a303ee952209a4bb6b extends Twig_Template
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
        $__internal_cb65c15d28150499d079ee700b5cb2e05491238738ab2ca83e8d7d332cb5f054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb65c15d28150499d079ee700b5cb2e05491238738ab2ca83e8d7d332cb5f054->enter($__internal_cb65c15d28150499d079ee700b5cb2e05491238738ab2ca83e8d7d332cb5f054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-translations.twig"));

        // line 1
        $context["tr_menu"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "menu.admin", array(), "array"), "get", array(0 => "translations"), "method");
        // line 2
        $context["sub"] = array(0 => array("icon" => $this->getAttribute($this->getAttribute(        // line 4
($context["tr_menu"] ?? null), "get", array(0 => "tr_messages"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 5
($context["tr_menu"] ?? null), "get", array(0 => "tr_messages"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 6
($context["tr_menu"] ?? null), "get", array(0 => "tr_messages"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 7
($context["tr_menu"] ?? null), "get", array(0 => "tr_messages"), "method"), "permission", array())), 1 => array("icon" => $this->getAttribute($this->getAttribute(        // line 9
($context["tr_menu"] ?? null), "get", array(0 => "tr_long_messages"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 10
($context["tr_menu"] ?? null), "get", array(0 => "tr_long_messages"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 11
($context["tr_menu"] ?? null), "get", array(0 => "tr_long_messages"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 12
($context["tr_menu"] ?? null), "get", array(0 => "tr_long_messages"), "method"), "permission", array())), 2 => array("icon" => $this->getAttribute($this->getAttribute(        // line 14
($context["tr_menu"] ?? null), "get", array(0 => "tr_contenttypes"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 15
($context["tr_menu"] ?? null), "get", array(0 => "tr_contenttypes"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 16
($context["tr_menu"] ?? null), "get", array(0 => "tr_contenttypes"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 17
($context["tr_menu"] ?? null), "get", array(0 => "tr_contenttypes"), "method"), "permission", array())));
        // line 20
        echo "
";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nav"] ?? null), "submenu", array(0 => "fa:flag", 1 => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.translations"), 2 => ($context["sub"] ?? null), 3 => (($context["page_nav"] ?? null) == "Settings/Translations")), "method"), "html", null, true);
        echo "
";
        
        $__internal_cb65c15d28150499d079ee700b5cb2e05491238738ab2ca83e8d7d332cb5f054->leave($__internal_cb65c15d28150499d079ee700b5cb2e05491238738ab2ca83e8d7d332cb5f054_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-translations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 21,  38 => 20,  36 => 17,  35 => 16,  34 => 15,  33 => 14,  32 => 12,  31 => 11,  30 => 10,  29 => 9,  28 => 7,  27 => 6,  26 => 5,  25 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set tr_menu = app['menu.admin'].get('translations') %}
{% set sub = [
    {
        icon: tr_menu.get('tr_messages').icon,
        label: tr_menu.get('tr_messages').label,
        link: tr_menu.get('tr_messages').uri,
        isallowed: tr_menu.get('tr_messages').permission
    }, {
        icon: tr_menu.get('tr_long_messages').icon,
        label: tr_menu.get('tr_long_messages').label,
        link: tr_menu.get('tr_long_messages').uri,
        isallowed: tr_menu.get('tr_long_messages').permission
    }, {
        icon: tr_menu.get('tr_contenttypes').icon,
        label: tr_menu.get('tr_contenttypes').label,
        link: tr_menu.get('tr_contenttypes').uri,
        isallowed: tr_menu.get('tr_contenttypes').permission
    }
] %}

{{ nav.submenu('fa:flag', __('general.phrase.translations'), sub, (page_nav == 'Settings/Translations')) }}
", "@bolt/_nav/_secondary-translations.twig", "");
    }
}
