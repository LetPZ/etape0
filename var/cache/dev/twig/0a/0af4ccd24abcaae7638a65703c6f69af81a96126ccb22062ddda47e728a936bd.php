<?php

/* blog/show.html.twig */
class __TwigTemplate_b08d91964a8515c845152547add9ae1260d10044837beaf8c4a08c7af1b1acfc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <article>
        <h2>Titre de l'article</h2>
        <div class=\"metadata\">Ecrit le 31/01/2019 à 19:00 dans la catégorie Politique</div>
        <div class=\"content\">

            <img src=\"http://placehold.it/350x150\" alt=\"\">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum in ab, sed recusandae odio voluptates.</p>
                <p>Dolorum error doloremque obcaecati illo cum nostrum quam ullam rerum, quia adipisci, qui laborum commodi!</p>

                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto culpa deserunt doloremque
                    ea eligendi est expedita explicabo fuga id illo impedit magni,
                    necessitatibus, nemo officia omnis perspiciatis quasi qui quisquam repudiandae similique soluta tempora
                    tempore, unde vel vero voluptatem. Dolorem doloribus fugit pariatur quo voluptate? At magnam reiciendis veniam.</p>
                <p>
                    Aliquam, aperiam at aut autem consequatur deleniti dignissimos dolor dolore eum exercitationem explicabo fugit
                    harum ipsum iste itaque labore maxime minima molestiae molestias nam nihil non, omnis placeat quibusdam quis ratione
                    reprehenderit repudiandae suscipit tempora tenetur vel vitae voluptas voluptatum. Aliquam atque aut, culpa cum dolor
                    magnam nisi officia tempore.</p>



        </div>
    </article>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <article>
        <h2>Titre de l'article</h2>
        <div class=\"metadata\">Ecrit le 31/01/2019 à 19:00 dans la catégorie Politique</div>
        <div class=\"content\">

            <img src=\"http://placehold.it/350x150\" alt=\"\">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum in ab, sed recusandae odio voluptates.</p>
                <p>Dolorum error doloremque obcaecati illo cum nostrum quam ullam rerum, quia adipisci, qui laborum commodi!</p>

                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto culpa deserunt doloremque
                    ea eligendi est expedita explicabo fuga id illo impedit magni,
                    necessitatibus, nemo officia omnis perspiciatis quasi qui quisquam repudiandae similique soluta tempora
                    tempore, unde vel vero voluptatem. Dolorem doloribus fugit pariatur quo voluptate? At magnam reiciendis veniam.</p>
                <p>
                    Aliquam, aperiam at aut autem consequatur deleniti dignissimos dolor dolore eum exercitationem explicabo fugit
                    harum ipsum iste itaque labore maxime minima molestiae molestias nam nihil non, omnis placeat quibusdam quis ratione
                    reprehenderit repudiandae suscipit tempora tenetur vel vitae voluptas voluptatum. Aliquam atque aut, culpa cum dolor
                    magnam nisi officia tempore.</p>



        </div>
    </article>

{% endblock %}", "blog/show.html.twig", "C:\\Symfony\\etape0\\templates\\blog\\show.html.twig");
    }
}
