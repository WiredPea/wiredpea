<?php

/* @bolt/_sub/_listing.twig */
class __TwigTemplate_6fafe39fc382ffc49967a64d619c165b56f87898546ad5c2d11ba538a3e89f11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@bolt/_base/_listing.twig", "@bolt/_sub/_listing.twig", 1);
        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_listing.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf8a61d160d1d83709dbe872541561d964a515b3b73c4e6a921ae1156298bc4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8a61d160d1d83709dbe872541561d964a515b3b73c4e6a921ae1156298bc4a->enter($__internal_bf8a61d160d1d83709dbe872541561d964a515b3b73c4e6a921ae1156298bc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_listing.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf8a61d160d1d83709dbe872541561d964a515b3b73c4e6a921ae1156298bc4a->leave($__internal_bf8a61d160d1d83709dbe872541561d964a515b3b73c4e6a921ae1156298bc4a_prof);

    }

    // line 3
    public function block_listing_columns($context, array $blocks = array())
    {
        $__internal_1f60b5a2473d469fe1fa846213e6a615c7136e7df88c12910d326d2d3c1b3974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f60b5a2473d469fe1fa846213e6a615c7136e7df88c12910d326d2d3c1b3974->enter($__internal_1f60b5a2473d469fe1fa846213e6a615c7136e7df88c12910d326d2d3c1b3974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_columns"));

        $this->displayParentBlock("listing_columns", $context, $blocks);
        
        $__internal_1f60b5a2473d469fe1fa846213e6a615c7136e7df88c12910d326d2d3c1b3974->leave($__internal_1f60b5a2473d469fe1fa846213e6a615c7136e7df88c12910d326d2d3c1b3974_prof);

    }

    // line 5
    public function block_listing_header($context, array $blocks = array())
    {
        $__internal_288ece7bc0ea3964fe5a75d2cf3d3f11aa680b776a34f7bb1f937059510f9c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288ece7bc0ea3964fe5a75d2cf3d3f11aa680b776a34f7bb1f937059510f9c43->enter($__internal_288ece7bc0ea3964fe5a75d2cf3d3f11aa680b776a34f7bb1f937059510f9c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_header"));

        $this->displayParentBlock("listing_header", $context, $blocks);
        
        $__internal_288ece7bc0ea3964fe5a75d2cf3d3f11aa680b776a34f7bb1f937059510f9c43->leave($__internal_288ece7bc0ea3964fe5a75d2cf3d3f11aa680b776a34f7bb1f937059510f9c43_prof);

    }

    // line 7
    public function block_listing_id($context, array $blocks = array())
    {
        $__internal_1ed8e6dc196dbd52fe8d40e7c5a8e8929a1f0a4694a1901df354593ad2b884e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed8e6dc196dbd52fe8d40e7c5a8e8929a1f0a4694a1901df354593ad2b884e7->enter($__internal_1ed8e6dc196dbd52fe8d40e7c5a8e8929a1f0a4694a1901df354593ad2b884e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_id"));

        $this->displayParentBlock("listing_id", $context, $blocks);
        
        $__internal_1ed8e6dc196dbd52fe8d40e7c5a8e8929a1f0a4694a1901df354593ad2b884e7->leave($__internal_1ed8e6dc196dbd52fe8d40e7c5a8e8929a1f0a4694a1901df354593ad2b884e7_prof);

    }

    // line 9
    public function block_listing_content($context, array $blocks = array())
    {
        $__internal_9dc77a70550f17c3aa7ed9ffc39cb3ceca14c76f094491ec045fd47c6c294f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc77a70550f17c3aa7ed9ffc39cb3ceca14c76f094491ec045fd47c6c294f87->enter($__internal_9dc77a70550f17c3aa7ed9ffc39cb3ceca14c76f094491ec045fd47c6c294f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_content"));

        $this->displayParentBlock("listing_content", $context, $blocks);
        
        $__internal_9dc77a70550f17c3aa7ed9ffc39cb3ceca14c76f094491ec045fd47c6c294f87->leave($__internal_9dc77a70550f17c3aa7ed9ffc39cb3ceca14c76f094491ec045fd47c6c294f87_prof);

    }

    // line 11
    public function block_listing_meta($context, array $blocks = array())
    {
        $__internal_723bf37cf170405a0fb8c708b191fd205b03ee2fea4ead3e61d72e374e6ddf4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723bf37cf170405a0fb8c708b191fd205b03ee2fea4ead3e61d72e374e6ddf4b->enter($__internal_723bf37cf170405a0fb8c708b191fd205b03ee2fea4ead3e61d72e374e6ddf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_meta"));

        $this->displayParentBlock("listing_meta", $context, $blocks);
        
        $__internal_723bf37cf170405a0fb8c708b191fd205b03ee2fea4ead3e61d72e374e6ddf4b->leave($__internal_723bf37cf170405a0fb8c708b191fd205b03ee2fea4ead3e61d72e374e6ddf4b_prof);

    }

    // line 13
    public function block_listing_actions($context, array $blocks = array())
    {
        $__internal_570e7016196bd4e64d81c27badae12e9ae1539a0b75d6ae5c691a48c32f8c6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570e7016196bd4e64d81c27badae12e9ae1539a0b75d6ae5c691a48c32f8c6fb->enter($__internal_570e7016196bd4e64d81c27badae12e9ae1539a0b75d6ae5c691a48c32f8c6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_actions"));

        $this->displayParentBlock("listing_actions", $context, $blocks);
        
        $__internal_570e7016196bd4e64d81c27badae12e9ae1539a0b75d6ae5c691a48c32f8c6fb->leave($__internal_570e7016196bd4e64d81c27badae12e9ae1539a0b75d6ae5c691a48c32f8c6fb_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 13,  87 => 11,  75 => 9,  63 => 7,  51 => 5,  39 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@bolt/_base/_listing.twig' %}

{% block listing_columns %}{{ parent() }}{% endblock %}

{% block listing_header %}{{ parent() }}{% endblock %}

{% block listing_id %}{{ parent() }}{% endblock %}

{% block listing_content %}{{ parent() }}{% endblock %}

{% block listing_meta %}{{ parent() }}{% endblock %}

{% block listing_actions %}{{ parent() }}{% endblock %}
", "@bolt/_sub/_listing.twig", "");
    }
}
