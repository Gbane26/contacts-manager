<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* group/edit.html.twig */
class __TwigTemplate_0323555db924452b0c8e821d4e2a9809 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'carousel' => [$this, 'block_carousel'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/edit.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\" />
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.11.2/css/all.css\" />
    <!-- Google Fonts Roboto -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap\" />
    <!-- MDB -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css\" rel=\"stylesheet\" />
    <!-- Custom styles -->
    <link rel=\"stylesheet\" href=\"css/style.css\" />

    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 19
        yield "    
</head>
<body>
    <!--Main Navigation-->
<header>
  <style>
    /* Carousel styling */
    #introCarousel,
    .carousel-inner,
    .carousel-item,
    .carousel-item.active {
      height: 100vh;
    }

    .carousel-item:nth-child(1) {
      background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }
    .carousel-item:nth-child(2) {
      background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    /* Height for devices larger than 576px */
    @media (min-width: 992px) {
      #introCarousel {
        margin-top: -58.59px;
      }
      #introCarousel,
      .carousel-inner,
      .carousel-item,
      .carousel-item.active {
        height: 50vh;
      }
    }

    .navbar .nav-link {
      color: #fff !important;
    }
  </style>

  <!-- Navbar -->
  <nav class=\"navbar navbar-expand-lg navbar-dark d-none d-lg-block\" style=\"z-index: 2000;\">
    <div class=\"container-fluid\">
      <!-- Navbar brand -->
      <a class=\"navbar-brand nav-link\"  href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_index");
        yield "\">
        <strong>Contacts</strong>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-mdb-collapse-init data-mdb-target=\"#navbarExample01\"
              aria-controls=\"navbarExample01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <i class=\"fas fa-bars\"></i>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarExample01\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_index");
        yield "\">Accueil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Carousel wrapper -->
  <div id=\"introCarousel\" class=\"carousel slide carousel-fade shadow-2-strong\" data-mdb-carousel-init>
    <!-- Indicators -->
    <div class=\"carousel-indicators\">
      <li data-mdb-target=\"#introCarousel\" data-mdb-slide-to=\"0\" class=\"active\"></li>
    </div>

    <!-- Inner -->
    <div class=\"carousel-inner\">
      ";
        // line 95
        yield from $this->unwrap()->yieldBlock('carousel', $context, $blocks);
        // line 114
        yield "    </div>
    <!-- Inner -->
  </div>
  <!-- Carousel wrapper -->
</header>
<!--Main Navigation-->

<!--Main layout <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_group_index");
        yield "\">back to list</a>-->
<main class=\"mt-5\">
  <div class=\"container\">
    ";
        // line 124
        yield Twig\Extension\CoreExtension::include($this->env, $context, "group/_form.html.twig", ["button_label" => "Update"]);
        yield "
  </div>
</main>
<!--Main layout-->

<!--Footer-->
<footer class=\"bg-light text-lg-start\">
  <!-- Copyright -->
  <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
    © 2024 Librairie en ligne. Tous droits réservés.
    <a class=\"text-dark\" href=\"index.html\">Ahamadou</a>
  </div>
  <!-- Copyright -->
</footer>

    <!-- MDB -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js\"></script>
    <!-- Custom scripts -->
";
        // line 142
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 143
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Contact en ligne";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_carousel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        // line 96
        yield "      <!-- Single item -->
      <div class=\"carousel-item active\">
        <div class=\"mask\" style=\"background-color: rgba(0, 0, 0, 0.6);\">
          <div class=\"d-flex justify-content-center align-items-center h-100\">
            <div class=\"text-white text-center\" data-mdb-theme=\"dark\">
              <h1 class=\"mb-3\">Modification de votre contact</h1>
              <a
                 class=\"btn btn-outline-light btn-lg m-2\" data-mdb-ripple-init
                 href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_group_index");
        yield "\"
                 role=\"button\"
                 rel=\"nofollow\"
                 >Retour à la liste</a
                >
            </div>
          </div>
        </div>
      </div>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "group/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  302 => 142,  281 => 104,  271 => 96,  258 => 95,  236 => 18,  213 => 7,  200 => 143,  198 => 142,  177 => 124,  171 => 121,  162 => 114,  160 => 95,  140 => 78,  127 => 68,  76 => 19,  74 => 18,  60 => 7,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\" />
    <title>{% block title %}Contact en ligne{% endblock %}</title>
    
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.11.2/css/all.css\" />
    <!-- Google Fonts Roboto -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap\" />
    <!-- MDB -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css\" rel=\"stylesheet\" />
    <!-- Custom styles -->
    <link rel=\"stylesheet\" href=\"css/style.css\" />

    {% block stylesheets %}{% endblock %}
    
