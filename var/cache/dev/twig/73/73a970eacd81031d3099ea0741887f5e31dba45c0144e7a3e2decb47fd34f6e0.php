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

/* main/user-view.html.twig */
class __TwigTemplate_cc0bf197db9d7026fa942193147fa988e45c51d3907b6781d2a169ee64ad082a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/user-view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/user-view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/user-view.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nom Utilisateur ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<main class=\"page projects-page\">
    <section class=\"portfolio-block projects-with-sidebar\">
        <div class=\"row\">
            <div class=\"offset-lg-1 col-lg-1 col-3\">
                <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                    <a class=\"nav-link active\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"#v-pills-profile\"
                        role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"true\">Profil</a>
                    <a class=\"nav-link\" id=\"v-pills-my-lists-tab\" data-toggle=\"pill\" href=\"#v-pills-my-lists\"
                        role=\"tab\" aria-controls=\"v-pills-my-lists\" aria-selected=\"false\">Mes Listes</a>
                    <a class=\"nav-link\" id=\"v-pills-activity-tab\" data-toggle=\"pill\" href=\"#v-pills-activity\"
                        role=\"tab\" aria-controls=\"v-pills-activity\" aria-selected=\"false\">Activité</a>
                    <a class=\"nav-link\" id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"#v-pills-settings\"
                        role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Paramètres</a>
                </div>
            </div>
            <div class=\"col-9\">
                <div class=\"tab-content\" id=\"v-pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"v-pills-profile\" role=\"tabpanel\"
                        aria-labelledby=\"v-pills-profile-tab\">
                        <h6>Ici se trouvera le profil de l'utilisateur</h6>
                        <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui
                            magna. Ad
                            proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat
                            velit
                            nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor.
                            Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-my-lists\" role=\"tabpanel\"
                        aria-labelledby=\"v-pills-my-lists-tab\">
                        <h6>Ici se trouvera les listes crées par l'utilisateur</h6>
                        <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui
                            magna. Ad
                            proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat
                            velit
                            nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor.
                            Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-activity\" role=\"tabpanel\"
                        aria-labelledby=\"v-pills-activity-tab\">
                        <h6>Ici se trouvera l'activité de l'utilisateur (likes, messages forum...)</h6>
                        <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui
                            magna. Ad
                            proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat
                            velit
                            nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor.
                            Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-settings\" role=\"tabpanel\"
                        aria-labelledby=\"v-pills-settings-tab\">
                        <h6>Ici se trouvera les paramètres (edition profils,</h6>
                        <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui
                            magna. Ad
                            proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat
                            velit
                            nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor.
                            Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/user-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 70,  108 => 6,  98 => 5,  80 => 4,  61 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# pages/discover.html.twig #}
{% extends \"base.html.twig\" %}
{% block title %}Nom Utilisateur {% endblock %}
{% block stylesheets %}{% endblock %}
{% block body %}
<main class=\"page projects-page\">
    <section class=\"portfolio-block projects-with-sidebar\">
        <div class=\"row\">
            <div class=\"offset-lg-1 col-lg-1 col-3\">
                <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                    <a class=\"nav-link active\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"#v-pills-profile\"
                        role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"true\">Profil</a>
                    <a class=\"nav-link\" id=\"v-pills-my-lists-tab\" data-toggle=\"pill\" href=\"#v-pills-my-lists\"
                        role=\"tab\" aria-controls=\"v-pills-my-lists\" aria-selected=\"false\">Mes Listes</a>
                    <a class=\"nav-link\" id=\"v-pills-activity-tab\" data-toggle=\"pill\" href=\"#v-pills-activity\"
                        role=\"tab\" aria-controls=\"v-pills-activity\" aria-selected=\"false\">Activité</a>
                    <a class=\"nav-link\" id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"#v-pills-settings\"
                        role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Paramètres</a>
                </div>
            </div>
            <div class=\"col-9\">
                <div class=\"tab-content\" id=\"v-pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"v-pills-profile\" role=\"tabpanel\"
                        aria-labelledby=\"v-pills-profile-tab\">
                        <h6>Ici se trouvera le profil de l'utilisateur</h6>
                        <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui
                            magna. Ad
                            proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat
                            velit
                            nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor.
                            Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-my-lists\" role=\"tabpanel\"
                        aria-labelledby=\"v-pills-my-lists-tab\">
                        <h6>Ici se trouvera les listes crées par l'utilisateur</h6>
                        <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui
                            magna. Ad
                            proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat
                            velit
                            nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor.
                            Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-activity\" role=\"tabpanel\"
                        aria-labelledby=\"v-pills-activity-tab\">
                        <h6>Ici se trouvera l'activité de l'utilisateur (likes, messages forum...)</h6>
                        <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui
                            magna. Ad
                            proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat
                            velit
                            nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor.
                            Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                    </div>
                    <div class=\"tab-pane fade\" id=\"v-pills-settings\" role=\"tabpanel\"
                        aria-labelledby=\"v-pills-settings-tab\">
                        <h6>Ici se trouvera les paramètres (edition profils,</h6>
                        <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui
                            magna. Ad
                            proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat
                            velit
                            nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor.
                            Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
{% endblock %}
{% block javascripts %}{% endblock %}", "main/user-view.html.twig", "C:\\Users\\Alex\\Documents\\DEV\\movilist\\templates\\main\\user-view.html.twig");
    }
}
