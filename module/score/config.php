<?php
$config->score = new stdClass();

$config->score->model['user']['login'] = array('num'=>3, 'time'=>24, 'score'=>1, 'other'=>'');








$config->score->model['tutorial']['keepAll']  = array(1, 0, 100, '');
$config->score->model['my']['changePassword'] = array(1, 0, 10, array(1 => 2, 2 => 5));
$config->score->model['my']['editProfile']    = array(1, 0, 10, '');

$config->score->model['block']['admin'] = array(1, 0, 20, '');

$config->score->model['ajax']['selectTheme']       = array(1, 0, 10, '');
$config->score->model['ajax']['selectLang']        = array(1, 0, 10, '');
$config->score->model['ajax']['showSearchMenu']    = array(1, 0, 10, '');
$config->score->model['ajax']['dragSelected']      = array(1, 0, 20, '');
$config->score->model['ajax']['lastNext']          = array(1, 0, 20, '');
$config->score->model['ajax']['switchToDataTable'] = array(1, 0, 1, '');
$config->score->model['ajax']['submitPage']        = array(1, 0, 1, '');

$config->score->model['bug']['saveTplModal'] = array(1, 0, 20, '');

$config->score->model['custom']['ajaxMenu'] = array(1, 0, 1, '');

$config->score->model['search']['saveQuery']         = array(1, 0, 1, '');
$config->score->model['search']['saveQueryAdvanced'] = array(1, 0, 1, '');


$config->score->model['my']['todo']    = array(5, 24, 1, '');

$config->score->model['story']['create']    = array(0, 0, 1, '');//需求
$config->score->model['task']['create']     = array(0, 0, 1, '');//任务
$config->score->model['bug']['create']      = array(0, 0, 1, '');//bug 有效之后，额外增加严重程度积分：s1 + 3, s2 + 2, s3 + 1
$config->score->model['doc']['create']      = array(0, 0, 5, '');//文档
$config->score->model['testcase']['create'] = array(0, 0, 1, '');//用例

//每完成一个任务，增加初始积分1 + 工时积分round(工时 /10 * 预计 / 消耗) + 优先级积分(p1 2, p2, 1) 如果任务取消了，没有积分。
$config->score->model['task']['finish']        = array(0, 0, 1, array('time'=>'#time#/10 * #estimate# / #consumed#','pri'=>array(0=>0,1=>2,2=>1,3=>0)));//关闭一个任务，关闭者增加一个积分。
$config->score->model['task']['close']         = array(0, 0, 1, '');//关闭一个任务，关闭者增加一个积分。
$config->score->model['bug']['resolve']        = array(0, 0, 1, '');//解决一个bug，额外增加解决bug积分：s1 + 3, s2 + 2, s3 + 1
$config->score->model['testcase']['runCase']   = array(0, 0, 1, '');//每执行一次用例，加1分
$config->score->model['bug']['createFormCase'] = array(0, 0, 1, '');//从用例创建bug，用例的创建者加1分
$config->score->model['project']['build']      = array(0, 0, 10, '');//创建一个build，创建者增加10个积分
$config->score->model['project']['create']     = array(0, 0, 10, '');//创建一个项目，创建者增加10个积分
$config->score->model['productplan']['create'] = array(0, 0, 10, '');//创建一个计划，创建者增加10个积分
$config->score->model['release']['create']     = array(0, 0, 10, '');//创建一个发布，创建者增加10个积分
$config->score->model['story']['close']     = array(0, 0, 1, array('createID'=>2));//每个需求被完成关闭，需求的创建者额外增加2分，关闭者增加1分