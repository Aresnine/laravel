<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //列表页面
	public function index()
	{
		return view("post/index");
	}

	//详情页
	public function show()
	{
		return view("post/show");
	}

	//创建文章
	public function create()
	{
		return view('post/create');
	}

	//处理创建文章
	public function store()
	{

	}

	//编辑页面
	public function edit()
	{
		return view('post/edit');
	}

	//处理编辑页面
	public function update()
	{

	}

	//删除页面
	public function delete()
	{
		
	}
}
