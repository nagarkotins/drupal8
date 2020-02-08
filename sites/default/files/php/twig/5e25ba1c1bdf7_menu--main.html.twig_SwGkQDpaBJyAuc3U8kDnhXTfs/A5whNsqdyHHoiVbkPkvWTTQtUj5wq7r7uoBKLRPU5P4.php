<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/paxton/templates/menu--main.html.twig */
class __TwigTemplate_70420e5cfe6b6324a5558f5d069fd9ac20a7647673c6c9128762cdb994a87a1b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 16, "if" => 20];
        $filters = ["escape" => 22];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 10
        echo "
";
        // line 12
        echo "
<div class=\"collapse navbar-collapse\" id=\"main-navigation\">
\t<ul class=\"nav navbar-right navbar-nav\">

\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "
\t\t\t";
            // line 19
            echo "
\t\t\t";
            // line 20
            if ($this->getAttribute($context["item"], "below", [])) {
                // line 21
                echo "
\t\t\t\t<li  ";
                // line 22
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                echo " >
\t\t\t\t\t<a href=\"";
                // line 23
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" > ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                echo " <b class=\"caret\"></b> </a>

\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t";
                // line 27
                echo "
\t\t\t\t\t\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "below", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 29
                    echo "
\t\t\t\t\t\t\t<li ><a href=\"";
                    // line 30
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                    echo "\" ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                    echo " > ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                    echo " </a></li>

\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
                // line 36
                echo "
\t\t\t";
            } else {
                // line 38
                echo "
\t\t\t\t";
                // line 40
                echo "
\t\t\t\t<li ";
                // line 41
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                echo " ><a  href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                echo "\"  ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                echo " > ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                echo "</a></li>

\t\t\t";
            }
            // line 44
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
\t</ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/paxton/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 46,  140 => 44,  128 => 41,  125 => 40,  122 => 38,  118 => 36,  114 => 33,  101 => 30,  98 => 29,  94 => 28,  91 => 27,  83 => 23,  79 => 22,  76 => 21,  74 => 20,  71 => 19,  68 => 17,  64 => 16,  58 => 12,  55 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/paxton/templates/menu--main.html.twig", "D:\\xampp\\htdocs\\drupal-8.7.3\\drupal-8.7.3\\themes\\paxton\\templates\\menu--main.html.twig");
    }
}
