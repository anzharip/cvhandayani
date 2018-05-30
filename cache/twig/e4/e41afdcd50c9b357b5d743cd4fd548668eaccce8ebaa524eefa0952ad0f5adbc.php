<?php

/* partials/navigation.html.twig */
class __TwigTemplate_04d58f8155e4740044d90abea4a1511493500d3d8774e5fadf6c9cb73fcf4518 extends Twig_Template
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
        // line 17
        echo "
<header id=\"masthead\" class=\"site-header\" role=\"banner\">
   <div class=\"stick\">
      <nav class=\"top-bar\" data-topbar=\"\" data-options=\"mobile_show_parent_link: true\">
         <ul class=\"title-area\">
            <li class=\"name\"></li>
            <li class=\"toggle-topbar menu-icon\"><a href=\"#\"><span>Menu</span></a></li>
         </ul>
         <section class=\"top-bar-section\">
            <ul id=\"menu-header\" class=\"right\">
              ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", array()), "enabled", array())) {
            // line 28
            echo "                  ";
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null)), "method");
            echo "
              ";
        } else {
            // line 30
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                echo "                    ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 32
                echo "                    <li id=\"menu-item-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                        <a href=\"";
                // line 33
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                            ";
                // line 34
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 35
                echo "                            ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                        </a>
                    </li>
                  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "              ";
        }
        // line 40
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 41
            echo "                  <li>
                      <a href=\"";
            // line 42
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
                          ";
            // line 43
            if ($this->getAttribute($context["mitem"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", array());
                echo "\"></i>";
            }
            // line 44
            echo "                          ";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
                      </a>
                  </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </ul>
         </section>
      </nav>
      <hr>
   </div>
</header>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "      ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "          <li id=\"menu-item-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" class=\"menu-item ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    echo "menu-item-has-children has-dropdown";
                }
                echo " menu-item-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo " not-click ";
                echo ($context["current_page"] ?? null);
                echo "\">
          <a href=\"";
                // line 5
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">
              ";
                // line 6
                if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 7
                echo "              ";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "
          </a>
          ";
                // line 9
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 10
                    echo "              <ul class=\"sub-menu dropdown\">
                  ";
                    // line 11
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
              </ul>
          ";
                }
                // line 14
                echo "      </li>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 14,  205 => 11,  202 => 10,  200 => 9,  194 => 7,  188 => 6,  184 => 5,  171 => 4,  168 => 3,  150 => 2,  138 => 1,  128 => 48,  117 => 44,  111 => 43,  107 => 42,  104 => 41,  99 => 40,  96 => 39,  77 => 35,  71 => 34,  67 => 33,  60 => 32,  57 => 31,  39 => 30,  33 => 28,  31 => 27,  19 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
      {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
          <li id=\"menu-item-{{ loop.index }}\" class=\"menu-item {% if p.children.visible.count > 0 %}menu-item-has-children has-dropdown{% endif %} menu-item-{{ loop.index }} not-click {{ current_page }}\">
          <a href=\"{{ p.url }}\">
              {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
              {{ p.menu }}
          </a>
          {% if p.children.visible.count > 0 %}
              <ul class=\"sub-menu dropdown\">
                  {{ _self.loop(p) }}
              </ul>
          {% endif %}
      </li>
    {% endfor %}
{% endmacro %}

<header id=\"masthead\" class=\"site-header\" role=\"banner\">
   <div class=\"stick\">
      <nav class=\"top-bar\" data-topbar=\"\" data-options=\"mobile_show_parent_link: true\">
         <ul class=\"title-area\">
            <li class=\"name\"></li>
            <li class=\"toggle-topbar menu-icon\"><a href=\"#\"><span>Menu</span></a></li>
         </ul>
         <section class=\"top-bar-section\">
            <ul id=\"menu-header\" class=\"right\">
              {% if theme_config.dropdown.enabled %}
                  {{ _self.loop(pages) }}
              {% else %}
                  {% for page in pages.children.visible %}
                    {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                    <li id=\"menu-item-{{ loop.index }}\" class=\"{{ current_page }}\">
                        <a href=\"{{ page.url }}\">
                            {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                            {{ page.menu }}
                        </a>
                    </li>
                  {% endfor %}
              {% endif %}
              {% for mitem in site.menu %}
                  <li>
                      <a href=\"{{ mitem.url }}\">
                          {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                          {{ mitem.text }}
                      </a>
                  </li>
              {% endfor %}
            </ul>
         </section>
      </nav>
      <hr>
   </div>
</header>
", "partials/navigation.html.twig", "/var/www/html/grav-skeleton-gateway-site/user/themes/gateway/templates/partials/navigation.html.twig");
    }
}
