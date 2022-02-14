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

/* _search_results.twig */
class __TwigTemplate_91ace41c3e3c30f63b153e8e8f6592d75e6439c3804dcaf4c548e1109d3a72d7 extends Template
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
<p class=\"m-xs text-muted text-center\">No results</p>

";
        } else {
            // line 8
            echo "
<div class='result-row header-row'>
  <div class='result-cell'>ID</div>
  <div class='result-cell'>First</div>
  <div class='result-cell'>Last</div>
  <div class='result-cell'>Gender</div>
  <div class='result-cell'>Age</div>
  <div class='result-cell'>Color</div>
  <div class='result-cell'>Movie</div>
  <div class='result-cell'>Matches</div>
</div>

";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["students"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["stu"]) {
                // line 21
                echo "  <div class=\"ibox collapsed\">
    <div class=\"ibox-title\">
      <div class=\"result-row\" data-id=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "record_id", [], "any", false, false, false, 23), "html", null, true);
                echo "\">
        <div class=\"result-cell\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["stu"], "record_id", [], "any", false, false, false, 24);
                echo "</div>
        <div class=\"result-cell\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["stu"], "first_name", [], "any", false, false, false, 25);
                echo "</div>
        <div class=\"result-cell\">";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["stu"], "last_name", [], "any", false, false, false, 26);
                echo "</div>
        <div class=\"result-cell\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "gender", [], "any", false, false, false, 27), "html", null, true);
                echo "</div>
        <div class=\"result-cell\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "age", [], "any", false, false, false, 28), "html", null, true);
                echo "</div>
        <div class=\"result-cell\"><div class=\"color\" style=\"background-color:";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "background_color", [], "any", false, false, false, 29), "html", null, true);
                echo "\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"\" data-original-title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "favorite_color", [], "any", false, false, false, 29), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "favorite_color", [], "any", false, false, false, 29), "html", null, true);
                echo "</div></div>
        <div class=\"result-cell truncated-cell\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"\" data-original-title=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "favorite_movie", [], "any", false, false, false, 30), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "favorite_movie", [], "any", false, false, false, 30), "html", null, true);
                echo "</div>
        <div class=\"result-cell similar\"></div>
        <div class=\"ibox-tools\">
          <a class=\"collapse-link\">
            <i class=\"fa fa-chevron-up\"></i>
          </a>
        </div>
      </div>
    </div>
    <div class=\"ibox-content\">
      <div class=\"sk-spinner sk-spinner-three-bounce\"><div class=\"sk-bounce1\"></div><div class=\"sk-bounce2\"></div><div class=\"sk-bounce3\"></div></div>
    </div>
  </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
<button type=\"button\" id=\"export\" class=\"btn btn-w-m btn-default m-t-lg pull-right\"><i class=\"fa fa-download\"></i>&nbsp;&nbsp;Export Data</button>

";
        }
    }

    public function getTemplateName()
    {
        return "_search_results.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 44,  104 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  68 => 21,  64 => 20,  50 => 8,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if students is not defined %}

{% elseif students is empty %}

<p class=\"m-xs text-muted text-center\">No results</p>

{% else %}

<div class='result-row header-row'>
  <div class='result-cell'>ID</div>
  <div class='result-cell'>First</div>
  <div class='result-cell'>Last</div>
  <div class='result-cell'>Gender</div>
  <div class='result-cell'>Age</div>
  <div class='result-cell'>Color</div>
  <div class='result-cell'>Movie</div>
  <div class='result-cell'>Matches</div>
</div>

{% for stu in students %}
  <div class=\"ibox collapsed\">
    <div class=\"ibox-title\">
      <div class=\"result-row\" data-id=\"{{ stu.record_id }}\">
        <div class=\"result-cell\">{{ stu.record_id|raw }}</div>
        <div class=\"result-cell\">{{ stu.first_name|raw }}</div>
        <div class=\"result-cell\">{{ stu.last_name|raw }}</div>
        <div class=\"result-cell\">{{ stu.gender }}</div>
        <div class=\"result-cell\">{{ stu.age }}</div>
        <div class=\"result-cell\"><div class=\"color\" style=\"background-color:{{ stu.background_color }}\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"\" data-original-title=\"{{ stu.favorite_color }}\">{{ stu.favorite_color }}</div></div>
        <div class=\"result-cell truncated-cell\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"\" data-original-title=\"{{ stu.favorite_movie }}\">{{ stu.favorite_movie }}</div>
        <div class=\"result-cell similar\"></div>
        <div class=\"ibox-tools\">
          <a class=\"collapse-link\">
            <i class=\"fa fa-chevron-up\"></i>
          </a>
        </div>
      </div>
    </div>
    <div class=\"ibox-content\">
      <div class=\"sk-spinner sk-spinner-three-bounce\"><div class=\"sk-bounce1\"></div><div class=\"sk-bounce2\"></div><div class=\"sk-bounce3\"></div></div>
    </div>
  </div>
{% endfor %}

<button type=\"button\" id=\"export\" class=\"btn btn-w-m btn-default m-t-lg pull-right\"><i class=\"fa fa-download\"></i>&nbsp;&nbsp;Export Data</button>

{% endif %}", "_search_results.twig", "/home/public/challenge/views/_search_results.twig");
    }
}
