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

/* main/show-view.html.twig */
class __TwigTemplate_3332abf34bf2a270754f05216f9e766595c4dc2c5057440a2def54558eb6c5e5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/show-view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/show-view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/show-view.html.twig", 2);
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

        echo " ";
        
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
        echo "<main class=\"page projects-page\" id=\"movie-item\">
    <section class=\"portfolio-block photography primary-block\" id=\"movie-backdrop\">
        <div class=\"backdrop primary-block\">
        </div>
        <div class=\"row \">
            <img class=\"offset-1 col-md-3 img-fluid image poster\" src=\"\">
            <div class=\"offset-1 col-md-7 synopsis\">
                <!-- Synopsis -->
                <div class=\"container text-center overview\">
                    <div class=\"primary-details\">
                        <h3>Synopsis</h3>
                        <p class=\"overview-content mb-2\"></p>
                    </div>
                    <div class=\"mt-2\">
                        <h3 class=\"mt-2\">Score</h3>
                        <p class=\"votes\"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"offset-1 col-md-3 mt-2 buttons\">
                <div class=\"btn-group dropdown\">
                    <button type=\"button\" id=\"add-to-list\" class=\"btn btn-sm btn-primary add-to-list\">Ajouter à
                        ma liste</button>
                    <button type=\"button\" id=\"add-to-list-dd\"
                        class=\"btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    </div>
                </div>
                <button class=\"btn btn-sm btn-danger\" id=\"like\"><i class=\"far fa-heart\">J'ai aimé ce film !</i></button>
            </div>
        </div>
    </section>
    <section class=\"portfolio-block photography gradient secondary-block\">
        <div class=\"row no-gutters pt-3\">
            <div class=\"offset-1 col-md-5 container-fluid text-wrap details overview\">
                <div class=\"details-content\">
                    <h4 class=\"text-left\"><ins>Détails</ins></h4>
                    <li class=\"mb-3\">Première diffusion : <span class=\"details-li-content first-episode\"></span></li>
                    <li class=\"mb-3\">Dernière diffusion : <span class=\"details-li-content last-episode\"></span></li>
                    <li class=\"mb-3\">Production : <span class=\"details-li-content in-production\"></span></li>
                    <li class=\"mb-3\">Nombre de saisons : <span class=\"details-li-content number-seasons\"></span></li>
                    <li class=\"mb-3\">Nombre d'épisodes : <span class=\"details-li-content number-episodes\"></span></li>
                    <li class=\"mb-3\">Genres : <span class=\"details-li-content genres\"></span></li>
                </div>
            </div>
            <div class=\"col-md-5 container-fluid border-bottom details\">
                <!-- Casting -->
                <ul class=\"nav nav-pills offset-md-5 offset-3\" id=\"pills-tab\" role=\"tablist\">
                    <li class=\"nav-item nav-item-left\">
                        <a class=\"nav-link active\" id=\"pills-cast-tab\" data-toggle=\"pill\" href=\"#pills-cast\" role=\"tab\"
                            aria-controls=\"pills-cast\" aria-selected=\"true\">Casting</a>
                    </li>
                    <li class=\"nav-item nav-item-right\">
                        <a class=\"nav-link\" id=\"pills-crew-tab\" data-toggle=\"pill\" href=\"#pills-crew\" role=\"tab\"
                            aria-controls=\"pills-crew\" aria-selected=\"false\">Equipe</a>
                    </li>
                </ul>
                <div class=\"tab-content\" id=\"pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"pills-cast\" role=\"tabpanel\"
                        aria-labelledby=\"pills-cast-tab\">
                        <p class=\"list-group-cast\"></p>
                    </div>
                    <div class=\"tab-pane fade\" id=\"pills-crew\" role=\"tabpanel\" aria-labelledby=\"pills-crew-tab\">
                        <p class=\"list-group-crew\"></p>
                    </div>
                </div>
                <!-- Casting -->
            </div>
        </div>
        </div>
    </section>
    <section class=\"portfolio-block photography primary-block\" id=\"movie-backdrop\">
        <div class=\"backdrop primary-block\">
        </div>
        <div class=\"row \">
            <img class=\"offset-1 col-md-3 img-fluid image poster\" src=\"\">
            <div class=\"offset-1 col-md-7 synopsis\">
                <!-- <!-- Commentaires / Medias --> -->
                <div class=\"container text-center overview\">
                    <h3>Synopsis</h3>
                    <p class=\"overview-content\"></p>
                    <h3>Ratings</h3>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"offset-1 col-md-3 mt-2 buttons\">
                <div class=\"btn-group dropdown\">
                    <button type=\"button\" id=\"add-to-list\" class=\"btn btn-sm btn-primary add-to-list\">Ajouter à
                        ma liste</button>
                    <button type=\"button\" id=\"add-to-list-dd\"
                        class=\"btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    </div>
                </div>
                <button class=\"btn btn-sm btn-danger\" id=\"like\"><i class=\"far fa-heart\">J'ai aimé ce film !</i></button>
            </div>
        </div>
    </section>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "<script>
    displayShow();
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/show-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 126,  236 => 125,  108 => 6,  98 => 5,  80 => 4,  61 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# pages/show-view.html.twig #}
{% extends \"base.html.twig\" %}
{% block title %} {% endblock %}
{% block stylesheets %}{% endblock %}
{% block body %}
<main class=\"page projects-page\" id=\"movie-item\">
    <section class=\"portfolio-block photography primary-block\" id=\"movie-backdrop\">
        <div class=\"backdrop primary-block\">
        </div>
        <div class=\"row \">
            <img class=\"offset-1 col-md-3 img-fluid image poster\" src=\"\">
            <div class=\"offset-1 col-md-7 synopsis\">
                <!-- Synopsis -->
                <div class=\"container text-center overview\">
                    <div class=\"primary-details\">
                        <h3>Synopsis</h3>
                        <p class=\"overview-content mb-2\"></p>
                    </div>
                    <div class=\"mt-2\">
                        <h3 class=\"mt-2\">Score</h3>
                        <p class=\"votes\"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"offset-1 col-md-3 mt-2 buttons\">
                <div class=\"btn-group dropdown\">
                    <button type=\"button\" id=\"add-to-list\" class=\"btn btn-sm btn-primary add-to-list\">Ajouter à
                        ma liste</button>
                    <button type=\"button\" id=\"add-to-list-dd\"
                        class=\"btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    </div>
                </div>
                <button class=\"btn btn-sm btn-danger\" id=\"like\"><i class=\"far fa-heart\">J'ai aimé ce film !</i></button>
            </div>
        </div>
    </section>
    <section class=\"portfolio-block photography gradient secondary-block\">
        <div class=\"row no-gutters pt-3\">
            <div class=\"offset-1 col-md-5 container-fluid text-wrap details overview\">
                <div class=\"details-content\">
                    <h4 class=\"text-left\"><ins>Détails</ins></h4>
                    <li class=\"mb-3\">Première diffusion : <span class=\"details-li-content first-episode\"></span></li>
                    <li class=\"mb-3\">Dernière diffusion : <span class=\"details-li-content last-episode\"></span></li>
                    <li class=\"mb-3\">Production : <span class=\"details-li-content in-production\"></span></li>
                    <li class=\"mb-3\">Nombre de saisons : <span class=\"details-li-content number-seasons\"></span></li>
                    <li class=\"mb-3\">Nombre d'épisodes : <span class=\"details-li-content number-episodes\"></span></li>
                    <li class=\"mb-3\">Genres : <span class=\"details-li-content genres\"></span></li>
                </div>
            </div>
            <div class=\"col-md-5 container-fluid border-bottom details\">
                <!-- Casting -->
                <ul class=\"nav nav-pills offset-md-5 offset-3\" id=\"pills-tab\" role=\"tablist\">
                    <li class=\"nav-item nav-item-left\">
                        <a class=\"nav-link active\" id=\"pills-cast-tab\" data-toggle=\"pill\" href=\"#pills-cast\" role=\"tab\"
                            aria-controls=\"pills-cast\" aria-selected=\"true\">Casting</a>
                    </li>
                    <li class=\"nav-item nav-item-right\">
                        <a class=\"nav-link\" id=\"pills-crew-tab\" data-toggle=\"pill\" href=\"#pills-crew\" role=\"tab\"
                            aria-controls=\"pills-crew\" aria-selected=\"false\">Equipe</a>
                    </li>
                </ul>
                <div class=\"tab-content\" id=\"pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"pills-cast\" role=\"tabpanel\"
                        aria-labelledby=\"pills-cast-tab\">
                        <p class=\"list-group-cast\"></p>
                    </div>
                    <div class=\"tab-pane fade\" id=\"pills-crew\" role=\"tabpanel\" aria-labelledby=\"pills-crew-tab\">
                        <p class=\"list-group-crew\"></p>
                    </div>
                </div>
                <!-- Casting -->
            </div>
        </div>
        </div>
    </section>
    <section class=\"portfolio-block photography primary-block\" id=\"movie-backdrop\">
        <div class=\"backdrop primary-block\">
        </div>
        <div class=\"row \">
            <img class=\"offset-1 col-md-3 img-fluid image poster\" src=\"\">
            <div class=\"offset-1 col-md-7 synopsis\">
                <!-- <!-- Commentaires / Medias --> -->
                <div class=\"container text-center overview\">
                    <h3>Synopsis</h3>
                    <p class=\"overview-content\"></p>
                    <h3>Ratings</h3>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"offset-1 col-md-3 mt-2 buttons\">
                <div class=\"btn-group dropdown\">
                    <button type=\"button\" id=\"add-to-list\" class=\"btn btn-sm btn-primary add-to-list\">Ajouter à
                        ma liste</button>
                    <button type=\"button\" id=\"add-to-list-dd\"
                        class=\"btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    </div>
                </div>
                <button class=\"btn btn-sm btn-danger\" id=\"like\"><i class=\"far fa-heart\">J'ai aimé ce film !</i></button>
            </div>
        </div>
    </section>
</main>
{% endblock %}
{% block javascripts %}
<script>
    displayShow();
</script>
{% endblock %}", "main/show-view.html.twig", "C:\\Users\\Alex\\Documents\\DEV\\movilist\\templates\\main\\show-view.html.twig");
    }
}
