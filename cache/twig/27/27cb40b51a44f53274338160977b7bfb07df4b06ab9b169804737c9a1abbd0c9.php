<?php

/* modular.html.twig */
class __TwigTemplate_2f0a162ed5a47408b64cc51f1465fda7df73a617e5e6eb8b03939846b8149c5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["featured"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.featured" => true), "order" => array("by" => "date", "dir" => "desc"))), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->loadTemplate("partials/header.html.twig", "modular.html.twig", 6)->display($context);
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"home_posts_titles\">
  <div class=\"row\">
    <div class=\"large-12 columns\">
      ";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    </div>
  </div>
</div>
";
        // line 17
        if (($context["featured"] ?? null)) {
            // line 18
            echo "<div class=\"featured-posts\">
    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["featured"] ?? null), 3));
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
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 20
                echo "    <div class=\"row\">
    ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
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
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 22
                    echo "    <div class=\"large-4 columns\">
      ";
                    // line 23
                    $this->loadTemplate("partials/blog_item.html.twig", "modular.html.twig", 23)->display(array_merge($context, array("page" => $context["child"], "truncate" => true, "readmore" => false)));
                    // line 24
                    echo "    </div>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "      </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "</div>
";
        }
        // line 30
        echo "
  <hr>

";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 34
            echo $this->getAttribute($context["module"], "content", array());
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 34,  141 => 33,  136 => 30,  132 => 28,  117 => 26,  102 => 24,  100 => 23,  97 => 22,  80 => 21,  77 => 20,  60 => 19,  57 => 18,  55 => 17,  48 => 13,  43 => 10,  40 => 9,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% set featured = page.collection({'items':{'@taxonomy.featured': true},'order': {'by': 'date', 'dir': 'desc'}}) %}

{% block header %}
  {% include 'partials/header.html.twig' %}
{% endblock %}

{% block content %}
<div class=\"home_posts_titles\">
  <div class=\"row\">
    <div class=\"large-12 columns\">
      {{ page.content }}
    </div>
  </div>
</div>
{% if featured %}
<div class=\"featured-posts\">
    {% for row in featured|batch(3) %}
    <div class=\"row\">
    {% for child in row %}
    <div class=\"large-4 columns\">
      {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true, 'readmore': false} %}
    </div>
    {% endfor %}
      </div>
    {% endfor %}
</div>
{% endif %}

  <hr>

{% for module in page.collection() %}
{{ module.content }}
{% endfor %}
{% endblock %}
", "modular.html.twig", "/var/www/html/grav-skeleton-gateway-site/user/themes/gateway/templates/modular.html.twig");
    }
}
