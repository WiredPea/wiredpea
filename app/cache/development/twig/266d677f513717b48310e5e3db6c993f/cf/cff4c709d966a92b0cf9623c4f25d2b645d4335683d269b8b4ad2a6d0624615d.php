<?php

/* @bolt/_nav/_secondary-filemanagement.twig */
class __TwigTemplate_ec3ade93ab2db81bca8fb70cc9608af279db3c59a33d4190e4ecb6e0f9d50836 extends Twig_Template
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
        $__internal_78951eb0854627bdb64b30fd1ecf4dfb5e6f8fa741d40d431683925005c5e30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78951eb0854627bdb64b30fd1ecf4dfb5e6f8fa741d40d431683925005c5e30a->enter($__internal_78951eb0854627bdb64b30fd1ecf4dfb5e6f8fa741d40d431683925005c5e30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_secondary-filemanagement.twig"));

        // line 1
        $context["files_menu"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "menu.admin", array(), "array"), "get", array(0 => "files"), "method");
        // line 2
        $context["sub"] = array(0 => array("icon" => $this->getAttribute($this->getAttribute(        // line 4
($context["files_menu"] ?? null), "get", array(0 => "files_uploads"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 5
($context["files_menu"] ?? null), "get", array(0 => "files_uploads"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 6
($context["files_menu"] ?? null), "get", array(0 => "files_uploads"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 7
($context["files_menu"] ?? null), "get", array(0 => "files_uploads"), "method"), "permission", array())), 1 => array("icon" => $this->getAttribute($this->getAttribute(        // line 9
($context["files_menu"] ?? null), "get", array(0 => "files_themes"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 10
($context["files_menu"] ?? null), "get", array(0 => "files_themes"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 11
($context["files_menu"] ?? null), "get", array(0 => "files_themes"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 12
($context["files_menu"] ?? null), "get", array(0 => "files_themes"), "method"), "permission", array())));
        // line 15
        echo "
";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nav"] ?? null), "submenu", array(0 => "fa:folder-open", 1 => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.file-management"), 2 => ($context["sub"] ?? null), 3 => (($context["page_nav"] ?? null) == "Settings/FileManagement")), "method"), "html", null, true);
        echo "
";
        
        $__internal_78951eb0854627bdb64b30fd1ecf4dfb5e6f8fa741d40d431683925005c5e30a->leave($__internal_78951eb0854627bdb64b30fd1ecf4dfb5e6f8fa741d40d431683925005c5e30a_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-filemanagement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 16,  34 => 15,  32 => 12,  31 => 11,  30 => 10,  29 => 9,  28 => 7,  27 => 6,  26 => 5,  25 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set files_menu = app['menu.admin'].get('files') %}
{% set sub = [
    {
        icon: files_menu.get('files_uploads').icon,
        label: files_menu.get('files_uploads').label,
        link: files_menu.get('files_uploads').uri,
        isallowed: files_menu.get('files_uploads').permission
    }, {
        icon: files_menu.get('files_themes').icon,
        label: files_menu.get('files_themes').label,
        link: files_menu.get('files_themes').uri,
        isallowed: files_menu.get('files_themes').permission
    }
] %}

{{ nav.submenu('fa:folder-open', __('general.phrase.file-management'), sub, (page_nav == 'Settings/FileManagement')) }}
", "@bolt/_nav/_secondary-filemanagement.twig", "");
    }
}
