<?php

/* @bolt/exception/database/_driver.twig */
class __TwigTemplate_994a580285ec223af2a692cb992c2785de71de3d0b3c40a241b01c4d607bfbf6 extends Twig_Template
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
        $__internal_efd2c82e12d1196a1898ff43951a6f58153501172687a5da35274f1d15a05884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd2c82e12d1196a1898ff43951a6f58153501172687a5da35274f1d15a05884->enter($__internal_efd2c82e12d1196a1898ff43951a6f58153501172687a5da35274f1d15a05884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/exception/database/_driver.twig"));

        // line 1
        echo "<h1>
    Bolt Database driver error.
</h1>

";
        // line 5
        if ((($context["subtype"] ?? null) == "missing")) {
            // line 6
            echo "    <p>
        ";
            // line 7
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo " was selected as the database type, but the driver does not exist or is not loaded.
    </p>
    <p>
        Please install the ";
            // line 10
            echo twig_escape_filter($this->env, ($context["driver"] ?? null), "html", null, true);
            echo " driver.
    </p>
";
        }
        // line 13
        echo "
";
        // line 14
        if ((($context["subtype"] ?? null) == "parameter")) {
            // line 15
            echo "    <p>
        There is no <code>";
            // line 16
            echo twig_escape_filter($this->env, ($context["parameter"] ?? null), "html", null, true);
            echo "</code> set for your database.
    </p>
";
        }
        // line 19
        echo "
";
        // line 20
        if ((($context["subtype"] ?? null) == "unsupported")) {
            // line 21
            echo "    <p>
        ";
            // line 22
            echo twig_escape_filter($this->env, ($context["driver"] ?? null), "html", null, true);
            echo " was selected as the database type, but it is not supported.
    </p>
";
        }
        // line 25
        echo "
";
        // line 26
        if ((($context["subtype"] ?? null) == "insecure")) {
            // line 27
            echo "    <p>
        There is no <code>password</code> set for the database connection, and you're using user 'root'.
    </p>
    <p>
        That must surely be a mistake, right?
    </p>
    <p>
        Bolt will stubbornly refuse to run until you've set a password for 'root'.
    </p>
";
        }
        
        $__internal_efd2c82e12d1196a1898ff43951a6f58153501172687a5da35274f1d15a05884->leave($__internal_efd2c82e12d1196a1898ff43951a6f58153501172687a5da35274f1d15a05884_prof);

    }

    public function getTemplateName()
    {
        return "@bolt/exception/database/_driver.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  76 => 26,  73 => 25,  67 => 22,  64 => 21,  62 => 20,  59 => 19,  53 => 16,  50 => 15,  48 => 14,  45 => 13,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>
    Bolt Database driver error.
</h1>

{% if subtype == 'missing' %}
    <p>
        {{ name }} was selected as the database type, but the driver does not exist or is not loaded.
    </p>
    <p>
        Please install the {{ driver }} driver.
    </p>
{% endif %}

{% if subtype == 'parameter' %}
    <p>
        There is no <code>{{ parameter }}</code> set for your database.
    </p>
{% endif %}

{% if subtype == 'unsupported' %}
    <p>
        {{ driver }} was selected as the database type, but it is not supported.
    </p>
{% endif %}

{% if subtype == 'insecure' %}
    <p>
        There is no <code>password</code> set for the database connection, and you're using user 'root'.
    </p>
    <p>
        That must surely be a mistake, right?
    </p>
    <p>
        Bolt will stubbornly refuse to run until you've set a password for 'root'.
    </p>
{% endif %}
", "@bolt/exception/database/_driver.twig", "");
    }
}
