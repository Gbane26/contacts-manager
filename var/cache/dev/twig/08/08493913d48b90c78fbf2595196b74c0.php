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

/* contact/list.html.twig */
class __TwigTemplate_0c21b4dbe9e854aff342609fe370f67f extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/list.html.twig"));

        // line 1
        yield "
    <!--Section: Content-->
    <section class=\"text-center\">
      <h4 class=\"mb-5\"><strong>Contacts #</strong></h4>

      <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
          <!-- Contacts table -->
          <table class=\"table align-middle mb-0 bg-white\">
              <thead class=\"bg-light\">
                  <tr>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Groupe</th>
                  <th>Numero</th>
                  <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
              ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 21
            yield "                  <tr><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\"></a>
                      <td>
                          <div class=\"d-flex align-items-center\">
                          <img
                              src=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "photo", [], "any", false, false, false, 25))), "html", null, true);
            yield "\"
                              alt=\"\"
                              style=\"width: 45px; height: 45px\"
                              class=\"rounded-circle\"
                              />
                          <div class=\"ms-3\">
                              <p class=\"fw-bold mb-1\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "firstName", [], "any", false, false, false, 31), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "lastName", [], "any", false, false, false, 31), "html", null, true);
            yield "</p>
                              <p class=\"text-muted mb-0\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                          </div>
                          </div>
                      </td>
                      <td>
                          <p class=\"fw-normal mb-1\">Software engineer</p>
                          <p class=\"text-muted mb-0\">IT department</p>
                      </td>
                      <td>
                          <span class=\"badge badge-success rounded-pill d-inline\">";
            // line 41
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "groupName", [], "any", false, true, false, 41), "name", [], "any", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "groupName", [], "any", false, true, false, 41), "name", [], "any", false, false, false, 41)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "groupName", [], "any", false, true, false, 41), "name", [], "any", false, false, false, 41), "html", null, true)) : ("Aucun groupe associé"));
            yield "</span>
                      </td>
                      <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "phoneNumber", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                      <td>
                        <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"btn btn-link btn-sm btn-rounded\">Edit</a>
                        <a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" class=\"btn btn-link btn-sm btn-rounded\">Details</a>

                          <!-- Delete button with modal trigger -->
                        <button type=\"button\" class=\"btn btn-danger btn-sm btn-rounded\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 49), "html", null, true);
            yield "\">
                            Delete
                        </button>
                        <!-- Delete Confirmation Modal -->
                        <div class=\"modal fade\" id=\"deleteModal";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 53), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 53), "html", null, true);
            yield "\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered\">
                                <div class=\"modal-content\">
                                    <!-- Modal Header -->
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"deleteModalLabel";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 58), "html", null, true);
            yield "\">Confirm Deletion</h5>
                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                    </div>
                                    <!-- Modal Body -->
                                    <div class=\"modal-body\">
                                        Are you sure you want to delete this contact?
                                    </div>
                                    <!-- Modal Footer -->
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                                        <form method=\"post\" action=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 69))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </td>
                  </tr>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            yield "              <tr>
                  <td colspan=\"5\" class=\"text-center\">Aucun contact trouvé.</td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "              </tbody>
          </table>
        </div>
      </div>
     
    </section>
    <!--Section: Content-->

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "contact/list.html.twig";
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
        return array (  187 => 83,  178 => 79,  163 => 69,  159 => 68,  146 => 58,  136 => 53,  129 => 49,  123 => 46,  119 => 45,  114 => 43,  109 => 41,  97 => 32,  91 => 31,  82 => 25,  74 => 21,  69 => 20,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
    <!--Section: Content-->
    <section class=\"text-center\">
      <h4 class=\"mb-5\"><strong>Contacts #</strong></h4>

      <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
          <!-- Contacts table -->
          <table class=\"table align-middle mb-0 bg-white\">
              <thead class=\"bg-light\">
                  <tr>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Groupe</th>
                  <th>Numero</th>
                  <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
              {% for contact in contacts %}
                  <tr><a href=\"{{ path('contact_show', { 'id': contact.id }) }}\"></a>
                      <td>
                          <div class=\"d-flex align-items-center\">
                          <img
                              src=\"{{ asset('uploads/photos/' ~ contact.photo) }}\"
                              alt=\"\"
                              style=\"width: 45px; height: 45px\"
                              class=\"rounded-circle\"
                              />
                          <div class=\"ms-3\">
                              <p class=\"fw-bold mb-1\">{{ contact.firstName }} {{ contact.lastName }}</p>
                              <p class=\"text-muted mb-0\">{{ contact.email }}</p>
                          </div>
                          </div>
                      </td>
                      <td>
                          <p class=\"fw-normal mb-1\">Software engineer</p>
                          <p class=\"text-muted mb-0\">IT department</p>
                      </td>
                      <td>
                          <span class=\"badge badge-success rounded-pill d-inline\">{{ contact.groupName.name ?? 'Aucun groupe associé' }}</span>
                      </td>
                      <td>{{ contact.phoneNumber }}</td>
                      <td>
                        <a href=\"{{ path('contact_edit', { 'id': contact.id }) }}\" class=\"btn btn-link btn-sm btn-rounded\">Edit</a>
                        <a href=\"{{ path('contact_show', { 'id': contact.id }) }}\" class=\"btn btn-link btn-sm btn-rounded\">Details</a>

                          <!-- Delete button with modal trigger -->
                        <button type=\"button\" class=\"btn btn-danger btn-sm btn-rounded\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ contact.id }}\">
                            Delete
                        </button>
                        <!-- Delete Confirmation Modal -->
                        <div class=\"modal fade\" id=\"deleteModal{{ contact.id }}\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel{{ contact.id }}\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered\">
                                <div class=\"modal-content\">
                                    <!-- Modal Header -->
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"deleteModalLabel{{ contact.id }}\">Confirm Deletion</h5>
                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                    </div>
                                    <!-- Modal Body -->
                                    <div class=\"modal-body\">
                                        Are you sure you want to delete this contact?
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
                      </td>
                  </tr>
              {% else %}
              <tr>
                  <td colspan=\"5\" class=\"text-center\">Aucun contact trouvé.</td>
              </tr>
              {% endfor %}
              </tbody>
          </table>
        </div>
      </div>
     
    </section>
    <!--Section: Content-->

", "contact/list.html.twig", "/Users/ahamadougbane/Desktop/Open IT/Master 1/Dev/contacts-manager/templates/contact/list.html.twig");
    }
}
