<?php
// ┏┓ 　　　┏┓┏┓
// ┃┃┏━┳┳┳━┓┃┗┛┣━┳┳┓
// ┃┗┫┃┃┃┃┻┫┗┓┏┫┃┃┃┃
// ┗━┻━┻━┻━┛ ┗┛┗━┻━┛
namespace app\index\controller;

use think\Controller;
use think\Request;
// use think\Db;

class Index extends Controller
{
    public function index()
    {
        return '阿拉山口回复看电视脚后跟';
    }

    public function test()
    {
        // $result = Db::table('information')->select();
        // $result = Db::name('information')->select();
        $result = db('information')->select();
  //       Db::transaction(function () {
		//     Db::table('think_user')
		//         ->delete(1);
		//     Db::table('think_data')
		//         ->insert(['id' => 28, 'name' => 'thinkphp', 'status' => 1]);
		// });
		// // 启动事务
		// Db::startTrans();
		// try {
		//     Db::table('think_user')
		//         ->delete(1);
		//     Db::table('think_data')
		//         ->insert(['id' => 28, 'name' => 'thinkphp', 'status' => 1]);
		//     // 提交事务
		//     Db::commit();
		// } catch (\Exception $e) {
		//     // 回滚事务
		//     Db::rollback();
		// }
        echo request()->url();
        dump($result);die;
        $this->assign('name', '1346546');
        return $this->fetch();
    }

    protected function hello2()
    {
        return '只是protected方法!';
    }

    private function hello3()
    {
        return '这是private方法!';
    }
}
