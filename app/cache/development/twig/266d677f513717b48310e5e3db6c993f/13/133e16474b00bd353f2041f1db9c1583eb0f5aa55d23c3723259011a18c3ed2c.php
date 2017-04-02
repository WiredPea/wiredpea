<?php

/* @bolt/_base/_page-no_nav.twig */
class __TwigTemplate_d0b0287135dcae596af2e1ba72bfa5ed3f7600d06cdc6fb9df86c243f207840f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("@bolt/_base/_page.twig", "@bolt/_base/_page-no_nav.twig", 9);
        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84dd2bc244bf9730743bbb618d12995180046dfff8a1eb9516a86569f39cd88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84dd2bc244bf9730743bbb618d12995180046dfff8a1eb9516a86569f39cd88b->enter($__internal_84dd2bc244bf9730743bbb618d12995180046dfff8a1eb9516a86569f39cd88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_page-no_nav.twig"));

        // line 11
        $context["page_bodyclass"] = "login";
        // line 13
        $context["page_hasnav"] = false;
        // line 15
        $context["page_nav"] = "";
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84dd2bc244bf9730743bbb618d12995180046dfff8a1eb9516a86569f39cd88b->leave($__internal_84dd2bc244bf9730743bbb618d12995180046dfff8a1eb9516a86569f39cd88b_prof);

    }

    // line 17
    public function block_page_plain($context, array $blocks = array())
    {
        $__internal_12c7bc32426d8d0db77532f42260f812f1891c622d4631821697da0ea9ba863d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c7bc32426d8d0db77532f42260f812f1891c622d4631821697da0ea9ba863d->enter($__internal_12c7bc32426d8d0db77532f42260f812f1891c622d4631821697da0ea9ba863d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plain"));

        // line 18
        echo "
    <div class=\"container\">
        <div class=\"view-site\">
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-external-link-square\"></i> ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.view-site");
        echo "</a>
        </div>

        <div class=\"row\">
            <div class=\"";
        // line 25
        echo twig_escape_filter($this->env, ((array_key_exists("form_class", $context)) ? (_twig_default_filter(($context["form_class"] ?? null), "col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2")) : ("col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2")), "html", null, true);
        echo "\">

                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bolt-logo.png", "bolt"), "html", null, true);
        echo "\" width=\"150\" height=\"62\" alt=\"Bolt\" class=\"logo\">

                ";
        // line 29
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("login_top", "backend");
        echo "

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 33
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig");
        echo "
                        ";
        // line 34
        $this->displayBlock('page_main', $context, $blocks);
        // line 35
        echo "                    </div>
                </div>

                ";
        // line 38
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("login_middle", "backend");
        echo "

                ";
        // line 40
        if ((($this->getAttribute(($context["context"] ?? null), "randomquote", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "randomquote", array()), false)) : (false))) {
            // line 41
            echo "                    <blockquote class=\"quote\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->randomQuote();
            echo "</blockquote>
                ";
        }
        // line 43
        echo "
                ";
        // line 44
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("login_bottom", "backend");
        echo "

            </div>
        </div>
    </div>

";
        
        $__internal_12c7bc32426d8d0db77532f42260f812f1891c622d4631821697da0ea9ba863d->leave($__internal_12c7bc32426d8d0db77532f42260f812f1891c622d4631821697da0ea9ba863d_prof);

    }

    // line 34
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_a0b3e7fb263fac74809ea4d3377619079bc41f4ebcf49f7155f3cb8fd57e9d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b3e7fb263fac74809ea4d3377619079bc41f4ebcf49f7155f3cb8fd57e9d4d->enter($__internal_a0b3e7fb263fac74809ea4d3377619079bc41f4ebcf49f7155f3cb8fd57e9d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        echo "[PAGE_MAIN]";
        
        $__internal_a0b3e7fb263fac74809ea4d3377619079bc41f4ebcf49f7155f3cb8fd57e9d4d->leave($__internal_a0b3e7fb263fac74809ea4d3377619079bc41f4ebcf49f7155f3cb8fd57e9d4d_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_page-no_nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  106 => 44,  103 => 43,  97 => 41,  95 => 40,  90 => 38,  85 => 35,  83 => 34,  79 => 33,  72 => 29,  67 => 27,  62 => 25,  53 => 21,  48 => 18,  42 => 17,  35 => 9,  33 => 15,  31 => 13,  29 => 11,  11 => 9,);
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
 # HTML page template for pages without navigation
 #
 # Blocks: page_main:     content
 #         page_title:    used as html title
 #         page_subtitle: used as html title (optional)
 #         page_script:   script added after the body tag (script tags needed!)
 #}
{% extends '@bolt/_base/_page.twig' %}

{% set page_bodyclass = 'login' %}

{% set page_hasnav = false %}

{% set page_nav = '' %}

{% block page_plain %}

    <div class=\"container\">
        <div class=\"view-site\">
            <a href=\"{{ path('homepage') }}\" target=\"_blank\"><i class=\"fa fa-fw fa-external-link-square\"></i> {{ __('general.phrase.view-site') }}</a>
        </div>

        <div class=\"row\">
            <div class=\"{{ form_class|default('col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2') }}\">

                <img src=\"{{ asset('img/bolt-logo.png', 'bolt') }}\" width=\"150\" height=\"62\" alt=\"Bolt\" class=\"logo\">

                {{ widgets('login_top', 'backend') }}

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        {{ include('@bolt/_sub/_messages.twig') }}
                        {% block page_main %}[PAGE_MAIN]{% endblock page_main %}
                    </div>
                </div>

                {{ widgets('login_middle', 'backend') }}

                {% if context.randomquote|default(false) %}
                    <blockquote class=\"quote\">{{ randomquote() }}</blockquote>
                {% endif %}

                {{ widgets('login_bottom', 'backend') }}

            </div>
        </div>
    </div>

{% endblock page_plain %}
", "@bolt/_base/_page-no_nav.twig", "");
    }
}
