<?php

/* C:\xampp\htdocs\devmail/themes/rainlab-bonjour/pages/import.htm */
class __TwigTemplate_012f095fd6ae3d5020b1f0268cf6c8f87934296d33b00606ed2a2ac3db6dbe85 extends Twig_Template
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
        return "C:\\xampp\\htdocs\\devmail/themes/rainlab-bonjour/pages/import.htm";
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
        return new Twig_Source("{% component 'import' %}", "C:\\xampp\\htdocs\\devmail/themes/rainlab-bonjour/pages/import.htm", "");
    }
}
