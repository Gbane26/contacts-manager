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
      <div data-mdb-input-init class=\"form-outline mb-4\">
  <input type=\"text\" class=\"form-control\" id=\"datatable-search-input\" />
  <label class=\"form-label\" for=\"datatable-search-input\">Search</label>
</div>
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 25
            yield "                  <tr><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\"></a>
                      <td>
                          <div class=\"d-flex align-items-center\">
                          <img
                              src=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "photo", [], "any", false, false, false, 29))), "html", null, true);
            yield "\"
                              alt=\"\"
                              style=\"width: 45px; height: 45px\"
                              class=\"rounded-circle\"
                              />
                          <div class=\"ms-3\">
                              <p class=\"fw-bold mb-1\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "firstName", [], "any", false, false, false, 35), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "lastName", [], "any", false, false, false, 35), "html", null, true);
            yield "</p>
                              <p class=\"text-muted mb-0\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 36), "html", null, true);
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
            // line 45
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "groupName", [], "any", false, true, false, 45), "name", [], "any", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "groupName", [], "any", false, true, false, 45), "name", [], "any", false, false, false, 45)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "groupName", [], "any", false, true, false, 45), "name", [], "any", false, false, false, 45), "html", null, true)) : ("Aucun groupe associé"));
            yield "</span>
                      </td>
                      <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "phoneNumber", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                      <td>
                        <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\" class=\"btn btn-link btn-sm btn-rounded\">Edit</a>
                        <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" class=\"btn btn-link btn-sm btn-rounded\">Details</a>

                          <!-- Delete button with modal trigger -->
                        <button type=\"button\" class=\"btn btn-danger btn-sm btn-rounded\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 53), "html", null, true);
            yield "\">
                            Delete
                        </button>
                        <!-- Delete Confirmation Modal -->
                        <div class=\"modal fade\" id=\"deleteModal";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-dialog-centered\">
                                <div class=\"modal-content\">
                                    <!-- Modal Header -->
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"deleteModalLabel";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 62), "html", null, true);
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
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            yield "\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 73))), "html", null, true);
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
            // line 83
            yield "              <tr>
                  <td colspan=\"5\" class=\"text-center\">Aucun contact trouvé.</td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
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
        return array (  191 => 87,  182 => 83,  167 => 73,  163 => 72,  150 => 62,  140 => 57,  133 => 53,  127 => 50,  123 => 49,  118 => 47,  113 => 45,  101 => 36,  95 => 35,  86 => 29,  78 => 25,  73 => 24,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
    <!--Section: Content-->
    <section class=\"text-center\">
      <h4 class=\"mb-5\"><strong>Contacts #</strong></h4>

      <div class=\"container mt-5\">
      <div data-mdb-input-init class=\"form-outline mb-4\">
  <input type=\"text\" class=\"form-control\" id=\"datatable-search-input\" />
  <label class=\"form-label\" for=\"datatable-search-input\">Search</label>
</div>
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
