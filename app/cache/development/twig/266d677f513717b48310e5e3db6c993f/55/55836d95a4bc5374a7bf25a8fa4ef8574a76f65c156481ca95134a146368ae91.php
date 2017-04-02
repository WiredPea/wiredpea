<?php

/* partials/_fresh_install.twig */
class __TwigTemplate_a2215d4112cf54cf8442bdc7601b1131ecb4fe69662d4c9d8ea0cfe0191b3e05 extends Twig_Template
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
        $__internal_cb65dd9d63ac88d384b9c2ec889acaf482acc3961f901ef44591675809d1b297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb65dd9d63ac88d384b9c2ec889acaf482acc3961f901ef44591675809d1b297->enter($__internal_cb65dd9d63ac88d384b9c2ec889acaf482acc3961f901ef44591675809d1b297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_fresh_install.twig"));

        // line 1
        if (($context["user"] ?? null)) {
            // line 2
            echo "    <div class=\"primary callout\" data-closable>
        <h5>Welcome to the Bolt Foundation theme. </h5>
        <p>This is a bland theme, with a modular structure. It is well suited to build your own theme's on top of.</p>
        <ul>
            <li>Check the <a href='https://github.com/bobdenotter/bolt-foundation-theme/blob/master/readme.md'>readme.md</a> for instructions on how to customize this theme.</li>
            <li>View the <a href='";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basePath", array()), "html", null, true);
            echo "/styleguide'>Styleguide</a> for this theme.</li>
            <li>Read the <a href='http://foundation.zurb.com/sites/docs/'>Foundation for Sites</a> documentation.</li>
            <li><a href='";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fileedit", array("namespace" => "theme", "file" => "index.twig")), "html", null, true);
            echo "'>Edit this template</a>, to get rid of this 'callout'.</li>
        </ul>
        <small>Note: Only registered users will see this. This piece of content is hidden from regular visitors.</small>
        <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
";
        }
        
        $__internal_cb65dd9d63ac88d384b9c2ec889acaf482acc3961f901ef44591675809d1b297->leave($__internal_cb65dd9d63ac88d384b9c2ec889acaf482acc3961f901ef44591675809d1b297_prof);

    }

    public function getTemplateName()
    {
        return "partials/_fresh_install.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  31 => 7,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user %}
    <div class=\"primary callout\" data-closable>
        <h5>Welcome to the Bolt Foundation theme. </h5>
        <p>This is a bland theme, with a modular structure. It is well suited to build your own theme's on top of.</p>
        <ul>
            <li>Check the <a href='https://github.com/bobdenotter/bolt-foundation-theme/blob/master/readme.md'>readme.md</a> for instructions on how to customize this theme.</li>
            <li>View the <a href='{{ app.request.basePath }}/styleguide'>Styleguide</a> for this theme.</li>
            <li>Read the <a href='http://foundation.zurb.com/sites/docs/'>Foundation for Sites</a> documentation.</li>
            <li><a href='{{ path('fileedit', {'namespace': 'theme', 'file': 'index.twig'}) }}'>Edit this template</a>, to get rid of this 'callout'.</li>
        </ul>
        <small>Note: Only registered users will see this. This piece of content is hidden from regular visitors.</small>
        <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
{% endif %}
", "partials/_fresh_install.twig", "");
    }
}
