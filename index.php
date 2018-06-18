<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HER – Command Line Extractors</title>
    <link rel="stylesheet" href="./templates/bootstrap.css">
  </head>
  <body>

    <div class="container">
    
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <img src="HER-Logo-small.png" class="img-responsive center-block" border="0" />
        </div>
      </div>


      <div class="row">
        <div class="col-md-12 col-xs-12 text-center">
          <h1>Bubble Chart</h1>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12 col-xs-12 text-center">
            
          <form>
            <div class="form-group">
              <label for="gfxwidth">Width of viz</label>
              <input type="text" class="form-control" id="gfxwidth" placeholder="500">
            </div>
            <div class="form-group">
              <label for="gfxheight">Height of viz</label>
              <input type="text" class="form-control" id="gfxheight" placeholder="500">
            </div>
            <div class="form-group">
              <label for="dataurl">URL of Data File</label>
              <input type="text" class="form-control" id="dataurl" placeholder="http://" aria-describedby="helpBlock">
              <span id="filehelp" class="help-block">CSV file with "tag" and "weight" fields (String and Number)</span>
            </div>
            <div class="form-group">
              <label for="colorcodegfx">HTML Color Code for Graphics</label>
              <input type="text" class="form-control" id="colorcodegfx" placeholder="#RRGGBB">
            </div>
            <div class="form-group">
              <label for="colorcodetext">HTML Color Code for Text</label>
              <input type="text" class="form-control" id="colorcodetext" placeholder="#RRGGBB">
            </div>
            <div class="form-group">
              <a class="btn btn-default" href="#" id="genbut">Generate</a>
            </div>
          </form>
        </div>
      </div>


        <div class="row">
          <div class="col-md-12 col-xs-12">

            <div id="vizholder"></div>
            
            
          </div>
        </div>



        <div class="row">
          <div class="col-md-12 col-xs-12">

            <form>
              <div class="form-group">
                <label for="SVGexport">SVG Export</label>
                <textarea class="form-control" rows="3" id="SVGexport"></textarea>
              </div>
            </form>
            
            
          </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--script src="https://d3js.org/d3.v4.js"></script-->
    <script src="d3.js"></script>
    <script src="app.js"></script>
  </body>
</html>