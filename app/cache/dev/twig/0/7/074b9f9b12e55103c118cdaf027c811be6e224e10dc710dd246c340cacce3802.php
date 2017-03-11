<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_074b9f9b12e55103c118cdaf027c811be6e224e10dc710dd246c340cacce3802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>

    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recruitment/css/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <script src=\"http://code.jquery.com/jquery-2.1.4.min.js\"></script>

    <style>
        /*
 * Specific styles of signin component
 */
        /*
         * General styles
         */
        body, html {
            height: 100%;
            background-repeat: no-repeat;
            background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
        }

        .card-container.card {
            max-width: 350px;
            padding: 40px 40px;
        }

        .btn {
            font-weight: 700;
            height: 36px;
            -moz-user-select: none;
            -webkit-user-select: none;
            user-select: none;
            cursor: default;
        }

        /*
         * Card component
         */
        .card {
            background-color: #F7F7F7;
            /* just in case there no content*/
            padding: 20px 25px 30px;
            margin: 0 auto 25px;
            margin-top: 50px;
            /* shadows and rounded borders */
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .profile-img-card {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }

        /*
         * Form styles
         */
        .profile-name-card {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            margin: 10px 0 0;
            min-height: 1em;
        }

        .reauth-email {
            display: block;
            color: #404040;
            line-height: 2;
            margin-bottom: 10px;
            font-size: 14px;
            text-align: center;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .form-signin #inputEmail,
        .form-signin #inputPassword {
            direction: ltr;
            height: 44px;
            font-size: 16px;
        }

        .form-signin input[type=email],
        .form-signin input[type=password],
        .form-signin input[type=text],
        .form-signin button {
            width: 100%;
            display: block;
            margin-bottom: 10px;
            z-index: 1;
            position: relative;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .form-signin .form-control:focus {
            border-color: rgb(104, 145, 162);
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
        }

        .btn.btn-signin {
            /*background-color: #4d90fe; */
            background-color: rgb(104, 145, 162);
            /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
            padding: 0px;
            font-weight: 700;
            font-size: 14px;
            height: 36px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            border: none;
            -o-transition: all 0.218s;
            -moz-transition: all 0.218s;
            -webkit-transition: all 0.218s;
            transition: all 0.218s;
        }

        .btn.btn-signin:hover,
        .btn.btn-signin:active,
        .btn.btn-signin:focus {
            background-color: rgb(12, 97, 33);
        }

        .forgot-password {
            color: rgb(104, 145, 162);
        }

        .forgot-password:hover,
        .forgot-password:active,
        .forgot-password:focus{
            color: rgb(12, 97, 33);
        }
        </style>
</head>
<body>
";
        // line 161
        echo "
";
        // line 162
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 163
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 164
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 282
        echo "
</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "DreamMarket";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 167
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 168
        echo "
    <!--
        you can substitue the span of reauth email for a input with the email and
        include the remember me checkbox
        -->
    <div class=\"container\">
        <div class=\"card card-container\">
            <!-- <img class=\"profile-img-card\" src=\"//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120\" alt=\"\" /> -->
            <img id=\"profile-img\" class=\"profile-img-card\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" />
            <p id=\"profile-name\" class=\"profile-name-card\"></p>
            <form action=\"";
        // line 178
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
                <span id=\"reauth-email\" class=\"reauth-email\"></span>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                <input type=\"text\" name=\"_username\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
                <input type=\"password\"  name=\"_password\"
                        id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>

                <div id=\"remember\" class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\" value=\"remember-me\"> Remember me
                    </label>
                </div>
                <button class=\"btn btn-lg btn-primary btn-block btn-signin\" type=\"submit\">Sign in</button>
            </form><!-- /form -->
            <a href=\"#\" class=\"forgot-password\">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
    <script>
    \$( document ).ready(function() {
        // DOM ready

        // Test data
        /*
         * To test the script you should discomment the function
         * testLocalStorageData and refresh the page. The function
         * will load some test data and the loadProfile
         * will do the changes in the UI
         */
        // testLocalStorageData();
        // Load profile if it exits
        loadProfile();
    });

    /**
     * Function that gets the data of the profile in case
     * thar it has already saved in localstorage. Only the
     * UI will be update in case that all data is available
     *
     * A not existing key in localstorage return null
     *
     */
    function getLocalProfile(callback){
        var profileImgSrc      = localStorage.getItem(\"PROFILE_IMG_SRC\");
        var profileName        = localStorage.getItem(\"PROFILE_NAME\");
        var profileReAuthEmail = localStorage.getItem(\"PROFILE_REAUTH_EMAIL\");

        if(profileName !== null
                && profileReAuthEmail !== null
                && profileImgSrc !== null) {
            callback(profileImgSrc, profileName, profileReAuthEmail);
        }
    }

    /**
     * Main function that load the profile if exists
     * in localstorage
     */
    function loadProfile() {
        if(!supportsHTML5Storage()) { return false; }
        // we have to provide to the callback the basic
        // information to set the profile
        getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
            //changes in the UI
            \$(\"#profile-img\").attr(\"src\",profileImgSrc);
            \$(\"#profile-name\").html(profileName);
            \$(\"#reauth-email\").html(profileReAuthEmail);
            \$(\"#inputEmail\").hide();
            \$(\"#remember\").hide();
        });
    }

    /**
     * function that checks if the browser supports HTML5
     * local storage
     *
     * @returns {boolean}
     */
    function supportsHTML5Storage() {
        try {
            return 'localStorage' in window && window['localStorage'] !== null;
        } catch (e) {
            return false;
        }
    }

    /**
     * Test data. This data will be safe by the web app
     * in the first successful login of a auth user.
     * To Test the scripts, delete the localstorage data
     * and comment this call.
     *
     * @returns {boolean}
     */
    function testLocalStorageData() {
        if(!supportsHTML5Storage()) { return false; }
        localStorage.setItem(\"PROFILE_IMG_SRC\", \"//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120\" );
        localStorage.setItem(\"PROFILE_NAME\", \"César Izquierdo Tello\");
        localStorage.setItem(\"PROFILE_REAUTH_EMAIL\", \"oneaccount@gmail.com\");
    }
        </script>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 180,  254 => 178,  242 => 168,  239 => 167,  234 => 8,  228 => 7,  222 => 282,  220 => 167,  205 => 164,  200 => 163,  196 => 162,  193 => 161,  41 => 11,  35 => 9,  33 => 8,  29 => 7,  22 => 2,);
    }
}
