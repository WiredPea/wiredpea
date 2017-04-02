<?php

/* @bolt/dashboard/_suggestloripsum.twig */
class __TwigTemplate_70bc66a34e72c6a65ee0021a58b8beb6538d931ffef509e78cb066426ac94db4 extends Twig_Template
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
        $__internal_50245f0b452f3310f204450ea59c81639703b4225ce5b921d7012e82503f94bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50245f0b452f3310f204450ea59c81639703b4225ce5b921d7012e82503f94bd->enter($__internal_50245f0b452f3310f204450ea59c81639703b4225ce5b921d7012e82503f94bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dashboard/_suggestloripsum.twig"));

        // line 1
        echo "<div class=\"alert alert-info alert-dismissible\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
    ";
        // line 3
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.dashboard.empty-database");
        echo "
    ";
        // line 4
        if ($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed("prefill")) {
            // line 5
            echo "        ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.dashboard.quickstart", array("%url%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prefill", array("force" => 1))));
            echo "
    ";
        }
        // line 7
        echo "</div>
";
        
        $__internal_50245f0b452f3310f204450ea59c81639703b4225ce5b921d7012e82503f94bd->leave($__internal_50245f0b452f3310f204450ea59c81639703b4225ce5b921d7012e82503f94bd_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/_suggestloripsum.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  32 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"alert alert-info alert-dismissible\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
    {{ __(\"page.dashboard.empty-database\") }}
    {% if isallowed('prefill') %}
        {{ __(\"page.dashboard.quickstart\", {'%url%': path('prefill', {'force': 1})}) }}
    {% endif %}
</div>
", "@bolt/dashboard/_suggestloripsum.twig", "");
    }
}
