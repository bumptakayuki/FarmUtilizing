<?php

/* FrontBundle:Default:show.html.twig */
class __TwigTemplate_68d11e128640f7506e862d54e18bc77d4ea1635e0f4f3b05c6a4673836027066 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::base.html.twig", "FrontBundle:Default:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/google_map.js"), "html", null, true);
        echo "\"></script>

    <div class=\"container-projects\">
        <div class=\"clearfix hidden-xs\" style=\"width:100%; height:10px;\"></div>
        <div class=\"container\">
            <div class=\"page-header\" id=\"projects\">
                <h1 class=\"text-center text-danger\">PROJECTS<br/><span class=\"fa fa-paint-brush\"></span></h1>
            </div>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "imagePath", array())), "html", null, true);
        echo "\" class=\"img-responsive\"/>
                            <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h3>
                            <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "body", array()), "html", null, true);
        echo "</p>
                            <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "prefArea", array()), "html", null, true);
        echo "</p>
                            <ul class=\"list-unstyled \">
                                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 22
            echo "                                    <li class=\"btn btn-default\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                            </ul>
                            ";
        // line 26
        echo "
                            <div id=\"google_map\" style=\"width: 600px; height: 600px\"></div>
                            <script>
                                \$(document).ready(function () {
                                    googlemap_init('google_map', '";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "prefArea", array()), "html", null, true);
        echo "');
                                });
                            </script>
                            <br><br><br>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-5\">
                                        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/to_use.png"), "html", null, true);
        echo "\" class=\"img-responsive\"/>
                                    </div>
                                    <div class=\"col-md-5\">
                                        <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/tokengaku.png"), "html", null, true);
        echo "\" class=\"img-responsive\"/>
                                    </div>
                                    <div class=\"col-md-2\">
                                    </div>

                                </div>
                            </div>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"clearfix hidden-xs\" style=\"width:100%; height:50px;\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 40,  97 => 37,  87 => 30,  81 => 26,  78 => 24,  69 => 22,  65 => 21,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  31 => 3,  28 => 2,  11 => 1,);
    }
}
