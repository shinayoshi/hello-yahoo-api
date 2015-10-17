{include file='header.tpl' title=$title}
<div id="main" role="main" class="container">
  <div id="content">
    <div class="row">
      <div class="page-content col-md-12">
        <h1>{$title}</h1>
        <h2>1. Kousei</h2>
        <p>{$req_text}</p>
        <pre>
         {$res_kousei}
        </pre>
      </div>
    </div>
  </div>
</div>
{include file='footer.tpl' copyright=$copyright}
