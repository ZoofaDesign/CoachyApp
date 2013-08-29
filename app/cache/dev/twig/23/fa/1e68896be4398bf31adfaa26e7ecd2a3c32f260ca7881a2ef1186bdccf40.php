<?php

/* CoachyAppBundle:Staff:index.html.twig */
class __TwigTemplate_23fa1e68896be4398bf31adfaa26e7ecd2a3c32f260ca7881a2ef1186bdccf40 extends Twig_Template
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
        $context["page_title"] = "Staff";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t<h2>Staff</h2>

";
    }

    public function getTemplateName()
    {
        return "CoachyAppBundle:Staff:index.html.twig";
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
