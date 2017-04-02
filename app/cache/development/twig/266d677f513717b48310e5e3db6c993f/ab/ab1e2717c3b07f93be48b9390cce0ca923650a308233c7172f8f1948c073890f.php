<?php

/* @bolt/activity/systemlog.twig */
class __TwigTemplate_3c529699bd6f0048fbd547ce9f123ca8a44a3b7b64047ef1c5587b86a7387d48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/activity/systemlog.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df8cc52bba51e2815492ec3f1eae857a438fb7af46e72e888bb53b8c99eb4ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8cc52bba51e2815492ec3f1eae857a438fb7af46e72e888bb53b8c99eb4ea7->enter($__internal_df8cc52bba51e2815492ec3f1eae857a438fb7af46e72e888bb53b8c99eb4ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/activity/systemlog.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df8cc52bba51e2815492ec3f1eae857a438fb7af46e72e888bb53b8c99eb4ea7->leave($__internal_df8cc52bba51e2815492ec3f1eae857a438fb7af46e72e888bb53b8c99eb4ea7_prof);

    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_cb9bc91afb40b40fec2d94511b71e4561a2f4dc0680176346955e4fdd539f5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9bc91afb40b40fec2d94511b71e4561a2f4dc0680176346955e4fdd539f5c6->enter($__internal_cb9bc91afb40b40fec2d94511b71e4561a2f4dc0680176346955e4fdd539f5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo "Settings/Configuration";
        
        $__internal_cb9bc91afb40b40fec2d94511b71e4561a2f4dc0680176346955e4fdd539f5c6->leave($__internal_cb9bc91afb40b40fec2d94511b71e4561a2f4dc0680176346955e4fdd539f5c6_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2f888f7a6d0eec5e6a73215ddd95932b2f59a65d7514ab6804a150236c562b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f888f7a6d0eec5e6a73215ddd95932b2f59a65d7514ab6804a150236c562b2b->enter($__internal_2f888f7a6d0eec5e6a73215ddd95932b2f59a65d7514ab6804a150236c562b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("logs.system-log");
        
        $__internal_2f888f7a6d0eec5e6a73215ddd95932b2f59a65d7514ab6804a150236c562b2b->leave($__internal_2f888f7a6d0eec5e6a73215ddd95932b2f59a65d7514ab6804a150236c562b2b_prof);

    }

    // line 9
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_bf7529817c1ccb17929c871ae746a74d26cff3d0cfa67a268d1fd1c699b1bb99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7529817c1ccb17929c871ae746a74d26cff3d0cfa67a268d1fd1c699b1bb99->enter($__internal_bf7529817c1ccb17929c871ae746a74d26cff3d0cfa67a268d1fd1c699b1bb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 10
        echo "
    ";
        // line 11
        $context["__internal_91f2af063b0bd8db295dc5130233a186a5b6f5c1190d01f6bb03983720819cf0"] = $this->loadTemplate("@bolt/_macro/_pager.twig", "@bolt/activity/systemlog.twig", 11);
        // line 12
        echo "    ";
        $context["__internal_57db96e141afc752aa9f094bad2265589e11edbb26c1679b96031194aab3610b"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/activity/systemlog.twig", 12);
        // line 13
        echo "    ";
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/activity/systemlog.twig", 13);
        // line 14
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">

            <form class=\"form-inline\">
                <div class=\"form-group\">
                    <select class=\"form-control\" name=\"level\" id=\"level\">
                        <option value=\"\">-- Level --</option>
                        <option value=\"100\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->logLevel(100), "html", null, true);
        echo "</option>
                        <option value=\"200\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->logLevel(200), "html", null, true);
        echo "</option>
                        <option value=\"250\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->logLevel(250), "html", null, true);
        echo "</option>
                        <option value=\"300\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->logLevel(300), "html", null, true);
        echo "</option>
                        <option value=\"400\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->logLevel(400), "html", null, true);
        echo "</option>
                        <option value=\"500\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->logLevel(500), "html", null, true);
        echo "</option>
                        <option value=\"550\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->logLevel(550), "html", null, true);
        echo "</option>
                        <option value=\"600\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->logLevel(600), "html", null, true);
        echo "</option>
                    </select>
                </div>

                <div class=\"form-group\">
                    <select class=\"form-control\" name=\"context\" id=\"context\">
                        <option value=\"\">-- Context --</option>
                        <option value=\"authentication\">authentication</option>
                        <option value=\"config\">config</option>
                        <option value=\"content\">content</option>
                        <option value=\"cron\">cron</option>
                        <option value=\"deprecated\">deprecated</option>
                        <option value=\"exception\">exception</option>
                        <option value=\"news\">news</option>
                        <option value=\"nut\">nut</option>
                        <option value=\"security\">security</option>
                        <option value=\"storage\">storage</option>
                        <option value=\"template\">template</option>
                        <option value=\"translation\">translation</option>
                        <option value=\"twig\">twig</option>
                        <option value=\"upload\">upload</option>
                    </select>
                </div>

                <button type=\"submit\" class=\"btn btn-secondary\"> <!-- href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("systemlog", array("action" => "trim"));
        echo "\"> -->
                    <i class=\"fa fa-filter\"></i> ";
        // line 54
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.filter");
        echo "
                </button>

                <div class=\"btn-group pull-right\" style=\"padding-bottom: 12px\">
                    <a class=\"btn btn-default\" href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("systemlog", array("action" => "trim"));
        echo "\">
                        <i class=\"fa fa-trash-o\"></i> ";
        // line 59
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.log-system-trim");
        echo "
                    </a>
                    <a class=\"btn btn-default confirm\" href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("systemlog", array("action" => "clear"));
        echo "\" data-confirm=\"Are you sure you want to clear the system logs?\">
                        <i class=\"fa fa-trash\"></i> ";
        // line 62
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.clear-system-log");
        echo "
                    </a>
                </div>
            </form>

            <table class=\"table table-striped dashboardlisting\">
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Type</th>
                        <th>Context</th>
                        <th>Route</th>
                        <th>URI / Details</th>
                        <th>User / IP / Date</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "entries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 80
            echo "                    <tr>
                        <td>
                            ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->logLevel($this->getAttribute($context["entry"], "level", array())), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "context", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "route", array()), "html", null, true);
            echo "
                        </td>
                        <td>

                            ";
            // line 95
            echo $this->getAttribute($context["entry"], "message", array());
            echo " <a onclick=\"\$(this).hide(); \$('#trace-source-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "').removeClass('hide');\" class=\"btn btn-default btn-xs\"><i class=\"fa fa-bug\"></i> Source</a> <br>

                            <span id=\"trace-source-";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "\" class=\"hide\">
                            ";
            // line 98
            if ($this->getAttribute($context["entry"], "requesturi", array())) {
                // line 99
                echo "                               <span class=\"dim\"><strong>URI:</strong> <code>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "requesturi", array()), "html", null, true);
                echo "</code></span><br>
                            ";
            }
            // line 101
            echo "                            ";
            if ($this->getAttribute($context["entry"], "source", array())) {
                // line 102
                echo "                               <span class=\"dim\"><strong>Source:</strong> <code>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "source", array()), "file", array()), "html", null, true);
                echo " :: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "source", array()), "line", array()), "html", null, true);
                echo " </code></span>
                            ";
            }
            // line 104
            echo "                            </span>
                        </td>
                        <td class=\"username\">
                            ";
            // line 107
            echo $context["macro"]->getuserlink($this->getAttribute($context["entry"], "ownerid", array()));
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "ip", array()), "html", null, true);
            echo " <br>
                            ";
            // line 108
            echo $context["__internal_57db96e141afc752aa9f094bad2265589e11edbb26c1679b96031194aab3610b"]->getbuic_moment($this->getAttribute($context["entry"], "date", array()));
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                </tbody>
            </table>

            ";
        // line 115
        echo $context["__internal_91f2af063b0bd8db295dc5130233a186a5b6f5c1190d01f6bb03983720819cf0"]->getpager();
        echo "

        </div>
    </div>

";
        
        $__internal_bf7529817c1ccb17929c871ae746a74d26cff3d0cfa67a268d1fd1c699b1bb99->leave($__internal_bf7529817c1ccb17929c871ae746a74d26cff3d0cfa67a268d1fd1c699b1bb99_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/activity/systemlog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 115,  270 => 112,  260 => 108,  254 => 107,  249 => 104,  241 => 102,  238 => 101,  232 => 99,  230 => 98,  226 => 97,  219 => 95,  212 => 91,  206 => 88,  200 => 85,  194 => 82,  190 => 80,  186 => 79,  166 => 62,  162 => 61,  157 => 59,  153 => 58,  146 => 54,  142 => 53,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  77 => 14,  74 => 13,  71 => 12,  69 => 11,  66 => 10,  60 => 9,  48 => 7,  36 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavSecondary > Dashboard > Configuration > System Log #}

{% extends '@bolt/_base/_page-nav.twig' %}

{% block page_nav 'Settings/Configuration' %}

{% block page_title __('logs.system-log') %}

{% block page_main %}

    {% from '@bolt/_macro/_pager.twig' import pager %}
    {% from '@bolt/_buic/_moment.twig' import buic_moment %}
    {% import '@bolt/_macro/_macro.twig' as macro %}

    <div class=\"row\">
        <div class=\"col-xs-12\">

            <form class=\"form-inline\">
                <div class=\"form-group\">
                    <select class=\"form-control\" name=\"level\" id=\"level\">
                        <option value=\"\">-- Level --</option>
                        <option value=\"100\">{{ 100|loglevel }}</option>
                        <option value=\"200\">{{ 200|loglevel }}</option>
                        <option value=\"250\">{{ 250|loglevel }}</option>
                        <option value=\"300\">{{ 300|loglevel }}</option>
                        <option value=\"400\">{{ 400|loglevel }}</option>
                        <option value=\"500\">{{ 500|loglevel }}</option>
                        <option value=\"550\">{{ 550|loglevel }}</option>
                        <option value=\"600\">{{ 600|loglevel }}</option>
                    </select>
                </div>

                <div class=\"form-group\">
                    <select class=\"form-control\" name=\"context\" id=\"context\">
                        <option value=\"\">-- Context --</option>
                        <option value=\"authentication\">authentication</option>
                        <option value=\"config\">config</option>
                        <option value=\"content\">content</option>
                        <option value=\"cron\">cron</option>
                        <option value=\"deprecated\">deprecated</option>
                        <option value=\"exception\">exception</option>
                        <option value=\"news\">news</option>
                        <option value=\"nut\">nut</option>
                        <option value=\"security\">security</option>
                        <option value=\"storage\">storage</option>
                        <option value=\"template\">template</option>
                        <option value=\"translation\">translation</option>
                        <option value=\"twig\">twig</option>
                        <option value=\"upload\">upload</option>
                    </select>
                </div>

                <button type=\"submit\" class=\"btn btn-secondary\"> <!-- href=\"{{ path('systemlog', {'action': 'trim'}) }}\"> -->
                    <i class=\"fa fa-filter\"></i> {{ __('general.phrase.filter') }}
                </button>

                <div class=\"btn-group pull-right\" style=\"padding-bottom: 12px\">
                    <a class=\"btn btn-default\" href=\"{{ path('systemlog', {'action': 'trim'}) }}\">
                        <i class=\"fa fa-trash-o\"></i> {{ __('general.phrase.log-system-trim') }}
                    </a>
                    <a class=\"btn btn-default confirm\" href=\"{{ path('systemlog', {'action': 'clear'}) }}\" data-confirm=\"Are you sure you want to clear the system logs?\">
                        <i class=\"fa fa-trash\"></i> {{ __('general.phrase.clear-system-log') }}
                    </a>
                </div>
            </form>

            <table class=\"table table-striped dashboardlisting\">
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Type</th>
                        <th>Context</th>
                        <th>Route</th>
                        <th>URI / Details</th>
                        <th>User / IP / Date</th>
                    </tr>
                </thead>
                <tbody>
                {% for entry in context.entries %}
                    <tr>
                        <td>
                            {{ entry.id }}
                        </td>
                        <td>
                            {{ entry.level|loglevel }}
                        </td>
                        <td>
                            {{ entry.context }}
                        </td>
                        <td>
                            {{ entry.route }}
                        </td>
                        <td>

                            {{ entry.message|raw }} <a onclick=\"\$(this).hide(); \$('#trace-source-{{ entry.id }}').removeClass('hide');\" class=\"btn btn-default btn-xs\"><i class=\"fa fa-bug\"></i> Source</a> <br>

                            <span id=\"trace-source-{{ entry.id }}\" class=\"hide\">
                            {% if entry.requesturi %}
                               <span class=\"dim\"><strong>URI:</strong> <code>{{ entry.requesturi }}</code></span><br>
                            {% endif %}
                            {% if entry.source %}
                               <span class=\"dim\"><strong>Source:</strong> <code>{{ entry.source.file }} :: {{ entry.source.line }} </code></span>
                            {% endif %}
                            </span>
                        </td>
                        <td class=\"username\">
                            {{ macro.userlink(entry.ownerid) }} / {{ entry.ip }} <br>
                            {{ buic_moment(entry.date) }}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>

            {{ pager() }}

        </div>
    </div>

{% endblock page_main %}
", "@bolt/activity/systemlog.twig", "");
    }
}
