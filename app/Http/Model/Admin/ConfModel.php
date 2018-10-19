<?php

namespace App\Http\Model\Admin;

use Illuminate\Support\Facades\Validator;


class ConfModel extends CommonModel
{
    protected $table = 'conf';

    public function getConf()
    {
        return $this->orderBy('sort', $this->order)->paginate($this->page);
    }

    /**
     * 处理系统配置项数据
     * @return array 系统配置项数据
     */
    public function getInfo()
    {
        $conf_s =  $this->all();
        $conf_res = [];
        foreach ($conf_s as $k => $conf)
        {
            if ($conf->conf_type == 1) {
                $conf_res['goods_conf'][$k] = $conf;
            } else if ($conf->conf_type == 2) {
                $conf_res['shop_conf'][$k]  = $conf;
            } else {
                $conf_res['seo_conf'][$k]  = $conf;
            }
        }
        return $conf_res;
    }

    public function confInfo($data, $files)
    {
        // 复选框空选,  置空
        $check = $this->where('form_type', 3)->select('ename')->get(); // 查询所有复选类型
        $_check = [];
        if ($check) {
            foreach ($check as $k => $v)
            {
                $_check[] = $v->ename; // 重组为一唯数组
            }
        }

        $_data = array();
        foreach ($data as $k => $v)
        {
            $_data[] = $k;
            if (is_array($v)) {
                $value = implode(',', $v);
                $this->where('ename', $k)->update(['value' => $value]);
            } else if (!is_object($v)) {
                $this->where('ename', $k)->update(['value' => $v]);
            }
        }

        foreach ($check as $k => $v)
        {
            // 如果复选框没有点选, 前台就不会发发送过来 (检测数组中有没有)
            if (!in_array($v->ename, $_data)) {
                $this->where('ename', $v->ename)->update(['value' => '']);
            }
        }

        foreach ($files as $k => $file)
        {
            $src = CONF_IMG . '/' . $this->where('ename', $k)->select('value')->first()->value;
            if (file_exists($src)) {
                @unlink($src);
            }
            $file = $this->upload($file, $k, CONF_IMG);
            if ($file) {
                $this->where('ename', (string) $k)->update(['value' => $file]);
            }
        }

        $this->putConfFile();
        return msg('系统配置更新成功!');
    }

    /**
     * 将配置读取写入配置文件 config/web.php
     */
    public function putConfFile()
    {
        $conf_s = $this->pluck('value', 'ename');

        $conf = [];
        foreach ($conf_s as $k => $v) {
            $conf[$k] = $v;
        }

        $path   = config_path() . '/site.php';
        $conf_s = var_export($conf, true);
        $str    = "<?php \r\n return {$conf_s};";
        file_put_contents($path, $str);
    }

    public function add($data)
    {
        $rules   = [
            'cname'  => 'required|unique:' . $this->table . ',cname',
            'ename'  => 'required|unique:' . $this->table . ',ename',
        ];

        $message = [
            'cname.required' => '中文名称不能为空!',
            'cname.unique'   => '中文名称已经存在!',
            'ename.required' => '英文名称不能为空!',
            'ename.unique'   => '英文名称已经存在!',
        ];

        $validator = Validator::make($data, $rules, $message);
        if ($validator->fails()) {
            return msg($validator);
        }

        if($data['form_type'] == '2' || $data['form_type'] == '3' || $data['form_type'] == '4') {
            $data['values'] = str_replace('，', ',', $data['values']);
            $data['value']  = str_replace('，', ',', $data['value']);
        }

        if (!$this->insert($data)) {
            return msg('新增配置失败,请稍后再试!');
        }

        $this->putConfFile();
        return msg('新增配置成功!', 'admin/conf');
    }

    public function edit($id, $data)
    {
        $rules   = [
            'cname'  => 'required',
            'ename'  => 'required',
        ];

        $message = [
            'cname.required' => '中文名称不能为空!',
            'ename.required' => '英文名称不能为空!',
        ];

        $validator = Validator::make($data, $rules, $message);
        if ($validator->fails()) {
            return msg($validator);
        }

        if($data['form_type'] == '2' || $data['form_type'] == '3' || $data['form_type'] == '4'){
            $data['values'] = str_replace('，', ',', $data['values']);
            $data['value']  = str_replace('，', ',', $data['value']);
        }

        if (!$this->where('id', $id)->update($data)) {
            return msg('修改配置失败,请稍后再试!');
        }

        $this->putConfFile();
        return msg('修改配置成功!', 'admin/conf');
    }

    public function del($id) 
    {
        if(empty($id)) {
            return msg('非法操作!');
        }
        
        $conf = $this->find($id);
        if ($conf->form_type == 6) {
            $conf = CONF_IMG . '/' . $conf->value;
            if (file_exists($conf)) {
                @unlink($conf);
            }
        }

        if ($this->destroy($id)) {
            $this->putConfFile();
            $data = ['status' => 0, 'msg' => '删除配置成功!'];
        } else {
            $data = ['status' => 1, 'msg' => '删除配置失败,请稍候再试!'];
        }
        return $data;
    }

}
