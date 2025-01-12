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
        yield "<section class=\"text-center\">
                <h4 class=\"mb-5\"><strong>Contacts</strong></h4>
    
                <div class=\"row justify-content-center\">
                    <!-- Contacts table -->
                    <table id=\"datatable\" class=\"table align-middle mb-0 bg-white\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th>Name</th>
                                <th>Titre</th>
                                <th>Groupe</th>
                                <th>Numero</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 18
            yield "                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "photo", [], "any", false, false, false, 21))), "html", null, true);
            yield "\" alt=\"\" style=\"width: 45px; height: 45px\" class=\"rounded-circle\" />
                                            <div class=\"ms-3\">
                                                <p class=\"fw-bold mb-1\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "firstName", [], "any", false, false, false, 23), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "lastName", [], "any", false, false, false, 23), "html", null, true);
            yield "</p>
                                                <p class=\"text-muted mb-0\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 24), "html", null, true);
            yield "</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class=\"fw-normal mb-1\">";
            // line 29
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "fieldsCustom", [], "any", false, true, false, 29), 0, [], "array", false, true, false, 29), "description", [], "any", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "fieldsCustom", [], "any", false, true, false, 29), 0, [], "array", false, true, false, 29), "description", [], "any", false, false, false, 29)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "fieldsCustom", [], "any", false, true, false, 29), 0, [], "array", false, true, false, 29), "description", [], "any", false, false, false, 29), "html", null, true)) : ("Néant"));
            yield "</p>
                                        <p class=\"text-muted mb-0\">";
            // line 30
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "fieldsCustom", [], "any", false, true, false, 30), 1, [], "array", false, true, false, 30), "description", [], "any", true, true, false, 30) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "fieldsCustom", [], "any", false, true, false, 30), 1, [], "array", false, true, false, 30), "description", [], "any", false, false, false, 30)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "fieldsCustom", [], "any", false, true, false, 30), 1, [], "array", false, true, false, 30), "description", [], "any", false, false, false, 30), "html", null, true)) : ("Néant"));
            yield "</p>
                                    </td>
                                    <td>
                                        <span class=\"badge badge-success rounded-pill d-inline\">";
            // line 33
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "groupName", [], "any", false, true, false, 33), "name", [], "any", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "groupName", [], "any", false, true, false, 33), "name", [], "any", false, false, false, 33)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "groupName", [], "any", false, true, false, 33), "name", [], "any", false, false, false, 33), "html", null, true)) : ("Aucun groupe associé"));
            yield "</span>
                                    </td>
                                    <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "phoneNumber", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                                    <td>
                                        <a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"btn btn-link btn-sm btn-rounded\">Edit</a>
                                        <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"btn btn-link btn-sm btn-rounded\">Details</a>

                                        <!-- Delete button with modal trigger -->
                                        <button type=\"button\" class=\"btn btn-danger btn-sm btn-rounded\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "\">
                                            Delete
                                        </button>
                                        <!-- Delete Confirmation Modal -->
                                        <div class=\"modal fade\" id=\"deleteModal";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield "\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog modal-dialog-centered\">
                                                <div class=\"modal-content\">
                                                    <!-- Modal Header -->
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\" id=\"deleteModalLabel";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 50), "html", null, true);
            yield "\">Confirmation</h5>
                                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                    </div>
                                                    <!-- Modal Body -->
                                                    <div class=\"modal-body\">
                                                        Êtes-vous sûr de vouloir supprimer ce contact ?
                                                    </div>
                                                    <!-- Modal Footer -->
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                                                        <form method=\"post\" action=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 61))), "html", null, true);
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
            // line 71
            yield "                                <tr>
                                    <td colspan=\"5\" class=\"text-center\">Aucun contact trouvé.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "                        </tbody>
                    </table>
                </div>
            </section>";
        
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
        return array (  183 => 75,  174 => 71,  159 => 61,  155 => 60,  142 => 50,  132 => 45,  125 => 41,  119 => 38,  115 => 37,  110 => 35,  105 => 33,  99 => 30,  95 => 29,  87 => 24,  81 => 23,  76 => 21,  71 => 18,  66 => 17,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"text-center\">
                <h4 class=\"mb-5\"><strong>Contacts</strong></h4>
    
                <div class=\"row justify-content-center\">
                    <!-- Contacts table -->
                    <table id=\"datatable\" class=\"table align-middle mb-0 bg-white\">
                        <thead class=\"bg-light\">
                            <tr>
                                <th>Name</th>
                                <th>Titre</th>
                                <th>Groupe</th>
                                <th>Numero</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for contact in contacts %}
                                <tr>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"{{ asset('uploads/photos/' ~ contact.photo) }}\" alt=\"\" style=\"width: 45px; height: 45px\" class=\"rounded-circle\" />
                                            <div class=\"ms-3\">
                                                <p class=\"fw-bold mb-1\">{{ contact.firstName }} {{ contact.lastName }}</p>
                                                <p class=\"text-muted mb-0\">{{ contact.email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class=\"fw-normal mb-1\">{{ contact.fieldsCustom[0].description ?? 'Néant' }}</p>
                                        <p class=\"text-muted mb-0\">{{ contact.fieldsCustom[1].description ?? 'Néant' }}</p>
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
                                                        <h5 class=\"modal-title\" id=\"deleteModalLabel{{ contact.id }}\">Confirmation</h5>
                                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                    </div>
                                                    <!-- Modal Body -->
                                                    <div class=\"modal-body\">
                                                        Êtes-vous sûr de vouloir supprimer ce contact ?
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
            </section>", "contact/list.html.twig", "/Users/ahamadougbane/Desktop/Open IT/Master 1/Dev/contacts-manager/templates/contact/list.html.twig");
    }
}
