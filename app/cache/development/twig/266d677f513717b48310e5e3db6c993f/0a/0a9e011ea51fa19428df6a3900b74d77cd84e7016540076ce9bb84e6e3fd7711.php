<?php

/* partials/_topbar.twig */
class __TwigTemplate_2e83c41c6dd7cf2ca29bad60b0c8cc87924062c27860edca9407bdd989723360 extends Twig_Template
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
        $__internal_ae57c2e67e0a3c17fc7d276db22463f74e14b9d6456f1931b2684196b1da3b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae57c2e67e0a3c17fc7d276db22463f74e14b9d6456f1931b2684196b1da3b64->enter($__internal_ae57c2e67e0a3c17fc7d276db22463f74e14b9d6456f1931b2684196b1da3b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_topbar.twig"));

        // line 1
        echo "<div class=\"title-bar\" data-responsive-toggle=\"example-menu\" data-hide-for=\"medium\">
  <button class=\"menu-icon\" type=\"button\" data-toggle></button>
  <div class=\"title-bar-title\">Menu</div>
</div>

<div class=\"top-bar\" id=\"example-menu\">
  <div class=\"top-bar-left\">
    ";
        // line 8
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->menu($this->env, "", "partials/_sub_menu.twig");
        echo "
  </div>
  <div class=\"top-bar-right\">
    <form method=\"get\" action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" id=\"searchform-inline\" enctype=\"text/plain\">
      <ul class=\"menu\">
        <li><input type=\"search\" value=\"";
        // line 13
        if (array_key_exists("search", $context)) {
            echo twig_escape_filter($this->env, ($context["search"] ?? null));
        }
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.search-ellipsis");
        echo "\" name=\"search\"></li>
        <li><button type=\"submit\" class=\"button secondary\">";
        // line 14
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.search");
        echo "</button></li>
      </ul>
    </form>
  </div>
</div>
";
        
        $__internal_ae57c2e67e0a3c17fc7d276db22463f74e14b9d6456f1931b2684196b1da3b64->leave($__internal_ae57c2e67e0a3c17fc7d276db22463f74e14b9d6456f1931b2684196b1da3b64_prof);

    }

    public function getTemplateName()
    {
        return "partials/_topbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  42 => 13,  37 => 11,  31 => 8,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"title-bar\" data-responsive-toggle=\"example-menu\" data-hide-for=\"medium\">
  <button class=\"menu-icon\" type=\"button\" data-toggle></button>
  <div class=\"title-bar-title\">Menu</div>
</div>

<div class=\"top-bar\" id=\"example-menu\">
  <div class=\"top-bar-left\">
    {{ menu(template = 'partials/_sub_menu.twig') }}
  </div>
  <div class=\"top-bar-right\">
    <form method=\"get\" action=\"{{ path('search') }}\" id=\"searchform-inline\" enctype=\"text/plain\">
      <ul class=\"menu\">
        <li><input type=\"search\" value=\"{% if search is defined %}{{ search|escape }}{% endif %}\" placeholder=\"{{ __('general.phrase.search-ellipsis') }}\" name=\"search\"></li>
        <li><button type=\"submit\" class=\"button secondary\">{{ __('general.phrase.search') }}</button></li>
      </ul>
    </form>
  </div>
</div>
", "partials/_topbar.twig", "");
    }
}
