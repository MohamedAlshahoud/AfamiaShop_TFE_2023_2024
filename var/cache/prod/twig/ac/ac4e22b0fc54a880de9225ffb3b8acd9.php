<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @DoctrineMigrations/Collector/migrations.html.twig */
class __TwigTemplate_9ed3caf4b54f620dcf886882342d0a80 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@DoctrineMigrations/Collector/migrations.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 4), "unavailable_migrations_count", [], "any", true, true, false, 4)) {
            // line 5
            yield "        ";
            $context["unavailable_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 5), "unavailable_migrations_count", [], "any", false, false, false, 5);
            // line 6
            yield "        ";
            $context["new_migrations"] = Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 6), "new_migrations", [], "any", false, false, false, 6));
            // line 7
            yield "        ";
            if (((($context["unavailable_migrations"] ?? null) > 0) || (($context["new_migrations"] ?? null) > 0))) {
                // line 8
                yield "            ";
                $context["executed_migrations"] = Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 8), "executed_migrations", [], "any", false, false, false, 8));
                // line 9
                yield "            ";
                $context["available_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 9), "available_migrations_count", [], "any", false, false, false, 9);
                // line 10
                yield "            ";
                $context["status_color"] = (((($context["unavailable_migrations"] ?? null) > 0)) ? ("yellow") : (""));
                // line 11
                yield "            ";
                $context["status_color"] = (((($context["new_migrations"] ?? null) > 0)) ? ("red") : (($context["status_color"] ?? null)));
                // line 12
                yield "
            ";
                // line 13
                $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 14
                    yield "                ";
                    if ((($context["profiler_markup_version"] ?? null) < 3)) {
                        // line 15
                        yield "                    ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
                        yield "
                ";
                    } else {
                        // line 17
                        yield "                    ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@DoctrineMigrations/Collector/icon-v3.svg");
                        yield "
                ";
                    }
                    // line 19
                    yield "
                <span class=\"sf-toolbar-value\">";
                    // line 20
                    yield Twig\Extension\EscaperExtension::escape($this->env, (($context["new_migrations"] ?? null) + ($context["unavailable_migrations"] ?? null)), "html", null, true);
                    yield "</span>
            ";
                })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 22
                yield "
            ";
                // line 23
                $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 24
                    yield "                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Current Migration</b>
                        <span>";
                    // line 27
                    (((($context["executed_migrations"] ?? null) > 0)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::last($this->env, Twig\Extension\CoreExtension::splitFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 27), "executed_migrations", [], "any", false, false, false, 27)), "version", [], "any", false, false, false, 27), "\\")), "html", null, true)) : (yield "n/a"));
                    yield "</span>
                    </div>
                </div>

                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <span class=\"sf-toolbar-header\">
                            <b>Database Migrations</b>
                        </span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Executed</b>
                        <span class=\"sf-toolbar-status\">";
                    // line 39
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["executed_migrations"] ?? null), "html", null, true);
                    yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Unavailable</b>
                        <span class=\"sf-toolbar-status ";
                    // line 43
                    yield (((($context["unavailable_migrations"] ?? null) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["unavailable_migrations"] ?? null), "html", null, true);
                    yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Available</b>
                        <span class=\"sf-toolbar-status\">";
                    // line 47
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["available_migrations"] ?? null), "html", null, true);
                    yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>New</b>
                        <span class=\"sf-toolbar-status ";
                    // line 51
                    yield (((($context["new_migrations"] ?? null) > 0)) ? ("sf-toolbar-status-red") : (""));
                    yield "\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, ($context["new_migrations"] ?? null), "html", null, true);
                    yield "</span>
                    </div>
                </div>
            ";
                })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 55
                yield "
            ";
                // line 56
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
                yield "
        ";
            }
            // line 58
            yield "    ";
        }
        return; yield '';
    }

    // line 61
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 62), "unavailable_migrations_count", [], "any", true, true, false, 62)) {
            // line 63
            yield "        ";
            $context["unavailable_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 63), "unavailable_migrations_count", [], "any", false, false, false, 63);
            // line 64
            yield "        ";
            $context["new_migrations"] = Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 64), "new_migrations", [], "any", false, false, false, 64));
            // line 65
            yield "        ";
            $context["label"] = (((($context["unavailable_migrations"] ?? null) > 0)) ? ("label-status-warning") : (""));
            // line 66
            yield "        ";
            $context["label"] = (((($context["new_migrations"] ?? null) > 0)) ? ("label-status-error") : (($context["label"] ?? null)));
            // line 67
            yield "        <span class=\"label ";
            yield Twig\Extension\EscaperExtension::escape($this->env, ($context["label"] ?? null), "html", null, true);
            yield "\">
            <span class=\"icon\">
                ";
            // line 69
            if ((($context["profiler_markup_version"] ?? null) < 3)) {
                // line 70
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
                yield "
                ";
            } else {
                // line 72
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@DoctrineMigrations/Collector/icon-v3.svg");
                yield "
                ";
            }
            // line 74
            yield "            </span>

            <strong>Migrations</strong>
            ";
            // line 77
            if (((($context["unavailable_migrations"] ?? null) > 0) || (($context["new_migrations"] ?? null) > 0))) {
                // line 78
                yield "                <span class=\"count\">
                    <span>";
                // line 79
                yield Twig\Extension\EscaperExtension::escape($this->env, (($context["new_migrations"] ?? null) + ($context["unavailable_migrations"] ?? null)), "html", null, true);
                yield "</span>
                </span>
            ";
            }
            // line 82
            yield "        </span>
    ";
        }
        return; yield '';
    }

    // line 86
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        yield "    ";
        $context["num_executed_migrations"] = Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 87), "executed_migrations", [], "any", false, false, false, 87));
        // line 88
        yield "    ";
        $context["num_unavailable_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 88), "unavailable_migrations_count", [], "any", false, false, false, 88);
        // line 89
        yield "    ";
        $context["num_available_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 89), "available_migrations_count", [], "any", false, false, false, 89);
        // line 90
        yield "    ";
        $context["num_new_migrations"] = Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 90), "new_migrations", [], "any", false, false, false, 90));
        // line 91
        yield "
    <h2>Doctrine Migrations</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 95
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["num_executed_migrations"] ?? null), "html", null, true);
        yield "</span>
            <span class=\"label\">Executed</span>
        </div>

        ";
        // line 99
        if ((($context["profiler_markup_version"] ?? null) >= 3)) {
            // line 100
            yield "            <div class=\"metric-group\">
        ";
        }
        // line 102
        yield "
        <div class=\"metric\">
            <span class=\"value\">";
        // line 104
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["num_unavailable_migrations"] ?? null), "html", null, true);
        yield "</span>
            <span class=\"label\">Unavailable</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 108
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["num_available_migrations"] ?? null), "html", null, true);
        yield "</span>
            <span class=\"label\">Available</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 112
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["num_new_migrations"] ?? null), "html", null, true);
        yield "</span>
            <span class=\"label\">New</span>
        </div>

        ";
        // line 116
        if ((($context["profiler_markup_version"] ?? null) >= 3)) {
            // line 117
            yield "            </div>         ";
        }
        // line 119
        yield "    </div>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Migrations
                <span class=\"badge ";
        // line 125
        yield (((($context["num_new_migrations"] ?? null) > 0)) ? ("status-error") : ((((($context["num_unavailable_migrations"] ?? null) > 0)) ? ("status-warning") : (""))));
        yield "\">
                    ";
        // line 126
        yield Twig\Extension\EscaperExtension::escape($this->env, (((($context["num_new_migrations"] ?? null) > 0)) ? (($context["num_new_migrations"] ?? null)) : ((((($context["num_unavailable_migrations"] ?? null) > 0)) ? (($context["num_unavailable_migrations"] ?? null)) : (($context["num_executed_migrations"] ?? null))))), "html", null, true);
        yield "
                </span>
            </h3>

            <div class=\"tab-content\">
                ";
        // line 131
        yield CoreExtension::callMacro($macros["_self"], "macro_render_migration_details", [($context["collector"] ?? null), ($context["profiler_markup_version"] ?? null)], 131, $context, $this->getSourceContext());
        yield "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Configuration</h3>

            <div class=\"tab-content\">
                ";
        // line 139
        yield CoreExtension::callMacro($macros["_self"], "macro_render_configuration_details", [($context["collector"] ?? null), ($context["profiler_markup_version"] ?? null)], 139, $context, $this->getSourceContext());
        yield "
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 145
    public function macro_render_migration_details($__collector__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collector" => $__collector__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 146
            yield "    <table>
        <thead>
        <tr>
            <th class=\"colored font-normal\">Version</th>
            <th class=\"colored font-normal\">Description</th>
            <th class=\"colored font-normal\">Status</th>
            <th class=\"colored font-normal\">Executed at</th>
            <th class=\"colored font-normal text-right\">Execution time</th>
        </tr>
        </thead>
        ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 156), "new_migrations", [], "any", false, false, false, 156));
            foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
                // line 157
                yield "            ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_migration", [$context["migration"]], 157, $context, $this->getSourceContext());
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            yield "
        ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverseFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 160), "executed_migrations", [], "any", false, false, false, 160)));
            foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
                // line 161
                yield "            ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_migration", [$context["migration"]], 161, $context, $this->getSourceContext());
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            yield "    </table>
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 166
    public function macro_render_configuration_details($__collector__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collector" => $__collector__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 167
            yield "    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Storage</th>
        </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Type</td>
            <td class=\"font-normal\">";
            // line 175
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 175), "storage", [], "any", false, false, false, 175), "html", null, true);
            yield "</td>
        </tr>
        ";
            // line 177
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 177), "table", [], "any", true, true, false, 177)) {
                // line 178
                yield "            <tr>
                <td class=\"font-normal\">Table Name</td>
                <td class=\"font-normal\">";
                // line 180
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 180), "table", [], "any", false, false, false, 180), "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            // line 183
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 183), "column", [], "any", true, true, false, 183)) {
                // line 184
                yield "            <tr>
                <td class=\"font-normal\">Column Name</td>
                <td class=\"font-normal\">";
                // line 186
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 186), "column", [], "any", false, false, false, 186), "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            // line 189
            yield "    </table>

    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Database</th>
        </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Driver</td>
            <td class=\"font-normal\">";
            // line 199
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 199), "driver", [], "any", false, false, false, 199), "html", null, true);
            yield "</td>
        </tr>
        <tr>
            <td class=\"font-normal\">Name</td>
            <td class=\"font-normal\">";
            // line 203
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 203), "name", [], "any", false, false, false, 203), "html", null, true);
            yield "</td>
        </tr>
    </table>

    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Migration Namespaces</th>
        </tr>
        </thead>
        ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 213), "namespaces", [], "any", false, false, false, 213));
            foreach ($context['_seq'] as $context["namespace"] => $context["directory"]) {
                // line 214
                yield "            <tr>
                <td class=\"font-normal\">";
                // line 215
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["namespace"], "html", null, true);
                yield "</td>
                <td class=\"font-normal\">";
                // line 216
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["directory"], "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['namespace'], $context['directory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            yield "    </table>
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 222
    public function macro_render_migration($__migration__ = null, $__profiler_markup_version__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "migration" => $__migration__,
            "profiler_markup_version" => $__profiler_markup_version__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 223
            yield "    <tr>
        <td class=\"font-normal\">
            ";
            // line 225
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, false, 225)) {
                // line 226
                yield "                <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, false, 226), 1), "html", null, true);
                yield "\" title=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, false, 226), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "version", [], "any", false, false, false, 226), "html", null, true);
                yield "</a>
            ";
            } else {
                // line 228
                yield "                ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "version", [], "any", false, false, false, 228), "html", null, true);
                yield "
            ";
            }
            // line 230
            yield "        </td>
        <td class=\"font-normal\">";
            // line 231
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "description", [], "any", false, false, false, 231), "html", null, true);
            yield "</td>
        <td class=\"font-normal align-right\">
            ";
            // line 233
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "is_new", [], "any", false, false, false, 233)) {
                // line 234
                yield "                <span class=\"";
                yield (((($context["profiler_markup_version"] ?? null) >= 3)) ? ("badge badge-error") : ("label status-error"));
                yield "\">NOT EXECUTED</span>
            ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 235
($context["migration"] ?? null), "is_unavailable", [], "any", false, false, false, 235)) {
                // line 236
                yield "                <span class=\"";
                yield (((($context["profiler_markup_version"] ?? null) >= 3)) ? ("badge badge-warning") : ("label status-warning"));
                yield "\">UNAVAILABLE</span>
            ";
            } else {
                // line 238
                yield "                <span class=\"";
                yield (((($context["profiler_markup_version"] ?? null) >= 3)) ? ("badge badge-success") : ("label status-success"));
                yield "\">EXECUTED</span>
            ";
            }
            // line 240
            yield "        </td>
        <td class=\"font-normal\">";
            // line 241
            ((CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "executed_at", [], "any", false, false, false, 241)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "executed_at", [], "any", false, false, false, 241), "M j, Y H:i"), "html", null, true)) : (yield "n/a"));
            yield "</td>
        <td class=\"font-normal text-right\">
            ";
            // line 243
            if ((null === CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", false, false, false, 243))) {
                // line 244
                yield "                n/a
            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 245
($context["migration"] ?? null), "execution_time", [], "any", false, false, false, 245) < 1)) {
                // line 246
                yield "                ";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, (CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", false, false, false, 246) * 1000), 0), "html", null, true);
                yield " ms
            ";
            } else {
                // line 248
                yield "                ";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", false, false, false, 248), 2), "html", null, true);
                yield " seconds
            ";
            }
            // line 250
            yield "        </td>
    </tr>
";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@DoctrineMigrations/Collector/migrations.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  605 => 250,  599 => 248,  593 => 246,  591 => 245,  588 => 244,  586 => 243,  581 => 241,  578 => 240,  572 => 238,  566 => 236,  564 => 235,  559 => 234,  557 => 233,  552 => 231,  549 => 230,  543 => 228,  533 => 226,  531 => 225,  527 => 223,  514 => 222,  508 => 219,  499 => 216,  495 => 215,  492 => 214,  488 => 213,  475 => 203,  468 => 199,  456 => 189,  450 => 186,  446 => 184,  443 => 183,  437 => 180,  433 => 178,  431 => 177,  426 => 175,  416 => 167,  404 => 166,  398 => 163,  389 => 161,  385 => 160,  382 => 159,  373 => 157,  369 => 156,  357 => 146,  345 => 145,  335 => 139,  324 => 131,  316 => 126,  312 => 125,  304 => 119,  301 => 117,  299 => 116,  292 => 112,  285 => 108,  278 => 104,  274 => 102,  270 => 100,  268 => 99,  261 => 95,  255 => 91,  252 => 90,  249 => 89,  246 => 88,  243 => 87,  239 => 86,  232 => 82,  226 => 79,  223 => 78,  221 => 77,  216 => 74,  210 => 72,  204 => 70,  202 => 69,  196 => 67,  193 => 66,  190 => 65,  187 => 64,  184 => 63,  181 => 62,  177 => 61,  171 => 58,  166 => 56,  163 => 55,  154 => 51,  147 => 47,  138 => 43,  131 => 39,  116 => 27,  111 => 24,  109 => 23,  106 => 22,  101 => 20,  98 => 19,  92 => 17,  86 => 15,  83 => 14,  81 => 13,  78 => 12,  75 => 11,  72 => 10,  69 => 9,  66 => 8,  63 => 7,  60 => 6,  57 => 5,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@DoctrineMigrations/Collector/migrations.html.twig", "C:\\WEB_DEVELOPER\\AFAMIA\\AFAMIA_SHOP\\vendor\\doctrine\\doctrine-migrations-bundle\\Resources\\views\\Collector\\migrations.html.twig");
    }
}
