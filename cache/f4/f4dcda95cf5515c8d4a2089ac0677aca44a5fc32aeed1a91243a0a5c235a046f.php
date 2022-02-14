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

/* App.index.twig */
class __TwigTemplate_c01dc13bec1721e8d9098be302a33d33e8b135a780227c2dc80ed6bc060e445e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "main.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("main.twig", "App.index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"centerBox animated fadeInDown\">
  <div class=\"row\">
  
    <div class=\"col-md-12\">
      <div class=\"ibox-content\">
  
        <h2 class=\"font-bold\">Student Search</h2>
  
        <p>Enter a record ID or name to search for a student.</p>
        <p>We'll also show you any younger students who have the same favorite color or movie.</p>
  
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <form class=\"m-t\" role=\"form\" action=\"javascript:void(0);\">
              
              <div class=\"input-group m-b\">
                <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                <input id=\"search\" type=\"text\" placeholder=\"Search by record ID or name\" class=\"form-control\">
              </div>
  
            </form>
          </div>
        </div>
        
        <div class=\"row\">
          <div id=\"results\" class=\"col-lg-12\">
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
";
    }

    // line 39
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "<script src=\"assets/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "App.index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 40,  88 => 39,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main.twig\" %}

{% block content %}
<div class=\"centerBox animated fadeInDown\">
  <div class=\"row\">
  
    <div class=\"col-md-12\">
      <div class=\"ibox-content\">
  
        <h2 class=\"font-bold\">Student Search</h2>
  
        <p>Enter a record ID or name to search for a student.</p>
        <p>We'll also show you any younger students who have the same favorite color or movie.</p>
  
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <form class=\"m-t\" role=\"form\" action=\"javascript:void(0);\">
              
              <div class=\"input-group m-b\">
                <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                <input id=\"search\" type=\"text\" placeholder=\"Search by record ID or name\" class=\"form-control\">
              </div>
  
            </form>
          </div>
        </div>
        
        <div class=\"row\">
          <div id=\"results\" class=\"col-lg-12\">
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
{% endblock %}

{% block scripts %}
<script src=\"assets/js/index.js\"></script>
{% endblock %}", "App.index.twig", "/home/public/challenge/views/App.index.twig");
    }
}
