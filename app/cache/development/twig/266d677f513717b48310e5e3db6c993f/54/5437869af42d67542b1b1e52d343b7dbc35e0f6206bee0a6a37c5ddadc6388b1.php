<?php

/* @bolt/dashboard/_quicklinks-dropdown.twig */
class __TwigTemplate_e0b7b1325d0561265ca152516e19ae2aa80ea4193cc53829c5c9d09d83b807c2 extends Twig_Template
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
        $__internal_68920bf68b7f63d1beb0a45bcc84a44fdb742e7c13aa2980fd6f56d14223dd86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68920bf68b7f63d1beb0a45bcc84a44fdb742e7c13aa2980fd6f56d14223dd86->enter($__internal_68920bf68b7f63d1beb0a45bcc84a44fdb742e7c13aa2980fd6f56d14223dd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dashboard/_quicklinks-dropdown.twig"));

        // line 1
        $context["allowedany"] = false;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
            // line 3
            echo "    ";
            if (($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":create")) && $this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":view")))) {
                // line 4
                echo "        ";
                $context["allowedany"] = true;
                // line 5
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        if (($context["allowedany"] ?? null)) {
            // line 8
            echo "    <div class=\"btn-group\">
        <a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            ";
            // line 10
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.dashboard.button.add");
            echo "
            <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "contenttypes"), "method"));
            foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
                // line 15
                echo "            ";
                if (($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":create")) && $this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":view")))) {
                    // line 16
                    echo "                <li>
                    <a href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $context["contenttypeslug"])), "html", null, true);
                    echo "\">
                        <i class=\"fa fa-plus\"></i>
                        ";
                    // line 19
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.new", array("%contenttype%" => $context["contenttypeslug"]));
                    echo "
                    </a>
                </li>
            ";
                }
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </ul>
    </div>
";
        }
        
        $__internal_68920bf68b7f63d1beb0a45bcc84a44fdb742e7c13aa2980fd6f56d14223dd86->leave($__internal_68920bf68b7f63d1beb0a45bcc84a44fdb742e7c13aa2980fd6f56d14223dd86_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/_quicklinks-dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  76 => 23,  69 => 19,  64 => 17,  61 => 16,  58 => 15,  54 => 14,  47 => 10,  43 => 8,  41 => 7,  34 => 5,  31 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set allowedany = false %}
{% for contenttypeslug, contenttype in app.config.get('contenttypes') %}
    {% if isallowed('contenttype:' ~ contenttypeslug ~ ':create') and isallowed('contenttype:' ~ contenttypeslug ~ ':view') %}
        {% set allowedany = true %}
    {% endif %}
{% endfor %}
{% if allowedany %}
    <div class=\"btn-group\">
        <a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            {{ __('page.dashboard.button.add') }}
            <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu\">
        {% for contenttypeslug, contenttype in app.config.get('contenttypes') %}
            {% if isallowed('contenttype:' ~ contenttypeslug ~ ':create') and isallowed('contenttype:' ~ contenttypeslug ~ ':view') %}
                <li>
                    <a href=\"{{ path('editcontent', {'contenttypeslug': contenttypeslug}) }}\">
                        <i class=\"fa fa-plus\"></i>
                        {{ __('contenttypes.generic.new', {'%contenttype%': contenttypeslug}) }}
                    </a>
                </li>
            {% endif %}
        {% endfor %}
        </ul>
    </div>
{% endif %}
", "@bolt/dashboard/_quicklinks-dropdown.twig", "");
    }
}
