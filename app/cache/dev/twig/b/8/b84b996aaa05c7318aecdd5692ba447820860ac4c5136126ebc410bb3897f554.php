<?php

/* UciBaseDatosBundle:Pmbok:index.html.twig */
class __TwigTemplate_b84b996aaa05c7318aecdd5692ba447820860ac4c5136126ebc410bb3897f554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Pmbok:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_732741e8726cad844ae4d90bf265808ad3ed479b927a9db630953890f30b45f1 = $this->env->getExtension("native_profiler");
        $__internal_732741e8726cad844ae4d90bf265808ad3ed479b927a9db630953890f30b45f1->enter($__internal_732741e8726cad844ae4d90bf265808ad3ed479b927a9db630953890f30b45f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Pmbok:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_732741e8726cad844ae4d90bf265808ad3ed479b927a9db630953890f30b45f1->leave($__internal_732741e8726cad844ae4d90bf265808ad3ed479b927a9db630953890f30b45f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d6ff32c5a27e02dfec73468028d15a9cf9da545cd658c92fa18946618e1e981 = $this->env->getExtension("native_profiler");
        $__internal_3d6ff32c5a27e02dfec73468028d15a9cf9da545cd658c92fa18946618e1e981->enter($__internal_3d6ff32c5a27e02dfec73468028d15a9cf9da545cd658c92fa18946618e1e981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pmbok list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Edicion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pmbok_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "edicion", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pmbok_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pmbok_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("pmbok_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_3d6ff32c5a27e02dfec73468028d15a9cf9da545cd658c92fa18946618e1e981->leave($__internal_3d6ff32c5a27e02dfec73468028d15a9cf9da545cd658c92fa18946618e1e981_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Pmbok:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
