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
class __TwigTemplate_e98ab7d34d017c04944a5521b19bf6186296d68f411988776df9c63ee630a4f5 extends Template
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
        echo "<div class='result-row header-row'>
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
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stu"]) {
            // line 13
            echo "  <div class=\"ibox collapsed\">
    <div class=\"ibox-title\">
      <div class=\"result-row\" data-id=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stu"], "record_id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
<!--       <div class=\"result-cell\">{\$this->highlight(\$stu['record_id'], \$q)}</div> -->
      <div class=\"result-cell\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['TwigExtension']->highlight(twig_get_attribute($this->env, $this->source, $context["stu"], "record_id", [], "any", false, false, false, 17), "1"), "html", null, true);
            echo "</div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  63 => 17,  58 => 15,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class='result-row header-row'>
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
<!--       <div class=\"result-cell\">{\$this->highlight(\$stu['record_id'], \$q)}</div> -->
      <div class=\"result-cell\">{{ highlight(stu.record_id, '1') }}</div>
    </div>
  </div>
{% endfor %}", "_search_results.twig", "/home/public/challenge/views/_search_results.twig");
    }
}
