<?php

/* @bolt/_macro/_macro.twig */
class __TwigTemplate_4be906ee23c591afd02416f686341dcd6f8a1402b8d6dff991612d48b99db627 extends Twig_Template
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
        $__internal_06f68d73253f81c4c80aab5d2d92013992655b43a9920fbc8bcd8d255ac82543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f68d73253f81c4c80aab5d2d92013992655b43a9920fbc8bcd8d255ac82543->enter($__internal_06f68d73253f81c4c80aab5d2d92013992655b43a9920fbc8bcd8d255ac82543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_macro/_macro.twig"));

        // line 14
        echo "
";
        // line 25
        echo "
";
        // line 34
        echo "
";
        // line 63
        echo "
";
        // line 73
        echo "
";
        // line 85
        echo "
";
        // line 160
        echo "
";
        
        $__internal_06f68d73253f81c4c80aab5d2d92013992655b43a9920fbc8bcd8d255ac82543->leave($__internal_06f68d73253f81c4c80aab5d2d92013992655b43a9920fbc8bcd8d255ac82543_prof);

    }

    // line 4
    public function getuserlink($__user_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user_id" => $__user_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2f0c88ef8a6e025d177afac60052fbb2ffa856cacbb70ce0ad509bd80f5d9a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2f0c88ef8a6e025d177afac60052fbb2ffa856cacbb70ce0ad509bd80f5d9a1c->enter($__internal_2f0c88ef8a6e025d177afac60052fbb2ffa856cacbb70ce0ad509bd80f5d9a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "userlink"));

            // line 5
            echo "    ";
            ob_start();
            // line 6
            echo "        ";
            $context["user"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->getUser(($context["user_id"] ?? null));
            // line 7
            echo "        ";
            if ( !twig_test_empty(($context["user"] ?? null))) {
                // line 8
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("useredit", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "displayname", array()), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 10
                echo "            ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.unknown");
                echo "
        ";
            }
            // line 12
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_2f0c88ef8a6e025d177afac60052fbb2ffa856cacbb70ce0ad509bd80f5d9a1c->leave($__internal_2f0c88ef8a6e025d177afac60052fbb2ffa856cacbb70ce0ad509bd80f5d9a1c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 18
    public function getcontentlink_by_id($__contenttype__ = null, $__title__ = null, $__content_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "title" => $__title__,
            "content_id" => $__content_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_360e7a51598c648085043ad8043d70885039a8ba9816e2e4caa152ae66bf40df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_360e7a51598c648085043ad8043d70885039a8ba9816e2e4caa152ae66bf40df->enter($__internal_360e7a51598c648085043ad8043d70885039a8ba9816e2e4caa152ae66bf40df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "contentlink_by_id"));

            // line 19
            echo "    ";
            ob_start();
            // line 20
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute(($context["contenttype"] ?? null), "slug", array()), "id" => ($context["content_id"] ?? null))), "html", null, true);
            echo "\">";
            // line 21
            echo _twig_default_filter($this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt(($context["title"] ?? null), 70), (("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-title")) . ")</em>"));
            // line 22
            echo "</a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_360e7a51598c648085043ad8043d70885039a8ba9816e2e4caa152ae66bf40df->leave($__internal_360e7a51598c648085043ad8043d70885039a8ba9816e2e4caa152ae66bf40df_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getcontentlink($__contenttype__ = null, $__content__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "content" => $__content__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2e607b0f73f602ccf41fd933a3aa658621b0cfb14f88d21d02361ddbdf61c3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2e607b0f73f602ccf41fd933a3aa658621b0cfb14f88d21d02361ddbdf61c3d8->enter($__internal_2e607b0f73f602ccf41fd933a3aa658621b0cfb14f88d21d02361ddbdf61c3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "contentlink"));

            // line 30
            echo "    ";
            $context["crosslinks"] = $this;
            // line 31
            echo "    ";
            $context["title"] = $this->getAttribute(($context["content"] ?? null), "getTitle", array(0 => true), "method");
            // line 32
            echo "    ";
            echo $context["crosslinks"]->getcontentlink_by_id(($context["contenttype"] ?? null), ($context["title"] ?? null), $this->getAttribute(($context["content"] ?? null), "id", array()));
            echo "
