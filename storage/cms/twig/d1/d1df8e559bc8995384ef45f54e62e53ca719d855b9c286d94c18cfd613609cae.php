<?php

/* C:\xampp\htdocs\devmail/themes/zanor-zanor-mdb-loaded/layouts/content.htm */
class __TwigTemplate_ab885bfdb758e6ead313272dc4c2d8fd856c2d4db81a6d92e5f00475cb576638 extends Twig_Template
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
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>
        ";
        // line 7
        $context["hasChildren"] = twig_get_attribute($this->env, $this->getSourceContext(), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticPage"] ?? null), "parent", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticPage"] ?? null), "parent", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticPage"] ?? null), "page", array()))), "children", array());
        // line 8
        echo "
        <!-- Header -->
        <header id=\"layout-header\">
        </header>

        <!-- Nav -->
        ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "
        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 18
        if (($context["hasChildren"] ?? null)) {
            // line 19
            echo "                <div id=\"layout-subnav\">
                    <div class=\"container\">
                        ";
            // line 21
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['page'] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticPage"] ?? null), "page", array())            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/subnav"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "                    </div>
                </div>
            ";
        }
        // line 25
        echo "            <div class=\"container\">

                <div class=\"static-content-page\">
                    <div class=\"title-area\">
                        <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h2>
                    </div>

                    ";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 33
        echo "                </div>
                ";
        // line 34
        if ($this->env->getExtension('Cms\Twig\Extension')->placeholderFunction("extraContent")) {
            // line 35
            echo "                    <div class=\"static-content-extra\">
                        ";
            // line 36
            $context['__placeholder_extraContent_default_contents'] = null;            echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('extraContent', $context['__placeholder_extraContent_default_contents']);
            unset($context['__placeholder_extraContent_default_contents']);            // line 37
            echo "                    </div>
                ";
        }
        // line 39
        echo "            </div>
        </section>

        <!-- Help Popups -->
        ";
        // line 43
        $context['__placeholder_help_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('help', $context['__placeholder_help_default_contents']);
        unset($context['__placeholder_help_default_contents']);        // line 44
        echo "
        <!-- Scripts -->
        ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\devmail/themes/zanor-zanor-mdb-loaded/layouts/content.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 47,  107 => 46,  103 => 44,  101 => 43,  95 => 39,  91 => 37,  89 => 36,  86 => 35,  84 => 34,  81 => 33,  79 => 32,  73 => 29,  67 => 25,  62 => 22,  57 => 21,  53 => 19,  51 => 18,  46 => 15,  42 => 14,  34 => 8,  32 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'site/meta' %}
    </head>
    <body>
        {% set hasChildren = (staticPage.parent ?: staticPage.page).children %}

        <!-- Header -->
        <header id=\"layout-header\">
        </header>

        <!-- Nav -->
        {% partial 'site/nav' %}

        <!-- Content -->
        <section id=\"layout-content\">
            {% if hasChildren %}
                <div id=\"layout-subnav\">
                    <div class=\"container\">
                        {% partial 'site/subnav' page=staticPage.page %}
                    </div>
                </div>
            {% endif %}
            <div class=\"container\">

                <div class=\"static-content-page\">
                    <div class=\"title-area\">
                        <h2>{{ this.page.title }}</h2>
                    </div>

                    {% page %}
                </div>
                {% if placeholder('extraContent') %}
                    <div class=\"static-content-extra\">
                        {% placeholder extraContent title=\"Extra content\" %}
                    </div>
                {% endif %}
            </div>
        </section>

        <!-- Help Popups -->
        {% placeholder help ignore=true %}

        <!-- Scripts -->
        {% partial 'site/scripts' %}

    </body>
</html>", "C:\\xampp\\htdocs\\devmail/themes/zanor-zanor-mdb-loaded/layouts/content.htm", "");
    }
}
