<?php

/* modular/default.html.twig */
class __TwigTemplate_33e721862e9a11b3a37d8be797ca408c54f4d3fe35d85ce546dbaddb4b153536 extends Twig_Template
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
        echo "<div class=\"row ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
   <div class=\"large-12 columns\">
     ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array())) {
            // line 4
            echo "      <div class=\"rescue-column rescue-one-half rescue-column-first  rescue-all\">
         <div class=\"embed-vimeo\" style=\"text-align:center;\"><iframe src=\"";
            // line 5
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array()), "src", array());
            echo "\" width=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array()), "width", array());
            echo "\" height=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array()), "height", array());
            echo "\" frameborder=\"0\" webkitallowfullscreen=\"\" mozallowfullscreen=\"\" allowfullscreen=\"\"></iframe></div>
      </div>
      ";
        }
        // line 8
        echo "      <div class=\"rescue-column rescue-one-half rescue-column-last  rescue-all\">
         ";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
         <p>
           ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 12
            echo "           <a href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\" class=\"";
            echo $this->getAttribute($context["button"], "class", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "         </p>
      </div>
   </div>
   <!-- .large-12 -->
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  52 => 12,  48 => 11,  43 => 9,  40 => 8,  30 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row {{ page.header.class }}\">
   <div class=\"large-12 columns\">
     {% if page.header.vimeo %}
      <div class=\"rescue-column rescue-one-half rescue-column-first  rescue-all\">
         <div class=\"embed-vimeo\" style=\"text-align:center;\"><iframe src=\"{{ page.header.vimeo.src }}\" width=\"{{ page.header.vimeo.width }}\" height=\"{{ page.header.vimeo.height }}\" frameborder=\"0\" webkitallowfullscreen=\"\" mozallowfullscreen=\"\" allowfullscreen=\"\"></iframe></div>
      </div>
      {% endif %}
      <div class=\"rescue-column rescue-one-half rescue-column-last  rescue-all\">
         {{ page.content }}
         <p>
           {% for button in page.header.buttons %}
           <a href=\"{{ button.url }}\" class=\"{{ button.class }}\">{{ button.text }}</a>
           {% endfor %}
         </p>
      </div>
   </div>
   <!-- .large-12 -->
</div>
", "modular/default.html.twig", "/var/www/html/grav-skeleton-gateway-site/user/themes/gateway/templates/modular/default.html.twig");
    }
}
