<?php

/* partials/footer.html.twig */
class __TwigTemplate_db8e956f309640bc754a7a864df96694693c5df8e54af11b800eee93384f7ce1 extends Twig_Template
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
        echo "<div class=\"footer-wrap\">
   <div class=\"row\">
      <div class=\"large-12 columns\">
         <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
            <div class=\"row\">
               <div class=\"large-4 columns\">
                  <aside id=\"text-5\" class=\"widget widget_text\">
                    ";
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "widget", array()), "title", array())) {
            // line 9
            echo "                     <h1 class=\"widget-title\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "widget", array()), "title", array());
            echo "</h1>
                    ";
        }
        // line 11
        echo "                     <div class=\"textwidget\">
                       ";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "widget", array()), "description", array())) {
            // line 13
            echo "                        <p>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "widget", array()), "description", array());
            echo "</p>
                      ";
        }
        // line 15
        echo "                        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "widget", array()), "link", array()), "url", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "widget", array()), "link", array()), "text", array()))) {
            // line 16
            echo "                        <p><a class=\"more-link\" href=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "widget", array()), "link", array()), "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "widget", array()), "link", array()), "text", array());
            echo "</a></p>
                        ";
        }
        // line 18
        echo "                     </div>
                  </aside>
               </div>
               ";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 22
            echo "               <div class=\"large-4 columns\">
                  <aside id=\"recent-posts-4\" class=\"widget widget_recent_entries\">
                      <h1 class=\"widget-title\">Archives</h1>
                     \t";
            // line 25
            $this->loadTemplate("partials/archives.html.twig", "partials/footer.html.twig", 25)->display($context);
            // line 26
            echo "                  </aside>
               </div>
               ";
        }
        // line 29
        echo "               <div class=\"large-4 columns\">
                 ";
        // line 30
        if ($this->getAttribute(($context["site"] ?? null), "social", array())) {
            // line 31
            echo "                  <aside id=\"text-6\" class=\"widget widget_text\">
                     <h1 class=\"widget-title\">Keep In Touch</h1>
                     <div class=\"textwidget\">
                       ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "                         <a href=\"";
                echo $this->getAttribute($context["item"], "url", array());
                echo "\"><i class=\"fa fa-";
                echo $this->getAttribute($context["item"], "icon", array());
                echo "\"></i></a>
                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                     </div>
                  </aside>
                  ";
        }
        // line 40
        echo "                  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 41
            echo "                  <aside id=\"search-4\" class=\"widget widget_search search-form\">
                     <h1 class=\"widget-title\">Find What You Need</h1>
                         ";
            // line 43
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/footer.html.twig", 43)->display($context);
            // line 44
            echo "                  </aside>
                   ";
        }
        // line 46
        echo "               </div>
            </div>
            ";
        // line 48
        if ($this->getAttribute(($context["site"] ?? null), "copyright", array())) {
            // line 49
            echo "            <div class=\"site-info\">
               <p>
                  ";
            // line 51
            echo $this->getAttribute(($context["site"] ?? null), "copyright", array());
            echo "
               </p>
            </div>
            ";
        }
        // line 55
        echo "         </footer>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 55,  130 => 51,  126 => 49,  124 => 48,  120 => 46,  116 => 44,  114 => 43,  110 => 41,  107 => 40,  102 => 37,  91 => 35,  87 => 34,  82 => 31,  80 => 30,  77 => 29,  72 => 26,  70 => 25,  65 => 22,  63 => 21,  58 => 18,  50 => 16,  47 => 15,  41 => 13,  39 => 12,  36 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-wrap\">
   <div class=\"row\">
      <div class=\"large-12 columns\">
         <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
            <div class=\"row\">
               <div class=\"large-4 columns\">
                  <aside id=\"text-5\" class=\"widget widget_text\">
                    {% if site.footer.widget.title %}
                     <h1 class=\"widget-title\">{{ site.footer.widget.title }}</h1>
                    {% endif %}
                     <div class=\"textwidget\">
                       {% if site.footer.widget.description %}
                        <p>{{ site.footer.widget.description }}</p>
                      {% endif %}
                        {% if site.footer.widget.link.url or site.footer.widget.link.text %}
                        <p><a class=\"more-link\" href=\"{{ site.footer.widget.link.url }}\">{{ site.footer.widget.link.text }}</a></p>
                        {% endif %}
                     </div>
                  </aside>
               </div>
               {% if config.plugins.archives.enabled %}
               <div class=\"large-4 columns\">
                  <aside id=\"recent-posts-4\" class=\"widget widget_recent_entries\">
                      <h1 class=\"widget-title\">Archives</h1>
                     \t{% include 'partials/archives.html.twig' %}
                  </aside>
               </div>
               {% endif %}
               <div class=\"large-4 columns\">
                 {% if site.social %}
                  <aside id=\"text-6\" class=\"widget widget_text\">
                     <h1 class=\"widget-title\">Keep In Touch</h1>
                     <div class=\"textwidget\">
                       {% for item in site.social %}
                         <a href=\"{{ item.url }}\"><i class=\"fa fa-{{ item.icon }}\"></i></a>
                       {% endfor %}
                     </div>
                  </aside>
                  {% endif %}
                  {% if config.plugins.simplesearch.enabled %}
                  <aside id=\"search-4\" class=\"widget widget_search search-form\">
                     <h1 class=\"widget-title\">Find What You Need</h1>
                         {% include 'partials/simplesearch_searchbox.html.twig' %}
                  </aside>
                   {% endif %}
               </div>
            </div>
            {% if site.copyright %}
            <div class=\"site-info\">
               <p>
                  {{ site.copyright }}
               </p>
            </div>
            {% endif %}
         </footer>
      </div>
   </div>
</div>
", "partials/footer.html.twig", "/var/www/html/grav-skeleton-gateway-site/user/themes/gateway/templates/partials/footer.html.twig");
    }
}
