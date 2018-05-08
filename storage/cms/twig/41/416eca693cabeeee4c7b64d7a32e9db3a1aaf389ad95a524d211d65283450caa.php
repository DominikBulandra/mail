<?php

/* C:\xampp\htdocs\devmail/themes/zanor-zanor-mdb-loaded/pages/mail.htm */
class __TwigTemplate_e06460a5616713cb1aa9348ead01322d976e0b023d68998eb5b3fa2395bfcfaa extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("mailing"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 3
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 4
        echo "
<div class=\"modal-content\" style=\"border-radius:5px;
            background-color:white;
            padding:40px;
            margin: 10%;
            margin-left: 25%;
            min-height: 500px;
            max-width: 1000px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
           \">

    <div class=\"modal-body\">


      ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 18
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 19
            echo "      <div id=\"flash\" class=\"alert alert-success\" role=\"alert\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</div>
      ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 21
        echo "

        <form 
        onsubmit=\"getData()\" 
        data-request=\"onSend\"
        data-request-loading=\"#load\"
        data-request-flash=\"#flash\"
        >
                <label>Treść wiadomości</label>

                <div id=\"toolbar\">
                            <span class=\"ql-formats\">
                                <select class=\"ql-font\"></select>
                                <select class=\"ql-size\"></select>
                                </span>
                    <span class=\"ql-formats\">
                                <button class=\"ql-bold\"></button>
                                <button class=\"ql-italic\"></button>
                                <button class=\"ql-underline\"></button>
                                <button class=\"ql-strike\"></button>
                            </span>
                    <span class=\"ql-formats\">
                                <select class=\"ql-color\"></select>
                                <select class=\"ql-background\"></select>
                                </span>
                    <span class=\"ql-formats\">
                                <button class=\"ql-script\" value=\"sub\"></button>
                                <button class=\"ql-script\" value=\"super\"></button>
                            </span>
                    <span class=\"ql-formats\">
                                <button class=\"ql-header\" value=\"1\"></button>
                                <button class=\"ql-header\" value=\"2\"></button>
                                <button class=\"ql-blockquote\"></button>
                                <button class=\"ql-code-block\"></button>
                            </span>
                    <span class=\"ql-formats\">
                                <button class=\"ql-list\" value=\"ordered\"></button>
                                <button class=\"ql-list\" value=\"bullet\"></button>
                                <button class=\"ql-indent\" value=\"-1\"></button>
                                <button class=\"ql-indent\" value=\"+1\"></button>
                            </span>
                    <span class=\"ql-formats\">
                                <button class=\"ql-direction\" value=\"rtl\"></button>
                                <select class=\"ql-align\"></select>
                            </span>
                    <span class=\"ql-formats\">
                                <button class=\"ql-link\"></button>
                                <button class=\"ql-image\"></button>
                                <button class=\"ql-video\"></button>
                                <button class=\"ql-formula\"></button>
                            </span>
                    <span class=\"ql-formats\">
                                <button class=\"ql-clean\"></button>
                            </span>
                </div>
            <input name=\"about\" type=\"hidden\">
            <input name=\"about2\">
            <div id=\"editor-container\"></div>
            <button class=\"btn btn-primary\" type=\"submit\">Wyślij mailing</button>
          
        </form>
      </div>
      <div class=\"animated bounceIn\" id=\"load\" style=\"display:none\">
        <img src=\"";
        // line 84
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/icon_loading_email_512px.gif");
        echo "\" alt=\"loading...\" style=\"width: 200px;height: 200px; margin-left: 35%\">
      </div>
</div>
<form 
data-request=\"onTest\"
data-request-flash=\"#flash\"
>
<input name=\"email\">
<button class=\"btn btn-primary\" type=\"submit\">Testuj</button>
</form>
<p>Wiadomość </p>
<div id=\"licznik\">
  test licznika
</div>
<p> z 10</p>

<DiV>
    <H1>Ilość adresów na które nie został wysłany mail</H1>
    <P>";
        // line 102
        echo twig_escape_filter($this->env, ($context["notsend"] ?? null), "html", null, true);
        echo "</P>
</DiV>

<script>
var quill = new Quill('#editor-container', {
  modules: {
    toolbar: '#toolbar',
  },
  placeholder: 'Utwórz wiadomość',  
  theme: 'snow'
});


var form = document.querySelector('form');
function getData() {
  // Populate hidden form on submit
  var about = document.querySelector('input[name=about]');
  //var html = about.value = JSON.stringify(quill.getContents());
  

  //Zamiana delta -> html 
  var justHtml = quill.root.innerHTML;
  //Przypisanie do input '#about' wartości z edytora quill 
  var html = about.value = justHtml;

  //Odczyt wartości z formy
  console.log(justHtml ,\$(form).serialize(), \$(form).serializeArray());


  // No back end to actually submit to!
  alert('Open the console to see the submit data!')
  return false;
};
setInterval(function () {
       
        document.getElementById('licznik').innerHTML= '";
        // line 137
        echo twig_escape_filter($this->env, ($context["size3"] ?? null), "html", null, true);
        echo "';
        
       
    },3000);



</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\devmail/themes/zanor-zanor-mdb-loaded/pages/mail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 137,  143 => 102,  122 => 84,  57 => 21,  51 => 19,  49 => 18,  33 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'mailing' %}
{% framework %}
{% framework extras %}

