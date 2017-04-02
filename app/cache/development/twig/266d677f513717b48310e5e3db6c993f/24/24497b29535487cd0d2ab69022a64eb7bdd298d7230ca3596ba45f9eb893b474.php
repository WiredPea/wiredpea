<?php

/* @bolt/_nav/_macros.twig */
class __TwigTemplate_cfb319eb51c0e5ec03ebbf8e532574640c62a6a163ea3b9dc620b4be3eed8996 extends Twig_Template
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
        $__internal_946fdc10281b8fc8aa599e1707c7ed747ee14f0dae2d68f7f209101f6c710f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946fdc10281b8fc8aa599e1707c7ed747ee14f0dae2d68f7f209101f6c710f77->enter($__internal_946fdc10281b8fc8aa599e1707c7ed747ee14f0dae2d68f7f209101f6c710f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@bolt/_nav/_macros.twig"));

        // line 10
        echo "

";
        // line 76
        echo "

";
        // line 95
        echo "

";
        // line 111
        echo "

";
        // line 126
        echo "

";
        
        $__internal_946fdc10281b8fc8aa599e1707c7ed747ee14f0dae2d68f7f209101f6c710f77->leave($__internal_946fdc10281b8fc8aa599e1707c7ed747ee14f0dae2d68f7f209101f6c710f77_prof);

    }

    // line 4
    public function getheading($__title__ = null, $__icon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bba96ac6a5d15570eec52ceed999c1438e25d05c4a921d4f70fbbf206f1047c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_bba96ac6a5d15570eec52ceed999c1438e25d05c4a921d4f70fbbf206f1047c5->enter($__internal_bba96ac6a5d15570eec52ceed999c1438e25d05c4a921d4f70fbbf206f1047c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "heading"));

            // line 5
            echo "    ";
            $context["__internal_aa3718a01277ab1b207c5269e9f65bd81a0d8e5453df8d48d813b50d151ea5ad"] = $this;
            // line 6
            echo "    <li class=\"divider\">
        <em>";
            // line 7
            echo $context["__internal_aa3718a01277ab1b207c5269e9f65bd81a0d8e5453df8d48d813b50d151ea5ad"]->getlabel(($context["icon"] ?? null), ($context["title"] ?? null));
            echo "</em>
    </li>
