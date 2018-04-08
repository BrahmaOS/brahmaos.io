<?php
/**
 * Created by PhpStorm.
 * User: liuning
 * Date: 2018/4/8
 * Time: 上午11:34
 */

namespace App\Admin\Extensions\Tools;

use Encore\Admin\Admin;
use Encore\Admin\Grid\Displayers\AbstractDisplayer;
use Encore\Admin\Widgets\Collapse;

class ButtonDisplay extends AbstractDisplayer
{
	public function __scripts($url)
	{
		return <<<EOT
$('.custom-button-{$this->getKey()}').on('click', function() {
    $.ajax({
        method: 'post',
        url: '{$url}',
        data: {
            id: {$this->getKey()}
        },
        success: function (data) {
            $.pjax.reload('#pjax-container');
            toastr.success('success');
        }
    });
});
EOT;
	}

	public function display(...$params)
	{
		$url = $params[0];
		$value = $params[1];
		Admin::script($this->__scripts($url));

		$theme = $this->value ? 'btn-primary' : 'btn-default';

		return <<<EOT
<button type="button"
    class="btn {$theme} btn-sm custom-button-{$this->getKey()}"
    data-content="{$this->value}"
    >
  {$value($this->value)}
</button>
EOT;
	}
}