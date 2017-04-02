<?php

/* partials/_master.twig */
class __TwigTemplate_c909d2876bbf0a6b7e0683d03d7db58ccb67e65ad68ead41ffb0d866360c57a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headincludes' => array($this, 'block_headincludes'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'bottomincludes' => array($this, 'block_bottomincludes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_370f448248552d563a20e292524ace66b2c287c4157dc0ac7db97d0e5d148686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370f448248552d563a20e292524ace66b2c287c4157dc0ac7db97d0e5d148686->enter($__internal_370f448248552d563a20e292524ace66b2c287c4157dc0ac7db97d0e5d148686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_master.twig"));

        // line 1
        $context["main_width"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "layout", array(), "any", false, true), "main_width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "layout", array(), "any", false, true), "main_width", array()), 8)) : (8));
        // line 2
        $context["aside_width"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "layout", array(), "any", false, true), "aside_width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "layout", array(), "any", false, true), "aside_width", array()), 4)) : (4));
        // line 3
        echo "<!doctype html>
<html class=\"no-js\" lang=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->htmlLang(), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 11
        echo "        <title>";
        // line 12
        if ($this->getAttribute(($context["record"] ?? null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute(($context["record"] ?? null), "title", array())), "html", null, true);
            echo " | ";
        }
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        // line 14
        if (( !$this->getAttribute(($context["record"] ?? null), "title", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        }
        // line 15
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css", "theme"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme.css", "theme"), "html", null, true);
        echo "\">
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans:700,700italic' rel='stylesheet' type='text/css'>
        ";
        // line 19
        $this->displayBlock('headincludes', $context, $blocks);
        // line 21
        echo "    </head>
    <body>

        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "
        ";
        // line 62
        echo twig_include($this->env, $context, "partials/_footer.twig");
        echo "

        ";
        // line 64
        $this->displayBlock('bottomincludes', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
        
        $__internal_370f448248552d563a20e292524ace66b2c287c4157dc0ac7db97d0e5d148686->leave($__internal_370f448248552d563a20e292524ace66b2c287c4157dc0ac7db97d0e5d148686_prof);

    }

    // line 19
    public function block_headincludes($context, array $blocks = array())
    {
        $__internal_d73f92e2095db6ac5251b97c4dcb2a323ad6e127ec366124cc50ef1f10826319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73f92e2095db6ac5251b97c4dcb2a323ad6e127ec366124cc50ef1f10826319->enter($__internal_d73f92e2095db6ac5251b97c4dcb2a323ad6e127ec366124cc50ef1f10826319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headincludes"));

        // line 20
        echo "        ";
        
        $__internal_d73f92e2095db6ac5251b97c4dcb2a323ad6e127ec366124cc50ef1f10826319->leave($__internal_d73f92e2095db6ac5251b97c4dcb2a323ad6e127ec366124cc50ef1f10826319_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_456e7987a3a155fe97c4554f399cf0e5f0716d558d263b54a072d2a2bee2aa0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456e7987a3a155fe97c4554f399cf0e5f0716d558d263b54a072d2a2bee2aa0c->enter($__internal_456e7987a3a155fe97c4554f399cf0e5f0716d558d263b54a072d2a2bee2aa0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
            ";
        // line 26
        if (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "layout", array()), "variant", array()) != "wide")) {
            // line 27
            echo "                <div class=\"row\">
            ";
        }
        // line 29
        echo "
            ";
        // line 30
        echo twig_include($this->env, $context, "partials/_topbar.twig");
        echo "
            ";
        // line 31
        echo twig_include($this->env, $context, "partials/_header.twig");
        echo "

            ";
        // line 33
        if (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "layout", array()), "variant", array()) != "wide")) {
            // line 34
            echo "                </div>
            ";
        }
        // line 36
        echo "
            <div class=\"row\">

                ";
        // line 39
        if (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "layout", array()), "aside", array()) == "left")) {
            // line 40
            echo "                    ";
            echo twig_include($this->env, $context, "partials/_aside.twig");
            echo "
                ";
        }
        // line 42
        echo "
                <div class=\"";
        // line 43
        if (!twig_in_filter($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "layout", array()), "aside", array()), array(0 => "left", 1 => "right"))) {
            echo "large-centered";
        }
        echo " large-";
        echo twig_escape_filter($this->env, ($context["main_width"] ?? null), "html", null, true);
        echo " columns\">

                    ";
        // line 45
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("main_top");
        echo "

                    ";
        // line 47
        $this->displayBlock('main', $context, $blocks);
        // line 49
        echo "
                    ";
        // line 50
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("main_bottom");
        echo "

                </div>

                ";
        // line 54
        if (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "layout", array()), "aside", array()) == "right")) {
            // line 55
            echo "                    ";
            echo twig_include($this->env, $context, "partials/_aside.twig");
            echo "
                ";
        }
        // line 57
        echo "
            </div>

        ";
        
        $__internal_456e7987a3a155fe97c4554f399cf0e5f0716d558d263b54a072d2a2bee2aa0c->leave($__internal_456e7987a3a155fe97c4554f399cf0e5f0716d558d263b54a072d2a2bee2aa0c_prof);

    }

    // line 47
    public function block_main($context, array $blocks = array())
    {
        $__internal_20c6daaf39cac3c4f2f2c4c9c042c4b6eabbaea5905f899a9bf193125f16dc9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c6daaf39cac3c4f2f2c4c9c042c4b6eabbaea5905f899a9bf193125f16dc9c->enter($__internal_20c6daaf39cac3c4f2f2c4c9c042c4b6eabbaea5905f899a9bf193125f16dc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 48
        echo "                    ";
        
        $__internal_20c6daaf39cac3c4f2f2c4c9c042c4b6eabbaea5905f899a9bf193125f16dc9c->leave($__internal_20c6daaf39cac3c4f2f2c4c9c042c4b6eabbaea5905f899a9bf193125f16dc9c_prof);

    }

    // line 64
    public function block_bottomincludes($context, array $blocks = array())
    {
        $__internal_5efda0436eb98bbe721f76b407e174c632d2cc7b2a8e88958c63b2eac6926200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efda0436eb98bbe721f76b407e174c632d2cc7b2a8e88958c63b2eac6926200->enter($__internal_5efda0436eb98bbe721f76b407e174c632d2cc7b2a8e88958c63b2eac6926200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottomincludes"));

        // line 65
        echo "        ";
        
        $__internal_5efda0436eb98bbe721f76b407e174c632d2cc7b2a8e88958c63b2eac6926200->leave($__internal_5efda0436eb98bbe721f76b407e174c632d2cc7b2a8e88958c63b2eac6926200_prof);

    }

    public function getTemplateName()
    {
        return "partials/_master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 65,  214 => 64,  207 => 48,  201 => 47,  191 => 57,  185 => 55,  183 => 54,  176 => 50,  173 => 49,  171 => 47,  166 => 45,  157 => 43,  154 => 42,  148 => 40,  146 => 39,  141 => 36,  137 => 34,  135 => 33,  130 => 31,  126 => 30,  123 => 29,  119 => 27,  117 => 26,  114 => 25,  108 => 24,  101 => 20,  95 => 19,  86 => 66,  84 => 64,  79 => 62,  76 => 61,  74 => 24,  69 => 21,  67 => 19,  62 => 17,  58 => 16,  55 => 15,  50 => 14,  48 => 13,  43 => 12,  41 => 11,  33 => 4,  30 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set main_width = theme.layout.main_width|default(8) %}
{% set aside_width = theme.layout.aside_width|default(4) %}
<!doctype html>
<html class=\"no-js\" lang=\"{{ htmllang() }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        {# make sure we always display a proper title: The record's title if there is one, appended with the
           sitename. If there is no title, we append the sitename with the payoff, if there is one. #}
        <title>
            {%- if record.title is defined %}{{ record.title|striptags }} | {% endif -%}
                {{ app.config.get('general/sitename') -}}
            {% if record.title is not defined and app.config.get('general/payoff') %} | {{ app.config.get('general/payoff') }}{% endif -%}
        </title>
        <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css', 'theme') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/theme.css', 'theme') }}\">
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans:700,700italic' rel='stylesheet' type='text/css'>
        {% block headincludes %}
        {% endblock headincludes %}
    </head>
    <body>

        {% block body %}

            {% if theme.layout.variant != 'wide' %}
                <div class=\"row\">
            {% endif %}

            {{ include('partials/_topbar.twig') }}
            {{ include('partials/_header.twig') }}

            {% if theme.layout.variant != 'wide' %}
                </div>
            {% endif %}

            <div class=\"row\">

                {% if theme.layout.aside == \"left\" %}
                    {{ include('partials/_aside.twig') }}
                {% endif %}

                <div class=\"{% if theme.layout.aside not in ['left', 'right'] %}large-centered{% endif %} large-{{ main_width }} columns\">

                    {{ widgets('main_top') }}

                    {% block main %}
                    {% endblock main %}

                    {{ widgets('main_bottom') }}

                </div>

                {% if theme.layout.aside == \"right\" %}
                    {{ include('partials/_aside.twig') }}
                {% endif %}

            </div>

        {% endblock body %}

        {{ include('partials/_footer.twig') }}

        {% block bottomincludes %}
        {% endblock bottomincludes %}
    </body>
</html>
", "partials/_master.twig", "");
    }
}
