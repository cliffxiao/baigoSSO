<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if (!defined('IN_BAIGO')) {
    exit('Access Denied');
}

/*-------------------------通用-------------------------*/
return array(
    /*------页面标题------*/
    'page'             => array(
        'show'              => '查看',
    ),

    /*------链接文字------*/
    'href'             => array(
        'all'             => '全部',
        'help'            => '帮助',
        'show'            => '查看',
    ),

    /*------说明文字------*/
    'label'            => array(
        'id'                => 'ID',
        'all'               => '全部',
        'key'               => '关键词',
        'unknow'            => '未知',
        'status'            => '状态',
        'type'              => '类型',
        'operator'          => '操作者',
        'timeInit'          => '发起时间',
        'timeExpired'       => '过期时间',
        'timeDisable'       => '使用时间',
    ),

    'status' => array(
        'enable'    => '有效', //生效
        'disable'   => '失效', //禁用
        'expired'   => '过期',
    ),

    'type' => array(
        'mailbox'   => '更换邮箱',
        'confirm'   => '用户激活',
        'forgot'    => '找回密码',
    ),

    /*------选择项------*/
    'option'           => array(
        'allStatus'         => '所有状态',
        'batch'             => '批量操作',
        'del'               => '永久删除',
    ),

    /*------按钮------*/
    'btn' => array(
        'submit'    => '提交',
    ),

    /*------确认框------*/
    'confirm'          => array(
        'del'             => '确认永久删除吗？此操作不可恢复！',
    ),
);
