
<?php
/* require_once("includes/connection.php"); */
if ($_POST) {
    $shwrum_name = $_POST['shwrum_name'];
    if ($shwrum_name != '') {
      /* $sql1 = "SELECT ANAME FROM activity WHERE APRJCT= '$prjct_name'";
       $result1 = mysql_query($sql1);*/
      $book_data=<<<EOD
   
                      <div  class="shwRum1_buk_slots" >You have selected <strong>ShowRoom1</strong><i><strong>- Book Your Slot...</strong></i></div>
                                                       
                    <div class=" table-responsive no-padding" style="margin-left:3%;width:550px;float:left">
                        <table class="table table-hover">
         <tr>
                                <th><input type="radio" name="slot" value="9">&nbsp;&nbsp;9am&nbsp;<span class="badge bg-green">6 Slots</span></th>
                                <th><input type="radio" name="slot" value="10">&nbsp;&nbsp;10am&nbsp;<span class="badge bg-grey">0 Slots</span></th>
                                <th><input type="radio" name="slot" value="11">&nbsp;&nbsp;11am&nbsp;<span class="badge bg-green">4 Slots</span></th>
                                <th><input type="radio" name="slot" value="12">&nbsp;&nbsp;12pm&nbsp;<span class="badge bg-grey">0 Slots</span></th>
                            </tr>
                            <tr>
                                <th><input type="radio" name="slot" value="1">&nbsp;&nbsp;1pm&nbsp;&nbsp;<span class="badge bg-red">2 Slots</span></th>
                                <th><input type="radio" name="slot" value="2">&nbsp;&nbsp;2pm&nbsp;&nbsp;<span class="badge bg-green">6 Slots</span></th>
                                <th><input type="radio" name="slot" value="3">&nbsp;&nbsp;3pm&nbsp;&nbsp;<span class="badge bg-grey">0 Slots</span></th>
                                <th><input type="radio" name="slot" value="4">&nbsp;&nbsp;4pm&nbsp;&nbsp;<span class="badge bg-green">6 Slots</span></th>
                            </tr>
                            <tr>
                                <th><input type="radio" name="slot" value="5">&nbsp;&nbsp;5pm&nbsp;&nbsp;<span class="badge bg-green">9 Slots</span></th>
                                <th><input type="radio" name="slot" value="6">&nbsp;&nbsp;6pm&nbsp;&nbsp;<span class="badge bg-green">5 Slots</span></th>
                                <th><input type="radio" name="slot" value="7">&nbsp;&nbsp;7pm&nbsp;&nbsp;<span class="badge bg-green">4 Slots</span></th>
                                <th><input type="radio" name="slot" value="8">&nbsp;&nbsp;8pm&nbsp;&nbsp;<span class="badge bg-red">1 Slots</span></th>
                            </tr>
                        </table>
                    </div>
                     <div style="width:200px;float:right;">
                        <!-- Info box -->
                        <div class="box box-solid box-info">
                            <div class="box-header">
                                <h3 class="box-title" style="font-size:15px">Color Code</h3>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body"  style="float:left;">
                                <p>
                                    <span class="badge bg-grey">Grey&nbsp;</span> &nbsp;- Slots Empty</br>
                                    <span class="badge bg-red">Red&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;- Few Slots</br>
                                    <span class="badge bg-green">Green</span> -&nbsp;More Slots 
                                </p>
                              </div></div></div>
                    </div>
EOD;
  echo $book_data;

    }
}

?>
