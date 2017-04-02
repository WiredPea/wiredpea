<?php

/* partials/_aside.twig */
class __TwigTemplate_985bfa1e7a6ecf58005fe1956c2d00783f9c4239d7042b395e7a4451f11839df extends Twig_Template
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
        $__internal_199e73e2cd31b94e940088e83b8a1fe63a7c1cf146a04b88c97cb58a57b1d73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199e73e2cd31b94e940088e83b8a1fe63a7c1cf146a04b88c97cb58a57b1d73a->enter($__internal_199e73e2cd31b94e940088e83b8a1fe63a7c1cf146a04b88c97cb58a57b1d73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_aside.twig"));

        // line 1
        echo "<!-- Sidebar -->

<aside class=\"large-";
        // line 3
        echo twig_escape_filter($this->env, ($context["aside_width"] ?? null), "html", null, true);
        echo " columns\">

    ";
        // line 5
        if ($this->env->getExtension('Bolt\Twig\TwigExtension')->hasWidgets("aside_top")) {
            // line 6
            echo "
        ";
            // line 7
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("aside_top");
            echo "

    ";
        } else {
            // line 10
            echo "
        ";
            // line 12
            echo "        <div class=\"panel\">
            ";
            // line 15
            echo "            ";
            $template_storage = $context['app']['storage'];
            $context['block'] =             $template_storage->getContent("block/about-us", array() );
            // line 16
            echo "
            ";
            // line 19
            echo "            ";
            if ($this->getAttribute(($context["block"] ?? null), "title", array(), "any", true, true)) {
                // line 20
                echo "
                <h5>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? null), "title", array()), "html", null, true);
                echo "</h5>
                ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? null), "content", array()), "html", null, true);
                echo "

                ";
                // line 24
                if (($this->env->getExtension('Bolt\Twig\TwigExtension')->link($this->getAttribute(($context["block"] ?? null), "contentlink", array())) || $this->getAttribute(($context["block"] ?? null), "editlink", array(), "method"))) {
                    // line 25
                    echo "                    <p>
                        ";
                    // line 26
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->link($this->getAttribute(($context["block"] ?? null), "contentlink", array()), $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.read-more"));
                    echo " /
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? null), "editlink", array(), "method"), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.edit");
                    echo "</a>
                    </p>
                ";
                }
                // line 30
                echo "
            ";
            } else {
                // line 32
                echo "
                <h5>";
                // line 33
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.missing-about-page");
                echo "</h5>

                <p>";
                // line 35
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.missing-about-page-block");
                echo "</p>

            ";
            }
            // line 38
            echo "
        </div>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if ($this->env->getExtension('Bolt\Twig\TwigExtension')->hasWidgets("aside_bottom")) {
            // line 43
            echo "
        ";
            // line 44
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("aside_bottom");
            echo "

    ";
        } else {
            // line 47
            echo "
        ";
            // line 49
            echo "
        ";
            // line 58
            echo "
        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "contenttypes"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
                if ( !(($this->getAttribute($context["ct"], "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["ct"], "viewless", array()), false)) : (false))) {
                    // line 60
                    echo "
            ";
                    // line 61
                    $template_storage = $context['app']['storage'];
                    $context['records'] =                     $template_storage->getContent(($this->getAttribute(($context["ct"] ?? null), "slug", array()) . "/latest/3"), array() );
                    // line 62
                    echo "
            <h5>";
                    // line 63
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.recent", array("%contenttypes%" => $this->getAttribute($context["ct"], "slug", array())));
                    echo "</h5>
            <ul>
                ";
                    // line 65
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                        // line 66
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
                        echo "</a></li>
                ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 68
                        echo "                    <li>";
                        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.no-recent", array("%contenttype%" => $this->getAttribute($context["ct"], "slug", array())));
                        echo "</li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "            </ul>
            <p><a href=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contentlisting", array("contenttypeslug" => $this->getAttribute($context["ct"], "slug", array()))), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.overview", array("%contenttypes%" => $this->getAttribute($context["ct"], "slug", array())));
                    echo " &raquo;</a></p>


        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "
    ";
        }
        // line 77
        echo "
</aside>

<!-- End Sidebar -->
";
        
        $__internal_199e73e2cd31b94e940088e83b8a1fe63a7c1cf146a04b88c97cb58a57b1d73a->leave($__internal_199e73e2cd31b94e940088e83b8a1fe63a7c1cf146a04b88c97cb58a57b1d73a_prof);

    }

    public function getTemplateName()
    {
        return "partials/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 77,  192 => 75,  179 => 71,  176 => 70,  167 => 68,  157 => 66,  152 => 65,  147 => 63,  144 => 62,  141 => 61,  138 => 60,  133 => 59,  130 => 58,  127 => 49,  124 => 47,  118 => 44,  115 => 43,  113 => 42,  110 => 41,  105 => 38,  99 => 35,  94 => 33,  91 => 32,  87 => 30,  79 => 27,  75 => 26,  72 => 25,  70 => 24,  65 => 22,  61 => 21,  58 => 20,  55 => 19,  52 => 16,  48 => 15,  45 => 12,  42 => 10,  36 => 7,  33 => 6,  31 => 5,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Sidebar -->

<aside class=\"large-{{ aside_width }} columns\">

    {% if haswidgets('aside_top') %}

        {{ widgets('aside_top') }}

    {% else %}

        {# This part is only shown if there are no widgets in the 'aside_top' widgets slot. #}
        <div class=\"panel\">
            {# The next section attempts to fill the panel in the sidebar with the contents of the
               'about-us'-block, if it exists. First, attempt to fetch the block with slug 'about-us' #}
            {% setcontent block = \"block/about-us\" %}

            {# check if we have a title. If so, we know we have content to display. Otherwise, we will
               output a default text, telling the user to create the 'blocks' in the backend. #}
            {% if block.title is defined %}

                <h5>{{ block.title }}</h5>
                {{ block.content }}

                {% if link(block.contentlink) or block.editlink() %}
                    <p>
                        {{ link(block.contentlink, __('general.phrase.read-more')) }} /
                        <a href=\"{{ block.editlink() }}\">{{ __('general.phrase.edit') }}</a>
                    </p>
                {% endif %}

            {% else %}

                <h5>{{ __('general.phrase.missing-about-page') }}</h5>

                <p>{{ __('general.phrase.missing-about-page-block') }}</p>

            {% endif %}

        </div>
    {% endif %}

    {% if haswidgets('aside_bottom') %}

        {{ widgets('aside_bottom') }}

    {% else %}

        {# This part is only shown if there are no widgets in the 'aside_bottom' widgets slot. #}

        {# The next section iterates over all of the contenttypes, and prints a list
           of the five latest records of each of them. The 'magic' happens in the
           setcontent tag.. ct.slug ~ \"/latest/3\" concatenates the slug of the
           contenttype with /latest/3, so it becomes something like \"pages/latest/3\".
           The 'else' in the inner for-loop is only used if there are no 'records',
           so we can use it to print a helpful message.
           Lastly, \"path('contentlisting', {'contenttypeslug': ct.slug})\" will output something like '/pages',
           effectively creating a working link to that contenttpye's listing page. #}

        {% for ct in app.config.get('contenttypes') if not ct.viewless|default(false) %}

            {% setcontent records = ct.slug ~ \"/latest/3\" %}

            <h5>{{ __('contenttypes.generic.recent', {'%contenttypes%': ct.slug}) }}</h5>
            <ul>
                {% for record in records %}
                    <li><a href=\"{{ record.link }}\">{{ record.title }}</a></li>
                {% else %}
                    <li>{{ __('contenttypes.generic.no-recent', {'%contenttype%': ct.slug}) }}</li>
                {% endfor %}
            </ul>
            <p><a href=\"{{ path('contentlisting', {'contenttypeslug': ct.slug}) }}\">{{ __('contenttypes.generic.overview',{'%contenttypes%': ct.slug}) }} &raquo;</a></p>


        {% endfor %}

    {% endif %}

</aside>

<!-- End Sidebar -->
", "partials/_aside.twig", "");
    }
}
