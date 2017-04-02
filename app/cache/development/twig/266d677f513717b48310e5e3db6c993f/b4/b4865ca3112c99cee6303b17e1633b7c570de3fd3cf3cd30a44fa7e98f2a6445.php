<?php

/* partials/_footer.twig */
class __TwigTemplate_b7da47111769210d40e383b23a62f61f5d342c4a3063bb293e896e12ff8401fa extends Twig_Template
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
        $__internal_ba5877ae87780191456b83d48f5f84d0938bf0b0207fd40d2fa9600ef39b3f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5877ae87780191456b83d48f5f84d0938bf0b0207fd40d2fa9600ef39b3f9c->enter($__internal_ba5877ae87780191456b83d48f5f84d0938bf0b0207fd40d2fa9600ef39b3f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_footer.twig"));

        // line 1
        echo "<!-- Footer -->
<footer class=\"row\">
    <hr />
    <div class=\"large-6 columns\">
        <p>";
        // line 5
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.", array("%url%" => "http://bolt.cm"));
        echo "
        </p>
    </div>
    <div class=\"large-6 columns\">
        ";
        // line 9
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->menu($this->env, "main", "partials/_sub_menu.twig", array("withsubmenus" => false, "class" => "inline-list align-right"));
        // line 13
        echo "
    </div>

    ";
        // line 16
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("footer");
        echo "

</footer>

<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js", "theme"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/foundation.js", "theme"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js", "theme"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ba5877ae87780191456b83d48f5f84d0938bf0b0207fd40d2fa9600ef39b3f9c->leave($__internal_ba5877ae87780191456b83d48f5f84d0938bf0b0207fd40d2fa9600ef39b3f9c_prof);

    }

    public function getTemplateName()
    {
        return "partials/_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 22,  53 => 21,  49 => 20,  42 => 16,  37 => 13,  35 => 9,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Footer -->
<footer class=\"row\">
    <hr />
    <div class=\"large-6 columns\">
        <p>{{ __(\"This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.\",{'%url%':'http://bolt.cm'}) }}
        </p>
    </div>
    <div class=\"large-6 columns\">
        {{ menu(
            identifier = 'main',
            template = 'partials/_sub_menu.twig',
            params = {'withsubmenus': false, 'class': 'inline-list align-right'}
        ) }}
    </div>

    {{ widgets('footer') }}

</footer>

<script src=\"{{ asset('js/jquery.min.js', 'theme') }}\"></script>
<script src=\"{{ asset('js/foundation.js', 'theme') }}\"></script>
<script src=\"{{ asset('js/app.js', 'theme') }}\"></script>
", "partials/_footer.twig", "");
    }
}
