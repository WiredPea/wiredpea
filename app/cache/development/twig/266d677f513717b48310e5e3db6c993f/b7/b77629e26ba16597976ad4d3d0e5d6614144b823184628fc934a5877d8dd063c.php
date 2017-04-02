<?php

/* @bolt/_base/_panel.twig */
class __TwigTemplate_9d2c77c353626d8cd94e617f78dd5748890ad968da93af2903261772506cb6ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_alert' => array($this, 'block_panel_alert'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27fc748e47488b9b1096c5c9f9f0d9b0a06077ff598e343d03308663a7e6d071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fc748e47488b9b1096c5c9f9f0d9b0a06077ff598e343d03308663a7e6d071->enter($__internal_27fc748e47488b9b1096c5c9f9f0d9b0a06077ff598e343d03308663a7e6d071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_panel.twig"));

        // line 9
        echo "<div class=\"panel panel-default ";
        $this->displayBlock('panel_class', $context, $blocks);
        echo "\">
    <div ";
        // line 10
        $this->displayBlock('panel_alert', $context, $blocks);
        echo ">
        <i class=\"fa fa-fw ";
        // line 11
        $this->displayBlock('panel_icon', $context, $blocks);
        echo "\"></i>
        ";
        // line 12
        $this->displayBlock('panel_head', $context, $blocks);
        // line 13
        echo "    </div>

    <div class=\"panel-body\">
        ";
        // line 16
        $this->displayBlock('panel_body', $context, $blocks);
        // line 17
        echo "    </div>
</div>
";
        
        $__internal_27fc748e47488b9b1096c5c9f9f0d9b0a06077ff598e343d03308663a7e6d071->leave($__internal_27fc748e47488b9b1096c5c9f9f0d9b0a06077ff598e343d03308663a7e6d071_prof);

    }

    // line 9
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_ca80c02954014fe0792f3fc9866d65f7f80f55f57991eea2399281b2a4337aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca80c02954014fe0792f3fc9866d65f7f80f55f57991eea2399281b2a4337aff->enter($__internal_ca80c02954014fe0792f3fc9866d65f7f80f55f57991eea2399281b2a4337aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        
        $__internal_ca80c02954014fe0792f3fc9866d65f7f80f55f57991eea2399281b2a4337aff->leave($__internal_ca80c02954014fe0792f3fc9866d65f7f80f55f57991eea2399281b2a4337aff_prof);

    }

    // line 10
    public function block_panel_alert($context, array $blocks = array())
    {
        $__internal_4433d7fa8cd994db10ee52942a4196012265912a6e9a5d2482c0a52820b296e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4433d7fa8cd994db10ee52942a4196012265912a6e9a5d2482c0a52820b296e7->enter($__internal_4433d7fa8cd994db10ee52942a4196012265912a6e9a5d2482c0a52820b296e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_alert"));

        echo "class=\"panel-heading\"";
        
        $__internal_4433d7fa8cd994db10ee52942a4196012265912a6e9a5d2482c0a52820b296e7->leave($__internal_4433d7fa8cd994db10ee52942a4196012265912a6e9a5d2482c0a52820b296e7_prof);

    }

    // line 11
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_b27767e78563ec5661f93d0a0188c13ccae4af04be5b3f382fce31dc8710ffc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27767e78563ec5661f93d0a0188c13ccae4af04be5b3f382fce31dc8710ffc9->enter($__internal_b27767e78563ec5661f93d0a0188c13ccae4af04be5b3f382fce31dc8710ffc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-circle-o";
        
        $__internal_b27767e78563ec5661f93d0a0188c13ccae4af04be5b3f382fce31dc8710ffc9->leave($__internal_b27767e78563ec5661f93d0a0188c13ccae4af04be5b3f382fce31dc8710ffc9_prof);

    }

    // line 12
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_78beb7116bc8c1cee5434cd55b5f7e071a1dbe7799959ef9dd38a5a0a17f436c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78beb7116bc8c1cee5434cd55b5f7e071a1dbe7799959ef9dd38a5a0a17f436c->enter($__internal_78beb7116bc8c1cee5434cd55b5f7e071a1dbe7799959ef9dd38a5a0a17f436c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        echo "[PANEL_HEAD]";
        
        $__internal_78beb7116bc8c1cee5434cd55b5f7e071a1dbe7799959ef9dd38a5a0a17f436c->leave($__internal_78beb7116bc8c1cee5434cd55b5f7e071a1dbe7799959ef9dd38a5a0a17f436c_prof);

    }

    // line 16
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_aa6d9af7b7ece177d60cac2cba54bc68c367bef423a1745afc9e3111b00c5178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6d9af7b7ece177d60cac2cba54bc68c367bef423a1745afc9e3111b00c5178->enter($__internal_aa6d9af7b7ece177d60cac2cba54bc68c367bef423a1745afc9e3111b00c5178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        echo "[PANEL_BODY]";
        
        $__internal_aa6d9af7b7ece177d60cac2cba54bc68c367bef423a1745afc9e3111b00c5178->leave($__internal_aa6d9af7b7ece177d60cac2cba54bc68c367bef423a1745afc9e3111b00c5178_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_base/_panel.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  93 => 12,  81 => 11,  69 => 10,  58 => 9,  49 => 17,  47 => 16,  42 => 13,  40 => 12,  36 => 11,  32 => 10,  27 => 9,);
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
 # Template for sidebar panels
 #
 # Blocks: panel_class:  A classname used for styling
 #         panel_icon:   A fontawsome CSS class name (Optional)
 #         panel_head:   The headline
 #         panel_body:   The Body
 #}
<div class=\"panel panel-default {% block panel_class %}{% endblock panel_class %}\">
    <div {% block panel_alert %}class=\"panel-heading\"{% endblock panel_alert %}>
        <i class=\"fa fa-fw {% block panel_icon %}fa-circle-o{% endblock panel_icon %}\"></i>
        {% block panel_head %}[PANEL_HEAD]{% endblock panel_head %}
    </div>

    <div class=\"panel-body\">
        {% block panel_body %}[PANEL_BODY]{% endblock panel_body %}
    </div>
</div>
", "@bolt/_base/_panel.twig", "");
    }
}
