<?php

/* @bolt/_sub/_record_list_data.twig */
class __TwigTemplate_dda4ab9e1741caafea6e1a8e252883d896a35db4fcd8fc92a67c4f2512432afb extends Twig_Template
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
        $__internal_32cbc4fba2dee734ce68b7db57ad9644462b5f261fcd1a8bad16a40d1240eabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cbc4fba2dee734ce68b7db57ad9644462b5f261fcd1a8bad16a40d1240eabd->enter($__internal_32cbc4fba2dee734ce68b7db57ad9644462b5f261fcd1a8bad16a40d1240eabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_sub/_record_list_data.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.confirm.one", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Are you sure you want to do this for 1 record?")), "html", null, true);
        echo "
";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.confirm.multi", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Are you sure you want to do this for %NUMBER% records?")), "html", null, true);
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.confirm.no-undo", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-undo")), "html", null, true);
        echo "
";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.action.cancel", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.cancel")), "html", null, true);
        echo "
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.action.delete", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.delete", array("%contenttype%" => "%CTNAME%"))), "html", null, true);
        echo "
";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.action.publish", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.publish", array("%contenttype%" => "%CTNAME%"))), "html", null, true);
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.action.depublish", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-change-held")), "html", null, true);
        echo "
";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.action.draft", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-change-draft")), "html", null, true);
        echo "
";
        
        $__internal_32cbc4fba2dee734ce68b7db57ad9644462b5f261fcd1a8bad16a40d1240eabd->leave($__internal_32cbc4fba2dee734ce68b7db57ad9644462b5f261fcd1a8bad16a40d1240eabd_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_record_list_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  30 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ data('recordlisting.confirm.one',      __('Are you sure you want to do this for 1 record?')) }}
{{ data('recordlisting.confirm.multi',    __('Are you sure you want to do this for %NUMBER% records?')) }}
{{ data('recordlisting.confirm.no-undo',  __('general.phrase.no-undo')) }}
{{ data('recordlisting.action.cancel',    __('general.phrase.cancel')) }}
{{ data('recordlisting.action.delete',    __('contenttypes.generic.delete', {'%contenttype%': '%CTNAME%'})) }}
{{ data('recordlisting.action.publish',   __('contenttypes.generic.publish', {'%contenttype%': '%CTNAME%'})) }}
{{ data('recordlisting.action.depublish', __('general.phrase.status-change-held')) }}
{{ data('recordlisting.action.draft',     __('general.phrase.status-change-draft')) }}
", "@bolt/_sub/_record_list_data.twig", "");
    }
}
