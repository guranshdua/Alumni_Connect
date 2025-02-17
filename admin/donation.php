<!doctype HTML>
<html>
  <head>
    <?php
    include("./partials/meta.php");
     ?>
  </head>
  <body>
    <div>
      <?php
      include("./partials/nav.php");
       ?>
       <div class="news">
         <div class="row">
           <div class="col-md-3" >
             <div class="affix">
                 <div class="card" style="width:100%; height:100%; z-index:1;">
                  <div class="card-body">
                    <br /><br /><br />
                    <div class="row">
                      <div class="col-sm-12 f700" >
                        <img src="../images/home_laptop_1.png"  style="height:50px; border-radius:50px;"/>&nbsp&nbsp&nbspGURANSH DUA
                      </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="./index.php"><h6 class="card-title f600"><i class="fas fa-home"></i> Dashboard</h6></a>
                    <a href="./news.php"><h6 class="card-title f600"><i class="far fa-newspaper"></i> News Feed</h6></a>
                    <a href="./events.php"><h6 class="card-title f600"><i class="fas fa-users"></i> Events</h6></a>
                    <a href="./photo.php"><h6 class="card-title f600"><i class="fas fa-camera"></i> Photo Gallery</h6></a>
                    <a href="./jobs.php"><h6 class="card-title f600"><i class="fas fa-chart-line"></i> Careers</h6></a>
                    <a href="./donation.php"><h6 class="card-title f600"><i class="fas fa-rupee-sign"></i> Donations</h6></a>
                  </div>
                </div>
             </div>
           </div>
           <div class="col" style="padding-right:30px">
             <div class="row">
               <div class="col-md-12">
                 <br /><br /><br /><br />
                 <button class="btn btn-info" style="width:100%; text-align:left;" id="toggle-button">Add new project</button>
                 <div class='card-container d-none' id="form-container">
                   <br />
                   <div class="card ml-auto mr-auto " style="width:100%;">
                     <div class="card-body">
                       <form>
                         <div class="form-group row">
                          <label for="Name" class="col-sm-3 col-form-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="Name" placeholder="">
                          </div>
                         </div>
                         <div class="form-group row">
                           <label for="Organisation" class="col-sm-3 col-form-label">Chapter/Organisation</label>
                           <div class="col-sm-9">
                           <input type="text" class="form-control" id="Organisation" placeholder="">
                         </div>
                       </div>
                       <div class="form-group row">
                        <label for="Location" class="col-sm-3 col-form-label">Location</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="Location" placeholder="">
                        </div>
                      </div>
                      <div class="form-group row">
                       <label for="Duration" class="col-sm-3 col-form-label">Duration</label>
                       <div class="col-sm-9">
                         <input type="text" class="form-control" id="Duration" placeholder="">
                       </div>
                     </div>
                     <div class="form-group row">
                      <label for="Type" class="col-sm-3 col-form-label">Type</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="Type" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                     <label for="Desc" class="col-sm-3 col-form-label">Description</label>
                     <div class="col-sm-9">
                       <input type="text" class="form-control" id="Desc" placeholder="">
                     </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Publish</button>
                      </div>
                    </div>
                       </form>
                     </div>
                   </div>
                 </div>
                 <div class="row">

                   <div class="col-sm-6">
                     <br />
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%;">
                         <div class="card-body">
                           <h6 class="f600"><a href="eventpage.php">Project Name</a></h6>
                           <p>Company<br />
                           Location: Cyber Hub Gurugram</p>
                           <div class="row">
                             <div class="col-md-3 col-sm-4 col-6">
                               <p>
                                   Posted On:<br />29 May'19
                               </p>
                             </div>
                             <div class="col-md-3 col-sm-4 col-6">
                               <p>
                                 Duration:<br />1 Year
                               </p>
                             </div>
                             <div style="text-align:right" class="col">
                               <br />
                               <button class="btn btn-primary">View</button>
                             </div>
                           </div>

                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-sm-6">
                     <br />
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%;">
                         <div class="card-body">
                           <h6 class="f600"><a href="eventpage.php">Project Name</a></h6>
                           <p>Company<br />
                           Location: Cyber Hub Gurugram</p>
                           <div class="row">
                             <div class="col-md-3 col-sm-4 col-6">
                               <p>
                                   Posted On:<br />29 May'19
                               </p>
                             </div>
                             <div class="col-md-3 col-sm-4 col-6">
                               <p>
                                 Duration:<br />1 Year
                               </p>
                             </div>
                             <div style="text-align:right" class="col">
                               <br />
                               <button class="btn btn-primary">View</button>
                             </div>
                           </div>

                         </div>
                       </div>
                     </div>
                   </div><div class="col-sm-6">
                     <br />
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%;">
                         <div class="card-body">
                           <h6 class="f600"><a href="eventpage.php">Project Name</a></h6>
                           <p>Company<br />
                           Location: Cyber Hub Gurugram</p>
                           <div class="row">
                             <div class="col-md-3 col-sm-4 col-6">
                               <p>
                                   Posted On:<br />29 May'19
                               </p>
                             </div>
                             <div class="col-md-3 col-sm-4 col-6">
                               <p>
                                 Duration:<br />1 Year
                               </p>
                             </div>
                             <div style="text-align:right" class="col">
                               <br />
                               <button class="btn btn-primary">View</button>
                             </div>
                           </div>

                         </div>
                       </div>
                     </div>
                   </div><div class="col-sm-6">
                     <br />
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%;">
                         <div class="card-body">
                           <h6 class="f600"><a href="eventpage.php">Project Name</a></h6>
                           <p>Company<br />
                           Location: Cyber Hub Gurugram</p>
                           <div class="row">
                             <div class="col-md-3 col-sm-4 col-6">
                               <p>
                                   Posted On:<br />29 May'19
                               </p>
                             </div>
                             <div class="col-md-3 col-sm-4 col-6">
                               <p>
                                 Duration:<br />1 Year
                               </p>
                             </div>
                             <div style="text-align:right" class="col">
                               <br />
                               <button class="btn btn-primary">View</button>
                             </div>
                           </div>

                         </div>
                       </div>
                     </div>
                   </div><div class="col-sm-6">
                     <br />
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%;">
                         <div class="card-body">
                           <h6 class="f600"><a href="eventpage.php">Project Name</a></h6>
                           <p>Company<br />
                           Location: Cyber Hub Gurugram</p>
                           <div class="row">
                             <div class="col-md-3 col-sm-4 col-6">
                               <p>
                                   Posted On:<br />29 May'19
                               </p>
                             </div>
                             <div class="col-md-3 col-sm-4 col-6">
                               <p>
                                 Duration:<br />1 Year
                               </p>
                             </div>
                             <div style="text-align:right" class="col">
                               <br />
                               <button class="btn btn-primary">View</button>
                             </div>
                           </div>

                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <?php
     include("./partials/footer.php"); ?>
     <script>
     $(document).ready(function()
     {
      $("#toggle-button").click(function(){
        if($("#form-container").hasClass("d-none")){
          $("#form-container").removeClass("d-none");
        }
        else {
          $("#form-container").addClass("d-none");
        }
      })
     });
     </script>
   </body>
   </html>
