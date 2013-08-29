<?php

/* ::base.html.twig */
class __TwigTemplate_e70e92a0e22b168c3d7f6edeff1e3b6a0e6d4e48510e6e6e2d37e2345f61a307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Coachy";
        // line 5
        if (array_key_exists("page_title", $context)) {
            echo " &bull; ";
            echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : $this->getContext($context, "page_title")), "html", null, true);
            echo " ";
        }
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <ul>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("coachy_app_dashboard");
        echo "\">Dashboard</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("coachy_app_teams");
        echo "\">Ploegen</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("coachy_app_players");
        echo "\">Spelers</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("coachy_app_staff");
        echo "\">Staff</a></li>
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("coachy_app_calendar");
        echo "\">Kalender</a></li>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("coachy_app_infirmary");
        echo "\">Ziekenboeg</a></li>
            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("coachy_app_reports");
        echo "\">Verslagen</a></li>
        </ul>

        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  95 => 21,  90 => 6,  85 => 23,  82 => 22,  80 => 21,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  41 => 7,  39 => 6,  31 => 5,  25 => 1,);
    }
}
