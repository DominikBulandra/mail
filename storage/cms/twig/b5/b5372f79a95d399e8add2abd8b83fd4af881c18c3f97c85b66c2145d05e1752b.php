<?php

/* C:\xampp\htdocs\devmail/plugins/dev/mailing/components/import/default.htm */
class __TwigTemplate_a63601f5b607fb09d9d4fb42abcb9590eed99a6722b6d3765e1da92768e22d46 extends Twig_Template
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
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 2
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 3
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("files" => true, "request" => "onSave")));
        echo "
   <input type=\"file\" name=\"file\" />
   <button type=\"submit\" >Send to database</button>
";
        // line 6
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("request" => "onDelete")));
        echo "

<button type=\"submit\" >Delete all</button>
";
        // line 10
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "

<DiV>
    <H1>Ilość rekordów</H1>
    <P>";
        // line 14
        echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
        echo "</P>
</DiV>
<DiV>
    <H1>Ilość adresów na które nie został wysłany mail</H1>
    <P>";
        // line 18
        echo twig_escape_filter($this->env, ($context["size2"] ?? null), "html", null, true);
        echo "</P>
</DiV>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\devmail/plugins/dev/mailing/components/import/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  52 => 14,  45 => 10,  39 => 7,  35 => 6,  29 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% framework %}
{% framework extras %}
{{ form_open({ files: true ,request: 'onSave'}) }}
   <input type=\"file\" name=\"file\" />
   <button type=\"submit\" >Send to database</button>
{{ form_close() }}
{{ form_open({request: 'onDelete'}) }}

<button type=\"submit\" >Delete all</button>
{{ form_close() }}

<DiV>
    <H1>Ilość rekordów</H1>
    <P>{{size}}</P>
</DiV>
<DiV>
    <H1>Ilość adresów na które nie został wysłany mail</H1>
    <P>{{size2}}</P>
</DiV>
", "C:\\xampp\\htdocs\\devmail/plugins/dev/mailing/components/import/default.htm", "");
    }
}
