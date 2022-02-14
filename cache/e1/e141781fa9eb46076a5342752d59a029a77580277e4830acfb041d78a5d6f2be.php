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

/* main.twig */
class __TwigTemplate_662a8f22ba27c49d1700937d8fd50168f94189d341c4232f2204fff7f5ab42bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html> 
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Challenge</title>

  <link href=\"assets/css/inspinia/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"assets/css/inspinia/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
  <link href=\"assets/css/inspinia/css/animate.css\" rel=\"stylesheet\">
  <link href=\"assets/css/inspinia/css/style.css\" rel=\"stylesheet\">
  <link href=\"assets/css/inspinia/css/plugins/textSpinners/spinners.css\" rel=\"stylesheet\">

  <link rel=\"stylesheet\" href=\"assets/css/style.css\">
  
  <script src=\"assets/css/inspinia/js/jquery-3.1.1.min.js\"></script>
</head>
<body class=\"gray-bg\">
  
<!--   <?php require(\$view); ?> -->
  ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "  
  <script src=\"assets/css/inspinia/js/bootstrap.min.js\"></script>
  <script src=\"assets/css/inspinia/js/plugins/metisMenu/jquery.metisMenu.js\"></script>
  <script src=\"assets/css/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js\"></script>
  
  <script src=\"assets/css/inspinia/js/inspinia.js\"></script>
  
  ";
        // line 29
        $this->displayBlock('scripts', $context, $blocks);
        // line 30
        echo "  
</body>
</html>";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 29
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  80 => 21,  74 => 30,  72 => 29,  63 => 22,  61 => 21,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html> 
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Challenge</title>

  <link href=\"assets/css/inspinia/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"assets/css/inspinia/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
  <link href=\"assets/css/inspinia/css/animate.css\" rel=\"stylesheet\">
  <link href=\"assets/css/inspinia/css/style.css\" rel=\"stylesheet\">
  <link href=\"assets/css/inspinia/css/plugins/textSpinners/spinners.css\" rel=\"stylesheet\">

  <link rel=\"stylesheet\" href=\"assets/css/style.css\">
  
  <script src=\"assets/css/inspinia/js/jquery-3.1.1.min.js\"></script>
</head>
<body class=\"gray-bg\">
  
<!--   <?php require(\$view); ?> -->
  {% block content %}{% endblock %}
  
  <script src=\"assets/css/inspinia/js/bootstrap.min.js\"></script>
  <script src=\"assets/css/inspinia/js/plugins/metisMenu/jquery.metisMenu.js\"></script>
  <script src=\"assets/css/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js\"></script>
  
  <script src=\"assets/css/inspinia/js/inspinia.js\"></script>
  
  {% block scripts %}{% endblock %}
  
</body>
</html>", "main.twig", "/home/public/challenge/views/main.twig");
    }
}
