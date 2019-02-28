<?php

/* Inc/navbar.html */
class __TwigTemplate_72e20e250ee9be0cefb2582349bf660333003f138fbd213551ace4d229cda1d0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Inc/navbar.html"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Features</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Pricing</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Inc/navbar.html";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Features</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Pricing</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>", "Inc/navbar.html", "C:\\wamp64\\www\\portfolio\\templates\\Inc\\navbar.html");
    }
}
