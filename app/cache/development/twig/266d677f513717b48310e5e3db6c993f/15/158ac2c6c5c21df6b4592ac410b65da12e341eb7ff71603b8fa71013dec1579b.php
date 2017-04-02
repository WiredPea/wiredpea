<?php

/* @bolt/firstuser/firstuser.twig */
class __TwigTemplate_e8778ece1447e65b0d8c3789d39315f807ae9e766dab025ccb555359245f0a5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-no_nav.twig", "@bolt/firstuser/firstuser.twig", 3);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-no_nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0fac3810ec6577314a76242ff9a2b643535a4d7d0cf342764700323cc1da4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fac3810ec6577314a76242ff9a2b643535a4d7d0cf342764700323cc1da4a3->enter($__internal_d0fac3810ec6577314a76242ff9a2b643535a4d7d0cf342764700323cc1da4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/firstuser/firstuser.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0fac3810ec6577314a76242ff9a2b643535a4d7d0cf342764700323cc1da4a3->leave($__internal_d0fac3810ec6577314a76242ff9a2b643535a4d7d0cf342764700323cc1da4a3_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_bedc7235e9fdc61b23f3d4fc7652dffd79d4e3b6b72778565fd51a298920f322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bedc7235e9fdc61b23f3d4fc7652dffd79d4e3b6b72778565fd51a298920f322->enter($__internal_bedc7235e9fdc61b23f3d4fc7652dffd79d4e3b6b72778565fd51a298920f322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.create-user-first");
        
        $__internal_bedc7235e9fdc61b23f3d4fc7652dffd79d4e3b6b72778565fd51a298920f322->leave($__internal_bedc7235e9fdc61b23f3d4fc7652dffd79d4e3b6b72778565fd51a298920f322_prof);

    }

    // line 7
    public function block_page_main($context, array $blocks = array())
    {
        $__internal_0cac1f4d79a209b765baca7b95d724078d7156725ab1444d5ba7bb8f20d5391f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cac1f4d79a209b765baca7b95d724078d7156725ab1444d5ba7bb8f20d5391f->enter($__internal_0cac1f4d79a209b765baca7b95d724078d7156725ab1444d5ba7bb8f20d5391f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_main"));

        // line 8
        echo "
    ";
        // line 9
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme($this->getAttribute(($context["context"] ?? null), "form", array()), array(0 => "form_bolt_layout.twig"));
        // line 10
        echo "
    <p class=\"first-user\">
        ";
        // line 12
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.users-none-create-first-extended");
        echo "
    </p>

    <form method=\"post\" class=\"form-horizontal submitspinner\" autocomplete=\"off\">
        ";
        // line 18
        echo "        <input type=\"text\" style=\"display:none;\" />
        <input type=\"password\" style=\"display:none;\" />

        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["context"] ?? null), "form", array()), 'widget');
        echo "

        <button type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"login\">
            <i class=\"fa fa-sign-in fa-fw\"></i> ";
        // line 24
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.create-user-first");
        echo "
        </button>
    </form>

    ";
        // line 28
        if ( !twig_test_empty($this->getAttribute(($context["context"] ?? null), "note", array()))) {
            // line 29
            echo "        <p class=\"alert alert-info\" style=\"max-width: 550px; margin-top:10px;\">
            <strong>";
            // line 30
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.note-colon");
            echo "</strong> ";
            echo $this->getAttribute(($context["context"] ?? null), "note", array());
            echo "
        </p>
    ";
        }
        // line 33
        echo "
    <div class=\"progress\" id=\"progress-wrapper\">
        <div id=\"complexity-bar\" class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width: 0;\"></div>
    </div>

    <script type=\"text/javascript\">
        \$(function() {
            // Attach and detach the progressbar.
            var el = \$('#progress-wrapper').detach()
            \$('#form_password').parent().append(el);

            // Initialize complexify, to indicate password strength.
            \$('#form_password').complexify({'strengthScaleFactor': 0.6, 'minimumChars': 6}, function (valid, complexity) {
                var progressBar = \$('#complexity-bar');
                progressBar.toggleClass('progress-bar-danger', (complexity < 40 ));
                progressBar.toggleClass('progress-bar-warning', (complexity < 50 ));
                progressBar.toggleClass('progress-bar-success', (complexity > 60 ));
                progressBar.css({'width': complexity + '%'});
            });
        });
    </script>

";
        
        $__internal_0cac1f4d79a209b765baca7b95d724078d7156725ab1444d5ba7bb8f20d5391f->leave($__internal_0cac1f4d79a209b765baca7b95d724078d7156725ab1444d5ba7bb8f20d5391f_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/firstuser/firstuser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  92 => 30,  89 => 29,  87 => 28,  80 => 24,  74 => 21,  69 => 18,  62 => 12,  58 => 10,  56 => 9,  53 => 8,  47 => 7,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Page: Create the first User #}

{% extends '@bolt/_base/_page-no_nav.twig' %}

{% block page_title __('general.phrase.create-user-first') %}

{% block page_main %}

    {% form_theme context.form 'form_bolt_layout.twig' %}

    <p class=\"first-user\">
        {{ __('general.phrase.users-none-create-first-extended') }}
    </p>

    <form method=\"post\" class=\"form-horizontal submitspinner\" autocomplete=\"off\">
        {# Google Chrome, Firefox, MS edge all require this trick to prevent password fields from auto-filling.
           @see http://stackoverflow.com/questions/15738259/disabling-chrome-autofill #}
        <input type=\"text\" style=\"display:none;\" />
        <input type=\"password\" style=\"display:none;\" />

        {{ form_widget(context.form) }}

        <button type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"login\">
            <i class=\"fa fa-sign-in fa-fw\"></i> {{ __('general.phrase.create-user-first') }}
        </button>
    </form>

    {% if context.note is not empty %}
        <p class=\"alert alert-info\" style=\"max-width: 550px; margin-top:10px;\">
            <strong>{{ __('general.phrase.note-colon') }}</strong> {{ context.note|raw }}
        </p>
    {% endif %}

    <div class=\"progress\" id=\"progress-wrapper\">
        <div id=\"complexity-bar\" class=\"progress-bar progress-bar-success\" role=\"progressbar\" style=\"width: 0;\"></div>
    </div>

    <script type=\"text/javascript\">
        \$(function() {
            // Attach and detach the progressbar.
            var el = \$('#progress-wrapper').detach()
            \$('#form_password').parent().append(el);

            // Initialize complexify, to indicate password strength.
            \$('#form_password').complexify({'strengthScaleFactor': 0.6, 'minimumChars': 6}, function (valid, complexity) {
                var progressBar = \$('#complexity-bar');
                progressBar.toggleClass('progress-bar-danger', (complexity < 40 ));
                progressBar.toggleClass('progress-bar-warning', (complexity < 50 ));
                progressBar.toggleClass('progress-bar-success', (complexity > 60 ));
                progressBar.css({'width': complexity + '%'});
            });
        });
    </script>

{% endblock page_main %}
", "@bolt/firstuser/firstuser.twig", "");
    }
}
