<?php
$title = array(
    array('제품명(규격)', '판매금액',array('role' => 'annotation'),'판매건수', array('role' => 'annotation')),
    array('', 0,'',0,'') //이거안쓰면 Data column(s) for axis #0 cannot be of type string 에러남..
);

foreach($rows as $k=>$val)
{
    $cnt = $val['CNT'];
    $total = number_format($val['GRANDTOTAL']);
    $addrow[$k] = array($val['PUMNAME'].'('.$val['PUMGYU'].')', $val['GRANDTOTAL'],$total, $cnt, $cnt);
}
$data = array_merge($title, $addrow);

?>



<script src="//www.google.com/jsapi"></script>
<script>

var data = <?= json_encode($data) ?>;

var options = {
        title: "제품별 매출통계 (단위: 원)",
        width: 1000,
        height: 2000,
        bar: {groupWidth: "60%"},
        legend : {position:'top'},
        logScale : true
      };
google.load('visualization', '1.0', {'packages':['corechart']});
google.setOnLoadCallback(function() {
  var chart = new google.visualization.BarChart(document.querySelector('#chart_div'));
  chart.draw(google.visualization.arrayToDataTable(data), options);
});

</script>
