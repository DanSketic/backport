<?php

namespace DanSketic\Backport\Form\Field;

use DanSketic\Backport\Backport;

class RadioButton extends Radio
{
    /**
     * @var string
     */
    protected $cascadeEvent = 'change';

    protected function addScript()
    {
        $script = <<<'SCRIPT'
$('.radio-group-toggle label').click(function() {
    $(this).parent().children().removeClass('active');
    $(this).addClass('active');
});
SCRIPT;

        Backport::script($script);
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $this->addScript();

        $this->addCascadeScript();

        $this->addVariables([
            'options' => $this->options,
            'checked' => $this->checked,
        ]);

        return parent::fieldRender();
    }
}
