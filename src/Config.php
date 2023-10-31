<?php declare(strict_types = 1);

namespace SandwaveIo\PhpCsFixerConfig;

use PhpCsFixer\Config as BaseConfig;

class Config extends BaseConfig
{
    /** @var array */
    private $overrides = [];

    /**
     * Config constructor.
     *
     * @param array $ruleOverrides You can override the standard ruleset.
     * @param bool  $allowRisky
     */
    public function __construct(array $ruleOverrides = [], $allowRisky = true)
    {
        parent::__construct('Sandwave.io shared coding standard');
        $this->overrides = $ruleOverrides;
        $this->setRiskyAllowed($allowRisky);
    }

    public function getRules(): array
    {
        $rules = array_merge([
            // Base rule sets
            '@PSR1' => true,
            '@PSR2' => true,

            // Additional rules
            'align_multiline_comment' => true,
            'array_syntax' => ['syntax' => 'short'],
            'cast_spaces' => ['space' => 'single'],
            'compact_nullable_typehint' => true,
            'concat_space' => ['spacing' => 'one'],
            'declare_equal_normalize' => ['space' => 'single'],
            'declare_strict_types' => true,
            'function_typehint_space' => true,
            'single_line_comment_style' => ['comment_types' => ['hash']],
            'list_syntax' => ['syntax' => 'short'],
            'lowercase_cast' => true,
            'class_attributes_separation' => ['elements' => ['method' => 'one', 'property' => 'one']],
            'new_with_braces' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_empty_comment' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_blank_lines' => true,
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_null_property_initialization' => true,
            'no_php4_constructor' => true,
            'no_short_bool_cast' => true,
            'no_spaces_around_offset' => true,
            'no_trailing_comma_in_singleline' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unneeded_curly_braces' => true,
            'no_unneeded_final_method' => true,
            'no_unreachable_default_argument_value' => true,
            'no_unused_imports' => true,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'no_whitespace_before_comma_in_array' => true,
            'no_whitespace_in_blank_line' => true,
            'normalize_index_brace' => true,
            'not_operator_with_successor_space' => true,
            'object_operator_without_whitespace' => true,
            'ordered_class_elements' => true,
            'ordered_imports' => true,
            'php_unit_strict' => true,
            'phpdoc_align' => true,
            'phpdoc_indent' => true,
            'phpdoc_order' => true,
            'phpdoc_scalar' => true,
            'phpdoc_separation' => true,
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => true,
            'phpdoc_types' => true,
            'phpdoc_var_without_name' => true,
            'pow_to_exponentiation' => true,
            'psr_autoloading' => true,
            'return_type_declaration' => ['space_before' => 'none'],
            'semicolon_after_instruction' => true,
            'short_scalar_cast' => true,
            'blank_lines_before_namespace' => ['min_line_breaks' => 2, 'max_line_breaks' => 2],
            'single_quote' => true,
            'space_after_semicolon' => true,
            'standardize_not_equals' => true,
            'ternary_operator_spaces' => true,
            'trailing_comma_in_multiline' => ['elements' => ['arrays']],
            'whitespace_after_comma_in_array' => true,
            'yoda_style' => false,
        ], $this->overrides);

        // Order the rule sets: @PSR1, @PSR2, @PSR12 (instead of @PSR1, @PSR12, @PSR2)
        uksort($rules, "strnatcmp");

        return $rules;
    }
}
