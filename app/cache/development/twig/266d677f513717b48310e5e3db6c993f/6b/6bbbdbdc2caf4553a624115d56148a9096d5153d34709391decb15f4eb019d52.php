<?php

/* @bolt/_sub/_messages.twig */
class __TwigTemplate_5cdaf6696ce01a4dae7647c85f3f4ded14700c2f074f8ece65ff3c6558ebf44b extends Twig_Template
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
        $__internal_6f6783e34c735e57b9290549527cfc1da90a5f64984d5ff83f6cb17cee466627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6783e34c735e57b9290549527cfc1da90a5f64984d5ff83f6cb17cee466627->enter($__internal_6f6783e34c735e57b9290549527cfc1da90a5f64984d5ff83f6cb17cee466627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_messages.twig"));

        // line 14
        echo "
";
        // line 27
        echo "
";
        // line 28
        $context["self"] = $this;
        // line 29
        if (((array_key_exists("wrapper", $context) && ($context["wrapper"] ?? null)) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["app"] ?? null), "logger.flash", array(), "array"), "keys", array(), "method")))) {
            // line 30
            echo "    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
            // line 32
            echo $context["self"]->getflashbag(($context["user"] ?? null));
            echo "
        </div>
    </div>
";
        } else {
            // line 36
            echo "    ";
            echo $context["self"]->getflashbag(($context["user"] ?? null));
            echo "
";
        }
        // line 38
        echo "
";
        // line 40
        echo "<noscript>
    <div class=\"alert alert-danger\">
        <p>";
        // line 42
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("generic.noscript.message");
        echo "</p>
    </div>
</noscript>
";
        
        $__internal_6f6783e34c735e57b9290549527cfc1da90a5f64984d5ff83f6cb17cee466627->leave($__internal_6f6783e34c735e57b9290549527cfc1da90a5f64984d5ff83f6cb17cee466627_prof);

    }

    // line 1
    public function getflashbag(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_be240d0673f1745b6b25a140c9ba07b9d35a382972d233c7e6da1ed940748e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_be240d0673f1745b6b25a140c9ba07b9d35a382972d233c7e6da1ed940748e59->enter($__internal_be240d0673f1745b6b25a140c9ba07b9d35a382972d233c7e6da1ed940748e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flashbag"));

            // line 2
            echo "    ";
            $context["self"] = $this;
            // line 3
            echo "
    ";
            // line 5
            echo "    ";
            if ((($context["user"] ?? null) != null)) {
                // line 6
                echo "        ";
                echo $context["self"]->getmessages("danger");
                echo "
        ";
                // line 7
                echo $context["self"]->getmessages("warning");
                echo "
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            echo $context["self"]->getmessages("error", "danger");
            echo "
    ";
            // line 11
            echo $context["self"]->getmessages("success");
            echo "
    ";
            // line 12
            echo $context["self"]->getmessages("info");
            echo "
";
            
            $__internal_be240d0673f1745b6b25a140c9ba07b9d35a382972d233c7e6da1ed940748e59->leave($__internal_be240d0673f1745b6b25a140c9ba07b9d35a382972d233c7e6da1ed940748e59_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getmessages($__key__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5b17fce46a5f6bc6858761442d108a05606b49d6f18bc84fea67886c0346857f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5b17fce46a5f6bc6858761442d108a05606b49d6f18bc84fea67886c0346857f->enter($__internal_5b17fce46a5f6bc6858761442d108a05606b49d6f18bc84fea67886c0346857f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "messages"));

            // line 16
            echo "    ";
            $context["shown"] = array();
            // line 17
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "logger.flash", array(), "array"), "get", array(0 => ($context["key"] ?? null)), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 18
                echo "        ";
                if (!twig_in_filter($context["msg"], ($context["shown"] ?? null))) {
                    // line 19
                    echo "            <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), ($context["key"] ?? null))) : (($context["key"] ?? null))), "html", null, true);
                    echo " alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                ";
                    // line 21
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->ymllink($context["msg"]);
                    echo "
            </div>
            ";
                    // line 23
                    $context["shown"] = twig_array_merge(($context["shown"] ?? null), array(0 => $context["msg"]));
                    // line 24
                    echo "        ";
                }
                // line 25
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5b17fce46a5f6bc6858761442d108a05606b49d6f18bc84fea67886c0346857f->leave($__internal_5b17fce46a5f6bc6858761442d108a05606b49d6f18bc84fea67886c0346857f_prof);

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
        return "@bolt/_sub/_messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 25,  171 => 24,  169 => 23,  164 => 21,  158 => 19,  155 => 18,  150 => 17,  147 => 16,  131 => 15,  111 => 12,  107 => 11,  103 => 10,  100 => 9,  95 => 7,  90 => 6,  87 => 5,  84 => 3,  81 => 2,  67 => 1,  56 => 42,  52 => 40,  49 => 38,  43 => 36,  36 => 32,  32 => 30,  30 => 29,  28 => 28,  25 => 27,  22 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro flashbag() %}
    {% import _self as self %}

    {# we only want to show these flashes to logged on users. #}
    {% if user != null %}
        {{ self.messages('danger') }}
        {{ self.messages('warning') }}
    {% endif %}

    {{ self.messages('error', 'danger') }}
    {{ self.messages('success') }}
    {{ self.messages('info') }}
{% endmacro %}

{% macro messages(key, class) %}
    {% set shown = [] %}
    {% for msg in app['logger.flash'].get(key) %}
        {% if msg not in shown %}
            <div class=\"alert alert-{{ class|default(key) }} alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                {{ msg|ymllink }}
            </div>
            {% set shown = shown|merge([msg]) %}
        {% endif %}
    {% endfor %}
{% endmacro %}

{% import _self as self %}
{% if wrapper is defined and wrapper and app['logger.flash'].keys() is not empty %}
    <div class=\"row\">
        <div class=\"col-md-8\">
            {{ self.flashbag(user) }}
        </div>
    </div>
{% else %}
    {{ self.flashbag(user) }}
{% endif %}

{# No Javascript #}
<noscript>
    <div class=\"alert alert-danger\">
        <p>{{ __('generic.noscript.message') }}</p>
    </div>
</noscript>
", "@bolt/_sub/_messages.twig", "");
    }
}
