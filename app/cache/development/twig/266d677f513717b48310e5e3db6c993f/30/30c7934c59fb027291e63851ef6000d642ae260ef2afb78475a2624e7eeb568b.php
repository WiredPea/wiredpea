<?php

/* @bolt/email/firstuser.twig */
class __TwigTemplate_7c0b93572c6546b240c626dd3760dd8a9c9e90e91a35f51ac302690d620a1e35 extends Twig_Template
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
        $__internal_6da3c9c21c31bbd79ff7480bfd098831ac5417e774c54021184654cd28f89408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da3c9c21c31bbd79ff7480bfd098831ac5417e774c54021184654cd28f89408->enter($__internal_6da3c9c21c31bbd79ff7480bfd098831ac5417e774c54021184654cd28f89408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/email/firstuser.twig"));

        // line 1
        echo "<p style=\"color: #204460;\"><strong>Congratulations! Bolt Set-up Complete</strong></p>
<p></p>
<p>
    If you have received this e-mail, your new Bolt site '";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "sitename", array()), "html", null, true);
        echo "' is up
    and running and your outbound e-mail settings are correct.
</p>
<p></p>
<p>
    Thank you from all of the people that contribute to creating Bolt, we
    welcome your new site and hope that you enjoy using it as much as we enjoy
    creating it!
</p>
";
        
        $__internal_6da3c9c21c31bbd79ff7480bfd098831ac5417e774c54021184654cd28f89408->leave($__internal_6da3c9c21c31bbd79ff7480bfd098831ac5417e774c54021184654cd28f89408_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/email/firstuser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p style=\"color: #204460;\"><strong>Congratulations! Bolt Set-up Complete</strong></p>
<p></p>
<p>
    If you have received this e-mail, your new Bolt site '{{ context.sitename }}' is up
    and running and your outbound e-mail settings are correct.
</p>
<p></p>
<p>
    Thank you from all of the people that contribute to creating Bolt, we
    welcome your new site and hope that you enjoy using it as much as we enjoy
    creating it!
</p>
", "@bolt/email/firstuser.twig", "");
    }
}
