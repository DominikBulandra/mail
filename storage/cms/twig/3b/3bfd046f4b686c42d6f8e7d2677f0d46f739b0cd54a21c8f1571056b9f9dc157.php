<?php

/* C:\xampp\htdocs\devmail/themes/zanor-zanor-mdb-loaded/partials/snippets/theme-image.htm */
class __TwigTemplate_9ffb93230d145e0a87b4ae38cd68aca81cc69a5857a09f044205fc072bec72fc extends Twig_Template
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
        return "C:\\xampp\\htdocs\\devmail/themes/zanor-zanor-mdb-loaded/partials/snippets/theme-image.htm";
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
        return new Twig_Source("<img src=\"{{ ('assets/images/'~src)|theme }}\" alt=\"\" class=\"img-theme img-responsive\" />", "C:\\xampp\\htdocs\\devmail/themes/zanor-zanor-mdb-loaded/partials/snippets/theme-image.htm", "");
    }
}
