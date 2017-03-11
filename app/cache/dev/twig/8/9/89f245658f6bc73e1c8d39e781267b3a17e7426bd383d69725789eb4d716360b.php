<?php

/* DreamMarketClientBundle:Default:index.html.twig */
class __TwigTemplate_89f245658f6bc73e1c8d39e781267b3a17e7426bd383d69725789eb4d716360b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DreamMarketClientBundle::base.html.twig", "DreamMarketClientBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DreamMarketClientBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"container-about\">
        <div class=\"container\">
            <div class=\"page-header\" id=\"about\">
                <h1 class=\"text-center text-info\">ABOUT<br/><span class=\"fa fa-user\"></span></h1>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 text-justify\">
                    地方で余っている土地を発掘するサイトです<br>
                    「やりたいことがある！」「でもやり方は分からないし、一緒にやる人も必要…」<br>
                    <br>

                </div>
                <div class=\"col-md-6 text-justify\">
                    新規に開設する農園情報を希望される方は、ぜひ、農園情報希望フォームよりご登録ください！優先的にご案内いたします。
                </div>
            </div>
        </div>
    </div>

    <div class=\"clearfix hidden-xs\" style=\"width:100%; height:60px;\"></div>

    <div class=\"container-projects\">
        <div class=\"clearfix hidden-xs\" style=\"width:100%; height:10px;\"></div>
        <div class=\"container\">
            <div class=\"page-header\" id=\"projects\">
                <h1 class=\"text-center text-danger\">List<br/><span class=\"fa fa-paint-brush\"></span></h1>
            </div>

            <div class=\"row\">
                ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 33
            echo "                    <div class=\"col-md-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["post"], "imagePath", array())), "html", null, true);
            echo "\" class=\"img-responsive\"/>
                                <h3><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h3>
                                <p>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "currentMember", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "limitMember", array()), "html", null, true);
            echo "人</p>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-danger progress-bar-striped active\"
                                         role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\"
                                         style=\"width: ";
            // line 42
            echo twig_escape_filter($this->env, (($this->getAttribute($context["post"], "currentMember", array()) / $this->getAttribute($context["post"], "limitMember", array())) * 100), "html", null, true);
            echo "%\">
                                        <span class=\"sr-only\">30% Complete (danger)</span>
                                    </div>
                                </div>
                                <p>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "prefArea", array()), "html", null, true);
            echo "</p>
                                ";
            // line 48
            echo "                                <ul class=\"list-unstyled \">
                                ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 50
                echo "                                        <li class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                </ul>

                                ";
            // line 55
            echo "                                ";
            // line 56
            echo "                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "                    <tr>
                        <td colspan=\"4\">No posts found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </div>

        </div>
        <div class=\"clearfix hidden-xs\" style=\"width:100%; height:50px;\"></div>
    </div>

    <div class=\"container-gallery\">
        <div class=\"container\">
            <div class=\"page-header\" id=\"gallery\">
                <h1 class=\"text-center text-success\">CATRGORY<br/><span class=\"fa fa-camera\"></span></h1>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <ul class=\"list-unstyled text-center\">
                        <li class=\"filter btn btn-success\" data-filter=\"all\">ALL</li>
                        <li class=\"filter btn btn-success\" data-filter=\".graphic\">新着</li>
                        <li class=\"filter btn btn-success\" data-filter=\".print\">人気</li>
                        <li class=\"filter btn btn-success\" data-filter=\".webdesign\">お気に入り</li>
                    </ul>
                </div>
                ";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 85
            echo "                    <div class=\"mix graphic col-md-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <img src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["post"], "imagePath", array())), "html", null, true);
            echo "\" class=\"img-responsive\"/>
                                <h3><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h3>
                                <p>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "currentMember", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "limitMember", array()), "html", null, true);
            echo "人</p>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-danger progress-bar-striped active\"
                                         role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\"
                                         style=\"width: ";
            // line 94
            echo twig_escape_filter($this->env, (($this->getAttribute($context["post"], "currentMember", array()) / $this->getAttribute($context["post"], "limitMember", array())) * 100), "html", null, true);
            echo "%\">
                                        <span class=\"sr-only\">30% Complete (danger)</span>
                                    </div>
                                </div>
                                <p>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "prefArea", array()), "html", null, true);
            echo "</p>
                                ";
            // line 100
            echo "                                <ul class=\"list-unstyled \">
                                    ";
            // line 101
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 102
                echo "                                        <li class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"mix print col-md-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <img src=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["post"], "imagePath", array())), "html", null, true);
            echo "\" class=\"img-responsive\"/>
                                <h3><a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h3>
                                <p>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "currentMember", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "limitMember", array()), "html", null, true);
            echo "人</p>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-danger progress-bar-striped active\"
                                         role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\"
                                         style=\"width: ";
            // line 117
            echo twig_escape_filter($this->env, (($this->getAttribute($context["post"], "currentMember", array()) / $this->getAttribute($context["post"], "limitMember", array())) * 100), "html", null, true);
            echo "%\">
                                        <span class=\"sr-only\">30% Complete (danger)</span>
                                    </div>
                                </div>
                                <p>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "prefArea", array()), "html", null, true);
            echo "</p>
                                ";
            // line 123
            echo "                                <ul class=\"list-unstyled \">
                                    ";
            // line 124
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 125
                echo "                                        <li class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"mix webdesign col-md-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <img src=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["post"], "imagePath", array())), "html", null, true);
            echo "\" class=\"img-responsive\"/>
                                <h3><a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h3>
                                <p>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "currentMember", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "limitMember", array()), "html", null, true);
            echo "人</p>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-danger progress-bar-striped active\"
                                         role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\"
                                         style=\"width: ";
            // line 140
            echo twig_escape_filter($this->env, (($this->getAttribute($context["post"], "currentMember", array()) / $this->getAttribute($context["post"], "limitMember", array())) * 100), "html", null, true);
            echo "%\">
                                        <span class=\"sr-only\">30% Complete (danger)</span>
                                    </div>
                                </div>
                                <p>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "prefArea", array()), "html", null, true);
            echo "</p>
                                <ul class=\"list-unstyled \">
                                    ";
            // line 146
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 147
                echo "                                        <li class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "            </div>
        </div>
        <div class=\"clearfix hidden-xs\" style=\"width:100%; height:50px;\"></div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "DreamMarketClientBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 154,  326 => 149,  317 => 147,  313 => 146,  308 => 144,  301 => 140,  292 => 136,  286 => 135,  282 => 134,  273 => 127,  264 => 125,  260 => 124,  257 => 123,  253 => 121,  246 => 117,  237 => 113,  231 => 112,  227 => 111,  218 => 104,  209 => 102,  205 => 101,  202 => 100,  198 => 98,  191 => 94,  182 => 90,  176 => 89,  172 => 88,  167 => 85,  163 => 84,  141 => 64,  132 => 60,  124 => 56,  122 => 55,  118 => 52,  109 => 50,  105 => 49,  102 => 48,  98 => 46,  91 => 42,  82 => 38,  76 => 37,  72 => 36,  67 => 33,  62 => 32,  31 => 3,  28 => 2,  11 => 1,);
    }
}
