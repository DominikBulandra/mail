<?php

/* C:\xampp\htdocs\devmail/themes/rainlab-bonjour/partials/snippets/theme-image.htm */
class __TwigTemplate_194e069293ca3f8495ab7ee5044452fe04d26b97948a64ca07c3c9cd20df1975 extends Twig_Template
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
        // line 1
        echo "<img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(("assets/images/" . ($context["src"] ?? null)));
        echo "\" alt=\"\" class=\"img-theme img-responsive\" />";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\devmail/themes/rainlab-bonjour/partials/snippets/theme-image.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<img src=\"{{ ('assets/images/'~src)|theme }}\" alt=\"\" class=\"img-theme img-responsive\" />", "C:\\xampp\\htdocs\\devmail/themes/rainlab-bonjour/partials/snippets/theme-image.htm", "");
    }
}
