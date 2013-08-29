<?php

/* @Swiftmailer/Collector/swiftmailer.html.twig */
class __TwigTemplate_ac6b7f2c96a1ba043b94a32eda6e4fa9b6201968741f65f4dc175ca0d26abb00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messageCount")) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img width=\"23\" height=\"28\" alt=\"Swiftmailer\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAcCAYAAACK7SRjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0NEOTU1MjM0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0NEOTU1MjQ0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMEQ5OTQ5QzQ5OEMxMUUwODc3MkE1MTY4ODBDMzEzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3Q0Q5NTUyMjQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpkRnSAAAAJ0SURBVHjaYvz//z8DrQATAw3BqOFYAaO9vT1FBhw4cGCAXA5MipxBQUHT3r17l0AVAxkZ/wkLC89as2ZNIcjlYkALXKnlWqBZTH/+/PEDmQsynLW/v3+NoaHhN2oYDjJn8uTJK4BMNpDhPwsLCwOKiop2+fn5vafEYC8vrw8gc/Lz8wOB3B8gw/nev38vn5WV5eTg4LA/Ly/vESsrK2npmYmJITU19SnQ8L0gc4DxpwgyF2S4EEjB58+f+crLy31YWFjOt7S0XBYUFPxHjMEcHBz/6+rqboqJiZ0qKSnxBpkDlRICGc4MU/j792+2CRMm+L18+fLSxIkTDykoKPzBZ7CoqOi/np6eE8rKylvb29v9fvz4wYEkzYKRzjk5OX/LyMjcnDRpEkjjdisrK6wRraOj8wvokAMLFy788ejRoxcaGhrPCWai4ODgB8DUE3/mzBknYMToASNoMzAfvEVW4+Tk9LmhoWFbTU2NwunTpx2BjiiMjo6+hm4WCzJHUlLyz+vXrxkfP36sDOI/ffpUPikpibe7u3sLsJjQW7VqlSrQxe+Avjmanp7u9PbtWzGQOmCCkARmmu/m5uYfT548yY/V5UpKSl+2b9+uiiz26dMnIWBSDTp27NgdYGrYCIzwE7m5uR4wg2Hg/PnzSsDI/QlKOcjZ3wGUBLm5uf+DwLdv38gub4AG/xcSEvr35s0bZmCB5sgCE/z69SsjyDJKMtG/f/8YQQYD8wkoGf8H51AbG5sH1CpbQBnQ09PzBiiHgoIFFHlBQGwLxLxUMP8dqJgH4k3gIhfIkAKVYkDMTmmhCHIxEL8A4peMo02L4WU4QIABANxZAoDIQDv3AAAAAElFTkSuQmCC\" />
            <span class=\"sf-toolbar-status\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messageCount"), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Messages</b>
                <span>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messageCount"), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "mailers"));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 15
                echo "                <hr>
                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "</b>
                    <span>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messageCount", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Is spooled ?</b>
                    <span>";
                // line 22
                echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "isSpool", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method")) ? ("yes") : ("no"));
                echo "</span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 27
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 28
            echo "    ";
        }
    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        // line 32
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAAEDElEQVR42u2XWUhUURjHy6isILAebO+lonpJ8qkHM3NFVFxAUVFM0RSXUKnwwdAQn3wQE0MyA1MwBEUQcxvHZTTTHNcZl9DUGqd0JBOzcsZ7+n8XJ0Z0GueOVwg68GfmnLn3O7/7Lee7s4cxZpHq6uos0bb3+Q+6DrG3u7v7RHt7u3tbW9uD5ubm8qamJnlDQ4NKIpG8HhkZOU3X7BYoD9Tb22sjk8mcWltb70ul0pcAegugBfzOjKmzs/MJ7j0kCujw8PBhADkAKAVAz+EZGYA+08bmCN79qdFo7sGmjaWg+wgIIUtoaWl5CqDmxsbGj7SJpYK3uYWFBRnsDmEfWyGg+zs6OkIBNEoGxVB9fT2bnZ1VIHff03xmZuY29rUyF9QWT6sWC5I0OTk5rVAo3unnSqXyEfa1Nhf0Kp5UKRYk8lsDD0oM1/r6+l5h32Pmgl5UqVTP5ubmlEgBHRlCobC8vDzm5eXFHB0dRZWzs/OXsLCwu5SCpkBPo4DaMVRI9rbp6Wk1vnP+/v5kaFfk4eGhAcdJU6Dn+/v7q9aTnpPL5YqVlRV5eXm5Fk+7Gx7lCgsL68Fx2RToWST7C8McQgr8yMrKWkLu/hQz/LDNIZojycnJb8BxwRTocYT8oSEoQs8bSkpK0k5MTGgiIiK4nYYMDg7mcBLIo6OjP9Ec44opUGvIF+eoTg/a1dX1x2BISMgyKncpLS1tbacgU1NT2djY2HxoaOi8fg3jhilQK+gmQvBVD4qQbzDs4+ND6bBWUFCgtRQyJyeHdwSKdcODY9zaTgu9jheMcWOgJFdXV1ZZWclqamp0bm5uQoqGVVRUrFHBuru782tCQC+hW0j/BkpCPlGXIY9wfn5+5hQN5T3dS+cz5btg0DNTU1NFpkBra2tZaWkpy8jIYOPj4ywmJmY7RcMGBwdZZmYmKykpoa7ELPGozeLiYrIetKenZ5OhuLg4ft3T05OfJyQk8LDp6el/LRq6JiUlheb8vXgzY7m5uYJBD0LeeDnRApQ8sKloqK3GxsZuWEPrYzhiWHFx8ZZFMzo6yiIjIw1DTTZ+qNXqMRcXF0GgVpADKltDoCisDcbj4+NZfn7+ll5D9fKeprYbFRXFwsPDWVVV1SodPwEBAVueEtnZ2QNIhTkhoKRrAxhb5WhRURFzcnIyGmIcX9rq6uoPq6urAzqdrresrGwIHtMZux62OOT6AD4FgZ5bXl5+DMhv6P16j/KhCwoK2vHO5O3t/SsxMfG7ENAjkAOUBUkMvMVDiiFKDSGge6Gj0CUoGmffpvwSEfg7dUch/0LtkWcdvr6+a2JDBgYG6tDt6DXPTgjoKegOVAo1QVKR1AgVQ8GQrRDQA+uw9ushuSWSyLYdQRr7K/JP6DcTwr8i7Fj8pwAAAABJRU5ErkJggg==\" alt=\"Configuration\" /></span>
    <strong>E-Mails</strong>
    <span class=\"count\">
        <span>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messageCount"), "html", null, true);
        echo "</span>
    </span>
