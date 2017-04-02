<?php

/* form_bolt_layout.twig */
class __TwigTemplate_4f42cc9ba9954d10580f02793712d271c3982dadcc8e73cb665cbb8a87fa7ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_398bc89cf5ef3c3f3f985cfc93c1e012bc5ccb36d537391c109b08e7d423ab1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398bc89cf5ef3c3f3f985cfc93c1e012bc5ccb36d537391c109b08e7d423ab1d->enter($__internal_398bc89cf5ef3c3f3f985cfc93c1e012bc5ccb36d537391c109b08e7d423ab1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_bolt_layout.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_errors', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        
        $__internal_398bc89cf5ef3c3f3f985cfc93c1e012bc5ccb36d537391c109b08e7d423ab1d->leave($__internal_398bc89cf5ef3c3f3f985cfc93c1e012bc5ccb36d537391c109b08e7d423ab1d_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7260ab187b4b1f90c993f7844f668bde15637f23e4d62d7bda7b55a201ead297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7260ab187b4b1f90c993f7844f668bde15637f23e4d62d7bda7b55a201ead297->enter($__internal_7260ab187b4b1f90c993f7844f668bde15637f23e4d62d7bda7b55a201ead297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"form-group ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("label_attr" => array("class" => "col-sm-2 control-label")));
        echo "
            <div class=\"col-sm-10 col-md-6 col-lg-4\">
                ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => array("class" => "form-control large")));
        echo "
                ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7260ab187b4b1f90c993f7844f668bde15637f23e4d62d7bda7b55a201ead297->leave($__internal_7260ab187b4b1f90c993f7844f668bde15637f23e4d62d7bda7b55a201ead297_prof);

    }

    // line 15
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d44ab599ac3e36d8173be92629a99b17ed927d2d1fc759b241ad1b5c2adb9b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44ab599ac3e36d8173be92629a99b17ed927d2d1fc759b241ad1b5c2adb9b1c->enter($__internal_d44ab599ac3e36d8173be92629a99b17ed927d2d1fc759b241ad1b5c2adb9b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 16
        echo "    ";
        ob_start();
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 18
            echo "            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, (((null === $this->getAttribute(            // line 19
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(            // line 20
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(            // line 21
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"))), "html", null, true);
            // line 22
            echo "</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d44ab599ac3e36d8173be92629a99b17ed927d2d1fc759b241ad1b5c2adb9b1c->leave($__internal_d44ab599ac3e36d8173be92629a99b17ed927d2d1fc759b241ad1b5c2adb9b1c_prof);

    }

    // line 27
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_2f649c3c1ed2ac5de43ae99cd0cfab140f13c758cc998e577dbe996510ab4750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f649c3c1ed2ac5de43ae99cd0cfab140f13c758cc998e577dbe996510ab4750->enter($__internal_2f649c3c1ed2ac5de43ae99cd0cfab140f13c758cc998e577dbe996510ab4750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 28
        echo "    ";
        ob_start();
        // line 29
        echo "        <div>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 31
            echo "                <div class=\"checkbox\">
                    <label>
                    ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), "html", null, true);
            // line 34
            echo "</label>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2f649c3c1ed2ac5de43ae99cd0cfab140f13c758cc998e577dbe996510ab4750->leave($__internal_2f649c3c1ed2ac5de43ae99cd0cfab140f13c758cc998e577dbe996510ab4750_prof);

    }

    public function getTemplateName()
    {
        return "form_bolt_layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 37,  140 => 34,  137 => 33,  133 => 31,  129 => 30,  126 => 29,  123 => 28,  117 => 27,  109 => 24,  102 => 22,  100 => 21,  99 => 20,  98 => 19,  96 => 18,  91 => 17,  88 => 16,  82 => 15,  70 => 9,  66 => 8,  61 => 6,  54 => 5,  51 => 4,  45 => 3,  38 => 27,  35 => 26,  33 => 15,  30 => 14,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# overrides for the defaults in vendor/symfony/twig-bridge/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig #}

{% block form_row %}
    {% spaceless %}
        <div class=\"form-group {% if errors|length > 0 %}has-error{% endif %}\">
            {{ form_label(form, null, {'label_attr': {'class':'col-sm-2 control-label' } }) }}
            <div class=\"col-sm-10 col-md-6 col-lg-4\">
                {{ form_widget(form, {'attr' : { 'class' : 'form-control large' } }) }}
                {{ form_errors(form) }}
            </div>
        </div>
    {% endspaceless %}
{% endblock form_row %}

{% block form_errors %}
    {% spaceless %}
        {% for error in errors %}
            <span class=\"help-block\">{{
            error.messagePluralization is null
            ? error.messageTemplate|trans(error.messageParameters, 'validators')
            : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators')
            }}</span>
        {% endfor %}
    {% endspaceless %}
{% endblock form_errors %}

{% block choice_widget_expanded %}
    {% spaceless %}
        <div>
            {% for child in form %}
                <div class=\"checkbox\">
                    <label>
                    {{ form_widget(child) }}{{ child.vars.label -}}
                    </label>
                </div>
            {% endfor %}
        </div>
    {% endspaceless %}
{% endblock choice_widget_expanded %}
", "form_bolt_layout.twig", "");
    }
}
