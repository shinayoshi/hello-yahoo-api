/* エラー文字列の生成 */
function errorHandler(args) {
    var error;
    // errorThrownはHTTP通信に成功したときだけ空文字列以外の値が定義される
    if (args[2]) {
        try {
            // JSONとしてパースが成功し、且つ {"error":"..."} という構造であったとき
            // (undefinedが代入されるのを防ぐためにtoStringメソッドを使用)
            error = $.parseJSON(args[0].responseText).error.toString();
        } catch (e) {
            // パースに失敗した、もしくは期待する構造でなかったとき
            // (PHP側にエラーがあったときにもデバッグしやすいようにレスポンスをテキストとして返す)
            error = 'parsererror(' + args[2] + '): ' + args[0].responseText;
        }
    } else {
        // 通信に失敗したとき
        error = args[1] + '(HTTP request failed)';
    }
    return error;
}

// DOMを全て読み込んだあとに実行される
$(function () {
    // 「#execute」をクリックしたとき
    $('#execute').click(function (e) {
        // Ajax通信を開始する
        $.ajax({
            url: 'libs/yapi.php',
            type: 'post', // getかpostを指定(デフォルトは前者)
            dataType: 'xml', // 「json」を指定するとresponseがJSONとしてパースされたオブジェクトになる
            data: { // 送信データを指定(getの場合は自動的にurlの後ろにクエリとして付加される)
                sentence: $('#parsetext').val()
            }
        })
        // ・ステータスコードは正常で、dataTypeで定義したようにパース出来たとき
        .done(function (response) {
	    $('#result_parse').empty();
	    $('<p>'+$('#parsetext').val()+'</p>').appendTo('#result_parse');
	    $('<table id="result_table" class="table table-striped">').appendTo('#result_parse');
	    $('<tr>' +
	      '<th>Surface</th>' +
	      '<th>Reading</th>' +
	      '<th>Pos</th>' +
	      '</tr>'
	     ).appendTo('#result_table');
	    $(response).find('word').each(function() {
		var $surface = $(this).find('surface').text();
		var $reading = $(this).find('reading').text();
		var $pos = $(this).find('pos').text();
		$('<tr>' +
		  '<td>'+$surface+'</td>' +
		  '<td>'+$reading+'</td>' +
		  '<td>'+$pos+'</td>' +
		  '</tr>'
		 ).appendTo('#result_table');
	    });
	    $('</table>').appendTo('#result_parse');
        })
        // ・サーバからステータスコード400以上が返ってきたとき
        // ・ステータスコードは正常だが、dataTypeで定義したようにパース出来なかったとき
        // ・通信に失敗したとき
        .fail(function () {
            // jqXHR, textStatus, errorThrown と書くのは長いので、argumentsでまとめて渡す
            // (PHPのfunc_get_args関数の返り値のようなもの)
            $('#result_kousei').text(errorHandler(arguments));
        });
    });
    $('#parsetext').on("keypress", function(e){
	if (e.keyCode === 13) {
	    $('#execute').click();
	    return e.which !== 13;
	}
    });
});
