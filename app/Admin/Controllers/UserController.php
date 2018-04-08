<?php

namespace App\Admin\Controllers;

use App\Model\Brahmaos\User;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('user');
            $content->description('用户管理');
	        // 添加面包屑导航 since v1.5.7
	        $content->breadcrumb(
		        ['text' => '首页', 'url' => '/'],
		        ['text' => '用户管理', 'url' => '/user']
	        );

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('update  user');
            $content->description('');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(User::class, function (Grid $grid) {

            $grid->user_id('ID')->sortable();
	        $grid->email('Email');
	        $grid->ip('IP');
	        $grid->login_at('last login');
            $grid->is_active('active?')->button_display('/admin/user/active', function ($is_active){
            	return $is_active ? 'active' : 'forbidden';
            });

            $grid->create_at();
            $grid->update_at();

	        $grid->filter(function ($filter) {
		        // 去掉默认的id过滤器
		        $filter->disableIdFilter();

		        // 在这里添加字段过滤器
		        $filter->like('email', 'Email');
	        });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(User::class, function (Form $form) {
            $form->email('email', 'Email');
	        $form->password('password', 'Password');
	        // 添加开关操作
	        $form->switch('is_active', 'active?');
	        //保存前回调
	        $form->saving(function (Form $form) {
		        $form->password = bcrypt($form->password);
		        $form->update_at = date('Y-m-d H:i:s');
		        $form->is_active = $form->is_active ? 1 : 0;
	        });
        });
    }


    public function action(Request $request)
    {
    	$user_id = $request->input('id');

    	if (!$user_id) {
    		return ['code'=>400, 'msg'=>'not found primary key', 'data'=>[]];
	    }

	    $user = User::find($user_id);
		if ($user){
			$user->is_active = $user->is_active ? 0 : 1;
			$user->save();
			return ['code'=>0, 'msg'=>$user->email . ' update success', 'data'=>[]];
		} else {
			return ['code'=>0, 'msg'=>'not found ' . $user->email, 'data'=>[]];
		}
    }
}
