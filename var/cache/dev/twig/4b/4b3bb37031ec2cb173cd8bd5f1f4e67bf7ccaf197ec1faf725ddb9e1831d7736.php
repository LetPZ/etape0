<?php

/* blog/index.html.twig */
class __TwigTemplate_292f90a2ef15c1e5dfafef2fdba11fb6f3e0429b05c8505d466f481e33a42f39 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Salut BlogController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section class=\"articles\">

    <article>
        <h2>Titre de l'article</h2>
        <div class=\"metadata\">Ecrit le 31/01/2019 à 19:00 dans la catégorie Politique</div>
        <div class=\"content\">
            <img src=\"http://placehold.it/350x150\" alt=\"\">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum in ab, sed recusandae odio voluptates.</p>
            <p>Dolorum error doloremque obcaecati illo cum nostrum quam ullam rerum, quia adipisci, qui laborum commodi!</p>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show");
        echo "\" class=\"btn btn-primary\">Lire la suite</a>
        </div>
    </article>
    <article>
        <h2>Titre de l'article</h2>
        <div class=\"metadata\">Ecrit le 31/01/2019 à 19:00 dans la catégorie Politique</div>
        <div class=\"content\">
            <img src=\"http://placehold.it/350x150\" alt=\"\">
            <p>Perspiciatis, placeat. In dolores voluptatibus id iste suscipit accusamus ipsam eaque quaerat nam. Odit, atque!</p>
            <p>Incidunt facilis ea animi voluptates, temporibus alias praesentium esse tempore natus nemo enim quia sit?</p>
            <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show");
        echo "\" class=\"btn btn-primary\">Lire la suite</a>
        </div>
    </article>
    <article>
        <h2>Titre de l'article</h2>
        <div class=\"metadata\">Ecrit le 31/01/2019 à 19:00 dans la catégorie Politique</div>
        <div class=\"content\">
            <img src=\"http://placehold.it/350x150\" alt=\"\">
            <p>Ullam impedit officiis debitis iure? Dolorum perferendis iste nam delectus quibusdam sed accusantium assumenda magnam.</p>
            <p>Molestiae deleniti harum minus, sapiente quasi in rerum. Quibusdam cum molestiae, nulla suscipit impedit consequatur?</p>
            <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show");
        echo "\" class=\"btn btn-primary\">Lire la suite</a>
        </div>
    </article>





</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  96 => 25,  83 => 15,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Salut BlogController!{% endblock %}

{% block body %}
<section class=\"articles\">

    <article>
        <h2>Titre de l'article</h2>
        <div class=\"metadata\">Ecrit le 31/01/2019 à 19:00 dans la catégorie Politique</div>
        <div class=\"content\">
            <img src=\"http://placehold.it/350x150\" alt=\"\">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum in ab, sed recusandae odio voluptates.</p>
            <p>Dolorum error doloremque obcaecati illo cum nostrum quam ullam rerum, quia adipisci, qui laborum commodi!</p>
            <a href=\"{{ path('blog_show') }}\" class=\"btn btn-primary\">Lire la suite</a>
        </div>
    </article>
    <article>
        <h2>Titre de l'article</h2>
        <div class=\"metadata\">Ecrit le 31/01/2019 à 19:00 dans la catégorie Politique</div>
        <div class=\"content\">
            <img src=\"http://placehold.it/350x150\" alt=\"\">
            <p>Perspiciatis, placeat. In dolores voluptatibus id iste suscipit accusamus ipsam eaque quaerat nam. Odit, atque!</p>
            <p>Incidunt facilis ea animi voluptates, temporibus alias praesentium esse tempore natus nemo enim quia sit?</p>
            <a href=\"{{ path('blog_show') }}\" class=\"btn btn-primary\">Lire la suite</a>
        </div>
    </article>
    <article>
        <h2>Titre de l'article</h2>
        <div class=\"metadata\">Ecrit le 31/01/2019 à 19:00 dans la catégorie Politique</div>
        <div class=\"content\">
            <img src=\"http://placehold.it/350x150\" alt=\"\">
            <p>Ullam impedit officiis debitis iure? Dolorum perferendis iste nam delectus quibusdam sed accusantium assumenda magnam.</p>
            <p>Molestiae deleniti harum minus, sapiente quasi in rerum. Quibusdam cum molestiae, nulla suscipit impedit consequatur?</p>
            <a href=\"{{ path('blog_show') }}\" class=\"btn btn-primary\">Lire la suite</a>
        </div>
    </article>





</section>
{% endblock %}
", "blog/index.html.twig", "C:\\Symfony\\etape0\\templates\\blog\\index.html.twig");
    }
}
