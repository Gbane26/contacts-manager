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

/* contact/show.html.twig */
class __TwigTemplate_926e9888d28a7c344bf8a259855e7ed0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/show.html.twig"));

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
        // line 19
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 20
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
      <a class=\"navbar-brand nav-link\" target=\"_blank\" href=\"index.html\">
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
        // line 79
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
      <li data-mdb-target=\"#introCarousel\" data-mdb-slide-to=\"1\"></li>
    </div>

    <!-- Inner -->
    <div class=\"carousel-inner\">
      ";
        // line 97
        yield from $this->unwrap()->yieldBlock('carousel', $context, $blocks);
        // line 159
        yield "    </div>
    <!-- Inner -->
  </div>
  <!-- Carousel wrapper -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main class=\"mt-5 pt-4\">
    <div class=\"container mt-5\">
        <!--Grid row-->
        <div class=\"row\">
            <!--Grid column-->
            <div class=\"col-md-6 mb-4\">
                <img src=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 173, $this->source); })()), "photo", [], "any", false, false, false, 173))), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Contact image\" style=\"width: 400px;\"/>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-md-6 mb-4\">
                <!--Content-->
                <div class=\"p-4\">
                
                    <div class=\"mb-3\">
                        <a href=\"\">
                            <span class=\"badge bg-dark me-1\">";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 185, $this->source); })()), "groupName", [], "any", false, false, false, 185), "name", [], "any", false, false, false, 185), "html", null, true);
        yield "</span>
                        </a>
                        <a href=\"\">
                            <span class=\"badge bg-info me-1\">New</span>
                        </a>
                        <a href=\"\">
                            <span class=\"badge bg-danger me-1\">Bestseller</span>
                        </a>
                    </div>


                    <strong><p style=\"font-size: 20px;\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 196, $this->source); })()), "firstName", [], "any", false, false, false, 196), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 196, $this->source); })()), "lastName", [], "any", false, false, false, 196), "html", null, true);
        yield "</p></strong>

                    <p>";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 198, $this->source); })()), "phoneNumber", [], "any", false, false, false, 198), "html", null, true);
        yield "</p>
                    <p>";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 199, $this->source); })()), "email", [], "any", false, false, false, 199), "html", null, true);
        yield "</p>
                    <p>";
        // line 200
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 200, $this->source); })()), "customFields", [], "any", false, false, false, 200)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 200, $this->source); })()), "customFields", [], "any", false, false, false, 200)), "html", null, true)) : (""));
        yield "</p>

                    ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 202, $this->source); })()), "fieldsCustom", [], "any", false, false, false, 202));
        foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
            // line 203
            yield "                        <p>
                          ";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 204), "html", null, true);
            yield " : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "description", [], "any", false, false, false, 204), "html", null, true);
            yield "
                        </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customField'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        yield "
                    <div class=\"d-flex align-items-center\">
                       
                            <a href=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 210, $this->source); })()), "id", [], "any", false, false, false, 210)]), "html", null, true);
        yield "\" class=\"btn btn-link btn-sm btn-rounded\">Edit</a>
                      

                        <!-- Delete button with modal trigger -->
                        <button type=\"button\" class=\"btn btn-danger btn-sm btn-rounded\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 214, $this->source); })()), "id", [], "any", false, false, false, 214), "html", null, true);
        yield "\">
                            Delete
                        </button>
                    </div>

                    



                    <!-- Delete Confirmation Modal -->
                    <div class=\"modal fade\" id=\"deleteModal";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 224, $this->source); })()), "id", [], "any", false, false, false, 224), "html", null, true);
        yield "\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 224, $this->source); })()), "id", [], "any", false, false, false, 224), "html", null, true);
        yield "\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\">
                            <div class=\"modal-content\">
                                <!-- Modal Header -->
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"deleteModalLabel";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 229, $this->source); })()), "id", [], "any", false, false, false, 229), "html", null, true);
        yield "\">Confirmation</h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                </div>
                                <!-- Modal Body -->
                                <div class=\"modal-body\">
                                    Etes vous sure de vouloir supprimer ce contact?
                                </div>
                                <!-- Modal Footer -->
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                                    <form method=\"post\" action=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 239, $this->source); })()), "id", [], "any", false, false, false, 239)]), "html", null, true);
        yield "\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 240, $this->source); })()), "id", [], "any", false, false, false, 240))), "html", null, true);
        yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                

                
                </div>
                <!--Content-->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

        <hr />

        <!--Grid row-->
        <div class=\"row d-flex justify-content-center\">
            <!--Grid column-->
            <div class=\"col-md-6 text-center\">
                <h4 class=\"my-4 h4\">Ajouter une information </h4>

               <div class=\"container\">
                ";
        // line 269
        yield Twig\Extension\CoreExtension::include($this->env, $context, "contact/_fieldsform.html.twig");
        yield "
              </div>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

       
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
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

    <!-- Custom scripts -->
