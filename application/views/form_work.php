<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Work</title>

	
</head>
<body>
<center><h1>ข้อมูลส่วนตัว</h1></center>
<center><form method="post" action="../Personal/create">
    <table width="50%" border="0">
  <tr>
    <td>ชื่อ-นามสกุล</td>
    <td><input name="Name_LastName" type="text" maxlength="100"/></td>
  </tr>
  <tr>
    <td>เลขบัตรประจำตัวประชาชน</td>
    <td><input name="ID_Card" type="text" id="ID_Card" size="30" maxlength="13"/></td>
  </tr>
  <tr>
    <td>วัน/เดือน/ปีเกิด</td>
    <td><label for="Date_Of_Birth"></label><input type="date" name="Date_Of_Birth"  /></td>
  </tr>
  <tr>
    <td>เพศ</td>
    <td><input type="radio" name="Sex" value="ชาย" />
    <label for="radio">ชาย</label>
    <input type="radio" name="Sex" value="หญิง" />
    <label for="radio2">หญิง</label></td>
  </tr>
  <tr>
    <td>ที่อยู่</td>
    <td><label for=""></label><label for="textarea2"></label><textarea name="Address"  cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>เบอร์โทรศัพท์</td>
    <td><label for="E-mail"></label>
    <input name="Tel" type="text" maxlength="10" /></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td><label for="textarea"></label>
    <label for="E_mail"></label>
    <input name="E_mail" type="text" id="E-mail" size="40" maxlength="50" /></td>
  </tr>
  <tr>
    <td>Facebook</td>
    <td><label for="textfield"></label>
    <input name="Facebook" type="text" maxlength="50"  /></td>
  </tr>
  <tr>
    <td>Instagram</td>
    <td><input name="Instagram" type="text" maxlength="50" id="Instagram"  /></td>
  </tr>
</table>
<br><br>
<center><input name="submit" type="submit" value="บันทึก" /></center>
</body>
</html>