";
            
            $__internal_bba96ac6a5d15570eec52ceed999c1438e25d05c4a921d4f70fbbf206f1047c5->leave($__internal_bba96ac6a5d15570eec52ceed999c1438e25d05c4a921d4f70fbbf206f1047c5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getsubmenu($__icon__ = null, $__label__ = null, $__popoveritems__ = null, $__active__ = null, $__wide__ = null, $__subitems__ = null, $__force_submenu__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "popoveritems" => $__popoveritems__,
            "active" => $__active__,
            "wide" => $__wide__,
            "subitems" => $__subitems__,
            "force_submenu" => $__force_submenu__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_19f40d9017d9ed017b04b92c16b93b1a65c33bb0d947cdb57f9274157fd48799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_19f40d9017d9ed017b04b92c16b93b1a65c33bb0d947cdb57f9274157fd48799->enter($__internal_19f40d9017d9ed017b04b92c16b93b1a65c33bb0d947cdb57f9274157fd48799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "submenu"));

            // line 23
            echo "
    ";
            // line 24
            $context["__internal_e92afab5d4c8dc89f124e61c135546159cbc0a2537b5fe7b1a96f48c3ddca1d3"] = $this;
            // line 25
            echo "
    ";
            // line 26
            if (twig_test_empty(($context["subitems"] ?? null))) {
                // line 27
                echo "        ";
                $context["subitems"] = ($context["popoveritems"] ?? null);
                // line 28
                echo "    ";
            }
            // line 29
            echo "
    ";
            // line 31
            echo "    ";
            $context["allowedany"] = false;
            // line 32
            echo "    ";
            $context["allowedamount"] = 0;
            // line 33
            echo "    ";
            $context["allowedsingle"] = "";
            // line 34
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subitems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "        ";
                if ((($context["item"] != "-") && $this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard"))))) {
                    // line 36
                    echo "            ";
                    $context["allowedany"] = true;
                    // line 37
                    echo "            ";
                    $context["allowedamount"] = (($context["allowedamount"] ?? null) + 1);
                    // line 38
                    echo "            ";
                    $context["allowedsingle"] = $context["item"];
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    ";
            // line 42
            $context["class"] = trim((((($context["wide"] ?? null)) ? (" menu-pop-wide") : ("")) . ((($context["active"] ?? null)) ? (" active") : (""))));
            // line 43
            echo "
    ";
            // line 45
            echo "    ";
            if (($context["allowedany"] ?? null)) {
                // line 46
                echo "        <li";
                if (($context["class"] ?? null)) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 47
                if (((($context["allowedamount"] ?? null) == 1) &&  !((array_key_exists("force_submenu", $context)) ? (_twig_default_filter(($context["force_submenu"] ?? null), false)) : (false)))) {
                    // line 48
                    echo "                ";
                    $context["item"] = ($context["allowedsingle"] ?? null);
                    // line 49
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "link", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 50
                    echo $context["__internal_e92afab5d4c8dc89f124e61c135546159cbc0a2537b5fe7b1a96f48c3ddca1d3"]->geticon($this->getAttribute(($context["item"] ?? null), "icon", array()), "icon");
                    echo (($this->getAttribute(($context["item"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "label", array()), (("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-content")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-content")) . ")</em>")));
                    echo "
                </a>
            ";
                } else {
                    // line 53
                    echo "                <a  href=\"";
                    if (($context["popoveritems"] ?? null)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["popoveritems"] ?? null), 0, array()), "link", array()), "html", null, true);
                    } else {
                        echo "#";
                    }
                    echo "\" class=\"menu-pop\">
                    ";
                    // line 54
                    echo $context["__internal_e92afab5d4c8dc89f124e61c135546159cbc0a2537b5fe7b1a96f48c3ddca1d3"]->getlabel(($context["icon"] ?? null), ($context["label"] ?? null));
                    echo "
                </a>
                <ul class=\"nav submenu\">
                    ";
                    // line 57
                    $context["divider"] = false;
                    // line 58
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["popoveritems"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 59
                        echo "                        ";
                        if (($context["item"] == "-")) {
                            // line 60
                            echo "                            ";
                            $context["divider"] = true;
                            // line 61
                            echo "                        ";
                        } elseif ($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard")))) {
                            // line 62
                            echo "                            <li";
                            if (($context["divider"] ?? null)) {
                                echo " class=\"subdivider\"";
                            }
                            echo ">
                                <a href=\"";
                            // line 63
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                            echo "\">
                                    ";
                            // line 64
                            echo $context["__internal_e92afab5d4c8dc89f124e61c135546159cbc0a2537b5fe7b1a96f48c3ddca1d3"]->geticon($this->getAttribute($context["item"], "icon", array()));
                            echo (($this->getAttribute($context["item"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "label", array()), (("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-content")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-content")) . ")</em>")));
                            echo "
                                </a>
                            </li>
                            ";
                            // line 67
                            $context["divider"] = false;
                            // line 68
                            echo "                        ";
                        }
                        // line 69
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "                </ul>
            ";
                }
                // line 72
                echo "        </li>
    ";
            }
            // line 74
            echo "
";
            
            $__internal_19f40d9017d9ed017b04b92c16b93b1a65c33bb0d947cdb57f9274157fd48799->leave($__internal_19f40d9017d9ed017b04b92c16b93b1a65c33bb0d947cdb57f9274157fd48799_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 81
    public function getcollapse(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_41363d686f4211dc25fe87c9dbf2f2fffb4a2d6766cdc6d08d00d0ad5f4f951e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_41363d686f4211dc25fe87c9dbf2f2fffb4a2d6766cdc6d08d00d0ad5f4f951e->enter($__internal_41363d686f4211dc25fe87c9dbf2f2fffb4a2d6766cdc6d08d00d0ad5f4f951e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collapse"));

            // line 82
            echo "    ";
            $context["__internal_9cf25e4ec1e97f72dfec7ca63b1e031e154be87b9e51e2087fcacc6448166e9f"] = $this;
            // line 83
            echo "
    <li class=\"nav-secondary-collapse\">
        <a href=\"#\">
            ";
            // line 86
            echo $context["__internal_9cf25e4ec1e97f72dfec7ca63b1e031e154be87b9e51e2087fcacc6448166e9f"]->getlabel("fa:compress", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.collapse-sidebar"));
            echo "
        </a>
    </li>
    <li class=\"nav-secondary-expand\">
        <a href=\"#\">
            ";
            // line 91
            echo $context["__internal_9cf25e4ec1e97f72dfec7ca63b1e031e154be87b9e51e2087fcacc6448166e9f"]->getlabel("fa:expand", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Expand sidebar"));
            echo "
        </a>
    </li>
";
            
            $__internal_41363d686f4211dc25fe87c9dbf2f2fffb4a2d6766cdc6d08d00d0ad5f4f951e->leave($__internal_41363d686f4211dc25fe87c9dbf2f2fffb4a2d6766cdc6d08d00d0ad5f4f951e_prof);

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
    public function getlink($__icon__ = null, $__label__ = null, $__pathname__ = null, $__active__ = null, $__divider__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "pathname" => $__pathname__,
            "active" => $__active__,
            "divider" => $__divider__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9228d54407989d09af4fb260ed42dff4a4f97698a6b907e894b38966d4695221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9228d54407989d09af4fb260ed42dff4a4f97698a6b907e894b38966d4695221->enter($__internal_9228d54407989d09af4fb260ed42dff4a4f97698a6b907e894b38966d4695221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link"));

            // line 101
            echo "    ";
            $context["__internal_fd5d3accbaa3d928755251c389b1070c33739a7aac85c99b155a43d698691921"] = $this;
            // line 102
            echo "    ";
            $context["class"] = "";
            // line 103
            echo "    ";
            if ((($context["pathname"] ?? null) == "dashboard")) {
                $context["class"] = "nav-secondary-dashboard";
            }
            // line 104
            echo "    ";
            if (($context["active"] ?? null)) {
                $context["class"] = (($context["class"] ?? null) . " active");
            }
            // line 105
            echo "    ";
            if (($context["divider"] ?? null)) {
                $context["class"] = (($context["class"] ?? null) . " divider");
            }
            // line 106
            echo "
    <li";
            // line 107
            if (($context["class"] ?? null)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, trim(($context["class"] ?? null)), "html", null, true);
                echo "\" ";
            }
            echo ">
        <a href=\"";
            // line 108
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["pathname"] ?? null));
            echo "\">";
            echo $context["__internal_fd5d3accbaa3d928755251c389b1070c33739a7aac85c99b155a43d698691921"]->getlabel(($context["icon"] ?? null), ($context["label"] ?? null));
            echo "</a>
    </li>
";
            
            $__internal_9228d54407989d09af4fb260ed42dff4a4f97698a6b907e894b38966d4695221->leave($__internal_9228d54407989d09af4fb260ed42dff4a4f97698a6b907e894b38966d4695221_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function getlabel($__icon__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_60f2077385f4b8fbe369719632334259f0c04eb165fe1bc8aa2e53c5ecda25bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_60f2077385f4b8fbe369719632334259f0c04eb165fe1bc8aa2e53c5ecda25bc->enter($__internal_60f2077385f4b8fbe369719632334259f0c04eb165fe1bc8aa2e53c5ecda25bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label"));

            // line 117
            echo "    ";
            $context["__internal_d84125b2f386071869dacf93ce2797ea0a7126fc97fbc7395a0dc9a119085c29"] = $this;
            // line 118
            echo "
    ";
            // line 119
            if (twig_test_empty(($context["icon"] ?? null))) {
                // line 120
                echo "        <i class=\"icon\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, ($context["label"] ?? null), 0, 1), "html", null, true);
                echo "</i>
    ";
            } elseif ((            // line 121
($context["icon"] ?? null) != "-")) {
                // line 122
                echo "        ";
                echo $context["__internal_d84125b2f386071869dacf93ce2797ea0a7126fc97fbc7395a0dc9a119085c29"]->geticon(($context["icon"] ?? null), true);
                echo "
    ";
            }
            // line 124
            echo "    ";
            echo ($context["label"] ?? null);
            echo "
";
            
            $__internal_60f2077385f4b8fbe369719632334259f0c04eb165fe1bc8aa2e53c5ecda25bc->leave($__internal_60f2077385f4b8fbe369719632334259f0c04eb165fe1bc8aa2e53c5ecda25bc_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 131
    public function geticon($__icon__ = null, $__box__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "box" => $__box__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_df51b22e69f4c2febee37d5ebae404cfed12edfe5dc31a7d0cdf5aafffa374d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_df51b22e69f4c2febee37d5ebae404cfed12edfe5dc31a7d0cdf5aafffa374d8->enter($__internal_df51b22e69f4c2febee37d5ebae404cfed12edfe5dc31a7d0cdf5aafffa374d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "icon"));

            // line 132
            echo "    ";
            $context["class"] = ((((array_key_exists("box", $context)) ? (_twig_default_filter(($context["box"] ?? null), false)) : (false))) ? ("icon") : ("fa-fw"));
            // line 133
            echo "    ";
            // line 134
            echo "    ";
            if ((twig_slice($this->env, ($context["icon"] ?? null), 0, 3) == "fa:")) {
                // line 135
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_slice($this->env, ($context["icon"] ?? null), 3), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\"></i>
    ";
                // line 137
                echo "    ";
            } else {
                // line 138
                echo "        <i class=\"fa fa-question-circle ";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
    ";
            }
            
            $__internal_df51b22e69f4c2febee37d5ebae404cfed12edfe5dc31a7d0cdf5aafffa374d8->leave($__internal_df51b22e69f4c2febee37d5ebae404cfed12edfe5dc31a7d0cdf5aafffa374d8_prof);

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
        return "@bolt/_nav/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 138,  504 => 137,  497 => 135,  494 => 134,  492 => 133,  489 => 132,  473 => 131,  452 => 124,  446 => 122,  444 => 121,  439 => 120,  437 => 119,  434 => 118,  431 => 117,  415 => 116,  392 => 108,  384 => 107,  381 => 106,  376 => 105,  371 => 104,  366 => 103,  363 => 102,  360 => 101,  341 => 100,  319 => 91,  311 => 86,  306 => 83,  303 => 82,  289 => 81,  270 => 74,  266 => 72,  262 => 70,  256 => 69,  253 => 68,  251 => 67,  244 => 64,  240 => 63,  233 => 62,  230 => 61,  227 => 60,  224 => 59,  219 => 58,  217 => 57,  211 => 54,  202 => 53,  195 => 50,  190 => 49,  187 => 48,  185 => 47,  176 => 46,  173 => 45,  170 => 43,  168 => 42,  165 => 41,  159 => 40,  156 => 39,  153 => 38,  150 => 37,  147 => 36,  144 => 35,  139 => 34,  136 => 33,  133 => 32,  130 => 31,  127 => 29,  124 => 28,  121 => 27,  119 => 26,  116 => 25,  114 => 24,  111 => 23,  90 => 22,  69 => 7,  66 => 6,  63 => 5,  47 => 4,  38 => 126,  34 => 111,  30 => 95,  26 => 76,  22 => 10,);
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
 # Sidebar-menu heading
 #}
{% macro heading(title, icon) %}
    {% from _self import label %}
    <li class=\"divider\">
        <em>{{ label(icon, title) }}</em>
    </li>
{% endmacro %}


{##
 # Sidebar-menu blocks with links, popover (for desktop) and touch-to-show (for mobile)
 #
 # @param string  icon
 # @param string  label (default: slug())
 # @param array   popoveritems
 # @param bool    active
 # @param bool    wide
 # @param array   subitems
 #}
{% macro submenu(icon, label, popoveritems, active, wide, subitems, force_submenu) %}

    {% from _self import label, icon %}

    {% if subitems is empty %}
        {% set subitems = popoveritems %}
    {% endif %}

    {# Only display the 'root' option, if any of the subitems are allowed to be shown. #}
    {% set allowedany = false %}
    {% set allowedamount = 0 %}
    {% set allowedsingle = \"\" %}
    {% for item in subitems %}
        {% if item != '-' and isallowed(item.isallowed|default('dashboard')) %}
            {% set allowedany = true %}
            {% set allowedamount = allowedamount + 1 %}
            {% set allowedsingle = item %}
        {% endif %}
    {% endfor %}

    {% set class = ((wide ? ' menu-pop-wide' : '') ~ (active ? ' active' : ''))|trim %}

    {# Show stuff! #}
    {% if allowedany %}
        <li{% if class %} class=\"{{ class }}\"{% endif %}>
            {% if allowedamount == 1 and not force_submenu|default(false) %}
                {% set item = allowedsingle %}
                <a href=\"{{ item.link }}\">
                    {{ icon(item.icon, \"icon\") }}{{ item.label|default(\"<em>(\" ~ __('general.phrase.no-content') ~ \")</em>\")|raw }}
                </a>
            {% else %}
                <a  href=\"{% if popoveritems %}{{ popoveritems.0.link }}{% else %}#{% endif %}\" class=\"menu-pop\">
                    {{ label(icon, label) }}
                </a>
                <ul class=\"nav submenu\">
                    {% set divider = false %}
                    {% for item in popoveritems %}
                        {% if item == '-' %}
                            {% set divider = true %}
                        {% elseif isallowed(item.isallowed|default('dashboard')) %}
                            <li{% if divider %} class=\"subdivider\"{% endif %}>
                                <a href=\"{{ item.link }}\">
                                    {{ icon(item.icon) }}{{ item.label|default(\"<em>(\" ~ __('general.phrase.no-content') ~ \")</em>\")|raw }}
                                </a>
                            </li>
                            {% set divider = false %}
                        {% endif %}
                    {% endfor %}
                </ul>
            {% endif %}
        </li>
    {% endif %}

{% endmacro %}


{##
 # Sidebar-menu collapse/expand
 #}
{% macro collapse() %}
    {% from _self import label %}

    <li class=\"nav-secondary-collapse\">
        <a href=\"#\">
            {{ label('fa:compress', __('general.phrase.collapse-sidebar')) }}
        </a>
    </li>
    <li class=\"nav-secondary-expand\">
        <a href=\"#\">
            {{ label('fa:expand', __('Expand sidebar')) }}
        </a>
    </li>
{% endmacro %}


{##
 # Sidebar-menu link
 #}
{% macro link(icon, label, pathname, active, divider) %}
    {% from _self import label %}
    {% set class = '' %}
    {% if pathname == 'dashboard' %}{% set class = 'nav-secondary-dashboard' %}{% endif %}
    {% if active %}{% set class = class ~ ' active' %}{% endif %}
    {% if divider %}{% set class = class ~ ' divider' %}{% endif %}

    <li{% if class %} class=\"{{ class|trim }}\" {% endif %}>
        <a href=\"{{ path(pathname) }}\">{{ label(icon, label) }}</a>
    </li>
{% endmacro %}


{##
 # Sidebar-menu label
 #}
{% macro label(icon, label) %}
    {% from _self import icon %}

    {% if icon is empty %}
        <i class=\"icon\">{{ label|slice(0, 1) }}</i>
    {% elseif icon != '-' %}
        {{ icon(icon, true) }}
    {% endif %}
    {{ label|raw }}
{% endmacro %}


{##
 # Icon
 #}
{% macro icon(icon, box) %}
    {% set class = box|default(false) ? 'icon' : 'fa-fw' %}
    {# Font Awsome #}
    {% if icon|slice(0,3) == 'fa:' %}
        <i class=\"fa fa-{{ icon|slice(3) }} {{ class }}\"></i>
    {# Defaults to (?) #}
    {% else %}
        <i class=\"fa fa-question-circle {{ class }}\" title=\"{{ icon }}\"></i>
    {% endif %}
{% endmacro %}
", "@bolt/_nav/_macros.twig", "");
    }
}
