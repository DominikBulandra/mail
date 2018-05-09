<?php

/* C:\xampp\htdocs\devmail/themes/rainlab-bonjour/pages/mail.htm */
class __TwigTemplate_0322bafb46dc52077891b9bdd6f50e5e4754edf97630eceabc7ffdcca0a12fb0 extends Twig_Template
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
        echo "
    <section class=\"mbr-section form3 cid-qRrv590Qvl\" id=\"form3-i\">
                                                  
      <div class=\"container\">
          <div class=\"row justify-content-center\">
              <div class=\"title col-12 col-lg-8\">
                  <h2 class=\"align-center pb-2 mbr-fonts-style display-2\">
                      Mailing PLUGSTUDIO</h2>
                  <h3 class=\"mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5\">
                      Wyślij mailing na adresy z bazy!</h3>
              </div>
             
          </div>
  
          
          <div class=\"row py-2 justify-content-center\">
              <div class=\"col-12 col-lg-6  col-md-8 \">
                  
                ";
        // line 20
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("files" => true, "request" => "onSave", "class" => "mbr-form")));
        echo "
                    <input type=\"hidden\" name=\"file\"  data-form-field=\"file\">
                      <div class=\"mbr-subscribe input-group\">
                          <input class=\"form-control\" type=\"file\" name=\"file\" placeholder=\"Import bazy csv\" required=\"\" id=\"email-form3-i\" style=\"border-radius: 100px !important; width: 50%\">
                          <input class=\"form-control\" name=\"column\" value=\"6\" data-form-field=\"column\" id=\"email-form3-i\" style=\"border-radius: 100px !important; width: 30px\"> 
                          <span class=\"input-group-btn\">
                            <button type=\"submit\" class=\"btn btn-primary display-4\">Import</button>
                         </span>
                      </div>
                ";
        // line 29
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "



                ";
        // line 33
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("request" => "onDelete", "class" => "mbr-form")));
        echo "

                <button style=\"margin-left: 28%; background-color: #F2DEDE\" class=\"btn btn-danger dislay-4\" type=\"submit\" >Usuń adresy z bazy</button>
                ";
        // line 36
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
                  <form style=\"padding-top: 15%\" data-request=\"onTest\" data-request-flash=\"#flash\" class=\"mbr-form\" action=\"\" method=\"post\"><input type=\"hidden\" name=\"email\" data-form-email=\"true\" value=\"iDS/96ZCXrfAx/BOvOApH+6Tar0n7tTxgElz+Yc7rDs4JbWEi6Acjzgg5fngaJM0cXHaaBuEhR1UpnqOacPwAmf/n56MnfaTJ5oa8s5QJvAA2EcEdIcVOuaLB6KXSmUt\" data-form-field=\"Email\">
                    <div class=\"mbr-subscribe input-group\">
                        <input class=\"form-control\" type=\"email\" name=\"email\" placeholder=\"Wpisz email testowy\" data-form-field=\"Email\" required=\"\" id=\"email-form3-i\">
                        <span class=\"input-group-btn\">
                            <button onclick=\"notify()\" id=\"test\" href=\"\" type=\"submit\" class=\"btn btn-primary display-4\">Test</button>
                        </span>
                    </div>
                </form>
                    
              </div>
          </div>
      </div>
  </section>
  
        
 
  <section class=\"engine\"><a href=\"\">css templates</a></section><section class=\"mbr-section content8 cid-qRrwYzzAVf\" id=\"content8-j\">
  
        <div class=\"animated fadeIn\" id=\"load\" style=\"display:none\">
                <img src=\"";
        // line 56
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/icon_loading_email_512px.gif");
        echo "\" alt=\"loading...\" style=\"width: 200px;height: 200px;margin-left: 45%\">
            </div>
    <form 
        onsubmit=\"getData()\" 
        data-request=\"onSend\"
        data-request-loading=\"#load\"
        data-request-flash=\"#flash\"
        >
        <label>Limit maili.</label>
        <input class=\"form-control\" name=\"limit\" value=\"500\" id=\"email-form3-i\" style=\"border-radius: 100px !important; width: 60px;\">

      <div class=\"container\">
          <div class=\"media-container-row title\">
              <div class=\"col-12 col-md-8\">
                  
                    <div class=\"mbr-section-btn align-center\">
                            
                        <button type=\"submit\" class=\"btn btn-black-outline display-4\" style=\"border-radius: 100px !important\">
                            <span class=\"socicon socicon-mail mbr-iconfont mbr-iconfont-btn\" id=\"load\"></span>
                            Wyślij maile&nbsp;
                        </button>
                        
                       
                    </div>
                   
                </div>
               
          </div>
      </div>
      


      </form>
   
  </section>
 


 
        <strong> ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 95
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 96
            echo "                <div id=\"flash\" class=\"alert alert-success\" role=\"alert\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</div>
                ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 97
        echo "</strong>

  
  <div style=\"background-color: #DFF0D8; color: #739F72\" class=\"animated fadeIn alert alert-warning\" id=\"size\" style=\"display: none\" >
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Uwaga</strong> Ilość adresów w bazie: ";
        // line 102
        echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
        echo "
  </div>

  <div style=\"background-color: #FCF8E3; color: #977D4E\" class=\"animated fadeIn alert alert-warning\" id=\"notsend\" style=\"display: none\" >
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Uwaga</strong> Ilość maili na które nie została wysłana wiadomość: ";
        // line 107
        echo twig_escape_filter($this->env, ($context["notsend"] ?? null), "html", null, true);
        echo "
  </div>


  <section once=\"\" class=\"cid-qRrxfr9DQp\" id=\"footer6-k\">      
  
      <div class=\"container\">
          <div class=\"media-container-row align-center mbr-white\">
              <div class=\"col-12\">
                  <p class=\"mbr-text mb-0 mbr-fonts-style display-7\">
                      © Mailing webApp Dominik&amp;Michal</p>
              </div>
          </div>
      </div>
  </section>

  

  <script>
 
    




