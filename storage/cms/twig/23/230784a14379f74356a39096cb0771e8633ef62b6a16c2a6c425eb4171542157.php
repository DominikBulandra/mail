<?php

/* C:\xampp\htdocs\devmail/themes/rainlab-bonjour/partials/site/meta.htm */
class __TwigTemplate_32051932ca08a8a5e69f5083a93f0b54405d71ba9750a3de04b435553f3731e2 extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
";
        // line 2
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array())) {
            // line 3
            echo "    <title>";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array())));
            echo " - ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("site.name"));
            echo "</title>
    <meta name=\"title\" content=\"";
            // line 4
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array())));
            echo "\">
";
        } else {
            // line 6
            echo "    <title>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
            echo " - ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("site.name"));
            echo "</title>
";
        }
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array())) {
            // line 9
            echo "    <meta name=\"description\" content=\"";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array())));
            echo "\">
";
        }
        // line 11
        echo "<meta name=\"author\" content=\"OctoberCMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"generator\" content=\"OctoberCMS\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\" />
";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "<!--
    <link href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/theme.css"));
        // line 19
        echo "\" rel=\"stylesheet\">
-->

<link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.min.css");
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/tether/tether.min.css");
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/bootstrap/css/bootstrap.min.css");
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/bootstrap/css/bootstrap-grid.min.css");
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/bootstrap/css/bootstrap-reboot.min.css");
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/socicon/css/styles.css");
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/theme/css/style.css");
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/mobirise/css/mbr-additional.css");
        echo "\" type=\"text/css\">";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\devmail/themes/rainlab-bonjour/partials/site/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  69 => 19,  67 => 17,  64 => 16,  61 => 15,  57 => 14,  52 => 11,  46 => 9,  44 => 8,  36 => 6,  31 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
{% if this.page.meta_title %}
    <title>{{ this.page.meta_title|_ }} - {{ 'site.name'|_ }}</title>
    <meta name=\"title\" content=\"{{ this.page.meta_title|_ }}\">
{% else %}
    <title>{{ this.page.title }} - {{ 'site.name'|_ }}</title>
{% endif %}
{% if this.page.meta_description %}
    <meta name=\"description\" content=\"{{ this.page.meta_description|_ }}\">
{% endif %}
<meta name=\"author\" content=\"OctoberCMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"generator\" content=\"OctoberCMS\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\" />
{% styles %}
<!--
    <link href=\"{{ [
    'assets/css/theme.css'
]|theme }}\" rel=\"stylesheet\">
-->

<link rel=\"stylesheet\" href=\"{{ 'assets/css/style.min.css'|theme }}\">
<link rel=\"stylesheet\" href=\"{{ 'assets/tether/tether.min.css'|theme }}\">
<link rel=\"stylesheet\" href=\"{{ 'assets/bootstrap/css/bootstrap.min.css'|theme }}\">
<link rel=\"stylesheet\" href=\"{{ 'assets/bootstrap/css/bootstrap-grid.min.css'|theme }}\">
<link rel=\"stylesheet\" href=\"{{ 'assets/bootstrap/css/bootstrap-reboot.min.css'|theme }}\">
<link rel=\"stylesheet\" href=\"{{ 'assets/socicon/css/styles.css'|theme }}\">
<link rel=\"stylesheet\" href=\"{{ 'assets/theme/css/style.css'|theme }}\">
<link rel=\"stylesheet\" href=\"{{ 'assets/mobirise/css/mbr-additional.css'|theme }}\" type=\"text/css\">", "C:\\xampp\\htdocs\\devmail/themes/rainlab-bonjour/partials/site/meta.htm", "");
    }
}
