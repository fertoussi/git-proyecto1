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

/* core/themes/stable/templates/admin/image-rotate-summary.html.twig */
class __TwigTemplate_71edbc8e3395bcc2324c1ff6f99cdd0c0b171fef4cb40124b70b018639d40535 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 19, "set" => 20, "trans" => 21];
        $filters = ["abs" => 20, "escape" => 22];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'trans'],
                ['abs', 'escape'],
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
        // line 19
        if ($this->getAttribute(($context["data"] ?? null), "random", [])) {
            // line 20
            echo "  ";
            $context["degrees"] = abs($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "degrees", [])));
            // line 21
            echo "  ";
            echo t("random between -@degrees° and @degrees°", array("@degrees" =>             // line 22
($context["degrees"] ?? null), "@degrees" => ($context["degrees"] ?? null), ));
        } else {
            // line 25
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "degrees", [])), "html", null, true);
            echo "°
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/image-rotate-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  62 => 22,  60 => 21,  57 => 20,  55 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/stable/templates/admin/image-rotate-summary.html.twig", "C:\\xampp\\htdocs\\drupalproyecto\\core\\themes\\stable\\templates\\admin\\image-rotate-summary.html.twig");
    }
}
