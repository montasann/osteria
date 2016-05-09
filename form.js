var num = $('#num').value;
const tax=1.00;//実行の過程で値が変わらないものはconst(定数として宣言しておく。)
  var ryoukin = [8800,10500,12000,9800];//配列　array
$('#runch').click(function(){//ランチをくりっく
	$(time_run).show(800); $('#time_din').hide(500);
});
$('#diner').click(function(){//ディナーをくりっく
	$(time_din).show(800); $('#time_run').hide(500);
});
//BOXの入力値を変数に代入
function numChk(){
  num = document.frm.num.value;
 if( !num.match(/^[0-9]+$/)){
 alert("数字を入れてええ");
 }
 if( num<1 || num>12 )
 
 {alert("1~12を入力してください");}
 
 }
 
 $('#total_chk').click(function(){
//セレクトめにゅーで選んだ値を取得するための文

if($('#runch').prop("checked")){//ランチがオンなら
 var menu = $('select[name="cose_runch"] option:selected').val();}
else if($('#diner').prop('checked')){//ディナがオンなら
 var menu = $('select[name="cose_diner"] option:selected').val();}
else{alert("ランチかディナーを選んでください");
}

$("#total_plice").val("¥"+(ryoukin[menu]*num*tax).toLocaleString());//BOXの値が選んだ値になる//BOXの値が選んだ値になる
});


function addChk(){
 var add = document.frm.add.value;
  if (!add.match(/[0-9 ０-９]/)){
  	alert("番地を入力せよ");	
  	return false;
  	}else{
		return true;
	}
}

function mailChk(){
var flag = 0;
// 設定開始（チェックする項目を設定してください）
if(!document.frm.email.value.match(/.+@.+\..+/)){flag = 1;}
// 設定終了
if(flag){window.alert('メールアドレスが正しくありません');}
}

 function tellChk(){
 var tell = document.frm.tell.value;
  if (!tell.match(/^0\d{1,4}-\d{1,4}-\d{3,4}$/) ) {
 alert("正しい電話番号を入れてください");
 }
}

 function kanaChk(){
 var namekana = document.frm.namekana.value;
  if (!namekana.match(/^[ァ-ン ｧ-ﾝﾞﾟ]+$/) ) {
 alert("カタカナを入れてください。");
 }
}

 document.onkeypress = enter;
    function enter(){
        if( window.event.keyCode == 13 ){
            return false;
        }
    }