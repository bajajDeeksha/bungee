<html>
<head>
    <!-- Meta Values -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Dashboard for Self Checkin Machines">
    <meta name="author" content="Bungee Japan">

    <title>SCM - Dashboard</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/customize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

</head>
<body>

  <!-- Header -->
  <div class="mishead">
      <div class="container">
          <h1 class="page-head text-center">SCM Overview</h1>
      </div>
  </div>

  <!-- Site Status -->
  <section id="site-status">
    <div class="container inner-sm">
        <div class="row">
            <div class="col-md-6">
                <div class="site">
                    <div class="text-center name"><span>Minakami<span></div>
                    <div class="machines">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Number</th>
                                <th>Status</th>
                                <th>Condition</th>
                                <th>Up-time</th>
                                <th>No. of restarts</th>
                                <th>Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center" >SCM-1</td>
                                <td class="text-center"><span class="label label-success" data-toggle="modal" data-target="#change">Ok</span></td>
                                <td class="text-center"><i class="fa fa-lg fa-lightbulb-o faa-tada animated green" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            <tr>
                                <td class="text-center">SCM-2</td>
                                <td class="text-center"><span class="label label-success" data-toggle="modal" data-target="#change">Ok</span></td>
                                <td class="text-center"><i class="fa fa-lg fa-lightbulb-o faa-tada animated green" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            <tr>
                                <td class="text-center">SCM-3</td>
                                <td class="text-center"><span class="label label-success" data-toggle="modal" data-target="#change">Ok</span></td>
                                <td class="text-center"><i class="fa fa-lg fa-lightbulb-o faa-tada animated green" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="site">
                    <div class="text-center name"><span>Sarugakyo<span></div>
                    <div class="machines">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Number</th>
                                <th>Status</th>
                                <th>Condition</th>
                                <th>Up-time</th>
                                <th>No. of restarts</th>
                                <th>Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center" >SCM-1</td>
                                <td class="text-center"><span class="label label-success" data-toggle="modal" data-target="#change">Ok</span></td>
                                <td class="text-center"><i class="fa fa-lg fa-lightbulb-o faa-tada animated green" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            <tr>
                                <td class="text-center">SCM-2</td>
                                <td class="text-center"><span class="label label-success" data-toggle="modal" data-target="#change">Ok</span></td>
                                <td class="text-center"><i class="fa fa-lg fa-lightbulb-o faa-tada animated green" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            <tr>
                                <td class="text-center">SCM-3</td>
                                <td class="text-center"><span class="label label-success" data-toggle="modal" data-target="#change">Ok</span></td>
                                <td class="text-center"><i class="fa fa-lg fa-lightbulb-o faa-tada animated green" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="site">
                    <div class="text-center name"><span>Ryujin<span></div>
                    <div class="machines">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Number</th>
                                <th>Status</th>
                                <th>Condition</th>
                                <th>Up-time</th>
                                <th>No. of restarts</th>
                                <th>Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center" >SCM-1</td>
                                <td class="text-center"><span class="label label-success" data-toggle="modal" data-target="#change">Ok</span></td>
                                <td class="text-center"><i class="fa fa-lg fa-lightbulb-o faa-tada animated green" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            <tr>
                                <td class="text-center">SCM-2</td>
                                <td class="text-center"><span class="label label-danger tool-ch" data-tooltip="tooltip" title="Motherboard gone slow, need replacement" data-toggle="modal" data-target="#change">Error</span></td>
                                <td class="text-center"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            <tr>
                                <td class="text-center">SCM-3</td>
                                <td class="text-center"><span class="label label-danger tool-ch" data-tooltip="tooltip" title="Ticket printer dead, needs replacement" data-toggle="modal" data-target="#change">Error</span></td>
                                <td class="text-center"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="site">
                    <div class="text-center name"><span>Fuji<span></div>
                    <div class="machines">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Number</th>
                                <th>Status</th>
                                <th>Condition</th>
                                <th>Up-time</th>
                                <th>No. of restarts</th>
                                <th>Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center" >SCM-1</td>
                                <td class="text-center"><span class="label label-success" data-toggle="modal" data-target="#change">Ok</span></td>
                                <td class="text-center"><i class="fa fa-lg fa-lightbulb-o faa-tada animated green" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            <tr>
                                <td class="text-center">SCM-2</td>
                                <td class="text-center"><span class="label label-success" data-toggle="modal" data-target="#change">Ok</span></td>
                                <td class="text-center"><i class="fa fa-lg fa-lightbulb-o faa-tada animated green" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            <tr>
                                <td class="text-center">SCM-3</td>
                                <td class="text-center"><span class="label label-danger tool-ch" data-tooltip="tooltip" title="Dead power source, needs replacement" data-toggle="modal" data-target="#change">Error</span></td>
                                <td class="text-center"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="site">
                    <div class="text-center name"><span>Itsuki<span></div>
                    <div class="machines">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Number</th>
                                <th>Status</th>
                                <th>Condition</th>
                                <th>Up-time</th>
                                <th>No. of restarts</th>
                                <th>Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center" >SCM-1</td>
                                <td class="text-center"><span class="label label-danger tool-ch" data-tooltip="tooltip" title="Printer and scale not working" data-toggle="modal" data-target="#change">Error</span></td>
                                <td class="text-center"><i class="fa fa-lightbulb-o faa-vertical" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            <tr>
                                <td class="text-center">SCM-2</td>
                                <td class="text-center"><span class="label label-danger tool-ch" data-tooltip="tooltip" title="Printer not working" data-toggle="modal" data-target="#change">Error</span></td>
                                <td class="text-center"><i class="fa fa-lightbulb-o faa-vertical" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            <tr>
                                <td class="text-center">SCM-3</td>
                                <td class="text-center"><span class="label label-danger tool-ch" data-tooltip="tooltip" title="Printer and scale not working" data-toggle="modal" data-target="#change">Error</span></td>
                                <td class="text-center"><i class="fa fa-lightbulb-o faa-vertical" aria-hidden="true"></i></td>
                                <td class="text-center" >6 hrs</td>
                                <td class="text-center" >2</td>
                                <td class="text-center" >---</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="site">
                    <div class="text-center name"><span>Kaiun<span></div>
                    <div class="machines">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Number</th>
                                <th>Status</th>
                                <th>Condition</th>
                                <th>Up-time</th>
                                <th>No. of restarts</th>
                                <th>Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center" >SCM-1</td>
                                <td class="text-center"><span class="label label-primary" data-toggle="modal" data-target="#change">N/A</span></td>
                                <td class="text-center"><i class="fa fa-lightbulb-o faa-vertical" aria-hidden="true"></i></td>
                                <td class="text-center" >---</td>
                                <td class="text-center" >---</td>
                                <td class="text-center" >---</td>
                            </tr>
                            <tr>
                                <td class="text-center">SCM-2</td>
                                <td class="text-center"><span class="label label-primary" data-toggle="modal" data-target="#change">N/A</span></td>
                                <td class="text-center"><i class="fa fa-lightbulb-o faa-vertical" aria-hidden="true"></i></td>
                                <td class="text-center" >---</td>
                                <td class="text-center" >---</td>
                                <td class="text-center" >---</td>
                            </tr>
                            <tr>
                                <td class="text-center">SCM-3</td>
                                <td class="text-center"><span class="label label-primary" data-toggle="modal" data-target="#change">N/A</span></td>
                                <td class="text-center"><i class="fa fa-lightbulb-o faa-vertical" aria-hidden="true"></i></td>
                                <td class="text-center" >---</td>
                                <td class="text-center" >---</td>
                                <td class="text-center" >---</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- Status Modal -->
  <div class="modal fade" id="change" tabindex="-1" role="dialog" aria-labelledby="change" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <h4 class="modal-title" id="change">Minakami</h4>
            </div>
            <div class="modal-body">
                <section id="status">
                    <div class="row">
                        <div class="form-group"><label class="col-xs-12 control-label" style="margin-bottom:20px;"> Change Status of the machine</label>
                            <div class="col-xs-4">
                                <label><input type="radio" name="test" value="ok"> <i></i> OK </label>
                            </div>
                            <div class="col-xs-4">
                                <label><input type="radio" name="test" value="error"> <i></i> Error </label>
                            </div>
                            <div class="col-xs-4">
                                <label><input type="radio" name="test" value="N/A"> <i></i> N/A </label>
                            </div>
                        </div>
                        <div style="display:none" id="reason" class="error-form">
                            <div class="form-group">
                                <label for="res">Reason for Error:</label>
                                <input type="text" class="form-control" id="res">
                            </div>
                            <div class="form-group">
                                <label for="comment">Description:</label>
                                <textarea class="form-control" rows="5" id="desc"></textarea>
                            </div>
                        </div>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
            </div>

        </div>
    </div>
  </div>

  <!-- Daily Report reading from text files -->
  <div id="daily-report" style="margin-bottom: 100px;">
    <div class="container">
      <h2 class="text-center"> Today's Update </h2>
      <div class="text-right">
         <button style="margin-bottom: 10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#report">Update Today's Report</button>
      </div>
      <pre id="fileDisplayUpdate"></pre>
      <h2 class="text-center"> Site Visit Schedule </h2>
      <div class="text-right">
         <button style="margin-bottom: 10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#visit">Update Site Visit Schedule</button>
      </div>
      <pre id="fileDisplayArea"></pre>
    </div>
  </div>

  <!-- Modal for daily report-->
  <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="change" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <h4 class="modal-title text-center" id="change">Update Today's Report</h4>
            </div>
            <div class="modal-body">
                <section id="update">
                    <div class="row">
                        <form class="form-group" method="POST">
                          <div id="reason" class="error-form">
                              <div class="form-group">
                                  <label for="res">Todays Update :</label>
                                  <textarea name="update1" class="form-control" rows="7" id="desc"></textarea>
                              </div>
                              <div class="text-center">
                                <button type="submit" name="submit1" class="btn btn-primary">Save Changes</button>
                              </div>
                          </div>
                        </form>
                      </div>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
  </div>

  <?php 
    if (isset($_POST['submit1'])) {
        $txt1 = $_POST['update1'] ;
        $date1 = date('M-d-Y'."\n");
        $myfile = fopen("report.txt", "w+") or die("Unable to open file!");
        fwrite($myfile, $date1);
        fwrite($myfile, $txt1);
        fclose($myfile);
    }
  ?>

  <!-- Modal for daily report-->
  <div class="modal fade" id="visit" tabindex="-1" role="dialog" aria-labelledby="change" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <h4 class="modal-title text-center" id="change">Update Today's Report</h4>
            </div>
            <div class="modal-body">
                <section id="update">
                    <div class="row">
                        <form class="form-group" method="POST">
                          <div id="reason" class="error-form">
                            <div class="form-group">
                                <label for="comment">Site Visit Schedule :</label>
                                <textarea name="update2" class="form-control" rows="7" id="desc"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit2" class="btn btn-primary">Save Changes</button>
                            </div>
                          </div>
                        </form>
                      </div>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
  </div>

   <?php 
    if (isset($_POST['submit2'])) {
        $txt2 = $_POST['update2'] ;
        $date2 = date('M-d-Y'."\n");
        $myfile = fopen("visit.txt", "w+") or die("Unable to open file!");
        fwrite($myfile, $date2);
        fwrite($myfile, $txt2);
        fclose($myfile);
    }
  ?>

  <!-- Script to read file from txt file to HTML -->
  <script>
    var fileDisplayUpdate = document.getElementById('fileDisplayUpdate');
    var fileDisplayArea = document.getElementById('fileDisplayArea');

    function readTextFile1(file)
    {
        var rawFile = new XMLHttpRequest();
        rawFile.open("GET", file, false);
        rawFile.onreadystatechange = function ()
        {
            if(rawFile.readyState === 4)
            {
                console.log("hi");
                if(rawFile.status === 200 || rawFile.status == 0)
                {
                    console.log("bye");
                    var allText = rawFile.responseText;
                    fileDisplayUpdate.innerText = allText;

                }
            }
        }
        rawFile.send(null);
    }
    function readTextFile2(file)
    {
        var rawFile = new XMLHttpRequest();
        rawFile.open("GET", file, false);
        rawFile.onreadystatechange = function ()
        {
            if(rawFile.readyState === 4)
            {
                if(rawFile.status === 200 || rawFile.status == 0)
                {
                    var allText = rawFile.responseText;
                    fileDisplayArea.innerText = allText;
                }
            }
        }
        rawFile.send(null);
    }
    readTextFile1("report.txt");
    readTextFile2("visit.txt");
  </script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>

  <script src="js/plugins/iCheck/icheck.min.js"></script>

</body>
</html>