setInterval(function () {
       
        document.getElementById('licznik').innerHTML= '";
        // line 134
        echo twig_escape_filter($this->env, ($context["size3"] ?? null), "html", null, true);
        echo "';
        
       
    },3000);




function notify(){
    \$('#notsend').css(\"display\",\"\");
};

</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\devmail/themes/rainlab-bonjour/pages/mail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 134,  156 => 107,  148 => 102,  141 => 97,  135 => 96,  133 => 95,  91 => 56,  68 => 36,  62 => 33,  55 => 29,  43 => 20,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'mailing' %}

    <section class=\"mbr-section form3 cid-qRrv590Qvl\" id=\"form3-i\">
                                                  
      <div class=\"container\">
          <div class=\"row justify-content-center\">
              <div class=\"title col-12 col-lg-8\">
                  <h2 class=\"align-center pb-2 mbr-fonts-style display-2\">
                      Mailing PLUGSTUDIO</h2>
                  <h3 class=\"mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5\">
                      Wyślij mailing na adresy z bazy!</h3>
              </div>
             
          </div>
  
          
          <div class=\"row py-2 justify-content-center\">
              <div class=\"col-12 col-lg-6  col-md-8 \">
                  
                {{ form_open({ files: true ,request: 'onSave', class: 'mbr-form'}) }}
                    <input type=\"hidden\" name=\"file\"  data-form-field=\"file\">
                      <div class=\"mbr-subscribe input-group\">
                          <input class=\"form-control\" type=\"file\" name=\"file\" placeholder=\"Import bazy csv\" required=\"\" id=\"email-form3-i\" style=\"border-radius: 100px !important; width: 50%\">
                          <input class=\"form-control\" name=\"column\" value=\"6\" data-form-field=\"column\" id=\"email-form3-i\" style=\"border-radius: 100px !important; width: 30px\"> 
                          <span class=\"input-group-btn\">
                            <button type=\"submit\" class=\"btn btn-primary display-4\">Import</button>
                         </span>
                      </div>
                {{ form_close() }}



                {{ form_open({request: 'onDelete', class: 'mbr-form'}) }}

                <button style=\"margin-left: 28%; background-color: #F2DEDE\" class=\"btn btn-danger dislay-4\" type=\"submit\" >Usuń adresy z bazy</button>
                {{ form_close() }}
                  <form style=\"padding-top: 15%\" data-request=\"onTest\" data-request-flash=\"#flash\" class=\"mbr-form\" action=\"\" method=\"post\"><input type=\"hidden\" name=\"email\" data-form-email=\"true\" value=\"iDS/96ZCXrfAx/BOvOApH+6Tar0n7tTxgElz+Yc7rDs4JbWEi6Acjzgg5fngaJM0cXHaaBuEhR1UpnqOacPwAmf/n56MnfaTJ5oa8s5QJvAA2EcEdIcVOuaLB6KXSmUt\" data-form-field=\"Email\">
                    <div class=\"mbr-subscribe input-group\">
                        <input class=\"form-control\" type=\"email\" name=\"email\" placeholder=\"Wpisz email testowy\" data-form-field=\"Email\" required=\"\" id=\"email-form3-i\">
                        <span class=\"input-group-btn\">
                            <button onclick=\"notify()\" id=\"test\" href=\"\" type=\"submit\" class=\"btn btn-primary display-4\">Test</button>
                        </span>
                    </div>
                </form>
                    
              </div>
          </div>
      </div>
  </section>
  
        
 
  <section class=\"engine\"><a href=\"\">css templates</a></section><section class=\"mbr-section content8 cid-qRrwYzzAVf\" id=\"content8-j\">
  
        <div class=\"animated fadeIn\" id=\"load\" style=\"display:none\">
                <img src=\"{{ 'assets/images/icon_loading_email_512px.gif' | theme }}\" alt=\"loading...\" style=\"width: 200px;height: 200px;margin-left: 45%\">
            </div>
    <form 
        onsubmit=\"getData()\" 
        data-request=\"onSend\"
        data-request-loading=\"#load\"
        data-request-flash=\"#flash\"
        >
        <label>Limit maili.</label>
        <input class=\"form-control\" name=\"limit\" value=\"500\" id=\"email-form3-i\" style=\"border-radius: 100px !important; width: 60px;\">

      <div class=\"container\">
          <div class=\"media-container-row title\">
              <div class=\"col-12 col-md-8\">
                  
                    <div class=\"mbr-section-btn align-center\">
                            
                        <button type=\"submit\" class=\"btn btn-black-outline display-4\" style=\"border-radius: 100px !important\">
                            <span class=\"socicon socicon-mail mbr-iconfont mbr-iconfont-btn\" id=\"load\"></span>
                            Wyślij maile&nbsp;
                        </button>
                        
                       
                    </div>
                   
                </div>
               
          </div>
      </div>
      


      </form>
   
  </section>
 


 
        <strong> {% flash success %}
                <div id=\"flash\" class=\"alert alert-success\" role=\"alert\">{{ message }}</div>
                {% endflash %}</strong>

  
  <div style=\"background-color: #DFF0D8; color: #739F72\" class=\"animated fadeIn alert alert-warning\" id=\"size\" style=\"display: none\" >
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Uwaga</strong> Ilość adresów w bazie: {{size}}
  </div>

  <div style=\"background-color: #FCF8E3; color: #977D4E\" class=\"animated fadeIn alert alert-warning\" id=\"notsend\" style=\"display: none\" >
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Uwaga</strong> Ilość maili na które nie została wysłana wiadomość: {{notsend}}
  </div>


  <section once=\"\" class=\"cid-qRrxfr9DQp\" id=\"footer6-k\">      
  
      <div class=\"container\">
          <div class=\"media-container-row align-center mbr-white\">
              <div class=\"col-12\">
                  <p class=\"mbr-text mb-0 mbr-fonts-style display-7\">
                      © Mailing webApp Dominik&amp;Michal</p>
              </div>
          </div>
      </div>
  </section>

  

  <script>
 
    




setInterval(function () {
       
        document.getElementById('licznik').innerHTML= '{{size3}}';
        
       
    },3000);




function notify(){
    \$('#notsend').css(\"display\",\"\");
};

</script>", "C:\\xampp\\htdocs\\devmail/themes/rainlab-bonjour/pages/mail.htm", "");
    }
}
