<?php

/* C:\xampp\htdocs\devmail/themes/zanor-zanor-mdb-loaded/content/static-pages/content-pages.htm */
class __TwigTemplate_1fd3fb79b51e79f18edca70543fcf03acd645bba552c2363c050a4a432397f28 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('extraContent'        );
        // line 2
        echo "<p>When editing this page you should notice a second tab called <strong>Extra content</strong>, that's where this content is sourced from. It can be translated just like any other content!​</p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\devmail/themes/zanor-zanor-mdb-loaded/content/static-pages/content-pages.htm";
    }

    public function getDebugInfo()
    {
        return array (  24 => 1,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put extraContent %}
<p>When editing this page you should notice a second tab called <strong>Extra content</strong>, that's where this content is sourced from. It can be translated just like any other content!​</p>
{% endput %}", "C:\\xampp\\htdocs\\devmail/themes/zanor-zanor-mdb-loaded/content/static-pages/content-pages.htm", "");
    }
}
