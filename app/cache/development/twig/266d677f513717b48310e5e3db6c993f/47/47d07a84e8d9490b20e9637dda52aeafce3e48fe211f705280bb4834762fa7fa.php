<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b96e9564f5174c59a292963067a2927e9b23f6e16af709d9de54fb5f3671ac63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_757a818274d8b2ab9bf447bbbffd830f0628b7ed0175dd793e806b20d55a29e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757a818274d8b2ab9bf447bbbffd830f0628b7ed0175dd793e806b20d55a29e6->enter($__internal_757a818274d8b2ab9bf447bbbffd830f0628b7ed0175dd793e806b20d55a29e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_757a818274d8b2ab9bf447bbbffd830f0628b7ed0175dd793e806b20d55a29e6->leave($__internal_757a818274d8b2ab9bf447bbbffd830f0628b7ed0175dd793e806b20d55a29e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_02f4b1bf9c65d14117281ca5ca7fce0ea1b1ec1b0e227881daa22a227201ddc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f4b1bf9c65d14117281ca5ca7fce0ea1b1ec1b0e227881daa22a227201ddc1->enter($__internal_02f4b1bf9c65d14117281ca5ca7fce0ea1b1ec1b0e227881daa22a227201ddc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_02f4b1bf9c65d14117281ca5ca7fce0ea1b1ec1b0e227881daa22a227201ddc1->leave($__internal_02f4b1bf9c65d14117281ca5ca7fce0ea1b1ec1b0e227881daa22a227201ddc1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_27e25b464b40f978b03759709a7c765dff5e5b110878d0a18b81d1b612ccd35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e25b464b40f978b03759709a7c765dff5e5b110878d0a18b81d1b612ccd35e->enter($__internal_27e25b464b40f978b03759709a7c765dff5e5b110878d0a18b81d1b612ccd35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_27e25b464b40f978b03759709a7c765dff5e5b110878d0a18b81d1b612ccd35e->leave($__internal_27e25b464b40f978b03759709a7c765dff5e5b110878d0a18b81d1b612ccd35e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_327dcd1bef9eb65a660f3e880c89c0e76f21eef8f3cc6edb379eea373a61f203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327dcd1bef9eb65a660f3e880c89c0e76f21eef8f3cc6edb379eea373a61f203->enter($__internal_327dcd1bef9eb65a660f3e880c89c0e76f21eef8f3cc6edb379eea373a61f203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? null))));
            echo "
        </div>
    ";
        }
        
        $__internal_327dcd1bef9eb65a660f3e880c89c0e76f21eef8f3cc6edb379eea373a61f203->leave($__internal_327dcd1bef9eb65a660f3e880c89c0e76f21eef8f3cc6edb379eea373a61f203_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/noe/git/wiredpea/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
