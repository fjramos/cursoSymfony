<?php

/* base.html.twig */
class __TwigTemplate_aa2a2ff5354c90d7993ad3cdbe7ddf5f831f4b969119fc807f61d12c866909ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5cf1d9499f0c280a4c4119357fd55d047bdb3d6a5c33a2157626661262c628e = $this->env->getExtension("native_profiler");
        $__internal_f5cf1d9499f0c280a4c4119357fd55d047bdb3d6a5c33a2157626661262c628e->enter($__internal_f5cf1d9499f0c280a4c4119357fd55d047bdb3d6a5c33a2157626661262c628e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f5cf1d9499f0c280a4c4119357fd55d047bdb3d6a5c33a2157626661262c628e->leave($__internal_f5cf1d9499f0c280a4c4119357fd55d047bdb3d6a5c33a2157626661262c628e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7972caf7a2bad9aefaf3fca466b2a6109dd37bfaa13743a887256292a78f1a50 = $this->env->getExtension("native_profiler");
        $__internal_7972caf7a2bad9aefaf3fca466b2a6109dd37bfaa13743a887256292a78f1a50->enter($__internal_7972caf7a2bad9aefaf3fca466b2a6109dd37bfaa13743a887256292a78f1a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7972caf7a2bad9aefaf3fca466b2a6109dd37bfaa13743a887256292a78f1a50->leave($__internal_7972caf7a2bad9aefaf3fca466b2a6109dd37bfaa13743a887256292a78f1a50_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be4c13b2832c2276692637e2fa92118d17d6706370cd04ebec6d357893922a7e = $this->env->getExtension("native_profiler");
        $__internal_be4c13b2832c2276692637e2fa92118d17d6706370cd04ebec6d357893922a7e->enter($__internal_be4c13b2832c2276692637e2fa92118d17d6706370cd04ebec6d357893922a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_be4c13b2832c2276692637e2fa92118d17d6706370cd04ebec6d357893922a7e->leave($__internal_be4c13b2832c2276692637e2fa92118d17d6706370cd04ebec6d357893922a7e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc4f4c0e2e3048a05c624cd1f17deb5044a14876bc08571fe8642592ba812198 = $this->env->getExtension("native_profiler");
        $__internal_cc4f4c0e2e3048a05c624cd1f17deb5044a14876bc08571fe8642592ba812198->enter($__internal_cc4f4c0e2e3048a05c624cd1f17deb5044a14876bc08571fe8642592ba812198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cc4f4c0e2e3048a05c624cd1f17deb5044a14876bc08571fe8642592ba812198->leave($__internal_cc4f4c0e2e3048a05c624cd1f17deb5044a14876bc08571fe8642592ba812198_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3746ea8fa8504da42078db46198f83c015f8bbfd780b912831017eec00ac9ed2 = $this->env->getExtension("native_profiler");
        $__internal_3746ea8fa8504da42078db46198f83c015f8bbfd780b912831017eec00ac9ed2->enter($__internal_3746ea8fa8504da42078db46198f83c015f8bbfd780b912831017eec00ac9ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3746ea8fa8504da42078db46198f83c015f8bbfd780b912831017eec00ac9ed2->leave($__internal_3746ea8fa8504da42078db46198f83c015f8bbfd780b912831017eec00ac9ed2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
