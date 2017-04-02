<?php

/* @bolt/_base/_page-nav.twig */
class __TwigTemplate_7a4f3c86a5c3f67e0cf4c17d90c01b742c870e3945a8d59251e622ffb25f920c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("@bolt/_base/_page.twig", "@bolt/_base/_page-nav.twig", 10);
        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
            'page_main_extra_content' => array($this, 'block_page_main_extra_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c68d9f15bdf374cbe2736e07de5f19678ce5cdb32d232f0a72264551005ba6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c68d9f15bdf374cbe2736e07de5f19678ce5cdb32d232f0a72264551005ba6b->enter($__internal_3c68d9f15bdf374cbe2736e07de5f19678ce5cdb32d232f0a72264551005ba6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_page-nav.twig"));

        // line 12
        $context["page_bodyclass"] = "";
        // line 14
        $context["page_hasnav"] = true;
        // line 16
        $context["page_nav"] = _twig_default_filter(        $this->renderBlock("page_nav", $context, $blocks), "NO NAV");
        // line 10
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c68d9f15bdf374cbe2736e07de5f19678ce5cdb32d232f0a72264551005ba6b->leave($__internal_3c68d9f15bdf374cbe2736e07de5f19678ce5cdb32d232f0a72264551005ba6b_prof);

    }

    // line 18
    public function block_page_plain($context, array $blocks = array())
    {
        $__internal_05e1d96da50caf2c01079ac7140a0f2c764b3642dbad33be513ca9202a2850ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e1d96da50caf2c01079ac7140a0f2c764b3642dbad33be513ca9202a2850ed->enter($__internal_05e1d96da50caf2c01079ac7140a0f2c764b3642dbad33be513ca9202a2850ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_plain"));

        // line 19
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("omnisearch.placeholder", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.find")), "html", null, true);
        echo "

    <div id=\"navpage-wrapper\"";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "cookies", array()), "get", array(0 => "sidebar"), "method")) {
            echo " class=\"nav-secondary-collapsed nav-secondary-collapsed-hoverable\"";
        }
        echo ">
        <nav id=\"navpage-primary\" class=\"navbar navbar-static-top navbar-inverse navbar-bolt\">
            <div class=\"container-fluid\">
                ";
        // line 24
        echo twig_include($this->env, $context, "@bolt/_nav/_primary.twig");
        echo "
            </div>
        </nav>

        <nav id=\"navpage-secondary\" class=\"navbar-default navbar-static-side\">
            ";
        // line 29
        echo twig_include($this->env, $context, "@bolt/_nav/_secondary.twig");
        echo "
        </nav>

        <div id=\"navpage-content\" class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <h1 class=\"page-header\">
                        ";
        // line 36
        if (twig_test_empty(        $this->renderBlock("page_subtitle", $context, $blocks))) {
            // line 37
            echo "                            <strong>";
            $this->displayBlock("page_title", $context, $blocks);
            echo "</strong>
                        ";
        } else {
            // line 39
            echo "                            <strong>";
            $this->displayBlock("page_title", $context, $blocks);
            echo " »</strong>
                            <i style=\"font-style: normal;\">";
            // line 40
            $this->displayBlock("page_subtitle", $context, $blocks);
            echo "</i>
                        ";
        }
        // line 42
        echo "
                        ";
        // line 44
        echo "                        ";
        if (array_key_exists("pager", $context)) {
            // line 45
            echo "                            ";
            $context["pager_ct"] = $this->getAttribute(($context["pager"] ?? null), $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array()), array(), "array");
            // line 46
            echo "                            ";
            if ((($context["pager_ct"] ?? null) && ($this->getAttribute(($context["pager_ct"] ?? null), "totalpages", array()) > 1))) {
                // line 47
                echo "                                <span>
                                    ";
                // line 48
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.showing");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pager_ct"] ?? null), "showing_from", array()), "html", null, true);
                echo " -
                                    ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pager_ct"] ?? null), "showing_to", array()), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.of");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pager_ct"] ?? null), "count", array()), "html", null, true);
                echo "
                                </span>
                            ";
            }
            // line 52
            echo "                        ";
        }
        // line 53
        echo "
                    </h1>
                </div>
            </div>

            ";
        // line 58
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("below_header", "backend");
        echo "

            ";
        // line 60
        $this->displayBlock('messages', $context, $blocks);
        // line 63
        echo "
            ";
        // line 64
        $this->displayBlock('page_main', $context, $blocks);
        // line 65
        echo "
            ";
        // line 66
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("footer", "backend");
        echo "

        </div>

        ";
        // line 70
        $this->displayBlock('page_main_extra_content', $context, $blocks);
        // line 72
        echo "
    </div>

    ";
        // line 76
        echo "    ";
        echo twig_include($this->env, $context, "@bolt/_nav/_footer.twig");
        echo "

