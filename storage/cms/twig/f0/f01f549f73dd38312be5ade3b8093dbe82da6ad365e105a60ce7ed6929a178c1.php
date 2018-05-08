<?php

/* C:\xampp\htdocs\devmail/themes/zanor-zanor-mdb-loaded/partials/site/scrollingNavbar.htm */
class __TwigTemplate_fb3f85110892938b57203819f68ac3e01a5bf3ac0b0a87568c755bb2a86685c3 extends Twig_Template
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
        echo "<!--Navbar-->
<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar\">

    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>

    <!-- Collapse button -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

    <!-- Collapsible content -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        ";
        // line 13
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 14
            echo "        ";
            $context["items"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array());
            // line 15
            echo "        <!-- Links -->
        <ul class=\"navbar-nav mr-auto\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                echo "                <li class=\"nav-item ";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isActive", array()) || twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isChildActive", array()))) ? ("active") : (""));
                echo "
                    ";
                // line 19
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) ? ("dropdown btn-group") : (""));
                echo "\"
                >
                    <a class=\"nav-link ";
                // line 21
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    echo "'dropdown-toggle' ";
                }
                echo "\"
                            ";
                // line 22
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    echo " id=\"dropdownMenu";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), array(" " => "-")), "html", null, true);
                    echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"";
                }
                // line 23
                echo "                       href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                echo "\"
                    >
                        ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
                echo "

                        ";
                // line 27
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    echo "<span class=\"sr-only\">(current)</span>";
                }
                // line 28
                echo "                    </a>

                    ";
                // line 30
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    // line 31
                    echo "                        <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), array(" " => "-")), "html", null, true);
                    echo "\">
                            ";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 33
                        echo "                                <a class=\"dropdown-item\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "url", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "title", array()), "html", null, true);
                        echo "</a>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "                        </div>
                    ";
                }
                // line 37
                echo "                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        ";
        }
        // line 40
        echo "        </ul>
        <!-- Links -->

        <!-- Search form -->
        <form class=\"form-inline\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\devmail/themes/zanor-zanor-mdb-loaded/partials/site/scrollingNavbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 40,  120 => 39,  113 => 37,  109 => 35,  98 => 33,  94 => 32,  89 => 31,  87 => 30,  83 => 28,  79 => 27,  74 => 25,  68 => 23,  62 => 22,  56 => 21,  51 => 19,  46 => 18,  42 => 17,  38 => 15,  35 => 14,  33 => 13,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--Navbar-->
<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar\">

    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>

    <!-- Collapse button -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

    <!-- Collapsible content -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        {% if staticMenu.menuItems %}
        {% set items = staticMenu.menuItems %}
        <!-- Links -->
        <ul class=\"navbar-nav mr-auto\">
            {% for item in items %}
                <li class=\"nav-item {{ item.isActive or item.isChildActive ? 'active' : '' }}
                    {{ item.items ? 'dropdown btn-group' : '' }}\"
                >
                    <a class=\"nav-link {% if item.items %}'dropdown-toggle' {% endif %}\"
                            {% if item.items %} id=\"dropdownMenu{{ item.title|replace({' ':'-'}) }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"{% endif %}
                       href=\"{{ item.url }}\"
                    >
                        {{ item.title }}

                        {% if item.items %}<span class=\"sr-only\">(current)</span>{% endif %}
                    </a>

                    {% if item.items %}
                        <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu{{ item.title|replace({' ':'-'}) }}\">
                            {% for child in item.items %}
                                <a class=\"dropdown-item\" href=\"{{ child.url }}\">{{ child.title }}</a>
                            {% endfor %}
                        </div>
                    {% endif %}
                </li>
            {% endfor %}
        {% endif %}
        </ul>
        <!-- Links -->

        <!-- Search form -->
        <form class=\"form-inline\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->", "C:\\xampp\\htdocs\\devmail/themes/zanor-zanor-mdb-loaded/partials/site/scrollingNavbar.htm", "");
    }
}
