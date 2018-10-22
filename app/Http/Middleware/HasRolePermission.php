<?php

namespace App\Http\Middleware;

use App\Http\Model\Admin\AdminModel;
use App\Http\Model\Admin\RoleModel;
use App\Http\Model\Admin\permissionModel;
use Closure;


class HasRolePermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = AdminModel::find(session('id'));
        $role = $user->roles;
        $arr = [];
        foreach($role as $r1){
            $per = $r1->permissions;
            foreach ($per as $url){
                $arr[] = $url->per_url;
            }
        }
        $arrs = array_unique($arr);
        $uls = \Request::getRequestUri();
//        dump($arrs);
//        dump($uls);
        //解决分页，修改，删除
        $uls = preg_replace('/\/\d\//','/$id/',$uls);
//
        $uls = preg_replace('/\/\d{1,}/','/$id',$uls);
//
        $uls = preg_replace('/\?\S{0,}/','',$uls);

        //判断
        if(in_array($uls,$arrs)){
            return $next($request);
        } else {
                return redirect(url('/admin/index'))->with('error','你没有该权限~');
        }
    }
}
