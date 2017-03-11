<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_4b4284b0803f30c9f904a1c4964572fabe7668618b0a54012e975e53f8e3454c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::base.html.twig", "AdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row\">
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "        <div class=\"col-md-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["post"], "imagePath", array())), "html", null, true);
            echo "\" class=\"img-responsive\"/>
                    <h3><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h3>
                    ";
            // line 11
            echo "                    ";
            // line 12
            echo "                        ";
            // line 13
            echo "                             ";
            // line 14
            echo "                             ";
            // line 15
            echo "                            ";
            // line 16
            echo "                        ";
            // line 17
            echo "                    ";
            // line 18
            echo "                    <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "prefArea", array()), "html", null, true);
            echo "</p>
                    ";
            // line 20
            echo "                    <ul class=\"list-unstyled \">
                        ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 22
                echo "                            <li class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                    </ul>

                    <span class=\"btn btn-success\"><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_delete", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Delete</span></a>
                    <span class=\"btn btn-success\"><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Edit</a></span>
                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "        <tr>
            <td colspan=\"4\">No posts found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  107 => 32,  97 => 27,  93 => 26,  89 => 24,  80 => 22,  76 => 21,  73 => 20,  68 => 18,  66 => 17,  64 => 16,  62 => 15,  60 => 14,  58 => 13,  56 => 12,  54 => 11,  48 => 9,  44 => 8,  39 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
