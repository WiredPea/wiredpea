<?php

/* @bolt/_macro/_panels.twig */
class __TwigTemplate_d1c04819ab6cf94b1c99a7f31759e68a296b56f12f42ce5c37c04797e22c39c4 extends Twig_Template
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
        $__internal_e770bd60328d6cdb1b1c9ae4b95e32e9da6a2e41ab0fffdad50cb07b5f6585bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e770bd60328d6cdb1b1c9ae4b95e32e9da6a2e41ab0fffdad50cb07b5f6585bd->enter($__internal_e770bd60328d6cdb1b1c9ae4b95e32e9da6a2e41ab0fffdad50cb07b5f6585bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_macro/_panels.twig"));

        // line 14
        echo "

";
        // line 29
        echo "

";
        
        $__internal_e770bd60328d6cdb1b1c9ae4b95e32e9da6a2e41ab0fffdad50cb07b5f6585bd->leave($__internal_e770bd60328d6cdb1b1c9ae4b95e32e9da6a2e41ab0fffdad50cb07b5f6585bd_prof);

    }

    // line 7
    public function getstack($__items__ = null, $__ommit_empty__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "ommit_empty" => $__ommit_empty__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9904689c9a72ab4d5ba2b18859c8690933dc3257d33e1394efe7aa35b1b7bc16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9904689c9a72ab4d5ba2b18859c8690933dc3257d33e1394efe7aa35b1b7bc16->enter($__internal_9904689c9a72ab4d5ba2b18859c8690933dc3257d33e1394efe7aa35b1b7bc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "stack"));

            // line 8
            echo "    ";
            if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method")) {
                // line 9
                echo "        ";
                if (( !((array_key_exists("ommit_empty", $context)) ? (_twig_default_filter(($context["ommit_empty"] ?? null), false)) : (false)) ||  !twig_test_empty($this->env->getExtension('Bolt\Twig\TwigExtension')->stackItems()))) {
                    // line 10
                    echo "            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stack/show", array("items" => ((array_key_exists("item", $context)) ? (_twig_default_filter(($context["item"] ?? null), 10)) : (10)))));
                    echo "
        ";
                }
                // line 12
                echo "    ";
            }
            
            $__internal_9904689c9a72ab4d5ba2b18859c8690933dc3257d33e1394efe7aa35b1b7bc16->leave($__internal_9904689c9a72ab4d5ba2b18859c8690933dc3257d33e1394efe7aa35b1b7bc16_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getlastmodified($__contenttype_slug__ = null, $__content_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype_slug" => $__contenttype_slug__,
            "content_id" => $__content_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9dc4187bd70d0888c5214868718d3b0958a059f68bde0f1d07ea8f237ee3f6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9dc4187bd70d0888c5214868718d3b0958a059f68bde0f1d07ea8f237ee3f6fe->enter($__internal_9dc4187bd70d0888c5214868718d3b0958a059f68bde0f1d07ea8f237ee3f6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "lastmodified"));

            // line 23
            echo "    ";
            if ((((array_key_exists("content_id", $context)) ? (_twig_default_filter(($context["content_id"] ?? null), false)) : (false)) ||  !twig_test_empty($this->env->getExtension('Bolt\Twig\TwigExtension')->stackItems()))) {
                // line 24
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lastmodified", array("contenttypeslug" => ($context["contenttype_slug"] ?? null))));
                echo "
    ";
            } else {
                // line 26
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lastmodified", array("contenttypeslug" => ($context["contenttype_slug"] ?? null), "contentid" => ($context["content_id"] ?? null))));
                echo "
    ";
            }
            
            $__internal_9dc4187bd70d0888c5214868718d3b0958a059f68bde0f1d07ea8f237ee3f6fe->leave($__internal_9dc4187bd70d0888c5214868718d3b0958a059f68bde0f1d07ea8f237ee3f6fe_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getchanges($__contenttype_slug__ = null, $__content_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype_slug" => $__contenttype_slug__,
            "content_id" => $__content_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_47a2d46fe63b1a39761c345539d53d91922388b5a3b2e03e1aa0d417d2af6be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_47a2d46fe63b1a39761c345539d53d91922388b5a3b2e03e1aa0d417d2af6be8->enter($__internal_47a2d46fe63b1a39761c345539d53d91922388b5a3b2e03e1aa0d417d2af6be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "changes"));

            // line 38
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "general/changelog/enabled", 1 => true), "method")) {
                // line 39
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelogrecord", array("contenttype" => ($context["contenttype_slug"] ?? null), "contentid" => ($context["content_id"] ?? null))));
                echo "
    ";
            }
            
            $__internal_47a2d46fe63b1a39761c345539d53d91922388b5a3b2e03e1aa0d417d2af6be8->leave($__internal_47a2d46fe63b1a39761c345539d53d91922388b5a3b2e03e1aa0d417d2af6be8_prof);

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
        return "@bolt/_macro/_panels.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 39,  145 => 38,  129 => 37,  107 => 26,  101 => 24,  98 => 23,  82 => 22,  63 => 12,  57 => 10,  54 => 9,  51 => 8,  35 => 7,  26 => 29,  22 => 14,);
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
 # Renders a stack panel
 #
 # @param int  items (default: 10)
 # @param bool ommit_empty (default: false)
 #}
{% macro stack(items, ommit_empty) %}
    {% if not app.config.get('general/backend/stack/disable', false) %}
        {% if not ommit_empty|default(false) or stackitems() is not empty %}
            {{ render(path('stack/show', {'items': item|default(10)} )) }}
        {% endif %}
    {% endif %}
{% endmacro %}


{##
 # Renders a last modified panel
 #
 # @param string contenttype_slug
 # @param mixed  content_id (default: false)
 #}
{% macro lastmodified(contenttype_slug, content_id) %}
    {% if content_id|default(false) or stackitems() is not empty %}
        {{ render(path('lastmodified', {'contenttypeslug': contenttype_slug})) }}
    {% else %}
        {{ render(path('lastmodified', {'contenttypeslug': contenttype_slug, 'contentid': content_id})) }}
    {% endif %}
{% endmacro %}


{##
 # Renders a record changes panel
 #
 # @param string contenttype_slug
 # @param mixed  content_id (default: false)
 #}
{% macro changes(contenttype_slug, content_id) %}
    {% if app.config.get('general/changelog/enabled', true) %}
        {{ render(path('changelogrecord', {'contenttype': contenttype_slug, 'contentid': content_id})) }}
    {% endif %}
{% endmacro %}
", "@bolt/_macro/_panels.twig", "");
    }
}
