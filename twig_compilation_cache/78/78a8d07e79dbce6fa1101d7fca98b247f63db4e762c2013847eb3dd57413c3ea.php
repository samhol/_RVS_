<?php

/* titleBarLinks.twig */
class __TwigTemplate_15983335912794c25ee69786f518b622927a7fb77685332df7b467577ac8828f extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["titleBarLinks"]) ? $context["titleBarLinks"] : null)) > 0)) {
            // line 3
            echo "  <ul class=\"dropdown menu\" data-dropdown-menu>
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["titleBarLinks"]) ? $context["titleBarLinks"] : null));
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
        return "titleBarLinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  50 => 10,  40 => 8,  34 => 6,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "titleBarLinks.twig", "/var/www/vhosts/samiholck.com/rvs.samiholck.com/twigs/titleBarLinks.twig");
    }
}