<script type=\"text/javascript\" src=\"js/script.js\"></script>

";
        // line 298
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 299
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

    // line 19
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

    // line 97
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

        // line 98
        yield "      <!-- Single item -->
      <div class=\"carousel-item active\">
        <div class=\"mask\" style=\"background-color: rgba(0, 0, 0, 0.6);\">
          <div class=\"d-flex justify-content-center align-items-center h-100\">
            <div class=\"text-white text-center\" data-mdb-theme=\"dark\">
              <h1 class=\"mb-3\">Bienvenue dans votre répertoire</h1>
              <a
                 class=\"btn btn-outline-light btn-lg m-2\" data-mdb-ripple-init
                 href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_index");
        yield "\"
                 role=\"button\"
                 rel=\"nofollow\"
                 >Retour à la liste</a
                >
              <a
                 class=\"btn btn-outline-light btn-lg m-2\" data-mdb-ripple-init
                 href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_group_index");
        yield "\"
                 role=\"button\"
                 >Groupes</a
                >
            </div>
          </div>
        </div>
      </div>

      <!-- Single item -->
      <div class=\"carousel-item\">
        <div class=\"mask\" style=\"background-color: rgba(0, 0, 0, 0.3);\">
          <div class=\"d-flex justify-content-center align-items-center h-100\">
            <div class=\"text-white text-center\">
              <h2>Liste de vos contacts</h2>
            </div>
          </div>
        </div>
      </div>

      <!-- Single item -->
      <div class=\"carousel-item\">
        <div
             class=\"mask\"
             style=\"
                    background: linear-gradient(
                    45deg,
                    rgba(29, 236, 197, 0.7),
                    rgba(91, 14, 214, 0.7) 100%
                    );
                    \"
             >
          <div class=\"d-flex justify-content-center align-items-center h-100\">
            <div class=\"text-white text-center\" data-mdb-theme=\"dark\">
              <h2>Faites un choix</h2>
              <a
                 class=\"btn btn-outline-light btn-lg m-2\" data-mdb-ripple-init
                 href=\"#\"
                 role=\"button\"
                 >Groupe</a
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

    // line 298
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
        return "contact/show.html.twig";
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
        return array (  517 => 298,  460 => 113,  450 => 106,  440 => 98,  427 => 97,  405 => 19,  382 => 7,  362 => 299,  360 => 298,  328 => 269,  296 => 240,  292 => 239,  279 => 229,  269 => 224,  256 => 214,  249 => 210,  244 => 207,  233 => 204,  230 => 203,  226 => 202,  221 => 200,  217 => 199,  213 => 198,  206 => 196,  192 => 185,  177 => 173,  161 => 159,  159 => 97,  138 => 79,  77 => 20,  75 => 19,  60 => 7,  52 => 1,);
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
      <a class=\"navbar-brand nav-link\" target=\"_blank\" href=\"index.html\">
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
      <li data-mdb-target=\"#introCarousel\" data-mdb-slide-to=\"1\"></li>
    </div>

    <!-- Inner -->
    <div class=\"carousel-inner\">
      {% block carousel %}
      <!-- Single item -->
      <div class=\"carousel-item active\">
        <div class=\"mask\" style=\"background-color: rgba(0, 0, 0, 0.6);\">
          <div class=\"d-flex justify-content-center align-items-center h-100\">
            <div class=\"text-white text-center\" data-mdb-theme=\"dark\">
              <h1 class=\"mb-3\">Bienvenue dans votre répertoire</h1>
              <a
                 class=\"btn btn-outline-light btn-lg m-2\" data-mdb-ripple-init
                 href=\"{{ path('app_contact_index') }}\"
                 role=\"button\"
                 rel=\"nofollow\"
                 >Retour à la liste</a
                >
              <a
                 class=\"btn btn-outline-light btn-lg m-2\" data-mdb-ripple-init
                 href=\"{{ path('app_group_index') }}\"
                 role=\"button\"
                 >Groupes</a
                >
            </div>
          </div>
        </div>
      </div>

      <!-- Single item -->
      <div class=\"carousel-item\">
        <div class=\"mask\" style=\"background-color: rgba(0, 0, 0, 0.3);\">
          <div class=\"d-flex justify-content-center align-items-center h-100\">
            <div class=\"text-white text-center\">
              <h2>Liste de vos contacts</h2>
            </div>
          </div>
        </div>
      </div>

      <!-- Single item -->
      <div class=\"carousel-item\">
        <div
             class=\"mask\"
             style=\"
                    background: linear-gradient(
                    45deg,
                    rgba(29, 236, 197, 0.7),
                    rgba(91, 14, 214, 0.7) 100%
                    );
                    \"
             >
          <div class=\"d-flex justify-content-center align-items-center h-100\">
            <div class=\"text-white text-center\" data-mdb-theme=\"dark\">
              <h2>Faites un choix</h2>
              <a
                 class=\"btn btn-outline-light btn-lg m-2\" data-mdb-ripple-init
                 href=\"#\"
                 role=\"button\"
                 >Groupe</a
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

