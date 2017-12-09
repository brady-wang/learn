<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="../date/My97DatePicker/WdatePicker.js?v=1"></script>
</head>
<body>
<td><input onClick="WdatePicker({dateFmt: 'yyyy', lang: 'zh-cn',readOnly:true,errDealMode:1,autoPickDate:true,qsEnabled:false})" class="span2" id="year"  type="text" name="year" value="<?php echo isset($where["year"]) ? $where["year"] :"";?>" placeholder="请选择年份"></td>

</body>
</html>