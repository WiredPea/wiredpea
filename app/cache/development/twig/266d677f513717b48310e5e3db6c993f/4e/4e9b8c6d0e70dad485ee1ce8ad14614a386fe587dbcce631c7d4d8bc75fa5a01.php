<?php

/* @bolt/components/panel-lastmodified.twig */
class __TwigTemplate_1311e7b8aafcf12d04e8e6344d69632d7d6417ba5fc5924870fe50f259bc3cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("@bolt/_base/_panel.twig", "@bolt/components/panel-lastmodified.twig", 5);
        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22b3a1c5c64fc2466edc8356eaa0d2ee26c01219eac4a0d0b69603ba89dbd5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b3a1c5c64fc2466edc8356eaa0d2ee26c01219eac4a0d0b69603ba89dbd5c2->enter($__internal_22b3a1c5c64fc2466edc8356eaa0d2ee26c01219eac4a0d0b69603ba89dbd5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/components/panel-lastmodified.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22b3a1c5c64fc2466edc8356eaa0d2ee26c01219eac4a0d0b69603ba89dbd5c2->leave($__internal_22b3a1c5c64fc2466edc8356eaa0d2ee26c01219eac4a0d0b69603ba89dbd5c2_prof);

    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        $__internal_0c26bd86bd6cb6b71b7a742cc55dc5a1cb46f57965814d112a3f80e3ac2e7656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c26bd86bd6cb6b71b7a742cc55dc5a1cb46f57965814d112a3f80e3ac2e7656->enter($__internal_0c26bd86bd6cb6b71b7a742cc55dc5a1cb46f57965814d112a3f80e3ac2e7656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_class"));

        echo "panel-lastmodified";
        
        $__internal_0c26bd86bd6cb6b71b7a742cc55dc5a1cb46f57965814d112a3f80e3ac2e7656->leave($__internal_0c26bd86bd6cb6b71b7a742cc55dc5a1cb46f57965814d112a3f80e3ac2e7656_prof);

    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        $__internal_f59dc105488089b8e7bb0d7b3c49ea07a8bd3756f0f455655b89e60fb65595ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59dc105488089b8e7bb0d7b3c49ea07a8bd3756f0f455655b89e60fb65595ec->enter($__internal_f59dc105488089b8e7bb0d7b3c49ea07a8bd3756f0f455655b89e60fb65595ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_icon"));

        echo "fa-clock-o";
        
        $__internal_f59dc105488089b8e7bb0d7b3c49ea07a8bd3756f0f455655b89e60fb65595ec->leave($__internal_f59dc105488089b8e7bb0d7b3c49ea07a8bd3756f0f455655b89e60fb65595ec_prof);

    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        $__internal_8362484720052fd1981c46c0de47f5e89c3dddd68a30ac3d9c09097ec5618760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8362484720052fd1981c46c0de47f5e89c3dddd68a30ac3d9c09097ec5618760->enter($__internal_8362484720052fd1981c46c0de47f5e89c3dddd68a30ac3d9c09097ec5618760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_head"));

        // line 12
        echo "
    ";
        // line 13
        if ((($this->getAttribute(($context["context"] ?? null), "filtered", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "filtered", array()))) : (""))) {
            // line 14
            echo "        ";
            echo "Recent modifications";
            echo "
    ";
        } else {
            // line 16
            echo "        ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.last-modified", array("%contenttypes%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array())));
            echo "
    ";
        }
        // line 18
        echo "
";
        
        $__internal_8362484720052fd1981c46c0de47f5e89c3dddd68a30ac3d9c09097ec5618760->leave($__internal_8362484720052fd1981c46c0de47f5e89c3dddd68a30ac3d9c09097ec5618760_prof);

    }

    // line 21
    public function block_panel_body($context, array $blocks = array())
    {
        $__internal_df8c2debc51e78c13007fdd3c6935a603b4f4f8ad6735e2f2b6186444e5ba5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8c2debc51e78c13007fdd3c6935a603b4f4f8ad6735e2f2b6186444e5ba5ff->enter($__internal_df8c2debc51e78c13007fdd3c6935a603b4f4f8ad6735e2f2b6186444e5ba5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_body"));

        // line 22
        echo "
    ";
        // line 23
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/components/panel-lastmodified.twig", 23);
        // line 24
        echo "    ";
        $context["__internal_36f84ac177e5241b2e9b77df811d6fdf4cf872ae22607c40ffc8d036d7910cae"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/components/panel-lastmodified.twig", 24);
        // line 25
        echo "    ";
        $context["__internal_29b5bb83218d6462cade04a77cc5491d9214d89fb57f18152e979c0980168485"] = $this->loadTemplate("@bolt/changelog/_macros.twig", "@bolt/components/panel-lastmodified.twig", 25);
        // line 26
        echo "
    <ul>
        ";
        // line 28
        if ($this->getAttribute(($context["context"] ?? null), "changelog", array(), "any", true, true)) {
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "changelog", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["index"] => $context["entry"]) {
                // line 30
                echo "                <li>
                    ";
                // line 31
                if ((($this->getAttribute(($context["context"] ?? null), "filtered", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["context"] ?? null), "filtered", array()))) : (""))) {
                    // line 32
                    echo "                        ";
                    $context["title"] = $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singular_name", array());
                    // line 33
                    echo "                    ";
                } else {
                    // line 34
                    echo "                        ";
                    if ($this->getAttribute($context["entry"], "title", array())) {
                        // line 35
                        echo "                            ";
                        $context["title"] = $context["macro"]->getcontentlink_by_id($this->getAttribute(($context["context"] ?? null), "contenttype", array()), $this->getAttribute($context["entry"], "title", array()), $this->getAttribute($context["entry"], "contentid", array()));
                        // line 36
                        echo "                        ";
                    } else {
                        // line 37
                        echo "                            ";
                        $context["title"] = twig_replace_filter("%name% № %id%", array("%name%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "singular_name", array()), "%id%" => $this->getAttribute($context["entry"], "contentid", array())));
                        // line 38
                        echo "                        ";
                    }
                    // line 39
                    echo "                        № ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "contentid", array()), "html", null, true);
                    echo ".
                    ";
                }
                // line 41
                echo "                    ";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "
                    ";
                // line 42
                echo $context["__internal_29b5bb83218d6462cade04a77cc5491d9214d89fb57f18152e979c0980168485"]->getchangelog_mutation($this->getAttribute($context["entry"], "mutation_type", array()));
                echo "
                    ";
                // line 43
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.by");
                echo " <em>";
                echo $context["macro"]->getuserlink((($this->getAttribute($context["entry"], "ownerid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "ownerid", array()), "")) : ("")));
                echo "</em>
                    <small>(";
                // line 44
                echo $context["__internal_36f84ac177e5241b2e9b77df811d6fdf4cf872ae22607c40ffc8d036d7910cae"]->getbuic_moment($this->getAttribute($context["entry"], "date", array()));
                echo ")</small>
                    <small><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelogrecordsingle", array("contenttype" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array()), "contentid" => $this->getAttribute($context["entry"], "contentid", array()), "id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\">view</a></small>
                </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 48
                echo "                <li><em>";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.no-latest", array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array())));
                echo ".</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        } else {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "latest", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 52
                echo "                <li>
                    № ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "id", array()), "html", null, true);
                echo ".
                    ";
                // line 54
                echo $context["macro"]->getcontentlink($this->getAttribute(($context["context"] ?? null), "contenttype", array()), $context["content"]);
                echo "
                    <small>(";
                // line 55
                echo $context["__internal_36f84ac177e5241b2e9b77df811d6fdf4cf872ae22607c40ffc8d036d7910cae"]->getbuic_moment($this->getAttribute($context["content"], "datechanged", array()));
                echo ")</small>
                </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 58
                echo "                <li><em>";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.no-latest", array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array())));
                echo ".</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        ";
        }
        // line 61
        echo "    </ul>
    ";
        // line 62
        if ((($this->getAttribute(($context["context"] ?? null), "changelog", array(), "any", true, true) && $this->getAttribute(($context["context"] ?? null), "contentid", array())) && $this->getAttribute(($context["context"] ?? null), "filtered", array()))) {
            // line 63
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelogrecordall", array("contenttype" => $this->getAttribute($this->getAttribute(($context["context"] ?? null), "contenttype", array()), "slug", array()), "contentid" => $this->getAttribute(($context["context"] ?? null), "contentid", array()))), "html", null, true);
            echo "\">
            ";
            // line 64
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.full-list-ellipsis");
            echo "
        </a>
    ";
        }
        // line 67
        echo "
";
        
        $__internal_df8c2debc51e78c13007fdd3c6935a603b4f4f8ad6735e2f2b6186444e5ba5ff->leave($__internal_df8c2debc51e78c13007fdd3c6935a603b4f4f8ad6735e2f2b6186444e5ba5ff_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-lastmodified.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 67,  239 => 64,  234 => 63,  232 => 62,  229 => 61,  226 => 60,  217 => 58,  209 => 55,  205 => 54,  201 => 53,  198 => 52,  192 => 51,  189 => 50,  180 => 48,  172 => 45,  168 => 44,  162 => 43,  158 => 42,  153 => 41,  147 => 39,  144 => 38,  141 => 37,  138 => 36,  135 => 35,  132 => 34,  129 => 33,  126 => 32,  124 => 31,  121 => 30,  115 => 29,  113 => 28,  109 => 26,  106 => 25,  103 => 24,  101 => 23,  98 => 22,  92 => 21,  84 => 18,  78 => 16,  72 => 14,  70 => 13,  67 => 12,  61 => 11,  49 => 9,  37 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Sidebar-Panel: Displays recent modifications or last modified contenttypes
 # (Usage Example: Content-editor)
 #}
{% extends '@bolt/_base/_panel.twig' %}

{% block panel_class 'panel-lastmodified' %}

{% block panel_icon 'fa-clock-o' %}

{% block panel_head %}

    {% if context.filtered|default %}
        {{ 'Recent modifications' }}
    {% else %}
        {{ __('contenttypes.generic.last-modified', {'%contenttypes%': context.contenttype.slug}) }}
    {% endif %}

{% endblock panel_head %}

{% block panel_body %}

    {% import '@bolt/_macro/_macro.twig' as macro %}
    {% from '@bolt/_buic/_moment.twig' import buic_moment %}
    {% from '@bolt/changelog/_macros.twig' import changelog_mutation %}

    <ul>
        {% if context.changelog is defined %}
            {% for index, entry in context.changelog %}
                <li>
                    {% if context.filtered|default %}
                        {% set title = context.contenttype.singular_name %}
                    {% else %}
                        {% if entry.title %}
                            {% set title = macro.contentlink_by_id(context.contenttype, entry.title, entry.contentid) %}
                        {% else %}
                            {% set title = '%name% № %id%'|replace({'%name%': context.contenttype.singular_name, '%id%': entry.contentid}) %}
                        {% endif %}
                        № {{ entry.contentid }}.
                    {% endif %}
                    {{ title }}
                    {{ changelog_mutation(entry.mutation_type) }}
                    {{ __('general.phrase.by') }} <em>{{ macro.userlink(entry.ownerid|default('')) }}</em>
                    <small>({{ buic_moment(entry.date) }})</small>
                    <small><a href=\"{{ path('changelogrecordsingle', {'contenttype': context.contenttype.slug, 'contentid': entry.contentid, 'id': entry.id}) }}\">view</a></small>
                </li>
            {% else %}
                <li><em>{{ __('contenttypes.generic.no-latest', {'%contenttype%': context.contenttype.slug}) }}.</em></li>
            {% endfor %}
        {% else %}
            {% for content in context.latest %}
                <li>
                    № {{ content.id }}.
                    {{ macro.contentlink(context.contenttype, content) }}
                    <small>({{ buic_moment(content.datechanged) }})</small>
                </li>
            {% else %}
                <li><em>{{ __('contenttypes.generic.no-latest', {'%contenttype%': context.contenttype.slug}) }}.</em></li>
            {% endfor %}
        {% endif %}
    </ul>
    {% if context.changelog is defined and context.contentid and context.filtered %}
        <a href=\"{{ path('changelogrecordall', {'contenttype': context.contenttype.slug, 'contentid': context.contentid}) }}\">
            {{ __('general.phrase.full-list-ellipsis') }}
        </a>
    {% endif %}

{% endblock panel_body %}
", "@bolt/components/panel-lastmodified.twig", "");
    }
}
