<?php /* Smarty version 3.1.27, created on 2015-08-29 15:10:29
         compiled from "D:\soft\xampp\htdocs\talk\templates\page.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2508655e1af4598f8d8_68801683%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e7602d571abade9388b40bdaac12c8988def7ff' => 
    array (
      0 => 'D:\\soft\\xampp\\htdocs\\talk\\templates\\page.tpl',
      1 => 1440853828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2508655e1af4598f8d8_68801683',
  'variables' => 
  array (
    'head_bg' => 0,
    'user' => 0,
    'talk' => 0,
    'k' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e1af45a120e2_73360469',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e1af45a120e2_73360469')) {
function content_55e1af45a120e2_73360469 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2508655e1af4598f8d8_68801683';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>我的爱车有话说</title>
<?php echo '<script'; ?>
 src="static/js/jquery-1.11.3.js"><?php echo '</script'; ?>
>

<style type="text/css">     
.left {     
    float:left;     
    display:inline;     
    width:15%;  
}     
.right{     
    float:right;     
    display:inline;     
    width:80%;  
}   

body{
    line-height: 1.6;
}  

.avatar{
    height:3em;
}

hr{
    border-style: inset; 
}

.talk td{
    vertical-align: top;
}

.name{
    color: #6098FE;
    font-weight: bold;
    margin-top: 0px!important;
}

/*顶部区域背景图片，只选择图片的部分作为背景*/
.head_bg{
    display: block;/*一定要有*/
    background-image:url(<?php echo $_smarty_tpl->tpl_vars['head_bg']->value;?>
);
    background-repeat: repeat-x;
    background-position: -100px -400px;/*要显示的区域坐标，左上角为原点*/
    
    height: 210px;
    margin-top: -16px;
    margin-left: -10px;
    margin-right: -10px;

}

.user{
    margin-top: -60px;
}

.user img{
    height:5em;
}

.signature{
    color: #eeeeee;
}

table{
    cellspacing: 20;
}


button{
    border-radius: 5px;
    font-size:14pt;
    text-align:center;
    background:#FFFFFF;
    border:1px solid #FF8700;
    -webkit-border-radius: 2px;
    outline:none;
    color:#222;
    box-shadow:0 1px #ffa033 inset, 0px 1px 3px #bebdbd;
}

/*
button{
    background-color:#ffffff;
    border-color: #FFB200;
}
*/

</style>

    <?php echo '<script'; ?>
>
        var flag = 1;
        function change(){
            moment = document.getElementById("moment").childNodes;
            if(flag == 1){
                for(i=0; i<moment.length; i++){
                    if(moment[i].id !== undefined && moment[i].id!="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
"){
                        moment[i].style.visibility="hidden";
                    }
                }
            }else{
                for(i=0; i<moment.length; i++){
                    if(moment[i].id !== undefined && moment[i].id!="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
"){
                        moment[i].style.visibility="";
                    }
                }
            }
        }

        function same_brand(){
            flag = 1;
            change();
            flag = 0;
        }

        function all_brand(){
            flag = 0;
            change();
            flag = 1;
        }
    <?php echo '</script'; ?>
>

</head>

<body>

    <!-- begin 顶部 -->
    <div class="head_bg">
        <label class="btn-file" data-role="add">
            <img align="right" src="static/img/camera.png" height="20%"></p>
            <input type="file" class="input-file" data-role="uploader" accept="image/*" style="display:none">
        </label>
    </div>
    <table class="user" id="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
">
        <tr>
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value["avatar"];?>
"></td>
            <td><span class="signature"><?php echo $_smarty_tpl->tpl_vars['user']->value["signature"];?>
</span><br/><span class="username"><?php echo $_smarty_tpl->tpl_vars['user']->value["name"];?>
</span></td>
        </tr>
    </table>
    
    <div align="center">
        <button onclick="same_brand()">同品牌</button><button onclick="all_brand()">看全部</button>
    </div>
    <!-- end 顶部 -->

    <!-- begin 用户发表的状态 -->
    <div id="moment">
        <?php
$_from = $_smarty_tpl->tpl_vars['talk']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
        <div id="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
            <table class="talk">
                <tr>
                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value["avatar"];?>
" class="avatar"></td>
                    <td><span class="name"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</span><br/><span><?php echo $_smarty_tpl->tpl_vars['value']->value["content"];?>
</span></td>
                </tr>
            </table>
            <hr style="height:1px;border:none;border-top:1px solid #dddddd;" />
        </div>
        <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
    </div>
    <!-- end 用户发表的状态 -->
</body>
</html>  
<?php }
}
?>