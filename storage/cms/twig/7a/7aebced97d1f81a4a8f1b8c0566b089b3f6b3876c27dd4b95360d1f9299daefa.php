<?php

/* C:\xampp\htdocs\devmail/themes/rainlab-bonjour/pages/login.htm */
class __TwigTemplate_cfef5a92a524bc7fee2f1d4d3323f621eb959431cbc5a7325df492f1a3a1c828 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\devmail/themes/rainlab-bonjour/pages/login.htm";
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
        return new Twig_Source("{% component 'account' %}", "C:\\xampp\\htdocs\\devmail/themes/rainlab-bonjour/pages/login.htm", "");
    }
}
