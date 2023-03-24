<?php

class __Mustache_5dd02916f46c22bf507b376ef66c68f8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<html>
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '<title>Example</title>
';
        $buffer .= $indent . '</head>
';
        $buffer .= $indent . '<body>
';
        $buffer .= $indent . '<p>Hello, ';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 2, 'UTF-8'));
        $buffer .= ' ?>!</p>
';
        $buffer .= $indent . '<div foo="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : htmlspecialchars($value, 2, 'UTF-8'));
        $buffer .= ' ?>">';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $value = $context->find('list');
        if (empty($value)) {
            
            $buffer .= $indent . '	<p>No items in list.</p>
';
        }
        $buffer .= $indent . '<ul>
';
        $value = $context->find('list');
        $buffer .= $this->section6c979cfd7a61e7f6dedb2ccbf1b49879($context, $indent, $value);
        $buffer .= $indent . '</ul>
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }

    private function section6c979cfd7a61e7f6dedb2ccbf1b49879(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<li>{{ value }}</li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda($result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '	<li>';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : htmlspecialchars($value, 2, 'UTF-8'));
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
