<?php

/* @bolt/_buic/_listing.twig */
class __TwigTemplate_0462f74b15251fbc60f57266a18b93b0e83610aaac3a4119a0a09112136ba57d extends Twig_Template
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
        $__internal_ddb4223ad5894a1a0f5ec1a7fda01f686e7027aa3f57fe98c4a5bb4a411c84f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb4223ad5894a1a0f5ec1a7fda01f686e7027aa3f57fe98c4a5bb4a411c84f4->enter($__internal_ddb4223ad5894a1a0f5ec1a7fda01f686e7027aa3f57fe98c4a5bb4a411c84f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_buic/_listing.twig"));

        
        $__internal_ddb4223ad5894a1a0f5ec1a7fda01f686e7027aa3f57fe98c4a5bb4a411c84f4->leave($__internal_ddb4223ad5894a1a0f5ec1a7fda01f686e7027aa3f57fe98c4a5bb4a411c84f4_prof);

    }

    // line 1
    public function getbuic_listing_slink($__id__ = null, $__text__ = null, $__paramname__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "text" => $__text__,
            "paramname" => $__paramname__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a51cfb1440c625d379a843b41d66e03a772566ee230f3ed8b1d749245c391bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a51cfb1440c625d379a843b41d66e03a772566ee230f3ed8b1d749245c391bdd->enter($__internal_a51cfb1440c625d379a843b41d66e03a772566ee230f3ed8b1d749245c391bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "buic_listing_slink"));

            // line 2
            echo "    ";
            $context["paramname"] = ((array_key_exists("paramname", $context)) ? (_twig_default_filter(($context["paramname"] ?? null), "order")) : ("order"));
            // line 3
            echo "
    ";
            // line 4
            $context["params"] = array();
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "all", array()));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                if (($context["key"] != ($context["paramname"] ?? null))) {
                    // line 6
                    echo "        ";
                    $context["params"] = twig_array_merge(($context["params"] ?? null), array($context["key"] => $context["val"]));
                    // line 7
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "
    ";
            // line 9
            if (($this->env->getExtension('Bolt\Twig\TwigExtension')->request(($context["paramname"] ?? null)) == ($context["id"] ?? null))) {
                // line 10
                echo "        ";
                $context["class"] = "order-asc";
                // line 11
                echo "        ";
                $context["params"] = twig_array_merge(($context["params"] ?? null), array(($context["paramname"] ?? null) => ("-" . ($context["id"] ?? null))));
                // line 12
                echo "    ";
            } elseif (($this->env->getExtension('Bolt\Twig\TwigExtension')->request(($context["paramname"] ?? null)) == ("-" . ($context["id"] ?? null)))) {
                // line 13
                echo "        ";
                $context["class"] = "order-desc";
                // line 14
                echo "    ";
            } else {
                // line 15
                echo "        ";
                $context["class"] = "order-none";
                // line 16
                echo "        ";
                $context["params"] = twig_array_merge(($context["params"] ?? null), array(($context["paramname"] ?? null) => ($context["id"] ?? null)));
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, ("?" . twig_urlencode_filter(($context["params"] ?? null))), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "</a>
";
            
            $__internal_a51cfb1440c625d379a843b41d66e03a772566ee230f3ed8b1d749245c391bdd->leave($__internal_a51cfb1440c625d379a843b41d66e03a772566ee230f3ed8b1d749245c391bdd_prof);

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
        return "@bolt/_buic/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 19,  97 => 18,  94 => 17,  91 => 16,  88 => 15,  85 => 14,  82 => 13,  79 => 12,  76 => 11,  73 => 10,  71 => 9,  68 => 8,  61 => 7,  58 => 6,  52 => 5,  50 => 4,  47 => 3,  44 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro buic_listing_slink(id, text, paramname) %}
    {% set paramname = paramname|default('order') %}

    {% set params = {} %}
    {% for key, val in app.request.query.all if key != paramname %}
        {% set params = params|merge({(key): val}) %}
    {% endfor %}

    {% if request(paramname) == id %}
        {% set class = 'order-asc' %}
        {% set params = params|merge({(paramname): '-' ~ id}) %}
    {% elseif request(paramname) == '-' ~ id %}
        {% set class = 'order-desc' %}
    {% else %}
        {% set class = 'order-none' %}
        {% set params = params|merge({(paramname): id}) %}
    {% endif %}

    <a href=\"{{ '?' ~ params|url_encode }}\" class=\"{{ class }}\">{{ text }}</a>
{% endmacro %}
", "@bolt/_buic/_listing.twig", "");
    }
}
