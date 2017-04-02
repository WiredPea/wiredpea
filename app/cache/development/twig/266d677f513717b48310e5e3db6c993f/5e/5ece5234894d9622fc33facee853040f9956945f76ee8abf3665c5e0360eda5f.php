<?php

/* @bolt/dashboard/_aside.twig */
class __TwigTemplate_0bf8db0b639ee82e8740af0214bd5e01c64cab54afa150e089a6871a6ce785c4 extends Twig_Template
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
        $__internal_87542cf50911dee21784458f22d6467920499a3db125775daf56499bfac99431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87542cf50911dee21784458f22d6467920499a3db125775daf56499bfac99431->enter($__internal_87542cf50911dee21784458f22d6467920499a3db125775daf56499bfac99431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dashboard/_aside.twig"));

        // line 1
        $context["panels"] = $this->loadTemplate("@bolt/_macro/_panels.twig", "@bolt/dashboard/_aside.twig", 1);
        // line 2
        echo "
";
        // line 4
        echo twig_include($this->env, $context, "@bolt/_sub/_configuration_notices.twig");
        echo "

";
        // line 7
        if ( !($context["bolt_stable"] ?? null)) {
            // line 8
            echo "<div class=\"panel panel-default panel-news\">
    <div class=\"progress-bar progress-bar-warning progress-bar-striped active\" style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px;\">
        <b><i class=\"fa fa-fw fa-bullhorn\"></i> Warning: Development version </b>
    </div>
    <div class=\"panel-body\">
        <p>This is a development version of Bolt, so it might contain bugs and unfinished features. Use at your own risk! For 'production' websites, we advise you to stick with the official stable releases.</p>
    </div>
</div>
";
        }
        // line 17
        echo "
";
        // line 19
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("dashboard_aside_top", "backend");
        echo "

";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardnews"));
        echo "

";
        // line 25
        echo $context["panels"]->getstack(7, true);
        echo "

";
        // line 28
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("dashboard_aside_middle", "backend");
        echo "

";
        // line 31
        echo "<div data-bolt-widget=\"panelActivity\">
    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("latestactivity"));
        echo "
</div>

";
        // line 36
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("dashboard_aside_bottom", "backend");
        echo "

";
        // line 39
        echo "<div id=\"latesttemp\" style=\"display:none; visibility: hidden;\">
    <!-- intentionally left blank -->
</div>
";
        
        $__internal_87542cf50911dee21784458f22d6467920499a3db125775daf56499bfac99431->leave($__internal_87542cf50911dee21784458f22d6467920499a3db125775daf56499bfac99431_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 39,  77 => 36,  71 => 32,  68 => 31,  63 => 28,  58 => 25,  53 => 22,  48 => 19,  45 => 17,  34 => 8,  32 => 7,  27 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@bolt/_macro/_panels.twig' as panels %}

{# Configuration notices #}
{{ include('@bolt/_sub/_configuration_notices.twig') }}

{# If we're running a development version, show annoying message. #}
{% if not bolt_stable %}
<div class=\"panel panel-default panel-news\">
    <div class=\"progress-bar progress-bar-warning progress-bar-striped active\" style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px;\">
        <b><i class=\"fa fa-fw fa-bullhorn\"></i> Warning: Development version </b>
    </div>
    <div class=\"panel-body\">
        <p>This is a development version of Bolt, so it might contain bugs and unfinished features. Use at your own risk! For 'production' websites, we advise you to stick with the official stable releases.</p>
    </div>
</div>
{% endif %}

{# Dashboard Widget #}
{{ widgets('dashboard_aside_top', 'backend') }}

{# News #}
{{ render(path('dashboardnews')) }}

{# Stack #}
{{ panels.stack(7, true) }}

{# Dashboard Widget #}
{{ widgets('dashboard_aside_middle', 'backend') }}

{# Latest Activity #}
<div data-bolt-widget=\"panelActivity\">
    {{ render(path('latestactivity')) }}
</div>

{# Dashboard Widget #}
{{ widgets('dashboard_aside_bottom', 'backend') }}

{# ? #}
<div id=\"latesttemp\" style=\"display:none; visibility: hidden;\">
    <!-- intentionally left blank -->
</div>
", "@bolt/dashboard/_aside.twig", "");
    }
}
