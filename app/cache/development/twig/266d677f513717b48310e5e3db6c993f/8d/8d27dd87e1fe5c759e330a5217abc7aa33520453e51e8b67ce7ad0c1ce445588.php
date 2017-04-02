<?php

/* @bolt/exception/exception.twig */
class __TwigTemplate_9fd8ba5d628e84a63296f02ff3db4290371583d8f845da02672670b8d37a83e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_main' => array($this, 'block_page_main'),
            'title' => array($this, 'block_title'),
            'exception' => array($this, 'block_exception'),
            'trace' => array($this, 'block_trace'),
            'request' => array($this, 'block_request'),
            'tracedumps' => array($this, 'block_tracedumps'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6698c7a1e5d6c772063b3a597924ab78e07fa1b28d4a28836a802499afd598c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6698c7a1e5d6c772063b3a597924ab78e07fa1b28d4a28836a802499afd598c4->enter($__internal_6698c7a1e5d6c772063b3a597924ab78e07fa1b28d4a28836a802499afd598c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/exception/exception.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>Uncaught Exception: ";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["exception"] ?? null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "class_name", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bolt.css", "bolt"), "html", null, true);
        echo "\">
    ";
        // line 11
        if ((($context["debug"] ?? null) && $this->getAttribute(($context["exception"] ?? null), "snippet", array(), "any", true, true))) {
            // line 12
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bolt_exception.css", "bolt"), "html", null, true);
            echo "\">
        <script src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js", "bolt"), "html", null, true);
            echo "\" defer></script>
        <script src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bolt_exception.js", "bolt"), "html", null, true);
            echo "\" defer></script>
    ";
        }
        // line 16
        echo "</head>

<body class=\"login exception\">

    ";
        // line 20
        $this->displayBlock('page_plain', $context, $blocks);
        // line 96
        echo "
</body>
</html>

