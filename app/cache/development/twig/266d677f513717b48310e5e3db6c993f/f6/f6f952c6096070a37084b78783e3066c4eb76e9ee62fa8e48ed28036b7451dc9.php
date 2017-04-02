<?php

/* @bolt/dashboard/dashboard.twig */
class __TwigTemplate_f689ecfc371dc10af5c26b6da1d7236b559e7483f13bb8d7bcf7e22327146cf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/dashboard/dashboard.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e18582486b8c9ec6d76de7229a53372ff6bae89f1665c9ed47a9a6a01df151fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18582486b8c9ec6d76de7229a53372ff6bae89f1665c9ed47a9a6a01df151fd->enter($__internal_e18582486b8c9ec6d76de7229a53372ff6bae89f1665c9ed47a9a6a01df151fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dashboard/dashboard.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e18582486b8c9ec6d76de7229a53372ff6bae89f1665c9ed47a9a6a01df151fd->leave($__internal_e18582486b8c9ec6d76de7229a53372ff6bae89f1665c9ed47a9a6a01df151fd_prof);

    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_e8184eb97e652a6e6da269e07ad6ea372ba05d577fdd32acf4c43bc7e0e28290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8184eb97e652a6e6da269e07ad6ea372ba05d577fdd32acf4c43bc7e0e28290->enter($__internal_e8184eb97e652a6e6da269e07ad6ea372ba05d577fdd32acf4c43bc7e0e28290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo "Dashboard";
        
        $__internal_e8184eb97e652a6e6da269e07ad6ea372ba05d577fdd32acf4c43bc7e0e28290->leave($__internal_e8184eb97e652a6e6da269e07ad6ea372ba05d577fdd32acf4c43bc7e0e28290_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_1cf329619a9cfcb8d14f70dd4919c37f8114c5d3858aef38cb8abfee1b53372c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf329619a9cfcb8d14f70dd4919c37f8114c5d3858aef38cb8abfee1b53372c->enter($__internal_1cf329619a9cfcb8d14f70dd4919c37f8114c5d3858aef38cb8abfee1b53372c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.dashboard.title");
        
        $__internal_1cf329619a9cfcb8d14f70dd4919c37f8114c5d3858aef38cb8abfee1b53372c->leave($__internal_1cf329619a9cfcb8d14f70dd4919c37f8114c5d3858aef38cb8abfee1b53372c_prof);

    }

    // line 10
    public function block_messages($context, array $blocks = array())
    {
        $__internal_981979e4cd16f95c165877dbe8097e636ccc319040035b63430c8bc788e547fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981979e4cd16f95c165877dbe8097e636ccc319040035b63430c8bc788e547fc->enter($__internal_981979e4cd16f95c165877dbe8097e636ccc319040035b63430c8bc788e547fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        echo "";
        
        $__internal_981979e4cd16f95c165877dbe8097e636ccc319040035b63430c8bc788e547fc->leave($__internal_981979e4cd16f95c165877dbe8097e636ccc319040035b63430c8bc788e547fc_prof);

    }

    // line 12
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_ee0bc730fbc07f67fe63927b9b20416a91ac069896e0b485c651f540972653c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0bc730fbc07f67fe63927b9b20416a91ac069896e0b485c651f540972653c9->enter($__internal_ee0bc730fbc07f67fe63927b9b20416a91ac069896e0b485c651f540972653c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 13
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 17
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig");
        echo "

            ";
        // line 19
        if ($this->getAttribute(($context["context"] ?? null), "suggestloripsum", array())) {
            // line 20
            echo "                ";
            echo twig_include($this->env, $context, "@bolt/dashboard/_suggestloripsum.twig");
            echo "
            ";
        }
        // line 22
        echo "
            ";
        // line 23
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("dashboard_below_header", "backend");
        echo "

            <div class=\"quicklinks\">
                ";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "contenttypes"), "method")) > 3)) {
            // line 27
            echo "                    ";
            echo twig_include($this->env, $context, "@bolt/dashboard/_quicklinks-dropdown.twig");
            echo "
                ";
        } else {
            // line 29
            echo "                    ";
            echo twig_include($this->env, $context, "@bolt/dashboard/_quicklinks-buttons.twig");
            echo "
                ";
        }
        // line 31
        echo "            </div>

            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "latest", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["contenttype"] => $context["multiplecontent"]) {
            // line 34
            echo "                ";
            if ($context["multiplecontent"]) {
                // line 35
                echo "                    ";
                echo twig_include($this->env, $context, "@bolt/dashboard/_recently_edited.twig");
                echo "
                ";
            }
            // line 37
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contenttype'], $context['multiplecontent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
            ";
        // line 39
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("dashboard_bottom", "backend");
        echo "

        </div>

        <aside class=\"col-md-4\">
            ";
        // line 44
        echo twig_include($this->env, $context, "@bolt/dashboard/_aside.twig");
        echo "
        </aside>

    </div>

";
        
        $__internal_ee0bc730fbc07f67fe63927b9b20416a91ac069896e0b485c651f540972653c9->leave($__internal_ee0bc730fbc07f67fe63927b9b20416a91ac069896e0b485c651f540972653c9_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 44,  168 => 39,  165 => 38,  151 => 37,  145 => 35,  142 => 34,  125 => 33,  121 => 31,  115 => 29,  109 => 27,  107 => 26,  101 => 23,  98 => 22,  92 => 20,  90 => 19,  85 => 17,  79 => 13,  73 => 12,  61 => 10,  49 => 7,  37 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavSecondary > Dashboard #}

{% extends '@bolt/_base/_page-nav.twig' %}

{% block page_nav 'Dashboard' %}

{% block page_title __('page.dashboard.title') %}

{# clear default messages, because we use them in a different spot, in this template #}
{% block messages \"\" %}

{% block page_main %}

    <div class=\"row\">
        <div class=\"col-md-8\">

            {{ include('@bolt/_sub/_messages.twig') }}

            {% if context.suggestloripsum %}
                {{ include('@bolt/dashboard/_suggestloripsum.twig') }}
            {% endif %}

            {{ widgets('dashboard_below_header', 'backend') }}

            <div class=\"quicklinks\">
                {% if app.config.get('contenttypes')|length() > 3 %}
                    {{ include('@bolt/dashboard/_quicklinks-dropdown.twig') }}
                {% else %}
                    {{ include('@bolt/dashboard/_quicklinks-buttons.twig') }}
                {% endif %}
            </div>

            {% for contenttype, multiplecontent in context.latest %}
                {% if multiplecontent %}
                    {{ include('@bolt/dashboard/_recently_edited.twig') }}
                {% endif %}
            {% endfor %}

            {{ widgets('dashboard_bottom', 'backend') }}

        </div>

        <aside class=\"col-md-4\">
            {{ include('@bolt/dashboard/_aside.twig') }}
        </aside>

    </div>

{% endblock page_main %}
", "@bolt/dashboard/dashboard.twig", "");
    }
}