";
            
            $__internal_2e607b0f73f602ccf41fd933a3aa658621b0cfb14f88d21d02361ddbdf61c3d8->leave($__internal_2e607b0f73f602ccf41fd933a3aa658621b0cfb14f88d21d02361ddbdf61c3d8_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function getattr($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_991bd751463403c9b614bc490b9078253eb2812c5d4c253ee3795b278e8922bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_991bd751463403c9b614bc490b9078253eb2812c5d4c253ee3795b278e8922bf->enter($__internal_991bd751463403c9b614bc490b9078253eb2812c5d4c253ee3795b278e8922bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attr"));

            // line 39
            echo "    ";
            ob_start();
            // line 40
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["value"]) {
                // line 41
                echo "            ";
                if (($context["attrname"] == "value")) {
                    // line 42
                    echo "                value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"
            ";
                } elseif ( !twig_test_empty(                // line 43
$context["value"])) {
                    // line 44
                    echo "                ";
                    if (twig_in_filter($context["attrname"], array(0 => "required", 1 => "disabled", 2 => "selected", 3 => "autofocus", 4 => "multiple", 5 => "readonly"))) {
                        // line 45
                        echo "                    ";
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 46
$context["attrname"] == "name_id")) {
                        // line 47
                        echo "                    name=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 48
$context["attrname"] == "class")) {
                        // line 49
                        echo "                    class=\"";
                        echo twig_escape_filter($this->env, trim($context["value"]), "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 50
$context["attrname"] == "style")) {
                        // line 51
                        echo "                    style=\"";
                        echo twig_escape_filter($this->env, trim($context["value"]), "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 52
$context["attrname"] == "checked")) {
                        // line 53
                        echo "                    ";
                        if (($context["value"] != false)) {
                            echo "checked=\"checked\"";
                        }
                        // line 54
                        echo "                ";
                    } elseif (($context["attrname"] == "_bind")) {
                        // line 55
                        echo "                    data-bind=\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge(array("bind" => $this->getAttribute($context["value"], 0, array(), "array")), (($this->getAttribute($context["value"], 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["value"], 1, array(), "array"), array())) : (array())))), "html", null, true);
                        echo "\"
                ";
                    } else {
                        // line 57
                        echo "                    ";
                        echo twig_escape_filter($this->env, twig_replace_filter($context["attrname"], array("_" => "-")), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"
                ";
                    }
                    // line 59
                    echo "            ";
                }
                // line 60
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_991bd751463403c9b614bc490b9078253eb2812c5d4c253ee3795b278e8922bf->leave($__internal_991bd751463403c9b614bc490b9078253eb2812c5d4c253ee3795b278e8922bf_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 67
    public function getactionform($__content__ = null, $__action__ = null, $__icon__ = null, $__text__ = null, $__confirmation_text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "content" => $__content__,
            "action" => $__action__,
            "icon" => $__icon__,
            "text" => $__text__,
            "confirmation_text" => $__confirmation_text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a73c3cb1dfc12ce937357b2624c27ae2dd0a16d080603dda46b6b83c15dd170a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a73c3cb1dfc12ce937357b2624c27ae2dd0a16d080603dda46b6b83c15dd170a->enter($__internal_a73c3cb1dfc12ce937357b2624c27ae2dd0a16d080603dda46b6b83c15dd170a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "actionform"));

            // line 68
            echo "    ";
            if ((($context["action"] ?? null) == "held")) {
                // line 69
                echo "        ";
                $context["action"] = "depublish";
                // line 70
                echo "    ";
            }
            // line 71
            echo "    <a href=\"#\" data-listing-cmd=\"record:";
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\"><i class=\"fa ";
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans(($context["text"] ?? null));
            echo "</a>
";
            
            $__internal_a73c3cb1dfc12ce937357b2624c27ae2dd0a16d080603dda46b6b83c15dd170a->leave($__internal_a73c3cb1dfc12ce937357b2624c27ae2dd0a16d080603dda46b6b83c15dd170a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 77
    public function gettypepopover($__types__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "types" => $__types__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ef90c9f80266adeefb5577163285ea0e9aba255b5e5d4f21348b98f1c12f183e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ef90c9f80266adeefb5577163285ea0e9aba255b5e5d4f21348b98f1c12f183e->enter($__internal_ef90c9f80266adeefb5577163285ea0e9aba255b5e5d4f21348b98f1c12f183e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "typepopover"));

            // line 78
            echo "    ";
            $context["types"] = ((array_key_exists("types", $context)) ? (_twig_default_filter(($context["types"] ?? null), $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "general/accept_file_types"), "method"))) : ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "general/accept_file_types"), "method")));
            // line 79
            echo "    ";
            $context["text"] = ((($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.general.allowed-filetypes") . "<code>") . twig_join_filter(($context["types"] ?? null), "</code>, <code>")) . "</code>.");
            // line 80
            echo "    <span class=\"label label-default info-pop\" data-title=\"\" data-html=\"true\" data-content=\"";
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "\">
        <i class=\"fa fa-info-circle\"></i>
        ";
            // line 82
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.types");
            echo "
    </span>
";
            
            $__internal_ef90c9f80266adeefb5577163285ea0e9aba255b5e5d4f21348b98f1c12f183e->leave($__internal_ef90c9f80266adeefb5577163285ea0e9aba255b5e5d4f21348b98f1c12f183e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 100
    public function getinput_datetime($__opt__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "opt" => $__opt__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_09948cfd9d2c7e54320421f05884616744a83f4789cf586ff47f76fc92538de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_09948cfd9d2c7e54320421f05884616744a83f4789cf586ff47f76fc92538de1->enter($__internal_09948cfd9d2c7e54320421f05884616744a83f4789cf586ff47f76fc92538de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "input_datetime"));

            // line 101
            echo "    ";
            $context["__internal_7e221289b0125c170766010d228d6f7e75623446fbf600653d7bd3fa0990c1cb"] = $this;
            // line 102
            echo "
    ";
            // line 103
            $context["class"] = (twig_replace_filter((($this->getAttribute(($context["opt"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "class", array()), "")) : ("")), array("form-control" => "")) . " form-control");
            // line 104
            echo "
    ";
            // line 105
            $context["attributes"] = array("data" => array("id" => $this->getAttribute(            // line 107
($context["opt"] ?? null), "id", array()), "name" => (($this->getAttribute(            // line 108
($context["opt"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "name", array()), $this->getAttribute(($context["opt"] ?? null), "id", array()))) : ($this->getAttribute(($context["opt"] ?? null), "id", array()))), "value" => $this->getAttribute(            // line 109
($context["opt"] ?? null), "value", array()), "type" => "hidden", "class" => "datetime", "data_notice" => (($this->getAttribute(            // line 112
($context["opt"] ?? null), "notice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "notice", array()), "")) : (""))), "date" => array("type" => "text", "disabled" => (($this->getAttribute(            // line 117
($context["opt"] ?? null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "disabled", array()), false)) : (false)), "required" => (($this->getAttribute(            // line 118
($context["opt"] ?? null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "required", array()), false)) : (false)), "class" => trim((            // line 119
($context["class"] ?? null) . " datepicker")), "data_errortext" => (($this->getAttribute(            // line 120
($context["opt"] ?? null), "errortext", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "errortext", array()), "")) : ("")), "data_field_options" => (((($this->getAttribute(            // line 121
($context["opt"] ?? null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "options", array()), false)) : (false))) ? (twig_jsonencode_filter($this->getAttribute(($context["opt"] ?? null), "options", array()))) : (""))), "time" => array("type" => "text", "disabled" => (($this->getAttribute(            // line 126
($context["opt"] ?? null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "disabled", array()), false)) : (false)), "required" => (($this->getAttribute(            // line 127
($context["opt"] ?? null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["opt"] ?? null), "required", array()), false)) : (false)), "class" => trim((            // line 128
($context["class"] ?? null) . " timepicker")), "title" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.time-format-24-12"), "style" => "margin-right: 6px;"));
            // line 133
            echo "
    <div class=\"datetime-container\">
        <div>
            <div class=\"input-group\">
                <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-tertiary\">
                        <i class=\"fa fa-calendar\"></i>
                    </button>
                </span>
                <input";
            // line 142
            echo $context["__internal_7e221289b0125c170766010d228d6f7e75623446fbf600653d7bd3fa0990c1cb"]->getattr($this->getAttribute(($context["attributes"] ?? null), "date", array()));
            echo ">
            </div>
        </div>

        ";
            // line 146
            if (( !$this->getAttribute(($context["opt"] ?? null), "has_time", array(), "any", true, true) || ($this->getAttribute(($context["opt"] ?? null), "has_time", array()) != false))) {
                // line 147
                echo "            <div>
                <input";
                // line 148
                echo $context["__internal_7e221289b0125c170766010d228d6f7e75623446fbf600653d7bd3fa0990c1cb"]->getattr($this->getAttribute(($context["attributes"] ?? null), "time", array()));
                echo ">
            </div>
        ";
            }
            // line 151
            echo "
        <div>
            <input";
            // line 153
            echo $context["__internal_7e221289b0125c170766010d228d6f7e75623446fbf600653d7bd3fa0990c1cb"]->getattr($this->getAttribute(($context["attributes"] ?? null), "data", array()));
            echo ">
            <button type=\"button\" class=\"btn btn-default btn-xs\">
                <i class=\"fa fa-close\"></i>
            </button>
        </div>
    </div>
";
            
            $__internal_09948cfd9d2c7e54320421f05884616744a83f4789cf586ff47f76fc92538de1->leave($__internal_09948cfd9d2c7e54320421f05884616744a83f4789cf586ff47f76fc92538de1_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 169
    public function getupload_buttons($__type__ = null, $__attr_upload__ = null, $__uploadpath__ = null, $__canUpload__ = null, $__multi__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "attr_upload" => $__attr_upload__,
            "uploadpath" => $__uploadpath__,
            "canUpload" => $__canUpload__,
            "multi" => $__multi__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_181265cc6b082f5826d1ea5c75b81910817d87d60097540c7c02bc81af69795e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_181265cc6b082f5826d1ea5c75b81910817d87d60097540c7c02bc81af69795e->enter($__internal_181265cc6b082f5826d1ea5c75b81910817d87d60097540c7c02bc81af69795e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "upload_buttons"));

            // line 170
            echo "    ";
            $context["__internal_f90e81a6c6e6c7deac767fad823b983acfe873d8ab9b7bda65cd9fdc8641eea9"] = $this;
            // line 171
            echo "
    ";
            // line 172
            $context["items"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->stackItems(7, (((($context["type"] ?? null) == "image")) ? ("image") : ("other,document")));
            // line 173
            echo "
    <div class=\"button-wrap fileselectbuttongroup\">

        ";
            // line 177
            echo "        ";
            if (($context["canUpload"] ?? null)) {
                // line 178
                echo "            <span class=\"btn btn-tertiary btn-sm fileinput-button\">
                <i class=\"fa fa-upload\"></i>
                <span>";
                // line 180
                echo (((($context["type"] ?? null) == "image")) ? ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.upload-image")) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.upload-file")));
                echo "</span>
                <input";
                // line 181
                echo $context["__internal_f90e81a6c6e6c7deac767fad823b983acfe873d8ab9b7bda65cd9fdc8641eea9"]->getattr(($context["attr_upload"] ?? null));
                echo ">
            </span>
        ";
            } else {
                // line 184
                echo "            <button type=\"button\" class=\"btn btn-sm\" disabled=\"disabled\">
                ";
                // line 185
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.upload-not-allowed");
                echo "
                ";
                // line 187
                echo "                ";
                $context["attr_upload"] = twig_array_merge(($context["attr_upload"] ?? null), array("type" => "hidden"));
                // line 188
                echo "                <input";
                echo $context["__internal_f90e81a6c6e6c7deac767fad823b983acfe873d8ab9b7bda65cd9fdc8641eea9"]->getattr(($context["attr_upload"] ?? null));
                echo ">
            </button>
        ";
            }
            // line 191
            echo "
        ";
            // line 193
            echo "        ";
            $context["attr"] = array("class" => "btn btn-tertiary btn-sm", "data-bolt-widget" => array("buicBrowser" => array("namespace" => "files", "path" =>             // line 198
($context["uploadpath"] ?? null), "multiselect" =>             // line 199
($context["multi"] ?? null))), "type" => "button");
            // line 204
            echo "        <button";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr(($context["attr"] ?? null));
            echo "><i class=\"fa fa-download\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.general.select-from-server");
            echo "</button>

        ";
            // line 207
            echo "        ";
            if (( !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method") && ($context["items"] ?? null))) {
                // line 208
                echo "            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-tertiary btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-paperclip\"></i>
                    ";
                // line 211
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.general.stack");
                echo "
                    <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu select-from-stack\">
                    ";
                // line 216
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 217
                    echo "                        ";
                    $context["info"] = ($this->getAttribute($context["item"], "filesize", array()) . (((($this->getAttribute($context["item"], "imagesize", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "imagesize", array()))) : (""))) ? (((", " . $this->getAttribute($context["item"], "imagesize", array())) . " px")) : ("")));
                    // line 218
                    echo "                        <li>
                            <a href=\"#\" data-path=\"";
                    // line 219
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "filepath", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
                    echo " <small>(";
                    echo twig_escape_filter($this->env, ($context["info"] ?? null), "html", null, true);
                    echo ")</small></a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 222
                echo "                </ul>
            </div>
        ";
            }
            // line 225
            echo "
    </div>
";
            
            $__internal_181265cc6b082f5826d1ea5c75b81910817d87d60097540c7c02bc81af69795e->leave($__internal_181265cc6b082f5826d1ea5c75b81910817d87d60097540c7c02bc81af69795e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/_macro/_macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  637 => 225,  632 => 222,  619 => 219,  616 => 218,  613 => 217,  609 => 216,  601 => 211,  596 => 208,  593 => 207,  585 => 204,  583 => 199,  582 => 198,  580 => 193,  577 => 191,  570 => 188,  567 => 187,  563 => 185,  560 => 184,  554 => 181,  550 => 180,  546 => 178,  543 => 177,  538 => 173,  536 => 172,  533 => 171,  530 => 170,  511 => 169,  486 => 153,  482 => 151,  476 => 148,  473 => 147,  471 => 146,  464 => 142,  453 => 133,  451 => 128,  450 => 127,  449 => 126,  448 => 121,  447 => 120,  446 => 119,  445 => 118,  444 => 117,  443 => 112,  442 => 109,  441 => 108,  440 => 107,  439 => 105,  436 => 104,  434 => 103,  431 => 102,  428 => 101,  413 => 100,  392 => 82,  386 => 80,  383 => 79,  380 => 78,  365 => 77,  340 => 71,  337 => 70,  334 => 69,  331 => 68,  312 => 67,  293 => 61,  287 => 60,  284 => 59,  276 => 57,  270 => 55,  267 => 54,  262 => 53,  260 => 52,  255 => 51,  253 => 50,  248 => 49,  246 => 48,  239 => 47,  237 => 46,  230 => 45,  227 => 44,  225 => 43,  220 => 42,  217 => 41,  212 => 40,  209 => 39,  194 => 38,  173 => 32,  170 => 31,  167 => 30,  151 => 29,  131 => 22,  129 => 21,  125 => 20,  122 => 19,  105 => 18,  86 => 12,  80 => 10,  72 => 8,  69 => 7,  66 => 6,  63 => 5,  48 => 4,  40 => 160,  37 => 85,  34 => 73,  31 => 63,  28 => 34,  25 => 25,  22 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Output a username and link to their profile given an ID.
 #}
{% macro userlink(user_id) %}
    {% spaceless %}
        {% set user = getuser(user_id) %}
        {% if user is not empty %}
            <a href=\"{{ path('useredit', {'id': user.id}) }}\">{{- user.displayname -}}</a>
        {% else %}
            {{ __('panel.latest-activity.unknown') }}
        {% endif %}
    {% endspaceless %}
{% endmacro %}

{##
 # Contentlink by id.
 #}
{% macro contentlink_by_id(contenttype, title, content_id) %}
    {% spaceless %}
        <a href=\"{{ path('editcontent', {'contenttypeslug': contenttype.slug, 'id': content_id}) }}\">
            {{- title|excerpt(70)|default(\"<em>(\" ~ __('general.phrase.no-title') ~ \")</em>\")|raw -}}
        </a>
    {% endspaceless %}
{% endmacro %}

{##
 # Contentlink.
 #}
{% macro contentlink(contenttype, content) %}
    {% import _self as crosslinks %}
    {% set title = content.getTitle(true) %}
    {{ crosslinks.contentlink_by_id(contenttype, title, content.id) }}
{% endmacro %}

{##
 # Outputs tag attributes.
 #}
{% macro attr(attributes) %}
    {% spaceless %}
        {% for attrname, value in attributes %}
            {% if attrname == 'value' %}
                value=\"{{ value }}\"
            {% elseif value is not empty %}
                {% if attrname in ['required', 'disabled', 'selected', 'autofocus', 'multiple', 'readonly'] %}
                    {{ attrname }}=\"{{ attrname }}\"
                {% elseif attrname == 'name_id' %}
                    name=\"{{ value }}\" id=\"{{ value }}\"
                {% elseif attrname == 'class' %}
                    class=\"{{ value|trim }}\"
                {% elseif attrname == 'style' %}
                    style=\"{{ value|trim }}\"
                {% elseif attrname == 'checked' %}
                    {% if value != false %}checked=\"checked\"{% endif %}
                {% elseif attrname == '_bind' %}
                    data-bind=\"{{ {bind: value[0]}|merge(value[1]|default({}))|json_encode }}\"
                {% else %}
                    {{ attrname|replace({'_': '-'}) }}=\"{{ value }}\"
                {% endif %}
            {% endif %}
        {% endfor %}
    {% endspaceless %}
{% endmacro %}

{##
 # Actionform.
 #}
{% macro actionform(content, action, icon, text, confirmation_text) %}
    {% if action == 'held' %}
        {% set action = 'depublish' %}
    {% endif %}
    <a href=\"#\" data-listing-cmd=\"record:{{ action }}\"><i class=\"fa {{ icon }}\"></i> {{ __(text) }}</a>
{% endmacro %}

{##
 # Typepopover.
 #}
{% macro typepopover(types) %}
    {% set types = types|default(app.config.get('general/accept_file_types')) %}
    {% set text = __(\"field.general.allowed-filetypes\") ~ \"<code>\" ~ types|join(\"</code>, <code>\") ~ \"</code>.\" %}
    <span class=\"label label-default info-pop\" data-title=\"\" data-html=\"true\" data-content=\"{{ text }}\">
        <i class=\"fa fa-info-circle\"></i>
        {{ __('general.phrase.types') }}
    </span>
{% endmacro %}

{##
 # Renders a datetime/date input component
 #
 # Required options:
 #    id:                 id of that group
 # Optional options:
 #    disabled  [false]:  disabled input
 #    required  [false]:  make input required
 #    class     []:       class added to date/time input
 #    errortext []:       error text
 #    options   []:       options passed to datepicker
 #
 # @param array opt Options defining the component
 #}
{% macro input_datetime(opt) %}
    {% from _self import attr %}

    {% set class = opt.class|default('')|replace({'form-control': ''}) ~ ' form-control' %}

    {% set attributes = {
        data: {
            id:          opt.id,
            name:        opt.name|default(opt.id),
            value:       opt.value,
            type:        'hidden',
            class:       'datetime',
            data_notice: opt.notice|default('')
        },

        date: {
            type:                'text',
            disabled:            opt.disabled|default(false),
            required:            opt.required|default(false),
            class:               (class ~ ' datepicker')|trim,
            data_errortext:      opt.errortext|default(''),
            data_field_options:  opt.options|default(false) ? opt.options|json_encode : ''
        },

        time: {
            type:      'text',
            disabled:  opt.disabled|default(false),
            required:  opt.required|default(false),
            class:     (class ~ ' timepicker')|trim,
            title:     __('general.phrase.time-format-24-12'),
            style:     'margin-right: 6px;'
        }
    } %}

    <div class=\"datetime-container\">
        <div>
            <div class=\"input-group\">
                <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-tertiary\">
                        <i class=\"fa fa-calendar\"></i>
                    </button>
                </span>
                <input{{ attr(attributes.date) }}>
            </div>
        </div>

        {% if opt.has_time is not defined or opt.has_time != false %}
            <div>
                <input{{ attr(attributes.time) }}>
            </div>
        {% endif %}

        <div>
            <input{{ attr(attributes.data) }}>
            <button type=\"button\" class=\"btn btn-default btn-xs\">
                <i class=\"fa fa-close\"></i>
            </button>
        </div>
    </div>
{% endmacro %}

{##
 # Renders a upload button combo [Upload] [Select from Server] [Select from Stack]
 #
 # @param string type Either 'image' or 'other,document'
 # @param string attr_upload Attributes for the file upload button
 # @param string uploadpath Relative upload path
 # @param bool   multi If true allows uploading multiple files
 #}
{% macro upload_buttons(type, attr_upload, uploadpath, canUpload, multi) %}
    {% from _self import attr %}

    {% set items = stackitems(7, (type == 'image') ?  'image' : 'other,document') %}

    <div class=\"button-wrap fileselectbuttongroup\">

        {# Button: Upload #}
        {% if canUpload %}
            <span class=\"btn btn-tertiary btn-sm fileinput-button\">
                <i class=\"fa fa-upload\"></i>
                <span>{{ (type == 'image') ? __('general.phrase.upload-image') : __('general.phrase.upload-file') }}</span>
                <input{{ attr(attr_upload) }}>
            </span>
        {% else %}
            <button type=\"button\" class=\"btn btn-sm\" disabled=\"disabled\">
                {{ __('general.phrase.upload-not-allowed') }}
                {# creating a dummy stub, instead of the uploader. Needed (currently) to attach events to #}
                {% set attr_upload = attr_upload|merge({'type' : 'hidden'}) %}
                <input{{ attr(attr_upload) }}>
            </button>
        {% endif %}

        {# Button: Select from Server #}
        {% set attr = {
            'class': 'btn btn-tertiary btn-sm',
            'data-bolt-widget': {
                buicBrowser: {
                    namespace: 'files',
                    path: uploadpath,
                    multiselect: multi
                },
            },
            'type': 'button',
        } %}
        <button{{ hattr(attr) }}><i class=\"fa fa-download\"></i> {{ __('field.general.select-from-server') }}</button>

        {# Button: Select from Stack #}
        {% if not app.config.get('general/backend/stack/disable', false) and items %}
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-tertiary btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-paperclip\"></i>
                    {{ __('field.general.stack') }}
                    <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu select-from-stack\">
                    {% for item in items %}
                        {% set info = item.filesize ~ (item.imagesize|default() ? ', ' ~ item.imagesize ~ ' px' : '') %}
                        <li>
                            <a href=\"#\" data-path=\"{{ item.filepath }}\">{{ item.basename }} <small>({{ info }})</small></a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        {% endif %}

    </div>
{% endmacro %}
", "@bolt/_macro/_macro.twig", "");
    }
}