</head>
<body>
    <!--Main Navigation-->
<header>
  <style>
    /* Carousel styling */
    #introCarousel,
    .carousel-inner,
    .carousel-item,
    .carousel-item.active {
      height: 100vh;
    }

    .carousel-item:nth-child(1) {
      background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }
    .carousel-item:nth-child(2) {
      background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    /* Height for devices larger than 576px */
    @media (min-width: 992px) {
      #introCarousel {
        margin-top: -58.59px;
      }
      #introCarousel,
      .carousel-inner,
      .carousel-item,
      .carousel-item.active {
        height: 50vh;
      }
    }

    .navbar .nav-link {
      color: #fff !important;
    }
  </style>

  <!-- Navbar -->
  <nav class=\"navbar navbar-expand-lg navbar-dark d-none d-lg-block\" style=\"z-index: 2000;\">
    <div class=\"container-fluid\">
      <!-- Navbar brand -->
      <a class=\"navbar-brand nav-link\"  href=\"{{ path('app_contact_index') }}\">
        <strong>Contacts</strong>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-mdb-collapse-init data-mdb-target=\"#navbarExample01\"
              aria-controls=\"navbarExample01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <i class=\"fas fa-bars\"></i>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarExample01\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" aria-current=\"page\" href=\"{{ path('app_contact_index') }}\">Accueil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Carousel wrapper -->
  <div id=\"introCarousel\" class=\"carousel slide carousel-fade shadow-2-strong\" data-mdb-carousel-init>
    <!-- Indicators -->
    <div class=\"carousel-indicators\">
      <li data-mdb-target=\"#introCarousel\" data-mdb-slide-to=\"0\" class=\"active\"></li>
    </div>

    <!-- Inner -->
    <div class=\"carousel-inner\">
      {% block carousel %}
      <!-- Single item -->
      <div class=\"carousel-item active\">
        <div class=\"mask\" style=\"background-color: rgba(0, 0, 0, 0.6);\">
          <div class=\"d-flex justify-content-center align-items-center h-100\">
            <div class=\"text-white text-center\" data-mdb-theme=\"dark\">
              <h1 class=\"mb-3\">Modification de votre contact</h1>
              <a
                 class=\"btn btn-outline-light btn-lg m-2\" data-mdb-ripple-init
                 href=\"{{ path('app_group_index') }}\"
                 role=\"button\"
                 rel=\"nofollow\"
                 >Retour à la liste</a
                >
            </div>
          </div>
        </div>
      </div>
      {% endblock %}
    </div>
    <!-- Inner -->
  </div>
  <!-- Carousel wrapper -->
</header>
<!--Main Navigation-->

<!--Main layout <a href=\"{{ path('app_group_index') }}\">back to list</a>-->
<main class=\"mt-5\">
  <div class=\"container\">
    {{ include('group/_form.html.twig', {'button_label': 'Update'}) }}
  </div>
</main>
<!--Main layout-->

<!--Footer-->
<footer class=\"bg-light text-lg-start\">
  <!-- Copyright -->
  <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
    © 2024 Librairie en ligne. Tous droits réservés.
    <a class=\"text-dark\" href=\"index.html\">Ahamadou</a>
  </div>
  <!-- Copyright -->
</footer>

    <!-- MDB -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js\"></script>
    <!-- Custom scripts -->
{% block scripts %}{% endblock %}
</body>
</html>
", "group/edit.html.twig", "/Users/ahamadougbane/Desktop/Open IT/Master 1/Dev/contacts-manager/templates/group/edit.html.twig");
    }
}
