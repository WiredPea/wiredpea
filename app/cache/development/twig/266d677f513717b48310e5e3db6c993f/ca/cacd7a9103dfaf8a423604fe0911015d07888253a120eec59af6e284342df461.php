<?php

/* @bolt/dashboard/_recently_edited.twig */
class __TwigTemplate_683ebb470dafc9a95e2a7abc9430b19bd4ccbcbd4692145b98fba3609fd801ce extends Twig_Template
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
        $__internal_d7b70dfb8d7358469747e8f467ff4c730255c289f6f2618a1cab432729d43c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b70dfb8d7358469747e8f467ff4c730255c289f6f2618a1cab432729d43c49->enter($__internal_d7b70dfb8d7358469747e8f467ff4c730255c289f6f2618a1cab432729d43c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/dashboard/_recently_edited.twig"));

        // line 1
        echo "<div class=\"contenttype-title\">
    <span class=\"pull-right\">
            <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("overview", array("contenttypeslug" => ($context["contenttype"] ?? null))), "html", null, true);
        echo "\" class=\"morelink\">
                ";
        // line 4
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.show-more", array("%contenttypes%" => ($context["contenttype"] ?? null)));
        echo " »
            </a>
        </span>
        <h3>";
        // line 7
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.recently-edited", array("%contenttypes%" => ($context["contenttype"] ?? null)));
        echo "</h3>
</div>

";
        // line 10
        echo twig_include($this->env, $context, "@bolt/_sub/_record_list_data.twig");
        echo "

<div class=\"buic-listing\" data-bolt-widget=\"buicListing\" data-contenttype=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["contenttype"] ?? null), "html", null, true);
        echo "\" data-contenttype-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, ($context["multiplecontent"] ?? null)), "contenttype", array()), "singular_name", array()), "html", null, true);
        echo "\" data-bolt_csrf_token=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->token(), "html", null, true);
        echo "\">
    <table class=\"table dashboardlisting listing\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["multiplecontent"] ?? null));
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
            // line 15
            echo "            ";
            $context["listing_vars"] = array("compact" => true, "content" =>             // line 17
$context["content"], "excerptlength" => 280, "permissions" => $this->getAttribute($this->getAttribute(            // line 19
($context["context"] ?? null), "permissions", array()), ($context["contenttype"] ?? null), array(), "array"), "thumbsize" => 54);
            // line 22
            echo "            ";
            echo twig_include($this->env, $context, array(0 => (("@bolt/custom/listing/" . $this->getAttribute($this->getAttribute($context["content"], "contenttype", array()), "slug", array())) . ".twig"), 1 => "@bolt/_sub/_listing.twig"), ($context["listing_vars"] ?? null));
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </table>
</div>
";
        
        $__internal_d7b70dfb8d7358469747e8f467ff4c730255c289f6f2618a1cab432729d43c49->leave($__internal_d7b70dfb8d7358469747e8f467ff4c730255c289f6f2618a1cab432729d43c49_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/_recently_edited.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 24,  78 => 22,  76 => 19,  75 => 17,  73 => 15,  56 => 14,  47 => 12,  42 => 10,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"contenttype-title\">
    <span class=\"pull-right\">
            <a href=\"{{ path('overview', {'contenttypeslug': contenttype}) }}\" class=\"morelink\">
                {{ __('contenttypes.generic.show-more', {'%contenttypes%': contenttype}) }} »
            </a>
        </span>
        <h3>{{ __('contenttypes.generic.recently-edited', {'%contenttypes%': contenttype}) }}</h3>
</div>

{{ include('@bolt/_sub/_record_list_data.twig') }}

<div class=\"buic-listing\" data-bolt-widget=\"buicListing\" data-contenttype=\"{{ contenttype }}\" data-contenttype-name=\"{{ multiplecontent|first.contenttype.singular_name }}\" data-bolt_csrf_token=\"{{ token() }}\">
    <table class=\"table dashboardlisting listing\">
        {% for content in multiplecontent %}
            {% set listing_vars = {
                'compact':       true,
                'content':       content,
                'excerptlength': 280,
                'permissions':   context.permissions[contenttype],
                'thumbsize':     54,
            } %}
            {{ include(['@bolt/custom/listing/' ~ content.contenttype.slug ~ '.twig', '@bolt/_sub/_listing.twig'],  listing_vars) }}
        {% endfor %}
    </table>
</div>
", "@bolt/dashboard/_recently_edited.twig", "");
    }
}
