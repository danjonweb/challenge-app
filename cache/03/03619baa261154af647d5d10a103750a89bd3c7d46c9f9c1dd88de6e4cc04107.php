<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* _similar_results.twig */
class __TwigTemplate_45b7ed8c20519c742acf4e9ec5b7371b7514e8092c5dbeaffc42ce9291964891 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ( !(isset($context["students"]) || array_key_exists("students", $context))) {
            // line 2
            echo "
";
        } elseif (twig_test_empty(        // line 3
($context["students"] ?? null))) {
            // line 4
            echo "
<p class=\"m-xs text-muted text-center\">No similar students</p>

";
        } else {
            // line 8
            echo "
";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["students"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["stu"]) {
                // line 10
                echo "  
  <div class=\"result-row similar-row ";
                // line 11
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 11) % 2 == 0)) {
                    echo "even-row";
                } else {
                    echo "odd-row";
                }
                echo "\">
    <div class='result-cell'>";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "record_id", [], "any", false, false, false, 12), "html", null, true);
                echo "</div>
    <div class='result-cell'>";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "first_name", [], "any", false, false, false, 13), "html", null, true);
                echo "</div>
    <div class='result-cell'>";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "last_name", [], "any", false, false, false, 14), "html", null, true);
                echo "</div>
    <div class='result-cell'>";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "gender", [], "any", false, false, false, 15), "html", null, true);
                echo "</div>
    <div class='result-cell'>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "age", [], "any", false, false, false, 16), "html", null, true);
                echo "</div>
    <div class=\"result-cell\"><div class=\"color\" style=\"background-color:";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "background_color", [], "any", false, false, false, 17), "html", null, true);
                echo "\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"\" data-original-title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "favorite_color", [], "any", false, false, false, 17), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "favorite_color", [], "any", false, false, false, 17), "html", null, true);
                echo "</div></div>
    <div class=\"result-cell truncated-cell\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"\" data-original-title=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "favorite_movie", [], "any", false, false, false, 18), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "favorite_movie", [], "any", false, false, false, 18), "html", null, true);
                echo "</div>
    <div class='result-cell empty-cell'></div>
  </div>
  
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_similar_results.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 23,  109 => 18,  101 => 17,  97 => 16,  93 => 15,  89 => 14,  85 => 13,  81 => 12,  73 => 11,  70 => 10,  53 => 9,  50 => 8,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if students is not defined %}

{% elseif students is empty %}

<p class=\"m-xs text-muted text-center\">No similar students</p>

{% else %}

{% for stu in students %}
  
  <div class=\"result-row similar-row {% if loop.index is even %}even-row{% else %}odd-row{% endif %}\">
    <div class='result-cell'>{{ stu.record_id }}</div>
    <div class='result-cell'>{{ stu.first_name }}</div>
    <div class='result-cell'>{{ stu.last_name }}</div>
    <div class='result-cell'>{{ stu.gender }}</div>
    <div class='result-cell'>{{ stu.age }}</div>
    <div class=\"result-cell\"><div class=\"color\" style=\"background-color:{{ stu.background_color }}\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"\" data-original-title=\"{{ stu.favorite_color }}\">{{ stu.favorite_color }}</div></div>
    <div class=\"result-cell truncated-cell\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"\" data-original-title=\"{{ stu.favorite_movie }}\">{{ stu.favorite_movie }}</div>
    <div class='result-cell empty-cell'></div>
  </div>
  
{% endfor %}

{% endif %}", "_similar_results.twig", "/home/public/challenge/views/_similar_results.twig");
    }
}