</span>
";
    }

    // line 41
    public function block_panel($context, array $blocks = array())
    {
        // line 42
        echo "    <h2>Messages</h2>

    <table>
        <thead>
            <tr>
                <th scope=\"col\">Mailer</th>
                <th scope=\"col\">Messages</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "mailers"));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 53
            echo "                <tr>
                    <th>";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "isDefaultMailer", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method")) ? (" (default mailer)") : (""));
            echo "</th>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messageCount", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
            echo " ";
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "isSpool", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method")) ? ("spooled") : ("sent"));
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>

    ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "mailers"));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 62
            echo "        <h3>Mailer <em>";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</em>";
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "isDefaultMailer", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method")) ? (" (default mailer)") : (""));
            echo "</h3>

        ";
            // line 64
            if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"))) {
                // line 65
                echo "            <p>
                <em>No message sent.</em>
            </p>
        ";
            } else {
                // line 69
                echo "            <ul class=\"alt\">
                ";
                // line 70
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 71
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), "html", null, true);
                    echo "\">
                        ";
                    // line 72
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "headers"), "all"));
                    foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                        // line 73
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : $this->getContext($context, "header")), "html", null, true);
                        echo "</pre>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                        <pre>";
                    // line 76
                    if (($this->getAttribute((isset($context["messagePart"]) ? $context["messagePart"] : null), "charset", array(), "any", true, true) && $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "charset"))) {
                        // line 77
                        echo twig_escape_filter($this->env, twig_convert_encoding(twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "body"), "html", $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "charset")), "UTF-8", $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "charset")), "html", null, true);
                    } else {
                        // line 79
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "body"), "html");
                    }
                    // line 81
                    echo "</pre>
                        ";
                    // line 82
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "children"));
                    foreach ($context['_seq'] as $context["_key"] => $context["messagePart"]) {
                        if ((($this->getAttribute((isset($context["messagePart"]) ? $context["messagePart"] : $this->getContext($context, "messagePart")), "contentType") == "text/plain") || ($this->getAttribute((isset($context["messagePart"]) ? $context["messagePart"] : $this->getContext($context, "messagePart")), "contentType") == "text/html"))) {
                            // line 83
                            echo "                            <h4>Alternative part</h4>
                            <pre>";
                            // line 85
                            if ($this->getAttribute((isset($context["messagePart"]) ? $context["messagePart"] : $this->getContext($context, "messagePart")), "charset")) {
                                // line 86
                                echo twig_escape_filter($this->env, twig_convert_encoding(twig_escape_filter($this->env, $this->getAttribute((isset($context["messagePart"]) ? $context["messagePart"] : $this->getContext($context, "messagePart")), "body"), "html", $this->getAttribute((isset($context["messagePart"]) ? $context["messagePart"] : $this->getContext($context, "messagePart")), "charset")), "UTF-8", $this->getAttribute((isset($context["messagePart"]) ? $context["messagePart"] : $this->getContext($context, "messagePart")), "charset")), "html", null, true);
                            } else {
                                // line 88
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["messagePart"]) ? $context["messagePart"] : $this->getContext($context, "messagePart")), "body"), "html");
                            }
                            // line 90
                            echo "</pre>
                        ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagePart'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "                    </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "            </ul>
        ";
            }
            // line 96
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Swiftmailer/Collector/swiftmailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 96,  257 => 92,  246 => 88,  243 => 86,  233 => 82,  227 => 79,  224 => 77,  220 => 75,  207 => 72,  182 => 69,  174 => 64,  138 => 53,  90 => 25,  74 => 18,  190 => 70,  185 => 70,  176 => 65,  157 => 58,  152 => 51,  136 => 42,  128 => 38,  125 => 37,  115 => 35,  106 => 32,  60 => 12,  49 => 13,  47 => 10,  34 => 4,  31 => 3,  832 => 488,  829 => 487,  818 => 485,  814 => 484,  810 => 482,  797 => 481,  771 => 476,  768 => 475,  749 => 473,  732 => 472,  728 => 470,  724 => 469,  720 => 468,  716 => 467,  712 => 466,  708 => 465,  704 => 464,  701 => 463,  699 => 462,  682 => 461,  671 => 460,  656 => 455,  651 => 453,  647 => 452,  644 => 451,  642 => 450,  628 => 449,  591 => 414,  573 => 411,  556 => 410,  553 => 409,  551 => 408,  546 => 406,  541 => 404,  214 => 90,  208 => 87,  202 => 71,  199 => 85,  196 => 73,  191 => 83,  189 => 82,  162 => 61,  124 => 45,  113 => 41,  110 => 40,  88 => 27,  81 => 22,  373 => 126,  367 => 123,  363 => 121,  342 => 116,  325 => 110,  322 => 109,  319 => 108,  316 => 107,  313 => 106,  307 => 104,  298 => 101,  288 => 98,  275 => 96,  253 => 92,  245 => 85,  241 => 85,  234 => 81,  222 => 76,  212 => 82,  195 => 74,  146 => 55,  141 => 54,  135 => 52,  132 => 51,  129 => 40,  98 => 28,  71 => 15,  68 => 14,  65 => 13,  59 => 11,  54 => 10,  51 => 9,  37 => 5,  170 => 63,  163 => 60,  149 => 61,  143 => 54,  127 => 39,  120 => 47,  96 => 34,  92 => 33,  89 => 24,  52 => 14,  94 => 27,  91 => 32,  66 => 15,  392 => 160,  389 => 159,  381 => 157,  374 => 156,  370 => 155,  366 => 153,  361 => 120,  356 => 149,  348 => 147,  346 => 146,  343 => 145,  337 => 114,  334 => 113,  331 => 112,  329 => 138,  324 => 135,  312 => 129,  310 => 105,  305 => 125,  299 => 121,  296 => 120,  293 => 100,  291 => 118,  286 => 115,  284 => 97,  279 => 111,  277 => 110,  272 => 94,  268 => 94,  262 => 103,  258 => 101,  256 => 100,  238 => 83,  235 => 88,  230 => 81,  225 => 93,  213 => 77,  211 => 73,  192 => 71,  187 => 66,  178 => 58,  173 => 75,  169 => 54,  166 => 62,  158 => 47,  155 => 52,  147 => 49,  130 => 50,  112 => 34,  97 => 28,  85 => 22,  79 => 17,  64 => 18,  42 => 6,  39 => 5,  82 => 18,  75 => 13,  72 => 12,  57 => 12,  50 => 9,  45 => 7,  43 => 11,  40 => 10,  25 => 1,  167 => 60,  160 => 59,  148 => 46,  142 => 57,  134 => 52,  123 => 31,  118 => 43,  114 => 32,  111 => 36,  109 => 33,  104 => 33,  101 => 32,  95 => 27,  86 => 25,  83 => 21,  77 => 14,  69 => 11,  63 => 13,  58 => 6,  55 => 13,  53 => 10,  44 => 6,  35 => 4,  32 => 6,  465 => 202,  456 => 199,  452 => 198,  449 => 197,  444 => 196,  442 => 195,  434 => 189,  432 => 188,  425 => 184,  418 => 180,  411 => 176,  404 => 172,  397 => 168,  390 => 164,  383 => 158,  376 => 156,  364 => 152,  358 => 150,  354 => 119,  351 => 118,  345 => 137,  341 => 135,  338 => 134,  332 => 131,  328 => 111,  326 => 128,  323 => 127,  318 => 131,  315 => 130,  306 => 122,  303 => 121,  301 => 102,  292 => 113,  289 => 112,  281 => 106,  278 => 105,  273 => 95,  270 => 136,  265 => 93,  259 => 96,  251 => 97,  249 => 90,  244 => 93,  236 => 87,  232 => 87,  229 => 84,  223 => 81,  219 => 79,  216 => 78,  210 => 75,  206 => 78,  203 => 72,  200 => 76,  197 => 75,  194 => 67,  188 => 66,  184 => 80,  181 => 64,  179 => 64,  175 => 57,  171 => 62,  168 => 60,  165 => 59,  159 => 58,  156 => 56,  153 => 51,  150 => 50,  144 => 48,  137 => 39,  133 => 41,  126 => 41,  122 => 42,  119 => 41,  116 => 42,  108 => 30,  105 => 32,  102 => 31,  99 => 33,  93 => 20,  87 => 24,  84 => 25,  76 => 19,  73 => 21,  70 => 17,  67 => 15,  62 => 14,  56 => 5,  48 => 8,  46 => 9,  41 => 7,  38 => 6,  36 => 4,  33 => 3,);
    }
}