<div class=\"modal-content\" style=\"border-radius:5px;
            background-color:white;
            padding:40px;
            margin: 10%;
            margin-left: 25%;
            min-height: 500px;
            max-width: 1000px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
           \">

    <div class=\"modal-body\">


      {% flash success %}
      <div id=\"flash\" class=\"alert alert-success\" role=\"alert\">{{ message }}</div>
      {% endflash %}


        <form 
        onsubmit=\"getData()\" 
        data-request=\"onSend\"
        data-request-loading=\"#load\"
        data-request-flash=\"#flash\"
        >
                <label>Treść wiadomości</label>

                <div id=\"toolbar\">
                            <span class=\"ql-formats\">
                                <select class=\"ql-font\"></select>
                                <select class=\"ql-size\"></select>
                                </span>
                    <span class=\"ql-formats\">
                                <button class=\"ql-bold\"></button>
                                <button class=\"ql-italic\"></button>
                                <button class=\"ql-underline\"></button>
                                <button class=\"ql-strike\"></button>
                            </span>
                    <span class=\"ql-formats\">
                                <select class=\"ql-color\"></select>
                                <select class=\"ql-background\"></select>
                                </span>
                    <span class=\"ql-formats\">
                                <button class=\"ql-script\" value=\"sub\"></button>
                                <button class=\"ql-script\" value=\"super\"></button>
                            </span>
                    <span class=\"ql-formats\">
                                <button class=\"ql-header\" value=\"1\"></button>
                                <button class=\"ql-header\" value=\"2\"></button>
                                <button class=\"ql-blockquote\"></button>
                                <button class=\"ql-code-block\"></button>
                            </span>
                    <span class=\"ql-formats\">
                                <button class=\"ql-list\" value=\"ordered\"></button>
                                <button class=\"ql-list\" value=\"bullet\"></button>
                                <button class=\"ql-indent\" value=\"-1\"></button>
                                <button class=\"ql-indent\" value=\"+1\"></button>
                            </span>
                    <span class=\"ql-formats\">
                                <button class=\"ql-direction\" value=\"rtl\"></button>
                                <select class=\"ql-align\"></select>
                            </span>
                    <span class=\"ql-formats\">
                                <button class=\"ql-link\"></button>
                                <button class=\"ql-image\"></button>
                                <button class=\"ql-video\"></button>
                                <button class=\"ql-formula\"></button>
                            </span>
                    <span class=\"ql-formats\">
                                <button class=\"ql-clean\"></button>
                            </span>
                </div>
            <input name=\"about\" type=\"hidden\">
            <input name=\"about2\">
            <div id=\"editor-container\"></div>
            <button class=\"btn btn-primary\" type=\"submit\">Wyślij mailing</button>
          
        </form>
      </div>
      <div class=\"animated bounceIn\" id=\"load\" style=\"display:none\">
        <img src=\"{{ 'assets/images/icon_loading_email_512px.gif' | theme }}\" alt=\"loading...\" style=\"width: 200px;height: 200px; margin-left: 35%\">
      </div>
</div>
<form 
data-request=\"onTest\"
data-request-flash=\"#flash\"
>
<input name=\"email\">
<button class=\"btn btn-primary\" type=\"submit\">Testuj</button>
</form>
<p>Wiadomość </p>
<div id=\"licznik\">
  test licznika
</div>
<p> z 10</p>

<DiV>
    <H1>Ilość adresów na które nie został wysłany mail</H1>
    <P>{{notsend}}</P>
</DiV>

<script>
var quill = new Quill('#editor-container', {
  modules: {
    toolbar: '#toolbar',
  },
  placeholder: 'Utwórz wiadomość',  
  theme: 'snow'
});


var form = document.querySelector('form');
function getData() {
  // Populate hidden form on submit
  var about = document.querySelector('input[name=about]');
  //var html = about.value = JSON.stringify(quill.getContents());
  

  //Zamiana delta -> html 
  var justHtml = quill.root.innerHTML;
  //Przypisanie do input '#about' wartości z edytora quill 
  var html = about.value = justHtml;

  //Odczyt wartości z formy
  console.log(justHtml ,\$(form).serialize(), \$(form).serializeArray());


  // No back end to actually submit to!
  alert('Open the console to see the submit data!')
  return false;
};
setInterval(function () {
       
        document.getElementById('licznik').innerHTML= '{{size3}}';
        
       
    },3000);



</script>", "C:\\xampp\\htdocs\\devmail/themes/zanor-zanor-mdb-loaded/pages/mail.htm", "");
    }
}
