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
class __TwigTemplate_eac3e9733cecea79fb3e994a554ace4dbbc456a446ef8b3f24c90bdacc95d08d extends Template
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
  
  ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "  
  <script src=\"assets/css/inspinia/js/bootstrap.min.js\"></script>
  <script src=\"assets/css/inspinia/js/plugins/metisMenu/jquery.metisMenu.js\"></script>
  <script src=\"assets/css/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js\"></script>
  
  <script src=\"assets/css/inspinia/js/inspinia.js\"></script>
  
  ";
        // line 28
        $this->displayBlock('scripts', $context, $blocks);
        // line 29
        echo "  
</body>
</html>";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 28
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
        return array (  85 => 28,  79 => 20,  73 => 29,  71 => 28,  62 => 21,  60 => 20,  39 => 1,);
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
