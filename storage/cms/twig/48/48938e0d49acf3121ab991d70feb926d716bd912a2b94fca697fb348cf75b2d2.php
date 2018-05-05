<?php

/* C:\xampp2\htdocs\devmail/themes/rainlab-bonjour/pages/home.htm */
class __TwigTemplate_b9c2c7f283c2a53c69054002af86d29f6a656ecdafcb48adccc6c1749fa2a8f2 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "<div class=\"container\">
    <div id=\"homeGreetings\" class=\"home-greetings\">
        <h1>Hello</h1>
        <h1>Bonjour</h1>
        <h1>Hola</h1>
        <h1>Привет</h1>
        <h1>Hallo</h1>
        <h1>Ahoj</h1>
        <h1>Χαίρετε</h1>
        <h1>Olá</h1>
        <h1>Ciao</h1>
        <h1>Salut</h1>
        <h1>こんにちは</h1>
        <h1>Sveiki</h1>
        <h1>Cześć</h1>
        <h1>Buna</h1>
        <h1>你好</h1>
        <h1>Hallå</h1>
        <h1>Merhaba</h1>
    </div>
</div>

";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 24
        echo "    <script>
        function swap() {
            \$('#homeGreetings h1:visible').each(function(){
                \$(this).fadeOut(500);
                if (\$(this).next().length > 0) \$(this).next().fadeIn(1000);
                else \$('#homeGreetings h1:first').fadeIn(1000)
            });
        }

        \$('#homeGreetings')
            .find('h1:not(:first)')
            .hide()
            .end()
            .addClass('is-loaded');

        setTimeout(function() {
            setInterval(swap, 2000);
        }, 1000)

    </script>
";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\devmail/themes/rainlab-bonjour/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  48 => 24,  46 => 23,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}<div class=\"container\">
    <div id=\"homeGreetings\" class=\"home-greetings\">
        <h1>Hello</h1>
        <h1>Bonjour</h1>
        <h1>Hola</h1>
        <h1>Привет</h1>
        <h1>Hallo</h1>
        <h1>Ahoj</h1>
        <h1>Χαίρετε</h1>
        <h1>Olá</h1>
        <h1>Ciao</h1>
        <h1>Salut</h1>
        <h1>こんにちは</h1>
        <h1>Sveiki</h1>
        <h1>Cześć</h1>
        <h1>Buna</h1>
        <h1>你好</h1>
        <h1>Hallå</h1>
        <h1>Merhaba</h1>
    </div>
</div>

{% put scripts %}
    <script>
        function swap() {
            \$('#homeGreetings h1:visible').each(function(){
                \$(this).fadeOut(500);
                if (\$(this).next().length > 0) \$(this).next().fadeIn(1000);
                else \$('#homeGreetings h1:first').fadeIn(1000)
            });
        }

        \$('#homeGreetings')
            .find('h1:not(:first)')
            .hide()
            .end()
            .addClass('is-loaded');

        setTimeout(function() {
            setInterval(swap, 2000);
        }, 1000)

    </script>
{% endput %}", "C:\\xampp2\\htdocs\\devmail/themes/rainlab-bonjour/pages/home.htm", "");
    }
}