";
        // line 100
        $this->displayBlock('tracedumps', $context, $blocks);
        
        $__internal_6698c7a1e5d6c772063b3a597924ab78e07fa1b28d4a28836a802499afd598c4->leave($__internal_6698c7a1e5d6c772063b3a597924ab78e07fa1b28d4a28836a802499afd598c4_prof);

    }

    // line 20
    public function block_page_plain($context, array $blocks = array())
    {
        $__internal_647abcc95565c1e9cfc374772bc405c309d3b492bb62f4b81be425e794dfc504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647abcc95565c1e9cfc374772bc405c309d3b492bb62f4b81be425e794dfc504->enter($__internal_647abcc95565c1e9cfc374772bc405c309d3b492bb62f4b81be425e794dfc504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plain"));

        // line 21
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"";
        // line 24
        echo twig_escape_filter($this->env, ((array_key_exists("form_class", $context)) ? (_twig_default_filter(($context["form_class"] ?? null), "col-md-10 col-md-offset-1 col-sm-12")) : ("col-md-10 col-md-offset-1 col-sm-12")), "html", null, true);
        echo "\">

                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bolt-logo.png", "bolt"), "html", null, true);
        echo "\" width=\"100\" height=\"41\" alt=\"Bolt\" class=\"logo\">

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 30
        $this->displayBlock('page_main', $context, $blocks);
        // line 89
        echo "                    </div>
                </div>

            </div>
        </div>
    </div>
    ";
        
        $__internal_647abcc95565c1e9cfc374772bc405c309d3b492bb62f4b81be425e794dfc504->leave($__internal_647abcc95565c1e9cfc374772bc405c309d3b492bb62f4b81be425e794dfc504_prof);

    }

    // line 30
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_5a654f2a1b3f598c4290d6b8646ae26057a03f1d2c642d6d340c1cdf91c98d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a654f2a1b3f598c4290d6b8646ae26057a03f1d2c642d6d340c1cdf91c98d85->enter($__internal_5a654f2a1b3f598c4290d6b8646ae26057a03f1d2c642d6d340c1cdf91c98d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 31
        echo "                        <div class=\"row\">
                            ";
        // line 33
        echo "
                            ";
        // line 34
        $this->displayBlock('title', $context, $blocks);
        // line 37
        echo "
                            ";
        // line 38
        $this->displayBlock('exception', $context, $blocks);
        // line 40
        echo "
                            <p class='exception'>
                                <tt><abbr title=\"";
        // line 42
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["exception"] ?? null), "class_fqn", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "class_fqn", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["exception"] ?? null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "class_name", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "</abbr></tt> in <tt>";
        if (($context["debug"] ?? null)) {
            echo "<abbr title=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["exception"] ?? null), "file_path", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "file_path", array()), "unknown")) : ("unknown")), "html", null, true);
            echo "\">";
        }
        // line 43
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["exception"] ?? null), "file_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "file_name", array()), "unknown")) : ("unknown")), "html", null, true);
        if (($context["debug"] ?? null)) {
            echo "</abbr>";
        }
        echo "</tt> line <tt>";
        // line 44
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "line", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "</tt>: <br>
                                <em><strong>";
        // line 45
        echo nl2br(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "message", array()), "unknown")) : ("unknown")), "html", null, true));
        echo "</strong></em>
                            </p>

                            ";
        // line 48
        if ((($context["debug"] ?? null) && $this->getAttribute(($context["exception"] ?? null), "snippet", array(), "any", true, true))) {
            // line 49
            echo "<pre class='line-numbers' data-start='";
            echo twig_escape_filter($this->env, max(($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array()), "line", array()) - 5), 1), "html", null, true);
            echo "' data-line='6'><code class='language-php'>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "snippet", array()), "html", null, true);
            // line 51
            echo "</code></pre>";
        }
        // line 53
        echo "
                            <p class='exception'>
                                ";
        // line 56
        echo "                                ";
        $context["query"] = ((((((("Bolt " . (($this->getAttribute(($context["exception"] ?? null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "class_name", array()), "unknown")) : ("unknown"))) . " in ") . (($this->getAttribute(($context["exception"] ?? null), "file_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "file_name", array()), "unknown")) : ("unknown"))) . " line ") . (($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "line", array()), "unknown")) : ("unknown"))) . ": ") . (($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["exception"] ?? null), "object", array(), "any", false, true), "message", array()), "unknown")) : ("unknown")));
        // line 57
        echo "                                <a class='btn btn-default' href='https://www.google.com/search?q=";
        echo twig_escape_filter($this->env, twig_urlencode_filter(($context["query"] ?? null)), "html", null, true);
        echo "' target='_blank'>Google this Exception</a>
                            </p>

                            ";
        // line 60
        $this->displayBlock('trace', $context, $blocks);
        // line 65
        echo "
                            <hr>

                            ";
        // line 68
        $this->displayBlock('request', $context, $blocks);
        // line 74
        echo "
                            ";
        // line 75
        if ( !($context["debug"] ?? null)) {
            // line 76
            echo "                                <p>Debug is not available, and/or you are not logged on. To see a full backtrace of the
                                    Exception, do one of the following: </p>

                                <ul>
                                    <li>Set <tt>debug: true</tt> in <tt>config.yml</tt>, and make sure you're logged in
                                        to the Bolt Backend.</li>
                                    <li>Set both <tt>debug: true</tt> and <tt>debug_show_loggedoff: true</tt> in
                                        <tt>config.yml</tt>.
                                </ul>
                            ";
        }
        // line 86
        echo "
                        </div>
                        ";
        
        $__internal_5a654f2a1b3f598c4290d6b8646ae26057a03f1d2c642d6d340c1cdf91c98d85->leave($__internal_5a654f2a1b3f598c4290d6b8646ae26057a03f1d2c642d6d340c1cdf91c98d85_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fe53ffaab2489014311d0e153e4dfe273964a0cc2e2d8c8bdc45bbddfb117e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe53ffaab2489014311d0e153e4dfe273964a0cc2e2d8c8bdc45bbddfb117e6->enter($__internal_1fe53ffaab2489014311d0e153e4dfe273964a0cc2e2d8c8bdc45bbddfb117e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 35
        echo "                                <h1>Uncaught Exception: ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["exception"] ?? null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["exception"] ?? null), "class_name", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "</h1>
                            ";
        
        $__internal_1fe53ffaab2489014311d0e153e4dfe273964a0cc2e2d8c8bdc45bbddfb117e6->leave($__internal_1fe53ffaab2489014311d0e153e4dfe273964a0cc2e2d8c8bdc45bbddfb117e6_prof);

    }

    // line 38
    public function block_exception($context, array $blocks = array())
    {
        $__internal_64413f0757047ba7b3622fbad57842bd9526bdbd7e1611cbb446565c940deb0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64413f0757047ba7b3622fbad57842bd9526bdbd7e1611cbb446565c940deb0f->enter($__internal_64413f0757047ba7b3622fbad57842bd9526bdbd7e1611cbb446565c940deb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "exception"));

        // line 39
        echo "                            ";
        
        $__internal_64413f0757047ba7b3622fbad57842bd9526bdbd7e1611cbb446565c940deb0f->leave($__internal_64413f0757047ba7b3622fbad57842bd9526bdbd7e1611cbb446565c940deb0f_prof);

    }

    // line 60
    public function block_trace($context, array $blocks = array())
    {
        $__internal_8be1844698d5b2bf61304dfa66ef3a97e726fc25c8c22b9481593337712b8284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be1844698d5b2bf61304dfa66ef3a97e726fc25c8c22b9481593337712b8284->enter($__internal_8be1844698d5b2bf61304dfa66ef3a97e726fc25c8c22b9481593337712b8284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "trace"));

        // line 61
        echo "                                ";
        if (($context["debug"] ?? null)) {
            // line 62
            echo "                                    ";
            echo twig_include($this->env, $context, "@bolt/exception/_trace.twig");
            echo "
                                ";
        }
        // line 64
        echo "                            ";
        
        $__internal_8be1844698d5b2bf61304dfa66ef3a97e726fc25c8c22b9481593337712b8284->leave($__internal_8be1844698d5b2bf61304dfa66ef3a97e726fc25c8c22b9481593337712b8284_prof);

    }

    // line 68
    public function block_request($context, array $blocks = array())
    {
        $__internal_2e0194af09b173464baf2f7bacc4ad10c1e92d97400507689e53aee251c53f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0194af09b173464baf2f7bacc4ad10c1e92d97400507689e53aee251c53f34->enter($__internal_2e0194af09b173464baf2f7bacc4ad10c1e92d97400507689e53aee251c53f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "request"));

        // line 69
        echo "                                ";
        if ((($context["debug"] ?? null) && array_key_exists("request", $context))) {
            // line 70
            echo "                                    <hr>
                                    ";
            // line 71
            echo twig_include($this->env, $context, "@bolt/exception/_request.twig");
            echo "
                                ";
        }
        // line 73
        echo "                            ";
        
        $__internal_2e0194af09b173464baf2f7bacc4ad10c1e92d97400507689e53aee251c53f34->leave($__internal_2e0194af09b173464baf2f7bacc4ad10c1e92d97400507689e53aee251c53f34_prof);

    }

    // line 100
    public function block_tracedumps($context, array $blocks = array())
    {
        $__internal_e780206bd03585b921844944ba2c6151dca119b73bf992f854f43394ef733053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e780206bd03585b921844944ba2c6151dca119b73bf992f854f43394ef733053->enter($__internal_e780206bd03585b921844944ba2c6151dca119b73bf992f854f43394ef733053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tracedumps"));

        // line 101
        echo "    ";
        if (($context["debug"] ?? null)) {
            // line 102
            echo "        ";
            echo twig_include($this->env, $context, "@bolt/exception/_tracedumps.twig");
            echo "
    ";
        }
        
        $__internal_e780206bd03585b921844944ba2c6151dca119b73bf992f854f43394ef733053->leave($__internal_e780206bd03585b921844944ba2c6151dca119b73bf992f854f43394ef733053_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/exception/exception.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 102,  312 => 101,  306 => 100,  299 => 73,  294 => 71,  291 => 70,  288 => 69,  282 => 68,  275 => 64,  269 => 62,  266 => 61,  260 => 60,  253 => 39,  247 => 38,  237 => 35,  231 => 34,  222 => 86,  210 => 76,  208 => 75,  205 => 74,  203 => 68,  198 => 65,  196 => 60,  189 => 57,  186 => 56,  182 => 53,  179 => 51,  177 => 50,  173 => 49,  171 => 48,  165 => 45,  161 => 44,  155 => 43,  145 => 42,  141 => 40,  139 => 38,  136 => 37,  134 => 34,  131 => 33,  128 => 31,  122 => 30,  109 => 89,  107 => 30,  100 => 26,  95 => 24,  90 => 21,  84 => 20,  77 => 100,  71 => 96,  69 => 20,  63 => 16,  58 => 14,  54 => 13,  49 => 12,  47 => 11,  43 => 10,  38 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>Uncaught Exception: {{ exception.class_name|default('unknown') }}</title>

    <link rel=\"stylesheet\" href=\"{{ asset('css/bolt.css', 'bolt') }}\">
    {% if debug and exception.snippet is defined %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bolt_exception.css', 'bolt') }}\">
        <script src=\"{{ asset('js/jquery-2.2.4.min.js', 'bolt') }}\" defer></script>
        <script src=\"{{ asset('js/bolt_exception.js', 'bolt') }}\" defer></script>
    {% endif %}
</head>

<body class=\"login exception\">

    {% block page_plain %}
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"{{ form_class|default('col-md-10 col-md-offset-1 col-sm-12') }}\">

                <img src=\"{{ asset('img/bolt-logo.png', 'bolt') }}\" width=\"100\" height=\"41\" alt=\"Bolt\" class=\"logo\">

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        {% block page_main %}
                        <div class=\"row\">
                            {# Note: Do not translate / localise this, because people _will_ google for this. #}

                            {% block title %}
                                <h1>Uncaught Exception: {{ exception.class_name|default('unknown') }}</h1>
                            {% endblock title %}

                            {% block exception %}
                            {% endblock exception %}

                            <p class='exception'>
                                <tt><abbr title=\"{{ exception.class_fqn|default('unknown') }}\">{{ exception.class_name|default('unknown') }}</abbr></tt> in <tt>{% if debug %}<abbr title=\"{{ exception.file_path|default('unknown') }}\">{% endif %}
                                {{- exception.file_name|default('unknown') }}{% if debug %}</abbr>{% endif %}</tt> line <tt>
                                {{- exception.object.line|default('unknown') }}</tt>: <br>
                                <em><strong>{{ exception.object.message|default('unknown')|nl2br }}</strong></em>
                            </p>

                            {% if debug and exception.snippet is defined -%}
<pre class='line-numbers' data-start='{{ max(exception.object.line - 5, 1) }}' data-line='6'><code class='language-php'>
{{- exception.snippet -}}
</code></pre>
                            {%- endif %}

                            <p class='exception'>
                                {# Based on this classic tweet: https://twitter.com/divineomega/status/695744177557106688 #}
                                {% set query = 'Bolt ' ~ exception.class_name|default('unknown') ~ ' in ' ~ exception.file_name|default('unknown') ~ ' line ' ~ exception.object.line|default('unknown') ~ ': ' ~ exception.object.message|default('unknown') %}
                                <a class='btn btn-default' href='https://www.google.com/search?q={{ query|url_encode }}' target='_blank'>Google this Exception</a>
                            </p>

                            {% block trace %}
                                {% if debug %}
                                    {{ include('@bolt/exception/_trace.twig') }}
                                {% endif %}
                            {% endblock trace %}

                            <hr>

                            {% block request %}
                                {% if debug and request is defined %}
                                    <hr>
                                    {{ include('@bolt/exception/_request.twig') }}
                                {% endif %}
                            {% endblock request %}

                            {% if not debug %}
                                <p>Debug is not available, and/or you are not logged on. To see a full backtrace of the
                                    Exception, do one of the following: </p>

                                <ul>
                                    <li>Set <tt>debug: true</tt> in <tt>config.yml</tt>, and make sure you're logged in
                                        to the Bolt Backend.</li>
                                    <li>Set both <tt>debug: true</tt> and <tt>debug_show_loggedoff: true</tt> in
                                        <tt>config.yml</tt>.
                                </ul>
                            {% endif %}

                        </div>
                        {% endblock page_main %}
                    </div>
                </div>

            </div>
        </div>
    </div>
    {% endblock page_plain %}

</body>
</html>

{% block tracedumps %}
    {% if debug %}
        {{ include('@bolt/exception/_tracedumps.twig') }}
    {% endif %}
{% endblock tracedumps %}
", "@bolt/exception/exception.twig", "");
    }
}