";
        
        $__internal_05e1d96da50caf2c01079ac7140a0f2c764b3642dbad33be513ca9202a2850ed->leave($__internal_05e1d96da50caf2c01079ac7140a0f2c764b3642dbad33be513ca9202a2850ed_prof);

    }

    // line 60
    public function block_messages($context, array $blocks = array())
    {
        $__internal_d59ea908b0bba84e36ee7d09fe678c9bc0ba3251f5e8352bd2dc833f09aa8b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59ea908b0bba84e36ee7d09fe678c9bc0ba3251f5e8352bd2dc833f09aa8b64->enter($__internal_d59ea908b0bba84e36ee7d09fe678c9bc0ba3251f5e8352bd2dc833f09aa8b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 61
        echo "                ";
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig", array("wrapper" => true));
        echo "
            ";
        
        $__internal_d59ea908b0bba84e36ee7d09fe678c9bc0ba3251f5e8352bd2dc833f09aa8b64->leave($__internal_d59ea908b0bba84e36ee7d09fe678c9bc0ba3251f5e8352bd2dc833f09aa8b64_prof);

    }

    // line 64
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_021d7bfea03246ef92c359aec372941d5d6b14310d7cf8bdecc074dbcb11418a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021d7bfea03246ef92c359aec372941d5d6b14310d7cf8bdecc074dbcb11418a->enter($__internal_021d7bfea03246ef92c359aec372941d5d6b14310d7cf8bdecc074dbcb11418a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        echo "[PAGE_MAIN]";
        
        $__internal_021d7bfea03246ef92c359aec372941d5d6b14310d7cf8bdecc074dbcb11418a->leave($__internal_021d7bfea03246ef92c359aec372941d5d6b14310d7cf8bdecc074dbcb11418a_prof);

    }

    // line 70
    public function block_page_main_extra_content($context, array $blocks = array())
    {
        $__internal_617fea33085e7de8edf5753d6dba0c9035b5c2ae6cd1c936b3a18c6575dcbdf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617fea33085e7de8edf5753d6dba0c9035b5c2ae6cd1c936b3a18c6575dcbdf3->enter($__internal_617fea33085e7de8edf5753d6dba0c9035b5c2ae6cd1c936b3a18c6575dcbdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main_extra_content"));

        // line 71
        echo "        ";
        
        $__internal_617fea33085e7de8edf5753d6dba0c9035b5c2ae6cd1c936b3a18c6575dcbdf3->leave($__internal_617fea33085e7de8edf5753d6dba0c9035b5c2ae6cd1c936b3a18c6575dcbdf3_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_page-nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 71,  209 => 70,  197 => 64,  187 => 61,  181 => 60,  170 => 76,  165 => 72,  163 => 70,  156 => 66,  153 => 65,  151 => 64,  148 => 63,  146 => 60,  141 => 58,  134 => 53,  131 => 52,  121 => 49,  115 => 48,  112 => 47,  109 => 46,  106 => 45,  103 => 44,  100 => 42,  95 => 40,  90 => 39,  84 => 37,  82 => 36,  72 => 29,  64 => 24,  56 => 21,  50 => 19,  44 => 18,  37 => 10,  35 => 16,  33 => 14,  31 => 12,  11 => 10,);
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
 # HTML page template for pages with navigation
 #
 # Blocks: page_nav:      Navigation path, like: \"Dashboard\", \"Settings/Configuration\", \"Content/*\", ...
 #         page_main:     content
 #         page_title:    used as html title
 #         page_subtitle: used as html title (optional)
 #         page_script:   script added after the body tag (script tags needed!)
 #}
{% extends '@bolt/_base/_page.twig' %}

{% set page_bodyclass = '' %}

{% set page_hasnav = true %}

{% set page_nav = block('page_nav')|default('NO NAV') %}

{% block page_plain %}
    {{ data('omnisearch.placeholder', __('general.phrase.find')) }}

    <div id=\"navpage-wrapper\"{% if app.request.cookies.get('sidebar') %} class=\"nav-secondary-collapsed nav-secondary-collapsed-hoverable\"{% endif %}>
        <nav id=\"navpage-primary\" class=\"navbar navbar-static-top navbar-inverse navbar-bolt\">
            <div class=\"container-fluid\">
                {{ include('@bolt/_nav/_primary.twig') }}
            </div>
        </nav>

        <nav id=\"navpage-secondary\" class=\"navbar-default navbar-static-side\">
            {{ include('@bolt/_nav/_secondary.twig') }}
        </nav>

        <div id=\"navpage-content\" class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <h1 class=\"page-header\">
                        {% if block('page_subtitle') is empty %}
                            <strong>{{ block('page_title') }}</strong>
                        {% else %}
                            <strong>{{ block('page_title') }} »</strong>
                            <i style=\"font-style: normal;\">{{ block('page_subtitle') }}</i>
                        {% endif %}

                        {# optional \"showing 1-X of Y\" for overview pages. #}
                        {% if pager is defined %}
                            {% set pager_ct = pager[context.contenttype.slug] %}
                            {% if pager_ct and pager_ct.totalpages > 1 %}
                                <span>
                                    {{ __('general.phrase.showing') }} {{ pager_ct.showing_from }} -
                                    {{ pager_ct.showing_to }} {{ __('general.phrase.of') }} {{ pager_ct.count }}
                                </span>
                            {% endif %}
                        {% endif %}

                    </h1>
                </div>
            </div>

            {{ widgets('below_header', 'backend') }}

            {% block messages %}
                {{ include('@bolt/_sub/_messages.twig', {'wrapper': true}) }}
            {% endblock messages %}

            {% block page_main %}[PAGE_MAIN]{% endblock page_main %}

            {{ widgets('footer', 'backend') }}

        </div>

        {% block page_main_extra_content %}
        {% endblock %}

    </div>

    {# Note: We include the footer here, because of z-index issues otherwise. #}
    {{ include('@bolt/_nav/_footer.twig') }}

{% endblock page_plain %}
", "@bolt/_base/_page-nav.twig", "");
    }
}
