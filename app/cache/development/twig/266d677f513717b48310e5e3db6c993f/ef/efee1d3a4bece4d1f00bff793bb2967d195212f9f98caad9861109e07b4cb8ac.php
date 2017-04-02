<?php

/* @bolt/extend/_feedback.twig */
class __TwigTemplate_2d8c33233abfa054b87f061777817f0bd9c8da4dda491467fc0b42c126eec321 extends Twig_Template
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
        $__internal_6daecc62180712ce28cf1049d9cd35d82bfd920ca401207eedb4d87925bc5afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6daecc62180712ce28cf1049d9cd35d82bfd920ca401207eedb4d87925bc5afa->enter($__internal_6daecc62180712ce28cf1049d9cd35d82bfd920ca401207eedb4d87925bc5afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/extend/_feedback.twig"));

        // line 1
        echo "<div class=\"update-container hide-block\">
    <h3 class=\"update-output-title\">";
        // line 2
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.headline.updates");
        echo "</h3>
    <div class=\"update-output-console hide-block\">
        ";
        // line 4
        if ($this->getAttribute(($context["context"] ?? null), "writeable", array())) {
            // line 5
            echo "            <pre class=\"update-output-element console\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.checking-for-updates");
            echo "</pre>
        ";
        } else {
            // line 7
            echo "            <pre class=\"update-output-element\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.no-update-check-in-readmode");
            echo "</pre>
        ";
        }
        // line 9
        echo "    </div>

    <div class=\"update-output-notice\"></div>

    <div class=\"update-list hide-block\">
        <table class=\"dashboardlisting table\">
            <thead>
            <tr>
                <th>";
        // line 17
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.extension");
        echo "</th>
                <th>";
        // line 18
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.version");
        echo "</th>
                <th>";
        // line 19
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.actions");
        echo "</th>
            </tr>
            </thead>
            <tbody class=\"update-list-items\">

            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6daecc62180712ce28cf1049d9cd35d82bfd920ca401207eedb4d87925bc5afa->leave($__internal_6daecc62180712ce28cf1049d9cd35d82bfd920ca401207eedb4d87925bc5afa_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/extend/_feedback.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  58 => 18,  54 => 17,  44 => 9,  38 => 7,  32 => 5,  30 => 4,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"update-container hide-block\">
    <h3 class=\"update-output-title\">{{ __('page.extend.headline.updates') }}</h3>
    <div class=\"update-output-console hide-block\">
        {% if context.writeable %}
            <pre class=\"update-output-element console\">{{ __('page.extend.message.checking-for-updates') }}</pre>
        {% else %}
            <pre class=\"update-output-element\">{{ __('page.extend.message.no-update-check-in-readmode') }}</pre>
        {% endif %}
    </div>

    <div class=\"update-output-notice\"></div>

    <div class=\"update-list hide-block\">
        <table class=\"dashboardlisting table\">
            <thead>
            <tr>
                <th>{{ __('page.extend.listheader.extension') }}</th>
                <th>{{ __('page.extend.listheader.version') }}</th>
                <th>{{ __('page.extend.listheader.actions') }}</th>
            </tr>
            </thead>
            <tbody class=\"update-list-items\">

            </tbody>
        </table>
    </div>
</div>
", "@bolt/extend/_feedback.twig", "");
    }
}
