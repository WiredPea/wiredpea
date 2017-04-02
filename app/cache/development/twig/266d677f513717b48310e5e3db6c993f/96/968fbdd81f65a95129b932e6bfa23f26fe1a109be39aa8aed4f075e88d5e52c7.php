<?php

/* partials/_recordfooter.twig */
class __TwigTemplate_36405b5e3c45f8960d67f98b60d77048957b2d4a39a41fae62c1c60ebab41055 extends Twig_Template
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
        $__internal_04e07b4b637b9306a30818d85de74cfe04299c0ff736ff50bdb386816624a972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e07b4b637b9306a30818d85de74cfe04299c0ff736ff50bdb386816624a972->enter($__internal_04e07b4b637b9306a30818d85de74cfe04299c0ff736ff50bdb386816624a972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_recordfooter.twig"));

        // line 2
        echo "<p class=\"meta\">
    ";
        // line 3
        if ($this->getAttribute(($context["record"] ?? null), "editlink", array(), "method")) {
            // line 4
            echo "        <span class=\"edit-link\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "editlink", array(), "method"), "html", null, true);
            echo "\"><strong>Edit</strong></a></span> -
    ";
        }
        // line 6
        echo "    ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.written-by-on", array("%name%" => (($this->getAttribute($this->getAttribute(        // line 7
($context["record"] ?? null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["record"] ?? null), "user", array(), "any", false, true), "displayname", array()), $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Unknown"))) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Unknown"))), "%date%" => $this->env->getExtension('Bolt\Twig\TwigExtension')->localeDateTime($this->getAttribute(        // line 8
($context["record"] ?? null), "datepublish", array()), "%A %B %e, %Y")));
        // line 9
        echo "
</p>

";
        // line 12
        if (((array_key_exists("extended", $context)) ? (_twig_default_filter(($context["extended"] ?? null))) : (""))) {
            // line 13
            echo "    <p class=\"meta\">
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "link", array(), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.permalink");
            echo "</a> -
        ";
            // line 17
            echo "        ";
            echo twig_include($this->env, $context, "_sub_taxonomylinks.twig", array("record" => ($context["record"] ?? null)));
            echo "
    </p>

    ";
            // line 20
            $context["previous"] = $this->getAttribute(($context["record"] ?? null), "previous", array(0 => "id"), "method");
            // line 21
            echo "    ";
            $context["next"] = $this->getAttribute(($context["record"] ?? null), "next", array(0 => "id"), "method");
            // line 22
            echo "    ";
            if ((($context["previous"] ?? null) || ($context["next"] ?? null))) {
                // line 23
                echo "        <p class=\"meta\">
            ";
                // line 24
                if (($context["previous"] ?? null)) {
                    // line 25
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["previous"] ?? null), "link", array()), "html", null, true);
                    echo "\">&laquo; ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["previous"] ?? null), "title", array()), "html", null, true);
                    echo "</a>
            ";
                }
                // line 27
                echo "            ";
                if ((($context["previous"] ?? null) && ($context["next"] ?? null))) {
                    // line 28
                    echo "            -
            ";
                }
                // line 30
                echo "            ";
                if (($context["next"] ?? null)) {
                    // line 31
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["next"] ?? null), "link", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["next"] ?? null), "title", array()), "html", null, true);
                    echo " &raquo;</a>
            ";
                }
                // line 33
                echo "        </p>
    ";
            }
            // line 35
            echo "
    ";
            // line 36
            $context["relatedrecords"] = $this->getAttribute(($context["record"] ?? null), "related", array(), "method");
            // line 37
            echo "    ";
            if ( !twig_test_empty(($context["relatedrecords"] ?? null))) {
                // line 38
                echo "        <p class=\"meta\">";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.related-content");
                echo "
        <ul>
            ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relatedrecords"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                    // line 41
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "link", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "title", array()), "html", null, true);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "        </ul>
        </p>
    ";
            }
        }
        
        $__internal_04e07b4b637b9306a30818d85de74cfe04299c0ff736ff50bdb386816624a972->leave($__internal_04e07b4b637b9306a30818d85de74cfe04299c0ff736ff50bdb386816624a972_prof);

    }

    public function getTemplateName()
    {
        return "partials/_recordfooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 43,  122 => 41,  118 => 40,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  100 => 33,  92 => 31,  89 => 30,  85 => 28,  82 => 27,  74 => 25,  72 => 24,  69 => 23,  66 => 22,  63 => 21,  61 => 20,  54 => 17,  48 => 14,  45 => 13,  43 => 12,  38 => 9,  36 => 8,  35 => 7,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# This file is inserted as the 'footer' of each listed record. #}
<p class=\"meta\">
    {% if record.editlink() %}
        <span class=\"edit-link\"><a href=\"{{ record.editlink() }}\"><strong>Edit</strong></a></span> -
    {% endif %}
    {{ __('general.phrase.written-by-on', {
        '%name%': record.user.displayname|default(__('Unknown')),
        '%date%': record.datepublish|localedatetime(\"%A %B %e, %Y\")
    }) }}
</p>

{% if extended|default() %}
    <p class=\"meta\">
        <a href=\"{{ record.link() }}\">{{ __('general.phrase.permalink') }}</a> -
        {# include the 'default' links to taxonomies. Check the documentation for ways to modify and customize
           what is output to the browser: https://docs.bolt.cm/content/taxonomies #}
        {{ include('_sub_taxonomylinks.twig', { record: record }) }}
    </p>

    {% set previous = record.previous('id') %}
    {% set next = record.next('id') %}
    {% if previous or next %}
        <p class=\"meta\">
            {% if previous %}
                <a href=\"{{ previous.link }}\">&laquo; {{ previous.title }}</a>
            {% endif %}
            {% if previous and next %}
            -
            {% endif %}
            {% if next %}
                <a href=\"{{ next.link }}\">{{ next.title }} &raquo;</a>
            {% endif %}
        </p>
    {% endif %}

    {% set relatedrecords = record.related() %}
    {% if relatedrecords is not empty %}
        <p class=\"meta\">{{ __('general.phrase.related-content') }}
        <ul>
            {% for related in relatedrecords %}
                <li><a href=\"{{ related.link }}\">{{ related.title }}</a></li>
            {%  endfor %}
        </ul>
        </p>
    {% endif %}
{% endif %}
", "partials/_recordfooter.twig", "");
    }
}
