<div class="span3">
  <div class="sidebar">
    <ul class="widget widget-menu unstyled">
      <li>
        <a href="http://localhost/Complaint Management System/ComplaintDetails/statistics.php">
          <i class="menu-icon icon-group"></i>
          Statistics
        </a>
      </li>

      <li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Manage Complaint
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="notprocess-complaint.php">
											<i class="icon-tasks"></i>
											Not Process Yet Complaint
                      <?php 
                        $status="null";                   
                        $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where status='$status'");
                        $num1 = mysqli_num_rows($rt);
                        {?><b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
                      <?php } ?>
										</a>
									</li>
									<li>
										<a href="inprocess-complaint.php">
											<i class="icon-tasks"></i>
											Pending Complaint
                    <?php 
                      $status="pending";                   
                      $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where status='$status'");
                      $num1 = mysqli_num_rows($rt);
                      {?><b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
                    <?php } ?>
										</a>
									</li>
									<li>
										<a href="closed-complaint.php">
											<i class="icon-inbox"></i>
											Closed tblcomplaints
	                  <?php 
                      $status="closed";                   
                      $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where status='$status'");
                      $num1 = mysqli_num_rows($rt);
                      {?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
                    <?php } ?>

										</a>
									</li>
								</ul>
              </li>
              
      <li>
        <a class="collapsed" data-toggle="collapse" href="#togglePagesYear">
          <i class="menu-icon icon-cog"></i>
          <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
          User
        </a>
        <ul id="togglePagesYear" class="collapse unstyled">
          <?php $sqll=mysqli_query($bd, "SELECT DISTINCT userName FROM `tblcomplaints`");
          while ($rww=mysqli_fetch_array($sqll)) {
              $user = $rww['userName']
            ?>
            <li>
              <?php 
                echo '<a href="http://localhost/Complaint Management System/ComplaintDetails/sortByUser.php?param='.$user.'&user='.$user.'">'
              ?>
                <i class="icon-tasks"></i>
                <?php echo $user; ?>
              </a>
            </li>
          <?php
          }
          ?>
        </ul>
      </li>
    </ul>

  </div><!--/.sidebar-->
</div><!--/.span3-->
