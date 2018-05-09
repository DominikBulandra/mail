<?php

/* C:\xampp\htdocs\devmail/themes/rainlab-bonjour/layouts/default.htm */
class __TwigTemplate_64f924aad622709852ee09601521a96e3406af8a83fac9c459619f97b421e53e extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"generator\" content=\"Mobirise v4.7.2, mobirise.com\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\">

 

        <!-- Theme included stylesheets -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
        ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "      
      
    <body>
  
        <!-- Header
        <header id=\"layout-header\">
        </header>
        --> 
        <!-- Nav 
            ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "      
        -->
        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 29
        echo "        </section>

        <!-- Help Popups -->
        ";
        // line 32
        $context['__placeholder_help_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('help', $context['__placeholder_help_default_contents']);
        unset($context['__placeholder_help_default_contents']);        // line 33
        echo "
        <!-- Scripts -->
        ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "     
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\devmail/themes/rainlab-bonjour/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 36,  71 => 35,  67 => 33,  65 => 32,  60 => 29,  58 => 28,  49 => 24,  38 => 15,  34 => 14,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"generator\" content=\"Mobirise v4.7.2, mobirise.com\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\">

 

        <!-- Theme included stylesheets -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
        {% partial 'site/meta' %}
      
      
    <body>
  
        <!-- Header
        <header id=\"layout-header\">
        </header>
        --> 
        <!-- Nav 
            {% partial 'site/nav' %}      
        -->
        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Help Popups -->
        {% placeholder help %}

        <!-- Scripts -->
        {% partial 'site/scripts' %}
     
    </body>
</html>", "C:\\xampp\\htdocs\\devmail/themes/rainlab-bonjour/layouts/default.htm", "");
    }
}
