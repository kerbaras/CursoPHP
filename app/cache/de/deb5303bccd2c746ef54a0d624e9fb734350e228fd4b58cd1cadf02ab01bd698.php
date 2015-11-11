<?php

/* layout.html.twig */
class __TwigTemplate_6cbe60f60e7fbc9f8bdcc01d0d6587755eac704a0eef27d9eed0b6cb0a8761f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>CursoPHP</title>
  </head>
  <body>
    ";
        // line 8
        $this->displayBlock('main', $context, $blocks);
        // line 10
        echo "  </body>
</html>
";
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  37 => 8,  31 => 10,  29 => 8,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <title>CursoPHP</title>*/
/*   </head>*/
/*   <body>*/
/*     {% block main %}*/
/*     {% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