<!--Main layout-->
<main class=\"mt-5 pt-4\">
    <div class=\"container mt-5\">
        <!--Grid row-->
        <div class=\"row\">
            <!--Grid column-->
            <div class=\"col-md-6 mb-4\">
                <img src=\"{{ asset('uploads/photos/' ~ contact.photo) }}\" class=\"img-fluid\" alt=\"Contact image\" style=\"width: 400px;\"/>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-md-6 mb-4\">
                <!--Content-->
                <div class=\"p-4\">
                
                    <div class=\"mb-3\">
                        <a href=\"\">
                            <span class=\"badge bg-dark me-1\">{{ contact.groupName.name  }}</span>
                        </a>
                        <a href=\"\">
                            <span class=\"badge bg-info me-1\">New</span>
                        </a>
                        <a href=\"\">
                            <span class=\"badge bg-danger me-1\">Bestseller</span>
                        </a>
                    </div>


                    <strong><p style=\"font-size: 20px;\">{{ contact.firstName }} {{ contact.lastName }}</p></strong>

                    <p>{{ contact.phoneNumber }}</p>
                    <p>{{ contact.email }}</p>
                    <p>{{ contact.customFields ? contact.customFields|json_encode : '' }}</p>

                    {% for customField in contact.fieldsCustom %}
                        <p>
                          {{ customField.name }} : {{ customField.description }}
                        </p>
                    {% endfor %}

                    <div class=\"d-flex align-items-center\">
                       
                            <a href=\"{{ path('contact_edit', { 'id': contact.id }) }}\" class=\"btn btn-link btn-sm btn-rounded\">Edit</a>
                      

                        <!-- Delete button with modal trigger -->
                        <button type=\"button\" class=\"btn btn-danger btn-sm btn-rounded\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ contact.id }}\">
                            Delete
                        </button>
                    </div>

                    



                    <!-- Delete Confirmation Modal -->
                    <div class=\"modal fade\" id=\"deleteModal{{ contact.id }}\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel{{ contact.id }}\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\">
                            <div class=\"modal-content\">
                                <!-- Modal Header -->
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"deleteModalLabel{{ contact.id }}\">Confirmation</h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                </div>
                                <!-- Modal Body -->
                                <div class=\"modal-body\">
                                    Etes vous sure de vouloir supprimer ce contact?
                                </div>
                                <!-- Modal Footer -->
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                                    <form method=\"post\" action=\"{{ path('app_contact_delete', {'id': contact.id}) }}\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ contact.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                

                
                </div>
                <!--Content-->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

        <hr />

        <!--Grid row-->
        <div class=\"row d-flex justify-content-center\">
            <!--Grid column-->
            <div class=\"col-md-6 text-center\">
                <h4 class=\"my-4 h4\">Ajouter une information </h4>

               <div class=\"container\">
                {{ include('contact/_fieldsform.html.twig') }}
              </div>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

       
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
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

    <!-- Custom scripts -->
<script type=\"text/javascript\" src=\"js/script.js\"></script>

{% block scripts %}{% endblock %}
</body>
</html>







", "contact/show.html.twig", "/Users/ahamadougbane/Desktop/Open IT/Master 1/Dev/contacts-manager/templates/contact/show.html.twig");
    }
}
