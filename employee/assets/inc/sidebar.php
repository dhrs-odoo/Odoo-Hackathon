<div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class=""><a href="emp-dashboard.php"><i class="icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
                  </li>
                    <?php
                      $aid=$_SESSION['emp_id'];//assaign session a varible [PASSENGER ID]
                      $ret="select * from orrs_employee where emp_id=?";
                      $stmt= $mysqli->prepare($ret) ;
                      $stmt->bind_param('i',$aid);
                      $stmt->execute() ;//ok
                      $res=$stmt->get_result();
                      //$cnt=1;
                      while($row=$res->fetch_object())
                      {
                    ?>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span><?php echo $row->emp_uname;?>'s Profile</span></a>
                    <ul class="sub-menu">
                      <li><a href="emp-profile.php">View</a>
                      </li>
                      <li><a href="emp-profile-update.php">Update</a>
                      </li>
                      
                      <li><a href="emp-profile-avatar.php">Profile Avatar</a>
                      </li>
                      <li><a href="emp-profile-password.php">Change Password</a>
                      </li>
                      
                    </ul>
                  </li>
                    <?php }?>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-train"></i><span>Trains</span></a>
                  
                    <ul class="sub-menu">
                       <li><a href="emp-add-train.php">Add Train</a>
                       <li><a href="emp-manage-train.php">Manage Trains</a>
                    </li>
                      
                    </ul>
                
                  </li>

                  <li class="parent"><a href="#"><i class="icon mdi mdi-train"></i><span>Facility</span></a>
                  
                  <ul class="sub-menu">
                     <li><a href="Breakfast.php">BreakFast Meal</a>
                     <li><a href="Lunch.php">Lunch Meal</a>
                     <li><a href="Dinner.php">Dinner Meal</a>
                     <li><a href="Bed-rolls.php">Bed Rolls</a>
                  </li>
                    
                  </ul>
              
                </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-briefcase-edit-outline"></i><span>Passengers</span></a>
                    <ul class="sub-menu">
                      <li><a href="emp-add-passenger.php">Add Passenger</a>
                      </li>
                      <li><a href="emp-manage-passengers.php">Manage Passengers</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-ticket-confirmation"></i><span>Tickets</span></a>
                    <ul class="sub-menu">
                      <li><a href="emp-approved-tickets.php"><span class="badge badge-success float-right">Approved</span>View</a>
                      <li><a href="emp-pending-tickets.php"><span class="badge badge-info float-right">Pending</span>View</a>
                      <li><a href="emp-tickets.php">Manage</a>
                      </li>
                    </ul>
                  </li>                  
                  <li><a href="emp-logout.php "><i class="icon mdi mdi-exit-run"></i><span>Logout</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>