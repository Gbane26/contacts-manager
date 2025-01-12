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

/* group/index.html.twig */
class __TwigTemplate_c4c005c90adf8055e4f55a80420a7742 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/index.html.twig"));

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
      <li data-mdb-target=\"#introCarousel\" data-mdb-slide-to=\"1\"></li>
    </div>

    <!-- Inner -->
    <div class=\"carousel-inner\">
      ";
        // line 96
        yield from $this->unwrap()->yieldBlock('carousel', $context, $blocks);
        // line 158
        yield "    </div>
    <!-- Inner -->
  </div>
  <!-- Carousel wrapper -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main class=\"mt-5\">
    <div class=\"container\">

        <div class=\"row\">  
            ";
        // line 170
        if ((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 170, $this->source); })())) {
            // line 171
            yield "                <div class=\"row\">
                    <!-- Liste des groupes -->
                    <div class=\"col-4\">
                        <div class=\"list-group list-group-light\" id=\"list-tab\" role=\"tablist\">
                            ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 175, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 176
                yield "                                <a class=\"list-group-item list-group-item-action ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 176)) {
                    yield "active";
                }
                yield " px-3 border-0\"
                                    id=\"list-";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 177), "html", null, true);
                yield "-list\"
                                    data-mdb-list-init
                                    href=\"#list-";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 179), "html", null, true);
                yield "\"
                                    role=\"tab\"
                                    aria-controls=\"list-";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 181), "html", null, true);
                yield "\">
                                    ";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 182), "html", null, true);
                yield "
                                     <span class=\"badge rounded-pill badge-success\" onclick=\"window.location.href='/group/";
                // line 183
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 183), "html", null, true);
                yield "/edit'\" style=\"cursor: pointer;\">Modifier</span>
                                </a>
                                
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            yield "                        </div>
                    </div>

                    <!-- Contenu des groupes -->
                    <div class=\"col-8\">
                        <div class=\"tab-content\" id=\"nav-tabContent\">
                            ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 193, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 194
                yield "                                <div class=\"tab-pane fade ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 194)) {
                    yield "show active";
                }
                yield "\" 
                                    id=\"list-";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 195), "html", null, true);
                yield "\" 
                                    role=\"tabpanel\" 
                                    aria-labelledby=\"list-";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 197), "html", null, true);
                yield "-list\">
                                    <div class=\"row\">
                                        <!-- Vérifier si le groupe contient des contacts -->
                                        ";
                // line 200
                if (CoreExtension::getAttribute($this->env, $this->source, $context["group"], "contacts", [], "any", false, false, false, 200)) {
                    // line 201
                    yield "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "contacts", [], "any", false, false, false, 201));
                    foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                        // line 202
                        yield "                                                <div class=\"col-xl-6 mb-4\">
                                                    <div class=\"card\">
                                                        <div class=\"card-body\">
                                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                                <div class=\"d-flex align-items-center\">
                                                                    <img
                                                                        src=\"https://mdbootstrap.com/img/new/avatars/8.jpg\"
                                                                        alt=\"\"
                                                                        style=\"width: 45px; height: 45px\"
                                                                        class=\"rounded-circle\"
                                                                    />
                                                                    <div class=\"ms-3\">
                                                                        <p class=\"fw-bold mb-1\">";
                        // line 214
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "firstName", [], "any", false, false, false, 214), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "lastName", [], "any", false, false, false, 214), "html", null, true);
                        yield "</p>
                                                                        <p class=\"text-muted mb-0\">";
                        // line 215
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 215), "html", null, true);
                        yield "</p>
                                                                    </div>
                                                                </div>
                                                                <span class=\"badge rounded-pill badge-success\">Active</span>
                                                            </div>
                                                        </div>
                                                        <div class=\"card-footer border-0 bg-body-tertiary p-2 d-flex justify-content-around\">
                                                            <a class=\"btn btn-link m-0 text-reset\" href=\"#\" role=\"button\" data-ripple-color=\"primary\" data-mdb-ripple-init>
                                                                Message<i class=\"fas fa-envelope ms-2\"></i>
                                                            </a>
                                                            <a class=\"btn btn-link m-0 text-reset\" href=\"#\" role=\"button\" data-ripple-color=\"primary\" data-mdb-ripple-init>
                                                                Call<i class=\"fas fa-phone ms-2\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 232
                    yield "                                        ";
                } else {
                    // line 233
                    yield "                                            <p>Aucun contact disponible pour ce groupe</p>
                                        ";
                }
                // line 235
                yield "                                    </div>
                                </div>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            yield "                        </div>
                    </div>
                </div>
            ";
        } else {
            // line 242
            yield "                <p>Aucun groupe disponible</p>
            ";
        }
        // line 244
        yield "        </div>

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
        // line 265
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 266
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

    // line 96
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

        // line 97
        yield "      <!-- Single item -->
      <div class=\"carousel-item active\">
        <div class=\"mask\" style=\"background-color: rgba(0, 0, 0, 0.6);\">
          <div class=\"d-flex justify-content-center align-items-center h-100\">
            <div class=\"text-white text-center\" data-mdb-theme=\"dark\">
              <h1 class=\"mb-3\">Bienvenue dans votre répertoire de groupe</h1>
              <a
                 class=\"btn btn-outline-light btn-lg m-2\" data-mdb-ripple-init
                 href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_index");
        yield "\"
                 role=\"button\"
                 rel=\"nofollow\"
                 >Liste Contacts</a
                >
              <a
                 class=\"btn btn-outline-light btn-lg m-2\" data-mdb-ripple-init
                 href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_new");
        yield "\"
                 role=\"button\"
                 >Ajouter un contact</a
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

    // line 265
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
        return "group/index.html.twig";
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
        return array (  541 => 265,  484 => 112,  474 => 105,  464 => 97,  451 => 96,  429 => 18,  406 => 7,  393 => 266,  391 => 265,  368 => 244,  364 => 242,  358 => 238,  342 => 235,  338 => 233,  335 => 232,  312 => 215,  306 => 214,  292 => 202,  287 => 201,  285 => 200,  279 => 197,  274 => 195,  267 => 194,  250 => 193,  242 => 187,  224 => 183,  220 => 182,  216 => 181,  211 => 179,  206 => 177,  199 => 176,  182 => 175,  176 => 171,  174 => 170,  160 => 158,  158 => 96,  137 => 78,  76 => 19,  74 => 18,  60 => 7,  52 => 1,);
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
              <h1 class=\"mb-3\">Bienvenue dans votre répertoire de groupe</h1>
              <a
                 class=\"btn btn-outline-light btn-lg m-2\" data-mdb-ripple-init
                 href=\"{{ path('app_contact_index') }}\"
                 role=\"button\"
                 rel=\"nofollow\"
                 >Liste Contacts</a
                >
              <a
                 class=\"btn btn-outline-light btn-lg m-2\" data-mdb-ripple-init
                 href=\"{{ path('app_contact_new') }}\"
                 role=\"button\"
                 >Ajouter un contact</a
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
<main class=\"mt-5\">
    <div class=\"container\">

        <div class=\"row\">  
            {% if groups %}
                <div class=\"row\">
                    <!-- Liste des groupes -->
                    <div class=\"col-4\">
                        <div class=\"list-group list-group-light\" id=\"list-tab\" role=\"tablist\">
                            {% for group in groups %}
                                <a class=\"list-group-item list-group-item-action {% if loop.first %}active{% endif %} px-3 border-0\"
                                    id=\"list-{{ group.id }}-list\"
                                    data-mdb-list-init
                                    href=\"#list-{{ group.id }}\"
                                    role=\"tab\"
                                    aria-controls=\"list-{{ group.id }}\">
                                    {{ group.name }}
                                     <span class=\"badge rounded-pill badge-success\" onclick=\"window.location.href='/group/{{ group.id }}/edit'\" style=\"cursor: pointer;\">Modifier</span>
                                </a>
                                
                            {% endfor %}
                        </div>
                    </div>

                    <!-- Contenu des groupes -->
                    <div class=\"col-8\">
                        <div class=\"tab-content\" id=\"nav-tabContent\">
                            {% for group in groups %}
                                <div class=\"tab-pane fade {% if loop.first %}show active{% endif %}\" 
                                    id=\"list-{{ group.id }}\" 
                                    role=\"tabpanel\" 
                                    aria-labelledby=\"list-{{ group.id }}-list\">
                                    <div class=\"row\">
                                        <!-- Vérifier si le groupe contient des contacts -->
                                        {% if group.contacts %}
                                            {% for contact in group.contacts %}
                                                <div class=\"col-xl-6 mb-4\">
                                                    <div class=\"card\">
                                                        <div class=\"card-body\">
                                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                                <div class=\"d-flex align-items-center\">
                                                                    <img
                                                                        src=\"https://mdbootstrap.com/img/new/avatars/8.jpg\"
                                                                        alt=\"\"
                                                                        style=\"width: 45px; height: 45px\"
                                                                        class=\"rounded-circle\"
                                                                    />
                                                                    <div class=\"ms-3\">
                                                                        <p class=\"fw-bold mb-1\">{{ contact.firstName }} {{ contact.lastName }}</p>
                                                                        <p class=\"text-muted mb-0\">{{ contact.email }}</p>
                                                                    </div>
                                                                </div>
                                                                <span class=\"badge rounded-pill badge-success\">Active</span>
                                                            </div>
                                                        </div>
                                                        <div class=\"card-footer border-0 bg-body-tertiary p-2 d-flex justify-content-around\">
                                                            <a class=\"btn btn-link m-0 text-reset\" href=\"#\" role=\"button\" data-ripple-color=\"primary\" data-mdb-ripple-init>
                                                                Message<i class=\"fas fa-envelope ms-2\"></i>
                                                            </a>
                                                            <a class=\"btn btn-link m-0 text-reset\" href=\"#\" role=\"button\" data-ripple-color=\"primary\" data-mdb-ripple-init>
                                                                Call<i class=\"fas fa-phone ms-2\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            {% endfor %}
                                        {% else %}
                                            <p>Aucun contact disponible pour ce groupe</p>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            {% else %}
                <p>Aucun groupe disponible</p>
            {% endif %}
        </div>

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
", "group/index.html.twig", "/Users/ahamadougbane/Desktop/Open IT/Master 1/Dev/contacts-manager/templates/group/index.html.twig");
    }
}
