<?php

/* C:\xampp2\htdocs\devmail/themes/rainlab-bonjour/pages/import.htm */
class __TwigTemplate_b774496809cdd56e0ab93ed233bd12aa9b01b0596d625bf84d53b290d692d927 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("import"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\devmail/themes/rainlab-bonjour/pages/import.htm";
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
        return new Twig_Source("{% component 'import' %}", "C:\\xampp2\\htdocs\\devmail/themes/rainlab-bonjour/pages/import.htm", "");
    }
}
