<?php

namespace app\admin\controller;

use app\common\CategoryTree;
use app\common\WechatOline;
use think\Controller;
use think\Db;
use think\Request;
use app\admin\validate\Cate as CateValidate;

class Cate extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $val = $this->request->post('key');
        try {
            $category = Db::name('category')->where('pid', 0)->where('delete_time', 0)
                ->where('status', 1)->field('id,title')->select();
            $cate = Db::name('category')->where('pid', 'neq', 0)->where('delete_time', 0)
                ->field('id,title,sort,status,create_time,pid');
            if ($val) {
                $cate = $cate->where('title', '%' . $val . '%');
            }
            $cate = $cate->order('sort asc,create_time desc')->select();
            $cate = (new CategoryTree())->getChildren($cate);

            $this->assign('data', $cate);
            $this->assign('category',$category);
            $this->assign('val',$val);
            return $this->fetch('cate/index');
        } catch (\Exception $e) {
            return $this->fetch('error/500');
        }
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        try{
            $cate = Db::name('category')->where('delete_time',0)->where('status',1)->where('pid',0)->select();
            $this->assign('cate',$cate);
            return $this->fetch('cate/add_edit');
        }catch (\Exception $e){
            return $this->fetch('error/500');
        }
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function save(Request $request)
    {

        $form = $request->post();
        $validate = new CateValidate();
        if (!$validate->check($form)) {
            return json(['code' => 0, 'msg' => $validate->getError()]);
        }
//        try {
            $category = Db::name('category')->where('id',$form['cate_id'])->find();
            if(!$category){
                return json(['code'=>0,'msg'=>'当前栏目不存在']);
            }
            $data = [
                'title' => $form['title'],
                'pid'=>$category['id'],
                'path' =>$category['path'].$category['id'].'-',
                'level'=>$category['level']+1,
                'sort'=>$form['sort'],
                'status'=>$form['status'],
                'create_time'=>time(),
                'update_time'=>time(),
        ];
            $category = Db::name('category')->insert($data);
            if($category){
                return json(['code'=>1,'msg'=>'操作成功']);
            }
            return json(['code'=>0,'msg'=>'操作失败']);
//        }catch (\Exception $e){
//            return json(['code'=>0,'msg'=>'系统错误']);
//        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
