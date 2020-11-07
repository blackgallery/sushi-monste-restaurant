<?php
ob_start();
$page = 'holidays';
include "inc/header.php";
?>

      <div class="content-wrapper holidays_area">
        <div class="content">
          <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 basic_form">
              <div class="card">
                <div class="card-body">
                  <div class="card-header">
                    <h3 class="d-inline font-primary">HR-HOLIDAYS</h3> 
                  </div>

					<table class="table table_custom">
					   <thead>
					      <tr>
					         <th>DAY</th>
					         <th>DATE</th>
					         <th>HOLIDAY</th>
					      </tr>
					   </thead>
					   <tbody>
					      <tr>
					         <td><span>Tuesday</span></td>
					         <td><span>Jan 01, 2019</span></td>
					         <td><span>New Year's Day</span></td>
					      </tr>
					      <tr>
					         <td><span>Monday</span></td>
					         <td><span>Jan 14, 2019</span></td>
					         <td><span>Makar Sankranti / Pongal</span></td>
					      </tr>
					      <tr>
					         <td><span>Saturday</span></td>
					         <td><span>Jan 26, 2019</span></td>
					         <td><span>Republic Day</span></td>
					      </tr>
					      <tr>
					         <td><span>Monday</span></td>
					         <td><span>Mar 04, 2019</span></td>
					         <td><span>Maha Shivaratri</span></td>
					      </tr>
					      <tr>
					         <td><span>Thursday</span></td>
					         <td><span>Mar 21, 2019</span></td>
					         <td><span>Holi</span></td>
					      </tr>
					      <tr>
					         <td><span>Friday</span></td>
					         <td><span>Apr 19, 2019</span></td>
					         <td><span>Good Friday</span></td>
					      </tr>
					      <tr>
					         <td><span>Wednesday</span></td>
					         <td><span>Jun 05, 2019</span></td>
					         <td><span>Eid-ul-Fitar</span></td>
					      </tr>
					      <tr>
					         <td><span>Thursday</span></td>
					         <td><span>Aug 15, 2019</span></td>
					         <td><span>Independence Day</span></td>
					      </tr>
					      <tr>
					         <td><span>Wednesday</span></td>
					         <td><span>Oct 02, 2019</span></td>
					         <td><span>Mathatma Gandhi Jayanti</span></td>
					      </tr>
					      <tr>
					         <td><span>Wednesday</span></td>
					         <td><span>Dec 25, 2019</span></td>
					         <td><span>Christmas</span></td>
					      </tr>
					   </tbody>
					</table>
                </div> <!-- .card-body -->
              </div>  <!-- .card -->
            </div> <!-- .col-lg-6 m-t-30 basic_form -->
          </div> <!-- .row (2nd)--> 
        </div> <!-- .content -->
      </div>
      <!-- End: content-wrapper Section -->
<?php include 'inc/footer.php';
ob_end_flush();
?>