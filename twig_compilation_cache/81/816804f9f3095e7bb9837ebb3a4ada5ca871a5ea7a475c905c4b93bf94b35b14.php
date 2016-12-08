<?php

/* sidebar.twig */
class __TwigTemplate_ed71f05f1719584c49dd954028518b4d134c394c2aafd36d0bcc870347708b67 extends Twig_Template
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
";
        // line 2
        if ((twig_length_filter($this->env, (isset($context["links"]) ? $context["links"] : null)) > 0)) {
            // line 3
            echo "  <ul class=\"menu vertical\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 5
                echo "      ";
                if ($this->getAttribute($context["link"], "menu-text", array(), "array")) {
                    // line 6
                    echo "        <li class=\"menu-text\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "menu-text", array(), "array"), "html", null, true);
                    echo "</li>
      ";
                } else {
                    // line 8
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "link", array(), "array"), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "target", array(), "array"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "text", array(), "array"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  50 => 10,  40 => 8,  34 => 6,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if links|length > 0 %}*/
/*   <ul class="menu vertical">*/
/*     {% for link in links %}*/
/*       {% if link['menu-text'] %}*/
/*         <li class="menu-text">{{ link['menu-text'] }}</li>*/
/*       {% else %}*/
/*         <li><a href="{{ link['link'] }}" target="{{ link['target'] }}">{{ link['text'] }}</a></li>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endif %}*/
/* */
