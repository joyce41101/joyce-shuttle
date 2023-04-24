<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Driver Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link href="../CSS/driver.css" rel="stylesheet" type="text/css"/>
      <link rel="shortcut icon" href="/media/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <body>
        <nav class="navbar navbar-dark sticky-top color-msu">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img id="logo" src="..\media\msu.png" alt="MSU Logo"></a>
            <span class="navbar-brand mb-0 h1 header-text display-1 text-left">Select Bus and Route</span>            
          </div>
        </nav>

        <section id="buses">
            <div id="bus-container" class="container ms-auto">
                <div class="row g-2">
                  <div class="col p-2">
                    <h5 id="bus-title" class="display-6 text-left subtitle">Select Bus</h5>
                  </div>
                </div>
                <div class="row g-2 text-wrap align-middle">
                  <div id="route-col" class="col-12 col-md-6 p-2">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Bus Number:</span>
                        </div>
                        <input id="busNumber" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>
                  </div>
                </div>
            </div>
        </section>

        <section id="routes">
          <div id="route-container" class="container ms-auto">
            <div class="row g-2">
              <div class="col p-2">
                <h5 id="route-title" class="display-6 text-left subtitle">Select Route</h5>
              </div>
            </div>
            <div class="row g-2 text-wrap align-middle">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th class="col-1 text-center" scope="col">Route</th>
                    <th class="col-11" scope="col">Stops</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="text-center" scope="row">1</th>
                    <td>University Hall - Lot 60 - Transit</td>
                  </tr>
                  <tr>
                    <th class="text-center" scope="row">2</th>
                    <td>The Village - Lot 60 - Transit</td>
                  </tr>
                  <tr>
                    <th class="text-center" scope="row">3</th>
                    <td>Russ Hall - Red Hawk Deck - University - Lot 60</td>
                  </tr>
                  <tr>
                    <th class="text-center" scope="row">4</th>
                    <td>All Campus</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="row g-2 text-wrap align-middle">
              <div id="route-col" class="col-12 col-md-6 p-2">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button type="button" onClick="choose(1)" class="btn btn-danger">Route 1</button>
                    <button type="button" onClick="choose(2)" class="btn btn-danger">Route 2</button>
                    <button type="button" onClick="choose(3)" class="btn btn-danger">Route 3</button>
                    <button type="button" onClick="choose(4)" class="btn btn-danger">Route 4</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="submit">
          <div class="container-fluid ms-auto">
            <div class="row gx-3 px-5 text-wrap align-middle subtitle mb-3">
              <form action="driver_submit.php" method="POST" id="register-form">
                <input type="hidden" id="busNumber-submit" name="busNumber" value="">
                <input type="hidden" id="route-submit" name="route" value="">
                <button type="submit" class="btn btn-color-msu btn-lg btn-block">Submit</button>
              </form>
            </div>
          </div>
        </section>

        <!-- Footer section -->
        <section id="footer-section">
            <div class="container text-center">
            <div class="row">
                <div class="col-12">
                <p class="align-middle">&copy Montclair State University 2023</p>
                </div>
            </div>
            </div>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script>
      var route = -1;
      var bus = document.getElementById("busNumber");
      const registerForm = document.getElementById("register-form");
    
      function choose(choice) {
        route = choice;

        //send data into hidden input field so it is accessible in driver_submit.php
        document.getElementById("route-submit").value = route;
      }
    
      registerForm.addEventListener("submit", (event) => {
        document.getElementById("busNumber-submit").value = bus.value;
        if (bus.value == "" || route == -1) {
          event.preventDefault();
          alert("Please fill in both fields");
        }
      });
    </script>
  </body>
</html>