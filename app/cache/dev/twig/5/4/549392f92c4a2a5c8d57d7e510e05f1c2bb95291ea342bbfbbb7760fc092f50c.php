<?php

/* FrontBundle:Default:show.html.twig */
class __TwigTemplate_549392f92c4a2a5c8d57d7e510e05f1c2bb95291ea342bbfbbb7760fc092f50c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::base.show.html.twig", "FrontBundle:Default:show.html.twig", 1);
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
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("client/js/google_map.js"), "html", null, true);
        echo "\"></script>

    <div class=\"container-projects\">
        <div class=\"clearfix hidden-xs\" style=\"width:100%; height:10px;\"></div>
        <div class=\"container\">
            <div class=\"page-header\" id=\"projects\">
                <h1 class=\"text-center text-danger\">PROJECTS<br/><span class=\"fa fa-paint-brush\"></span></h1>
            </div>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"panel panel-default\" style=\"padding: 100px\">
                        <div class=\"panel-body\">
                            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "imagePath", array())), "html", null, true);
        echo "\" class=\"img-responsive\"/>
                            <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h3>
                            <br><br><br>
                            <!-- シェアボタン -->
                            <div id=\"\" class=\"SnsLink\">
                                　　
                                <ul class=\"SnsLink__block\">
                                    <li class=\"SnsLink__item\">
                                        <a class=\"SnsLink__link--facebook\" href=\"http://www.facebook.com/share.php?\">Facebook</a>
                                    </li>
                                    <li class=\"SnsLink__item\">
                                        <a class=\"SnsLink__link--twitter\"
                                           href=\"https://twitter.com/share?url=\">Twitter</a>
                                    </li>
                                    <li class=\"SnsLink__item\">
                                        <a class=\"SnsLink__link--line\" href=\"http://line.me/R/msg/text/?\">LINE</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /シェアボタン -->
                            <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "body", array()), "html", null, true);
        echo "</p>
                            <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "prefArea", array()), "html", null, true);
        echo "</p>
                            <ul class=\"list-unstyled \">
                                ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 40
            echo "                                    <li class=\"btn btn-default\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                            </ul>
                            ";
        // line 44
        echo "
                            <div id=\"google_map\" style=\"width: 600px; height: 600px\"></div>
                            <script>
                                \$(document).ready(function () {
                                    googlemap_init('google_map', '";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "prefArea", array()), "html", null, true);
        echo "');
                                });
                            </script>
                            <br><br><br>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-5\">
                                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("client/images/to_use.png"), "html", null, true);
        echo "\" class=\"img-responsive\"/>
                                    </div>
                                    <div class=\"col-md-5\">
                                        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("client/images/tokengaku.png"), "html", null, true);
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
        return array (  121 => 58,  115 => 55,  105 => 48,  99 => 44,  96 => 42,  87 => 40,  83 => 39,  78 => 37,  74 => 36,  52 => 17,  48 => 16,  31 => 3,  28 => 2,  11 => 1,);
    }
}
