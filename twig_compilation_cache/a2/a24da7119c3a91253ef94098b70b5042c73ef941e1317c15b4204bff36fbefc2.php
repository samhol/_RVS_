<?php

/* head.twig */
class __TwigTemplate_c0c020c7fdc05fd2bb9b497e1fd7caaad90367a5ddf6297b02e35b6f0b6be7f3 extends Twig_Template
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
}
/* <!DOCTYPE html>*/
/* <html lang="fi">*/
/*   <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <title>Raision veneseura{% if page_title is defined %} - {{ page_title }} {% endif %}</title>*/
/*     <meta charset="utf-8">*/
/*     <meta name="Keywords" content="Raisio veneseura">*/
/*     <meta name="viewport" content="width=device-width, user-scalable=no">*/
/*     <meta name="description" content="Raision veneseuran kotisivut.">*/
/*     <link rel="stylesheet" href="srcs/css/styles.css">*/
/*     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css" />*/
/*   </head>*/
/*  */
/* */
