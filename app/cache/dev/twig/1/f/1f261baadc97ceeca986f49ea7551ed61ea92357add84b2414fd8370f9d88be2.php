<?php

/* FrontBundle:Default:search.html.twig */
class __TwigTemplate_1f261baadc97ceeca986f49ea7551ed61ea92357add84b2414fd8370f9d88be2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::base.show.html.twig", "FrontBundle:Default:search.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::base.show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <script>
        \$('#myModal').on('shown.bs.modal', function () {
            \$('#myInput').focus()
        })
    </script>

    <div class=\"row\">
        <div class=\"col-md-4\">
        </div>
        <div class=\"col-md-4\">
            <!-- Button trigger modal -->
            <br>
            <button type=\"button\" class=\"btn btn-info btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#myModal\">
                絞り込む
            </button>
            <br>
            <br>

            <!-- Modal -->
            <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                        aria-hidden=\"true\">&times;</span></button>
                            <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
                        </div>
                        <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("blog_search");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>

                            <div class=\"modal-body\">
                                ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'errors');
        echo "
                                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 41
        echo "                                ";
        // line 42
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pref_area", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 44
        echo "                                ";
        // line 45
        echo "
                                ";
        // line 47
        echo "
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                <input type=\"submit\" value=\"Search\" class=\"btn btn-default btn-primary\"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class=\"col-md-4\">
            </div>
        </div>
    </div>

    <div class=\"container-projects\">
        <div class=\"clearfix hidden-xs\" style=\"width:100%; height:10px;\"></div>
        <div class=\"container\">
            <div class=\"page-header\" id=\"projects\">
                <h1 class=\"text-center text-danger\">PROJECTS<br/><span class=\"fa fa-paint-brush\"></span></h1>
            </div>


            <div class=\"row\">
                ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 74
            echo "                    <div class=\"col-md-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["post"], "imagePath", array())), "html", null, true);
            echo "\" class=\"img-responsive\"/>
                                <h3><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h3>

                                <hr>
                                <p>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "prefArea", array()), "html", null, true);
            echo "</p>
                                ";
            // line 83
            echo "                                <ul class=\"list-unstyled \">
                                    ";
            // line 84
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 85
                echo "                                        <li class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                                </ul>
                            </div>
                        </div>

                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 93
            echo "                    <tr>
                        <td colspan=\"4\">No posts found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "            </div>


        </div>

        <div class=\"row\">
            <div class=\"col-md-4\">
            </div>
            <div class=\"col-md-4\">
                <nav>
                    <ul class=\"pagination\" style=\"margin: 0 60px\">
                        <li>
                            <a href=\"#\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
                        </li>
                        <li><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li>
                            <a href=\"#\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class=\"col-md-4\">
            </div>
        </div>
        <div class=\"clearfix hidden-xs\" style=\"width:100%; height:50px;\"></div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 97,  185 => 93,  175 => 87,  166 => 85,  162 => 84,  159 => 83,  155 => 81,  147 => 78,  143 => 77,  138 => 74,  133 => 73,  105 => 47,  102 => 45,  100 => 44,  95 => 42,  93 => 41,  89 => 39,  85 => 38,  80 => 36,  76 => 35,  72 => 34,  68 => 33,  60 => 30,  31 => 3,  28 => 2,  11 => 1,);
    }
}
