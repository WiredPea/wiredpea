<?php

/* @bolt/_base/_listing.twig */
class __TwigTemplate_b9c1ae2959ac8b0cd7b94135dac7891910cc3a2badb1cf69e02af2e5c9573177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_854ea9aba1f4d1bf885d68a5b0f89c88be49d8473609dfc01f57ef96ee802bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854ea9aba1f4d1bf885d68a5b0f89c88be49d8473609dfc01f57ef96ee802bcd->enter($__internal_854ea9aba1f4d1bf885d68a5b0f89c88be49d8473609dfc01f57ef96ee802bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_base/_listing.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/_base/_listing.twig", 1);
        // line 2
        $context["__internal_31599af4b0a47c003dc61c0a328879884dbba1fef1d3eca28caea1e820759640"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/_base/_listing.twig", 2);
        // line 3
        $context["__internal_f99dd735c74f77c0c6d1e9721b7068ecf257588e574cffb63334c7854c3bf472"] = $this;
        // line 4
        echo "
";
        // line 13
        echo "
";
        // line 25
        echo "
";
        // line 26
        $context["modifiable"] = (((($this->getAttribute(($context["permissions"] ?? null), "create", array()) || $this->getAttribute(($context["permissions"] ?? null), "edit", array())) || $this->getAttribute(($context["permissions"] ?? null), "delete", array())) || $this->getAttribute(($context["permissions"] ?? null), "publish", array())) || $this->getAttribute(($context["permissions"] ?? null), "depublish", array()));
        // line 27
        echo "
";
        // line 28
        $context["prop"] = array("extended" =>  !        // line 29
($context["compact"] ?? null), "has_groupname" => $this->getAttribute($this->getAttribute(        // line 30
($context["content"] ?? null), "group", array(), "any", false, true), "name", array(), "any", true, true), "nextgroup" => ((        // line 31
array_key_exists("new_group", $context)) ? (_twig_default_filter(($context["new_group"] ?? null), false)) : (false)), "unordered" => ($this->env->getExtension('Bolt\Twig\TwigExtension')->request("order") == ""), "first" => $this->getAttribute(        // line 33
($context["loop"] ?? null), "first", array()), "last" => $this->getAttribute(        // line 34
($context["loop"] ?? null), "last", array()));
        // line 36
        echo "
";
        // line 37
        $context["local"] = array("row_heading" => ((($this->getAttribute(        // line 38
($context["prop"] ?? null), "extended", array()) && $this->getAttribute(($context["prop"] ?? null), "unordered", array())) && $this->getAttribute(($context["prop"] ?? null), "has_groupname", array())) && ($this->getAttribute(($context["prop"] ?? null), "first", array()) || $this->getAttribute(($context["prop"] ?? null), "nextgroup", array()))), "row_header" => ($this->getAttribute(        // line 39
($context["prop"] ?? null), "extended", array()) && ($this->getAttribute(($context["prop"] ?? null), "first", array()) || (($this->getAttribute(($context["prop"] ?? null), "has_groupname", array()) && $this->getAttribute(($context["prop"] ?? null), "nextgroup", array())) && $this->getAttribute(($context["prop"] ?? null), "unordered", array())))));
        // line 41
        echo "
";
        // line 45
        if (($this->getAttribute(($context["local"] ?? null), "row_heading", array()) || (($this->getAttribute(($context["internal"] ?? null), "heading", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["internal"] ?? null), "heading", array()))) : ("")))) {
            // line 46
            echo "    ";
            if ( !$this->getAttribute(($context["prop"] ?? null), "first", array())) {
                // line 47
                echo "        ";
                echo $context["__internal_f99dd735c74f77c0c6d1e9721b7068ecf257588e574cffb63334c7854c3bf472"]->gettbody_end((($this->getAttribute(($context["internal"] ?? null), "selection_toolbar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["internal"] ?? null), "selection_toolbar", array()))) : ("")));
                echo "
    ";
            }
            // line 49
            echo "
    ";
            // line 50
            echo $context["__internal_f99dd735c74f77c0c6d1e9721b7068ecf257588e574cffb63334c7854c3bf472"]->gettbody_beg(($context["local"] ?? null), ($context["modifiable"] ?? null));
            echo "

    <tr class=\"heading\">
        ";
            // line 53
            if (false) {
                // line 54
                echo "            ";
                $this->displayBlock('listing_columns', $context, $blocks);
                // line 55
                echo "        ";
            }
            // line 56
            echo "        ";
            if (($context["compact"] ?? null)) {
                // line 57
                echo "            ";
                $context["columns"] = (                $this->renderBlock("listing_columns", $context, $blocks) - 1);
                // line 58
                echo "        ";
            } else {
                // line 59
                echo "            ";
                $context["columns"] =                 $this->renderBlock("listing_columns", $context, $blocks);
                // line 60
                echo "        ";
            }
            // line 61
            echo "        <th colspan=\"";
            echo twig_escape_filter($this->env, ($context["columns"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 62
            if ((($this->getAttribute(($context["internal"] ?? null), "heading", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["internal"] ?? null), "heading", array()))) : (""))) {
                // line 63
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["internal"] ?? null), "heading", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 65
                echo "                ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["content"] ?? null), "group", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["content"] ?? null), "group", array(), "any", false, true), "name", array()), $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("(no group)"))) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("(no group)"))), "html", null, true);
                echo "
            ";
            }
            // line 67
            echo "        </th>
    </tr>
";
        } elseif ($this->getAttribute(        // line 69
($context["prop"] ?? null), "first", array())) {
            // line 70
            echo "    ";
            echo $context["__internal_f99dd735c74f77c0c6d1e9721b7068ecf257588e574cffb63334c7854c3bf472"]->gettbody_beg(($context["local"] ?? null), ($context["modifiable"] ?? null));
            echo "
";
        }
        // line 72
        echo "
";
        // line 76
        if ($this->getAttribute(($context["local"] ?? null), "row_header", array())) {
            // line 77
            echo "    ";
            // line 78
            echo "    ";
            $context["params"] = array();
            // line 79
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "all", array()));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                if (($context["key"] != "order")) {
                    // line 80
                    echo "        ";
                    $context["params"] = twig_array_merge(($context["params"] ?? null), array($context["key"] => $context["val"]));
                    // line 81
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "    ";
            $context["link"] = ((("?" . twig_urlencode_filter(($context["params"] ?? null))) . ((twig_length_filter($this->env, ($context["params"] ?? null))) ? ("&") : (""))) . "order=");
            // line 83
            echo "    ";
            // line 84
            echo "
    <tr class=\"header\">
        ";
            // line 86
            $this->displayBlock('listing_header', $context, $blocks);
            // line 126
            echo "    </tr>
";
        }
        // line 128
        echo "
";
        // line 132
        echo "<tr ";
        if (($this->getAttribute(($context["content"] ?? null), "status", array()) != "published")) {
            echo "class=\"dim\"";
        }
        if (($context["modifiable"] ?? null)) {
            echo " id=\"item_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "id", array()), "html", null, true);
            echo "\"";
        }
        echo ">

    ";
        // line 135
        echo "    ";
        $this->displayBlock('listing_id', $context, $blocks);
        // line 146
        echo "
    ";
        // line 148
        echo "    ";
        $this->displayBlock('listing_content', $context, $blocks);
        // line 182
        echo "
    ";
        // line 183
        if ($this->getAttribute(($context["prop"] ?? null), "extended", array())) {
            // line 184
            echo "        ";
            $this->displayBlock('listing_meta', $context, $blocks);
            // line 206
            echo "    ";
        }
        // line 207
        echo "
    ";
        // line 209
        echo "    ";
        $this->displayBlock('listing_actions', $context, $blocks);
        // line 320
        echo "</tr>

";
        // line 322
        if ($this->getAttribute(($context["prop"] ?? null), "last", array())) {
            // line 323
            echo "    ";
            echo $context["__internal_f99dd735c74f77c0c6d1e9721b7068ecf257588e574cffb63334c7854c3bf472"]->gettbody_end((($this->getAttribute(($context["internal"] ?? null), "selection_toolbar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["internal"] ?? null), "selection_toolbar", array()))) : ("")));
            echo "
";
        }
        
        $__internal_854ea9aba1f4d1bf885d68a5b0f89c88be49d8473609dfc01f57ef96ee802bcd->leave($__internal_854ea9aba1f4d1bf885d68a5b0f89c88be49d8473609dfc01f57ef96ee802bcd_prof);

    }

    // line 54
    public function block_listing_columns($context, array $blocks = array())
    {
        $__internal_9be9c6d633f4afda9cca8a5fb7e80294790c6e2e2047de25675d8fd4ac194a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be9c6d633f4afda9cca8a5fb7e80294790c6e2e2047de25675d8fd4ac194a28->enter($__internal_9be9c6d633f4afda9cca8a5fb7e80294790c6e2e2047de25675d8fd4ac194a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_columns"));

        echo "6";
        
        $__internal_9be9c6d633f4afda9cca8a5fb7e80294790c6e2e2047de25675d8fd4ac194a28->leave($__internal_9be9c6d633f4afda9cca8a5fb7e80294790c6e2e2047de25675d8fd4ac194a28_prof);

    }

    // line 86
    public function block_listing_header($context, array $blocks = array())
    {
        $__internal_0e8406e7402e31f04e9ac75c92ad791226979d2fc732796087df59d74ba9f779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8406e7402e31f04e9ac75c92ad791226979d2fc732796087df59d74ba9f779->enter($__internal_0e8406e7402e31f04e9ac75c92ad791226979d2fc732796087df59d74ba9f779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_header"));

        // line 87
        echo "            ";
        $context["__internal_5df576653b94b15c330b6a7417d5c161230f326e82961bbef8feeaf709913d59"] = $this->loadTemplate("@bolt/_buic/_listing.twig", "@bolt/_base/_listing.twig", 87);
        // line 88
        echo "
            ";
        // line 90
        echo "            ";
        if (($this->getAttribute(($context["prop"] ?? null), "extended", array()) && ($context["modifiable"] ?? null))) {
            // line 91
            echo "                <th class=\"menu hidden-xs\">
                    <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li class=\"select-all\"><a href=\"#\">";
            // line 97
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.select-all");
            echo "</a></li>
                            <li class=\"hidden select-none\"><a href=\"#\">";
            // line 98
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.select-none");
            echo "</a></li>
                            <li class=\"hidden divider\" role=\"separator\"></li>
                            <li class=\"hidden dropdown-header\">";
            // line 100
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.selection");
            echo " (#):</li>
                            <li class=\"hidden\"><a href=\"#\">• ";
            // line 101
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.delete");
            echo "</a></li>
                            <li class=\"hidden disabled\"><a href=\"#\">• ";
            // line 102
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.publish");
            echo "</a></li>
                            <li class=\"hidden disabled\"><a href=\"#\">• ";
            // line 103
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.depublish");
            echo "</a></li>
                        </ul>
                    </div>
                </th>
            ";
        } else {
            // line 108
            echo "                <th style=\"margin: 0; padding: 0;\"></th>
            ";
        }
        // line 110
        echo "
            ";
        // line 112
        echo "            <th class=\"hidden-xs\">";
        echo $context["__internal_5df576653b94b15c330b6a7417d5c161230f326e82961bbef8feeaf709913d59"]->getbuic_listing_slink("id", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.id"));
        echo "</th>

            ";
        // line 115
        echo "            <th style=\"width:80%\">";
        echo $context["__internal_5df576653b94b15c330b6a7417d5c161230f326e82961bbef8feeaf709913d59"]->getbuic_listing_slink(twig_first($this->env, $this->getAttribute(($context["content"] ?? null), "TitleColumnName", array(), "method")), (($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Title") . " / ") . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Excerpt")));
        echo "</th>

            ";
        // line 118
        echo "            <th class=\"listthumb\"></th>

            ";
        // line 121
        echo "            <th class=\"username hidden-sm hidden-xs\">";
        echo $context["__internal_5df576653b94b15c330b6a7417d5c161230f326e82961bbef8feeaf709913d59"]->getbuic_listing_slink("datecreated", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.meta"));
        echo "</th>

            ";
        // line 124
        echo "            <th><span class=\"hidden-xs\">";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.action-plural");
        echo "</span></th>
        ";
        
        $__internal_0e8406e7402e31f04e9ac75c92ad791226979d2fc732796087df59d74ba9f779->leave($__internal_0e8406e7402e31f04e9ac75c92ad791226979d2fc732796087df59d74ba9f779_prof);

    }

    // line 135
    public function block_listing_id($context, array $blocks = array())
    {
        $__internal_e06a4fabea65ce13e9e7795e235cc90df9825c7fb3a6be32d602e390fad071ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06a4fabea65ce13e9e7795e235cc90df9825c7fb3a6be32d602e390fad071ff->enter($__internal_e06a4fabea65ce13e9e7795e235cc90df9825c7fb3a6be32d602e390fad071ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_id"));

        // line 136
        echo "        ";
        // line 137
        echo "        ";
        if (($this->getAttribute(($context["prop"] ?? null), "extended", array()) && $this->getAttribute(($context["permissions"] ?? null), "delete", array()))) {
            // line 138
            echo "            <td class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\"></td>
        ";
        } else {
            // line 140
            echo "            <td style=\"margin: 0; padding: 0;\"></td>
        ";
        }
        // line 142
        echo "
        ";
        // line 144
        echo "        <td class=\"id hidden-xs\">№ ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "id", array()), "html", null, true);
        echo "</td>
    ";
        
        $__internal_e06a4fabea65ce13e9e7795e235cc90df9825c7fb3a6be32d602e390fad071ff->leave($__internal_e06a4fabea65ce13e9e7795e235cc90df9825c7fb3a6be32d602e390fad071ff_prof);

    }

    // line 148
    public function block_listing_content($context, array $blocks = array())
    {
        $__internal_a9acdab32a7c24a4e08b4f4cdb142cc397038b15424d9448be63c39e15ff2b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9acdab32a7c24a4e08b4f4cdb142cc397038b15424d9448be63c39e15ff2b28->enter($__internal_a9acdab32a7c24a4e08b4f4cdb142cc397038b15424d9448be63c39e15ff2b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_content"));

        // line 149
        echo "        ";
        // line 150
        echo "        <td class=\"excerpt ";
        if ($this->getAttribute(($context["prop"] ?? null), "extended", array())) {
            echo "large";
        }
        echo "\">
            ";
        // line 151
        $context["title"] = (($this->getAttribute(($context["content"] ?? null), "getTitle", array(0 => true), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["content"] ?? null), "getTitle", array(0 => true), "method"), (("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-title")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-title")) . ")</em>")));
        // line 152
        echo "            <span>
                <strong class=\"visible-xs\">№ ";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "id", array()), "html", null, true);
        echo ". </strong>
                <strong>
                    ";
        // line 155
        if (($context["modifiable"] ?? null)) {
            // line 156
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute(($context["content"] ?? null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute(($context["content"] ?? null), "id", array()))), "html", null, true);
            echo "\" title=\"Slug: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "slug", array()), "html", null, true);
            echo "\">
                            ";
            // line 157
            echo ($context["title"] ?? null);
            // line 158
            echo "</a>
                    ";
        } else {
            // line 160
            echo "                        ";
            echo ($context["title"] ?? null);
            echo "
                    ";
        }
        // line 162
        echo "                </strong>
                ";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "excerpt", array(0 => (($context["excerptlength"] ?? null) - twig_length_filter($this->env, ($context["title"] ?? null))), 1 => false, 2 => ((array_key_exists("filter", $context)) ? (_twig_default_filter(($context["filter"] ?? null))) : (""))), "method"), "html", null, true);
        echo "
            </span>
        </td>

        ";
        // line 168
        echo "        <td class=\"listthumb\">
            ";
        // line 169
        if ( !twig_test_empty($this->getAttribute(($context["content"] ?? null), "getImage", array()))) {
            // line 170
            echo "                ";
            // line 171
            echo "                ";
            // line 172
            echo "                ";
            $context["thumb_height"] = twig_round((($context["thumbsize"] ?? null) * 0.75));
            // line 173
            echo "                ";
            $context["thumb_small"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute(($context["content"] ?? null), "getImage", array()), ($context["thumbsize"] ?? null), ($context["thumb_height"] ?? null), "c");
            // line 174
            echo "                ";
            $context["thumb_large"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute(($context["content"] ?? null), "getImage", array()), 1000, 800, "r");
            // line 175
            echo "                ";
            $context["thumb_title"] = (($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Image") . ": ") . $this->getAttribute(($context["content"] ?? null), "getImage", array()));
            // line 176
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ($context["thumb_large"] ?? null), "html", null, true);
            echo "\" class=\"magnific\" title=\"";
            echo twig_escape_filter($this->env, ($context["thumb_title"] ?? null), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 177
            echo twig_escape_filter($this->env, ($context["thumb_small"] ?? null), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, ($context["thumbsize"] ?? null), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, ($context["thumb_height"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.thumbnail");
            echo "\">
                </a>
            ";
        }
        // line 180
        echo "        </td>
    ";
        
        $__internal_a9acdab32a7c24a4e08b4f4cdb142cc397038b15424d9448be63c39e15ff2b28->leave($__internal_a9acdab32a7c24a4e08b4f4cdb142cc397038b15424d9448be63c39e15ff2b28_prof);

    }

    // line 184
    public function block_listing_meta($context, array $blocks = array())
    {
        $__internal_e6aab5d4c5369a4a43ae9dbc0fca0241015eaf148e5ab1a4b2e1bf2c0fc43747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6aab5d4c5369a4a43ae9dbc0fca0241015eaf148e5ab1a4b2e1bf2c0fc43747->enter($__internal_e6aab5d4c5369a4a43ae9dbc0fca0241015eaf148e5ab1a4b2e1bf2c0fc43747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_meta"));

        // line 185
        echo "            ";
        // line 186
        echo "            <td class=\"username hidden-sm hidden-xs\">
                <i class=\"fa fa-user fa-fw\"></i>
                ";
        // line 188
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 189
            echo "                ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($this->getAttribute(($context["content"] ?? null), "user", array()), "displayname", array()), 15);
            echo "
            ";
        } else {
            // line 191
            echo "                <s>";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($this->getAttribute(($context["content"] ?? null), "values", array()), "ownerid", array()), 15);
            echo "</s>
                ";
        }
        // line 192
        echo "<br>
                ";
        // line 193
        if (($this->getAttribute(($context["content"] ?? null), "status", array()) == "timed")) {
            // line 194
            echo "                    <i class=\"fa fa-clock-o status-timed fa-fw\"></i> ";
            echo $context["__internal_31599af4b0a47c003dc61c0a328879884dbba1fef1d3eca28caea1e820759640"]->getbuic_moment($this->getAttribute(($context["content"] ?? null), "datepublish", array()));
            echo "<br>
                ";
        } else {
            // line 196
            echo "                    <i class=\"fa fa-circle status-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "status", array()), "html", null, true);
            echo " fa-fw\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->localeDateTime($this->getAttribute(($context["content"] ?? null), "datepublish", array()), "%x");
            echo "<br>
                ";
        }
        // line 198
        echo "                ";
        if ( !twig_test_empty((($this->getAttribute(($context["content"] ?? null), "sortorder", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["content"] ?? null), "sortorder", array()))) : ("")))) {
            // line 199
            echo "                    <i class=\"fa fa-align-left fa-fw\"></i>
                    <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute(($context["content"] ?? null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute(($context["content"] ?? null), "id", array()))), "html", null, true);
            echo "#taxonomy\" >
                        ";
            // line 201
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.order-colon-sort", array("%sort%" => $this->getAttribute(($context["content"] ?? null), "sortorder", array())));
            echo "
                    </a>
                ";
        }
        // line 204
        echo "            </td>
        ";
        
        $__internal_e6aab5d4c5369a4a43ae9dbc0fca0241015eaf148e5ab1a4b2e1bf2c0fc43747->leave($__internal_e6aab5d4c5369a4a43ae9dbc0fca0241015eaf148e5ab1a4b2e1bf2c0fc43747_prof);

    }

    // line 209
    public function block_listing_actions($context, array $blocks = array())
    {
        $__internal_1b54f1f75c55e7c8fedd6f98b99efff43475cba5417a2c984ebfb551a19608e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b54f1f75c55e7c8fedd6f98b99efff43475cba5417a2c984ebfb551a19608e6->enter($__internal_1b54f1f75c55e7c8fedd6f98b99efff43475cba5417a2c984ebfb551a19608e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "listing_actions"));

        // line 210
        echo "        ";
        // line 211
        echo "        <td class=\"actions\">
            <div class=\"btn-group\">
                ";
        // line 213
        if (($context["modifiable"] ?? null)) {
            // line 214
            echo "                    <a class=\"btn btn-default btn-xs hidden-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute(($context["content"] ?? null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute(($context["content"] ?? null), "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"fa fa-edit\"></i> ";
            // line 215
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.edit");
            echo "
                    </a>
                ";
        }
        // line 218
        echo "                <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-xs\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-info-sign\"></i> <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu pull-right\">
                    ";
        // line 223
        if ((($this->getAttribute(($context["content"] ?? null), "status", array()) == "published") &&  !twig_test_empty($this->getAttribute(($context["content"] ?? null), "link", array())))) {
            // line 224
            echo "                        <li>
                            <a href=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "link", array()), "html", null, true);
            echo "\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"></i> ";
            // line 226
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.view-on-site");
            echo "
                            </a>
                        </li>
                    ";
        }
        // line 230
        echo "                    ";
        if ($this->getAttribute(($context["content"] ?? null), "relation", array())) {
            // line 231
            echo "                        <li>
                            <a href=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("relatedto", array("contenttypeslug" => $this->getAttribute($this->getAttribute(($context["content"] ?? null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute(($context["content"] ?? null), "id", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-link\"></i> ";
            // line 233
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.view-related");
            echo "
                            </a>
                        </li>
                    ";
        }
        // line 237
        echo "
                    ";
        // line 238
        $context["__internal_38021efd393a55c1214198777b3354c8834fdd3047a68957ecb0689cd68e7ada"] = $this;
        // line 239
        echo "                    ";
        if (($context["modifiable"] ?? null)) {
            // line 240
            echo "                        ";
            if (($this->getAttribute(($context["content"] ?? null), "status", array()) != "published")) {
                // line 241
                echo "                            ";
                if ($this->getAttribute(($context["permissions"] ?? null), "publish", array())) {
                    // line 242
                    echo "                                <li>";
                    echo $context["macro"]->getactionform(($context["content"] ?? null), "publish", "fa-circle status-published", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.publish", array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["content"] ?? null), "contenttype", array()), "slug", array()))));
                    echo "</li>
                            ";
                }
                // line 244
                echo "                        ";
            } else {
                // line 245
                echo "                            ";
                if ($this->getAttribute(($context["permissions"] ?? null), "depublish", array())) {
                    // line 246
                    echo "                                <li>";
                    echo $context["macro"]->getactionform(($context["content"] ?? null), "held", "fa-circle status-held", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-change-held"));
                    echo "</li>
                                <li>";
                    // line 247
                    echo $context["macro"]->getactionform(($context["content"] ?? null), "draft", "fa-circle status-draft", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-change-draft"));
                    echo "</li>

                            ";
                }
                // line 250
                echo "                        ";
            }
            // line 251
            echo "                        ";
            if ($this->getAttribute(($context["permissions"] ?? null), "create", array())) {
                // line 252
                echo "                            <li>
                                <a href=\"";
                // line 253
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute(($context["content"] ?? null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute(($context["content"] ?? null), "id", array()), "duplicate" => 1)), "html", null, true);
                echo "\">
                                    <i class=\"fa fa-copy\"></i> ";
                // line 254
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.duplicate", array("%contenttype%" => $this->getAttribute($this->getAttribute(($context["content"] ?? null), "contenttype", array()), "slug", array())));
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 258
            echo "                        ";
            if ($this->getAttribute(($context["permissions"] ?? null), "delete", array())) {
                // line 259
                echo "                            <li>
                                ";
                // line 260
                echo $context["macro"]->getactionform(($context["content"] ?? null), "delete", "fa-trash", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.delete", array("%contenttype%" => $this->getAttribute($this->getAttribute(                // line 262
($context["content"] ?? null), "contenttype", array()), "slug", array()))), (("Are you sure you want to delete '" . $this->getAttribute(                // line 263
($context["content"] ?? null), "getTitle", array())) . "'?"));
                echo "
                            </li>
                        ";
            }
            // line 266
            echo "                        <li class=\"divider\"></li>
                    ";
        }
        // line 268
        echo "                    <li>
                        <a class=\"nolink\">
                            ";
        // line 270
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.author-colon");
        echo " <strong><i class=\"fa fa-user\"></i>
                                ";
        // line 271
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 272
            echo "                                    ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($this->getAttribute(($context["content"] ?? null), "user", array()), "displayname", array()), 15);
            echo "
                                ";
        } else {
            // line 274
            echo "                                    <s>user ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "values", array()), "ownerid", array()), "html", null, true);
            echo "</s>
                                ";
        }
        // line 275
        echo "</strong>
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 279
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-current-colon");
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "status", array()), "html", null, true);
        echo "</strong></a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 282
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.slug-colon");
        echo "
                            <code title=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute(($context["content"] ?? null), "slug", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute(($context["content"] ?? null), "slug", array()), 24);
        echo "</code>
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 287
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.created-on-colon");
        echo "
                            <i class=\"fa fa-asterisk\"></i> ";
        // line 288
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["content"] ?? null), "datecreated", array()), "Y-m-d H:i"), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 292
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.published-on-colon");
        echo "
                            <i class=\"fa fa-calendar\"></i> ";
        // line 293
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["content"] ?? null), "datepublish", array()), "Y-m-d H:i"), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 297
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.last-edited-on-colon");
        echo "
                            <i class=\"fa fa-refresh\"></i> ";
        // line 298
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["content"] ?? null), "datechanged", array()), "Y-m-d H:i"), "html", null, true);
        echo "
                        </a>
                    </li>
                    ";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "taxonomy", array()));
        foreach ($context['_seq'] as $context["taxonomyslug"] => $context["values"]) {
            // line 302
            echo "                        ";
            if ((twig_length_filter($this->env, $context["values"]) > 1)) {
                // line 303
                echo "                            <li>
                                <a class=\"nolink\">";
                // line 304
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "name", array()), "html", null, true);
                echo ":
                                    <i class=\"fa fa-tag\"></i> ";
                // line 305
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt(twig_join_filter($context["values"], ", "), 24);
                echo "
                                </a>
                            </li>
                        ";
            } else {
                // line 309
                echo "                            <li>
                                <a class=\"nolink\">";
                // line 310
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "singular_name", array()), "html", null, true);
                echo ":
                                    <i class=\"fa fa-tag\"></i> ";
                // line 311
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt(twig_first($this->env, $context["values"]), 24);
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 315
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['taxonomyslug'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "                </ul>
            </div>
        </td>
    ";
        
        $__internal_1b54f1f75c55e7c8fedd6f98b99efff43475cba5417a2c984ebfb551a19608e6->leave($__internal_1b54f1f75c55e7c8fedd6f98b99efff43475cba5417a2c984ebfb551a19608e6_prof);

    }

    // line 5
    public function gettbody_beg($__local__ = null, $__modifiable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "local" => $__local__,
            "modifiable" => $__modifiable__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d1655494c61e1021ef38b930aa7e502e412322502e327c3b8045a2fa9f52ff48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d1655494c61e1021ef38b930aa7e502e412322502e327c3b8045a2fa9f52ff48->enter($__internal_d1655494c61e1021ef38b930aa7e502e412322502e327c3b8045a2fa9f52ff48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tbody_beg"));

            // line 6
            echo "    ";
            $context["class"] = array(0 => ((            // line 7
($context["modifiable"] ?? null)) ? ("sortable") : ("")), 1 => ((($this->getAttribute(            // line 8
($context["local"] ?? null), "row_heading", array()) && $this->getAttribute(($context["local"] ?? null), "row_header", array()))) ? ("striping_even") : ("striping_odd")));
            // line 10
            echo "
<tbody";
            // line 11
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hclass(($context["class"] ?? null));
            echo " data-bolt-widget=\"buicListingPart\">
";
            
            $__internal_d1655494c61e1021ef38b930aa7e502e412322502e327c3b8045a2fa9f52ff48->leave($__internal_d1655494c61e1021ef38b930aa7e502e412322502e327c3b8045a2fa9f52ff48_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function gettbody_end($__toolbar__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "toolbar" => $__toolbar__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8be8b979c0e2d9f78569cde552688948c742a804b7a590e2e1ce262aa683306a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_8be8b979c0e2d9f78569cde552688948c742a804b7a590e2e1ce262aa683306a->enter($__internal_8be8b979c0e2d9f78569cde552688948c742a804b7a590e2e1ce262aa683306a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tbody_end"));

            // line 15
            if (($context["toolbar"] ?? null)) {
                // line 16
                echo "    <tr class=\"selectiontoolbar hidden\">
        <td colspan=\"";
                // line 17
                $this->displayBlock("listing_columns", $context, $blocks);
                echo "\">
            <i class=\"fa fa-fw fa-rotate-270 fa-mail-forward\"></i><div class=\"count\">0</div>
            ";
                // line 19
                echo twig_escape_filter($this->env, ($context["toolbar"] ?? null), "html", null, true);
                echo "
        </td>
    </tr>
";
            }
            // line 23
            echo "</tbody>
";
            
            $__internal_8be8b979c0e2d9f78569cde552688948c742a804b7a590e2e1ce262aa683306a->leave($__internal_8be8b979c0e2d9f78569cde552688948c742a804b7a590e2e1ce262aa683306a_prof);

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
        return "@bolt/_base/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  895 => 23,  888 => 19,  883 => 17,  880 => 16,  878 => 15,  863 => 14,  843 => 11,  840 => 10,  838 => 8,  837 => 7,  835 => 6,  819 => 5,  809 => 316,  803 => 315,  796 => 311,  792 => 310,  789 => 309,  782 => 305,  778 => 304,  775 => 303,  772 => 302,  768 => 301,  762 => 298,  758 => 297,  751 => 293,  747 => 292,  740 => 288,  736 => 287,  727 => 283,  723 => 282,  715 => 279,  709 => 275,  703 => 274,  697 => 272,  695 => 271,  691 => 270,  687 => 268,  683 => 266,  677 => 263,  676 => 262,  675 => 260,  672 => 259,  669 => 258,  662 => 254,  658 => 253,  655 => 252,  652 => 251,  649 => 250,  643 => 247,  638 => 246,  635 => 245,  632 => 244,  626 => 242,  623 => 241,  620 => 240,  617 => 239,  615 => 238,  612 => 237,  605 => 233,  601 => 232,  598 => 231,  595 => 230,  588 => 226,  584 => 225,  581 => 224,  579 => 223,  572 => 218,  566 => 215,  561 => 214,  559 => 213,  555 => 211,  553 => 210,  547 => 209,  539 => 204,  533 => 201,  529 => 200,  526 => 199,  523 => 198,  515 => 196,  509 => 194,  507 => 193,  504 => 192,  498 => 191,  492 => 189,  490 => 188,  486 => 186,  484 => 185,  478 => 184,  470 => 180,  458 => 177,  451 => 176,  448 => 175,  445 => 174,  442 => 173,  439 => 172,  437 => 171,  435 => 170,  433 => 169,  430 => 168,  423 => 163,  420 => 162,  414 => 160,  410 => 158,  408 => 157,  401 => 156,  399 => 155,  394 => 153,  391 => 152,  389 => 151,  382 => 150,  380 => 149,  374 => 148,  364 => 144,  361 => 142,  357 => 140,  353 => 138,  350 => 137,  348 => 136,  342 => 135,  332 => 124,  326 => 121,  322 => 118,  316 => 115,  310 => 112,  307 => 110,  303 => 108,  295 => 103,  291 => 102,  287 => 101,  283 => 100,  278 => 98,  274 => 97,  266 => 91,  263 => 90,  260 => 88,  257 => 87,  251 => 86,  239 => 54,  228 => 323,  226 => 322,  222 => 320,  219 => 209,  216 => 207,  213 => 206,  210 => 184,  208 => 183,  205 => 182,  202 => 148,  199 => 146,  196 => 135,  183 => 132,  180 => 128,  176 => 126,  174 => 86,  170 => 84,  168 => 83,  165 => 82,  158 => 81,  155 => 80,  149 => 79,  146 => 78,  144 => 77,  142 => 76,  139 => 72,  133 => 70,  131 => 69,  127 => 67,  121 => 65,  115 => 63,  113 => 62,  108 => 61,  105 => 60,  102 => 59,  99 => 58,  96 => 57,  93 => 56,  90 => 55,  87 => 54,  85 => 53,  79 => 50,  76 => 49,  70 => 47,  67 => 46,  65 => 45,  62 => 41,  60 => 39,  59 => 38,  58 => 37,  55 => 36,  53 => 34,  52 => 33,  51 => 31,  50 => 30,  49 => 29,  48 => 28,  45 => 27,  43 => 26,  40 => 25,  37 => 13,  34 => 4,  32 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@bolt/_macro/_macro.twig' as macro %}
{% from '@bolt/_buic/_moment.twig' import buic_moment %}
{% from _self import tbody_beg, tbody_end %}

{% macro tbody_beg(local, modifiable) %}
    {% set class = [
    modifiable ? 'sortable' : '',
    local.row_heading and local.row_header ? 'striping_even' : 'striping_odd',
    ] %}

<tbody{{ hclass(class)}} data-bolt-widget=\"buicListingPart\">
{% endmacro %}

{% macro tbody_end(toolbar) %}
{% if toolbar %}
    <tr class=\"selectiontoolbar hidden\">
        <td colspan=\"{{ block('listing_columns') }}\">
            <i class=\"fa fa-fw fa-rotate-270 fa-mail-forward\"></i><div class=\"count\">0</div>
            {{ toolbar }}
        </td>
    </tr>
{% endif %}
</tbody>
{% endmacro %}

{% set modifiable = permissions.create or permissions.edit or permissions.delete or permissions.publish or permissions.depublish %}

{% set prop = {
extended:       not compact,
has_groupname:  content.group.name is defined,
nextgroup:      new_group|default(false),
unordered:      request('order') == '',
first:          loop.first,
last:           loop.last
}%}

{% set local = {
row_heading:    prop.extended and prop.unordered and prop.has_groupname and (prop.first or prop.nextgroup),
row_header:     prop.extended and (prop.first or (prop.has_groupname and prop.nextgroup) and prop.unordered)
} %}

{#
 # GROUPNAME: If we have 'grouping', print the row with the groupname.
 #}
{% if local.row_heading or internal.heading|default() %}
    {% if not prop.first %}
        {{ tbody_end(internal.selection_toolbar|default()) }}
    {% endif %}

    {{ tbody_beg(local, modifiable) }}

    <tr class=\"heading\">
        {% if false %}
            {% block listing_columns %}6{% endblock %}
        {% endif %}
        {% if compact %}
            {% set columns = block('listing_columns') - 1 %}
        {% else %}
            {% set columns = block('listing_columns') %}
        {% endif %}
        <th colspan=\"{{ columns }}\">
            {% if internal.heading|default() %}
                {{ internal.heading }}
            {% else %}
                {{ content.group.name|default(__('(no group)')) }}
            {% endif %}
        </th>
    </tr>
{% elseif prop.first %}
    {{ tbody_beg(local, modifiable) }}
{% endif %}

{#
 # HEADER ROW: Print the header for the first row.
 #}
{% if local.row_header %}
    {# Deprecated #}
    {% set params = {} %}
    {% for key, val in app.request.query.all if key != 'order' %}
        {% set params = params|merge({(key): val}) %}
    {% endfor %}
    {% set link = '?' ~ params|url_encode ~ (params|length ? '&' : '') ~ 'order=' %}
    {# /Deprecated #}

    <tr class=\"header\">
        {% block listing_header %}
            {% from '@bolt/_buic/_listing.twig' import buic_listing_slink %}

            {# COLUMN: Select #}
            {% if prop.extended and modifiable %}
                <th class=\"menu hidden-xs\">
                    <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li class=\"select-all\"><a href=\"#\">{{ __('general.phrase.select-all') }}</a></li>
                            <li class=\"hidden select-none\"><a href=\"#\">{{ __('general.phrase.select-none') }}</a></li>
                            <li class=\"hidden divider\" role=\"separator\"></li>
                            <li class=\"hidden dropdown-header\">{{ __('general.phrase.selection') }} (#):</li>
                            <li class=\"hidden\"><a href=\"#\">• {{ __('general.phrase.delete') }}</a></li>
                            <li class=\"hidden disabled\"><a href=\"#\">• {{ __('general.phrase.publish') }}</a></li>
                            <li class=\"hidden disabled\"><a href=\"#\">• {{ __('general.phrase.depublish') }}</a></li>
                        </ul>
                    </div>
                </th>
            {% else %}
                <th style=\"margin: 0; padding: 0;\"></th>
            {% endif %}

            {# COLUMN: ID #}
            <th class=\"hidden-xs\">{{ buic_listing_slink('id', __('general.phrase.id'))}}</th>

            {# COLUMN: Content #}
            <th style=\"width:80%\">{{ buic_listing_slink(content.TitleColumnName()|first, __('Title') ~ ' / ' ~ __('Excerpt')) }}</th>

            {# COLUMN: Thumbnail #}
            <th class=\"listthumb\"></th>

            {# COLUMN: Meta #}
            <th class=\"username hidden-sm hidden-xs\">{{ buic_listing_slink('datecreated', __('general.phrase.meta'))}}</th>

            {# COLUMN: Action #}
            <th><span class=\"hidden-xs\">{{ __('general.phrase.action-plural') }}</span></th>
        {% endblock %}
    </tr>
{% endif %}

{#
 # DATA ROW
 #}
<tr {% if content.status!='published' %}class=\"dim\"{% endif %}{% if modifiable %} id=\"item_{{ content.id }}\"{% endif %}>

    {### BLOCK: ID ###}
    {% block listing_id %}
        {# COLUMN: Select #}
        {% if prop.extended and permissions.delete %}
            <td class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\"></td>
        {% else %}
            <td style=\"margin: 0; padding: 0;\"></td>
        {% endif %}

        {# COLUMN: ID #}
        <td class=\"id hidden-xs\">№ {{ content.id }}</td>
    {% endblock %}

    {### BLOCK: CONTENT ###}
    {% block listing_content %}
        {# COLUMN: Content #}
        <td class=\"excerpt {% if prop.extended %}large{% endif %}\">
            {% set title = content.getTitle(true)|default(\"<em>(\" ~ __('general.phrase.no-title') ~ \")</em>\") %}
            <span>
                <strong class=\"visible-xs\">№ {{ content.id }}. </strong>
                <strong>
                    {% if modifiable %}
                        <a href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}\" title=\"Slug: {{ content.slug }}\">
                            {{ title|raw -}}
                        </a>
                    {% else %}
                        {{ title|raw }}
                    {% endif %}
                </strong>
                {{ content.excerpt(excerptlength - title|length, false, filter|default()) }}
            </span>
        </td>

        {# COLUMN: Thumbnail #}
        <td class=\"listthumb\">
            {% if content.getImage is not empty %}
                {# Hack to add alt attribute #}
                {#{ content.getImage|popup(thumbsize, thumbsize * 0.75, 'c') }#}
                {% set thumb_height = (thumbsize * 0.75)|round %}
                {% set thumb_small = content.getImage|thumbnail(thumbsize, thumb_height, 'c') %}
                {% set thumb_large = content.getImage|thumbnail(1000, 800, 'r') %}
                {% set thumb_title = __('Image') ~ ': ' ~ content.getImage %}
                <a href=\"{{ thumb_large }}\" class=\"magnific\" title=\"{{ thumb_title }}\">
                    <img src=\"{{ thumb_small }}\" width=\"{{ thumbsize }}\" height=\"{{ thumb_height }}\" alt=\"{{ __('general.phrase.thumbnail') }}\">
                </a>
            {% endif %}
        </td>
    {% endblock %}

    {% if prop.extended %}
        {% block listing_meta %}
            {# COLUMN: Meta #}
            <td class=\"username hidden-sm hidden-xs\">
                <i class=\"fa fa-user fa-fw\"></i>
                {% if content.user.displayname is defined %}
                {{ content.user.displayname|excerpt(15) }}
            {% else %}
                <s>{{ content.values.ownerid|excerpt(15) }}</s>
                {% endif %}<br>
                {% if content.status == 'timed' %}
                    <i class=\"fa fa-clock-o status-timed fa-fw\"></i> {{ buic_moment(content.datepublish) }}<br>
                {% else %}
                    <i class=\"fa fa-circle status-{{ content.status }} fa-fw\"></i> {{ content.datepublish|localedatetime('%x') }}<br>
                {% endif %}
                {% if content.sortorder|default() is not empty %}
                    <i class=\"fa fa-align-left fa-fw\"></i>
                    <a href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}#taxonomy\" >
                        {{ __('general.phrase.order-colon-sort',{'%sort%': content.sortorder}) }}
                    </a>
                {% endif %}
            </td>
        {% endblock %}
    {% endif %}

    {### BLOCK: ACTIONS ###}
    {% block listing_actions %}
        {# COLUMN: Action #}
        <td class=\"actions\">
            <div class=\"btn-group\">
                {% if modifiable %}
                    <a class=\"btn btn-default btn-xs hidden-xs\" href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}\">
                        <i class=\"fa fa-edit\"></i> {{ __('general.phrase.edit') }}
                    </a>
                {% endif %}
                <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-xs\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-info-sign\"></i> <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu pull-right\">
                    {% if content.status == \"published\" and content.link is not empty %}
                        <li>
                            <a href=\"{{ content.link }}\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"></i> {{ __('general.phrase.view-on-site') }}
                            </a>
                        </li>
                    {% endif %}
                    {% if content.relation %}{# i.e. we're viewing this as \"related content\" on the \"edit record\" page. #}
                        <li>
                            <a href=\"{{ path('relatedto', {'contenttypeslug': content.contenttype.slug, 'id': content.id}) }}\">
                                <i class=\"fa fa-link\"></i> {{ __('general.phrase.view-related') }}
                            </a>
                        </li>
                    {% endif %}

                    {% from _self import actionform %}
                    {% if modifiable %}
                        {% if content.status != 'published' %}
                            {% if permissions.publish %}
                                <li>{{ macro.actionform(content, 'publish', 'fa-circle status-published', __('contenttypes.generic.publish',{'%contenttype%':content.contenttype.slug})) }}</li>
                            {% endif %}
                        {% else %}
                            {% if permissions.depublish %}
                                <li>{{ macro.actionform(content, 'held', 'fa-circle status-held', __('general.phrase.status-change-held')) }}</li>
                                <li>{{ macro.actionform(content, 'draft', 'fa-circle status-draft', __('general.phrase.status-change-draft')) }}</li>

                            {% endif %}
                        {% endif %}
                        {% if permissions.create %}
                            <li>
                                <a href=\"{{ path('editcontent', {'contenttypeslug': content.contenttype.slug, 'id': content.id, 'duplicate': 1}) }}\">
                                    <i class=\"fa fa-copy\"></i> {{ __('contenttypes.generic.duplicate', {'%contenttype%': content.contenttype.slug}) }}
                                </a>
                            </li>
                        {% endif %}
                        {% if permissions.delete %}
                            <li>
                                {{ macro.actionform(content, 'delete',
                                'fa-trash',
                                __('contenttypes.generic.delete', {'%contenttype%': content.contenttype.slug}),
                                \"Are you sure you want to delete '\" ~ content.getTitle ~ \"'?\" ) }}
                            </li>
                        {% endif %}
                        <li class=\"divider\"></li>
                    {% endif %}
                    <li>
                        <a class=\"nolink\">
                            {{ __('general.phrase.author-colon') }} <strong><i class=\"fa fa-user\"></i>
                                {% if content.user.displayname is defined %}
                                    {{ content.user.displayname|excerpt(15) }}
                                {% else %}
                                    <s>user {{ content.values.ownerid }}</s>
                                {% endif %}</strong>
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.status-current-colon') }}<strong>{{ content.status }}</strong></a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.slug-colon') }}
                            <code title=\"{{ content.slug }}\">{{ content.slug|excerpt(24) }}</code>
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.created-on-colon') }}
                            <i class=\"fa fa-asterisk\"></i> {{ content.datecreated|date(\"Y-m-d H:i\") }}
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.published-on-colon') }}
                            <i class=\"fa fa-calendar\"></i> {{ content.datepublish|date(\"Y-m-d H:i\") }}
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">{{ __('general.phrase.last-edited-on-colon') }}
                            <i class=\"fa fa-refresh\"></i> {{ content.datechanged|date(\"Y-m-d H:i\") }}
                        </a>
                    </li>
                    {% for taxonomyslug, values in content.taxonomy %}
                        {% if values|length > 1 %}
                            <li>
                                <a class=\"nolink\">{{ config.get('taxonomy')[taxonomyslug].name }}:
                                    <i class=\"fa fa-tag\"></i> {{ values|join(\", \")|excerpt(24) }}
                                </a>
                            </li>
                        {% else %}
                            <li>
                                <a class=\"nolink\">{{ config.get('taxonomy')[taxonomyslug].singular_name }}:
                                    <i class=\"fa fa-tag\"></i> {{ values|first|excerpt(24) }}
                                </a>
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>
        </td>
    {% endblock %}
</tr>

{% if prop.last %}
    {{ tbody_end(internal.selection_toolbar|default()) }}
{% endif %}
", "@bolt/_base/_listing.twig", "");
    }
}
