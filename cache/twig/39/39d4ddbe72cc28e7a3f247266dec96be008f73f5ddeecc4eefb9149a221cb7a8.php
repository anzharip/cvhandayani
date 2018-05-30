<?php

/* partials/archives.html.twig */
class __TwigTemplate_3dcab22c393581b16e2f9a97b1cd171ace8efa0aad1f93a9b12ca3b06b5811df extends Twig_Template
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
        echo "<ul class=\"archives\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["archives_data"] ?? null));
        foreach ($context['_seq'] as $context["month"] => $context["items"]) {
            // line 3
            echo "    <li>
    \t<a href=\"";
            // line 4
            echo ($context["base_url"] ?? null);
            echo "/archives_month:";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_date_format_filter($this->env, $context["month"], "M_Y")), "url");
            echo "\">
        <span class=\"archive_date\">";
            // line 5
            echo $context["month"];
            echo "</span>
        ";
            // line 6
            if (($context["archives_show_count"] ?? null)) {
                // line 7
                echo "        <span>(";
                echo twig_length_filter($this->env, $context["items"]);
                echo ")</span>
        ";
            }
            // line 9
            echo "        </a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['month'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"archives\">
{% for month,items in archives_data %}
    <li>
    \t<a href=\"{{ base_url }}/archives_month:{{ month|date('M_Y')|lower|e('url') }}\">
        <span class=\"archive_date\">{{ month }}</span>
        {% if archives_show_count %}
        <span>({{ items|length }})</span>
        {% endif %}
        </a>
    </li>
{% endfor %}
</ul>
", "partials/archives.html.twig", "/var/www/html/grav-skeleton-gateway-site/user/themes/gateway/templates/partials/archives.html.twig");
    }
}
