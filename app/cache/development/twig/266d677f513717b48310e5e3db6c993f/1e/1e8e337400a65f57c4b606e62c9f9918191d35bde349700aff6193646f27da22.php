<?php

/* partials/_header.twig */
class __TwigTemplate_8ea1bdec9c539cbc46891e66c333ba991e0a2578d5aab054acfa06e03db7967f extends Twig_Template
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
        $__internal_19e7b086ff04ba8a312b6877b05b86de353a8968ac415538e2fc7be33196d0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e7b086ff04ba8a312b6877b05b86de353a8968ac415538e2fc7be33196d0db->enter($__internal_19e7b086ff04ba8a312b6877b05b86de353a8968ac415538e2fc7be33196d0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_header.twig"));

        // line 1
        echo "<!-- Header bar -->

";
        // line 6
        echo "
";
        // line 7
        $context["headerimage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . twig_random($this->env, $this->getAttribute(($context["theme"] ?? null), "headerimage", array()))), "theme");
        // line 8
        echo "
";
        // line 10
        echo "<div class=\"large-12 columns headertitle\">
<h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "</h2>
    ";
        // line 12
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "general/payoff"), "method")) {
            // line 13
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
            echo "</p>
    ";
        }
        // line 15
        echo "</div>
<div class=\"large-12 columns headerphoto\" style='background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2) 60%, rgba(255, 255, 255, 0.5)), url(";
        // line 16
        echo twig_escape_filter($this->env, ($context["headerimage"] ?? null), "html", null, true);
        echo ")'>
</div>
";
        
        $__internal_19e7b086ff04ba8a312b6877b05b86de353a8968ac415538e2fc7be33196d0db->leave($__internal_19e7b086ff04ba8a312b6877b05b86de353a8968ac415538e2fc7be33196d0db_prof);

    }

    public function getTemplateName()
    {
        return "partials/_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  43 => 13,  41 => 12,  37 => 11,  34 => 10,  31 => 8,  29 => 7,  26 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Header bar -->

{# You can either hardcode the filename for the header, or take a value from the current
   content in 'record', or - as we do in this example - take a random one from the list
   in the /theme/foundation/theme.yml file. #}

{% set headerimage = asset('images/' ~ random(theme.headerimage), 'theme') %}

{# the values in the 'app.config' object are taken directly from the file app/config/config.yml #}
<div class=\"large-12 columns headertitle\">
<h2>{{ app.config.get('general/sitename') }}</h2>
    {% if app.config.get('general/payoff') %}
        <p>{{ app.config.get('general/payoff') }}</p>
    {% endif %}
</div>
<div class=\"large-12 columns headerphoto\" style='background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2) 60%, rgba(255, 255, 255, 0.5)), url({{ headerimage }})'>
</div>
", "partials/_header.twig", "");
    }
}
