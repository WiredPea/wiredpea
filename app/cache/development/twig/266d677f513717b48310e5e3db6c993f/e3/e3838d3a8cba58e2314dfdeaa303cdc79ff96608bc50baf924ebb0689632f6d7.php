<?php

/* @bolt/prefill/prefill.twig */
class __TwigTemplate_e54284bf4362f249d49851a41c25a6d320ac73854e49feeec7cf53494b18499b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/prefill/prefill.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85bd9c0bee00cce82e93475f295eb926afd08a9d77d8d5e372dd65fdfa69258b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85bd9c0bee00cce82e93475f295eb926afd08a9d77d8d5e372dd65fdfa69258b->enter($__internal_85bd9c0bee00cce82e93475f295eb926afd08a9d77d8d5e372dd65fdfa69258b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/prefill/prefill.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85bd9c0bee00cce82e93475f295eb926afd08a9d77d8d5e372dd65fdfa69258b->leave($__internal_85bd9c0bee00cce82e93475f295eb926afd08a9d77d8d5e372dd65fdfa69258b_prof);

    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        $__internal_126d651debb92d29e139ef8c30e946e79c79fe1f452695b4e63c833068e72b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126d651debb92d29e139ef8c30e946e79c79fe1f452695b4e63c833068e72b2f->enter($__internal_126d651debb92d29e139ef8c30e946e79c79fe1f452695b4e63c833068e72b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_nav"));

        echo "Settings/Configuration";
        
        $__internal_126d651debb92d29e139ef8c30e946e79c79fe1f452695b4e63c833068e72b2f->leave($__internal_126d651debb92d29e139ef8c30e946e79c79fe1f452695b4e63c833068e72b2f_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ea581cca4b3db4e97ca3f4c129d88389e6feb0739698d1b726d8fb20fb329a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea581cca4b3db4e97ca3f4c129d88389e6feb0739698d1b726d8fb20fb329a70->enter($__internal_ea581cca4b3db4e97ca3f4c129d88389e6feb0739698d1b726d8fb20fb329a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.database-prefill-dummy-content");
        
        $__internal_ea581cca4b3db4e97ca3f4c129d88389e6feb0739698d1b726d8fb20fb329a70->leave($__internal_ea581cca4b3db4e97ca3f4c129d88389e6feb0739698d1b726d8fb20fb329a70_prof);

    }

    // line 9
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_26938d57937c6bd62bdb21b5c2f2fdb21856797ebf780e3aaf638ea788864aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26938d57937c6bd62bdb21b5c2f2fdb21856797ebf780e3aaf638ea788864aa5->enter($__internal_26938d57937c6bd62bdb21b5c2f2fdb21856797ebf780e3aaf638ea788864aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 10
        echo "    ";
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/prefill/prefill.twig", 10);
        // line 11
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <form method=\"post\" id=\"prefill\" class=\"form-horizontal\"";
        // line 14
        echo $context["macro"]->getattr(array("_bind" => array(0 => "prefill")));
        echo ">
                <div id=\"form\">
                    <div class=\"control-group\">
                        <div class=\"info\">
                            ";
        // line 18
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "translator", array()), "trans", array(0 => "prefill.short_help", 1 => array(), 2 => "infos"), "method");
        echo "
                        </div>

                        <div id=\"form_contenttypes\" style=\"border-bottom: 1px solid #eee; margin-bottom: 10px; width: 50%\">
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "contenttypes", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["ctype"]) {
            // line 23
            echo "                                <div>
                                    <label>
                                        <input type=\"checkbox\"
                                               id=\"form_contenttypes_";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\"
                                               name=\"form[contenttypes][]\"
                                               value=\"";
            // line 28
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["ctype"], "html", null, true);
            echo "
                                    </label>
                                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['ctype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </div>
                    </div>
                </div>

                ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["context"] ?? null), "form", array()), "_token", array()), 'widget');
        echo "

                <div style=\"margin-top: 12px\">
                    <button type=\"button\" class=\"btn btn-xs\" id=\"check-all\"><i class=\"fa fa-fw fa-check-square-o\"></i> ";
        // line 39
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.select-all");
        echo "</button>
                    <button type=\"button\" class=\"btn btn-xs\" id=\"uncheck-all\"><i class=\"fa fa-fw fa-square-o\"></i> ";
        // line 40
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.deselect-all");
        echo "</button>
                </div>
                <div style=\"margin-top: 12px\">
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-wrench\"></i> ";
        // line 43
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.database-prefill");
        echo "</button>
                </div>

            </form>

        </div>
    </div>

";
        
        $__internal_26938d57937c6bd62bdb21b5c2f2fdb21856797ebf780e3aaf638ea788864aa5->leave($__internal_26938d57937c6bd62bdb21b5c2f2fdb21856797ebf780e3aaf638ea788864aa5_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/prefill/prefill.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 43,  151 => 40,  147 => 39,  141 => 36,  135 => 32,  115 => 28,  110 => 26,  105 => 23,  88 => 22,  81 => 18,  74 => 14,  69 => 11,  66 => 10,  60 => 9,  48 => 7,  36 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: NavSecondary > Configuration > Check database > Records with... #}

{% extends '@bolt/_base/_page-nav.twig' %}

{% block page_nav 'Settings/Configuration' %}

{% block page_title __('general.phrase.database-prefill-dummy-content') %}

{% block page_main %}
    {% import '@bolt/_macro/_macro.twig' as macro %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <form method=\"post\" id=\"prefill\" class=\"form-horizontal\"{{ macro.attr({_bind: ['prefill']}) }}>
                <div id=\"form\">
                    <div class=\"control-group\">
                        <div class=\"info\">
                            {{ app.translator.trans('prefill.short_help', {}, 'infos')|raw }}
                        </div>

                        <div id=\"form_contenttypes\" style=\"border-bottom: 1px solid #eee; margin-bottom: 10px; width: 50%\">
                            {% for key,ctype in context.contenttypes %}
                                <div>
                                    <label>
                                        <input type=\"checkbox\"
                                               id=\"form_contenttypes_{{ loop.index0 }}\"
                                               name=\"form[contenttypes][]\"
                                               value=\"{{ key }}\">{{ ctype }}
                                    </label>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>

                {{ form_widget(context.form._token) }}

                <div style=\"margin-top: 12px\">
                    <button type=\"button\" class=\"btn btn-xs\" id=\"check-all\"><i class=\"fa fa-fw fa-check-square-o\"></i> {{ __('general.phrase.select-all') }}</button>
                    <button type=\"button\" class=\"btn btn-xs\" id=\"uncheck-all\"><i class=\"fa fa-fw fa-square-o\"></i> {{ __('general.phrase.deselect-all') }}</button>
                </div>
                <div style=\"margin-top: 12px\">
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-wrench\"></i> {{ __('general.phrase.database-prefill') }}</button>
                </div>

            </form>

        </div>
    </div>

{% endblock page_main %}
", "@bolt/prefill/prefill.twig", "");
    }
}
