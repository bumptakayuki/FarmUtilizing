<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_9259623773b0c60e4a3c4f2e15fc9c37c8e3d135e284f331444d6ff00dab45ad extends Twig_Template
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
        echo "    <div class=\"row\">
        <table class=\"table table-striped\">
            <tr>
                <th>
                    タイトル
                </th>
                <th>
                    場所
                </th>
                <th>
                    カテゴリ
                </th>
                <th>
                    削除
                </th>
                <th>
                    編集
                </th>
            </tr>
            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 23
            echo "                <tr>
                    <td><h4><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h4></td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "prefArea", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 28
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                echo ",
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    </td>
                    <td><span class=\"btn btn-success\">
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_delete", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Delete
                            </a>
                        </span>
                    </td>
                    <td>
                        <span class=\"btn btn-success\">
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Edit
                            </a>
                        </span>
                    </td>
                </tr>

            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "                <tr>
                    <td colspan=\"4\">No posts found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </table>
    </div>
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
        return array (  118 => 49,  109 => 45,  97 => 38,  88 => 32,  84 => 30,  75 => 28,  71 => 27,  66 => 25,  60 => 24,  57 => 23,  52 => 22,  31 => 3,  28 => 2,  11 => 1,);
    }
}
