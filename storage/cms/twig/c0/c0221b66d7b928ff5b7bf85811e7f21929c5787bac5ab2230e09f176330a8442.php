<?php

/* C:\xampp\htdocs\devmail/themes/zanor-zanor-mdb-loaded/partials/site/subnav.htm */
class __TwigTemplate_198ff4be1ebca22d2d10f0f1ddb78c14ab556c4c04f2680ea4cf5355eda8c649 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["parentOrSelf"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "parent", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "parent", array())) : (($context["page"] ?? null)));
        // line 4
        $context["childPages"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["parentOrSelf"] ?? null), "children", array());
        // line 5
        echo "
<div class=\"row\">
    <div class=\"col-sm-4\">
        <h3 class=\"head-link ";
        // line 8
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "url", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["parentOrSelf"] ?? null), "url", array()))) ? ("active") : (""));
        echo "\">
            ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["parentOrSelf"] ?? null), "title", array()), "html", null, true);
        echo "
        </h3>
    </div>
    <div class=\"col-sm-8\">
        <ul class=\"nav nav-pills pull-right\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["childPage"]) {
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["childPage"], "navigation_hidden", array())) {
                // line 15
                echo "                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "url", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["childPage"], "url", array()))) ? ("active") : (""));
                echo "\">
                    <a href=\"";
                // line 16
                echo $this->env->getExtension('System\Twig\Extension')->appFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["childPage"], "url", array()));
                echo "\">
                        ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["childPage"], "title", array()), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\devmail/themes/zanor-zanor-mdb-loaded/partials/site/subnav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  57 => 17,  53 => 16,  48 => 15,  43 => 14,  35 => 9,  31 => 8,  26 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Renders a menu with any child static pages #}

{% set parentOrSelf = page.parent ?: page %}
{% set childPages = parentOrSelf.children %}

<div class=\"row\">
    <div class=\"col-sm-4\">
        <h3 class=\"head-link {{ page.url == parentOrSelf.url ? 'active' }}\">
            {{ parentOrSelf.title }}
        </h3>
    </div>
    <div class=\"col-sm-8\">
        <ul class=\"nav nav-pills pull-right\">
            {% for childPage in childPages if not childPage.navigation_hidden %}
                <li class=\"{{ page.url == childPage.url ? 'active' }}\">
                    <a href=\"{{ childPage.url|app }}\">
                        {{ childPage.title }}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </div>
</div>", "C:\\xampp\\htdocs\\devmail/themes/zanor-zanor-mdb-loaded/partials/site/subnav.htm", "");
    }
}
