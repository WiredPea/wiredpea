<?php

/* @bolt/extend/_readme.twig */
class __TwigTemplate_5182f60b9fc4f3644272d777178be7616bb4a8c27704f095d68e5f9f5cac2a83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f9a14a463794de4180bd4f2572184644c5596808d9652522378537db7005670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9a14a463794de4180bd4f2572184644c5596808d9652522378537db7005670->enter($__internal_0f9a14a463794de4180bd4f2572184644c5596808d9652522378537db7005670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/extend/_readme.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"readmeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Read Me</h4>
            </div>
            <div class=\"modal-body\">
                …
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_0f9a14a463794de4180bd4f2572184644c5596808d9652522378537db7005670->leave($__internal_0f9a14a463794de4180bd4f2572184644c5596808d9652522378537db7005670_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/extend/_readme.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"readmeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Read Me</h4>
            </div>
            <div class=\"modal-body\">
                …
            </div>
        </div>
    </div>
</div>
", "@bolt/extend/_readme.twig", "");
    }
}
