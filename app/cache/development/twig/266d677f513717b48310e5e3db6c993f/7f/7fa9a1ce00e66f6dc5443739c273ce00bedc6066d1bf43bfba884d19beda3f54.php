<?php

/* @bolt/_nav/_primary.twig */
class __TwigTemplate_11aefac3a02903de181344ec2cb644e60aabf520ed196388aa75f28c319276ca extends Twig_Template
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
        $__internal_5e874eec38e2058d46b60302be66d9e4419ed03d579d96e5329d24155af9c4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e874eec38e2058d46b60302be66d9e4419ed03d579d96e5329d24155af9c4e6->enter($__internal_5e874eec38e2058d46b60302be66d9e4419ed03d579d96e5329d24155af9c4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_primary.twig"));

        // line 1
        echo "<div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-xaction=\"bolt.sidebar.toggle()\">
        <i class=\"fa fa-fw fa-bars\"></i> MENU
    </button>
    <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\">
        ";
        // line 7
        echo "        ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array(), "any", false, true), "get", array(0 => "general/branding/name"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array(), "any", false, true), "get", array(0 => "general/branding/name"), "method"), "Bolt")) : ("Bolt")), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\" class=\"navbar-site hidden-xs\"><span>";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "general/sitename"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        } else {
            echo "Site";
        }
        echo "</span></a>
</div>


<ul class=\"nav navbar-top-links navbar-right\">

    <li>
        ";
        // line 17
        echo "        <form class=\"navbar-form hidden-xs\">
            <div class=\"form-group has-feedback omnisearch\" role=\"search\">
                <select class=\"form-control\"></select>
                <span class=\"form-control-feedback\"><i class=\"fa fa-search\"></i></span>
            </div>
        </form>
    </li>

    <li>
        <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" target=\"_blank\" class=\"hidden-xs\">
            <i class=\"fa fa-fw fa-external-link-square\"></i>
            ";
        // line 28
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.view-site");
        echo "
        </a>
    </li>

    ";
        // line 32
        if ($this->getAttribute(($context["context"] ?? null), "contenttype", array(), "any", true, true)) {
            // line 33
            echo "    <li id=\"liveeditorsavecontinuebutton\" class=\"save-live-editor\">
        <a>
            <i class=\"fa fa-fw fa-flag\"></i>
            ";
            // line 36
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.save", array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array())));
            echo "
        </a>
    </li>
    ";
        }
        // line 40
        echo "
    <li class=\"close-live-editor\">
        <a>
            <i class=\"fa fa-fw fa-times-circle-o\"></i>
            ";
        // line 44
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.close-editor");
        echo "
        </a>
    </li>

    <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            ";
        // line 51
        echo "            <i class=\"fa fa-fw fa-user\"></i> <span>";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt((($this->getAttribute(($context["user"] ?? null), "displayname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), "displayname", array()))) : ("")), 16);
        echo "</span> <i class=\"fa fa-caret-down\"></i>
        </a>
        <ul class=\"dropdown-menu dropdown-user\" role=\"menu\" >
            <li>
                <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile");
        echo "\" role=\"menuitem\" tabindex=\"-1\"><i class=\"fa fa-fw fa-gear\"></i> ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.profile");
        echo "</a>
            </li>
            <li>
                <form action=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\" method=\"POST\">
                    <button class=\"btn btn-link btn-block\" type=\"submit\">
                        <span class=\"pull-left\"><i class=\"fa fa-fw fa-sign-out\" style=\"margin-left: 4px;\"></i> ";
        // line 60
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.logout");
        echo "</span>
                    </button>
                </form>
            </li>
        </ul>
    </li>

</ul>
";
        
        $__internal_5e874eec38e2058d46b60302be66d9e4419ed03d579d96e5329d24155af9c4e6->leave($__internal_5e874eec38e2058d46b60302be66d9e4419ed03d579d96e5329d24155af9c4e6_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_primary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 60,  122 => 58,  114 => 55,  106 => 51,  97 => 44,  91 => 40,  84 => 36,  79 => 33,  77 => 32,  70 => 28,  65 => 26,  54 => 17,  38 => 9,  32 => 7,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-xaction=\"bolt.sidebar.toggle()\">
        <i class=\"fa fa-fw fa-bars\"></i> MENU
    </button>
    <a class=\"navbar-brand\" href=\"{{ path('dashboard') }}\">
        {# <img src=\"{{ asset('img/bolt-icon.svg', 'bolt') }}\"> #}
        {{ app.config.get('general/branding/name')|default('Bolt') }}
    </a>
    <a href=\"{{ path('dashboard') }}\" class=\"navbar-site hidden-xs\"><span>{% if app.config.get('general/sitename') %}{{ app.config.get('general/sitename') }}{% else %}Site{% endif %}</span></a>
</div>


<ul class=\"nav navbar-top-links navbar-right\">

    <li>
        {# one omnisearch here, for \"small and up\", the other in the side-navbar #}
        <form class=\"navbar-form hidden-xs\">
            <div class=\"form-group has-feedback omnisearch\" role=\"search\">
                <select class=\"form-control\"></select>
                <span class=\"form-control-feedback\"><i class=\"fa fa-search\"></i></span>
            </div>
        </form>
    </li>

    <li>
        <a href=\"{{ path('homepage') }}\" target=\"_blank\" class=\"hidden-xs\">
            <i class=\"fa fa-fw fa-external-link-square\"></i>
            {{ __('general.phrase.view-site') }}
        </a>
    </li>

    {% if context.contenttype is defined %}
    <li id=\"liveeditorsavecontinuebutton\" class=\"save-live-editor\">
        <a>
            <i class=\"fa fa-fw fa-flag\"></i>
            {{ __('contenttypes.generic.save', {'%contenttype%': context.contenttype.slug}) }}
        </a>
    </li>
    {% endif %}

    <li class=\"close-live-editor\">
        <a>
            <i class=\"fa fa-fw fa-times-circle-o\"></i>
            {{ __('general.phrase.close-editor') }}
        </a>
    </li>

    <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            {# FIXME DTO: When the session hits the check timer, the user object can be empty #}
            <i class=\"fa fa-fw fa-user\"></i> <span>{{ user.displayname|default()|excerpt(16) }}</span> <i class=\"fa fa-caret-down\"></i>
        </a>
        <ul class=\"dropdown-menu dropdown-user\" role=\"menu\" >
            <li>
                <a href=\"{{ path('profile') }}\" role=\"menuitem\" tabindex=\"-1\"><i class=\"fa fa-fw fa-gear\"></i> {{ __('general.phrase.profile') }}</a>
            </li>
            <li>
                <form action=\"{{ path('logout') }}\" method=\"POST\">
                    <button class=\"btn btn-link btn-block\" type=\"submit\">
                        <span class=\"pull-left\"><i class=\"fa fa-fw fa-sign-out\" style=\"margin-left: 4px;\"></i> {{ __('general.phrase.logout') }}</span>
                    </button>
                </form>
            </li>
        </ul>
    </li>

</ul>
", "@bolt/_nav/_primary.twig", "");
    }
}
