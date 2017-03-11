<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_1b1dcd48555492bc29677cef20ff22d42aadb89d84129ce83e502c27a2ae29f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::base.html.twig", "FrontBundle:Default:index.html.twig", 1);
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
        echo "    <div class=\"container-about\">
        <div class=\"container\">
            <div class=\"page-header\" id=\"about\">
                <h1 class=\"text-center text-info\">余っている土地を発掘する<br/><span class=\"fa fa-user\"></span></h1>
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
            echo "                    <div class=\"col-md-3\">
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
                                ";
            // line 39
            echo "                                ";
            // line 40
            echo "                                    ";
            // line 41
            echo "                                         ";
            // line 42
            echo "                                         ";
            // line 43
            echo "                                        ";
            // line 44
            echo "                                    ";
            // line 45
            echo "                                ";
            // line 46
            echo "                                <hr>
                                <p>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "prefArea", array()), "html", null, true);
            echo "</p>
                                ";
            // line 49
            echo "                                <ul class=\"list-unstyled \">
                                ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 51
                echo "                                        <li class=\"btn btn-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                                </ul>

                                ";
            // line 56
            echo "                                ";
            // line 57
            echo "                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "                    <tr>
                        <td colspan=\"4\">No posts found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($context["post"], "category", array()), "categoryId", array()) == 1)) {
                // line 86
                echo "                    <div class=\"mix graphic col-md-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                ";
                // line 90
                echo "
                                <img src=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["post"], "imagePath", array())), "html", null, true);
                echo "\" class=\"img-responsive\"/>
                                <h3><a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a></h3>
                                ";
                // line 94
                echo "                                ";
                // line 95
                echo "                                    ";
                // line 96
                echo "                                         ";
                // line 97
                echo "                                         ";
                // line 98
                echo "                                        ";
                // line 99
                echo "                                    ";
                // line 100
                echo "                                ";
                // line 101
                echo "                                <hr>
                                <p>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "prefArea", array()), "html", null, true);
                echo "</p>
                                ";
                // line 104
                echo "                                <ul class=\"list-unstyled \">
                                    ";
                // line 105
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 106
                    echo "                                        <li class=\"btn btn-default\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                                </ul>

                            </div>
                        </div>
                    </div>
                    ";
            }
            // line 114
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($context["post"], "category", array()), "categoryId", array()) == 2)) {
                // line 115
                echo "                    <div class=\"mix print col-md-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <img src=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["post"], "imagePath", array())), "html", null, true);
                echo "\" class=\"img-responsive\"/>
                                <h3><a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a></h3>
                                ";
                // line 121
                echo "                                ";
                // line 122
                echo "                                    ";
                // line 123
                echo "                                         ";
                // line 124
                echo "                                         ";
                // line 125
                echo "                                        ";
                // line 126
                echo "                                    ";
                // line 127
                echo "                                ";
                // line 128
                echo "                                <hr>
                                <p>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "prefArea", array()), "html", null, true);
                echo "</p>
                                ";
                // line 131
                echo "                                <ul class=\"list-unstyled \">
                                    ";
                // line 132
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 133
                    echo "                                        <li class=\"btn btn-default\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    ";
            }
            // line 140
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($context["post"], "category", array()), "categoryId", array()) == 3)) {
                // line 141
                echo "                    <div class=\"mix webdesign col-md-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <img src=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["post"], "imagePath", array())), "html", null, true);
                echo "\" class=\"img-responsive\"/>
                                <h3><a href=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a></h3>
                                ";
                // line 147
                echo "                                ";
                // line 148
                echo "                                    ";
                // line 149
                echo "                                         ";
                // line 150
                echo "                                         ";
                // line 151
                echo "                                        ";
                // line 152
                echo "                                    ";
                // line 153
                echo "                                ";
                // line 154
                echo "                                <hr>
                                <p>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "prefArea", array()), "html", null, true);
                echo "</p>
                                <ul class=\"list-unstyled \">
                                    ";
                // line 157
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 158
                    echo "                                        <li class=\"btn btn-default\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 160
                echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    ";
            }
            // line 165
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "            </div>
        </div>
        <div class=\"clearfix hidden-xs\" style=\"width:100%; height:50px;\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 166,  355 => 165,  348 => 160,  339 => 158,  335 => 157,  330 => 155,  327 => 154,  325 => 153,  323 => 152,  321 => 151,  319 => 150,  317 => 149,  315 => 148,  313 => 147,  307 => 145,  303 => 144,  298 => 141,  295 => 140,  288 => 135,  279 => 133,  275 => 132,  272 => 131,  268 => 129,  265 => 128,  263 => 127,  261 => 126,  259 => 125,  257 => 124,  255 => 123,  253 => 122,  251 => 121,  245 => 119,  241 => 118,  236 => 115,  233 => 114,  225 => 108,  216 => 106,  212 => 105,  209 => 104,  205 => 102,  202 => 101,  200 => 100,  198 => 99,  196 => 98,  194 => 97,  192 => 96,  190 => 95,  188 => 94,  182 => 92,  178 => 91,  175 => 90,  170 => 86,  167 => 85,  163 => 84,  142 => 65,  133 => 61,  125 => 57,  123 => 56,  119 => 53,  110 => 51,  106 => 50,  103 => 49,  99 => 47,  96 => 46,  94 => 45,  92 => 44,  90 => 43,  88 => 42,  86 => 41,  84 => 40,  82 => 39,  76 => 37,  72 => 36,  67 => 33,  62 => 32,  31 => 3,  28 => 2,  11 => 1,);
    }
}
