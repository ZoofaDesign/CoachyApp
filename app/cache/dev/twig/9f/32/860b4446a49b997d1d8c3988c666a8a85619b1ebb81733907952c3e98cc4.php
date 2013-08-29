<?php

/* CoachyAppBundle:Teams:index.html.twig */
class __TwigTemplate_9f32860b4446a49b997d1d8c3988c666a8a85619b1ebb81733907952c3e98cc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page_title"] = "Ploegen";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t<h2>Ploegen</h2>

";
    }

    public function getTemplateName()
    {
        return "CoachyAppBundle:Teams:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  33 => 5,  28 => 3,);
    }
}
