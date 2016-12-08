<?php

/* topbar_offcanvas.twig */
class __TwigTemplate_0bf9191b00f2992c15a3e7086bd8f90253cb18c8068a5ce1f4967029728da193 extends Twig_Template
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
        echo "
<body>
  <div class=\"off-canvas-wrapper\">
    <div class=\"off-canvas-wrapper-inner\" data-off-canvas-wrapper>

      <!-- off-canvas title bar for 'small' screen -->
      <div class=\"title-bar\" data-responsive-toggle=\"widemenu\" data-hide-for=\"medium\">
        <div class=\"title-bar-left\">
          <button class=\"menu-icon\" type=\"button\" data-open=\"offCanvasLeft\"></button>
          <span class=\"title-bar-title\">Raision Veneseura ry</span>
        </div>
        <div class=\"title-bar-right\">
        </div>
      </div>

      <!-- off-canvas left menu -->
      <div class=\"off-canvas position-left\" id=\"offCanvasLeft\" data-off-canvas>
        <!-- Close button -->
        <button class=\"close-button\" aria-label=\"Close menu\" type=\"button\" data-close>
          <span aria-hidden=\"true\">&times;</span>
        </button>
        ";
        // line 22
        $this->loadTemplate("sidebar.twig", "topbar_offcanvas.twig", 22)->display($context);
        // line 23
        echo "      </div>

      <!-- off-canvas right menu -->
      <div class=\"off-canvas position-right\" id=\"offCanvasRight\" data-off-canvas data-position=\"right\">
      </div>


      <!-- \"wider\" top-bar menu for 'medium' and up -->
      <div data-sticky-container class=\"hide-for-small-only\">
        <div class=\"hide-for-small-only sticky\" id=\"bar\" data-sticky data-margin-top=\"0\" style=\"width:100%\">

          <div id=\"top-row\">
            <div class=\"row column\">
              <a href=\"http://veneseura.samiholck.com/\" title=\"Etusivulle\">
                <img src=\"srcs/img/logo.png\" alt=\"logo\">
                <span>Raision Veneseura ry</span></a>
            </div>
          </div>
          <div id=\"widemenu\" class=\"title-bar\">
            <div class=\"title-bar-left\">
              ";
        // line 43
        $this->loadTemplate("titleBarLinks.twig", "topbar_offcanvas.twig", 43)->display($context);
        // line 44
        echo "            </div>
            <div class=\"title-bar-right\">

            </div>
          </div>
        </div>
      </div>

      <!-- original content goes in this container -->
";
    }

    public function getTemplateName()
    {
        return "topbar_offcanvas.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 44,  66 => 43,  44 => 23,  42 => 22,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "topbar_offcanvas.twig", "/var/www/vhosts/samiholck.com/rvs.samiholck.com/twigs/topbar_offcanvas.twig");
    }
}
