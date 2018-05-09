<?php

/* C:\xampp\htdocs\devmail/themes/rainlab-bonjour/partials/site/scripts.htm */
class __TwigTemplate_093a4754bb7f5d37f18b7156c83c6f1b48d139b2cb7a291756b19de82668ffcd extends Twig_Template
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
        echo "<script src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/javascript/app.js", 14 => "assets/popper/popper.min.js", 15 => "assets/tether/tether.min.js", 16 => "assets/bootstrap/js/bootstrap.min.js", 17 => "assets/smoothscroll/smooth-scroll.js", 18 => "assets/theme/js/script.js", 19 => "assets/formoid/formoid.min.js", 20 => "assets/bootstrap-notify-3.1.3/bootstrap-notify.js"));
        // line 23
        echo "\"></script>
";
        // line 24
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 26
        echo "
<script>
    function toggleHelp(el) {
        \$(el).toggleClass('is-visible');
        \$('body').toggleClass('no-scroll');
    }
</script>
<script>
    (function(\$) {
  \"use strict\"; // Start of use strict
  // Configure tooltips for collapsed side navigation
  \$('.navbar-sidenav [data-toggle=\"tooltip\"]').tooltip({
    template: '<div class=\"tooltip navbar-sidenav-tooltip\" role=\"tooltip\" style=\"pointer-events: none;\"><div class=\"arrow\"></div><div class=\"tooltip-inner\"></div></div>'
  })
  // Toggle the side navigation
  \$(\"#sidenavToggler\").click(function(e) {
    e.preventDefault();
    \$(\"body\").toggleClass(\"sidenav-toggled\");
    \$(\".navbar-sidenav .nav-link-collapse\").addClass(\"collapsed\");
    \$(\".navbar-sidenav .sidenav-second-level, .navbar-sidenav .sidenav-third-level\").removeClass(\"show\");
  });
  // Force the toggled class to be removed when a collapsible nav link is clicked
  \$(\".navbar-sidenav .nav-link-collapse\").click(function(e) {
    e.preventDefault();
    \$(\"body\").removeClass(\"sidenav-toggled\");
  });
  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  \$('body.fixed-nav .navbar-sidenav, body.fixed-nav .sidenav-toggler, body.fixed-nav .navbar-collapse').on('mousewheel DOMMouseScroll', function(e) {
    var e0 = e.originalEvent,
      delta = e0.wheelDelta || -e0.detail;
    this.scrollTop += (delta < 0 ? 1 : -1) * 30;
    e.preventDefault();
  });
  // Scroll to top button appear
  \$(document).scroll(function() {
    var scrollDistance = \$(this).scrollTop();
    if (scrollDistance > 100) {
      \$('.scroll-to-top').fadeIn();
    } else {
      \$('.scroll-to-top').fadeOut();
    }
  });
  // Configure tooltips globally
  \$('[data-toggle=\"tooltip\"]').tooltip()
  // Smooth scrolling using jQuery easing
  \$(document).on('click', 'a.scroll-to-top', function(event) {
    var \$anchor = \$(this);
    \$('html, body').stop().animate({
      scrollTop: (\$(\$anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });
})(jQuery); // End of use strict

</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\devmail/themes/rainlab-bonjour/partials/site/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 26,  32 => 25,  25 => 24,  22 => 23,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ [
    'assets/javascript/jquery.js',
    'assets/vendor/bootstrap/js/transition.js',
    'assets/vendor/bootstrap/js/alert.js',
    'assets/vendor/bootstrap/js/button.js',
    'assets/vendor/bootstrap/js/carousel.js',
    'assets/vendor/bootstrap/js/collapse.js',
    'assets/vendor/bootstrap/js/dropdown.js',
    'assets/vendor/bootstrap/js/modal.js',
    'assets/vendor/bootstrap/js/tooltip.js',
    'assets/vendor/bootstrap/js/popover.js',
    'assets/vendor/bootstrap/js/scrollspy.js',
    'assets/vendor/bootstrap/js/tab.js',
    'assets/vendor/bootstrap/js/affix.js',
    'assets/javascript/app.js',
    'assets/popper/popper.min.js',
    'assets/tether/tether.min.js',
    'assets/bootstrap/js/bootstrap.min.js',
    'assets/smoothscroll/smooth-scroll.js',
    'assets/theme/js/script.js',
    'assets/formoid/formoid.min.js',
    'assets/bootstrap-notify-3.1.3/bootstrap-notify.js'
]|theme }}\"></script>
{% framework extras %}
{% scripts %}

<script>
    function toggleHelp(el) {
        \$(el).toggleClass('is-visible');
        \$('body').toggleClass('no-scroll');
    }
</script>
<script>
    (function(\$) {
  \"use strict\"; // Start of use strict
  // Configure tooltips for collapsed side navigation
  \$('.navbar-sidenav [data-toggle=\"tooltip\"]').tooltip({
    template: '<div class=\"tooltip navbar-sidenav-tooltip\" role=\"tooltip\" style=\"pointer-events: none;\"><div class=\"arrow\"></div><div class=\"tooltip-inner\"></div></div>'
  })
  // Toggle the side navigation
  \$(\"#sidenavToggler\").click(function(e) {
    e.preventDefault();
    \$(\"body\").toggleClass(\"sidenav-toggled\");
    \$(\".navbar-sidenav .nav-link-collapse\").addClass(\"collapsed\");
    \$(\".navbar-sidenav .sidenav-second-level, .navbar-sidenav .sidenav-third-level\").removeClass(\"show\");
  });
  // Force the toggled class to be removed when a collapsible nav link is clicked
  \$(\".navbar-sidenav .nav-link-collapse\").click(function(e) {
    e.preventDefault();
    \$(\"body\").removeClass(\"sidenav-toggled\");
  });
  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  \$('body.fixed-nav .navbar-sidenav, body.fixed-nav .sidenav-toggler, body.fixed-nav .navbar-collapse').on('mousewheel DOMMouseScroll', function(e) {
    var e0 = e.originalEvent,
      delta = e0.wheelDelta || -e0.detail;
    this.scrollTop += (delta < 0 ? 1 : -1) * 30;
    e.preventDefault();
  });
  // Scroll to top button appear
  \$(document).scroll(function() {
    var scrollDistance = \$(this).scrollTop();
    if (scrollDistance > 100) {
      \$('.scroll-to-top').fadeIn();
    } else {
      \$('.scroll-to-top').fadeOut();
    }
  });
  // Configure tooltips globally
  \$('[data-toggle=\"tooltip\"]').tooltip()
  // Smooth scrolling using jQuery easing
  \$(document).on('click', 'a.scroll-to-top', function(event) {
    var \$anchor = \$(this);
    \$('html, body').stop().animate({
      scrollTop: (\$(\$anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });
})(jQuery); // End of use strict

</script>", "C:\\xampp\\htdocs\\devmail/themes/rainlab-bonjour/partials/site/scripts.htm", "");
    }
}
