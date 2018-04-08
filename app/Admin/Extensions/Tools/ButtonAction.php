<?php
/**
 * Created by PhpStorm.
 * User: liuning
 * Date: 2018/4/8
 * Time: 上午10:36
 */

namespace App\Admin\Extensions\Tools;

use Encore\Admin\Admin;

class ButtonAction
{
	# primary key
	protected $id;
	# url
	protected $url;
//	# button
//	protected $button;

	public function __construct ($url, $id)
	{
		$this->id = $id;
		$this->url = $url;
	}

	public function script()
	{
		return <<<EOT
$('.custom-button').on('click', function() {

    $.ajax({
        method: 'post',
        url: '{$this->url}',
        data: {
            id: {$this->id}
        },
        success: function () {
            $.pjax.reload('#pjax-container');
            toastr.success('success');
        }
    });
    
});
EOT;
	}

	public function render()
	{
		Admin::script($this->script());

		return <<<EOT
<button class="btn btn-default custom-button" type="button">Button</button>
EOT;
	}

	public function __toString()
	{
		return $this->render();
	}

}