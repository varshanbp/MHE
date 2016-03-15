<?php
#require_once('../db-conn.php');
#require_once('../authenticator.php');
 ?>

<!DOCTYPE html>
<html>
<title>DA Data Processing :: Digtal Attendance by JSSV</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../digi-attend/css/w3.css">

<!-- LIST STUDENTS - Modal 2 - START -->
<div id="id02" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id02').style.display='none'"
      class="w3-closebtn">x</span>
      <h2>Select Required Options to List Students</h2>
    </header>
    <div class="w3-container w3-padding-32">
      <div style='text-align: center;'>
      <i class="material-icons w3-xxxlarge">account_circle</i><i class="material-icons w3-xxxlarge">list</i>

      <!-- FORM - START -->
      <form action="../includes/processors/list-stu.php" method="POST" target="if1" class="w3-container">

      <p><input class="w3-radio" type="radio" name="sem" value="1-2" checked />
      <label class="w3-validate">I / II</label>&nbsp;&nbsp;&nbsp;

      <input class="w3-radio" type="radio" name="sem" value="3-4" checked />
      <label class="w3-validate">III / IV</label>&nbsp;&nbsp;&nbsp;

      <input class="w3-radio" type="radio" name="sem" value="5-6" checked />
      <label class="w3-validate">V / VI</label></p>

      <p><input class="w3-btn w3-light-green" type="submit" onclick="document.getElementById('id02').style.display='none'" />
      <input class="w3-btn w3-yellow" type="reset" />
      <button class="w3-btn w3-red" onclick="document.getElementById('id02').style.display='none'">Cancel</button></p>

      </form>
      <!-- FORM - END -->
      </div>
    </div>
    <footer class="w3-container w3-teal">
      <p style="text-align:center;">&copy; 2016 JSSV under Attribution Assurance License. All rights reserved</p>
    </footer>
  </div>
</div>
<!-- LIST STUDENTS - Modal 2 - END -->

<!-- LIST STUDENTS - Modal 3 - START -->
<div id="id03" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id03').style.display='none'"
      class="w3-closebtn">x</span>
      <h2>Select Required Options to List Students</h2>
    </header>
    <div class="w3-container w3-padding-32">
      <div style='text-align: center;'>
      <i class="material-icons w3-xxxlarge">account_circle</i><i class="material-icons w3-xxxlarge">list</i>

      <!-- FORM - START -->
      <form action="../includes/processors/mark-pa.php" method="POST" target="if1" class="w3-container">

      <p><input class="w3-radio" type="radio" name="sem" value="1-2" checked />
      <label class="w3-validate">I / II</label>&nbsp;&nbsp;&nbsp;

      <input class="w3-radio" type="radio" name="sem" value="3-4" checked />
      <label class="w3-validate">III / IV</label>&nbsp;&nbsp;&nbsp;

      <input class="w3-radio" type="radio" name="sem" value="5-6" checked />
      <label class="w3-validate">V / VI</label></p>

      <p><input class="w3-btn w3-light-green" type="submit" onclick="document.getElementById('id03').style.display='none'" />
      <input class="w3-btn w3-yellow" type="reset" />
      <button class="w3-btn w3-red" onclick="document.getElementById('id03').style.display='none'">Cancel</button></p>

      </form>
      <!-- FORM - END -->
      </div>
    </div>
    <footer class="w3-container w3-teal">
      <p style="text-align:center;">&copy; 2016 JSSV under Attribution Assurance License. All rights reserved</p>
    </footer>
  </div>
</div>
<!-- LIST STUDENTS STUDENT - Modal 3 - END -->

<!-- LIST STUDENTS - Modal 4 - START -->
<div id="id04" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id04').style.display='none'"
      class="w3-closebtn">x</span>
      <h2>Select Required Options to List Students</h2>
    </header>
    <div class="w3-container w3-padding-32">
      <div style='text-align: center;'>
      <i class="material-icons w3-xxxlarge">account_circle</i><i class="material-icons w3-xxxlarge">list</i>

      <!-- FORM - START -->
      <form action="../includes/processors/list-att.php" method="POST" target="if1" class="w3-container">

      <p><input class="w3-radio" type="radio" name="sem" value="1-2" checked />
      <label class="w3-validate">I / II</label>&nbsp;&nbsp;&nbsp;

      <input class="w3-radio" type="radio" name="sem" value="3-4" checked />
      <label class="w3-validate">III / IV</label>&nbsp;&nbsp;&nbsp;

      <input class="w3-radio" type="radio" name="sem" value="5-6" checked />
      <label class="w3-validate">V / VI</label></p>

      <p><input class="w3-btn w3-light-green" type="submit" onclick="document.getElementById('id04').style.display='none'" />
      <input class="w3-btn w3-yellow" type="reset" />
      <button class="w3-btn w3-red" onclick="document.getElementById('id04').style.display='none'">Cancel</button></p>

      </form>
      <!-- FORM - END -->
      </div>
    </div>
    <footer class="w3-container w3-teal">
      <p style="text-align:center;">&copy; 2016 JSSV under Attribution Assurance License. All rights reserved</p>
    </footer>
  </div>
</div>
<!-- LIST STUDENTS STUDENT - Modal 4 - END -->

<!-- LIST STUDENTS - Modal 5 - START -->
<div id="id05" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id05').style.display='none'"
      class="w3-closebtn">x</span>
      <h2>Select Required Options to List Students</h2>
    </header>
    <div class="w3-container w3-padding-32">
      <div style='text-align: center;'>
      <i class="material-icons w3-xxxlarge">account_circle</i><i class="material-icons w3-xxxlarge">list</i>

      <!-- FORM - START -->
      <form action="../includes/processors/list-att.php" method="POST" target="if1" class="w3-container">

      <p><input class="w3-radio" type="radio" name="sem" value="1-2" checked />
      <label class="w3-validate">I / II</label>&nbsp;&nbsp;&nbsp;

      <input class="w3-radio" type="radio" name="sem" value="3-4" checked />
      <label class="w3-validate">III / IV</label>&nbsp;&nbsp;&nbsp;

      <input class="w3-radio" type="radio" name="sem" value="5-6" checked />
      <label class="w3-validate">V / VI</label></p>

      <input type="hidden" name="td-param" value="1" />

      <p><input class="w3-btn w3-light-green" type="submit" onclick="document.getElementById('id05').style.display='none'" />
      <input class="w3-btn w3-yellow" type="reset" />
      <button class="w3-btn w3-red" onclick="document.getElementById('id04').style.display='none'">Cancel</button></p>

      </form>
      <!-- FORM - END -->
      </div>
    </div>
    <footer class="w3-container w3-teal">
      <p style="text-align:center;">&copy; 2016 JSSV under Attribution Assurance License. All rights reserved</p>
    </footer>
  </div>
</div>
<!-- LIST STUDENTS STUDENT - Modal 5 - END -->
