<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9bac3b9e9f22b17a654f1f5f572274eb4131bef830058de021dcedb3d462f39f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f13e977115e8d0f53af6c332a9519e81345a8361b4103e314fc1e5c67b160d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13e977115e8d0f53af6c332a9519e81345a8361b4103e314fc1e5c67b160d80->enter($__internal_f13e977115e8d0f53af6c332a9519e81345a8361b4103e314fc1e5c67b160d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f13e977115e8d0f53af6c332a9519e81345a8361b4103e314fc1e5c67b160d80->leave($__internal_f13e977115e8d0f53af6c332a9519e81345a8361b4103e314fc1e5c67b160d80_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_05d539ce1508299e3d5ce45b327501efb9f0c27d370b22bda127e94bba1fb1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d539ce1508299e3d5ce45b327501efb9f0c27d370b22bda127e94bba1fb1b2->enter($__internal_05d539ce1508299e3d5ce45b327501efb9f0c27d370b22bda127e94bba1fb1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_05d539ce1508299e3d5ce45b327501efb9f0c27d370b22bda127e94bba1fb1b2->leave($__internal_05d539ce1508299e3d5ce45b327501efb9f0c27d370b22bda127e94bba1fb1b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94d219125830e0ee536ad3e3eb096a7de21d7538c7577a078468b165ac2334c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d219125830e0ee536ad3e3eb096a7de21d7538c7577a078468b165ac2334c8->enter($__internal_94d219125830e0ee536ad3e3eb096a7de21d7538c7577a078468b165ac2334c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94d219125830e0ee536ad3e3eb096a7de21d7538c7577a078468b165ac2334c8->leave($__internal_94d219125830e0ee536ad3e3eb096a7de21d7538c7577a078468b165ac2334c8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62ecd4790e294c0eeb9b4d3686316f141324e407cf9666c1963ccbf2dd56108c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ecd4790e294c0eeb9b4d3686316f141324e407cf9666c1963ccbf2dd56108c->enter($__internal_62ecd4790e294c0eeb9b4d3686316f141324e407cf9666c1963ccbf2dd56108c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? null))));
        echo "
";
        
        $__internal_62ecd4790e294c0eeb9b4d3686316f141324e407cf9666c1963ccbf2dd56108c->leave($__internal_62ecd4790e294c0eeb9b4d3686316f141324e407cf9666c1963ccbf2dd56108c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/noe/git/wiredpea/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
