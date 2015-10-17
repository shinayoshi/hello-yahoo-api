{include file='header.tpl' title=$title}
<div id="main" role="main" class="container">
  <div id="content">
    <div class="row">
      <div class="page-content col-md-12">
        <h1>{$title}</h1>
        <h2>1. Kousei</h2>
        <form class="form-inline" action="kousei.php" method="post">
          <div class="form-group">
            <label class="sr-only" for="kouseitext">Text</label>
            <input type="text" class="form-control" id="kouseitext" placeholder="sentence" name="sentence" / >
          </div>
          <input class="btn btn-default" type="submit" value="Submit" />
        </form>
      </div>
    </div>
  </div>
</div>
{include file='footer.tpl' copyright=$copyright}
