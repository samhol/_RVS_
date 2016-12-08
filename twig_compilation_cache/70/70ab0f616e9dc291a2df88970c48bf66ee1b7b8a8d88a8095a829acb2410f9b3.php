<?php

/* head.twig */
class __TwigTemplate_c241cde2d71e9dd442164b713e3854bdc07cc08df143c0882a122401178d3131 extends Twig_Template
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
<html lang=\"fi\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <title>Raision veneseura";
        // line 5
        if (array_key_exists("page_title", $context)) {
            echo " - ";
            echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : null), "html", null, true);
            echo " ";
        }
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"Keywords\" content=\"Raisio veneseura\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\">
    <meta name=\"description\" content=\"Raision veneseuran kotisivut.\">
    <link rel=\"stylesheet\" href=\"srcs/css/styles.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css\" />
  </head>
 
";
    }

    public function getTemplateName()
    {
        return "head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "head.twig", "/var/www/vhosts/samiholck.com/rvs.samiholck.com/twigs/head.twig");
    }
}
