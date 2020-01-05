<html lang="en">
    <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    
    <div style="width: 50%" class="container">
        <div class="row">
            <button onclick="printContent('print')">Print</button>
				</div>
				<div id="print">
					<div class="row">
							<div class="col-md-4">
								<img src="" class="col-md-12" alt="" id="bookimageviewpreview" class="img-fluid">
							</div>
							<div class="col-md-5">
								<h3 id="title"></h3>
								<span id="subtitle"></span>
								<h5>Year: <strong id="published_year"></strong></h5>
								<h5>Author: <strong id="author"></strong></h5>
								<h5>Publisher: <span id="publisher"></span></h5>
								<p id="description"></p>
							</div>
							<div class="col-md-3">
								<h6>ISBN:       <span id="ISBN"></span></h6>
								<h6>Series:     <span id="series"></span></h6>
								<h6>Edition:    <span id="edition"></span></h6>
								<h6>Pages:      <span id="pages"></span></h6>
								<h6>Binding:    <span id="binding"></span></h6>
								<h6>Quantity:   <span id="quantity"></span></h6>
								<h6>Price:      <span id="price"></span></h6>
								<h6>Language:   <span id="language"></span></h6>
								<h6>Genre:      <span id="genre"></span></h6>
							</div>
					</div>
				</div>
    </div>
    <script type="text/Javascript">
        function printContent(el) {
          var restorepage = document.body.innerHTML;
          var printContent = document.getElementById(el).innerHTML;
          document.body.innerHTML = printContent;
          window.print();
          document.body.innerHTML = restorepage;
          window.close();
        }
      </script>
    </body>
    </html>            

