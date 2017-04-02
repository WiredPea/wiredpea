<?php

/* @bolt/_sub/_record_list.twig */
class __TwigTemplate_d573761aa31f04b617e9cc0313e2ed93b59c09e96e7d9f5bbbadb3e723bbb71f extends Twig_Template
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
        $__internal_c552d0cf1690912af8437f687b05211a8b982f03ea3c4a8e086414b20af63387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c552d0cf1690912af8437f687b05211a8b982f03ea3c4a8e086414b20af63387->enter($__internal_c552d0cf1690912af8437f687b05211a8b982f03ea3c4a8e086414b20af63387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_record_list.twig"));

        
        $__internal_c552d0cf1690912af8437f687b05211a8b982f03ea3c4a8e086414b20af63387->leave($__internal_c552d0cf1690912af8437f687b05211a8b982f03ea3c4a8e086414b20af63387_prof);

    }

    // line 1
    public function getrecord_list($__contenttype__ = null, $__multiplecontent__ = null, $__permissions__ = null, $__extra_classes__ = null, $__async__ = null, $__filter__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "multiplecontent" => $__multiplecontent__,
            "permissions" => $__permissions__,
            "extra_classes" => $__extra_classes__,
            "async" => $__async__,
            "filter" => $__filter__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8eceb1d0e2416f3b5838e476f69686ab5ea2cb28b436fd75aa9fbf6c9bfb906d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_8eceb1d0e2416f3b5838e476f69686ab5ea2cb28b436fd75aa9fbf6c9bfb906d->enter($__internal_8eceb1d0e2416f3b5838e476f69686ab5ea2cb28b436fd75aa9fbf6c9bfb906d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "record_list"));

            // line 2
            echo "    ";
            $context["async"] = ((array_key_exists("async", $context)) ? (_twig_default_filter(($context["async"] ?? null), false)) : (false));
            // line 3
            echo "    ";
            $context["lastgroup"] = "----";
            // line 4
            echo "    ";
            $context["any_deletable"] = false;
            // line 5
            echo "    ";
            $context["any_editable"] = false;
            // line 6
            echo "    ";
            $context["includes"] = array(0 => (("@bolt/custom/listing/" . $this->getAttribute(            // line 7
($context["contenttype"] ?? null), "slug", array())) . ".twig"), 1 => "@bolt/_sub/_listing.twig");
            // line 10
            echo "
    ";
            // line 11
            if ( !($context["async"] ?? null)) {
                // line 12
                echo "        ";
                echo twig_include($this->env, $context, "@bolt/_sub/_record_list_data.twig");
                echo "
    ";
            }
            // line 14
            echo "
    ";
            // line 15
            ob_start();
            // line 16
            echo "        <button type=\"button\" data-stb-cmd=\"record:delete\" class=\"danger separator\"><i class=\"fa fa-trash\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.delete");
            echo "</button>
        <button type=\"button\" data-stb-cmd=\"record:publish\"><i class=\"fa fa-circle status-published\"></i> ";
            // line 17
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.publish");
            echo "</button>
        <button type=\"button\" data-stb-cmd=\"record:depublish\"><i class=\"fa fa-circle status-held\"></i> ";
            // line 18
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.depublish");
            echo "</button>
        <button type=\"button\" data-stb-cmd=\"record:draft\"><i class=\"fa fa-circle status-draft\"></i> ";
            // line 19
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.draft");
            echo "</button>
    ";
            $context["selection_toolbar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 21
            echo "
    ";
            // line 22
            if ( !($context["async"] ?? null)) {
                // line 23
                echo "        <div class=\"buic-listing\" data-bolt-widget=\"buicListing\" data-contenttype=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["contenttype"] ?? null), "slug", array()), "html", null, true);
                echo "\" data-contenttype-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["contenttype"] ?? null), "singular_name", array()), "html", null, true);
                echo "\" data-bolt_csrf_token=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->token(), "html", null, true);
                echo "\">
    ";
            }
            // line 25
            echo "        <table class=\"";
            echo twig_escape_filter($this->env, ($context["extra_classes"] ?? null), "html", null, true);
            echo " dashboardlisting listing\">
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["multiplecontent"] ?? null));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 27
                echo "                ";
                $context["editable"] = $this->getAttribute(($context["permissions"] ?? null), "edit", array());
                // line 28
                echo "                ";
                if (($context["editable"] ?? null)) {
                    // line 29
                    echo "                    ";
                    $context["any_editable"] = true;
                    // line 30
                    echo "                ";
                }
                // line 31
                echo "                ";
                $context["deletable"] = $this->getAttribute(($context["permissions"] ?? null), "delete", array());
                // line 32
                echo "                ";
                if (($context["deletable"] ?? null)) {
                    // line 33
                    echo "                    ";
                    $context["any_deletable"] = true;
                    // line 34
                    echo "                ";
                }
                // line 35
                echo "
                ";
                // line 36
                $context["new_group"] = ($this->getAttribute($this->getAttribute($context["content"], "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($this->getAttribute($context["content"], "group", array()), "name", array()) != ($context["lastgroup"] ?? null))));
                // line 37
                echo "
                ";
                // line 38
                $context["listing_vars"] = array("compact" => false, "content" =>                 // line 40
$context["content"], "excerptlength" => 380, "permissions" =>                 // line 42
($context["permissions"] ?? null), "thumbsize" => 80, "internal" => array("selection_toolbar" =>                 // line 45
($context["selection_toolbar"] ?? null)), "filter" =>                 // line 47
($context["filter"] ?? null));
                // line 49
                echo "                ";
                echo twig_include($this->env, $context, ($context["includes"] ?? null), ($context["listing_vars"] ?? null));
                echo "

                ";
                // line 51
                if (($this->getAttribute($this->getAttribute($context["content"], "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($this->getAttribute($context["content"], "group", array()), "name", array()) != ($context["lastgroup"] ?? null))))) {
                    // line 52
                    echo "                    ";
                    $context["lastgroup"] = $this->getAttribute($this->getAttribute($context["content"], "group", array()), "name", array());
                    // line 53
                    echo "                ";
                }
                // line 54
                echo "            ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 55
                echo "                ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.none-available", array("%contenttypes%" => $this->getAttribute(($context["contenttype"] ?? null), "slug", array())));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        </table>

        ";
            // line 59
            $context["__internal_f4867e9071db34fd99fbf3972d3c01aa04bc155447cb6e4a545247400c2f89a9"] = $this->loadTemplate("@bolt/_macro/_pager.twig", "@bolt/_sub/_record_list.twig", 59);
            // line 60
            echo "        ";
            echo $context["__internal_f4867e9071db34fd99fbf3972d3c01aa04bc155447cb6e4a545247400c2f89a9"]->getpager($this->getAttribute(($context["contenttype"] ?? null), "slug", array()));
            echo "
    ";
            // line 61
            if ( !($context["async"] ?? null)) {
                // line 62
                echo "        </div>
    ";
            }
            // line 64
            echo "
";
            
            $__internal_8eceb1d0e2416f3b5838e476f69686ab5ea2cb28b436fd75aa9fbf6c9bfb906d->leave($__internal_8eceb1d0e2416f3b5838e476f69686ab5ea2cb28b436fd75aa9fbf6c9bfb906d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_record_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 64,  222 => 62,  220 => 61,  215 => 60,  213 => 59,  209 => 57,  200 => 55,  187 => 54,  184 => 53,  181 => 52,  179 => 51,  173 => 49,  171 => 47,  170 => 45,  169 => 42,  168 => 40,  167 => 38,  164 => 37,  162 => 36,  159 => 35,  156 => 34,  153 => 33,  150 => 32,  147 => 31,  144 => 30,  141 => 29,  138 => 28,  135 => 27,  117 => 26,  112 => 25,  102 => 23,  100 => 22,  97 => 21,  92 => 19,  88 => 18,  84 => 17,  79 => 16,  77 => 15,  74 => 14,  68 => 12,  66 => 11,  63 => 10,  61 => 7,  59 => 6,  56 => 5,  53 => 4,  50 => 3,  47 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro record_list(contenttype, multiplecontent, permissions, extra_classes, async, filter) %}
    {% set async = async|default(false) %}
    {% set lastgroup = \"----\" %}
    {% set any_deletable = false %}
    {% set any_editable = false %}
    {% set includes = [
        '@bolt/custom/listing/' ~ contenttype.slug ~ '.twig',
        '@bolt/_sub/_listing.twig']
    %}

    {% if not async %}
        {{ include('@bolt/_sub/_record_list_data.twig') }}
    {% endif %}

    {% set selection_toolbar %}
        <button type=\"button\" data-stb-cmd=\"record:delete\" class=\"danger separator\"><i class=\"fa fa-trash\"></i> {{ __('general.phrase.delete') }}</button>
        <button type=\"button\" data-stb-cmd=\"record:publish\"><i class=\"fa fa-circle status-published\"></i> {{ __('general.phrase.publish') }}</button>
        <button type=\"button\" data-stb-cmd=\"record:depublish\"><i class=\"fa fa-circle status-held\"></i> {{ __('general.phrase.depublish') }}</button>
        <button type=\"button\" data-stb-cmd=\"record:draft\"><i class=\"fa fa-circle status-draft\"></i> {{ __('general.phrase.draft') }}</button>
    {% endset %}

    {% if not async %}
        <div class=\"buic-listing\" data-bolt-widget=\"buicListing\" data-contenttype=\"{{ contenttype.slug }}\" data-contenttype-name=\"{{ contenttype.singular_name }}\" data-bolt_csrf_token=\"{{ token() }}\">
    {% endif %}
        <table class=\"{{ extra_classes }} dashboardlisting listing\">
            {% for content in multiplecontent %}
                {% set editable = permissions.edit %}
                {% if editable %}
                    {% set any_editable = true %}
                {% endif %}
                {% set deletable = permissions.delete %}
                {% if deletable %}
                    {% set any_deletable = true %}
                {% endif %}

                {% set new_group = content.group.name is defined and (loop.first or content.group.name != lastgroup) %}

                {% set listing_vars = {
                    'compact':       false,
                    'content':       content,
                    'excerptlength': 380,
                    'permissions':   permissions,
                    'thumbsize':     80,
                    'internal': {
                        'selection_toolbar': selection_toolbar
                    },
                    'filter':        filter
                } %}
                {{ include(includes, listing_vars) }}

                {% if content.group.name is defined and (loop.first or content.group.name != lastgroup) %}
                    {% set lastgroup = content.group.name %}
                {% endif %}
            {% else %}
                {{ __('contenttypes.generic.none-available', {'%contenttypes%': contenttype.slug}) }}
            {% endfor %}
        </table>

        {% from '@bolt/_macro/_pager.twig' import pager %}
        {{ pager(contenttype.slug) }}
    {% if not async %}
        </div>
    {% endif %}

{% endmacro %}
", "@bolt/_sub/_record_list.twig", "");
    }
}
