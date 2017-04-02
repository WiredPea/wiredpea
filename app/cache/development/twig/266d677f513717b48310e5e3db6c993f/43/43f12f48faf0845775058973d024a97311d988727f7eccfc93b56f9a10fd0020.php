<?php

/* @bolt/overview/overview.twig */
class __TwigTemplate_49164a13f0dce7ea2a34a80ee83c9d32219f4c4a3bf371183d8d19d044aefcbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/overview/overview.twig", 6);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3e8f49c03719d15244f07b88c92741d67c87416b46dda21568d649168db3afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e8f49c03719d15244f07b88c92741d67c87416b46dda21568d649168db3afe->enter($__internal_f3e8f49c03719d15244f07b88c92741d67c87416b46dda21568d649168db3afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/overview/overview.twig"));

        // line 3
        $context["__internal_530e655046292df9e065842dfd04a331301831ac839c2f54bd9f9c3342453c0c"] = $this->loadTemplate("@bolt/_sub/_record_list.twig", "@bolt/overview/overview.twig", 3);
        // line 4
        $context["panels"] = $this->loadTemplate("@bolt/_macro/_panels.twig", "@bolt/overview/overview.twig", 4);
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3e8f49c03719d15244f07b88c92741d67c87416b46dda21568d649168db3afe->leave($__internal_f3e8f49c03719d15244f07b88c92741d67c87416b46dda21568d649168db3afe_prof);

    }

    // line 8
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_da4db4a36693ac7ae29244092a467d1642d014f5072c7c7de4e3b30aeac0f147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4db4a36693ac7ae29244092a467d1642d014f5072c7c7de4e3b30aeac0f147->enter($__internal_da4db4a36693ac7ae29244092a467d1642d014f5072c7c7de4e3b30aeac0f147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo "Content/*";
        
        $__internal_da4db4a36693ac7ae29244092a467d1642d014f5072c7c7de4e3b30aeac0f147->leave($__internal_da4db4a36693ac7ae29244092a467d1642d014f5072c7c7de4e3b30aeac0f147_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c4ab1c59dccacb7a76cd023720f97a651fc5c427756b56b7cd391c1a3519e5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ab1c59dccacb7a76cd023720f97a651fc5c427756b56b7cd391c1a3519e5ec->enter($__internal_c4ab1c59dccacb7a76cd023720f97a651fc5c427756b56b7cd391c1a3519e5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.overview");
        
        $__internal_c4ab1c59dccacb7a76cd023720f97a651fc5c427756b56b7cd391c1a3519e5ec->leave($__internal_c4ab1c59dccacb7a76cd023720f97a651fc5c427756b56b7cd391c1a3519e5ec_prof);

    }

    // line 12
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_8fc8ffd9a6290b52a6dcb8130047ddba6b64426f50cfa1f9808645c31ddb6ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc8ffd9a6290b52a6dcb8130047ddba6b64426f50cfa1f9808645c31ddb6ae9->enter($__internal_8fc8ffd9a6290b52a6dcb8130047ddba6b64426f50cfa1f9808645c31ddb6ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "name", array())));
        echo "
    ";
        // line 14
        if ($this->getAttribute(($context["context"] ?? null), "filter", array())) {
            // line 15
            echo "        <small>(";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("filtered by <em>'%filter%'</em>", array("%filter%" => twig_join_filter($this->getAttribute(($context["context"] ?? null), "filter", array()), ", ")));
            echo ")</small>
    ";
        }
        
        $__internal_8fc8ffd9a6290b52a6dcb8130047ddba6b64426f50cfa1f9808645c31ddb6ae9->leave($__internal_8fc8ffd9a6290b52a6dcb8130047ddba6b64426f50cfa1f9808645c31ddb6ae9_prof);

    }

    // line 20
    public function block_messages($context, array $blocks = array())
    {
        $__internal_ef1001af02b0ade28b997764da0d329c2d51a1cca32f2f7fee8c7dcf1af809af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1001af02b0ade28b997764da0d329c2d51a1cca32f2f7fee8c7dcf1af809af->enter($__internal_ef1001af02b0ade28b997764da0d329c2d51a1cca32f2f7fee8c7dcf1af809af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        echo "";
        
        $__internal_ef1001af02b0ade28b997764da0d329c2d51a1cca32f2f7fee8c7dcf1af809af->leave($__internal_ef1001af02b0ade28b997764da0d329c2d51a1cca32f2f7fee8c7dcf1af809af_prof);

    }

    // line 22
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_150d3206bef77ac4a4303de71abb6b881f96058ac39c4f90f465e41b0d635fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150d3206bef77ac4a4303de71abb6b881f96058ac39c4f90f465e41b0d635fff->enter($__internal_150d3206bef77ac4a4303de71abb6b881f96058ac39c4f90f465e41b0d635fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 23
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 27
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig");
        echo "

            ";
        // line 29
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_below_header", "backend");
        echo "

            ";
        // line 31
        echo $context["__internal_530e655046292df9e065842dfd04a331301831ac839c2f54bd9f9c3342453c0c"]->getrecord_list($this->getAttribute(($context["context"] ?? null), "contenttype", array()), $this->getAttribute(($context["context"] ?? null), "multiplecontent", array()), $this->getAttribute(($context["context"] ?? null), "permissions", array()), "", "", twig_join_filter($this->getAttribute(($context["context"] ?? null), "filter", array()), " "));
        echo "

            ";
        // line 33
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_bottom", "backend");
        echo "

        </div>

        <aside class=\"col-md-4\">

            ";
        // line 39
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_aside_top", "backend");
        echo "

            ";
        // line 41
        echo twig_include($this->env, $context, "@bolt/overview/_panel-actions_overview.twig");
        echo "

            ";
        // line 43
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_aside_middle", "backend");
        echo "

            ";
        // line 45
        echo $context["panels"]->getlastmodified($this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array()));
        echo "

            ";
        // line 47
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_aside_bottom", "backend");
        echo "

        </aside>
    </div>

";
        
        $__internal_150d3206bef77ac4a4303de71abb6b881f96058ac39c4f90f465e41b0d635fff->leave($__internal_150d3206bef77ac4a4303de71abb6b881f96058ac39c4f90f465e41b0d635fff_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/overview/overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 47,  154 => 45,  149 => 43,  144 => 41,  139 => 39,  130 => 33,  125 => 31,  120 => 29,  115 => 27,  109 => 23,  103 => 22,  91 => 20,  80 => 15,  78 => 14,  73 => 13,  67 => 12,  55 => 10,  43 => 8,  36 => 6,  34 => 4,  32 => 3,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavSecondary > Content ... > #}

{% from '@bolt/_sub/_record_list.twig' import record_list as list %}
{% import '@bolt/_macro/_panels.twig' as panels %}

{% extends '@bolt/_base/_page-nav.twig' %}

{% block page_nav 'Content/*' %}

{% block page_title __('general.phrase.overview') %}

{% block page_subtitle %}
    {{ __(['contenttypes', context.contenttype.slug, 'name', 'plural'], {DEFAULT: context.contenttype.name}) }}
    {% if context.filter %}
        <small>({{ __(\"filtered by <em>'%filter%'</em>\", {'%filter%': context.filter|join(', ') }) }})</small>
    {% endif %}
{% endblock %}

{# clear default messages, because we use them in a different spot, in this template #}
{% block messages \"\" %}

{% block page_main %}

    <div class=\"row\">
        <div class=\"col-md-8\">

            {{ include('@bolt/_sub/_messages.twig') }}

            {{ widgets('overview_below_header', 'backend') }}

            {{ list(context.contenttype, context.multiplecontent, context.permissions, '', '', context.filter|join(' ')) }}

            {{ widgets('overview_bottom', 'backend') }}

        </div>

        <aside class=\"col-md-4\">

            {{ widgets('overview_aside_top', 'backend') }}

            {{ include('@bolt/overview/_panel-actions_overview.twig') }}

            {{ widgets('overview_aside_middle', 'backend') }}

            {{ panels.lastmodified(context.contenttype.slug) }}

            {{ widgets('overview_aside_bottom', 'backend') }}

        </aside>
    </div>

{% endblock page_main %}
", "@bolt/overview/overview.twig", "");
    }
}
