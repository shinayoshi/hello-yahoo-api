<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hello, Yahoo! API</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="wrap">

      <div id="main" role="main" class="container">
        <div id="content">
          <div class="row">
            <div class="page-content col-md-12">
              <h1>Hello, Yahoo! API</h1>
              <h2>Parse</h2>
              <form class="form-inline">
                <div class="form-group">
                  <label class="sr-only" for="parsetext">Text</label>
                  <input type="text" class="form-control" id="parsetext" placeholder="sentence" name="sentence" />
                </div>
                <input class="btn btn-default" type="button" id="execute" value="Submit" />
              </form>
              <hr />
	      <h2>Result</h2>
	      <div id="result_parse"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <hr />
	  </div>
        </div>
      </div>

      <footer role="contentinfo">
        <div class="container">
          <p class="text-muted credits">
            Copyright (c) 2015 shinayoshi
	    <!-- Begin Yahoo! JAPAN Web Services Attribution Snippet -->
            <a href="http://developer.yahoo.co.jp/about">
            <img src="http://i.yimg.jp/images/yjdn/yjdn_attbtn1_125_17.gif" title="Webサービス by Yahoo! JAPAN" alt="Web Services by Yahoo! JAPAN" width="125" height="17" border="0" style="margin:15px 15px 15px 15px"></a>
            <!-- End Yahoo! JAPAN Web Services Attribution Snippet -->
	  </p>
        </div>
      </footer>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/yapi.js"></script>
  </body>
</html>

